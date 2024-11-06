<?php

namespace CeremonyCrmApp\Extensions\WaiBlue\HelloWorld\Controllers;

class Home extends \CeremonyCrmApp\Core\Controller
{
  /**
   * Returns parameters used to render TWIG template.
   *
   * @return array Parameters used to render TWIG template.
   */
  public function prepareViewParams()
  {
    parent::prepareViewParams();

    $this->viewParams['randomNumber'] = rand(1000, 9000);
  }

}