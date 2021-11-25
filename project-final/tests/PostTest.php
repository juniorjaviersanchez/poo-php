<?php
 
use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post(){
        $post = new Post();
        $comment = new Comment();

        // Asignamos un comentario al post
        $post->addComment($comment);

        // Comprobamos las afirmaciones
        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}