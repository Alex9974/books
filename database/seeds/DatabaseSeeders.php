<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ScoreTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        // DB::table('books')-> insert([
        //     ['title' => 'Titre num 1',
        //     'description' => 'Coucou Toto'],
        //     ['title' => 'Titre num 2',
        //     'description' => 'Coucou Toto2'],
        //     ['title' => 'Titre num 3',
        //     'description' => 'Coucou Toto3'],
        //     ['title' => 'Titre num 4',
        //     'description' => 'Coucou Toto4'],
        //     ['title' => 'Titre num 5',
        //     'description' => 'Coucou Toto5'],
        //     ['title' => 'Titre num 6',
        //     'description' => 'Coucou Toto6'],
        //     ['title' => 'Titre num 7',
        //     'description' => 'Coucou Toto7']
        // ]);
    }
}
