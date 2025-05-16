<?php
namespace controllers;

abstract class Controller
{
    public function __construct ()
    {
        $this->startSession();
    }
    private function startSession()
    {
       if (!isset($_SESSION)) {
            session_start();
       }
    }

    protected function render($view, array $variables = [])
    {
        if (!empty($variables)) {
            extract($variables);
        }
        ob_start();
        include_once $view;
        $resultat = ob_get_clean();

        include_once '../view/header.php';
        echo $resultat;
    }


}


