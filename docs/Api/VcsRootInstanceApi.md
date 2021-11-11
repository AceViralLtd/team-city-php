# AceViral\TeamCity\VcsRootInstanceApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVcsRootInstanceField**](VcsRootInstanceApi.md#deleteVcsRootInstanceField) | **DELETE** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/{field} | Remove a field of the matching VCS root instance.
[**deleteVcsRootInstanceRepositoryState**](VcsRootInstanceApi.md#deleteVcsRootInstanceRepositoryState) | **DELETE** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState | Delete the last repository state of the matching VCS root instance.
[**downloadFile**](VcsRootInstanceApi.md#downloadFile) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/files{path} | Download specific file.
[**getAllVcsRootInstances**](VcsRootInstanceApi.md#getAllVcsRootInstances) | **GET** /app/rest/vcs-root-instances | Get all VCS root instances.
[**getFileMetadata**](VcsRootInstanceApi.md#getFileMetadata) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/metadata{path} | Get metadata of specific file.
[**getFilesList**](VcsRootInstanceApi.md#getFilesList) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest | List all files.
[**getFilesListForSubpath**](VcsRootInstanceApi.md#getFilesListForSubpath) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/{path} | List files under this path.
[**getVcsRootInstance**](VcsRootInstanceApi.md#getVcsRootInstance) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator} | Get VCS root instance matching the locator.
[**getVcsRootInstanceCreationDate**](VcsRootInstanceApi.md#getVcsRootInstanceCreationDate) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState/creationDate | Get the creation date of the matching VCS root instance.
[**getVcsRootInstanceField**](VcsRootInstanceApi.md#getVcsRootInstanceField) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/{field} | Get a field of the matching VCS root instance.
[**getVcsRootInstanceProperties**](VcsRootInstanceApi.md#getVcsRootInstanceProperties) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/properties | Get all properties of the matching VCS root instance.
[**getVcsRootInstanceRepositoryState**](VcsRootInstanceApi.md#getVcsRootInstanceRepositoryState) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState | Get the repository state of the matching VCS root instance.
[**getZippedFile**](VcsRootInstanceApi.md#getZippedFile) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/archived{path} | Get specific file zipped.
[**requestPendingChangesCheck**](VcsRootInstanceApi.md#requestPendingChangesCheck) | **POST** /app/rest/vcs-root-instances/checkingForChangesQueue | Check for the pending changes for all VCS root instances.
[**setVcsRootInstanceField**](VcsRootInstanceApi.md#setVcsRootInstanceField) | **PUT** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/{field} | Get a field of the matching VCS root instance.
[**setVcsRootInstanceRepositoryState**](VcsRootInstanceApi.md#setVcsRootInstanceRepositoryState) | **PUT** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState | Update the repository state of the matching VCS root instance.
[**triggerCommitHookNotification**](VcsRootInstanceApi.md#triggerCommitHookNotification) | **POST** /app/rest/vcs-root-instances/commitHookNotification | Send the commit hook notification.


# **deleteVcsRootInstanceField**
> deleteVcsRootInstanceField($vcs_root_instance_locator, $field)

Remove a field of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $apiInstance->deleteVcsRootInstanceField($vcs_root_instance_locator, $field);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->deleteVcsRootInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **field** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVcsRootInstanceRepositoryState**
> deleteVcsRootInstanceRepositoryState($vcs_root_instance_locator)

Delete the last repository state of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 

try {
    $apiInstance->deleteVcsRootInstanceRepositoryState($vcs_root_instance_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->deleteVcsRootInstanceRepositoryState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFile**
> downloadFile($path, $vcs_root_instance_locator)

Download specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 

try {
    $apiInstance->downloadFile($path, $vcs_root_instance_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllVcsRootInstances**
> \AceViral\TeamCity\Model\VcsRootInstances getAllVcsRootInstances($locator, $fields)

Get all VCS root instances.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllVcsRootInstances($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getAllVcsRootInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileMetadata**
> \AceViral\TeamCity\Model\\SplFileObject getFileMetadata($path, $vcs_root_instance_locator, $fields)

Get metadata of specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFileMetadata($path, $vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getFileMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesList**
> \AceViral\TeamCity\Model\Files getFilesList($vcs_root_instance_locator, $base_path, $locator, $fields)

List all files.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFilesList($vcs_root_instance_locator, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getFilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListForSubpath**
> \AceViral\TeamCity\Model\Files getFilesListForSubpath($path, $vcs_root_instance_locator, $base_path, $locator, $fields)

List files under this path.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFilesListForSubpath($path, $vcs_root_instance_locator, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getFilesListForSubpath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstance**
> \AceViral\TeamCity\Model\VcsRootInstance getVcsRootInstance($vcs_root_instance_locator, $fields)

Get VCS root instance matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstance($vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getVcsRootInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRootInstance**](../Model/VcsRootInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstanceCreationDate**
> string getVcsRootInstanceCreationDate($vcs_root_instance_locator)

Get the creation date of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstanceCreationDate($vcs_root_instance_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getVcsRootInstanceCreationDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstanceField**
> string getVcsRootInstanceField($vcs_root_instance_locator, $field)

Get a field of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstanceField($vcs_root_instance_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getVcsRootInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstanceProperties**
> \AceViral\TeamCity\Model\Properties getVcsRootInstanceProperties($vcs_root_instance_locator, $fields)

Get all properties of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstanceProperties($vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getVcsRootInstanceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstanceRepositoryState**
> \AceViral\TeamCity\Model\Entries getVcsRootInstanceRepositoryState($vcs_root_instance_locator, $fields)

Get the repository state of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstanceRepositoryState($vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getVcsRootInstanceRepositoryState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZippedFile**
> getZippedFile($path, $vcs_root_instance_locator, $base_path, $locator, $name)

Get specific file zipped.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->getZippedFile($path, $vcs_root_instance_locator, $base_path, $locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getZippedFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestPendingChangesCheck**
> \AceViral\TeamCity\Model\VcsRootInstances requestPendingChangesCheck($locator, $requestor, $fields)

Check for the pending changes for all VCS root instances.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$requestor = "requestor_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->requestPendingChangesCheck($locator, $requestor, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->requestPendingChangesCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **requestor** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setVcsRootInstanceField**
> string setVcsRootInstanceField($vcs_root_instance_locator, $field, $body)

Get a field of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setVcsRootInstanceField($vcs_root_instance_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->setVcsRootInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
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

# **setVcsRootInstanceRepositoryState**
> \AceViral\TeamCity\Model\Entries setVcsRootInstanceRepositoryState($vcs_root_instance_locator, $body, $fields)

Update the repository state of the matching VCS root instance.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Entries(); // \AceViral\TeamCity\Model\Entries | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setVcsRootInstanceRepositoryState($vcs_root_instance_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->setVcsRootInstanceRepositoryState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Entries**](../Model/Entries.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerCommitHookNotification**
> triggerCommitHookNotification($locator, $ok_on_nothing_found)

Send the commit hook notification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$ok_on_nothing_found = true; // bool | 

try {
    $apiInstance->triggerCommitHookNotification($locator, $ok_on_nothing_found);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->triggerCommitHookNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **ok_on_nothing_found** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

