<?php
use CRM_Monolog_ExtensionUtil as E;
return [
  // @todo This is just for proof-of concept. It would be better if we could
  // use symfony/monolog-bundle or similar which already has a way of
  // specifying settings that covers most things. Anyone setting
  // up advanced config would be fine editing a config file, right?
  // e.g. might want different paths per channel, or network destinations,
  // or simply something that isn't listed here.
  'monolog_path' => [
    'group_name' => 'Developer Preferences',
    'group' => 'developer',
    'name' => 'monolog_path',
    'type' => 'String',
    'html_type' => 'text',
    'default' => '',
    'add' => '1.0',
    'title' => ts('Path to folder where monolog logs are stored'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Proof of concept setting to set the folder path.'),
    'help_text' => NULL,
    'html_attributes' => [
      'class' => 'huge',
    ],
    'settings_pages' => ['debug' => ['weight' => 60]],
  ],
];
