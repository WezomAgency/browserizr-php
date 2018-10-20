# Browserizr PHP

[![license](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/dutchenkoOleg/node-w3c-validator/blob/master/LICENSE)
[![WezomAgency](https://img.shields.io/badge/composer-require-orange.svg)](https://packagist.org/packages/wezom-agency/browserizr)
[![WezomAgency](https://img.shields.io/badge/wezom-agency-red.svg)](https://github.com/WezomAgency)

> **Browserizr** is tiny library, that detects your browser and platform,  
> with testing `$_SERVER['HTTP_USER_AGENT']`.

_that is PHP port of JavaScript library [WezomAgency/Browserizr](https://github.com/WezomAgency/browserizr)  
with several limitations..._

---

## Install

```bash
composer require wezom-agency/browserizr
```

## Usage

```php
<?php

use WezomAgency\Browserizr;

?>
<!DOCTYPE html>
<html class="<?= Browserizr::add_classes(['mobile', 'desktop'], 'browserizr-'); ?>">
    <head>...</head>
    <body>...</body>
</html>

```
