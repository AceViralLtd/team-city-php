# Swagger\Client\TestOccurrenceApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllTestOccurrences**](TestOccurrenceApi.md#getAllTestOccurrences) | **GET** /app/rest/testOccurrences | Get all test occurrences.
[**getTestOccurrence**](TestOccurrenceApi.md#getTestOccurrence) | **GET** /app/rest/testOccurrences/{testLocator} | Get a matching test occurrence.


# **getAllTestOccurrences**
> \Swagger\Client\Model\TestOccurrences getAllTestOccurrences($locator, $fields)

Get all test occurrences.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestOccurrenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllTestOccurrences($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestOccurrenceApi->getAllTestOccurrences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TestOccurrences**](../Model/TestOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTestOccurrence**
> \Swagger\Client\Model\TestOccurrence getTestOccurrence($test_locator, $fields)

Get a matching test occurrence.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestOccurrenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_locator = "test_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTestOccurrence($test_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestOccurrenceApi->getTestOccurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TestOccurrence**](../Model/TestOccurrence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

