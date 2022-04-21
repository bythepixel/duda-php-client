# OpenAPI\Client\URLRulesApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesMultiscreenSiteSiteNameUrlrulesGet()**](URLRulesApi.md#sitesMultiscreenSiteSiteNameUrlrulesGet) | **GET** /sites/multiscreen/site/{site_name}/urlrules | Get all of the URL rules of a Site.
[**sitesMultiscreenSiteSiteNameUrlrulesIdDelete()**](URLRulesApi.md#sitesMultiscreenSiteSiteNameUrlrulesIdDelete) | **DELETE** /sites/multiscreen/site/{site_name}/urlrules/{id} | Delete an existing URL rule.
[**sitesMultiscreenSiteSiteNameUrlrulesIdGet()**](URLRulesApi.md#sitesMultiscreenSiteSiteNameUrlrulesIdGet) | **GET** /sites/multiscreen/site/{site_name}/urlrules/{id} | Get all of the URL rules of a Site.
[**sitesMultiscreenSiteSiteNameUrlrulesIdPut()**](URLRulesApi.md#sitesMultiscreenSiteSiteNameUrlrulesIdPut) | **PUT** /sites/multiscreen/site/{site_name}/urlrules/{id} | Update an existing URL rule.
[**sitesMultiscreenSiteSiteNameUrlrulesPost()**](URLRulesApi.md#sitesMultiscreenSiteSiteNameUrlrulesPost) | **POST** /sites/multiscreen/site/{site_name}/urlrules | Create a new URL rule.


## `sitesMultiscreenSiteSiteNameUrlrulesGet()`

```php
sitesMultiscreenSiteSiteNameUrlrulesGet($site_name): \OpenAPI\Client\Model\InlineResponse2002
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
    $result = $apiInstance->sitesMultiscreenSiteSiteNameUrlrulesGet($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->sitesMultiscreenSiteSiteNameUrlrulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteSiteNameUrlrulesIdDelete()`

```php
sitesMultiscreenSiteSiteNameUrlrulesIdDelete($site_name, $id)
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
    $apiInstance->sitesMultiscreenSiteSiteNameUrlrulesIdDelete($site_name, $id);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->sitesMultiscreenSiteSiteNameUrlrulesIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteSiteNameUrlrulesIdGet()`

```php
sitesMultiscreenSiteSiteNameUrlrulesIdGet($site_name, $id): \OpenAPI\Client\Model\UrlRule
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
$id = rule-id; // string | The unique identifier of the target URL rule.

try {
    $result = $apiInstance->sitesMultiscreenSiteSiteNameUrlrulesIdGet($site_name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->sitesMultiscreenSiteSiteNameUrlrulesIdGet: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteSiteNameUrlrulesIdPut()`

```php
sitesMultiscreenSiteSiteNameUrlrulesIdPut($site_name, $id, $url_rule): \OpenAPI\Client\Model\UrlRule
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
    $result = $apiInstance->sitesMultiscreenSiteSiteNameUrlrulesIdPut($site_name, $id, $url_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->sitesMultiscreenSiteSiteNameUrlrulesIdPut: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteSiteNameUrlrulesPost()`

```php
sitesMultiscreenSiteSiteNameUrlrulesPost($site_name, $url_rule): \OpenAPI\Client\Model\UrlRule
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
    $result = $apiInstance->sitesMultiscreenSiteSiteNameUrlrulesPost($site_name, $url_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLRulesApi->sitesMultiscreenSiteSiteNameUrlrulesPost: ', $e->getMessage(), PHP_EOL;
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
