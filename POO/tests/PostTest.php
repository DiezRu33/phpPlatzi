<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Cpmment;

class PostTest extends TestCase{
    public function testAddCommentToPost(){
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}


?>