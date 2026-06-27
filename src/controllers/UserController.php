<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    // Acción para listar usuarios
    public function index() {
        $users = $this->model->getAll();
        // Cargar la vista y pasarle los datos
        require_once __DIR__ . '/../views/users/index.php';
    }

    // Acción para mostrar formulario o guardar
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Guardar el nuevo usuario
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->create($nombre, $email);
            // Redirigir al listado para evitar reenvío del formulario
            header('Location: index.php?action=index');
            exit;
        } else {
            // Mostrar formulario
            require_once __DIR__ . '/../views/users/create.php';
        }
    }

    // RETO: Acción para eliminar
    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
            header('Location: index.php?action=index');
            exit;
        }
    }
    // Acción para editar usuario
public function edit() {
    if (isset($_GET['id'])) {
        $usuario = $this->model->getById($_GET['id']);
        // Por ahora mostramos los datos crudos
        var_dump($usuario);
    } else {
        echo "No se proporcionó un ID válido.";
    }
}

}
?>
