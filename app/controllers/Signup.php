<?php

class Signup extends Controller
{

    public function index()
    {
        $data['errors'] = [];
        $user = new UserModel();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($user->validate($_POST) === true) {

                $_POST['date'] = date('Y-m-d H:i:s');
                $_POST['role'] = "user";
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);

                $user->insert($_POST);

                message("Your profile was created successfully, please login");
                redirect("login");
                // show(message());
                // die;
            }
        }
        $data['errors'] = $user->errors;
        $data['title'] = "Signup";
        $this->view('signup', $data);
    }
}