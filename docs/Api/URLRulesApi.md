# OpenAPI\Client\URLRulesApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRule()**](URLRulesApi.md#createRule) | **POST** /sites/multiscreen/site/{site_name}/urlrules | Create a new URL rule.
[**deleteRule()**](URLRulesApi.md#deleteRule) | **DELETE** /sites/multiscreen/site/{site_name}/urlrules/{id} | Delete an existing URL rule.
[**getAllRules()**](URLRulesApi.md#getAllRules) | **GET** /sites/multiscreen/site/{site_name}/urlrules | Get all of the URL rules of a Site.
[**getRule()**](URLRulesApi.md#getRule) | **GET** /sites/multiscreen/site/{site_name}/urlrules/{id} | Get the details of a specific URL rule
[**updateRule()**](URLRulesApi.md#updateRule) | **PUT** /sites/multiscreen/site/{site_name}/urlrules/{id} | Update an existing URL rule.


## `createRule()`

```php
createRule($site_name, $url_rule): \OpenAPI\Client\Model\UrlRule
```

Create a new URL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\URLRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$url_rule = new \OpenAPI\Client\Model\UrlRule(); // \OpenAPI\Client\Model\UrlRule

try {
    $result = $apiInstance->createRule($site_name, $url_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->createRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **url_rule** | [**\OpenAPI\Client\Model\UrlRule**](../Model/UrlRule.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UrlRule**](../Model/UrlRule.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRule()`

```php
deleteRule($site_name, $id)
```

Delete an existing URL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\URLRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$id = rule-id; // string | The unique identifier of the target URL rule.

try {
    $apiInstance->deleteRule($site_name, $id);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **id** | **string**| The unique identifier of the target URL rule. |

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

## `getAllRules()`

```php
getAllRules($site_name): \OpenAPI\Client\Model\GetAllRulesResponse
```

Get all of the URL rules of a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\URLRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->getAllRules($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->getAllRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\GetAllRulesResponse**](../Model/GetAllRulesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRule()`

```php
getRule($site_name, $id): \OpenAPI\Client\Model\UrlRule
```

Get the details of a specific URL rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\URLRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$id = rule-id; // string | The unique identifier of the target URL rule.

try {
    $result = $apiInstance->getRule($site_name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->getRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **id** | **string**| The unique identifier of the target URL rule. |

### Return type

[**\OpenAPI\Client\Model\UrlRule**](../Model/UrlRule.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRule()`

```php
updateRule($site_name, $id, $url_rule): \OpenAPI\Client\Model\UrlRule
```

Update an existing URL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\URLRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$id = rule-id; // string | The unique identifier of the target URL rule.
$url_rule = new \OpenAPI\Client\Model\UrlRule(); // \OpenAPI\Client\Model\UrlRule

try {
    $result = $apiInstance->updateRule($site_name, $id, $url_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **id** | **string**| The unique identifier of the target URL rule. |
 **url_rule** | [**\OpenAPI\Client\Model\UrlRule**](../Model/UrlRule.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UrlRule**](../Model/UrlRule.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
