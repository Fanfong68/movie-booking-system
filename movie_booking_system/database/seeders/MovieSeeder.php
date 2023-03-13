<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'name'=>"Air Force",
            'poster'=>"assets/movie_img0.jpg",
            'genre'=>"cincai",
            'duration'=>"1 hr 30 mins",
            'language'=>"en",
            'desc'=>"shushushu",
            'nowShowing'=>true,
        ]);
    }
}
