# AceViral\TeamCity\BuildQueueApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBuildToQueue**](BuildQueueApi.md#addBuildToQueue) | **POST** /app/rest/buildQueue | Add a new build to the queue.
[**addTagsToBuildOfBuildQueue**](BuildQueueApi.md#addTagsToBuildOfBuildQueue) | **POST** /app/rest/buildQueue/{buildLocator}/tags | Add tags to the matching build.
[**cancelQueuedBuild**](BuildQueueApi.md#cancelQueuedBuild) | **POST** /app/rest/buildQueue/{queuedBuildLocator} | Cancel a queued matching build.
[**deleteAllQueuedBuilds**](BuildQueueApi.md#deleteAllQueuedBuilds) | **DELETE** /app/rest/buildQueue | Delete all queued builds.
[**deleteQueuedBuild**](BuildQueueApi.md#deleteQueuedBuild) | **DELETE** /app/rest/buildQueue/{queuedBuildLocator} | Delete a queued matching build.
[**getAllQueuedBuilds**](BuildQueueApi.md#getAllQueuedBuilds) | **GET** /app/rest/buildQueue | Get all queued builds.
[**getCompatibleAgentsForBuild**](BuildQueueApi.md#getCompatibleAgentsForBuild) | **GET** /app/rest/buildQueue/{queuedBuildLocator}/compatibleAgents | Get compatible agents for a queued matching build.
[**getQueuedBuild**](BuildQueueApi.md#getQueuedBuild) | **GET** /app/rest/buildQueue/{queuedBuildLocator} | Get a queued matching build.
[**getQueuedBuildPosition**](BuildQueueApi.md#getQueuedBuildPosition) | **GET** /app/rest/buildQueue/order/{queuePosition} | Get the queue position of a queued matching build.
[**getQueuedBuildTags**](BuildQueueApi.md#getQueuedBuildTags) | **GET** /app/rest/buildQueue/{buildLocator}/tags | Get tags of the queued matching build.
[**setQueuedBuildPosition**](BuildQueueApi.md#setQueuedBuildPosition) | **PUT** /app/rest/buildQueue/order/{queuePosition} | Update the queue position of a queued matching build.
[**setQueuedBuildsOrder**](BuildQueueApi.md#setQueuedBuildsOrder) | **PUT** /app/rest/buildQueue/order | Update the build queue order.


# **addBuildToQueue**
> \AceViral\TeamCity\Model\Build addBuildToQueue($body, $move_to_top)

Add a new build to the queue.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \AceViral\TeamCity\Model\Build(); // \AceViral\TeamCity\Model\Build | 
$move_to_top = true; // bool | 

try {
    $result = $apiInstance->addBuildToQueue($body, $move_to_top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->addBuildToQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AceViral\TeamCity\Model\Build**](../Model/Build.md)|  | [optional]
 **move_to_top** | **bool**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTagsToBuildOfBuildQueue**
> addTagsToBuildOfBuildQueue($build_locator, $body)

Add tags to the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Tags(); // \AceViral\TeamCity\Model\Tags | 

try {
    $apiInstance->addTagsToBuildOfBuildQueue($build_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->addTagsToBuildOfBuildQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Tags**](../Model/Tags.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelQueuedBuild**
> \AceViral\TeamCity\Model\Build cancelQueuedBuild($queued_build_locator, $body)

Cancel a queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\BuildCancelRequest(); // \AceViral\TeamCity\Model\BuildCancelRequest | 

try {
    $result = $apiInstance->cancelQueuedBuild($queued_build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->cancelQueuedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllQueuedBuilds**
> deleteAllQueuedBuilds($locator, $fields)

Delete all queued builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->deleteAllQueuedBuilds($locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->deleteAllQueuedBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQueuedBuild**
> deleteQueuedBuild($queued_build_locator)

Delete a queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 

try {
    $apiInstance->deleteQueuedBuild($queued_build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->deleteQueuedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllQueuedBuilds**
> \AceViral\TeamCity\Model\Builds getAllQueuedBuilds($locator, $fields)

Get all queued builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllQueuedBuilds($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getAllQueuedBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompatibleAgentsForBuild**
> \AceViral\TeamCity\Model\Agents getCompatibleAgentsForBuild($queued_build_locator, $fields)

Get compatible agents for a queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCompatibleAgentsForBuild($queued_build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getCompatibleAgentsForBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Agents**](../Model/Agents.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQueuedBuild**
> \AceViral\TeamCity\Model\Build getQueuedBuild($queued_build_locator, $fields)

Get a queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getQueuedBuild($queued_build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getQueuedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQueuedBuildPosition**
> \AceViral\TeamCity\Model\Build getQueuedBuildPosition($queue_position, $fields)

Get the queue position of a queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queue_position = "queue_position_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getQueuedBuildPosition($queue_position, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getQueuedBuildPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_position** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQueuedBuildTags**
> \AceViral\TeamCity\Model\Tags getQueuedBuildTags($build_locator, $locator, $fields)

Get tags of the queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getQueuedBuildTags($build_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getQueuedBuildTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQueuedBuildPosition**
> \AceViral\TeamCity\Model\Build setQueuedBuildPosition($queue_position, $body, $fields)

Update the queue position of a queued matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queue_position = "queue_position_example"; // string | 
$body = new \AceViral\TeamCity\Model\Build(); // \AceViral\TeamCity\Model\Build | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setQueuedBuildPosition($queue_position, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->setQueuedBuildPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_position** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Build**](../Model/Build.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQueuedBuildsOrder**
> \AceViral\TeamCity\Model\Builds setQueuedBuildsOrder($body, $fields)

Update the build queue order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \AceViral\TeamCity\Model\Builds(); // \AceViral\TeamCity\Model\Builds | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setQueuedBuildsOrder($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->setQueuedBuildsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AceViral\TeamCity\Model\Builds**](../Model/Builds.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

