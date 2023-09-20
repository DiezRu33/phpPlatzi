<?php

    use PHPUnit\Framework\TestCase;
    use App\Post;
    use App\Comment;

    class IndexTest extends TestCase{

        public function testPostAndComment(){

            $post = new Post;
            $comment = new Comment;

            $post->agregarComentario($comment);

            $this->assertEquals(1, $post->contarComentario());
            $this->assertInstanceOf(Comment::class, $post->postearComentario()[0]);

        }
    }

?>