# Swagger\Client\ProductListApiApi

All URIs are relative to *https://xentry.api.mercedes-benz.com/umas/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllActiveProducts**](ProductListApiApi.md#getallactiveproducts) | **GET** /product/activeApplications/{requesterId}/{userId} | Retrieve all active applications/access rights for the given user.
[**getProductForUser**](ProductListApiApi.md#getproductforuser) | **GET** /product/activeApplications/{requesterId}/{userId}/{productId} | Check if a specific product is active for the given user and retrieve the product information
[**putProductList**](ProductListApiApi.md#putproductlist) | **PUT** /applications/{requesterId} | Update/add access rights for users. Multiple users and access rights can be updated in one PUT call. The productID must match the existing product ID created in UMAS. The brands must match the available brands by an application. Access rights can only be updated when the duration extends the current set duration.

# **getAllActiveProducts**
> getAllActiveProducts($user_id, $requester_id)

Retrieve all active applications/access rights for the given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductListApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Get the Active product for the UserId
$requester_id = "requester_id_example"; // string | Name of the application which is calling the API, e.g. B2B. This is a freetext field.

try {
    $apiInstance->getAllActiveProducts($user_id, $requester_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApiApi->getAllActiveProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Get the Active product for the UserId |
 **requester_id** | **string**| Name of the application which is calling the API, e.g. B2B. This is a freetext field. |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductForUser**
> getProductForUser($user_id, $product_id, $requester_id)

Check if a specific product is active for the given user and retrieve the product information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductListApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Get the Active product for the UserId
$product_id = "product_id_example"; // string | Get the product specific product
$requester_id = "requester_id_example"; // string | Name of the application which is calling the API, e.g. B2B. This is a freetext field.

try {
    $apiInstance->getProductForUser($user_id, $product_id, $requester_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApiApi->getProductForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Get the Active product for the UserId |
 **product_id** | **string**| Get the product specific product |
 **requester_id** | **string**| Name of the application which is calling the API, e.g. B2B. This is a freetext field. |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductList**
> putProductList($body, $requester_id)

Update/add access rights for users. Multiple users and access rights can be updated in one PUT call. The productID must match the existing product ID created in UMAS. The brands must match the available brands by an application. Access rights can only be updated when the duration extends the current set duration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: umas_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductListApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserRole(); // \Swagger\Client\Model\UserRole | 
$requester_id = "requester_id_example"; // string | Name of the application which is calling the API, e.g. B2B. This is a freetext field.

try {
    $apiInstance->putProductList($body, $requester_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductListApiApi->putProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserRole**](../Model/UserRole.md)|  |
 **requester_id** | **string**| Name of the application which is calling the API, e.g. B2B. This is a freetext field. |

### Return type

void (empty response body)

### Authorization

[umas_oauth](../../README.md#umas_oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

