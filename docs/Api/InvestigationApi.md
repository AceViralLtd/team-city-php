# Swagger\Client\InvestigationApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvestigation**](InvestigationApi.md#addInvestigation) | **POST** /app/rest/investigations | Create a new investigation.
[**addMultipleInvestigations**](InvestigationApi.md#addMultipleInvestigations) | **POST** /app/rest/investigations/multiple | Create multiple new investigations.
[**deleteInvestigation**](InvestigationApi.md#deleteInvestigation) | **DELETE** /app/rest/investigations/{investigationLocator} | Delete investigation matching the locator.
[**getAllInvestigations**](InvestigationApi.md#getAllInvestigations) | **GET** /app/rest/investigations | Get all investigations.
[**getInvestigation**](InvestigationApi.md#getInvestigation) | **GET** /app/rest/investigations/{investigationLocator} | Get investigation matching the locator.
[**replaceInvestigation**](InvestigationApi.md#replaceInvestigation) | **PUT** /app/rest/investigations/{investigationLocator} | Update investigation matching the locator.


# **addInvestigation**
> \Swagger\Client\Model\Investigation addInvestigation($body, $fields)

Create a new investigation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Investigation(); // \Swagger\Client\Model\Investigation | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addInvestigation($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->addInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Investigation**](../Model/Investigation.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Investigation**](../Model/Investigation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMultipleInvestigations**
> \Swagger\Client\Model\Investigations addMultipleInvestigations($body, $fields)

Create multiple new investigations.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Investigations(); // \Swagger\Client\Model\Investigations | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addMultipleInvestigations($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->addMultipleInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Investigations**](../Model/Investigations.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvestigation**
> deleteInvestigation($investigation_locator)

Delete investigation matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$investigation_locator = "investigation_locator_example"; // string | 

try {
    $apiInstance->deleteInvestigation($investigation_locator);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->deleteInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investigation_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInvestigations**
> \Swagger\Client\Model\Investigations getAllInvestigations($locator, $fields)

Get all investigations.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllInvestigations($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->getAllInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvestigation**
> \Swagger\Client\Model\Investigation getInvestigation($investigation_locator, $fields)

Get investigation matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$investigation_locator = "investigation_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getInvestigation($investigation_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->getInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investigation_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Investigation**](../Model/Investigation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceInvestigation**
> \Swagger\Client\Model\Investigation replaceInvestigation($investigation_locator, $body, $fields)

Update investigation matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$investigation_locator = "investigation_locator_example"; // string | 
$body = new \Swagger\Client\Model\Investigation(); // \Swagger\Client\Model\Investigation | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceInvestigation($investigation_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->replaceInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investigation_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Investigation**](../Model/Investigation.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Investigation**](../Model/Investigation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

