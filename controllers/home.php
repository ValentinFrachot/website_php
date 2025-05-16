<?php
namespace controllers;

class Home extends Controller
{
    public function homeAction()
    {
        $this->render(__DIR__ . '/../view/home.php', []);

    }
}