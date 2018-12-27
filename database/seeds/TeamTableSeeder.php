<?php

use App\Team;
use Illuminate\Database\Seeder;

/**
 * Class TeamTableSeeder
 */
class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = Team::updateOrCreate(
            ["name" => "Team-A"],
            ["name" => "Team-A"]
        );
        $team->players()->create([
            'first_name' => 'Amrit',
            'last_name'  => 'Tamang',
        ]);
    }
}
