<?php
namespace App\Tasks;

class FixPermissions
{
  public function __invoke()
  {
    // Call artisan command fix:permissions
    $this->call('fix:permissions');
  }
}