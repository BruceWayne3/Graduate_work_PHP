<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'rcrowe/twigbridge' => 
  array (
    'providers' => 
    array (
      0 => 'TwigBridge\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Twig' => 'TwigBridge\\Facade\\Twig',
    ),
  ),
);