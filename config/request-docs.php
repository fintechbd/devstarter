<?php

return [
    'enabled' => true,
    // change it to true will make lrd to throw exception if rules in request class need to be changed
    // keep it false
    'debug' => true,

    /*
    * Route where request docs will be served from laravel app.
    * localhost:8080/request-docs
    */
    'url' => 'request-docs',
    'middlewares' => [
         \Rakutentech\LaravelRequestDocs\NotFoundWhenProduction::class,
    ],

    //Use only routes where ->uri start with next string Using Str::startWith( . e.g. - /api/mobile
    'only_route_uri_start_with' => '',

    'hide_matching' => [
        '#^telescope#',
        '#^docs#',
        '#^request-docs#',
        '#^api-docs#',
        '#^sanctum#',
        '#^_ignition#',
        '#^_tt#',
    ],

    'hide_meta_data' => false,
    'hide_sql_data' => false,
    'hide_logs_data' => false,
    'hide_models_data' => false,

    // https://github.com/rakutentech/laravel-request-docs/pull/92
    // When rules are put in other method than rules()
    'rules_methods' => [
        'rules'
    ],
    // Can be overridden as // @LRDresponses 200|400|401
    'default_responses' => [ "200", "204", "400", "401", "403", "404", "405", "422", "429", "500", "503"],

    // By default, LRD group your routes by the first /path.
    // This is a set of regex to group your routes by prefix.
    'group_by' => [
        'uri_patterns' => [
            '^api/v[\d]+/', // `/api/v1/users/store` group as `/api/v1/users`.
            '^api/',        // `/api/users/store` group as `/api/users`.
        ]
    ],

    // No need to touch below
    // open api config
    // used to generate open api json
    'open_api' => [
        'title' => 'MT Technologies API Docs',
        'description' => 'MT Technologies API Docs',
        // default version that this library provides
        'version' => '3.0.0',
        // changeable
        'document_version' => '1.0.0',
        // license that you want to display
        'license' => 'Apache 2.0',
        'license_url' => 'https://www.apache.org/licenses/LICENSE-2.0.html',
        'server_url' => env('APP_URL', 'http://localhost'),
        //openapi 3.0.x doesn't support request body for delete operation
        //ref: https://github.com/OAI/OpenAPI-Specification/pull/2117
        'delete_with_body' => false,
        //exclude http methods that will be excluded from openapi export
        'exclude_http_methods' => ['HEAD', 'OPTION'],
        // for now putting default responses for all. This can be changed later based on specific needs
        'responses' => [
            '200' => [
                'description' => '200 - Successful operation',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'data' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => new stdClass()
                                    ]
                                ],
                                'links' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'first' => [
                                            'type' => 'string',
                                            'format' => 'uri',
                                            'nullable' => true
                                        ],
                                        'last' => [
                                            'type' => 'string',
                                            'format' => 'uri',
                                            'nullable' => true
                                        ],
                                        'prev' => [
                                            'type' => 'string',
                                            'format' => 'uri',
                                            'nullable' => true
                                        ],
                                        'next' => [
                                            'type' => 'string',
                                            'format' => 'uri',
                                            'nullable' => true
                                        ],
                                    ]
                                ],
                                'meta' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'current_page' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'nullable' => true
                                        ],
                                        'from' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'nullable' => true
                                        ],
                                        'last_page' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'nullable' => true
                                        ],
                                        'path' => [
                                            'type' => 'string',
                                            'format' => 'uri',
                                        ],
                                        'per_page' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'to' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'nullable' => true
                                        ],
                                        'total' => [
                                            'type' => 'integer',
                                            'format' => 'int32'
                                        ],
                                        'query' => [
                                            'type' => 'string',
                                            'format' => 'uri'
                                        ],
                                        'links' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'url' => [
                                                        'type' => 'string',
                                                        'format' => 'uri',
                                                        'nullable' => true
                                                    ],
                                                    'label' => [
                                                        'type' => 'string',
                                                    ],
                                                    'active' => [
                                                        'type' => 'boolean',
                                                    ],
                                                ]
                                            ]
                                        ],
                                    ]
                                ],
                            ]
                        ],
                    ],
                ],
            ],
            '204' => [
                'description' => '204 - No Content',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '400' => [
                'description' => '400 - Bad Request',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '401' => [
                'description' => '401 - Unauthorized',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '403' => [
                'description' => '403 - Access Forbidden',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '404' => [
                'description' => '404 - Not Found',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '405' => [
                'description' => '405 - Method Not Allowed',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '408' => [
                'description' => '408 - Payment Required',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '422' => [
                'description' => '422 - Unprocessable Entity',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ],
                                'errors' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'field_name1' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'field_name2' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'field_name3' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                    ]
                                ],
                            ]
                        ],
                    ],
                ],
            ],
            '429' => [
                'description' => '429 - Too Many Requests',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '500' => [
                'description' => '500 - Internal Server Error',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            '503' => [
                'description' => '503 - Service Unavailable',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            'default' => [
                'description' => 'Unexpected error',
                'content' => [
                    'application/json' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'message' => [
                                    'type' => 'string'
                                ]
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
];
