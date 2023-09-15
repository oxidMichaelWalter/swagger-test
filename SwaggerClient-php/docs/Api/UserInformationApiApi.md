# Swagger\Client\UserInformationApiApi

All URIs are relative to *https://xentry.api.mercedes-benz.com/umas/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserDetails**](UserInformationApiApi.md#getuserdetails) | **GET** /userInformation/{id} | Retrieve user information for the given user ID.

# **getUserDetails**
> getUserDetails($id)

Retrieve user information for the given user ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserInformationApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | User ID using which the user information will be fetched

try {
    $apiInstance->getUserDetails($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApiApi->getUserDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID using which the user information will be fetched |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

