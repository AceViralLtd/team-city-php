# Swagger\Client\BuildApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBuildVcsLabel**](BuildApi.md#addBuildVcsLabel) | **POST** /app/rest/builds/{buildLocator}/vcsLabels | Add a VCS label to the matching build.
[**addLogMessageToBuild**](BuildApi.md#addLogMessageToBuild) | **POST** /app/rest/builds/{buildLocator}/log | Adds a message to the build log. Service messages are accepted.
[**addProblemToBuild**](BuildApi.md#addProblemToBuild) | **POST** /app/rest/builds/{buildLocator}/problemOccurrences | Add a build problem to the matching build.
[**addTagsToBuild**](BuildApi.md#addTagsToBuild) | **POST** /app/rest/builds/{buildLocator}/tags | Add tags to the matching build.
[**addTagsToMultipleBuilds**](BuildApi.md#addTagsToMultipleBuilds) | **POST** /app/rest/builds/multiple/{buildLocator}/tags | Add tags to multiple matching builds.
[**cancelBuild**](BuildApi.md#cancelBuild) | **POST** /app/rest/builds/{buildLocator} | cancelBuild
[**cancelMultiple**](BuildApi.md#cancelMultiple) | **POST** /app/rest/builds/multiple/{buildLocator} | cancelMultipleBuilds
[**deleteBuild**](BuildApi.md#deleteBuild) | **DELETE** /app/rest/builds/{buildLocator} | Delete build matching the locator.
[**deleteBuildComment**](BuildApi.md#deleteBuildComment) | **DELETE** /app/rest/builds/{buildLocator}/comment | Remove the build comment matching the locator.
[**deleteMultipleBuildComments**](BuildApi.md#deleteMultipleBuildComments) | **DELETE** /app/rest/builds/multiple/{buildLocator}/comment | Delete comments of multiple matching builds.
[**deleteMultipleBuilds**](BuildApi.md#deleteMultipleBuilds) | **DELETE** /app/rest/builds/multiple/{buildLocator} | Delete multiple builds matching the locator.
[**downloadFileOfBuild**](BuildApi.md#downloadFileOfBuild) | **GET** /app/rest/builds/{buildLocator}/artifacts/files{path} | Download specific file.
[**getAggregatedBuildStatus**](BuildApi.md#getAggregatedBuildStatus) | **GET** /app/rest/builds/aggregated/{buildLocator}/status | Get the build status of aggregated matching builds.
[**getAggregatedBuildStatusIcon**](BuildApi.md#getAggregatedBuildStatusIcon) | **GET** /app/rest/builds/aggregated/{buildLocator}/statusIcon{suffix} | Get the status icon (in specified format) of aggregated matching builds.
[**getAllBuilds**](BuildApi.md#getAllBuilds) | **GET** /app/rest/builds | Get all builds.
[**getArtifactDependencyChanges**](BuildApi.md#getArtifactDependencyChanges) | **GET** /app/rest/builds/{buildLocator}/artifactDependencyChanges | Get artifact dependency changes of the matching build.
[**getArtifactsDirectory**](BuildApi.md#getArtifactsDirectory) | **GET** /app/rest/builds/{buildLocator}/artifactsDirectory | Get the artifacts&#39; directory of the matching build.
[**getBuild**](BuildApi.md#getBuild) | **GET** /app/rest/builds/{buildLocator} | Get build matching the locator.
[**getBuildActualParameters**](BuildApi.md#getBuildActualParameters) | **GET** /app/rest/builds/{buildLocator}/resulting-properties | Get actual build parameters of the matching build.
[**getBuildField**](BuildApi.md#getBuildField) | **GET** /app/rest/builds/{buildLocator}/{field} | Get a field of the matching build.
[**getBuildFinishDate**](BuildApi.md#getBuildFinishDate) | **GET** /app/rest/builds/{buildLocator}/finishDate | Get the finish date of the matching build.
[**getBuildNumber**](BuildApi.md#getBuildNumber) | **GET** /app/rest/builds/{buildLocator}/number | Get the number of the matching build.
[**getBuildPinInfo**](BuildApi.md#getBuildPinInfo) | **GET** /app/rest/builds/{buildLocator}/pinInfo | Check if the matching build is pinned.
[**getBuildProblems**](BuildApi.md#getBuildProblems) | **GET** /app/rest/builds/{buildLocator}/problemOccurrences | Get build problems of the matching build.
[**getBuildRelatedIssues**](BuildApi.md#getBuildRelatedIssues) | **GET** /app/rest/builds/{buildLocator}/relatedIssues | Get related issues of the matching build.
[**getBuildResolved**](BuildApi.md#getBuildResolved) | **GET** /app/rest/builds/{buildLocator}/resolved/{value} | Get the resolvement status of the matching build.
[**getBuildResultingProperties**](BuildApi.md#getBuildResultingProperties) | **GET** /app/rest/builds/{buildLocator}/resulting-properties/{propertyName} | Update a build parameter of the matching build.
[**getBuildSourceFile**](BuildApi.md#getBuildSourceFile) | **GET** /app/rest/builds/{buildLocator}/sources/files/{fileName} | Get a source file of the matching build.
[**getBuildStatisticValue**](BuildApi.md#getBuildStatisticValue) | **GET** /app/rest/builds/{buildLocator}/statistics/{name} | Get a statistical value of the matching build.
[**getBuildStatisticValues**](BuildApi.md#getBuildStatisticValues) | **GET** /app/rest/builds/{buildLocator}/statistics | Get all statistical values of the matching build.
[**getBuildStatusIcon**](BuildApi.md#getBuildStatusIcon) | **GET** /app/rest/builds/{buildLocator}/statusIcon{suffix} | Get the status icon (in specified format) of the matching build.
[**getBuildStatusText**](BuildApi.md#getBuildStatusText) | **GET** /app/rest/builds/{buildLocator}/statusText | Get the build status text of the matching build.
[**getBuildTags**](BuildApi.md#getBuildTags) | **GET** /app/rest/builds/{buildLocator}/tags | Get tags of the matching build.
[**getBuildTestOccurrences**](BuildApi.md#getBuildTestOccurrences) | **GET** /app/rest/builds/{buildLocator}/testOccurrences | Get test occurrences of the matching build.
[**getBuildVcsLabels**](BuildApi.md#getBuildVcsLabels) | **GET** /app/rest/builds/{buildLocator}/vcsLabels | Get VCS labels of the matching build.
[**getCanceledInfo**](BuildApi.md#getCanceledInfo) | **GET** /app/rest/builds/{buildLocator}/canceledInfo | Check if the matching build is canceled.
[**getFileMetadataOfBuild**](BuildApi.md#getFileMetadataOfBuild) | **GET** /app/rest/builds/{buildLocator}/artifacts/metadata{path} | Get metadata of specific file.
[**getFilesListForSubpathOfBuild**](BuildApi.md#getFilesListForSubpathOfBuild) | **GET** /app/rest/builds/{buildLocator}/artifacts/{path} | List files under this path.
[**getFilesListOfBuild**](BuildApi.md#getFilesListOfBuild) | **GET** /app/rest/builds/{buildLocator}/artifacts | List all files.
[**getMultipleBuilds**](BuildApi.md#getMultipleBuilds) | **GET** /app/rest/builds/multiple/{buildLocator} | Get multiple builds matching the locator.
[**getZippedFileOfBuild**](BuildApi.md#getZippedFileOfBuild) | **GET** /app/rest/builds/{buildLocator}/artifacts/archived{path} | Get specific file zipped.
[**markBuildAsRunning**](BuildApi.md#markBuildAsRunning) | **PUT** /app/rest/builds/{buildLocator}/runningData | Starts the queued build as an agent-less build and returns the corresponding running build.
[**pinMultipleBuilds**](BuildApi.md#pinMultipleBuilds) | **PUT** /app/rest/builds/multiple/{buildLocator}/pinInfo | Pin multiple matching builds.
[**removeMultipleBuildTags**](BuildApi.md#removeMultipleBuildTags) | **DELETE** /app/rest/builds/multiple/{buildLocator}/tags | Remove tags from multiple matching builds.
[**resetBuildFinishProperties**](BuildApi.md#resetBuildFinishProperties) | **DELETE** /app/rest/builds/{buildLocator}/caches/finishProperties | Remove build parameters from the matching build.
[**setBuildComment**](BuildApi.md#setBuildComment) | **PUT** /app/rest/builds/{buildLocator}/comment | Update the comment on the matching build.
[**setBuildFinishDate**](BuildApi.md#setBuildFinishDate) | **PUT** /app/rest/builds/{buildLocator}/finishDate | Marks the running build as finished by passing agent the current time of the build to finish.
[**setBuildNumber**](BuildApi.md#setBuildNumber) | **PUT** /app/rest/builds/{buildLocator}/number | Update the number of the matching build.
[**setBuildPinInfo**](BuildApi.md#setBuildPinInfo) | **PUT** /app/rest/builds/{buildLocator}/pinInfo | Update the pin info of the matching build.
[**setBuildStatusText**](BuildApi.md#setBuildStatusText) | **PUT** /app/rest/builds/{buildLocator}/statusText | Update the build status of the matching build.
[**setBuildTags**](BuildApi.md#setBuildTags) | **PUT** /app/rest/builds/{buildLocator}/tags | Update tags of the matching build.
[**setFinishedTime**](BuildApi.md#setFinishedTime) | **PUT** /app/rest/builds/{buildLocator}/finish | Marks the running build as finished by passing agent the current time of the build to finish.
[**setMultipleBuildComments**](BuildApi.md#setMultipleBuildComments) | **PUT** /app/rest/builds/multiple/{buildLocator}/comment | Update comments in multiple matching builds.


# **addBuildVcsLabel**
> \Swagger\Client\Model\VcsLabels addBuildVcsLabel($build_locator, $locator, $fields, $body)

Add a VCS label to the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->addBuildVcsLabel($build_locator, $locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addBuildVcsLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **body** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsLabels**](../Model/VcsLabels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLogMessageToBuild**
> addLogMessageToBuild($build_locator, $body, $fields)

Adds a message to the build log. Service messages are accepted.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->addLogMessageToBuild($build_locator, $body, $fields);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addLogMessageToBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProblemToBuild**
> \Swagger\Client\Model\ProblemOccurrence addProblemToBuild($build_locator, $body, $fields)

Add a build problem to the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addProblemToBuild($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addProblemToBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProblemOccurrence**](../Model/ProblemOccurrence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTagsToBuild**
> \Swagger\Client\Model\Tags addTagsToBuild($build_locator, $body, $fields)

Add tags to the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\Tags(); // \Swagger\Client\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addTagsToBuild($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addTagsToBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTagsToMultipleBuilds**
> \Swagger\Client\Model\MultipleOperationResult addTagsToMultipleBuilds($build_locator, $body, $fields)

Add tags to multiple matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\Tags(); // \Swagger\Client\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addTagsToMultipleBuilds($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addTagsToMultipleBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelBuild**
> \Swagger\Client\Model\Build cancelBuild($build_locator, $body, $fields)

cancelBuild



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\BuildCancelRequest(); // \Swagger\Client\Model\BuildCancelRequest | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->cancelBuild($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->cancelBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelMultiple**
> \Swagger\Client\Model\MultipleOperationResult cancelMultiple($build_locator, $body, $fields)

cancelMultipleBuilds



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\BuildCancelRequest(); // \Swagger\Client\Model\BuildCancelRequest | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->cancelMultiple($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->cancelMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuild**
> deleteBuild($build_locator)

Delete build matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $apiInstance->deleteBuild($build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildComment**
> deleteBuildComment($build_locator)

Remove the build comment matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $apiInstance->deleteBuildComment($build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteBuildComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMultipleBuildComments**
> \Swagger\Client\Model\MultipleOperationResult deleteMultipleBuildComments($build_locator, $fields)

Delete comments of multiple matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->deleteMultipleBuildComments($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteMultipleBuildComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMultipleBuilds**
> \Swagger\Client\Model\MultipleOperationResult deleteMultipleBuilds($build_locator, $fields)

Delete multiple builds matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->deleteMultipleBuilds($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteMultipleBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFileOfBuild**
> downloadFileOfBuild($path, $build_locator, $resolve_parameters, $log_build_usage)

Download specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $apiInstance->downloadFileOfBuild($path, $build_locator, $resolve_parameters, $log_build_usage);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->downloadFileOfBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAggregatedBuildStatus**
> string getAggregatedBuildStatus($build_locator)

Get the build status of aggregated matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getAggregatedBuildStatus($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getAggregatedBuildStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAggregatedBuildStatusIcon**
> getAggregatedBuildStatusIcon($build_locator, $suffix)

Get the status icon (in specified format) of aggregated matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$suffix = "suffix_example"; // string | 

try {
    $apiInstance->getAggregatedBuildStatusIcon($build_locator, $suffix);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getAggregatedBuildStatusIcon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **suffix** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuilds**
> \Swagger\Client\Model\Builds getAllBuilds($locator, $fields)

Get all builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuilds($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getAllBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDependencyChanges**
> \Swagger\Client\Model\BuildChanges getArtifactDependencyChanges($build_locator, $fields)

Get artifact dependency changes of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getArtifactDependencyChanges($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getArtifactDependencyChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildChanges**](../Model/BuildChanges.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactsDirectory**
> string getArtifactsDirectory($build_locator)

Get the artifacts' directory of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getArtifactsDirectory($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getArtifactsDirectory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuild**
> \Swagger\Client\Model\Build getBuild($build_locator, $fields)

Get build matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuild($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildActualParameters**
> \Swagger\Client\Model\Properties getBuildActualParameters($build_locator, $fields)

Get actual build parameters of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildActualParameters($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildActualParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildField**
> string getBuildField($build_locator, $field)

Get a field of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getBuildField($build_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildFinishDate**
> string getBuildFinishDate($build_locator)

Get the finish date of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildFinishDate($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildFinishDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildNumber**
> string getBuildNumber($build_locator)

Get the number of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildNumber($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildPinInfo**
> \Swagger\Client\Model\PinInfo getBuildPinInfo($build_locator, $fields)

Check if the matching build is pinned.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildPinInfo($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildPinInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PinInfo**](../Model/PinInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildProblems**
> \Swagger\Client\Model\ProblemOccurrences getBuildProblems($build_locator, $fields)

Get build problems of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildProblems($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildProblems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProblemOccurrences**](../Model/ProblemOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildRelatedIssues**
> \Swagger\Client\Model\IssuesUsages getBuildRelatedIssues($build_locator, $fields)

Get related issues of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildRelatedIssues($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildRelatedIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\IssuesUsages**](../Model/IssuesUsages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildResolved**
> string getBuildResolved($build_locator, $value)

Get the resolvement status of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$value = "value_example"; // string | 

try {
    $result = $apiInstance->getBuildResolved($build_locator, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildResolved: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **value** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildResultingProperties**
> string getBuildResultingProperties($build_locator, $property_name)

Update a build parameter of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$property_name = "property_name_example"; // string | 

try {
    $result = $apiInstance->getBuildResultingProperties($build_locator, $property_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildResultingProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **property_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildSourceFile**
> getBuildSourceFile($build_locator, $file_name)

Get a source file of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->getBuildSourceFile($build_locator, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildSourceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **file_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStatisticValue**
> string getBuildStatisticValue($build_locator, $name)

Get a statistical value of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getBuildStatisticValue($build_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildStatisticValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStatisticValues**
> \Swagger\Client\Model\Properties getBuildStatisticValues($build_locator, $fields)

Get all statistical values of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildStatisticValues($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildStatisticValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStatusIcon**
> getBuildStatusIcon($build_locator, $suffix)

Get the status icon (in specified format) of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$suffix = "suffix_example"; // string | 

try {
    $apiInstance->getBuildStatusIcon($build_locator, $suffix);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildStatusIcon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **suffix** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStatusText**
> string getBuildStatusText($build_locator)

Get the build status text of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildStatusText($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildStatusText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTags**
> \Swagger\Client\Model\Tags getBuildTags($build_locator, $locator, $fields)

Get tags of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildTags($build_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTestOccurrences**
> \Swagger\Client\Model\TestOccurrences getBuildTestOccurrences($build_locator, $fields)

Get test occurrences of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildTestOccurrences($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildTestOccurrences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TestOccurrences**](../Model/TestOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildVcsLabels**
> \Swagger\Client\Model\VcsLabels getBuildVcsLabels($build_locator, $fields)

Get VCS labels of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildVcsLabels($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildVcsLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsLabels**](../Model/VcsLabels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCanceledInfo**
> \Swagger\Client\Model\Comment getCanceledInfo($build_locator, $fields)

Check if the matching build is canceled.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCanceledInfo($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getCanceledInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileMetadataOfBuild**
> \Swagger\Client\Model\\SplFileObject getFileMetadataOfBuild($path, $build_locator, $fields, $resolve_parameters, $log_build_usage)

Get metadata of specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getFileMetadataOfBuild($path, $build_locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getFileMetadataOfBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListForSubpathOfBuild**
> \Swagger\Client\Model\Files getFilesListForSubpathOfBuild($path, $build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage)

List files under this path.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getFilesListForSubpathOfBuild($path, $build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getFilesListForSubpathOfBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListOfBuild**
> \Swagger\Client\Model\Files getFilesListOfBuild($build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage)

List all files.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getFilesListOfBuild($build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getFilesListOfBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultipleBuilds**
> \Swagger\Client\Model\Builds getMultipleBuilds($build_locator, $fields)

Get multiple builds matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getMultipleBuilds($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getMultipleBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZippedFileOfBuild**
> getZippedFileOfBuild($path, $build_locator, $base_path, $locator, $name, $resolve_parameters, $log_build_usage)

Get specific file zipped.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $apiInstance->getZippedFileOfBuild($path, $build_locator, $base_path, $locator, $name, $resolve_parameters, $log_build_usage);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getZippedFileOfBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markBuildAsRunning**
> \Swagger\Client\Model\Build markBuildAsRunning($build_locator, $body, $fields)

Starts the queued build as an agent-less build and returns the corresponding running build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->markBuildAsRunning($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->markBuildAsRunning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pinMultipleBuilds**
> \Swagger\Client\Model\MultipleOperationResult pinMultipleBuilds($build_locator, $body, $fields)

Pin multiple matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\PinInfo(); // \Swagger\Client\Model\PinInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->pinMultipleBuilds($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->pinMultipleBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\PinInfo**](../Model/PinInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMultipleBuildTags**
> \Swagger\Client\Model\MultipleOperationResult removeMultipleBuildTags($build_locator, $body, $fields)

Remove tags from multiple matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\Tags(); // \Swagger\Client\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->removeMultipleBuildTags($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->removeMultipleBuildTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetBuildFinishProperties**
> resetBuildFinishProperties($build_locator)

Remove build parameters from the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $apiInstance->resetBuildFinishProperties($build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->resetBuildFinishProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildComment**
> setBuildComment($build_locator, $body)

Update the comment on the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $apiInstance->setBuildComment($build_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildFinishDate**
> string setBuildFinishDate($build_locator, $body)

Marks the running build as finished by passing agent the current time of the build to finish.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildFinishDate($build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildFinishDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildNumber**
> string setBuildNumber($build_locator, $body)

Update the number of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildNumber($build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildPinInfo**
> \Swagger\Client\Model\PinInfo setBuildPinInfo($build_locator, $body, $fields)

Update the pin info of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \Swagger\Client\Model\PinInfo(); // \Swagger\Client\Model\PinInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildPinInfo($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildPinInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\PinInfo**](../Model/PinInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PinInfo**](../Model/PinInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildStatusText**
> string setBuildStatusText($build_locator, $body)

Update the build status of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildStatusText($build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildStatusText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildTags**
> \Swagger\Client\Model\Tags setBuildTags($build_locator, $locator, $body, $fields)

Update tags of the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$body = new \Swagger\Client\Model\Tags(); // \Swagger\Client\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildTags($build_locator, $locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFinishedTime**
> string setFinishedTime($build_locator)

Marks the running build as finished by passing agent the current time of the build to finish.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->setFinishedTime($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setFinishedTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMultipleBuildComments**
> \Swagger\Client\Model\MultipleOperationResult setMultipleBuildComments($build_locator, $body, $fields)

Update comments in multiple matching builds.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setMultipleBuildComments($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setMultipleBuildComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

