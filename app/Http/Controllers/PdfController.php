<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Statamic\Facades\Collection;
use Statamic\Facades\Entry;
use App\Services\Pdf\Pdf;

class PdfController extends Controller
{
  protected $headers = [
    'Content-Type: application/pdf',
    'Cache-Control: no-store, no-cache, must-revalidate',
    'Expires: Sun, 01 Jan 2014 00:00:00 GMT',
    'Pragma: no-cache'
  ];

  public function index($id = NULL)
  { 
    $entry = Entry::query()
      ->where('collection', 'references')
      ->where('id', $id)
      ->first();

    // Copy the hero image to temp folder
    $sourcePath = public_path('assets/' . $entry->hero->path);
    $destinationPath = public_path('assets/_temp/'. basename($entry->hero));
    if (!File::exists($destinationPath))
    {
      File::copy($sourcePath, $destinationPath);
    }
    
    // Copy all images to temp folder
    foreach($entry->gallery as $gallery)
    {
      if ($gallery->images)
      {
        foreach($gallery->images as $img)
        {
          $sourcePath = public_path('assets/' . $img->path);
          $destinationPath = public_path('assets/_temp/'. basename($img));
          if (!File::exists($destinationPath))
          {
            File::copy($sourcePath, $destinationPath);
          }
        }
      }
    }

    $pdf = (new Pdf())->create([
      'data' => $entry,
      'view' => 'reference',
      'name' => 'rebobau_referenz_'.$entry->slug.'.pdf'
    ]);
    return response()->download($pdf['path'], $pdf['name'], $this->headers);
  }
}