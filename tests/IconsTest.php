<?php

namespace PackagedUi\SassIcon\Tests;

use Packaged\Dispatch\Dispatch;
use PHPUnit\Framework\TestCase;

class IconsTest extends TestCase
{
  protected function setUp(): void
  {
    parent::setUp();
    $dispatch = new Dispatch(__DIR__, '/r');
    Dispatch::bind($dispatch);
  }

  public function testRenderIcon()
  {
    $icon = TestFontIconClass::i(TestFontIconClass::ICON_TICK_CIRCLE);
    $this->assertEquals('<div class="icon icon--tick-circle"></div>', $icon->render());

    $icon2 = TestAbstractIconClass::pencil();
    $this->assertMatchesRegularExpression(
      '/<div class="icon"><img src="\/r\/r\/.*\/img\/pencil.svg" alt="Pencil Icon" \/><\/div>/',
      $icon2->render()
    );
  }

  public function testRenderSizes()
  {
    $icon = TestFontIconClass::i(TestFontIconClass::ICON_TICK_CIRCLE)->sm();
    $this->assertEquals('<div class="icon icon--tick-circle icon--sm"></div>', $icon->render());

    $icon2 = TestAbstractIconClass::pencil()->xs();
    $this->assertMatchesRegularExpression(
      '/<div class="icon icon--xs"><img src="\/r\/r\/.*\/img\/pencil.svg" alt="Pencil Icon" \/><\/div>/',
      $icon2->render()
    );
  }

  public function testRenderColours()
  {
    $icon = TestFontIconClass::i(TestFontIconClass::ICON_TICK_CIRCLE)->primary();
    $this->assertEquals('<div class="icon icon--tick-circle icon--primary"></div>', $icon->render());

    $icon2 = TestAbstractIconClass::pencil()->light();
    $this->assertMatchesRegularExpression(
      '/<div class="icon icon--light"><img src="\/r\/r\/.*\/img\/pencil.svg" alt="Pencil Icon" \/><\/div>/',
      $icon2->render()
    );
  }

  public function testRenderColoursAndSizes()
  {
    $icon = TestFontIconClass::i(TestFontIconClass::ICON_TICK_CIRCLE)->primary()->lg();
    $this->assertEquals('<div class="icon icon--tick-circle icon--primary icon--lg"></div>', $icon->render());

    $icon2 = TestAbstractIconClass::pencil()->light()->sm();
    $this->assertMatchesRegularExpression(
      '/<div class="icon icon--light icon--sm"><img src="\/r\/r\/.*\/img\/pencil.svg" alt="Pencil Icon" \/><\/div>/',
      $icon2->render()
    );
  }

}
