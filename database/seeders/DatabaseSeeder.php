<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\State;
use App\Models\Stateful;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@admin.test',
             'password' => Hash::make('admin1234'),
         ]);

         $s = Stateful::create([]);
        State::create(['stateful_id' => $s->id]);
        State::create(['stateful_id' => $s->id,])->delete();
        State::create(['stateful_id' => $s->id])->delete();
    }
}
