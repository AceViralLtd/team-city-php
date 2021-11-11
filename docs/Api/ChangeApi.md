# Swagger\Client\ChangeApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllChanges**](ChangeApi.md#getAllChanges) | **GET** /app/rest/changes | Get all changes.
[**getChange**](ChangeApi.md#getChange) | **GET** /app/rest/changes/{changeLocator} | Get change matching the locator.
[**getChangeAttributes**](ChangeApi.md#getChangeAttributes) | **GET** /app/rest/changes/{changeLocator}/attributes | Get attributes of the matching change.
[**getChangeDuplicates**](ChangeApi.md#getChangeDuplicates) | **GET** /app/rest/changes/{changeLocator}/duplicates | Get duplicates of the matching change.
[**getChangeField**](ChangeApi.md#getChangeField) | **GET** /app/rest/changes/{changeLocator}/{field} | Get a field of the matching change.
[**getChangeFirstBuilds**](ChangeApi.md#getChangeFirstBuilds) | **GET** /app/rest/changes/{changeLocator}/firstBuilds | Get first builds of the matching change.
[**getChangeIssue**](ChangeApi.md#getChangeIssue) | **GET** /app/rest/changes/{changeLocator}/issues | Get issues of the matching change.
[**getChangeParentChanges**](ChangeApi.md#getChangeParentChanges) | **GET** /app/rest/changes/{changeLocator}/parentChanges | Get parent changes of the matching change.
[**getChangeParentRevisions**](ChangeApi.md#getChangeParentRevisions) | **GET** /app/rest/changes/{changeLocator}/parentRevisions | Get parent revisions of the matching change.
[**getChangeRelatedBuildTypes**](ChangeApi.md#getChangeRelatedBuildTypes) | **GET** /app/rest/changes/{changeLocator}/buildTypes | Get build configurations related to the matching change.
[**getChangeVcsRoot**](ChangeApi.md#getChangeVcsRoot) | **GET** /app/rest/changes/{changeLocator}/vcsRootInstance | Get a VCS root instance of the matching change.
[**getUniqueCommiters**](ChangeApi.md#getUniqueCommiters) | **GET** /app/rest/changes/{changeLocator}/commiters | Get unique commiters of the matching changes.


# **getAllChanges**
> \Swagger\Client\Model\Changes getAllChanges($locator, $fields)

Get all changes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllChanges($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getAllChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Changes**](../Model/Changes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChange**
> \Swagger\Client\Model\Change getChange($change_locator, $fields)

Get change matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChange($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Change**](../Model/Change.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeAttributes**
> \Swagger\Client\Model\Entries getChangeAttributes($change_locator, $fields)

Get attributes of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeAttributes($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeDuplicates**
> \Swagger\Client\Model\Changes getChangeDuplicates($change_locator, $fields)

Get duplicates of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeDuplicates($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeDuplicates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Changes**](../Model/Changes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeField**
> string getChangeField($change_locator, $field)

Get a field of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getChangeField($change_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeFirstBuilds**
> \Swagger\Client\Model\Builds getChangeFirstBuilds($change_locator, $fields)

Get first builds of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeFirstBuilds($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeFirstBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeIssue**
> \Swagger\Client\Model\Issues getChangeIssue($change_locator)

Get issues of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 

try {
    $result = $apiInstance->getChangeIssue($change_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeIssue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |

### Return type

[**\Swagger\Client\Model\Issues**](../Model/Issues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeParentChanges**
> \Swagger\Client\Model\Changes getChangeParentChanges($change_locator, $fields)

Get parent changes of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeParentChanges($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeParentChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Changes**](../Model/Changes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeParentRevisions**
> \Swagger\Client\Model\Items getChangeParentRevisions($change_locator)

Get parent revisions of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 

try {
    $result = $apiInstance->getChangeParentRevisions($change_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeParentRevisions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeRelatedBuildTypes**
> \Swagger\Client\Model\BuildTypes getChangeRelatedBuildTypes($change_locator, $fields)

Get build configurations related to the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeRelatedBuildTypes($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeRelatedBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeVcsRoot**
> \Swagger\Client\Model\VcsRootInstance getChangeVcsRoot($change_locator, $fields)

Get a VCS root instance of the matching change.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeVcsRoot($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeVcsRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootInstance**](../Model/VcsRootInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniqueCommiters**
> \Swagger\Client\Model\Commiters getUniqueCommiters($change_locator, $fields)

Get unique commiters of the matching changes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUniqueCommiters($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getUniqueCommiters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Commiters**](../Model/Commiters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

