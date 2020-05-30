<?php

namespace Source\App;
use League\Plates\Engine;
use Source\Models\User;

/**
 * Class Web
 * @package Source\App
 */
class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create( __DIR__ . "/../../theme", "php");
    }
    
    public function home(): void
    {
        $users = (new User())->find()->fetch(true);
        
        echo $this->view->render("home", [
            "title" => "Home | ". SITE,
            "users" => $users
        ]);
    }
    
     public function contact(): void
    {
         echo $this->view->render("contact",[
            "title" => "Contato | " . SITE
            
        ]);
    }
    
     public function error($data): void
    {
        echo $this->view->render("error",[
            "title" => "Erro {$data["errcode"]} | " . SITE,
            "error" => $data["errcode"]
        ]);
    }
    
}
