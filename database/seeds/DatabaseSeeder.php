<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        $user = factory(User::class)->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $information =Category::create([
           'name' => 'information',
           'slug' => 'information'
        ]);

        Post::create([
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'all my family',
            'body' => "In this lesson, we'll associate a blog post with a particular author, or user. In the process of adding this, however, we'll yet again run into the issue of needing to manually repopulate our database. This might be a good time to take a few moments to review database seeding. As you'll see, a bit of work up front will save you so much time in the long run.",
            'user_id' => $user->id,
        ]);

        Post::create([
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'personal for keeps',
            'body' => "In this lesson, we'll associate a blog post with a particular author, or user. In the process of adding this, however, we'll yet again run into the issue of needing to manually repopulate our database. This might be a good time to take a few moments to review database seeding. As you'll see, a bit of work up front will save you so much time in the long run.",
            'user_id' => $user->id,
        ]);

        $post = Post::create([
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'keep learning',
            'body' => "In this lesson, we'll associate a blog post with a particular author, or user. In the process of adding this, however, we'll yet again run into the issue of needing to manually repopulate our database. This might be a good time to take a few moments to review database seeding. As you'll see, a bit of work up front will save you so much time in the long run.",
            'user_id' => $user->id,
        ]);
        $information = Post::create([
            'category_id' => $information->id,
            'title' => 'My information Post',
            'slug' => 'my-information-post',
            'excerpt' => 'keep learning',
            'body' => "In this lesson, we'll associate a blog post with a particular author, or user. In the process of adding this, however, we'll yet again run into the issue of needing to manually repopulate our database. This might be a good time to take a few moments to review database seeding. As you'll see, a bit of work up front will save you so much time in the long run.",
            'user_id' => $user->id,
        ]);
    }
}
