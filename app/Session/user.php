<?php

class User{
    /**
     * Metodo para verificar se sessao ja existe
     * @return boolean
     */
    private static function init(){
        return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;
    }
    
    /**
     * função responsavel por definir a sessão de login do usuario
     * @param string $name
     * @param string $email
     */
    public static function login($name, $email){
        //inicia a sessão da aplicação
        self::init();
        $_SESSION['user'] = [
            'name' => $name,
            'email' => $email
        ];

    }
}