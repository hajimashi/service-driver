<?php

namespace services\google\translator\PageObjects;

use lib\ServicePageObject;

class GoogleTranslatorPageObject extends ServicePageObject
{
  public function selectLanguageFrom($language)
  {
    $this->selectFromDropDownMenu(
      WebDriverBy::id("gt-sl-gms"),
      WebDriverBy::xpathSelector(
        "//div[@id='gt-sl-gms-menu']//div[@class='goog-menuitem-content' and contains(text(), '".$language."')]"
      )
    );
  }
  
  public function selectLanguageTo()
  {
    $this->selectFromDropDownMenu(
      WebDriverBy::id("gt-tl-gms"),
      WebDriverBy::xpathSelector(
        "//div[@id='gt-tl-gms-menu']//div[@class='goog-menuitem-content' and contains(text(), '".$language."')]"
      )
    );
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
  
  protected function selectFromDropDownMenu($menuSelector, $elementSelector)
  {
    $this->webdriver
      ->findElement($menuSelector)
      ->click();
    
    $this->webdriver
      ->findElement($elementSelector))
      ->click();
  }
}
