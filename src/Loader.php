<?php

namespace CeremonyCrmApp\Extensions\WaiBlue\HelloWorld;

class Loader extends \CeremonyCrmApp\Core\Extension
{
  public string $name = 'Hello World';
  public string $icon = 'fas fa-home';
  public string $urlBase = 'wai-blue/hello-world';

  public function getRoutes(): array
  {
    return array_merge(parent::getRoutes(), [
      '/stats' => 'Stats',
    ]);
  }
}