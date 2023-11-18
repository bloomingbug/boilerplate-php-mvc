<?php

namespace Tarmuji\Belajar\PHP\MVC\Controller;

use Tarmuji\Belajar\PHP\MVC\App\View;

class HomeController
{
  public function index(): void
  {
    $model = [
      'title' => 'PHP MVC',
      'content' => 'Boiler Plate PHP MVC'
    ];

    View::render('Home/index', $model);
  }

  public function hello(): void
  {
    echo 'HomeController.hello()';
  }

  public function world(): void
  {
    echo 'HomeController.world()';
  }

  public function about(): void
  {
    echo 'Author : TarmujiDev';
  }

  public function login(): void
  {
    echo 'Login Page';
  }
}
