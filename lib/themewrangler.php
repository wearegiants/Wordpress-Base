<?php

$settings = array(

  'available_scripts'      => array(
    'jquery-g'             => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'plugins'              => array('/assets/js/vendor.min.js'),
    'scripts'              => array('/assets/js/main.min.js'),
  ),

  'default_scripts'        => array(
    //'smartajax',
    'plugins',
    'scripts',
  ),

  'available_stylesheets'  => array(
    'theme'                => array('/assets/main.min.css'),
  ),

  'default_stylesheets'    => array(
    'vendor',
    'theme',
  ),

  'deregister_scripts' => array('','l10n'),

);

Themewrangler::set_defaults( $settings );