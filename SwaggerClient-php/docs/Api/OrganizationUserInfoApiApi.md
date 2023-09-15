# Swagger\Client\OrganizationUserInfoApiApi

All URIs are relative to *https://xentry.api.mercedes-benz.com/umas/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllUsersForOrg**](OrganizationUserInfoApiApi.md#getallusersfororg) | **GET** /orgInfo/{organizationId}/users | Retrieve all users which belong to the given organization ID (home org).
[**getGivenOrgInfo**](OrganizationUserInfoApiApi.md#getgivenorginfo) | **GET** /orgInfo/organizations/{id} | Retrieve organization information for the given organization ID.
[**getUserOrginfo**](OrganizationUserInfoApiApi.md#getuserorginfo) | **GET** /orgInfo/{organizationId}/user/{userId} | Retrieve user and correspondng org info. The ids must match, i.e. the organization with the given organizationId MUST be the users home org with the given userId.

# **getAllUsersForOrg**
> \Swagger\Client\Model\UsersDto getAllUsersForOrg($organization_id)

Retrieve all users which belong to the given organization ID (home org).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrganizationUserInfoApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | OrganizationID of the organization for which users are requested

try {
    $result = $apiInstance->getAllUsersForOrg($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationUserInfoApiApi->getAllUsersForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| OrganizationID of the organization for which users are requested |

### Return type

[**\Swagger\Client\Model\UsersDto**](../Model/UsersDto.md)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGivenOrgInfo**
> \Swagger\Client\Model\OrganisationInfoDTO getGivenOrgInfo($id)

Retrieve organization information for the given organization ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrganizationUserInfoApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Org id from which fetch the organization info

try {
    $result = $apiInstance->getGivenOrgInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationUserInfoApiApi->getGivenOrgInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Org id from which fetch the organization info |

### Return type

[**\Swagger\Client\Model\OrganisationInfoDTO**](../Model/OrganisationInfoDTO.md)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserOrginfo**
> \Swagger\Client\Model\UserOrgDto getUserOrginfo($organization_id, $user_id)

Retrieve user and correspondng org info. The ids must match, i.e. the organization with the given organizationId MUST be the users home org with the given userId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrganizationUserInfoApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | OrganizationID of the organization for which particular user is requested
$user_id = "user_id_example"; // string | UserId of the user belongs to requested OrganizationID

try {
    $result = $apiInstance->getUserOrginfo($organization_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationUserInfoApiApi->getUserOrginfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| OrganizationID of the organization for which particular user is requested |
 **user_id** | **string**| UserId of the user belongs to requested OrganizationID |

### Return type

[**\Swagger\Client\Model\UserOrgDto**](../Model/UserOrgDto.md)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

