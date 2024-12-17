<?php
namespace App\Filters\Image\Template;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Landscape implements FilterInterface
{  
  public function applyFilter(Image $image)
  {
    return $image->fit(1000, 545, function ($constraint) {
      $constraint->aspectRatio();
      $constraint->upsize();
    });
  }
}