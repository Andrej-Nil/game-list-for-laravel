<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeveloperSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */



  public function run() {
    for($i = 0; $i<10; $i++){
        DB::table('developers')->insert([
      'title' => Str::random(10),
      'description' => Str::random(10),
    ]);
  }
    }

}
