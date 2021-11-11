# AceViral\TeamCity\CloudInstanceApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllCloudImages**](CloudInstanceApi.md#getAllCloudImages) | **GET** /app/rest/cloud/images | Get all cloud images.
[**getAllCloudInstances**](CloudInstanceApi.md#getAllCloudInstances) | **GET** /app/rest/cloud/instances | Get all cloud instances.
[**getAllCloudProfiles**](CloudInstanceApi.md#getAllCloudProfiles) | **GET** /app/rest/cloud/profiles | Get all cloud profiles.
[**getCloudImage**](CloudInstanceApi.md#getCloudImage) | **GET** /app/rest/cloud/images/{imageLocator} | Get cloud image matching the locator.
[**getCloudInstance**](CloudInstanceApi.md#getCloudInstance) | **GET** /app/rest/cloud/instances/{instanceLocator} | Get cloud instance matching the locator.
[**getCloudProfile**](CloudInstanceApi.md#getCloudProfile) | **GET** /app/rest/cloud/profiles/{profileLocator} | Get cloud profile matching the locator.
[**startInstance**](CloudInstanceApi.md#startInstance) | **POST** /app/rest/cloud/instances | Start a new cloud instance.
[**stopInstance**](CloudInstanceApi.md#stopInstance) | **DELETE** /app/rest/cloud/instances/{instanceLocator} | Stop cloud instance matching the locator.


# **getAllCloudImages**
> \AceViral\TeamCity\Model\CloudImages getAllCloudImages($locator, $fields)

Get all cloud images.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllCloudImages($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->getAllCloudImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CloudImages**](../Model/CloudImages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCloudInstances**
> \AceViral\TeamCity\Model\CloudInstances getAllCloudInstances($locator, $fields)

Get all cloud instances.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllCloudInstances($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->getAllCloudInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CloudInstances**](../Model/CloudInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCloudProfiles**
> \AceViral\TeamCity\Model\CloudProfiles getAllCloudProfiles($locator, $fields)

Get all cloud profiles.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllCloudProfiles($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->getAllCloudProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CloudProfiles**](../Model/CloudProfiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudImage**
> \AceViral\TeamCity\Model\CloudImage getCloudImage($image_locator, $fields)

Get cloud image matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_locator = "image_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCloudImage($image_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->getCloudImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CloudImage**](../Model/CloudImage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudInstance**
> \AceViral\TeamCity\Model\CloudInstance getCloudInstance($instance_locator, $fields)

Get cloud instance matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instance_locator = "instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCloudInstance($instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->getCloudInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CloudInstance**](../Model/CloudInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudProfile**
> \AceViral\TeamCity\Model\CloudProfile getCloudProfile($profile_locator, $fields)

Get cloud profile matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_locator = "profile_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCloudProfile($profile_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->getCloudProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\CloudProfile**](../Model/CloudProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startInstance**
> startInstance($body, $fields)

Start a new cloud instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \AceViral\TeamCity\Model\CloudInstance(); // \AceViral\TeamCity\Model\CloudInstance | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->startInstance($body, $fields);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->startInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AceViral\TeamCity\Model\CloudInstance**](../Model/CloudInstance.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopInstance**
> stopInstance($instance_locator)

Stop cloud instance matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instance_locator = "instance_locator_example"; // string | 

try {
    $apiInstance->stopInstance($instance_locator);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->stopInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

