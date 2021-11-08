<?php

use CRM_Monolog_ExtensionUtil as E;

// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference

// Install search display if searchkit is installed.
if (!civicrm_api3('Extension', 'getcount', [
  'full_name' => 'org.civicrm.search_kit',
  'status' => 'installed',
])) {
  return [];
}

return [
  [
    'name' => 'Monolog configuration',
    'entity' => 'SavedSearch',
    'update' => 'unmodified',
    'cleanup' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Monolog configuration',
        'label' => 'Monolog configuration',
        'description' => E::ts('Configured monolog logging handlers'),
        'api_entity' => 'Monolog',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'name',
            'channel',
            'type:label',
            'description',
            'minimum_severity:label',
            'weight',
            'is_active',
            'is_final',
            'is_default',
          ],
        ],
      ],
    ],
  ],
  [
    'name' => 'Monolog display',
    'entity' => 'SearchDisplay',
    'update' => 'unmodified',
    'cleanup' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Monolog configuration display',
        'label' => E::ts('Monolog configuration'),
        'saved_search_id.name' => 'Monolog configuration',
        'type' => 'table',
        'actions' => TRUE,
        'settings' => [
          'limit' => 50,
          'classes' => ['table', 'table-striped'],
          'pager' => ['show_count' => TRUE],
          'sort' => [
            ['weight', 'ASC'],
          ],
          'cssRules' => [
            [
              'disabled',
              'is_active',
              '=',
              FALSE,
            ],
          ],
          'columns' => [
            [
              'key' => 'id',
              'label' => E::ts('ID'),
              'dataType' => 'Integer',
              'type' => 'field',
            ],
            [
              'key' => 'name',
              'label' => E::ts('Unique name'),
              'dataType' => 'String',
              'type' => 'field',
            ],
            [
              'key' => 'channel',
              'label' => E::ts('Channel'),
              'dataType' => 'String',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'description',
              'label' => E::ts('Description'),
              'dataType' => 'String',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'type:label',
              'label' => E::ts('Type of log service'),
              'dataType' => 'String',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'minimum_severity:label',
              'label' => E::ts('Minimum Severity'),
              'dataType' => 'String',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'weight',
              'label' => E::ts('Order'),
              'dataType' => 'Integer',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'is_active',
              'label' => E::ts('Is the handler active'),
              'dataType' => 'Boolean',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'is_final',
              'label' => E::ts('Is this the final handler to apply'),
              'dataType' => 'Boolean',
              'type' => 'field',
              'editable' => TRUE,
            ],
            [
              'key' => 'is_default',
              'label' => E::ts('Is default log service'),
              'dataType' => 'Boolean',
              'type' => 'field',
              'editable' => TRUE,
            ],
          ],
        ],
      ],
    ],
  ],
];
