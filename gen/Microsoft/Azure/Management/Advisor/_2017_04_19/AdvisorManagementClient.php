<?php
namespace Microsoft\Azure\Management\Advisor\_2017_04_19;
final class AdvisorManagementClient
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
        $this->_Recommendations_group = new \Microsoft\Azure\Management\Advisor\_2017_04_19\Recommendations($_client);
        $this->_Operations_group = new \Microsoft\Azure\Management\Advisor\_2017_04_19\Operations($_client);
        $this->_Suppressions_group = new \Microsoft\Azure\Management\Advisor\_2017_04_19\Suppressions($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\Advisor\_2017_04_19\Recommendations
     */
    public function getRecommendations()
    {
        return $this->_Recommendations_group;
    }
    /**
     * @return \Microsoft\Azure\Management\Advisor\_2017_04_19\Operations
     */
    public function getOperations()
    {
        return $this->_Operations_group;
    }
    /**
     * @return \Microsoft\Azure\Management\Advisor\_2017_04_19\Suppressions
     */
    public function getSuppressions()
    {
        return $this->_Suppressions_group;
    }
    /**
     * @var \Microsoft\Azure\Management\Advisor\_2017_04_19\Recommendations
     */
    private $_Recommendations_group;
    /**
     * @var \Microsoft\Azure\Management\Advisor\_2017_04_19\Operations
     */
    private $_Operations_group;
    /**
     * @var \Microsoft\Azure\Management\Advisor\_2017_04_19\Suppressions
     */
    private $_Suppressions_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/subscriptions/{subscriptionId}/providers/Microsoft.Advisor/generateRecommendations' => ['post' => [
                'operationId' => 'Recommendations_Generate',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-19']
                    ]
                ],
                'responses' => ['202' => []]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.Advisor/generateRecommendations/{operationId}' => ['get' => [
                'operationId' => 'Recommendations_GetGenerateStatus',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'operationId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string',
                        'format' => 'uuid'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-19']
                    ]
                ],
                'responses' => [
                    '202' => [],
                    '204' => []
                ]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.Advisor/recommendations' => ['get' => [
                'operationId' => 'Recommendations_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-19']
                    ],
                    [
                        'name' => '$filter',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => '$skipToken',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResourceRecommendationBaseListResult']]]
            ]],
            '/{resourceUri}/providers/Microsoft.Advisor/recommendations/{recommendationId}' => ['get' => [
                'operationId' => 'Recommendations_Get',
                'parameters' => [
                    [
                        'name' => 'resourceUri',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'recommendationId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-19']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ResourceRecommendationBase']]]
            ]],
            '/providers/Microsoft.Advisor/operations' => ['get' => [
                'operationId' => 'Operations_List',
                'parameters' => [[
                    'name' => 'api-version',
                    'in' => 'query',
                    'required' => TRUE,
                    'type' => 'string',
                    'enum' => ['2017-04-19']
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/OperationEntityListResult']]]
            ]],
            '/{resourceUri}/providers/Microsoft.Advisor/recommendations/{recommendationId}/suppressions/{name}' => [
                'get' => [
                    'operationId' => 'Suppressions_Get',
                    'parameters' => [
                        [
                            'name' => 'resourceUri',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recommendationId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-19']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/SuppressionContract']]]
                ],
                'put' => [
                    'operationId' => 'Suppressions_Create',
                    'parameters' => [
                        [
                            'name' => 'resourceUri',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recommendationId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'suppressionContract',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/SuppressionContract'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-19']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/SuppressionContract']]]
                ],
                'delete' => [
                    'operationId' => 'Suppressions_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceUri',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'recommendationId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'name',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-19']
                        ]
                    ],
                    'responses' => ['204' => []]
                ]
            ],
            '/subscriptions/{subscriptionId}/providers/Microsoft.Advisor/suppressions' => ['get' => [
                'operationId' => 'Suppressions_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-19']
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => '$skipToken',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/SuppressionContractListResult']]]
            ]]
        ],
        'definitions' => [
            'ShortDescription' => ['properties' => [
                'problem' => ['type' => 'string'],
                'solution' => ['type' => 'string']
            ]],
            'RecommendationProperties' => ['properties' => [
                'category' => [
                    'type' => 'string',
                    'enum' => [
                        'HighAvailability',
                        'Security',
                        'Performance',
                        'Cost'
                    ]
                ],
                'impact' => [
                    'type' => 'string',
                    'enum' => [
                        'High',
                        'Medium',
                        'Low'
                    ]
                ],
                'impactedField' => ['type' => 'string'],
                'impactedValue' => ['type' => 'string'],
                'lastUpdated' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'metadata' => [
                    'type' => 'object',
                    'additionalProperties' => ['type' => 'object']
                ],
                'recommendationTypeId' => ['type' => 'string'],
                'risk' => [
                    'type' => 'string',
                    'enum' => [
                        'Error',
                        'Warning',
                        'None'
                    ]
                ],
                'shortDescription' => ['$ref' => '#/definitions/ShortDescription'],
                'suppressionIds' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'string',
                        'format' => 'uuid'
                    ]
                ]
            ]],
            'ResourceRecommendationBase' => ['properties' => ['properties' => ['$ref' => '#/definitions/RecommendationProperties']]],
            'ResourceRecommendationBaseListResult' => ['properties' => [
                'nextLink' => ['type' => 'string'],
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ResourceRecommendationBase']
                ]
            ]],
            'Resource' => ['properties' => [
                'id' => ['type' => 'string'],
                'name' => ['type' => 'string'],
                'type' => ['type' => 'string']
            ]],
            'OperationDisplayInfo' => ['properties' => [
                'description' => ['type' => 'string'],
                'operation' => ['type' => 'string'],
                'provider' => ['type' => 'string'],
                'resource' => ['type' => 'string']
            ]],
            'OperationEntity' => ['properties' => [
                'name' => ['type' => 'string'],
                'display' => ['$ref' => '#/definitions/OperationDisplayInfo']
            ]],
            'OperationEntityListResult' => ['properties' => [
                'nextLink' => ['type' => 'string'],
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/OperationEntity']
                ]
            ]],
            'SuppressionProperties' => ['properties' => [
                'suppressionId' => ['type' => 'string'],
                'ttl' => ['type' => 'string']
            ]],
            'SuppressionContract' => ['properties' => ['properties' => ['$ref' => '#/definitions/SuppressionProperties']]],
            'SuppressionContractListResult' => ['properties' => [
                'nextLink' => ['type' => 'string'],
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/SuppressionContract']
                ]
            ]]
        ]
    ];
}
