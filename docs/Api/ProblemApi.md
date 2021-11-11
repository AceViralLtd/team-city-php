# AceViral\TeamCity\ProblemApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllBuildProblems**](ProblemApi.md#getAllBuildProblems) | **GET** /app/rest/problems | Get all build problems.
[**getBuildProblem**](ProblemApi.md#getBuildProblem) | **GET** /app/rest/problems/{problemLocator} | Get a matching build problem.


# **getAllBuildProblems**
> \AceViral\TeamCity\Model\Problems getAllBuildProblems($locator, $fields)

Get all build problems.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProblemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildProblems($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProblemApi->getAllBuildProblems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Problems**](../Model/Problems.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildProblem**
> \AceViral\TeamCity\Model\Problem getBuildProblem($problem_locator, $fields)

Get a matching build problem.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProblemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$problem_locator = "problem_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildProblem($problem_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProblemApi->getBuildProblem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **problem_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Problem**](../Model/Problem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

