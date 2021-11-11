# AceViral\TeamCity\VcsRootApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addVcsRoot**](VcsRootApi.md#addVcsRoot) | **POST** /app/rest/vcs-roots | Add a new VCS root.
[**deleteAllVcsRootProperties**](VcsRootApi.md#deleteAllVcsRootProperties) | **DELETE** /app/rest/vcs-roots/{vcsRootLocator}/properties | Delete all properties of the matching VCS root.
[**deleteVcsRoot**](VcsRootApi.md#deleteVcsRoot) | **DELETE** /app/rest/vcs-roots/{vcsRootLocator} | Remove VCS root matching the locator.
[**deleteVcsRootProperty**](VcsRootApi.md#deleteVcsRootProperty) | **DELETE** /app/rest/vcs-roots/{vcsRootLocator}/properties/{name} | Delete a property of the matching VCS root.
[**getAllVcsRootProperties**](VcsRootApi.md#getAllVcsRootProperties) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/properties | Get all properties of the matching VCS root.
[**getAllVcsRoots**](VcsRootApi.md#getAllVcsRoots) | **GET** /app/rest/vcs-roots | Get all VCS roots.
[**getRootEndpoints**](VcsRootApi.md#getRootEndpoints) | **GET** /app/rest/vcs-roots/{vcsRootLocator} | Get root endpoints.
[**getVcsRootField**](VcsRootApi.md#getVcsRootField) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/{field} | Get a field of the matching VCS root.
[**getVcsRootInstances**](VcsRootApi.md#getVcsRootInstances) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/instances | Get all VCS root instances of the matching VCS root.
[**getVcsRootProperty**](VcsRootApi.md#getVcsRootProperty) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/properties/{name} | Get a property on the matching VCS root.
[**getVcsRootSettingsFile**](VcsRootApi.md#getVcsRootSettingsFile) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/settingsFile | Get the settings file of the matching VCS root.
[**setVcsRootField**](VcsRootApi.md#setVcsRootField) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/{field} | Update a field of the matching VCS root.
[**setVcsRootProperties**](VcsRootApi.md#setVcsRootProperties) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/properties | Update all properties of the matching VCS root.
[**setVcsRootProperty**](VcsRootApi.md#setVcsRootProperty) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/properties/{name} | Update a property of the matching VCS root.


# **addVcsRoot**
> \AceViral\TeamCity\Model\VcsRoot addVcsRoot($body, $fields)

Add a new VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \AceViral\TeamCity\Model\VcsRoot(); // \AceViral\TeamCity\Model\VcsRoot | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addVcsRoot($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->addVcsRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AceViral\TeamCity\Model\VcsRoot**](../Model/VcsRoot.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRoot**](../Model/VcsRoot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllVcsRootProperties**
> deleteAllVcsRootProperties($vcs_root_locator)

Delete all properties of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $apiInstance->deleteAllVcsRootProperties($vcs_root_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->deleteAllVcsRootProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVcsRoot**
> deleteVcsRoot($vcs_root_locator)

Remove VCS root matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $apiInstance->deleteVcsRoot($vcs_root_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->deleteVcsRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVcsRootProperty**
> deleteVcsRootProperty($vcs_root_locator, $name)

Delete a property of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->deleteVcsRootProperty($vcs_root_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->deleteVcsRootProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllVcsRootProperties**
> \AceViral\TeamCity\Model\Properties getAllVcsRootProperties($vcs_root_locator, $fields)

Get all properties of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllVcsRootProperties($vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getAllVcsRootProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllVcsRoots**
> \AceViral\TeamCity\Model\VcsRoots getAllVcsRoots($locator, $fields)

Get all VCS roots.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllVcsRoots($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getAllVcsRoots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRoots**](../Model/VcsRoots.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRootEndpoints**
> \AceViral\TeamCity\Model\VcsRoot getRootEndpoints($vcs_root_locator, $fields)

Get root endpoints.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getRootEndpoints($vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getRootEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRoot**](../Model/VcsRoot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootField**
> string getVcsRootField($vcs_root_locator, $field)

Get a field of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getVcsRootField($vcs_root_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getVcsRootField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstances**
> \AceViral\TeamCity\Model\VcsRootInstances getVcsRootInstances($vcs_root_locator, $fields)

Get all VCS root instances of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstances($vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getVcsRootInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootProperty**
> string getVcsRootProperty($vcs_root_locator, $name)

Get a property on the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getVcsRootProperty($vcs_root_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getVcsRootProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootSettingsFile**
> string getVcsRootSettingsFile($vcs_root_locator)

Get the settings file of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $result = $apiInstance->getVcsRootSettingsFile($vcs_root_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getVcsRootSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setVcsRootField**
> string setVcsRootField($vcs_root_locator, $field, $body)

Update a field of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setVcsRootField($vcs_root_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->setVcsRootField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

# **setVcsRootProperties**
> \AceViral\TeamCity\Model\Properties setVcsRootProperties($vcs_root_locator, $body, $fields)

Update all properties of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Properties(); // \AceViral\TeamCity\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setVcsRootProperties($vcs_root_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->setVcsRootProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Properties**](../Model/Properties.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setVcsRootProperty**
> string setVcsRootProperty($vcs_root_locator, $name, $body)

Update a property of the matching VCS root.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setVcsRootProperty($vcs_root_locator, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->setVcsRootProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

