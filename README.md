# Browserizr PHP

[![license](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/dutchenkoOleg/node-w3c-validator/blob/master/LICENSE)
[![WezomAgency](https://img.shields.io/badge/composer-require-orange.svg)](https://packagist.org/packages/wezom-agency/browserizr)
[![WezomAgency](https://img.shields.io/badge/wezom-agency-red.svg)](https://github.com/WezomAgency)

> **Browserizr** is tiny library, that detects your browser and platform,  
> with testing `$_SERVER['HTTP_USER_AGENT']`.

_that is PHP port of the JavaScript library [WezomAgency/Browserizr](https://github.com/WezomAgency/browserizr)  
with several limitations..._

---

## Install

```bash
composer require wezom-agency/browserizr
```

---

## API

### List of built-in tests

1. `Browserizr::$is_android`
1. `Browserizr::$is_android3`
1. `Browserizr::$is_android4`
1. `Browserizr::$is_android5`
1. `Browserizr::$is_android6`
1. `Browserizr::$is_android7`
1. `Browserizr::$is_android8`
1. `Browserizr::$is_blackberry`
1. `Browserizr::$is_blackberry10`
1. `Browserizr::$is_edge`
1. `Browserizr::$is_edge_android`
1. `Browserizr::$is_edge_ios`
1. `Browserizr::$is_ie`
1. `Browserizr::$is_ie8`
1. `Browserizr::$is_ie9`
1. `Browserizr::$is_ie10`
1. `Browserizr::$is_ie11`
1. `Browserizr::$is_ipad`
1. `Browserizr::$is_ipod`
1. `Browserizr::$is_iphone`
1. `Browserizr::$is_windows_phone`
1. `Browserizr::$is_moz`
1. `Browserizr::$is_opera`
1. `Browserizr::$is_safari`
1. `Browserizr::$is_chrome`
1. `Browserizr::$is_mobile`
1. `Browserizr::$is_desktop`

_Usage examples:_

```php
<?php

use WezomAgency\Browserizr;

?>
<?php if (Browserizr::$is_chrome) { ?>
    <div class="alert">Chrome is here, baby!!!</div>
<?php } ?>

```

---

### Static methods

#### `add_classes($tests, $css_prefix = "")`

> Create string with CSS classes

_Parameters:_

Name | Data type | Default value | Description
 --- | --- | --- | ---
 `$tests` | `string[]` |  | array of wanted tests
 `$css_prefix` | `string` | `""` | custom prefix for CSS class name
 
_Usage examples:_

```php
<?php

use WezomAgency\Browserizr;

?>
<!DOCTYPE html>
<html class="<?= Browserizr::add_classes(['mobile', 'desktop']); ?>">
    <head>...</head>
    <body>...</body>
</html>

<!-- render output -->
<html class="is-mobile is-not-desktop"><!-- if mobile device -->
<html class="is-not-mobile is-desktop"><!-- if desktop -->

```

```php
<?php

use WezomAgency\Browserizr;

?>
<!DOCTYPE html>
<html class="<?= Browserizr::add_classes(['mobile', 'desktop'], 'browserizr-'); ?>">
    <head>...</head>
    <body>...</body>
</html>

<!-- render output -->
<html class="browserizr-is-mobile browserizr-is-not-desktop"><!-- if mobile device -->
<html class="browserizr-is-not-mobile browserizr-is-desktop"><!-- if desktop -->

```

#### `detect($custom_user_agent = null)`

> re-checkout all detections

_Parameters:_

Name | Data type | Default value | Description
 --- | --- | --- | ---
 `$custom_user_agent` | `string` | `$_SERVER['HTTP_USER_AGENT']` | string for tests

_Usage examples:_

```php
<?php

use WezomAgency\Browserizr;

Browserizr::detect('my_user_agent')

?>
<?php if (Browserizr::$is_edge_ios) { ?>
    <div class="alert">Edge is here, baby! Yes, on iOS!</div>
<?php } ?>

```
 
 ---


