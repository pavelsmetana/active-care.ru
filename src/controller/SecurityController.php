<?php

namespace App\controller;


use App\attribute\Route;

class SecurityController
{
//    /**
//     * @return void
//     * @Route("^\/login$")
//     */

    #[Route("^\/login$")]
    public function login(): void
    {

        echo renderHtml("login");
        exit;
    }

    #[Route("^\/auth$")]
    public function auth(): void
    {
        $login = $_REQUEST['login'] ?? "";
        $password = $_REQUEST['password'] ?? "";
        authorize($login, $password);
        exit;
    }

//    /**
//     * @return void
//     * @Route("^\/logout$")
//     */
    #[Route("^\/logout$")]
    public function logout (): void
    {
        session_destroy();
        header("Location: /");
    }
}
