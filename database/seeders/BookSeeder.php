<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laravel: Up & Running',
                'author' => 'Matt Stauffer',
                'added_by' => 'Frontend Learning',
                'description' => 'A framework for building modern PHP applications. Panduan lengkap untuk memahami Laravel dari dasar hingga mahir.',
                'publication_year' => 2019,
                'genre' => 'Programming'
            ],
            [
                'title' => 'CSS: The Definitive Guide',
                'author' => 'Eric A. Meyer',
                'added_by' => 'Frontend Learning',
                'description' => 'Master CSS dengan panduan komprehensif ini. Pelajari cara styling yang powerful dan responsive.',
                'publication_year' => 2020,
                'genre' => 'Web Development'
            ],
            [
                'title' => 'JavaScript: The Good Parts',
                'author' => 'Douglas Crockford',
                'added_by' => 'Frontend Learning',
                'description' => 'Explore the elegant subset of JavaScript. Buku yang wajib dibaca untuk frontend developer.',
                'publication_year' => 2008,
                'genre' => 'Programming'
            ],
            [
                'title' => 'Responsive Web Design',
                'author' => 'Ethan Marcotte',
                'added_by' => 'Frontend Learning',
                'description' => 'Belajar membuat website yang adaptif di semua device. Mobile-first approach explained!',
                'publication_year' => 2014,
                'genre' => 'Web Design'
            ],
            [
                'title' => 'Don\'t Make Me Think',
                'author' => 'Steve Krug',
                'added_by' => 'Frontend Learning',
                'description' => 'A common sense approach to web usability. UI/UX principles yang mudah dipahami.',
                'publication_year' => 2014,
                'genre' => 'UX Design'
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'added_by' => 'Frontend Learning',
                'description' => 'A handbook of agile software craftsmanship. Menulis code yang clean dan maintainable.',
                'publication_year' => 2008,
                'genre' => 'Programming'
            ],
            [
                'title' => 'HTML and CSS: Design and Build Websites',
                'author' => 'Jon Duckett',
                'added_by' => 'Frontend Learning',
                'description' => 'Panduan visual untuk belajar HTML dan CSS. Perfect untuk frontend pemula!',
                'publication_year' => 2011,
                'genre' => 'Web Development'
            ],
            [
                'title' => 'Atomic Design',
                'author' => 'Brad Frost',
                'added_by' => 'Frontend Learning',
                'description' => 'Creating design systems with atomic design methodology. Component-based thinking approach.',
                'publication_year' => 2016,
                'genre' => 'Design Systems'
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
