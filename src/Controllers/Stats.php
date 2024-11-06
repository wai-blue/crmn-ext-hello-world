<?php

namespace CeremonyCrmApp\Extensions\WaiBlue\HelloWorld\Controllers;

class Stats extends \CeremonyCrmApp\Core\Controller
{
  /**
   * Returns parameters used to render TWIG template.
   *
   * @return array Parameters used to render TWIG template.
   */
  public function prepareViewParams()
  {
    parent::prepareViewParams();

    $mCustomer = new \CeremonyCrmApp\Modules\Core\Customers\Models\Company($this->app);
    $this->viewParams['customerCount'] = $mCustomer->eloquent->count();
  }

}