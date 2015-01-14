<?php

namespace lib\ServicePageObject;

class ServicePageObject
{
  protected $webdriver;
  
  public function __construct($webdriver)
  {
    $this->webdriver = $webdriver;
  }
}
