<?php

namespace Modules\MediumCompanyModule\Database\Seeders;

use Illuminate\Database\Seeder;

class MediumCompanyModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $this->call([CategoryQuestionsSeeder::class]);
    }
}
