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
        $usersModel = new Users();
        $users = $usersModel->getAll();
        $this->render('users/index', ['users' => $users]);
    }

    public function edit($params)

    {
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

    public function show(){}

    public function store()
    {
      if(isset($_POST['name'])
          && isset($_POST['lastname'])
          && isset($_POST['email'])
      && isset($_POST['password']))

      {
          $name = $_POST['name'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          $result = $this->model->create($name, $lastname,$email, $password);
          if($result){
              print "usuario creado exitosamente";
          }else{
              print 'Error al crear el usuario';
          }
      }else{
          print 'Se requieren todos los campos';
      }
    }


}
