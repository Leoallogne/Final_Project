<?php

class AuthController extends Controller
{
    public function loginPage()
    {
        return $this->view("auth/login");
    }

    public function login()
    {
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";

        // Cek user
        $user = User::findByEmail($email);

        if (!$user || !password_verify($password, $user->password)) {
            echo "<script>alert('Email atau password salah'); window.location='/login';</script>";
            exit;
        }

        // Simpan session
        $_SESSION["user_id"] = $user->id;

        // Redirect ke dashboard
        header("Location: /dashboard");
        exit;
    }

    public function logout()
    {
        session_destroy();
        header("Location: /login");
        exit;
    }
}
