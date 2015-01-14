<?php

namespace services\google\translator\PageObjects;

use lib\ServicePageObject;

class GoogleTranslatorPageObject extends ServicePageObject
{
  protected $url = "https://translate.google.pl/";
  
  public function selectSourceLanguage($language)
  {
    $this->selectFromDropDownMenu(
      WebDriverBy::id("gt-sl-gms"),
      WebDriverBy::xpathSelector(
        "//div[@id='gt-sl-gms-menu']//div[@class='goog-menuitem-content' and contains(text(), '".$language."')]"
      )
    );
  }
  
  public function selectTranslationLanguage()
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
    return $this->webdriver
      ->findElement(WebDriverBy::id("result_box"))
      ->getText();
  }
  
  public function clickSwitchLanguageButton()
  {
    $this->webdriver
      ->findElement(WebDriverBy::id("gt-swap"))
      ->click();
  }
  
  public function clearTranslateFromTextarea()
  {
    $this->webdriver
      ->findElement(WebDriverBy::id("gt-clear"))
      ->click();
  }
  
  public function insertSourceText($text)
  {
    $this->webdriver
      ->findElement(WebDriverBy::id("source"))
      ->sendKeys($text);
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
