<?php

class UserModel extends Model
{

    protected $table = "users";

    public $errors = [];
    protected $allowedColumns = [
        'email', 'firstname', 'lastname', 'password', 'role', 'date',
    ];

    public function validate(array $data)
    {
        $this->errors = [];

        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "A first name is required";
        }
        if (empty($data['lastname'])) {
            $this->errors['lastname'] = "A last name is required";
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        } else {
            //check email already exist
            if ($this->where(['email' => $data['email']])) {
                $this->errors['email'] = "Email already exist  ";
            }
        }
        if (empty($data['password'])) {
            $this->errors['password'] = "A password is required";
        }
        if ($data['password'] !== $data['confirm_password']) {
            $this->errors['password'] = "Passwords do not match";
        }
        if (empty($data['terms'])) {
            $this->errors['terms'] = "please accept the terms and conditions";
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}