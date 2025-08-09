<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'title' => 'The Social Network',
                'director' => 'David Fincher',
                'added_by' => 'Frontend Learning',
                'description' => 'The story of Facebook creation. Inspirasi untuk para developer muda!',
                'release_year' => 2010,
                'genre' => 'Drama',
                'duration' => 120
            ],
            [
                'title' => 'Jobs',
                'director' => 'Joshua Michael Stern',
                'added_by' => 'Frontend Learning',
                'description' => 'Biografi Steve Jobs dan revolusi Apple. Design thinking at its finest.',
                'release_year' => 2013,
                'genre' => 'Biography',
                'duration' => 128
            ],
            [
                'title' => 'Ex Machina',
                'director' => 'Alex Garland',
                'added_by' => 'Frontend Learning',
                'description' => 'AI dan future of technology. UI design yang futuristik dan minimalis.',
                'release_year' => 2014,
                'genre' => 'Sci-Fi',
                'duration' => 108
            ],
            [
                'title' => 'Her',
                'director' => 'Spike Jonze',
                'added_by' => 'Frontend Learning',
                'description' => 'Love story with AI. Interface design yang warm dan human-centered.',
                'release_year' => 2013,
                'genre' => 'Romance',
                'duration' => 126
            ],
            [
                'title' => 'The Imitation Game',
                'director' => 'Morten Tyldum',
                'added_by' => 'Frontend Learning',
                'description' => 'Alan Turing story. Foundation of modern computing dan problem solving.',
                'release_year' => 2014,
                'genre' => 'Historical',
                'duration' => 114
            ],
            [
                'title' => 'Minority Report',
                'director' => 'Steven Spielberg',
                'added_by' => 'Frontend Learning',
                'description' => 'Future UI interactions. Gesture-based interface yang revolusioner.',
                'release_year' => 2002,
                'genre' => 'Sci-Fi',
                'duration' => 145
            ],
            [
                'title' => 'TRON: Legacy',
                'director' => 'Joseph Kosinski',
                'added_by' => 'Frontend Learning',
                'description' => 'Digital world visualization. Neon UI dan cyber aesthetics.',
                'release_year' => 2010,
                'genre' => 'Sci-Fi',
                'duration' => 125
            ],
            [
                'title' => 'Ready Player One',
                'director' => 'Steven Spielberg',
                'added_by' => 'Frontend Learning',
                'description' => 'Virtual reality dan gaming culture. UI dalam virtual environments.',
                'release_year' => 2018,
                'genre' => 'Adventure',
                'duration' => 140
            ]
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
