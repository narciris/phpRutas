<?php

class Controller
{
    protected $view;
    protected $models;


    public function __construct(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function requireLogin()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('index.php?c=User&m=loginForm');
        }
    }

    public function loadModel($model)
    {
        $modelFile = 'models/' . $model . '.php';
        if(file_exists($modelFile)){
            require_once $modelFile;
            $modelClass = $model;
            return new $modelClass();
        }else{
            die("el modelo $model no existe");
        }
    }

    public function render($view, $data = array())
    {
        extract($data);
        $viewFile = 'view/' . $view . '.php';
        if(file_exists($viewFile)){
            require_once $viewFile;
        } else {
            die("la vista $view no existe");
        }
    }
 public  function  redirect($route)
 {
     header('Location' . $route);
     exit();
 }

}