<?php

class categoriasController extends AppController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $categorias = $this->loadModel("categoria");
        $this->_view->categorias = $categorias->listarTodo();
        $this->_view->titulo = "Lista de categorías";
        $this->_view->renderizar("index");
    }

    public function agregar(){
        if ($_POST) {
            if (empty($_POST['name']) || $_POST['name'] == "") {
                    $this->redirect(array("controller" => "categorias", "action" => "agregar")
                );
                return;
            }
            $categorias = $this->loadModel("categoria");
            if ($categorias->guardar($_POST)) {
                    $this->redirect(array("controller" => "categorias")
                );
            }
        }
        $categorias = $this->loadModel("categoria");
        $this->_view->categorias = $categorias->listarTodo();
        $this->_view->titulo = "Agregar categoría";
        $this->_view->renderizar("agregar");
    }

    public function editar($id = null){
        if ($_POST) {
            $categoria = $this->loadModel("categoria");
            if (empty($_POST['name']) || $_POST['name'] == "") {
                    $this->redirect(array("controller" => "categorias", "action" => "editar/" . $_POST['id'])
                );
                return;
            }
            if ($categoria->actualizar($_POST)) {
                    $this->redirect(array("controller" => "categorias")
                );
            }else {
                $this->redirect(array(
                        "controller" => "categorias",
                        "action" => "editar/" . $id)
                );
            }
        }

        $categoria = $this->loadModel("categoria");
        $this->_view->categoria = $categoria->buscarPorId($id);
        $categorias = $this->loadModel("categoria");
        $this->_view->categorias = $categorias->listarTodo();
        $this->_view->titulo = "Editar categoría";
        $this->_view->renderizar("editar");
    }

    public function eliminar($id){
        $categoria = $this->loadModel("categoria");
        $registro = $categoria->buscarPorId($id);
        if (!empty($registro)) {
            if ($categoria->eliminarPorId($id)) {
                    $this->redirect(array("controller" => "categorias")
                );
            } else {
                    $this->redirect(array("controller" => "categorias")
                );
            }
        }
    }
}