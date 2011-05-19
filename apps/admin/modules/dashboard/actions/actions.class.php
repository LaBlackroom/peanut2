<?php

/**
 * dashboard actions.
 *
 * @package    peanut
 * @subpackage dashboard
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $weather = new GoogleWeatherAPI(peanutConfig::get('meteo'), $this->getUser()->getCulture());
    if($weather->isFound())
    {
      $this->weather = $weather->getCurrent();
    }
  }
}