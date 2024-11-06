<?php

namespace CeremonyCrmApp\Extensions\WaiBlue\HelloWorld;

class Loader extends \CeremonyCrmApp\Core\Extension
{
  public function getUrlBase(): string
  {
    return 'wai-blue/hello-world';
  }

  public function getRoutes(): array
  {
    return array_merge(parent::getRoutes(), [
      '/stats' => 'Stats',
    ]);
  }
}