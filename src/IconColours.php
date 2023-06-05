<?php

namespace PackagedUi\SassIcon;

use Packaged\Ui\Html\HtmlAttributesTrait;
use PackagedUi\BemComponent\BemComponentTrait;

trait IconColours
{
  use BemComponentTrait;
  use HtmlAttributesTrait;

  public function primary(): static
  {
    $this->addClass($this->getModifier('primary'));
    return $this;
  }

  public function secondary(): static
  {
    $this->addClass($this->getModifier('secondary'));
    return $this;
  }

  public function tertiary(): static
  {
    $this->addClass($this->getModifier('tertiary'));
    return $this;
  }

  public function success(): static
  {
    $this->addClass($this->getModifier('success'));
    return $this;
  }

  public function danger(): static
  {
    $this->addClass($this->getModifier('danger'));
    return $this;
  }

  public function warning(): static
  {
    $this->addClass($this->getModifier('warning'));
    return $this;
  }

  public function info(): static
  {
    $this->addClass($this->getModifier('info'));
    return $this;
  }

  public function light(): static
  {
    $this->addClass($this->getModifier('light'));
    return $this;
  }

  public function dark(): static
  {
    $this->addClass($this->getModifier('dark'));
    return $this;
  }
}
