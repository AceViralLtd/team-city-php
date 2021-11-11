# Swagger\Client\GroupApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroup**](GroupApi.md#addGroup) | **POST** /app/rest/userGroups | Add a new user group.
[**addRoleAtScopeToGroup**](GroupApi.md#addRoleAtScopeToGroup) | **POST** /app/rest/userGroups/{groupLocator}/roles/{roleId}/{scope} | Add a role with the specific scope to the matching user group.
[**addRoleToGroup**](GroupApi.md#addRoleToGroup) | **POST** /app/rest/userGroups/{groupLocator}/roles | Add a role to the matching user group.
[**deleteGroup**](GroupApi.md#deleteGroup) | **DELETE** /app/rest/userGroups/{groupLocator} | Delete user group matching the locator.
[**getAllGroups**](GroupApi.md#getAllGroups) | **GET** /app/rest/userGroups | Get all user groups.
[**getGroupParentGroups**](GroupApi.md#getGroupParentGroups) | **GET** /app/rest/userGroups/{groupLocator}/parent-groups | Get parent groups of the matching user group.
[**getGroupProperties**](GroupApi.md#getGroupProperties) | **GET** /app/rest/userGroups/{groupLocator}/properties | Get properties of the matching user group.
[**getGroupProperty**](GroupApi.md#getGroupProperty) | **GET** /app/rest/userGroups/{groupLocator}/properties/{name} | Get a property of the matching user group.
[**getGroupRoleAtScope**](GroupApi.md#getGroupRoleAtScope) | **GET** /app/rest/userGroups/{groupLocator}/roles/{roleId}/{scope} | Get a role with the specific scope of the matching user group.
[**getGroupRoles**](GroupApi.md#getGroupRoles) | **GET** /app/rest/userGroups/{groupLocator}/roles | Get all roles of the matching user group.
[**getUserGroupOfGroup**](GroupApi.md#getUserGroupOfGroup) | **GET** /app/rest/userGroups/{groupLocator} | Get user group matching the locator.
[**removeGroupProperty**](GroupApi.md#removeGroupProperty) | **DELETE** /app/rest/userGroups/{groupLocator}/properties/{name} | Remove a property of the matching user group.
[**removeRoleAtScopeFromGroup**](GroupApi.md#removeRoleAtScopeFromGroup) | **DELETE** /app/rest/userGroups/{groupLocator}/roles/{roleId}/{scope} | Remove a role with the specific scope from the matching user group.
[**setGroupParentGroups**](GroupApi.md#setGroupParentGroups) | **PUT** /app/rest/userGroups/{groupLocator}/parent-groups | Update parent groups of the matching user group.
[**setGroupProperty**](GroupApi.md#setGroupProperty) | **PUT** /app/rest/userGroups/{groupLocator}/properties/{name} | Update a property of the matching user group.
[**setGroupRoles**](GroupApi.md#setGroupRoles) | **PUT** /app/rest/userGroups/{groupLocator}/roles | Update roles of the matching user group.


# **addGroup**
> \Swagger\Client\Model\Group addGroup($body, $fields)

Add a new user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addGroup($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Group**](../Model/Group.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoleAtScopeToGroup**
> \Swagger\Client\Model\Role addRoleAtScopeToGroup($group_locator, $role_id, $scope)

Add a role with the specific scope to the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->addRoleAtScopeToGroup($group_locator, $role_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addRoleAtScopeToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoleToGroup**
> \Swagger\Client\Model\Role addRoleToGroup($group_locator, $body)

Add a role to the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$body = new \Swagger\Client\Model\Role(); // \Swagger\Client\Model\Role | 

try {
    $result = $apiInstance->addRoleToGroup($group_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addRoleToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Role**](../Model/Role.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($group_locator)

Delete user group matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 

try {
    $apiInstance->deleteGroup($group_locator);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllGroups**
> \Swagger\Client\Model\Groups getAllGroups($fields)

Get all user groups.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Groups**](../Model/Groups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupParentGroups**
> \Swagger\Client\Model\Groups getGroupParentGroups($group_locator, $fields)

Get parent groups of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getGroupParentGroups($group_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupParentGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Groups**](../Model/Groups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupProperties**
> \Swagger\Client\Model\Properties getGroupProperties($group_locator, $fields)

Get properties of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getGroupProperties($group_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupProperty**
> string getGroupProperty($group_locator, $name)

Get a property of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getGroupProperty($group_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupRoleAtScope**
> \Swagger\Client\Model\Role getGroupRoleAtScope($group_locator, $role_id, $scope)

Get a role with the specific scope of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->getGroupRoleAtScope($group_locator, $role_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupRoleAtScope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupRoles**
> \Swagger\Client\Model\Roles getGroupRoles($group_locator)

Get all roles of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 

try {
    $result = $apiInstance->getGroupRoles($group_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |

### Return type

[**\Swagger\Client\Model\Roles**](../Model/Roles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGroupOfGroup**
> \Swagger\Client\Model\Group getUserGroupOfGroup($group_locator, $fields)

Get user group matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUserGroupOfGroup($group_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getUserGroupOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGroupProperty**
> removeGroupProperty($group_locator, $name)

Remove a property of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->removeGroupProperty($group_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->removeGroupProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeRoleAtScopeFromGroup**
> removeRoleAtScopeFromGroup($group_locator, $role_id, $scope)

Remove a role with the specific scope from the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $apiInstance->removeRoleAtScopeFromGroup($group_locator, $role_id, $scope);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->removeRoleAtScopeFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupParentGroups**
> \Swagger\Client\Model\Groups setGroupParentGroups($group_locator, $body, $fields)

Update parent groups of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$body = new \Swagger\Client\Model\Groups(); // \Swagger\Client\Model\Groups | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setGroupParentGroups($group_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupParentGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Groups**](../Model/Groups.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Groups**](../Model/Groups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupProperty**
> string setGroupProperty($group_locator, $name, $body)

Update a property of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setGroupProperty($group_locator, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
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

# **setGroupRoles**
> \Swagger\Client\Model\Roles setGroupRoles($group_locator, $body)

Update roles of the matching user group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_locator = "group_locator_example"; // string | 
$body = new \Swagger\Client\Model\Roles(); // \Swagger\Client\Model\Roles | 

try {
    $result = $apiInstance->setGroupRoles($group_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Roles**](../Model/Roles.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Roles**](../Model/Roles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

