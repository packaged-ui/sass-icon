<?php

namespace PackagedUi\SassIcon;

use Packaged\Ui\Html\HtmlAttributesTrait;
use PackagedUi\BemComponent\BemComponentTrait;

trait IconSizing
{
  use BemComponentTrait;
  use htmlAttributesTrait;

  public function xs(): static
  {
    $this->addClass($this->getModifier('xs'));
    return $this;
  }

  public function sm(): static
  {
    $this->addClass($this->getModifier('sm'));
    return $this;
  }

  public function md(): static
  {
    $this->addClass($this->getModifier('md'));
    return $this;
  }

  public function lg(): static
  {
    $this->addClass($this->getModifier('lg'));
    return $this;
  }

  public function xl(): static
  {
    $this->addClass($this->getModifier('xl'));
    return $this;
  }

  public function xxl(): static
  {
    $this->addClass($this->getModifier('xxl'));
    return $this;
  }
}
