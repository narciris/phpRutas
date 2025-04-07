<?php
require_once 'models/Users.php';
require_once 'core/Controller.php';

class UserController extends Controller{

    public function __construct()
    {
        parent::construct();
        $this->model = $this->loadModel('Users');
    }

    public function index(){
        $usersModel = new Users();
        $users = $usersModel->getAllUsers();
        $this->render('users/index', ['users' => $users]);
    }

}
