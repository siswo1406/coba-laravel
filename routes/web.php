<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Siswo Sukmo Pamungkas',
        'email' => 'siswo1406@gmail.com',
        'image' => 'siswo.jpg'
    ]);
});

Route::get('/blog', function () {
    $blogPosts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Siswo Sukmo Pamungkas',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi labore eligendi totam quis, autem enim ut! Nobis vel necessitatibus inventore eos, eius voluptas ad rerum maxime laudantium aspernatur, nostrum reiciendis quisquam nulla doloremque veniam, iure eligendi ut dicta dignissimos aperiam tenetur obcaecati vero sit soluta. Corrupti accusamus, facere in, fuga quisquam fugit deserunt ex recusandae magnam velit architecto iure consequuntur quas reprehenderit tempora sint, eligendi debitis odit unde nesciunt! Similique dignissimos doloribus dolorem sit laborum perferendis mollitia modi sequi voluptatibus?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Inu Bayu Aji',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, doloremque explicabo in iure sed nihil amet perferendis dolor. Beatae aliquid corrupti perspiciatis nisi enim illo cum dolores earum repellat, molestias rerum repellendus minima nihil officia rem vero ullam, eos voluptatibus odio pariatur facilis qui iusto. Autem sit quasi itaque recusandae commodi placeat quos beatae explicabo incidunt, veritatis soluta ut omnis nulla aliquid excepturi voluptatum in molestiae aliquam ratione mollitia, dicta cumque! Reiciendis, cum rerum id praesentium doloribus animi quia enim asperiores accusantium numquam ad ex dolore explicabo ratione totam molestiae voluptatibus, nostrum iusto, corrupti sapiente consequatur laborum aut! Delectus, minus.'
        ]
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blogPosts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blogPosts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Siswo Sukmo Pamungkas',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi labore eligendi totam quis, autem enim ut! Nobis vel necessitatibus inventore eos, eius voluptas ad rerum maxime laudantium aspernatur, nostrum reiciendis quisquam nulla doloremque veniam, iure eligendi ut dicta dignissimos aperiam tenetur obcaecati vero sit soluta. Corrupti accusamus, facere in, fuga quisquam fugit deserunt ex recusandae magnam velit architecto iure consequuntur quas reprehenderit tempora sint, eligendi debitis odit unde nesciunt! Similique dignissimos doloribus dolorem sit laborum perferendis mollitia modi sequi voluptatibus?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Inu Bayu Aji',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, doloremque explicabo in iure sed nihil amet perferendis dolor. Beatae aliquid corrupti perspiciatis nisi enim illo cum dolores earum repellat, molestias rerum repellendus minima nihil officia rem vero ullam, eos voluptatibus odio pariatur facilis qui iusto. Autem sit quasi itaque recusandae commodi placeat quos beatae explicabo incidunt, veritatis soluta ut omnis nulla aliquid excepturi voluptatum in molestiae aliquam ratione mollitia, dicta cumque! Reiciendis, cum rerum id praesentium doloribus animi quia enim asperiores accusantium numquam ad ex dolore explicabo ratione totam molestiae voluptatibus, nostrum iusto, corrupti sapiente consequatur laborum aut! Delectus, minus.'
        ]
    ];

    $newPost = [];
    foreach ($blogPosts as $post) {
        if ($post['slug'] === $slug) {
            $newPost = $post;
        }
    }

    return view('post', [
        'title' => 'Detail Post',
        'post' => $newPost
    ]);
});
