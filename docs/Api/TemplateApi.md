# OpenAPI\Client\TemplateApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesMultiscreenTemplatesGet()**](TemplateApi.md#sitesMultiscreenTemplatesGet) | **GET** /sites/multiscreen/templates | Get all available Templates.
[**sitesMultiscreenTemplatesPost()**](TemplateApi.md#sitesMultiscreenTemplatesPost) | **POST** /sites/multiscreen/templates | Create a new Template based on an existing one
[**sitesMultiscreenTemplatesTemplateIdDelete()**](TemplateApi.md#sitesMultiscreenTemplatesTemplateIdDelete) | **DELETE** /sites/multiscreen/templates/{template_id} | Delete a custom Template.
[**sitesMultiscreenTemplatesTemplateIdGet()**](TemplateApi.md#sitesMultiscreenTemplatesTemplateIdGet) | **GET** /sites/multiscreen/templates/{template_id} | Get the details of a Template.
[**sitesMultiscreenTemplatesTemplateIdPost()**](TemplateApi.md#sitesMultiscreenTemplatesTemplateIdPost) | **POST** /sites/multiscreen/templates/{template_id} | Update the name of a custom Template.


## `sitesMultiscreenTemplatesGet()`

```php
sitesMultiscreenTemplatesGet(): \OpenAPI\Client\Model\Template[]
```

Get all available Templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sitesMultiscreenTemplatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->sitesMultiscreenTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenTemplatesPost()`

```php
sitesMultiscreenTemplatesPost($inline_object4): \OpenAPI\Client\Model\Template
```

Create a new Template based on an existing one

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4

try {
    $result = $apiInstance->sitesMultiscreenTemplatesPost($inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->sitesMultiscreenTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenTemplatesTemplateIdDelete()`

```php
sitesMultiscreenTemplatesTemplateIdDelete($template_id)
```

Delete a custom Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1000134; // string | ID of the template to delete

try {
    $apiInstance->sitesMultiscreenTemplatesTemplateIdDelete($template_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->sitesMultiscreenTemplatesTemplateIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| ID of the template to delete |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenTemplatesTemplateIdGet()`

```php
sitesMultiscreenTemplatesTemplateIdGet($template_id): \OpenAPI\Client\Model\Template
```

Get the details of a Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1000134; // string | ID associated with a template

try {
    $result = $apiInstance->sitesMultiscreenTemplatesTemplateIdGet($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->sitesMultiscreenTemplatesTemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| ID associated with a template |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenTemplatesTemplateIdPost()`

```php
sitesMultiscreenTemplatesTemplateIdPost($template_id, $inline_object5)
```

Update the name of a custom Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1000134; // string | ID associated with a template
$inline_object5 = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $apiInstance->sitesMultiscreenTemplatesTemplateIdPost($template_id, $inline_object5);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->sitesMultiscreenTemplatesTemplateIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| ID associated with a template |
 **inline_object5** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
