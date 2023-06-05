<?php

namespace PackagedUi\SassIcon\Tests;

use PackagedUi\SassIcon\AbstractIcon;

class TestAbstractIconClass extends AbstractIcon
{
  public static function pencil(): TestAbstractIconClass
  {
    return self::i()->setImg('img/pencil.svg', 'Pencil Icon');
  }
}
