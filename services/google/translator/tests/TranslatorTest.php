<?php

namespace services\google\translator\tests\TranslatorTest;

class TranslatorTest extends PHPUnit_Framework_TestCase
{
  protected $webdriver;
    
	public function setUp()
  {
    $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
    $this->webdriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
  }
    
  public function tearDown()
  {
    $this->webdriver->close();
  }
  
  public function testGoogleTranslatorHome()
  {
    $translatorPage = new GoogleTranslatorPageObject($webdriver);
    
    $translatorPage->open();
  }
}
