<?php
namespace Microsoft\Azure\Management\TrafficManager\_2017_05_01;
final class TrafficManagerManagementClient
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
        $this->_Endpoints_group = new \Microsoft\Azure\Management\TrafficManager\_2017_05_01\Endpoints($_client);
        $this->_Profiles_group = new \Microsoft\Azure\Management\TrafficManager\_2017_05_01\Profiles($_client);
        $this->_GeographicHierarchies_group = new \Microsoft\Azure\Management\TrafficManager\_2017_05_01\GeographicHierarchies($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\TrafficManager\_2017_05_01\Endpoints
     */
    public function getEndpoints()
    {
        return $this->_Endpoints_group;
    }
    /**
     * @return \Microsoft\Azure\Management\TrafficManager\_2017_05_01\Profiles
     */
    public function getProfiles()
    {
        return $this->_Profiles_group;
    }
    /**
     * @return \Microsoft\Azure\Management\TrafficManager\_2017_05_01\GeographicHierarchies
     */
    public function getGeographicHierarchies()
    {
        return $this->_GeographicHierarchies_group;
    }
    /**
     * @var \Microsoft\Azure\Management\TrafficManager\_2017_05_01\Endpoints
     */
    private $_Endpoints_group;
    /**
     * @var \Microsoft\Azure\Management\TrafficManager\_2017_05_01\Profiles
     */
    private $_Profiles_group;
    /**
     * @var \Microsoft\Azure\Management\TrafficManager\_2017_05_01\GeographicHierarchies
     */
    private $_GeographicHierarchies_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/trafficmanagerprofiles/{profileName}/{endpointType}/{endpointName}' => [
                'patch' => [
                    'operationId' => 'Endpoints_Update',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/Endpoint'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Endpoint']]]
                ],
                'get' => [
                    'operationId' => 'Endpoints_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Endpoint']]]
                ],
                'put' => [
                    'operationId' => 'Endpoints_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/Endpoint'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Endpoint']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Endpoint']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Endpoints_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointType',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'endpointName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/DeleteOperationResult']],
                        '204' => []
                    ]
                ]
            ],
            '/providers/Microsoft.Network/checkTrafficManagerNameAvailability' => ['post' => [
                'operationId' => 'Profiles_CheckTrafficManagerRelativeDnsNameAvailability',
                'parameters' => [
                    [
                        'name' => 'parameters',
                        'in' => 'body',
                        'required' => TRUE,
                        '$ref' => '#/definitions/CheckTrafficManagerRelativeDnsNameAvailabilityParameters'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-05-01']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/TrafficManagerNameAvailability']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/trafficmanagerprofiles' => ['get' => [
                'operationId' => 'Profiles_ListByResourceGroup',
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
                        'enum' => ['2017-05-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ProfileListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.Network/trafficmanagerprofiles' => ['get' => [
                'operationId' => 'Profiles_ListBySubscription',
                'parameters' => [
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-05-01']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ProfileListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/trafficmanagerprofiles/{profileName}' => [
                'get' => [
                    'operationId' => 'Profiles_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Profile']]]
                ],
                'put' => [
                    'operationId' => 'Profiles_CreateOrUpdate',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/Profile'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/Profile']],
                        '201' => ['schema' => ['$ref' => '#/definitions/Profile']]
                    ]
                ],
                'delete' => [
                    'operationId' => 'Profiles_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/DeleteOperationResult']],
                        '204' => []
                    ]
                ],
                'patch' => [
                    'operationId' => 'Profiles_Update',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'profileName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/Profile'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-05-01']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Profile']]]
                ]
            ],
            '/providers/Microsoft.Network/trafficManagerGeographicHierarchies/default' => ['get' => [
                'operationId' => 'GeographicHierarchies_GetDefault',
                'parameters' => [[
                    'name' => 'api-version',
                    'in' => 'query',
                    'required' => TRUE,
                    'type' => 'string',
                    'enum' => ['2017-05-01']
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/TrafficManagerGeographicHierarchy']]]
            ]]
        ],
        'definitions' => [
            'DeleteOperationResult' => ['properties' => ['boolean' => ['type' => 'boolean']]],
            'EndpointProperties' => ['properties' => [
                'targetResourceId' => ['type' => 'string'],
                'target' => ['type' => 'string'],
                'endpointStatus' => [
                    'type' => 'string',
                    'enum' => [
                        'Enabled',
                        'Disabled'
                    ]
                ],
                'weight' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ],
                'priority' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ],
                'endpointLocation' => ['type' => 'string'],
                'endpointMonitorStatus' => [
                    'type' => 'string',
                    'enum' => [
                        'CheckingEndpoint',
                        'Online',
                        'Degraded',
                        'Disabled',
                        'Inactive',
                        'Stopped'
                    ]
                ],
                'minChildEndpoints' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ],
                'geoMapping' => [
                    'type' => 'array',
                    'items' => ['type' => 'string']
                ]
            ]],
            'Endpoint' => ['properties' => ['properties' => ['$ref' => '#/definitions/EndpointProperties']]],
            'CheckTrafficManagerRelativeDnsNameAvailabilityParameters' => ['properties' => [
                'name' => ['type' => 'string'],
                'type' => ['type' => 'string']
            ]],
            'DnsConfig' => ['properties' => [
                'relativeName' => ['type' => 'string'],
                'fqdn' => ['type' => 'string'],
                'ttl' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ]
            ]],
            'MonitorConfig' => ['properties' => [
                'profileMonitorStatus' => [
                    'type' => 'string',
                    'enum' => [
                        'CheckingEndpoints',
                        'Online',
                        'Degraded',
                        'Disabled',
                        'Inactive'
                    ]
                ],
                'protocol' => [
                    'type' => 'string',
                    'enum' => [
                        'HTTP',
                        'HTTPS',
                        'TCP'
                    ]
                ],
                'port' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ],
                'path' => ['type' => 'string'],
                'intervalInSeconds' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ],
                'timeoutInSeconds' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ],
                'toleratedNumberOfFailures' => [
                    'type' => 'integer',
                    'format' => 'int64'
                ]
            ]],
            'ProfileProperties' => ['properties' => [
                'profileStatus' => [
                    'type' => 'string',
                    'enum' => [
                        'Enabled',
                        'Disabled'
                    ]
                ],
                'trafficRoutingMethod' => [
                    'type' => 'string',
                    'enum' => [
                        'Performance',
                        'Priority',
                        'Weighted',
                        'Geographic'
                    ]
                ],
                'dnsConfig' => ['$ref' => '#/definitions/DnsConfig'],
                'monitorConfig' => ['$ref' => '#/definitions/MonitorConfig'],
                'endpoints' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/Endpoint']
                ]
            ]],
            'Profile' => ['properties' => ['properties' => ['$ref' => '#/definitions/ProfileProperties']]],
            'ProfileListResult' => ['properties' => ['value' => [
                'type' => 'array',
                'items' => ['$ref' => '#/definitions/Profile']
            ]]],
            'TrafficManagerNameAvailability' => ['properties' => [
                'name' => ['type' => 'string'],
                'type' => ['type' => 'string'],
                'nameAvailable' => ['type' => 'boolean'],
                'reason' => ['type' => 'string'],
                'message' => ['type' => 'string']
            ]],
            'Region' => ['properties' => [
                'code' => ['type' => 'string'],
                'name' => ['type' => 'string'],
                'regions' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/Region']
                ]
            ]],
            'GeographicHierarchyProperties' => ['properties' => ['geographicHierarchy' => ['$ref' => '#/definitions/Region']]],
            'TrafficManagerGeographicHierarchy' => ['properties' => ['properties' => ['$ref' => '#/definitions/GeographicHierarchyProperties']]],
            'Resource' => ['properties' => [
                'id' => ['type' => 'string'],
                'name' => ['type' => 'string'],
                'type' => ['type' => 'string']
            ]],
            'TrackedResource' => ['properties' => [
                'tags' => [
                    'type' => 'object',
                    'additionalProperties' => ['type' => 'string']
                ],
                'location' => ['type' => 'string']
            ]],
            'ProxyResource' => ['properties' => []],
            'CloudErrorBody' => ['properties' => [
                'code' => ['type' => 'string'],
                'message' => ['type' => 'string'],
                'target' => ['type' => 'string'],
                'details' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/CloudErrorBody']
                ]
            ]],
            'CloudError' => ['properties' => ['error' => ['$ref' => '#/definitions/CloudErrorBody']]]
        ]
    ];
}
