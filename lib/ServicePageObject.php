<?php

namespace lib\ServicePageObject;

class ServicePageObject
{
  protected $webdriver;
  protected $url;
  
  public function __construct($webdriver, $url)
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
