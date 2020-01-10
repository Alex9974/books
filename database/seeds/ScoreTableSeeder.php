<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Book;
use App\Score; 


class ScoreTableSeeder extends Seeder
{
    private $faker; 

    public function __construct(Faker $faker){
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $references = ['MATH', 'ALGO', 'FRAM'];
        $books = Book::all();
        foreach($books as $book) {
            $book->ref=$references[rand(0,2)];
            $score=new Score;
            $score->vote = $this->faker->numberBetween($min = 5, $max = 200);
            $book->price = $this->faker->randomFloat(1, 10, 40);
            $score->book()->associate($book);
            $score->save();
            $book->save();
        }

    }
}
