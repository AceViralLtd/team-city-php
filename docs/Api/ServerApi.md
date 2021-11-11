# Swagger\Client\ServerApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLicenseKeys**](ServerApi.md#addLicenseKeys) | **POST** /app/rest/server/licensingData/licenseKeys | Add license keys.
[**deleteLicenseKey**](ServerApi.md#deleteLicenseKey) | **DELETE** /app/rest/server/licensingData/licenseKeys/{licenseKey} | Delete a license key.
[**downloadFileOfServer**](ServerApi.md#downloadFileOfServer) | **GET** /app/rest/server/files/{areaId}/files{path} | Download specific file.
[**getAllMetrics**](ServerApi.md#getAllMetrics) | **GET** /app/rest/server/metrics | Get metrics.
[**getAllPlugins**](ServerApi.md#getAllPlugins) | **GET** /app/rest/server/plugins | Get all plugins.
[**getBackupStatus**](ServerApi.md#getBackupStatus) | **GET** /app/rest/server/backup | Get the latest backup status.
[**getFileMetadataOfServer**](ServerApi.md#getFileMetadataOfServer) | **GET** /app/rest/server/files/{areaId}/metadata{path} | Get metadata of specific file.
[**getFilesListForSubpathOfServer**](ServerApi.md#getFilesListForSubpathOfServer) | **GET** /app/rest/server/files/{areaId}/{path} | List files under this path.
[**getFilesListOfServer**](ServerApi.md#getFilesListOfServer) | **GET** /app/rest/server/files/{areaId} | List all files.
[**getLicenseKey**](ServerApi.md#getLicenseKey) | **GET** /app/rest/server/licensingData/licenseKeys/{licenseKey} | Get a license key.
[**getLicenseKeys**](ServerApi.md#getLicenseKeys) | **GET** /app/rest/server/licensingData/licenseKeys | Get all license keys.
[**getLicensingData**](ServerApi.md#getLicensingData) | **GET** /app/rest/server/licensingData | Get the licensing data.
[**getServerField**](ServerApi.md#getServerField) | **GET** /app/rest/server/{field} | Get a field of the server info.
[**getServerInfo**](ServerApi.md#getServerInfo) | **GET** /app/rest/server | Get the server info.
[**getZippedFileOfServer**](ServerApi.md#getZippedFileOfServer) | **GET** /app/rest/server/files/{areaId}/archived{path} | Get specific file zipped.
[**startBackup**](ServerApi.md#startBackup) | **POST** /app/rest/server/backup | Start a new backup.


# **addLicenseKeys**
> \Swagger\Client\Model\LicenseKeys addLicenseKeys($body, $fields)

Add license keys.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addLicenseKeys($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->addLicenseKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\LicenseKeys**](../Model/LicenseKeys.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLicenseKey**
> deleteLicenseKey($license_key)

Delete a license key.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$license_key = "license_key_example"; // string | 

try {
    $apiInstance->deleteLicenseKey($license_key);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFileOfServer**
> downloadFileOfServer($path, $area_id)

Download specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 

try {
    $apiInstance->downloadFileOfServer($path, $area_id);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->downloadFileOfServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMetrics**
> \Swagger\Client\Model\Metrics getAllMetrics($fields)

Get metrics.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllMetrics($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getAllMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Metrics**](../Model/Metrics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPlugins**
> \Swagger\Client\Model\Plugins getAllPlugins($fields)

Get all plugins.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllPlugins($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getAllPlugins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Plugins**](../Model/Plugins.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBackupStatus**
> string getBackupStatus()

Get the latest backup status.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBackupStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getBackupStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileMetadataOfServer**
> \Swagger\Client\Model\\SplFileObject getFileMetadataOfServer($path, $area_id, $fields)

Get metadata of specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFileMetadataOfServer($path, $area_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getFileMetadataOfServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListForSubpathOfServer**
> \Swagger\Client\Model\Files getFilesListForSubpathOfServer($path, $area_id, $base_path, $locator, $fields)

List files under this path.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFilesListForSubpathOfServer($path, $area_id, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getFilesListForSubpathOfServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListOfServer**
> \Swagger\Client\Model\Files getFilesListOfServer($area_id, $base_path, $locator, $fields)

List all files.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFilesListOfServer($area_id, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getFilesListOfServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area_id** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseKey**
> \Swagger\Client\Model\LicenseKey getLicenseKey($license_key, $fields)

Get a license key.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$license_key = "license_key_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getLicenseKey($license_key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license_key** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\LicenseKey**](../Model/LicenseKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseKeys**
> \Swagger\Client\Model\LicenseKeys getLicenseKeys($fields)

Get all license keys.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getLicenseKeys($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getLicenseKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\LicenseKeys**](../Model/LicenseKeys.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicensingData**
> \Swagger\Client\Model\LicensingData getLicensingData($fields)

Get the licensing data.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getLicensingData($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getLicensingData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\LicensingData**](../Model/LicensingData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerField**
> string getServerField($field)

Get a field of the server info.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getServerField($field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerInfo**
> \Swagger\Client\Model\Server getServerInfo($fields)

Get the server info.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getServerInfo($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Server**](../Model/Server.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZippedFileOfServer**
> getZippedFileOfServer($path, $area_id, $base_path, $locator, $name)

Get specific file zipped.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->getZippedFileOfServer($path, $area_id, $base_path, $locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getZippedFileOfServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
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

# **startBackup**
> string startBackup($file_name, $add_timestamp, $include_configs, $include_database, $include_build_logs, $include_personal_changes, $include_running_builds, $include_supplimentary_data)

Start a new backup.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_name = "file_name_example"; // string | 
$add_timestamp = true; // bool | 
$include_configs = true; // bool | 
$include_database = true; // bool | 
$include_build_logs = true; // bool | 
$include_personal_changes = true; // bool | 
$include_running_builds = true; // bool | 
$include_supplimentary_data = true; // bool | 

try {
    $result = $apiInstance->startBackup($file_name, $add_timestamp, $include_configs, $include_database, $include_build_logs, $include_personal_changes, $include_running_builds, $include_supplimentary_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->startBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**|  | [optional]
 **add_timestamp** | **bool**|  | [optional]
 **include_configs** | **bool**|  | [optional]
 **include_database** | **bool**|  | [optional]
 **include_build_logs** | **bool**|  | [optional]
 **include_personal_changes** | **bool**|  | [optional]
 **include_running_builds** | **bool**|  | [optional]
 **include_supplimentary_data** | **bool**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

