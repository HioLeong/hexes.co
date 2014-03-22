<?php

class BlogController extends baseController {
    public function index() {

    }

    public function addBlog() {
        $data = json_decode($_POST['data']);
        $title = $data->title;
        $content = $data->content;
        $id = $_SESSION['id'];
        $query = "INSERT Blog(title, content, dateCreated, User_idUser) VALUES('{$title}', '{$content}', now(), {$id})";
        $results = $this->query($query);
        return var_dump($results);
    }

    public function getAllBlogs() {
        $id = $_SESSION['id'];
    }

    public function query($query) {
        $con = mysqli_connect('localhost', 'root', 'root', 'HexDatabase');
        $results = mysqli_query($con, $query);
        return $results;
    }

}
