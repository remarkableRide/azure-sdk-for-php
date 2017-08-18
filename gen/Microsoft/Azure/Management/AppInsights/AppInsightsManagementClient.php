<?php
namespace Microsoft\Azure\Management\AppInsights;
final class AppInsightsManagementClient
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_Operations_group = new \Microsoft\Azure\Management\AppInsights\Operations($_client);
        $this->_Components_group = new \Microsoft\Azure\Management\AppInsights\Components($_client);
        $this->_WebTests_group = new \Microsoft\Azure\Management\AppInsights\WebTests($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\AppInsights\Operations
     */
    public function getOperations()
    {
        return $this->_Operations_group;
    }
    /**
     * @return \Microsoft\Azure\Management\AppInsights\Components
     */
    public function getComponents()
    {
        return $this->_Components_group;
    }
    /**
     * @return \Microsoft\Azure\Management\AppInsights\WebTests
     */
    public function getWebTests()
    {
        return $this->_WebTests_group;
    }
    /**
     * @var \Microsoft\Azure\Management\AppInsights\Operations
     */
    private $_Operations_group;
    /**
     * @var \Microsoft\Azure\Management\AppInsights\Components
     */
    private $_Components_group;
    /**
     * @var \Microsoft\Azure\Management\AppInsights\WebTests
     */
    private $_WebTests_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/providers/microsoft.insights/operations' => ['get' => [
                'operationId' => 'Operations_List',
                'parameters' => [[
                    'name' => 'api-version',
                    'in' => 'query',
                    'required' => TRUE,
                    'type' => 'string',
                    'enum' => ['2015-05-01']
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/OperationListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/providers/microsoft.insights/components' => ['get' => [
                'operationId' => 'Components_List',
                'parameters' => [
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-05-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ApplicationInsightsComponentListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/microsoft.insights/components' => ['get' => [
                'operationId' => 'Components_ListByResourceGroup',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-05-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ApplicationInsightsComponentListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/microsoft.insights/components/{resourceName}' => [
                'delete' => [
                    'operationId' => 'Components_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'get' => [
                    'operationId' => 'Components_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ApplicationInsightsComponent']]]
                ],
                'put' => [
                    'operationId' => 'Components_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'InsightProperties',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/ApplicationInsightsComponent']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ApplicationInsightsComponent']]]
                ],
                'patch' => [
                    'operationId' => 'Components_UpdateTags',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'ComponentTags',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/TagsResource']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ApplicationInsightsComponent']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/microsoft.insights/webtests' => ['get' => [
                'operationId' => 'WebTests_ListByResourceGroup',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-05-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/webTestListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/microsoft.insights/webtests/{webTestName}' => [
                'get' => [
                    'operationId' => 'WebTests_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'webTestName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/WebTest']]]
                ],
                'put' => [
                    'operationId' => 'WebTests_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'webTestName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'WebTestDefinition',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/WebTest']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/WebTest']]]
                ],
                'patch' => [
                    'operationId' => 'WebTests_UpdateTags',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'webTestName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'WebTestTags',
                            'in' => 'body',
                            'required' => TRUE,
                            'schema' => ['$ref' => '#/definitions/TagsResource']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/WebTest']]]
                ],
                'delete' => [
                    'operationId' => 'WebTests_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'webTestName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-05-01']
                        ]
                    ],
                    'responses' => [
                        '204' => [],
                        '200' => []
                    ]
                ]
            ],
            '/subscriptions/{subscriptionId}/providers/microsoft.insights/webtests' => ['get' => [
                'operationId' => 'WebTests_List',
                'parameters' => [
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-05-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/webTestListResult']]]
            ]]
        ],
        'definitions' => [
            'ErrorResponse' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'message' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'Operation_display' => [
                'properties' => [
                    'provider' => ['type' => 'string'],
                    'resource' => ['type' => 'string'],
                    'operation' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'Operation' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'display' => ['$ref' => '#/definitions/Operation_display']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'OperationListResult' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/Operation']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'Resource' => [
                'properties' => [
                    'id' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'name' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'type' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'location' => ['type' => 'string'],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => ['location']
            ],
            'TagsResource' => [
                'properties' => ['tags' => [
                    'type' => 'object',
                    'additionalProperties' => ['type' => 'string']
                ]],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'ApplicationInsightsComponentProperties' => [
                'properties' => [
                    'ApplicationId' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'AppId' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'Application_Type' => [
                        'type' => 'string',
                        'enum' => [
                            'web',
                            'other'
                        ]
                    ],
                    'Flow_Type' => [
                        'type' => 'string',
                        'enum' => ['Bluefield']
                    ],
                    'Request_Source' => [
                        'type' => 'string',
                        'enum' => ['rest']
                    ],
                    'InstrumentationKey' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'CreationDate' => [
                        'type' => 'string',
                        'format' => 'date-time',
                        'readOnly' => TRUE
                    ],
                    'TenantId' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'HockeyAppId' => ['type' => 'string'],
                    'HockeyAppToken' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'provisioningState' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ],
                    'SamplingPercentage' => [
                        'type' => 'number',
                        'format' => 'double'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => ['Application_Type']
            ],
            'ApplicationInsightsComponent' => [
                'properties' => [
                    'kind' => ['type' => 'string'],
                    'properties' => ['$ref' => '#/definitions/ApplicationInsightsComponentProperties']
                ],
                'additionalProperties' => FALSE,
                'required' => ['kind']
            ],
            'ApplicationInsightsComponentListResult' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/ApplicationInsightsComponent']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['value']
            ],
            'WebTestGeolocation' => [
                'properties' => ['Id' => ['type' => 'string']],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'WebTestProperties_Configuration' => [
                'properties' => ['WebTest' => ['type' => 'string']],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'WebTestProperties' => [
                'properties' => [
                    'SyntheticMonitorId' => ['type' => 'string'],
                    'Name' => ['type' => 'string'],
                    'Description' => ['type' => 'string'],
                    'Enabled' => ['type' => 'boolean'],
                    'Frequency' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Timeout' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'Kind' => [
                        'type' => 'string',
                        'enum' => [
                            'ping',
                            'multistep'
                        ]
                    ],
                    'RetryEnabled' => ['type' => 'boolean'],
                    'Locations' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/WebTestGeolocation']
                    ],
                    'Configuration' => ['$ref' => '#/definitions/WebTestProperties_Configuration'],
                    'provisioningState' => [
                        'type' => 'string',
                        'readOnly' => TRUE
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => [
                    'SyntheticMonitorId',
                    'Name',
                    'Kind',
                    'Locations'
                ]
            ],
            'WebTest' => [
                'properties' => [
                    'kind' => [
                        'type' => 'string',
                        'enum' => [
                            'ping',
                            'multistep'
                        ]
                    ],
                    'properties' => ['$ref' => '#/definitions/WebTestProperties']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'webTestListResult' => [
                'properties' => [
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/WebTest']
                    ],
                    'nextLink' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => ['value']
            ]
        ]
    ];
}
