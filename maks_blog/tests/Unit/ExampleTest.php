<?php

namespace tests\Unit;


use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    
    use DatabaseTransactions;

    public function testBasicTest()
    {
     
        //start
        $first = factory(Post::class)->create();
        
        $second = factory(Post::class)->create([
                    'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);
        
        //when
        $posts = Post::archives();
        
        
        //res
        $this->assertCount(2, $posts);
        
    }
}
