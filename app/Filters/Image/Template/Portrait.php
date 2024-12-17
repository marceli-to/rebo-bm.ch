<?php
namespace App\Filters\Image\Template;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Portrait implements FilterInterface
{  
  public function applyFilter(Image $image)
  {
    return $image->fit(504, 700, function ($constraint) {
      $constraint->aspectRatio();
      $constraint->upsize();
    });
  }
}