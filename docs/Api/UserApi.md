# Swagger\Client\UserApi

All URIs are relative to *https://10.0.0.115:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRoleToUser**](UserApi.md#addRoleToUser) | **POST** /app/rest/users/{userLocator}/roles | Add a role to the matching user.
[**addRoleToUserAtScope**](UserApi.md#addRoleToUserAtScope) | **PUT** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | Add a role with the specific scope to the matching user.
[**addUser**](UserApi.md#addUser) | **POST** /app/rest/users | Create a new user.
[**addUserToken**](UserApi.md#addUserToken) | **POST** /app/rest/users/{userLocator}/tokens | Create a new authentication token for the matching user.
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /app/rest/users/{userLocator} | Delete user matching the locator.
[**deleteUserField**](UserApi.md#deleteUserField) | **DELETE** /app/rest/users/{userLocator}/{field} | Remove a property of the matching user.
[**deleteUserToken**](UserApi.md#deleteUserToken) | **DELETE** /app/rest/users/{userLocator}/tokens/{name} | Remove an authentication token from the matching user.
[**getAllUserGroups**](UserApi.md#getAllUserGroups) | **GET** /app/rest/users/{userLocator}/groups | Get all groups of the matching user.
[**getAllUserRoles**](UserApi.md#getAllUserRoles) | **GET** /app/rest/users/{userLocator}/roles | Get all user roles of the matching user.
[**getAllUsers**](UserApi.md#getAllUsers) | **GET** /app/rest/users | Get all users.
[**getUser**](UserApi.md#getUser) | **GET** /app/rest/users/{userLocator} | Get user matching the locator.
[**getUserField**](UserApi.md#getUserField) | **GET** /app/rest/users/{userLocator}/{field} | Get a field of the matching user.
[**getUserGroup**](UserApi.md#getUserGroup) | **GET** /app/rest/users/{userLocator}/groups/{groupLocator} | Get a user group of the matching user.
[**getUserPermissions**](UserApi.md#getUserPermissions) | **GET** /app/rest/users/{userLocator}/permissions | Get all permissions effective for the matching user.
[**getUserProperties**](UserApi.md#getUserProperties) | **GET** /app/rest/users/{userLocator}/properties | Get all properties of the matching user.
[**getUserProperty**](UserApi.md#getUserProperty) | **GET** /app/rest/users/{userLocator}/properties/{name} | Get a property of the matching user.
[**getUserRolesAtScope**](UserApi.md#getUserRolesAtScope) | **GET** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | Get a user role with the specific scope from the matching user.
[**getUserTokens**](UserApi.md#getUserTokens) | **GET** /app/rest/users/{userLocator}/tokens | Get all authentication tokens of the matching user.
[**removeUserFromGroup**](UserApi.md#removeUserFromGroup) | **DELETE** /app/rest/users/{userLocator}/groups/{groupLocator} | Remove the matching user from the specific group.
[**removeUserProperty**](UserApi.md#removeUserProperty) | **DELETE** /app/rest/users/{userLocator}/properties/{name} | Remove a property of the matching user.
[**removeUserRememberMe**](UserApi.md#removeUserRememberMe) | **DELETE** /app/rest/users/{userLocator}/debug/rememberMe | Remove the RememberMe data of the matching user.
[**removeUserRoleAtScope**](UserApi.md#removeUserRoleAtScope) | **DELETE** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | Remove a role with the specific scope from the matching user.
[**replaceUser**](UserApi.md#replaceUser) | **PUT** /app/rest/users/{userLocator} | Update user matching the locator.
[**setUserField**](UserApi.md#setUserField) | **PUT** /app/rest/users/{userLocator}/{field} | Update a field of the matching user.
[**setUserGroups**](UserApi.md#setUserGroups) | **PUT** /app/rest/users/{userLocator}/groups | Update groups of the matching user.
[**setUserProperty**](UserApi.md#setUserProperty) | **PUT** /app/rest/users/{userLocator}/properties/{name} | Update a property of the matching user.
[**setUserRoles**](UserApi.md#setUserRoles) | **PUT** /app/rest/users/{userLocator}/roles | Update user roles of the matching user.


# **addRoleToUser**
> \Swagger\Client\Model\Role addRoleToUser($user_locator, $body)

Add a role to the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \Swagger\Client\Model\Role(); // \Swagger\Client\Model\Role | 

try {
    $result = $apiInstance->addRoleToUser($user_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addRoleToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Role**](../Model/Role.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoleToUserAtScope**
> \Swagger\Client\Model\Role addRoleToUserAtScope($user_locator, $role_id, $scope)

Add a role with the specific scope to the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->addRoleToUserAtScope($user_locator, $role_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addRoleToUserAtScope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **addUser**
> \Swagger\Client\Model\User addUser($body, $fields)

Create a new user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addUser($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\User**](../Model/User.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUserToken**
> \Swagger\Client\Model\Token addUserToken($user_locator, $body, $fields)

Create a new authentication token for the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \Swagger\Client\Model\Token(); // \Swagger\Client\Model\Token | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addUserToken($user_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addUserToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Token**](../Model/Token.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($user_locator)

Delete user matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $apiInstance->deleteUser($user_locator);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserField**
> deleteUserField($user_locator, $field)

Remove a property of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $apiInstance->deleteUserField($user_locator, $field);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **field** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserToken**
> deleteUserToken($user_locator, $name)

Remove an authentication token from the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->deleteUserToken($user_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllUserGroups**
> \Swagger\Client\Model\Groups getAllUserGroups($user_locator, $fields)

Get all groups of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllUserGroups($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAllUserGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Groups**](../Model/Groups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllUserRoles**
> \Swagger\Client\Model\Roles getAllUserRoles($user_locator)

Get all user roles of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $result = $apiInstance->getAllUserRoles($user_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAllUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

[**\Swagger\Client\Model\Roles**](../Model/Roles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllUsers**
> \Swagger\Client\Model\Users getAllUsers($locator, $fields)

Get all users.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllUsers($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAllUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Users**](../Model/Users.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Swagger\Client\Model\User getUser($user_locator, $fields)

Get user matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUser($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserField**
> string getUserField($user_locator, $field)

Get a field of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getUserField($user_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGroup**
> \Swagger\Client\Model\Group getUserGroup($user_locator, $group_locator, $fields)

Get a user group of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUserGroup($user_locator, $group_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **getUserPermissions**
> \Swagger\Client\Model\PermissionAssignments getUserPermissions($user_locator, $locator, $fields)

Get all permissions effective for the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUserPermissions($user_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PermissionAssignments**](../Model/PermissionAssignments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserProperties**
> \Swagger\Client\Model\Properties getUserProperties($user_locator, $fields)

Get all properties of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUserProperties($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserProperty**
> string getUserProperty($user_locator, $name)

Get a property of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getUserProperty($user_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRolesAtScope**
> \Swagger\Client\Model\Role getUserRolesAtScope($user_locator, $role_id, $scope)

Get a user role with the specific scope from the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->getUserRolesAtScope($user_locator, $role_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserRolesAtScope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **getUserTokens**
> \Swagger\Client\Model\Tokens getUserTokens($user_locator, $fields)

Get all authentication tokens of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getUserTokens($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tokens**](../Model/Tokens.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserFromGroup**
> removeUserFromGroup($user_locator, $group_locator, $fields)

Remove the matching user from the specific group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->removeUserFromGroup($user_locator, $group_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeUserFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **group_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserProperty**
> removeUserProperty($user_locator, $name)

Remove a property of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->removeUserProperty($user_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeUserProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserRememberMe**
> removeUserRememberMe($user_locator)

Remove the RememberMe data of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $apiInstance->removeUserRememberMe($user_locator);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeUserRememberMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserRoleAtScope**
> removeUserRoleAtScope($user_locator, $role_id, $scope)

Remove a role with the specific scope from the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $apiInstance->removeUserRoleAtScope($user_locator, $role_id, $scope);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeUserRoleAtScope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **replaceUser**
> \Swagger\Client\Model\User replaceUser($user_locator, $body, $fields)

Update user matching the locator.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceUser($user_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->replaceUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\User**](../Model/User.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserField**
> string setUserField($user_locator, $field, $body)

Update a field of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setUserField($user_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setUserField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **setUserGroups**
> \Swagger\Client\Model\Groups setUserGroups($user_locator, $body, $fields)

Update groups of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \Swagger\Client\Model\Groups(); // \Swagger\Client\Model\Groups | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setUserGroups($user_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setUserGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **setUserProperty**
> string setUserProperty($user_locator, $name, $body)

Update a property of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setUserProperty($user_locator, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setUserProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **setUserRoles**
> \Swagger\Client\Model\Roles setUserRoles($user_locator, $body)

Update user roles of the matching user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \Swagger\Client\Model\Roles(); // \Swagger\Client\Model\Roles | 

try {
    $result = $apiInstance->setUserRoles($user_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\Swagger\Client\Model\Roles**](../Model/Roles.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Roles**](../Model/Roles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

