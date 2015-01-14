<?php

namespace lib\ServicePageObject;

abstract class ServicePageObject
{
  protected $webdriver;
  protected $url;
  
  public function __construct($webdriver)
  {
    $this->webdriver = $webdriver;
    $this->url = $url;
  }
  
  public function getWebdriver()
  {
    return $this->webdriver;
  }
  
  public function getUrl()
  {
    return $this->url;
  }
  
  public function open()
  {
    $this->webdriver->get($this->url);
    return $this;
  }
}
