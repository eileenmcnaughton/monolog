<?php

use CRM_Monolog_ExtensionUtil as E;

return [
  [
    'name' => 'default_logger',
    'entity' => 'Monolog',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'debug' => TRUE,
      'version' => 4,
      'checkPermissions' => FALSE,
      'values' => [
        'name' => 'default_logger',
        'type' => 'log_file',
        'channel' => 'default',
        'is_default' => TRUE,
        'is_active' => TRUE,
        'weight' => 1,
        'minimum_severity' => 'debug',
        'description' => E::ts('Default log to file. File is rotated at 250MB and only 10 files are kept'),
        'configuration_options' => [
          'max_file_size' => 250,
          'max_files' => 10,
        ]
      ],
    ],
  ],
  [
    'name' => 'daily_logger',
    'entity' => 'Monolog',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'debug' => TRUE,
      'version' => 4,
      'checkPermissions' => FALSE,
      'values' => [
        'name' => 'daily_logger',
        'channel' => 'default',
        'description' => E::ts('Log file for each day'),
        'type' => 'daily_logger',
        'is_default' => FALSE,
        'is_active' => FALSE,
        'weight' => 2,
        'minimum_severity' => 'debug',
        'configuration_options' => [
          'max_files' => 30,
        ],
      ],
    ],
  ],
  [
    'name' => 'firephp',
    'entity' => 'Monolog',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'debug' => TRUE,
      'version' => 4,
      'checkPermissions' => FALSE,
      'values' => [
        'name' => 'firephp',
        'channel' => 'default',
        'description' => E::ts('Expose to developers using firephp (permission dependent)'),
        'type' => 'firephp',
        'is_default' => FALSE,
        'is_active' => TRUE,
        'weight' => 2,
        'minimum_severity' => 'debug',
      ],
    ],
  ],
  [
    'name' => 'syslog',
    'entity' => 'Monolog',
    'cleanup' => 'never',
    'update' => 'never',
    'params' => [
      'debug' => TRUE,
      'version' => 4,
      'checkPermissions' => FALSE,
      'values' => [
        'name' => 'syslog',
        'description' => E::ts('log to machine syslog'),
        'channel' => 'default',
        'type' => 'syslog',
        'is_default' => FALSE,
        'is_active' => TRUE,
        'weight' => 4,
        'minimum_severity' => 'error',
        'is_final' => FALSE,
      ],
    ],
  ],
];
