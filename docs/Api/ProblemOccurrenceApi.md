# Swagger\Client\ProblemOccurrenceApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllBuildProblemOccurrences**](ProblemOccurrenceApi.md#getAllBuildProblemOccurrences) | **GET** /app/rest/problemOccurrences | Get all build problem occurrences.
[**getBuildProblemOccurrence**](ProblemOccurrenceApi.md#getBuildProblemOccurrence) | **GET** /app/rest/problemOccurrences/{problemLocator} | Get a matching build problem occurrence.


# **getAllBuildProblemOccurrences**
> \Swagger\Client\Model\ProblemOccurrences getAllBuildProblemOccurrences($locator, $fields)

Get all build problem occurrences.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProblemOccurrenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildProblemOccurrences($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProblemOccurrenceApi->getAllBuildProblemOccurrences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProblemOccurrences**](../Model/ProblemOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildProblemOccurrence**
> \Swagger\Client\Model\ProblemOccurrence getBuildProblemOccurrence($problem_locator, $fields)

Get a matching build problem occurrence.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProblemOccurrenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$problem_locator = "problem_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildProblemOccurrence($problem_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProblemOccurrenceApi->getBuildProblemOccurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **problem_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProblemOccurrence**](../Model/ProblemOccurrence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

