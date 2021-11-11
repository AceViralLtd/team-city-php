# Swagger\Client\MuteApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllMutedTests**](MuteApi.md#getAllMutedTests) | **GET** /app/rest/mutes | Get all muted tests.
[**getMutedTest**](MuteApi.md#getMutedTest) | **GET** /app/rest/mutes/{muteLocator} | Get a muted test.
[**muteMultipleTests**](MuteApi.md#muteMultipleTests) | **POST** /app/rest/mutes/multiple | Mute multiple tests.
[**muteTest**](MuteApi.md#muteTest) | **POST** /app/rest/mutes | Mute a test.
[**unmuteTest**](MuteApi.md#unmuteTest) | **DELETE** /app/rest/mutes/{muteLocator} | Unmute the matching test.


# **getAllMutedTests**
> \Swagger\Client\Model\Mutes getAllMutedTests($locator, $fields)

Get all muted tests.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllMutedTests($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->getAllMutedTests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Mutes**](../Model/Mutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMutedTest**
> \Swagger\Client\Model\Mute getMutedTest($mute_locator, $fields)

Get a muted test.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mute_locator = "mute_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getMutedTest($mute_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->getMutedTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mute_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Mute**](../Model/Mute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteMultipleTests**
> \Swagger\Client\Model\Mutes muteMultipleTests($body, $fields)

Mute multiple tests.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Mutes(); // \Swagger\Client\Model\Mutes | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->muteMultipleTests($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->muteMultipleTests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Mutes**](../Model/Mutes.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Mutes**](../Model/Mutes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteTest**
> \Swagger\Client\Model\Mute muteTest($body, $fields)

Mute a test.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Mute(); // \Swagger\Client\Model\Mute | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->muteTest($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->muteTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Mute**](../Model/Mute.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Mute**](../Model/Mute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmuteTest**
> unmuteTest($mute_locator, $body)

Unmute the matching test.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MuteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mute_locator = "mute_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $apiInstance->unmuteTest($mute_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling MuteApi->unmuteTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mute_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

