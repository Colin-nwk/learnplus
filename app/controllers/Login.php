<?php

class Login extends Controller
{


    public function index()
    {
        $data['errors'] = [];
        $user = new UserModel();
        $data['title'] = "Login";


        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //validate
            $row = $user->first([
                'email' => $_POST['email']
            ]);

            if ($row) {
                if (password_verify($_POST['password'], $row->password)) {
                    //authenticate
                    Auth::authenticate($row);
                    redirect("home");
                }
            }

            $data['errors']['email'] = "wrong credentials";
        }


        // message("login");
        $this->view('login', $data);
    }
}