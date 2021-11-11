# AceViral\TeamCity\AgentPoolApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAgentToAgentPool**](AgentPoolApi.md#addAgentToAgentPool) | **POST** /app/rest/agentPools/{agentPoolLocator}/agents | Assign the agent to the matching agent pool.
[**addProjectToAgentPool**](AgentPoolApi.md#addProjectToAgentPool) | **POST** /app/rest/agentPools/{agentPoolLocator}/projects | Assign the project to the matching agent pool.
[**createAgentPool**](AgentPoolApi.md#createAgentPool) | **POST** /app/rest/agentPools | Create a new agent pool.
[**deleteAgentPool**](AgentPoolApi.md#deleteAgentPool) | **DELETE** /app/rest/agentPools/{agentPoolLocator} | Delete the agent pool matching the locator.
[**deleteAllProjectsFromAgentPool**](AgentPoolApi.md#deleteAllProjectsFromAgentPool) | **DELETE** /app/rest/agentPools/{agentPoolLocator}/projects | Unassign all projects from the matching agent pool.
[**deleteProjectFromAgentPool**](AgentPoolApi.md#deleteProjectFromAgentPool) | **DELETE** /app/rest/agentPools/{agentPoolLocator}/projects/{projectLocator} | Unassign the project from the matching agent pool.
[**getAgentPoolOfAgentPool**](AgentPoolApi.md#getAgentPoolOfAgentPool) | **GET** /app/rest/agentPools/{agentPoolLocator} | Get the agent pool matching the locator.
[**getAllAgentPools**](AgentPoolApi.md#getAllAgentPools) | **GET** /app/rest/agentPools | Get all agent pools.
[**getAllAgentsFromAgentPool**](AgentPoolApi.md#getAllAgentsFromAgentPool) | **GET** /app/rest/agentPools/{agentPoolLocator}/agents | Get the agent of the matching agent pool.
[**getAllProjectsFromAgentPool**](AgentPoolApi.md#getAllProjectsFromAgentPool) | **GET** /app/rest/agentPools/{agentPoolLocator}/projects | Get all projects of the matching agent pool.
[**getFieldFromAgentPool**](AgentPoolApi.md#getFieldFromAgentPool) | **GET** /app/rest/agentPools/{agentPoolLocator}/{field} | Get a field of the matching agent pool.
[**setAgentPoolField**](AgentPoolApi.md#setAgentPoolField) | **PUT** /app/rest/agentPools/{agentPoolLocator}/{field} | Update a field of the matching agent pool.
[**setAgentPoolProjects**](AgentPoolApi.md#setAgentPoolProjects) | **PUT** /app/rest/agentPools/{agentPoolLocator}/projects | Update projects of the matching agent pool.


# **addAgentToAgentPool**
> \AceViral\TeamCity\Model\Agent addAgentToAgentPool($agent_pool_locator, $body, $fields)

Assign the agent to the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Agent(); // \AceViral\TeamCity\Model\Agent | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addAgentToAgentPool($agent_pool_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->addAgentToAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Agent**](../Model/Agent.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Agent**](../Model/Agent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProjectToAgentPool**
> \AceViral\TeamCity\Model\Project addProjectToAgentPool($agent_pool_locator, $body)

Assign the project to the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Project(); // \AceViral\TeamCity\Model\Project | 

try {
    $result = $apiInstance->addProjectToAgentPool($agent_pool_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->addProjectToAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Project**](../Model/Project.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAgentPool**
> \AceViral\TeamCity\Model\AgentPool createAgentPool($body)

Create a new agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \AceViral\TeamCity\Model\AgentPool(); // \AceViral\TeamCity\Model\AgentPool | 

try {
    $result = $apiInstance->createAgentPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->createAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAgentPool**
> deleteAgentPool($agent_pool_locator)

Delete the agent pool matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 

try {
    $apiInstance->deleteAgentPool($agent_pool_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->deleteAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllProjectsFromAgentPool**
> deleteAllProjectsFromAgentPool($agent_pool_locator)

Unassign all projects from the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 

try {
    $apiInstance->deleteAllProjectsFromAgentPool($agent_pool_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->deleteAllProjectsFromAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProjectFromAgentPool**
> deleteProjectFromAgentPool($agent_pool_locator, $project_locator)

Unassign the project from the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteProjectFromAgentPool($agent_pool_locator, $project_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->deleteProjectFromAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentPoolOfAgentPool**
> \AceViral\TeamCity\Model\AgentPool getAgentPoolOfAgentPool($agent_pool_locator, $fields)

Get the agent pool matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentPoolOfAgentPool($agent_pool_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getAgentPoolOfAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAgentPools**
> \AceViral\TeamCity\Model\AgentPools getAllAgentPools($locator, $fields)

Get all agent pools.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllAgentPools($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getAllAgentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPools**](../Model/AgentPools.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAgentsFromAgentPool**
> \AceViral\TeamCity\Model\Agents getAllAgentsFromAgentPool($agent_pool_locator, $locator, $fields)

Get the agent of the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllAgentsFromAgentPool($agent_pool_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getAllAgentsFromAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Agents**](../Model/Agents.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProjectsFromAgentPool**
> \AceViral\TeamCity\Model\Projects getAllProjectsFromAgentPool($agent_pool_locator, $fields)

Get all projects of the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllProjectsFromAgentPool($agent_pool_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getAllProjectsFromAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFieldFromAgentPool**
> string getFieldFromAgentPool($agent_pool_locator, $field)

Get a field of the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getFieldFromAgentPool($agent_pool_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getFieldFromAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentPoolField**
> string setAgentPoolField($agent_pool_locator, $field, $body)

Update a field of the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setAgentPoolField($agent_pool_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->setAgentPoolField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **field** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentPoolProjects**
> \AceViral\TeamCity\Model\Projects setAgentPoolProjects($agent_pool_locator, $body)

Update projects of the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Projects(); // \AceViral\TeamCity\Model\Projects | 

try {
    $result = $apiInstance->setAgentPoolProjects($agent_pool_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->setAgentPoolProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

