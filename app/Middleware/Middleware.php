<?php

namespace Tarmuji\Belajar\PHP\MVC\Middleware;

interface Middleware
{
  public function before(): void;
}
