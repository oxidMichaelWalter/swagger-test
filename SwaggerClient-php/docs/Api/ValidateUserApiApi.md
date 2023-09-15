# Swagger\Client\ValidateUserApiApi

All URIs are relative to *https://xentry.api.mercedes-benz.com/umas/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateUserAndOrg**](ValidateUserApiApi.md#validateuserandorg) | **GET** /validate/{requesterId}/{userId}/{gsId} | Check if a user belongs to a given organization. i.e. the organization with the given organizationId MUST be the users home org with the given userId.

# **validateUserAndOrg**
> validateUserAndOrg($requester_id, $user_id, $gs_id)

Check if a user belongs to a given organization. i.e. the organization with the given organizationId MUST be the users home org with the given userId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ValidateUserApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requester_id = "requester_id_example"; // string | Name of the application which is calling the API, e.g. B2B. This is a freetext field.
$user_id = "user_id_example"; // string | User id from which user will validate
$gs_id = "gs_id_example"; // string | gssnId from which validate the organisation corresponding user

try {
    $apiInstance->validateUserAndOrg($requester_id, $user_id, $gs_id);
} catch (Exception $e) {
    echo 'Exception when calling ValidateUserApiApi->validateUserAndOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requester_id** | **string**| Name of the application which is calling the API, e.g. B2B. This is a freetext field. |
 **user_id** | **string**| User id from which user will validate |
 **gs_id** | **string**| gssnId from which validate the organisation corresponding user |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

