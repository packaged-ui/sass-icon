<?php

namespace PackagedUi\SassIcon;

use Packaged\Dispatch\ResourceManager;
use Packaged\Glimpse\Core\AbstractContainerTag;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Media\Image;
use Packaged\SafeHtml\SafeHtml;
use Packaged\Ui\Html\HtmlElement;
use PackagedUi\BemComponent\BemComponent;
use PackagedUi\BemComponent\BemComponentTrait;

abstract class AbstractIcon extends HtmlElement implements BemComponent
{
  use BemComponentTrait;
  use IconSizing;
  use IconColours;

  protected ?Image $_image = null;

  public function getBlockName(): string
  {
    return 'icon';
  }

  public function __construct()
  {
    $this->addClass($this->getBlockName());
  }

  public static function i(string $icon = ""): static
  {
    $i = new static();
    if($icon)
    {
      $i->addClass($i->getModifier($icon));
    }
    return $i;
  }

  protected function _containerTag(): AbstractContainerTag
  {
    return Div::create();
  }

  protected function _getContentForRender(): SafeHtml
  {
    return new SafeHtml(
      $this->_containerTag()
        ->setContent($this->_image)
        ->addClass($this->getClasses())
    );
  }

  public function setImg(string $url, string $alt = ""): static
  {
    $fullUrl = $this->_getResource($url);
    $this->_image = Image::create($fullUrl, $alt);
    return $this;
  }

  protected function _getResource(string $name): ?string
  {
    try
    {
      return ResourceManager::resources()->getResourceUri($name);
    }
    catch(\Exception $e)
    {
      return '';
    }
  }
}
