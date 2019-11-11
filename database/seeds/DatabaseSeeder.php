<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(HealthinsurancesTableSeeder::class);
        $this->call(LocalidadesTableSeeder::class);
        $this->call(PathologiesTableSeeder::class);
        $this->call(PensionsTableSeeder::class);
        $this->call(ResidencesTableSeeder::class);
        $this->call(SchoolingsTableSeeder::class);
        $this->call(TreatmentsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
