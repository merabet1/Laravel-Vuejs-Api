<?php

namespace Tests\Unit;
use App\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommentsApiTest extends TestCase
{
   
/**
     *inisiatisation de la base de donnée 
     *faire une migration 
     * @return void
     */
public function setUp(){
    parent::setUp();
    \Illuminate\Support\Facades\Artisan::call('migrate');

}

public function testGetComments(){

    $comment =factory(Comment::class)->create(['commentable_type'=>'Post','commentable_id'=>1]);
    $this->assertEquals(1,Comment::count());
}

}
