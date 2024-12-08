<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {

        return  [
            [

                'title' => 'Project 1',
                'author' => 'tegarpratama',
                'slug' => 'project-1',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. Accusantium, consequatur. Nesciunt, neque. Quisquam, quae. Accusantium, consequatur. Nesciunt, neque. Quisquam, quae. Accusantium, consequatur. Nesciunt, neque.'
            ],
            [

                'title' => 'Project 2',
                'author' => 'tegarpratama 12',
                'slug' => 'project-2',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque amet impedit aliquid alias omnis molestiae deleniti repellendus est rerum, cupiditate optio possimus, aspernatur veniam atque? Enim modi quia hic nisi!'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
