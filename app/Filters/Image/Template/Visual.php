<?php
namespace App\Filters\Image\Template;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Visual implements FilterInterface
{
 
  public function applyFilter(Image $image)
  {
    return $image->fit(1600, 660, function ($constraint) {
      $constraint->aspectRatio();
      $constraint->upsize();
    });
  }
}