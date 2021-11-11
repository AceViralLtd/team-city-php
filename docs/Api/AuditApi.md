# Swagger\Client\AuditApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllAuditEvents**](AuditApi.md#getAllAuditEvents) | **GET** /app/rest/audit | Get all audit events.
[**getAuditEvent**](AuditApi.md#getAuditEvent) | **GET** /app/rest/audit/{auditEventLocator} | Get audit event matching the locator.


# **getAllAuditEvents**
> \Swagger\Client\Model\AuditEvents getAllAuditEvents($locator, $fields)

Get all audit events.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllAuditEvents($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->getAllAuditEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AuditEvents**](../Model/AuditEvents.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuditEvent**
> \Swagger\Client\Model\AuditEvent getAuditEvent($audit_event_locator, $fields)

Get audit event matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_event_locator = "audit_event_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAuditEvent($audit_event_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->getAuditEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_event_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AuditEvent**](../Model/AuditEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

