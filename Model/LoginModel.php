<?php

namespace App\Model;

class LoginModel extends Model {

    public $id, $nome, $email, $senha, $remember = false;
    public $user_cookie;

    public function auth() {

    }
}