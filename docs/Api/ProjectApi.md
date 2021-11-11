# AceViral\TeamCity\ProjectApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAgentPoolsProject**](ProjectApi.md#addAgentPoolsProject) | **POST** /app/rest/projects/{projectLocator}/agentPools | Assign the matching project to the agent pool.
[**addBuildType**](ProjectApi.md#addBuildType) | **POST** /app/rest/projects/{projectLocator}/buildTypes | Add a build configuration to the matching project.
[**addFeature**](ProjectApi.md#addFeature) | **POST** /app/rest/projects/{projectLocator}/projectFeatures | Add a feature.
[**addProject**](ProjectApi.md#addProject) | **POST** /app/rest/projects | Create a new project.
[**addSecureToken**](ProjectApi.md#addSecureToken) | **POST** /app/rest/projects/{projectLocator}/secure/tokens | Create a new secure token for the matching project.
[**addTemplate**](ProjectApi.md#addTemplate) | **POST** /app/rest/projects/{projectLocator}/templates | Add a build configuration template to the matching project.
[**createBuildParameter**](ProjectApi.md#createBuildParameter) | **POST** /app/rest/projects/{projectLocator}/parameters | Create a build parameter.
[**deleteBuildParameter**](ProjectApi.md#deleteBuildParameter) | **DELETE** /app/rest/projects/{projectLocator}/parameters/{name} | Delete build parameter.
[**deleteBuildParameters**](ProjectApi.md#deleteBuildParameters) | **DELETE** /app/rest/projects/{projectLocator}/parameters | Delete all build parameters.
[**deleteFeature**](ProjectApi.md#deleteFeature) | **DELETE** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator} | Delete a matching feature.
[**deleteProject**](ProjectApi.md#deleteProject) | **DELETE** /app/rest/projects/{projectLocator} | Delete project matching the locator.
[**getAgentPoolsProject**](ProjectApi.md#getAgentPoolsProject) | **GET** /app/rest/projects/{projectLocator}/agentPools | Get agent pools appointed to the matching project.
[**getAllBranches**](ProjectApi.md#getAllBranches) | **GET** /app/rest/projects/{projectLocator}/branches | Get all branches of the matching project.
[**getAllProjects**](ProjectApi.md#getAllProjects) | **GET** /app/rest/projects | Get all projects.
[**getAllSubprojectsOrdered**](ProjectApi.md#getAllSubprojectsOrdered) | **GET** /app/rest/projects/{projectLocator}/order/projects | Get all subprojects ordered of the matching project.
[**getBuildParameter**](ProjectApi.md#getBuildParameter) | **GET** /app/rest/projects/{projectLocator}/parameters/{name} | Get build parameter.
[**getBuildParameterSpecification**](ProjectApi.md#getBuildParameterSpecification) | **GET** /app/rest/projects/{projectLocator}/parameters/{name}/type/rawValue | Get build parameter specification.
[**getBuildParameterType**](ProjectApi.md#getBuildParameterType) | **GET** /app/rest/projects/{projectLocator}/parameters/{name}/type | Get type of build parameter.
[**getBuildParameterValue**](ProjectApi.md#getBuildParameterValue) | **GET** /app/rest/projects/{projectLocator}/parameters/{name}/value | Get value of build parameter.
[**getBuildParameters**](ProjectApi.md#getBuildParameters) | **GET** /app/rest/projects/{projectLocator}/parameters | Get build parameters.
[**getDefaultTemplate**](ProjectApi.md#getDefaultTemplate) | **GET** /app/rest/projects/{projectLocator}/defaultTemplate | Get the default template of the matching project.
[**getFeature**](ProjectApi.md#getFeature) | **GET** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator} | Get a matching feature.
[**getFeatures**](ProjectApi.md#getFeatures) | **GET** /app/rest/projects/{projectLocator}/projectFeatures | Get all features.
[**getProject**](ProjectApi.md#getProject) | **GET** /app/rest/projects/{projectLocator} | Get project matching the locator.
[**getProjectField**](ProjectApi.md#getProjectField) | **GET** /app/rest/projects/{projectLocator}/{field} | Get a field of the matching project.
[**getProjectParentProject**](ProjectApi.md#getProjectParentProject) | **GET** /app/rest/projects/{projectLocator}/parentProject | Get the parent project of the matching project.
[**getProjectSettingsFile**](ProjectApi.md#getProjectSettingsFile) | **GET** /app/rest/projects/{projectLocator}/settingsFile | Get the settings file of the matching build configuration.
[**getProjectTemplates**](ProjectApi.md#getProjectTemplates) | **GET** /app/rest/projects/{projectLocator}/templates | Get all templates of the matching project.
[**getSecureValue**](ProjectApi.md#getSecureValue) | **GET** /app/rest/projects/{projectLocator}/secure/values/{token} | Get a secure token of the matching project.
[**removeDefaultTemplate**](ProjectApi.md#removeDefaultTemplate) | **DELETE** /app/rest/projects/{projectLocator}/defaultTemplate | Remove the default template from the matching project.
[**removeProjectFromAgentPool**](ProjectApi.md#removeProjectFromAgentPool) | **DELETE** /app/rest/projects/{projectLocator}/agentPools/{agentPoolLocator} | Unassign a project from the matching agent pool.
[**setAgentPoolsProject**](ProjectApi.md#setAgentPoolsProject) | **PUT** /app/rest/projects/{projectLocator}/agentPools | Update agent pools apppointed to the matching project.
[**setBuildTypesOrder**](ProjectApi.md#setBuildTypesOrder) | **PUT** /app/rest/projects/{projectLocator}/order/buildTypes | Update all build configurations order of the matching project.
[**setDefaultTemplate**](ProjectApi.md#setDefaultTemplate) | **PUT** /app/rest/projects/{projectLocator}/defaultTemplate | Update the default template of the matching project.
[**setParentProject**](ProjectApi.md#setParentProject) | **PUT** /app/rest/projects/{projectLocator}/parentProject | Update the parent project of the matching project.
[**setProjectField**](ProjectApi.md#setProjectField) | **PUT** /app/rest/projects/{projectLocator}/{field} | Update a field of the matching project.
[**setSubprojectsOrder**](ProjectApi.md#setSubprojectsOrder) | **PUT** /app/rest/projects/{projectLocator}/order/projects | Update all subprojects order of the matching project.
[**updateBuildParameter**](ProjectApi.md#updateBuildParameter) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name} | Update build parameter.
[**updateBuildParameterSpecification**](ProjectApi.md#updateBuildParameterSpecification) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name}/type/rawValue | Update build parameter specification.
[**updateBuildParameterType**](ProjectApi.md#updateBuildParameterType) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name}/type | Update type of build parameter.
[**updateBuildParameterValue**](ProjectApi.md#updateBuildParameterValue) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name}/value | Update value of build parameter.
[**updateBuildParameters**](ProjectApi.md#updateBuildParameters) | **PUT** /app/rest/projects/{projectLocator}/parameters | Update build parameters.
[**updateFeature**](ProjectApi.md#updateFeature) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator} | Update a matching feature.
[**updateFeatures**](ProjectApi.md#updateFeatures) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures | Update all features.


# **addAgentPoolsProject**
> \AceViral\TeamCity\Model\AgentPool addAgentPoolsProject($project_locator, $body)

Assign the matching project to the agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\AgentPool(); // \AceViral\TeamCity\Model\AgentPool | 

try {
    $result = $apiInstance->addAgentPoolsProject($project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addAgentPoolsProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBuildType**
> \AceViral\TeamCity\Model\BuildType addBuildType($project_locator, $body, $fields)

Add a build configuration to the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\NewBuildTypeDescription(); // \AceViral\TeamCity\Model\NewBuildTypeDescription | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addBuildType($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\NewBuildTypeDescription**](../Model/NewBuildTypeDescription.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFeature**
> object addFeature($project_locator, $body, $fields)

Add a feature.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\ProjectFeature(); // \AceViral\TeamCity\Model\ProjectFeature | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addFeature($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\ProjectFeature**](../Model/ProjectFeature.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProject**
> \AceViral\TeamCity\Model\Project addProject($body)

Create a new project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \AceViral\TeamCity\Model\NewProjectDescription(); // \AceViral\TeamCity\Model\NewProjectDescription | 

try {
    $result = $apiInstance->addProject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AceViral\TeamCity\Model\NewProjectDescription**](../Model/NewProjectDescription.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSecureToken**
> string addSecureToken($project_locator, $body)

Create a new secure token for the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->addSecureToken($project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addSecureToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTemplate**
> \AceViral\TeamCity\Model\BuildType addTemplate($project_locator, $body, $fields)

Add a build configuration template to the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\NewBuildTypeDescription(); // \AceViral\TeamCity\Model\NewBuildTypeDescription | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addTemplate($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\NewBuildTypeDescription**](../Model/NewBuildTypeDescription.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildParameter**
> \AceViral\TeamCity\Model\Property createBuildParameter($project_locator, $body, $fields)

Create a build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Property(); // \AceViral\TeamCity\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createBuildParameter($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createBuildParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildParameter**
> deleteBuildParameter($name, $project_locator)

Delete build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteBuildParameter($name, $project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteBuildParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildParameters**
> deleteBuildParameters($project_locator)

Delete all build parameters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteBuildParameters($project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteBuildParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFeature**
> deleteFeature($feature_locator, $project_locator)

Delete a matching feature.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteFeature($feature_locator, $project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject($project_locator)

Delete project matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteProject($project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentPoolsProject**
> \AceViral\TeamCity\Model\AgentPools getAgentPoolsProject($project_locator, $fields)

Get agent pools appointed to the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentPoolsProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getAgentPoolsProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPools**](../Model/AgentPools.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBranches**
> \AceViral\TeamCity\Model\Branches getAllBranches($project_locator, $locator, $fields)

Get all branches of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBranches($project_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getAllBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Branches**](../Model/Branches.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProjects**
> \AceViral\TeamCity\Model\Projects getAllProjects($locator, $fields)

Get all projects.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllProjects($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getAllProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubprojectsOrdered**
> \AceViral\TeamCity\Model\Projects getAllSubprojectsOrdered($project_locator, $field)

Get all subprojects ordered of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getAllSubprojectsOrdered($project_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getAllSubprojectsOrdered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameter**
> \AceViral\TeamCity\Model\Property getBuildParameter($name, $project_locator, $fields)

Get build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildParameter($name, $project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBuildParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterSpecification**
> string getBuildParameterSpecification($name, $project_locator)

Get build parameter specification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterSpecification($name, $project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBuildParameterSpecification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterType**
> \AceViral\TeamCity\Model\Type getBuildParameterType($name, $project_locator)

Get type of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterType($name, $project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBuildParameterType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

[**\AceViral\TeamCity\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterValue**
> string getBuildParameterValue($name, $project_locator)

Get value of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterValue($name, $project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBuildParameterValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameters**
> \AceViral\TeamCity\Model\Properties getBuildParameters($project_locator, $locator, $fields)

Get build parameters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildParameters($project_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBuildParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaultTemplate**
> \AceViral\TeamCity\Model\BuildType getDefaultTemplate($project_locator, $fields)

Get the default template of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getDefaultTemplate($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeature**
> object getFeature($feature_locator, $project_locator, $fields)

Get a matching feature.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFeature($feature_locator, $project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatures**
> object getFeatures($project_locator, $locator, $fields)

Get all features.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFeatures($project_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \AceViral\TeamCity\Model\Project getProject($project_locator, $fields)

Get project matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectField**
> string getProjectField($project_locator, $field)

Get a field of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getProjectField($project_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectParentProject**
> \AceViral\TeamCity\Model\Project getProjectParentProject($project_locator, $fields)

Get the parent project of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getProjectParentProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectParentProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectSettingsFile**
> string getProjectSettingsFile($project_locator)

Get the settings file of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getProjectSettingsFile($project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectTemplates**
> \AceViral\TeamCity\Model\BuildTypes getProjectTemplates($project_locator, $fields)

Get all templates of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getProjectTemplates($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecureValue**
> string getSecureValue($project_locator, $token)

Get a secure token of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$token = "token_example"; // string | 

try {
    $result = $apiInstance->getSecureValue($project_locator, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getSecureValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **token** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDefaultTemplate**
> removeDefaultTemplate($project_locator, $fields)

Remove the default template from the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->removeDefaultTemplate($project_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->removeDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeProjectFromAgentPool**
> removeProjectFromAgentPool($project_locator, $agent_pool_locator)

Unassign a project from the matching agent pool.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$agent_pool_locator = "agent_pool_locator_example"; // string | 

try {
    $apiInstance->removeProjectFromAgentPool($project_locator, $agent_pool_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->removeProjectFromAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **agent_pool_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentPoolsProject**
> \AceViral\TeamCity\Model\AgentPools setAgentPoolsProject($project_locator, $body, $fields)

Update agent pools apppointed to the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\AgentPools(); // \AceViral\TeamCity\Model\AgentPools | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setAgentPoolsProject($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setAgentPoolsProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\AgentPools**](../Model/AgentPools.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\AgentPools**](../Model/AgentPools.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildTypesOrder**
> \AceViral\TeamCity\Model\BuildTypes setBuildTypesOrder($project_locator, $body, $field)

Update all build configurations order of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\BuildTypes(); // \AceViral\TeamCity\Model\BuildTypes | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->setBuildTypesOrder($project_locator, $body, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setBuildTypesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\BuildTypes**](../Model/BuildTypes.md)|  | [optional]
 **field** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDefaultTemplate**
> \AceViral\TeamCity\Model\BuildType setDefaultTemplate($project_locator, $body, $fields)

Update the default template of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\BuildType(); // \AceViral\TeamCity\Model\BuildType | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setDefaultTemplate($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\BuildType**](../Model/BuildType.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParentProject**
> \AceViral\TeamCity\Model\Project setParentProject($project_locator, $body, $fields)

Update the parent project of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Project(); // \AceViral\TeamCity\Model\Project | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParentProject($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParentProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Project**](../Model/Project.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectField**
> string setProjectField($project_locator, $field, $body)

Update a field of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setProjectField($project_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
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

# **setSubprojectsOrder**
> \AceViral\TeamCity\Model\Projects setSubprojectsOrder($project_locator, $body, $field)

Update all subprojects order of the matching project.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Projects(); // \AceViral\TeamCity\Model\Projects | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->setSubprojectsOrder($project_locator, $body, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setSubprojectsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)|  | [optional]
 **field** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameter**
> \AceViral\TeamCity\Model\Property updateBuildParameter($name, $project_locator, $body, $fields)

Update build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Property(); // \AceViral\TeamCity\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameter($name, $project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateBuildParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterSpecification**
> string updateBuildParameterSpecification($name, $project_locator, $body)

Update build parameter specification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameterSpecification($name, $project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateBuildParameterSpecification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterType**
> \AceViral\TeamCity\Model\Type updateBuildParameterType($name, $project_locator, $body)

Update type of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Type(); // \AceViral\TeamCity\Model\Type | 

try {
    $result = $apiInstance->updateBuildParameterType($name, $project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateBuildParameterType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\Type**](../Model/Type.md)|  | [optional]

### Return type

[**\AceViral\TeamCity\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterValue**
> string updateBuildParameterValue($name, $project_locator, $body)

Update value of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameterValue($name, $project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateBuildParameterValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameters**
> \AceViral\TeamCity\Model\Properties updateBuildParameters($project_locator, $body, $fields)

Update build parameters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\Properties(); // \AceViral\TeamCity\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameters($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateBuildParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
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

# **updateFeature**
> object updateFeature($feature_locator, $project_locator, $body, $fields)

Update a matching feature.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\ProjectFeature(); // \AceViral\TeamCity\Model\ProjectFeature | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateFeature($feature_locator, $project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\ProjectFeature**](../Model/ProjectFeature.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFeatures**
> object updateFeatures($project_locator, $body, $fields)

Update all features.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new AceViral\TeamCity\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \AceViral\TeamCity\Model\ProjectFeatures(); // \AceViral\TeamCity\Model\ProjectFeatures | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateFeatures($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\AceViral\TeamCity\Model\ProjectFeatures**](../Model/ProjectFeatures.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

