<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;

class CreateContent extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'create:content';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Creates dummy content';

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {
    $titles = [
      'Umbau',
      'Neubau',
      'Renovation'
    ];

    $types = [
      'Einfamilienhaus',
      'Mehrfamilienhaus',
      'Bürogebäude',
      'Doppel-EFH',
      'Mehrzweckhalle',
      'Schulhaus'
    ];

    $cities = [
      'Winterthur', 'Zürich', 'Fehraltorf', 'Pfäffikon/ZH', 'Hittnau', 'Volketswil', 'Effretikon', 'Wila', 'Kollbrunn', 'Oberwinterthur', 'Rikon'
    ];

    $years = [2019, 2020, 2021, 2022];

    $images = [
      'rebo-dummy-6.jpg',
      'rebo-dummy-1.jpg',
      'rebo-dummy-2.jpg',
      'rebo-dummy-3.jpg',
      'rebo-dummy-4.jpg',
      'rebo-dummy-5.jpg',
    ];

    for($i = 0; $i < 5; $i++)
    {

      echo 
      "
      ---
      id: ".\Str::uuid()."
      blueprint: reference
      title: '".$titles[mt_rand(0,2)]." ".$types[mt_rand(0,4)]."'
      subtitle: ".$cities[mt_rand(0,10)]."
      year: ".$years[mt_rand(0,3)]."
      preview_image: media/references/".$images[mt_rand(0,5)]."
      hero: media/references/".$images[mt_rand(0,5)]."
      updated_by: 1f523840-e2ac-4673-87a9-d986daf11f5c
      updated_at: 1671799914
      ---
      ";
    }
  }
}
