<!-- # controllers/posts_controller.php -->

<?php
require_once('Controllers/BaseController.php');
require_once('Models/Post.php');
require_once('connection.php');


class PostsController extends BaseController
{
    function __construct()
    {
        $this->folder = 'Posts';
    }

    public function index()
    {
        $posts = Post::all();
        $data = array('posts' => $posts);
        $this->render('index', $data);
    }

    public function showPost()
    {
        $post = Post::find($_GET['id']);
        $data = array('post' => $post);
        $this->render('show', $data);
    }

    public function create(){
        $this->render('create');
    }

    public function store(){
        if (isset($_POST['create'])){
            $title = $_POST['title'];
            $content = $_POST['content'];
            
            $storeResult = Post::store($title,$content);
            $data = array('storeResults' => $storeResult);
            $this->render('store', $data);
        }
       
    }
}
