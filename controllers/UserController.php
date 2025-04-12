<?php
require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../core/Controller.php';

class UserController extends Controller{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->loadModel('Users');
    }

    public function index(){
        $this->requireLogin();
        $usersModel = new Users();
        $users = $usersModel->getAll();
        $this->render('users/index', ['users' => $users]);
    }

    public function edit($params)

    {   $this->requireLogin();
        if(isset($params['id'])){
            $id = $params['id'];
            $user = $this->model->findById($id);
            if($user){
                $this->render('users/edit', ['user' => $user]);
            }else{
                header('Location: index.php?c=User&m=index&error=user_not_found');
            }
        }else{
            print 'EL id es requerido';
        }
    }

    public function update($params)
    {
        $this->requireLogin();
       if(isset($params['id'])
           && isset($params['name']) &&
           isset($params['email']) &&
           isset($params['lastname'])){
           $id = $params['id'];
           $name = $params['name'];
           $email = $params['email'];
           $lastname = $params['lastname'];
           $result = $this->model->update($id, $name, $email, $lastname);
           if($result){
               print 'El usuario se actualizo correctamente';
           }else{
               print 'Error al actualizar';
           }
       }
    }

    public function delete($param){
        $this->requireLogin();
        if(isset($param)){
            $id = $param['id'];
            $result = $this->model->delete($id);
            if($result){
                print 'El usuario se elimino correctamente';
            }else{
                print 'Error al eliminar';
            }
        }else{
            print 'El id es requerido';
        }

    }

    public function create()
    {
     $this->render('users/create');

    }

    public function show($params){
        $this->requireLogin();
        if (isset($params['id'])) {
            $id = $params['id'];
            $user = $this->model->findById($id);
            if ($user) {
                $this->render('users/show', ['user' => $user]);
            } else {
                echo 'Usuario no encontrado';
            }
        } else {
            echo 'ID no especificado';
        }
    }

    public function store()
    {
        $this->requireLogin();
      if(isset($_POST['name'])
          && isset($_POST['lastname'])
          && isset($_POST['email'])
      && isset($_POST['password']))

      {
          $name = $_POST['name'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $_SESSION['error'] = "Correo electronico no valido";

              return;
          }
          $result = $this->model->create($name, $lastname,$email, $password);
          if($result){
              $_SESSION['success'] = "Usuario creado exitosamente";
              header('Location: index.php?c=User&m=loginForm');
          }else{
              $_SESSION['error'] = "error al crear usuario";
          }
      }else{
          $_SESSION['error'] = "Se requieren todos los campos";

      }
    }

    public function loginForm()
    {
        $this->render("users/login");
    }

    public function login()
    {
        session_start();

       $email = $_POST['email'];
       $password = $_POST['password'];

       if(empty($email) || empty($password)){
           $_SESSION['error'] = "Correo y contraseña obligatorios";
           header('Location: index.php?c=User&m=loginForm');
           exit;
       }

      $user = $this->model->login($email, $password);
       if($user){

           $_SESSION['user'] = $user;
           header('Location: index.php?c=User&m=index');
           exit;
       } else{
           $_SESSION['error']="Correo o contraseña incorrectos";
           header('Location: index.php?c=User&m=loginForm');
           exit;
       }

    }
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php?c=User&m=loginForm');
    }


}
