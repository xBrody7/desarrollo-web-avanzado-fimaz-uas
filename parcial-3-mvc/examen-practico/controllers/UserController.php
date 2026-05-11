<?php
require_once 'config/Database.php';
require_once 'models/UserModel.php';

class UserController {
    public function index(): void {
        $database = new Database();
        $db = $database->getConnection();

        $userModel = new UserModel($db);
        $stmt = $userModel->obtenerUsuarios();
        
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require_once 'views/user_list.php';
    }
}
?>