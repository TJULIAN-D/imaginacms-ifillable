<?php

namespace Modules\Ifillable\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Ifillable\Database\Seeders\ClearIgnoredFieldsSeeder;

class IfillableDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(ClearIgnoredFieldsSeeder::class);
  }
}
