<?php

class User

{

    private $username;
    private $email;
    private $user;
    private $content;
    private $post;
    private $like;

	public function __construct($username,$email)
	{		
		$this->username = $username;
        $this->email = $email;    
        $this->post = [];
	}
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }




   
    public function createPost($content)
    {
        $this->content = $content;
    }
    public function getContent(){
        return $this->content;
    }





    public function sendFriendRequest($user)
    {
        $this->user = $user;
    }
    public function getUser(){
        return $this->user;
    }
}





class Post
{
    private $likes;
    private $content;
    private $comment;

    public function __construct($content)
    {
        $this->content = $content;
        $this->likes = [];
    }
    public function getContent(){
        return $this->content;
    }



    
    public function likePost($user)
    {
        $this->likes[] = $user;
    }
    public function getLikes(){
        return $this->likes;
    }





    public function commentOnPost($user,$comment)
    {
        $this->comment = $comment;
    }
    public function getComment(){
        return $this->comment;
    }
    
}

class Messenger 
{

   public $sendMessage;
   private $recipient;
   private $message;
   private $user;

   public function sendMessage($recipient,$message)

   {
    $this->recipient = $recipient;
    $this->message = $message;
   }
   public function getRecipient(){
    return $this->recipient;
   }
   public function getMessage(){
    return $this->message;
   }

   
   public function manageFriendList($user)

   {
    $this->user = $user;
   }
   public function getUser(){
    return $this->user;
   }

}

$user = new User("username","email");
$user->createPost("Social Media Platform");
$user->sendFriendRequest("user");


echo $user->getContent();
echo PHP_EOL;




$post = new Post("(new post)\nHELLO EVERYONE");
$post->likePost("arbel");
$post->commentOnPost("arbel","(arbel commented) what's up!");
 

echo $post->getContent();
echo PHP_EOL;
echo $post->getComment();
echo PHP_EOL;

 


$messenger = new Messenger();
$messenger->sendMessage("recipient","(kyle messaged you!) Hello! ");
$messenger->manageFriendList("(list of friends) tracey,binsyy,kyle");

echo $messenger->getMessage();
echo PHP_EOL;
echo $messenger->getUser();