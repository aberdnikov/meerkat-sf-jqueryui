<?php
use Meerkat\StaticFiles\Js;
use Meerkat\StaticFiles\Css;

$theme = \Kohana::$config->load('meerkat/jqueryui.theme');
$version = \Kohana::$config->load('meerkat/jqueryui.version');
Js::instance()->add_static($version);
Js::instance()->add_static('lib/jqueryui/js/jquery.datetimepicker.js');
Css::instance()->add_static($theme);