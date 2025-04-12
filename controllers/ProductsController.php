<?php

require_once __DIR__ . '/../models/Products.php';
require_once __DIR__ . '/../core/Controller.php';
class ProductsController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->loadModel('Products');
    }
    public function index()
    {
        $products = $this->model->getAll();
        $this->render('products/index',['products'=>$products]);
    }


    public function show($params){
        if (isset($params['id'])) {
            $id = $params['id'];
            $products = $this->model->findById($id);
            if ($products) {
                $this->render('products/show', ['products' => $products]);
            } else {
                echo 'Producto no encontrado';
            }
        } else {
            echo 'ID no especificado';
        }
    }

    public  function store()
    {
     if(isset($_POST["name"]) &&
         isset($_POST["price"]) &&
         isset($_POST["amount"])
     ) {
         $name = $_POST["name"];
         $price = $_POST["price"];
         $amount = $_POST["amount"];
         $result = $this->model->create($name, $price, $amount);
         if($result){
             $_SESSION['success'] = "Producto creado exitosamente";
         } else{
             $_SESSION['error'] = "Error al crear producto";         }
     } else{
         $_SESSION['error'] = "faltan campos";
     }
        header('Location: index.php?c=Products&m=index');

    }

    public function edit($params)
    {
        $id = $params['id'];
        $product = $this->model->findById($id);
        if($product){
            $this->render('products/edit', ['product' => $product]);
        } else{
            $_SESSION['error'] = "error";
        }

    }

    public function update($params)
    {
        $id = $params['id'];
      if(isset($_POST["name"]) &&
      isset($_POST["amount"]) &&
      isset($_POST["price"])){
          $name = $_POST["name"];
          $amount = $_POST["amount"];
          $price = $_POST["price"];
          $result = $this->model->update($id, $name, $amount, $price);
          if($result){
              $_SESSION['success'] = "Producto actualizado exitosamente";
          } else{
              $_SESSION['error'] = "Error al actualizar el producto";


          }
      } else{
          $_SESSION['error'] = "Debe llenar todos los atributos";
      }
        header('Location: index.php?c=Products&m=index');
    }

    public function delete($params)
    {
      $id = $params["id"];
      $product = $this->model->findById($id);
      if($product){
          $this->model->delete($id);
          $_SESSION['success'] = "Producto eliminado exitosamente";
      } else{
          $_SESSION['error'] = "Error al eliminar producto";
      }
        header('Location: index.php?c=Products&m=index');

    }

    public function create()
    {
        $this->render('products/create');
    }
}