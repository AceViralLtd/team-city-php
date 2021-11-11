# Swagger\Client\BuildTypeApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAgentRequirementToBuildType**](BuildTypeApi.md#addAgentRequirementToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/agent-requirements | Add an agent requirement to the matching build configuration.
[**addArtifactDependencyToBuildType**](BuildTypeApi.md#addArtifactDependencyToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/artifact-dependencies | Add an artifact dependency to the matching build configuration.
[**addBuildFeatureToBuildType**](BuildTypeApi.md#addBuildFeatureToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/features | Add build feature to the matching build configuration.
[**addBuildStepToBuildType**](BuildTypeApi.md#addBuildStepToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/steps | Add a build step to the matching build configuration.
[**addBuildTemplate**](BuildTypeApi.md#addBuildTemplate) | **POST** /app/rest/buildTypes/{btLocator}/templates | Add a build template to the matching build configuration.
[**addParameterToBuildFeature**](BuildTypeApi.md#addParameterToBuildFeature) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters/{parameterName} | Update build feature parameter for the matching build configuration.
[**addParameterToBuildStep**](BuildTypeApi.md#addParameterToBuildStep) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters/{parameterName} | Add a parameter to a build step of the matching build configuration.
[**addSnapshotDependencyToBuildType**](BuildTypeApi.md#addSnapshotDependencyToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/snapshot-dependencies | Add a snapshot dependency to the matching build configuration.
[**addTriggerToBuildType**](BuildTypeApi.md#addTriggerToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/triggers | Add a trigger to the matching build configuration.
[**addVcsRootToBuildType**](BuildTypeApi.md#addVcsRootToBuildType) | **POST** /app/rest/buildTypes/{btLocator}/vcs-root-entries | Add a VCS root to the matching build.
[**createBuildParameterOfBuildType**](BuildTypeApi.md#createBuildParameterOfBuildType) | **POST** /app/rest/buildTypes/{btLocator}/parameters | Create a build parameter.
[**createBuildType**](BuildTypeApi.md#createBuildType) | **POST** /app/rest/buildTypes | Create a new build configuration.
[**deleteAgentRequirement**](BuildTypeApi.md#deleteAgentRequirement) | **DELETE** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator} | Remove an agent requirement of the matching build configuration.
[**deleteArtifactDependency**](BuildTypeApi.md#deleteArtifactDependency) | **DELETE** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator} | Remove an artifact dependency from the matching build configuration.
[**deleteBuildParameterOfBuildType**](BuildTypeApi.md#deleteBuildParameterOfBuildType) | **DELETE** /app/rest/buildTypes/{btLocator}/parameters/{name} | Delete build parameter.
[**deleteBuildParametersOfBuildType**](BuildTypeApi.md#deleteBuildParametersOfBuildType) | **DELETE** /app/rest/buildTypes/{btLocator}/parameters | Delete all build parameters.
[**deleteBuildStep**](BuildTypeApi.md#deleteBuildStep) | **DELETE** /app/rest/buildTypes/{btLocator}/steps/{stepId} | Delete a build step of the matching build configuration.
[**deleteBuildStepParameters**](BuildTypeApi.md#deleteBuildStepParameters) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters | Update a parameter of a build step of the matching build configuration.
[**deleteBuildType**](BuildTypeApi.md#deleteBuildType) | **DELETE** /app/rest/buildTypes/{btLocator} | Delete build configuration matching the locator.
[**deleteFeatureOfBuildType**](BuildTypeApi.md#deleteFeatureOfBuildType) | **DELETE** /app/rest/buildTypes/{btLocator}/features/{featureId} | Remove a build feature of the matching build configuration.
[**deleteSnapshotDependency**](BuildTypeApi.md#deleteSnapshotDependency) | **DELETE** /app/rest/buildTypes/{btLocator}/snapshot-dependencies/{snapshotDepLocator} | Delete a snapshot dependency of the matching build configuration.
[**deleteTrigger**](BuildTypeApi.md#deleteTrigger) | **DELETE** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator} | Delete a trigger of the matching build configuration.
[**deleteVcsRootOfBuildType**](BuildTypeApi.md#deleteVcsRootOfBuildType) | **DELETE** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator} | Remove a VCS root of the matching build configuration.
[**downloadFileOfBuildType**](BuildTypeApi.md#downloadFileOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/files{path} | Download specific file.
[**getAgentRequirement**](BuildTypeApi.md#getAgentRequirement) | **GET** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator} | Get an agent requirement of the matching build configuration.
[**getAgentRequirementParameter**](BuildTypeApi.md#getAgentRequirementParameter) | **GET** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator}/{fieldName} | Get a setting of an agent requirement of the matching build configuration.
[**getAliases**](BuildTypeApi.md#getAliases) | **GET** /app/rest/buildTypes/{btLocator}/aliases | Get external IDs of the matching build configuration.
[**getAllAgentRequirements**](BuildTypeApi.md#getAllAgentRequirements) | **GET** /app/rest/buildTypes/{btLocator}/agent-requirements | Get all agent requirements of the matching build configuration.
[**getAllArtifactDependencies**](BuildTypeApi.md#getAllArtifactDependencies) | **GET** /app/rest/buildTypes/{btLocator}/artifact-dependencies | Get all artifact dependencies of the matching build configuration.
[**getAllBranchesOfBuildType**](BuildTypeApi.md#getAllBranchesOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/branches | Get all branches of the matching build configuration.
[**getAllBuildFeatureParameters**](BuildTypeApi.md#getAllBuildFeatureParameters) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters | Get all parameters of a build feature of the matching build configuration.
[**getAllBuildFeatures**](BuildTypeApi.md#getAllBuildFeatures) | **GET** /app/rest/buildTypes/{btLocator}/features | Get all build features of the matching build configuration.
[**getAllBuildStepParameters**](BuildTypeApi.md#getAllBuildStepParameters) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters | Get all parameters of a build step of the matching build configuration.
[**getAllBuildSteps**](BuildTypeApi.md#getAllBuildSteps) | **GET** /app/rest/buildTypes/{btLocator}/steps | Get all build steps of the matching build configuration.
[**getAllBuildTemplates**](BuildTypeApi.md#getAllBuildTemplates) | **GET** /app/rest/buildTypes/{btLocator}/templates | Get all build templates of the matching build configuration.
[**getAllBuildTypes**](BuildTypeApi.md#getAllBuildTypes) | **GET** /app/rest/buildTypes | Get all build configurations.
[**getAllInvestigationsOfBuildType**](BuildTypeApi.md#getAllInvestigationsOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/investigations | Get all investigations of the matching build configuration.
[**getAllSnapshotDependencies**](BuildTypeApi.md#getAllSnapshotDependencies) | **GET** /app/rest/buildTypes/{btLocator}/snapshot-dependencies | Get all snapshot dependencies of the matching build configuration.
[**getAllTriggers**](BuildTypeApi.md#getAllTriggers) | **GET** /app/rest/buildTypes/{btLocator}/triggers | Get all triggers of the matching build configuration.
[**getAllVcsRootsOfBuildType**](BuildTypeApi.md#getAllVcsRootsOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-entries | Get all VCS roots of the matching build configuration.
[**getArtifactDependency**](BuildTypeApi.md#getArtifactDependency) | **GET** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator} | Get an artifact dependency of the matching build configuration.
[**getArtifactDependencyParameter**](BuildTypeApi.md#getArtifactDependencyParameter) | **GET** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator}/{fieldName} | Get a parameter of an artifact dependency of the matching build configuration.
[**getBuildFeature**](BuildTypeApi.md#getBuildFeature) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId} | Get a build feature of the matching build configuration.
[**getBuildFeatureParameter**](BuildTypeApi.md#getBuildFeatureParameter) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters/{parameterName} | Get a parameter of a build feature of the matching build configuration.
[**getBuildFeatureSetting**](BuildTypeApi.md#getBuildFeatureSetting) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId}/{name} | Get the setting of a build feature of the matching build configuration.
[**getBuildParameterOfBuildType**](BuildTypeApi.md#getBuildParameterOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name} | Get build parameter.
[**getBuildParameterSpecificationOfBuildType**](BuildTypeApi.md#getBuildParameterSpecificationOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name}/type/rawValue | Get build parameter specification.
[**getBuildParameterTypeOfBuildType**](BuildTypeApi.md#getBuildParameterTypeOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name}/type | Get type of build parameter.
[**getBuildParameterValueOfBuildType**](BuildTypeApi.md#getBuildParameterValueOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name}/value | Get value of build parameter.
[**getBuildParametersOfBuildType**](BuildTypeApi.md#getBuildParametersOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/parameters | Get build parameters.
[**getBuildStep**](BuildTypeApi.md#getBuildStep) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId} | Get a build step of the matching build configuration.
[**getBuildStepParameter**](BuildTypeApi.md#getBuildStepParameter) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters/{parameterName} | Get a parameter of a build step of the matching build configuration.
[**getBuildStepSetting**](BuildTypeApi.md#getBuildStepSetting) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId}/{fieldName} | Get the setting of a build step of the matching build configuration.
[**getBuildTemplate**](BuildTypeApi.md#getBuildTemplate) | **GET** /app/rest/buildTypes/{btLocator}/templates/{templateLocator} | Get a template of the matching build configuration.
[**getBuildType**](BuildTypeApi.md#getBuildType) | **GET** /app/rest/buildTypes/{btLocator} | Get build configuration matching the locator.
[**getBuildTypeBuildTags**](BuildTypeApi.md#getBuildTypeBuildTags) | **GET** /app/rest/buildTypes/{btLocator}/buildTags | Get tags of builds of the matching build configuration.
[**getBuildTypeBuilds**](BuildTypeApi.md#getBuildTypeBuilds) | **GET** /app/rest/buildTypes/{btLocator}/builds | Get builds of the matching build configuration.
[**getBuildTypeField**](BuildTypeApi.md#getBuildTypeField) | **GET** /app/rest/buildTypes/{btLocator}/{field} | Get a field of the matching build configuration.
[**getBuildTypeSettingsFile**](BuildTypeApi.md#getBuildTypeSettingsFile) | **GET** /app/rest/buildTypes/{btLocator}/settingsFile | Get the settings file of the matching build configuration.
[**getFileMetadataOfBuildType**](BuildTypeApi.md#getFileMetadataOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/metadata{path} | Get metadata of specific file.
[**getFilesListForSubpathOfBuildType**](BuildTypeApi.md#getFilesListForSubpathOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/{path} | List files under this path.
[**getFilesListOfBuildType**](BuildTypeApi.md#getFilesListOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest | List all files.
[**getSnapshotDependency**](BuildTypeApi.md#getSnapshotDependency) | **GET** /app/rest/buildTypes/{btLocator}/snapshot-dependencies/{snapshotDepLocator} | Get a snapshot dependency of the matching build configuration.
[**getTrigger**](BuildTypeApi.md#getTrigger) | **GET** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator} | Get a trigger of the matching build configuration.
[**getTriggerParameter**](BuildTypeApi.md#getTriggerParameter) | **GET** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator}/{fieldName} | Get a parameter of a trigger of the matching build configuration.
[**getVcsRoot**](BuildTypeApi.md#getVcsRoot) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator} | Get a VCS root of the matching build configuration.
[**getVcsRootCheckoutRules**](BuildTypeApi.md#getVcsRootCheckoutRules) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator}/checkout-rules | Get checkout rules of a VCS root of the matching build configuration.
[**getVcsRootInstancesOfBuildType**](BuildTypeApi.md#getVcsRootInstancesOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcsRootInstances | Get all VCS root instances of the matching build configuration.
[**getZippedFileOfBuildType**](BuildTypeApi.md#getZippedFileOfBuildType) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/archived{path} | Get specific file zipped.
[**removeAllTemplates**](BuildTypeApi.md#removeAllTemplates) | **DELETE** /app/rest/buildTypes/{btLocator}/templates | Detach all templates from the matching build configuration.
[**removeTemplate**](BuildTypeApi.md#removeTemplate) | **DELETE** /app/rest/buildTypes/{btLocator}/templates/{templateLocator} | Detach a template from the matching build configuration.
[**replaceAgentRequirement**](BuildTypeApi.md#replaceAgentRequirement) | **PUT** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator} | Update an agent requirement of the matching build configuration.
[**replaceAllAgentRequirements**](BuildTypeApi.md#replaceAllAgentRequirements) | **PUT** /app/rest/buildTypes/{btLocator}/agent-requirements | Update all agent requirements of the matching build configuration.
[**replaceAllArtifactDependencies**](BuildTypeApi.md#replaceAllArtifactDependencies) | **PUT** /app/rest/buildTypes/{btLocator}/artifact-dependencies | Update all artifact dependencies of the matching build configuration.
[**replaceAllBuildFeatures**](BuildTypeApi.md#replaceAllBuildFeatures) | **PUT** /app/rest/buildTypes/{btLocator}/features | Update all build features of the matching build configuration.
[**replaceAllBuildSteps**](BuildTypeApi.md#replaceAllBuildSteps) | **PUT** /app/rest/buildTypes/{btLocator}/steps | Update all build steps of the matching build configuration.
[**replaceAllSnapshotDependencies**](BuildTypeApi.md#replaceAllSnapshotDependencies) | **PUT** /app/rest/buildTypes/{btLocator}/snapshot-dependencies | Update all snapshot dependencies of the matching build configuration.
[**replaceAllTriggers**](BuildTypeApi.md#replaceAllTriggers) | **PUT** /app/rest/buildTypes/{btLocator}/triggers | Update all triggers of the matching build configuration.
[**replaceAllVcsRoots**](BuildTypeApi.md#replaceAllVcsRoots) | **PUT** /app/rest/buildTypes/{btLocator}/vcs-root-entries | Update all VCS roots of the matching build configuration.
[**replaceArtifactDependency**](BuildTypeApi.md#replaceArtifactDependency) | **PUT** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator} | Update an artifact dependency of the matching build configuration.
[**replaceBuildFeature**](BuildTypeApi.md#replaceBuildFeature) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId} | Update a build feature of the matching build configuration.
[**replaceBuildFeatureParameters**](BuildTypeApi.md#replaceBuildFeatureParameters) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters | Update a parameter of a build feature of the matching build configuration.
[**replaceBuildStep**](BuildTypeApi.md#replaceBuildStep) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId} | Replace a build step of the matching build configuration.
[**replaceSnapshotDependency**](BuildTypeApi.md#replaceSnapshotDependency) | **PUT** /app/rest/buildTypes/{btLocator}/snapshot-dependencies/{snapshotDepLocator} | Update a snapshot dependency of the matching build configuration.
[**replaceTrigger**](BuildTypeApi.md#replaceTrigger) | **PUT** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator} | Update a trigger of the matching build configuration.
[**setAgentRequirementParameter**](BuildTypeApi.md#setAgentRequirementParameter) | **PUT** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator}/{fieldName} | Update a parameter of an agent requirement of the matching build configuration.
[**setArtifactDependencyParameter**](BuildTypeApi.md#setArtifactDependencyParameter) | **PUT** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator}/{fieldName} | Update a parameter of an artifact dependency of the matching build configuration.
[**setBuildFeatureParameter**](BuildTypeApi.md#setBuildFeatureParameter) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId}/{name} | Update a parameter of a build feature of the matching build configuration.
[**setBuildStepParameter**](BuildTypeApi.md#setBuildStepParameter) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId}/{fieldName} | Update a parameter of a build step of the matching build configuration.
[**setBuildTypeField**](BuildTypeApi.md#setBuildTypeField) | **PUT** /app/rest/buildTypes/{btLocator}/{field} | Update a field of the matching build configuration.
[**setBuildTypeTemplates**](BuildTypeApi.md#setBuildTypeTemplates) | **PUT** /app/rest/buildTypes/{btLocator}/templates | Update all templates of the matching build configuration.
[**setTriggerParameter**](BuildTypeApi.md#setTriggerParameter) | **PUT** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator}/{fieldName} | Update a parameter of a trigger of the matching build configuration.
[**updateBuildParameterOfBuildType**](BuildTypeApi.md#updateBuildParameterOfBuildType) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name} | Update build parameter.
[**updateBuildParameterSpecificationOfBuildType**](BuildTypeApi.md#updateBuildParameterSpecificationOfBuildType) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name}/type/rawValue | Update build parameter specification.
[**updateBuildParameterTypeOfBuildType**](BuildTypeApi.md#updateBuildParameterTypeOfBuildType) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name}/type | Update type of build parameter.
[**updateBuildParameterValueOfBuildType**](BuildTypeApi.md#updateBuildParameterValueOfBuildType) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name}/value | Update value of build parameter.
[**updateBuildParametersOfBuildType**](BuildTypeApi.md#updateBuildParametersOfBuildType) | **PUT** /app/rest/buildTypes/{btLocator}/parameters | Update build parameters.
[**updateBuildTypeVcsRoot**](BuildTypeApi.md#updateBuildTypeVcsRoot) | **PUT** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator} | Update a VCS root of the matching build configuration.
[**updateBuildTypeVcsRootCheckoutRules**](BuildTypeApi.md#updateBuildTypeVcsRootCheckoutRules) | **PUT** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator}/checkout-rules | Update checkout rules of a VCS root of the matching build configuration.


# **addAgentRequirementToBuildType**
> \Swagger\Client\Model\AgentRequirement addAgentRequirementToBuildType($bt_locator, $fields, $body)

Add an agent requirement to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\AgentRequirement(); // \Swagger\Client\Model\AgentRequirement | 

try {
    $result = $apiInstance->addAgentRequirementToBuildType($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addAgentRequirementToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\AgentRequirement**](../Model/AgentRequirement.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AgentRequirement**](../Model/AgentRequirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addArtifactDependencyToBuildType**
> \Swagger\Client\Model\ArtifactDependency addArtifactDependencyToBuildType($bt_locator, $fields, $body)

Add an artifact dependency to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\ArtifactDependency(); // \Swagger\Client\Model\ArtifactDependency | 

try {
    $result = $apiInstance->addArtifactDependencyToBuildType($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addArtifactDependencyToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\ArtifactDependency**](../Model/ArtifactDependency.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactDependency**](../Model/ArtifactDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBuildFeatureToBuildType**
> \Swagger\Client\Model\Feature addBuildFeatureToBuildType($bt_locator, $fields, $body)

Add build feature to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Feature(); // \Swagger\Client\Model\Feature | 

try {
    $result = $apiInstance->addBuildFeatureToBuildType($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addBuildFeatureToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Feature**](../Model/Feature.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Feature**](../Model/Feature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBuildStepToBuildType**
> \Swagger\Client\Model\Step addBuildStepToBuildType($bt_locator, $fields, $body)

Add a build step to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Step(); // \Swagger\Client\Model\Step | 

try {
    $result = $apiInstance->addBuildStepToBuildType($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addBuildStepToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Step**](../Model/Step.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Step**](../Model/Step.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBuildTemplate**
> \Swagger\Client\Model\BuildType addBuildTemplate($bt_locator, $body, $optimize_settings, $fields)

Add a build template to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\BuildType(); // \Swagger\Client\Model\BuildType | 
$optimize_settings = true; // bool | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addBuildTemplate($bt_locator, $body, $optimize_settings, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addBuildTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\BuildType**](../Model/BuildType.md)|  | [optional]
 **optimize_settings** | **bool**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParameterToBuildFeature**
> string addParameterToBuildFeature($bt_locator, $feature_id, $parameter_name, $body)

Update build feature parameter for the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->addParameterToBuildFeature($bt_locator, $feature_id, $parameter_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addParameterToBuildFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **parameter_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParameterToBuildStep**
> string addParameterToBuildStep($bt_locator, $step_id, $parameter_name, $body)

Add a parameter to a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->addParameterToBuildStep($bt_locator, $step_id, $parameter_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addParameterToBuildStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **parameter_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSnapshotDependencyToBuildType**
> \Swagger\Client\Model\SnapshotDependency addSnapshotDependencyToBuildType($bt_locator, $fields, $body)

Add a snapshot dependency to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\SnapshotDependency(); // \Swagger\Client\Model\SnapshotDependency | 

try {
    $result = $apiInstance->addSnapshotDependencyToBuildType($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addSnapshotDependencyToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\SnapshotDependency**](../Model/SnapshotDependency.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SnapshotDependency**](../Model/SnapshotDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTriggerToBuildType**
> \Swagger\Client\Model\Trigger addTriggerToBuildType($bt_locator, $fields, $body)

Add a trigger to the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Trigger(); // \Swagger\Client\Model\Trigger | 

try {
    $result = $apiInstance->addTriggerToBuildType($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addTriggerToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Trigger**](../Model/Trigger.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Trigger**](../Model/Trigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVcsRootToBuildType**
> \Swagger\Client\Model\VcsRootEntry addVcsRootToBuildType($bt_locator, $body, $fields)

Add a VCS root to the matching build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\VcsRootEntry(); // \Swagger\Client\Model\VcsRootEntry | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addVcsRootToBuildType($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addVcsRootToBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\VcsRootEntry**](../Model/VcsRootEntry.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootEntry**](../Model/VcsRootEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildParameterOfBuildType**
> \Swagger\Client\Model\Property createBuildParameterOfBuildType($bt_locator, $body, $fields)

Create a build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\Property(); // \Swagger\Client\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createBuildParameterOfBuildType($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->createBuildParameterOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildType**
> \Swagger\Client\Model\BuildType createBuildType($body, $fields)

Create a new build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BuildType(); // \Swagger\Client\Model\BuildType | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createBuildType($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->createBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BuildType**](../Model/BuildType.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAgentRequirement**
> deleteAgentRequirement($bt_locator, $agent_requirement_locator)

Remove an agent requirement of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 

try {
    $apiInstance->deleteAgentRequirement($bt_locator, $agent_requirement_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArtifactDependency**
> deleteArtifactDependency($bt_locator, $artifact_dep_locator)

Remove an artifact dependency from the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 

try {
    $apiInstance->deleteArtifactDependency($bt_locator, $artifact_dep_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteArtifactDependency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildParameterOfBuildType**
> deleteBuildParameterOfBuildType($name, $bt_locator)

Delete build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteBuildParameterOfBuildType($name, $bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteBuildParameterOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildParametersOfBuildType**
> deleteBuildParametersOfBuildType($bt_locator)

Delete all build parameters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteBuildParametersOfBuildType($bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteBuildParametersOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildStep**
> deleteBuildStep($bt_locator, $step_id)

Delete a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 

try {
    $apiInstance->deleteBuildStep($bt_locator, $step_id);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteBuildStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildStepParameters**
> \Swagger\Client\Model\Properties deleteBuildStepParameters($bt_locator, $step_id, $body, $fields)

Update a parameter of a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$body = new \Swagger\Client\Model\Properties(); // \Swagger\Client\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->deleteBuildStepParameters($bt_locator, $step_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteBuildStepParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Properties**](../Model/Properties.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildType**
> deleteBuildType($bt_locator)

Delete build configuration matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteBuildType($bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFeatureOfBuildType**
> deleteFeatureOfBuildType($bt_locator, $feature_id)

Remove a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 

try {
    $apiInstance->deleteFeatureOfBuildType($bt_locator, $feature_id);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteFeatureOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSnapshotDependency**
> deleteSnapshotDependency($bt_locator, $snapshot_dep_locator)

Delete a snapshot dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$snapshot_dep_locator = "snapshot_dep_locator_example"; // string | 

try {
    $apiInstance->deleteSnapshotDependency($bt_locator, $snapshot_dep_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteSnapshotDependency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **snapshot_dep_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTrigger**
> deleteTrigger($bt_locator, $trigger_locator)

Delete a trigger of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 

try {
    $apiInstance->deleteTrigger($bt_locator, $trigger_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVcsRootOfBuildType**
> deleteVcsRootOfBuildType($bt_locator, $vcs_root_locator)

Remove a VCS root of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $apiInstance->deleteVcsRootOfBuildType($bt_locator, $vcs_root_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteVcsRootOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFileOfBuildType**
> downloadFileOfBuildType($path, $bt_locator, $resolve_parameters)

Download specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $apiInstance->downloadFileOfBuildType($path, $bt_locator, $resolve_parameters);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->downloadFileOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **resolve_parameters** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentRequirement**
> \Swagger\Client\Model\AgentRequirement getAgentRequirement($bt_locator, $agent_requirement_locator, $fields)

Get an agent requirement of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentRequirement($bt_locator, $agent_requirement_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AgentRequirement**](../Model/AgentRequirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentRequirementParameter**
> string getAgentRequirementParameter($bt_locator, $agent_requirement_locator, $field_name)

Get a setting of an agent requirement of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getAgentRequirementParameter($bt_locator, $agent_requirement_locator, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAgentRequirementParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAliases**
> \Swagger\Client\Model\Items getAliases($bt_locator, $field)

Get external IDs of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getAliases($bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAgentRequirements**
> \Swagger\Client\Model\AgentRequirements getAllAgentRequirements($bt_locator, $fields)

Get all agent requirements of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllAgentRequirements($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllAgentRequirements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AgentRequirements**](../Model/AgentRequirements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllArtifactDependencies**
> \Swagger\Client\Model\ArtifactDependencies getAllArtifactDependencies($bt_locator, $fields)

Get all artifact dependencies of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllArtifactDependencies($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllArtifactDependencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactDependencies**](../Model/ArtifactDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBranchesOfBuildType**
> \Swagger\Client\Model\Branches getAllBranchesOfBuildType($bt_locator, $locator, $fields)

Get all branches of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBranchesOfBuildType($bt_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBranchesOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Branches**](../Model/Branches.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuildFeatureParameters**
> \Swagger\Client\Model\Properties getAllBuildFeatureParameters($bt_locator, $feature_id, $fields)

Get all parameters of a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildFeatureParameters($bt_locator, $feature_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBuildFeatureParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuildFeatures**
> \Swagger\Client\Model\Features getAllBuildFeatures($bt_locator, $fields)

Get all build features of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildFeatures($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBuildFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Features**](../Model/Features.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuildStepParameters**
> \Swagger\Client\Model\Properties getAllBuildStepParameters($bt_locator, $step_id, $fields)

Get all parameters of a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildStepParameters($bt_locator, $step_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBuildStepParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuildSteps**
> \Swagger\Client\Model\Steps getAllBuildSteps($bt_locator, $fields)

Get all build steps of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildSteps($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBuildSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Steps**](../Model/Steps.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuildTemplates**
> \Swagger\Client\Model\BuildTypes getAllBuildTemplates($bt_locator, $fields)

Get all build templates of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildTemplates($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBuildTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBuildTypes**
> \Swagger\Client\Model\BuildTypes getAllBuildTypes($locator, $fields)

Get all build configurations.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllBuildTypes($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInvestigationsOfBuildType**
> \Swagger\Client\Model\Investigations getAllInvestigationsOfBuildType($bt_locator, $fields)

Get all investigations of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllInvestigationsOfBuildType($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllInvestigationsOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSnapshotDependencies**
> \Swagger\Client\Model\SnapshotDependencies getAllSnapshotDependencies($bt_locator, $fields)

Get all snapshot dependencies of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllSnapshotDependencies($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllSnapshotDependencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SnapshotDependencies**](../Model/SnapshotDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTriggers**
> \Swagger\Client\Model\Triggers getAllTriggers($bt_locator, $fields)

Get all triggers of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllTriggers($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Triggers**](../Model/Triggers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllVcsRootsOfBuildType**
> \Swagger\Client\Model\VcsRootEntries getAllVcsRootsOfBuildType($bt_locator, $fields)

Get all VCS roots of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllVcsRootsOfBuildType($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAllVcsRootsOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootEntries**](../Model/VcsRootEntries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDependency**
> \Swagger\Client\Model\ArtifactDependency getArtifactDependency($bt_locator, $artifact_dep_locator, $fields)

Get an artifact dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getArtifactDependency($bt_locator, $artifact_dep_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getArtifactDependency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactDependency**](../Model/ArtifactDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDependencyParameter**
> string getArtifactDependencyParameter($bt_locator, $artifact_dep_locator, $field_name)

Get a parameter of an artifact dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getArtifactDependencyParameter($bt_locator, $artifact_dep_locator, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getArtifactDependencyParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildFeature**
> \Swagger\Client\Model\Feature getBuildFeature($bt_locator, $feature_id, $fields)

Get a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildFeature($bt_locator, $feature_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Feature**](../Model/Feature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildFeatureParameter**
> string getBuildFeatureParameter($bt_locator, $feature_id, $parameter_name)

Get a parameter of a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 

try {
    $result = $apiInstance->getBuildFeatureParameter($bt_locator, $feature_id, $parameter_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildFeatureParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **parameter_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildFeatureSetting**
> string getBuildFeatureSetting($bt_locator, $feature_id, $name)

Get the setting of a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getBuildFeatureSetting($bt_locator, $feature_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildFeatureSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterOfBuildType**
> \Swagger\Client\Model\Property getBuildParameterOfBuildType($name, $bt_locator, $fields)

Get build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterOfBuildType($name, $bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildParameterOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterSpecificationOfBuildType**
> string getBuildParameterSpecificationOfBuildType($name, $bt_locator)

Get build parameter specification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterSpecificationOfBuildType($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildParameterSpecificationOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterTypeOfBuildType**
> \Swagger\Client\Model\Type getBuildParameterTypeOfBuildType($name, $bt_locator)

Get type of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterTypeOfBuildType($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildParameterTypeOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

[**\Swagger\Client\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParameterValueOfBuildType**
> string getBuildParameterValueOfBuildType($name, $bt_locator)

Get value of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildParameterValueOfBuildType($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildParameterValueOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildParametersOfBuildType**
> \Swagger\Client\Model\Properties getBuildParametersOfBuildType($bt_locator, $locator, $fields)

Get build parameters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildParametersOfBuildType($bt_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildParametersOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStep**
> \Swagger\Client\Model\Step getBuildStep($bt_locator, $step_id, $fields)

Get a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildStep($bt_locator, $step_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Step**](../Model/Step.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStepParameter**
> string getBuildStepParameter($bt_locator, $step_id, $parameter_name)

Get a parameter of a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 

try {
    $result = $apiInstance->getBuildStepParameter($bt_locator, $step_id, $parameter_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildStepParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **parameter_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildStepSetting**
> string getBuildStepSetting($bt_locator, $step_id, $field_name)

Get the setting of a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getBuildStepSetting($bt_locator, $step_id, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildStepSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTemplate**
> \Swagger\Client\Model\BuildType getBuildTemplate($bt_locator, $template_locator, $fields)

Get a template of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$template_locator = "template_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildTemplate($bt_locator, $template_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **template_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildType**
> \Swagger\Client\Model\BuildType getBuildType($bt_locator, $fields)

Get build configuration matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildType($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTypeBuildTags**
> \Swagger\Client\Model\Tags getBuildTypeBuildTags($bt_locator, $field)

Get tags of builds of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getBuildTypeBuildTags($bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildTypeBuildTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTypeBuilds**
> \Swagger\Client\Model\Builds getBuildTypeBuilds($bt_locator, $fields)

Get builds of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildTypeBuilds($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildTypeBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTypeField**
> string getBuildTypeField($bt_locator, $field)

Get a field of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getBuildTypeField($bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildTypeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTypeSettingsFile**
> string getBuildTypeSettingsFile($bt_locator)

Get the settings file of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildTypeSettingsFile($bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildTypeSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileMetadataOfBuildType**
> \Swagger\Client\Model\\SplFileObject getFileMetadataOfBuildType($path, $bt_locator, $fields, $resolve_parameters)

Get metadata of specific file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getFileMetadataOfBuildType($path, $bt_locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFileMetadataOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListForSubpathOfBuildType**
> \Swagger\Client\Model\Files getFilesListForSubpathOfBuildType($path, $bt_locator, $base_path, $locator, $fields, $resolve_parameters)

List files under this path.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getFilesListForSubpathOfBuildType($path, $bt_locator, $base_path, $locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFilesListForSubpathOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesListOfBuildType**
> \Swagger\Client\Model\Files getFilesListOfBuildType($bt_locator, $base_path, $locator, $fields, $resolve_parameters)

List all files.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getFilesListOfBuildType($bt_locator, $base_path, $locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFilesListOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnapshotDependency**
> \Swagger\Client\Model\SnapshotDependency getSnapshotDependency($bt_locator, $snapshot_dep_locator, $fields)

Get a snapshot dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$snapshot_dep_locator = "snapshot_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSnapshotDependency($bt_locator, $snapshot_dep_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getSnapshotDependency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **snapshot_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SnapshotDependency**](../Model/SnapshotDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrigger**
> \Swagger\Client\Model\Trigger getTrigger($bt_locator, $trigger_locator, $fields)

Get a trigger of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTrigger($bt_locator, $trigger_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Trigger**](../Model/Trigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTriggerParameter**
> string getTriggerParameter($bt_locator, $trigger_locator, $field_name)

Get a parameter of a trigger of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getTriggerParameter($bt_locator, $trigger_locator, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTriggerParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRoot**
> \Swagger\Client\Model\VcsRootEntry getVcsRoot($bt_locator, $vcs_root_locator, $fields)

Get a VCS root of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRoot($bt_locator, $vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVcsRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootEntry**](../Model/VcsRootEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootCheckoutRules**
> string getVcsRootCheckoutRules($bt_locator, $vcs_root_locator)

Get checkout rules of a VCS root of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $result = $apiInstance->getVcsRootCheckoutRules($bt_locator, $vcs_root_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVcsRootCheckoutRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootInstancesOfBuildType**
> \Swagger\Client\Model\VcsRootInstances getVcsRootInstancesOfBuildType($bt_locator, $fields)

Get all VCS root instances of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootInstancesOfBuildType($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVcsRootInstancesOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZippedFileOfBuildType**
> getZippedFileOfBuildType($path, $bt_locator, $base_path, $locator, $name, $resolve_parameters)

Get specific file zipped.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $apiInstance->getZippedFileOfBuildType($path, $bt_locator, $base_path, $locator, $name, $resolve_parameters);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getZippedFileOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAllTemplates**
> removeAllTemplates($bt_locator, $inline_settings)

Detach all templates from the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$inline_settings = true; // bool | 

try {
    $apiInstance->removeAllTemplates($bt_locator, $inline_settings);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->removeAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **inline_settings** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTemplate**
> removeTemplate($bt_locator, $template_locator, $inline_settings)

Detach a template from the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$template_locator = "template_locator_example"; // string | 
$inline_settings = true; // bool | 

try {
    $apiInstance->removeTemplate($bt_locator, $template_locator, $inline_settings);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->removeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **template_locator** | **string**|  |
 **inline_settings** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAgentRequirement**
> \Swagger\Client\Model\AgentRequirement replaceAgentRequirement($bt_locator, $agent_requirement_locator, $fields, $body)

Update an agent requirement of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\AgentRequirement(); // \Swagger\Client\Model\AgentRequirement | 

try {
    $result = $apiInstance->replaceAgentRequirement($bt_locator, $agent_requirement_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\AgentRequirement**](../Model/AgentRequirement.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AgentRequirement**](../Model/AgentRequirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllAgentRequirements**
> \Swagger\Client\Model\AgentRequirements replaceAllAgentRequirements($bt_locator, $fields, $body)

Update all agent requirements of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\AgentRequirements(); // \Swagger\Client\Model\AgentRequirements | 

try {
    $result = $apiInstance->replaceAllAgentRequirements($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllAgentRequirements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\AgentRequirements**](../Model/AgentRequirements.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AgentRequirements**](../Model/AgentRequirements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllArtifactDependencies**
> \Swagger\Client\Model\ArtifactDependencies replaceAllArtifactDependencies($bt_locator, $fields, $body)

Update all artifact dependencies of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\ArtifactDependencies(); // \Swagger\Client\Model\ArtifactDependencies | 

try {
    $result = $apiInstance->replaceAllArtifactDependencies($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllArtifactDependencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\ArtifactDependencies**](../Model/ArtifactDependencies.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactDependencies**](../Model/ArtifactDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllBuildFeatures**
> \Swagger\Client\Model\Features replaceAllBuildFeatures($bt_locator, $fields, $body)

Update all build features of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Features(); // \Swagger\Client\Model\Features | 

try {
    $result = $apiInstance->replaceAllBuildFeatures($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllBuildFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Features**](../Model/Features.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Features**](../Model/Features.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllBuildSteps**
> \Swagger\Client\Model\Steps replaceAllBuildSteps($bt_locator, $fields, $body)

Update all build steps of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Steps(); // \Swagger\Client\Model\Steps | 

try {
    $result = $apiInstance->replaceAllBuildSteps($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllBuildSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Steps**](../Model/Steps.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Steps**](../Model/Steps.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllSnapshotDependencies**
> \Swagger\Client\Model\SnapshotDependencies replaceAllSnapshotDependencies($bt_locator, $fields, $body)

Update all snapshot dependencies of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\SnapshotDependencies(); // \Swagger\Client\Model\SnapshotDependencies | 

try {
    $result = $apiInstance->replaceAllSnapshotDependencies($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllSnapshotDependencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\SnapshotDependencies**](../Model/SnapshotDependencies.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SnapshotDependencies**](../Model/SnapshotDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllTriggers**
> \Swagger\Client\Model\Triggers replaceAllTriggers($bt_locator, $fields, $body)

Update all triggers of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Triggers(); // \Swagger\Client\Model\Triggers | 

try {
    $result = $apiInstance->replaceAllTriggers($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Triggers**](../Model/Triggers.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Triggers**](../Model/Triggers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllVcsRoots**
> \Swagger\Client\Model\VcsRootEntries replaceAllVcsRoots($bt_locator, $body, $fields)

Update all VCS roots of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\VcsRootEntries(); // \Swagger\Client\Model\VcsRootEntries | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceAllVcsRoots($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAllVcsRoots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\VcsRootEntries**](../Model/VcsRootEntries.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootEntries**](../Model/VcsRootEntries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceArtifactDependency**
> \Swagger\Client\Model\ArtifactDependency replaceArtifactDependency($bt_locator, $artifact_dep_locator, $fields, $body)

Update an artifact dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\ArtifactDependency(); // \Swagger\Client\Model\ArtifactDependency | 

try {
    $result = $apiInstance->replaceArtifactDependency($bt_locator, $artifact_dep_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceArtifactDependency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\ArtifactDependency**](../Model/ArtifactDependency.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactDependency**](../Model/ArtifactDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuildFeature**
> \Swagger\Client\Model\Feature replaceBuildFeature($bt_locator, $feature_id, $fields, $body)

Update a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Feature(); // \Swagger\Client\Model\Feature | 

try {
    $result = $apiInstance->replaceBuildFeature($bt_locator, $feature_id, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceBuildFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Feature**](../Model/Feature.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Feature**](../Model/Feature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuildFeatureParameters**
> \Swagger\Client\Model\Properties replaceBuildFeatureParameters($bt_locator, $feature_id, $body, $fields)

Update a parameter of a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$body = new \Swagger\Client\Model\Properties(); // \Swagger\Client\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceBuildFeatureParameters($bt_locator, $feature_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceBuildFeatureParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Properties**](../Model/Properties.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuildStep**
> \Swagger\Client\Model\Step replaceBuildStep($bt_locator, $step_id, $fields, $body)

Replace a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Step(); // \Swagger\Client\Model\Step | 

try {
    $result = $apiInstance->replaceBuildStep($bt_locator, $step_id, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceBuildStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Step**](../Model/Step.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Step**](../Model/Step.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceSnapshotDependency**
> \Swagger\Client\Model\SnapshotDependency replaceSnapshotDependency($bt_locator, $snapshot_dep_locator, $fields, $body)

Update a snapshot dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$snapshot_dep_locator = "snapshot_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\SnapshotDependency(); // \Swagger\Client\Model\SnapshotDependency | 

try {
    $result = $apiInstance->replaceSnapshotDependency($bt_locator, $snapshot_dep_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceSnapshotDependency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **snapshot_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\SnapshotDependency**](../Model/SnapshotDependency.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SnapshotDependency**](../Model/SnapshotDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTrigger**
> \Swagger\Client\Model\Trigger replaceTrigger($bt_locator, $trigger_locator, $fields, $body)

Update a trigger of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \Swagger\Client\Model\Trigger(); // \Swagger\Client\Model\Trigger | 

try {
    $result = $apiInstance->replaceTrigger($bt_locator, $trigger_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\Swagger\Client\Model\Trigger**](../Model/Trigger.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Trigger**](../Model/Trigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentRequirementParameter**
> string setAgentRequirementParameter($bt_locator, $agent_requirement_locator, $field_name, $body)

Update a parameter of an agent requirement of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setAgentRequirementParameter($bt_locator, $agent_requirement_locator, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setAgentRequirementParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setArtifactDependencyParameter**
> string setArtifactDependencyParameter($bt_locator, $artifact_dep_locator, $field_name, $body)

Update a parameter of an artifact dependency of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setArtifactDependencyParameter($bt_locator, $artifact_dep_locator, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setArtifactDependencyParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildFeatureParameter**
> string setBuildFeatureParameter($bt_locator, $feature_id, $name, $body)

Update a parameter of a build feature of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildFeatureParameter($bt_locator, $feature_id, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setBuildFeatureParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
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

# **setBuildStepParameter**
> string setBuildStepParameter($bt_locator, $step_id, $field_name, $body)

Update a parameter of a build step of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildStepParameter($bt_locator, $step_id, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setBuildStepParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildTypeField**
> string setBuildTypeField($bt_locator, $field, $body)

Update a field of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildTypeField($bt_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setBuildTypeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
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

# **setBuildTypeTemplates**
> \Swagger\Client\Model\BuildTypes setBuildTypeTemplates($bt_locator, $body, $optimize_settings, $fields)

Update all templates of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\BuildTypes(); // \Swagger\Client\Model\BuildTypes | 
$optimize_settings = true; // bool | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildTypeTemplates($bt_locator, $body, $optimize_settings, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setBuildTypeTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\BuildTypes**](../Model/BuildTypes.md)|  | [optional]
 **optimize_settings** | **bool**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTriggerParameter**
> string setTriggerParameter($bt_locator, $trigger_locator, $field_name, $body)

Update a parameter of a trigger of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setTriggerParameter($bt_locator, $trigger_locator, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setTriggerParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterOfBuildType**
> \Swagger\Client\Model\Property updateBuildParameterOfBuildType($name, $bt_locator, $body, $fields)

Update build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\Property(); // \Swagger\Client\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameterOfBuildType($name, $bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildParameterOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterSpecificationOfBuildType**
> string updateBuildParameterSpecificationOfBuildType($name, $bt_locator, $body)

Update build parameter specification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameterSpecificationOfBuildType($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildParameterSpecificationOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterTypeOfBuildType**
> \Swagger\Client\Model\Type updateBuildParameterTypeOfBuildType($name, $bt_locator, $body)

Update type of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\Type(); // \Swagger\Client\Model\Type | 

try {
    $result = $apiInstance->updateBuildParameterTypeOfBuildType($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildParameterTypeOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Type**](../Model/Type.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParameterValueOfBuildType**
> string updateBuildParameterValueOfBuildType($name, $bt_locator, $body)

Update value of build parameter.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->updateBuildParameterValueOfBuildType($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildParameterValueOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildParametersOfBuildType**
> \Swagger\Client\Model\Properties updateBuildParametersOfBuildType($bt_locator, $body, $fields)

Update build parameters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \Swagger\Client\Model\Properties(); // \Swagger\Client\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateBuildParametersOfBuildType($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildParametersOfBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Properties**](../Model/Properties.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildTypeVcsRoot**
> \Swagger\Client\Model\VcsRootEntry updateBuildTypeVcsRoot($bt_locator, $vcs_root_locator, $body, $fields)

Update a VCS root of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$body = new \Swagger\Client\Model\VcsRootEntry(); // \Swagger\Client\Model\VcsRootEntry | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateBuildTypeVcsRoot($bt_locator, $vcs_root_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildTypeVcsRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\VcsRootEntry**](../Model/VcsRootEntry.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VcsRootEntry**](../Model/VcsRootEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBuildTypeVcsRootCheckoutRules**
> string updateBuildTypeVcsRootCheckoutRules($bt_locator, $vcs_root_locator, $body)

Update checkout rules of a VCS root of the matching build configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->updateBuildTypeVcsRootCheckoutRules($bt_locator, $vcs_root_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateBuildTypeVcsRootCheckoutRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

