# AceViral\TeamCity\AgentApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAgent**](AgentApi.md#deleteAgent) | **DELETE** /app/rest/agents/{agentLocator} | Delete an inactive agent.
[**getAgent**](AgentApi.md#getAgent) | **GET** /app/rest/agents/{agentLocator} | Get agent matching the locator.
[**getAgentField**](AgentApi.md#getAgentField) | **GET** /app/rest/agents/{agentLocator}/{field} | Get a field of the matching agent.
[**getAgentPool**](AgentApi.md#getAgentPool) | **GET** /app/rest/agents/{agentLocator}/pool | Get the agent pool of the matching agent.
[**getAllAgents**](AgentApi.md#getAllAgents) | **GET** /app/rest/agents | Get all known agents.
[**getAuthorizedInfo**](AgentApi.md#getAuthorizedInfo) | **GET** /app/rest/agents/{agentLocator}/authorizedInfo | Get the authorization info of the matching agent.
[**getBuildConfigurationRunPolicy**](AgentApi.md#getBuildConfigurationRunPolicy) | **GET** /app/rest/agents/{agentLocator}/compatibilityPolicy | Get the build configuration run policy of the matching agent.
[**getCompatibleBuildTypes**](AgentApi.md#getCompatibleBuildTypes) | **GET** /app/rest/agents/{agentLocator}/compatibleBuildTypes | Get build types compatible with the matching agent.
[**getEnabledInfo**](AgentApi.md#getEnabledInfo) | **GET** /app/rest/agents/{agentLocator}/enabledInfo | Check if the matching agent is enabled.
[**getIncompatibleBuildTypes**](AgentApi.md#getIncompatibleBuildTypes) | **GET** /app/rest/agents/{agentLocator}/incompatibleBuildTypes | Get build types incompatible with the matching agent.
[**setAgentField**](AgentApi.md#setAgentField) | **PUT** /app/rest/agents/{agentLocator}/{field} | Update a field of the matching agent.
[**setAgentPool**](AgentApi.md#setAgentPool) | **PUT** /app/rest/agents/{agentLocator}/pool | Assign the matching agent to the specified agent pool.
[**setAuthorizedInfo**](AgentApi.md#setAuthorizedInfo) | **PUT** /app/rest/agents/{agentLocator}/authorizedInfo | Update the authorization info of the matching agent.
[**setBuildConfigurationRunPolicy**](AgentApi.md#setBuildConfigurationRunPolicy) | **PUT** /app/rest/agents/{agentLocator}/compatibilityPolicy | Update build configuration run policy of agent matching locator.
[**setEnabledInfo**](AgentApi.md#setEnabledInfo) | **PUT** /app/rest/agents/{agentLocator}/enabledInfo | Update the enablement status of the matching agent.


# **deleteAgent**
> deleteAgent($agent_locator)

Delete an inactive agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 

try {
    $apiInstance->deleteAgent($agent_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->deleteAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgent**
> \AceViral\TeamCity\Model\Agent getAgent($agent_locator, $fields)

Get agent matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgent($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Agent**](../Model/Agent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentField**
> string getAgentField($agent_locator, $field)

Get a field of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getAgentField($agent_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAgentField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentPool**
> \AceViral\TeamCity\Model\AgentPool getAgentPool($agent_locator, $fields)

Get the agent pool of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentPool($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAgents**
> \AceViral\TeamCity\Model\Agents getAllAgents($locator, $fields)

Get all known agents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllAgents($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAllAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getAuthorizedInfo**
> \AceViral\TeamCity\Model\AuthorizedInfo getAuthorizedInfo($agent_locator, $fields)

Get the authorization info of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAuthorizedInfo($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAuthorizedInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AuthorizedInfo**](../Model/AuthorizedInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildConfigurationRunPolicy**
> \AceViral\TeamCity\Model\CompatibilityPolicy getBuildConfigurationRunPolicy($agent_locator, $fields)

Get the build configuration run policy of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildConfigurationRunPolicy($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getBuildConfigurationRunPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CompatibilityPolicy**](../Model/CompatibilityPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompatibleBuildTypes**
> \AceViral\TeamCity\Model\BuildTypes getCompatibleBuildTypes($agent_locator, $fields)

Get build types compatible with the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCompatibleBuildTypes($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getCompatibleBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnabledInfo**
> \AceViral\TeamCity\Model\EnabledInfo getEnabledInfo($agent_locator, $fields)

Check if the matching agent is enabled.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getEnabledInfo($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getEnabledInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\EnabledInfo**](../Model/EnabledInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncompatibleBuildTypes**
> \AceViral\TeamCity\Model\Compatibilities getIncompatibleBuildTypes($agent_locator, $fields)

Get build types incompatible with the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getIncompatibleBuildTypes($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getIncompatibleBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Compatibilities**](../Model/Compatibilities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentField**
> string setAgentField($agent_locator, $field, $body)

Update a field of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setAgentField($agent_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAgentField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
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

# **setAgentPool**
> \AceViral\TeamCity\Model\AgentPool setAgentPool($agent_locator, $body, $fields)

Assign the matching agent to the specified agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\AgentPool(); // \AceViral\TeamCity\Model\AgentPool | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setAgentPool($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAuthorizedInfo**
> \AceViral\TeamCity\Model\AuthorizedInfo setAuthorizedInfo($agent_locator, $body, $fields)

Update the authorization info of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\AuthorizedInfo(); // \AceViral\TeamCity\Model\AuthorizedInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setAuthorizedInfo($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAuthorizedInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\AuthorizedInfo**](../Model/AuthorizedInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AuthorizedInfo**](../Model/AuthorizedInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildConfigurationRunPolicy**
> \AceViral\TeamCity\Model\CompatibilityPolicy setBuildConfigurationRunPolicy($agent_locator, $body, $fields)

Update build configuration run policy of agent matching locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\CompatibilityPolicy(); // \AceViral\TeamCity\Model\CompatibilityPolicy | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildConfigurationRunPolicy($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setBuildConfigurationRunPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\CompatibilityPolicy**](../Model/CompatibilityPolicy.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CompatibilityPolicy**](../Model/CompatibilityPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setEnabledInfo**
> \AceViral\TeamCity\Model\EnabledInfo setEnabledInfo($agent_locator, $body, $fields)

Update the enablement status of the matching agent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\EnabledInfo(); // \AceViral\TeamCity\Model\EnabledInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setEnabledInfo($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setEnabledInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\EnabledInfo**](../Model/EnabledInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\EnabledInfo**](../Model/EnabledInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

