<?php

namespace services\google\translator\PageObjects;

use lib\ServicePageObject;

class GoogleTranslatorPageObject extends ServicePageObject
{
  
  public function selectLanguageFrom()
  {
  }
  
  public function selectLanguageTo()
  {
  }
  
  public function clickTranslateButton()
  {
    $this->webdriver
      ->findElement(WebDriverBy::id("gt-submit"))
      ->click();
      
    return $this;
  }
  
  public function getTranslation()
  {
  }
  
  public function clickSwitchLanguageButton()
  {
  }
  
  public function clearTranslateFromTextarea()
  {
  }
}
