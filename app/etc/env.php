<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'E4fKegJjsPANmajj0oSjmaMWsU5l50RJ'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'db0_'
            ],
            'page_cache' => [
                'id_prefix' => 'db0_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '6c2a620ec268976d18bf0158c0efedde'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'm246',
                'username' => 'root',
                'password' => 'admin',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'cache_import_product' => 1
    ],
    'downloadable_domains' => [
        'm246.magento2.local'
    ],
    'install' => [
        'date' => 'Tue, 10 Oct 2023 14:32:29 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'secure' => [
                    'use_in_frontend' => '1',
                    'use_in_adminhtml' => '1',
                    'base_url' => 'http://m246.magento2.local/'
                ],
                'unsecure' => [
                    'base_url' => 'http://m246.magento2.local/'
                ]
            ],
            'catalog' => [
                'search' => [
                    'engine' => 'elasticsearch7',
                    'elasticsearch7_server_hostname' => 'elasticsearch',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch7_index_prefix' => 'elasticsearch',
                    'elasticsearch7_server_timeout' => '155'
                ]
            ],
            'admin' => [
                'security' => [
                    'use_form_key' => '0',
                    'admin_account_sharing' => '1',
                    'session_lifetime' => '1314000'
                ]
            ]
        ]
    ]
];
