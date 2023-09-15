# Swagger\Client\ActivateAndRevokeApiApi

All URIs are relative to *https://xentry.api.mercedes-benz.com/umas/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignRights**](ActivateAndRevokeApiApi.md#assignrights) | **POST** /admin/assign | Grant an existing user the organization administrator permission
[**revokeRights**](ActivateAndRevokeApiApi.md#revokerights) | **DELETE** /admin/revoke | Remove the organization administrator permission from a user

# **assignRights**
> assignRights($body)

Grant an existing user the organization administrator permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivateAndRevokeApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrganizationAdminLink(); // \Swagger\Client\Model\OrganizationAdminLink | 

try {
    $apiInstance->assignRights($body);
} catch (Exception $e) {
    echo 'Exception when calling ActivateAndRevokeApiApi->assignRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrganizationAdminLink**](../Model/OrganizationAdminLink.md)|  |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeRights**
> revokeRights($body)

Remove the organization administrator permission from a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivateAndRevokeApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrganizationAdminLink(); // \Swagger\Client\Model\OrganizationAdminLink | 

try {
    $apiInstance->revokeRights($body);
} catch (Exception $e) {
    echo 'Exception when calling ActivateAndRevokeApiApi->revokeRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrganizationAdminLink**](../Model/OrganizationAdminLink.md)|  |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

