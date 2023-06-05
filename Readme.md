# Sass Icon

This package is to help with the setup of icon components to be used with a framework such as Cubex.

## Requirements

- Sass
- Either Packaged/Dispatch (if you wish to use images) Or an Icon Font

## Usage

Extend AbstractIcon class and implement one of the following strategies

to use images; each image you wish to use should be described like the following

```php
public static function pencil(): TestAbstractIconClass
  {
    return self::i()->setImg('img/pencil.svg', 'Pencil Icon');
  }
  ```

to use an icon font, you only need to define the name you wish to use

```php
public const ICON_TICK_CIRCLE = 'tick-circle'; // name of icon font
```

to use an icon font

in your main.scss

```scss
@use "sass-icon/assets/sass/main" as icons with (
  $class-name: ".z-icon",
  $use-icon-font: false,
);
```

if you are using an icon font you will need to describe the content of each icon you wish to use

```scss
#{icons.$class-name} {
  &--tick-circle::before {
    content: '\e805';
  }
}
```

Using an Icon Font
```php
    Icons::i(Icons::ICON_TICK_CIRCLE)->sm()->primary();
```

Using an Image 
```php
    TestAbstractIconClass::pencil()->sm()->primary();
```
