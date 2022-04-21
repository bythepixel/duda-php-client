# OpenAPI\Client\SiteApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**externalUid()**](SiteApi.md#externalUid) | **GET** /sites/multiscreen/byexternalid/{external_uid} | Get the names of Sites that have a specific external id.
[**siteName()**](SiteApi.md#siteName) | **GET** /sites/multiscreen/{site_name} | Details about a site
[**sitesMultiscreenCreatePost()**](SiteApi.md#sitesMultiscreenCreatePost) | **POST** /sites/multiscreen/create | Create a new Site from a Template.
[**sitesMultiscreenDuplicateSiteNamePost()**](SiteApi.md#sitesMultiscreenDuplicateSiteNamePost) | **POST** /sites/multiscreen/duplicate/{site_name} | Creates a new Site based on an existing one.
[**sitesMultiscreenPublishSiteNamePost()**](SiteApi.md#sitesMultiscreenPublishSiteNamePost) | **POST** /sites/multiscreen/publish/{site_name} | Takes a Site live and purchases a subscription.
[**sitesMultiscreenResetSiteNamePost()**](SiteApi.md#sitesMultiscreenResetSiteNamePost) | **POST** /sites/multiscreen/reset/{site_name} | Resets a Site to initial state or based on a new template and data.
[**sitesMultiscreenSiteNameDelete()**](SiteApi.md#sitesMultiscreenSiteNameDelete) | **DELETE** /sites/multiscreen/{site_name} | Permanently deletes a Site and cancels all subscriptions.
[**sitesMultiscreenSiteNamePost()**](SiteApi.md#sitesMultiscreenSiteNamePost) | **POST** /sites/multiscreen/{site_name} | Update properties of an existing Site.
[**sitesMultiscreenSwitchTemplateSiteNamePost()**](SiteApi.md#sitesMultiscreenSwitchTemplateSiteNamePost) | **POST** /sites/multiscreen/switchTemplate/{site_name} | Applies a new template to an existing Site.
[**sitesMultiscreenUnpublishSiteNamePost()**](SiteApi.md#sitesMultiscreenUnpublishSiteNamePost) | **POST** /sites/multiscreen/unpublish/{site_name} | Takes down a Site and suspends it&#39;s subscription.
[**sitesMultiscreenUpdateSiteNamePost()**](SiteApi.md#sitesMultiscreenUpdateSiteNamePost) | **POST** /sites/multiscreen/update/{site_name} | Update properties of an existing Site.


## `externalUid()`

```php
externalUid($external_uid): string[]
```

Get the names of Sites that have a specific external id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_uid = an-ext-id; // string | The external ID associated with a single or group of Sites.

try {
    $result = $apiInstance->externalUid($external_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->externalUid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_uid** | **string**| The external ID associated with a single or group of Sites. |

### Return type

**string[]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siteName()`

```php
siteName($site_name): \OpenAPI\Client\Model\Site
```

Details about a site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->siteName($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\Site**](../Model/Site.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenCreatePost()`

```php
sitesMultiscreenCreatePost($inline_object1): \OpenAPI\Client\Model\Site
```

Create a new Site from a Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object1 = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $result = $apiInstance->sitesMultiscreenCreatePost($inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object1** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\OpenAPI\Client\Model\Site**](../Model/Site.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenDuplicateSiteNamePost()`

```php
sitesMultiscreenDuplicateSiteNamePost($site_name, $inline_object): \OpenAPI\Client\Model\InlineResponse200
```

Creates a new Site based on an existing one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->sitesMultiscreenDuplicateSiteNamePost($site_name, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenDuplicateSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenPublishSiteNamePost()`

```php
sitesMultiscreenPublishSiteNamePost($site_name)
```

Takes a Site live and purchases a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->sitesMultiscreenPublishSiteNamePost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenPublishSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

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

## `sitesMultiscreenResetSiteNamePost()`

```php
sitesMultiscreenResetSiteNamePost($site_name)
```

Resets a Site to initial state or based on a new template and data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->sitesMultiscreenResetSiteNamePost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenResetSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

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

## `sitesMultiscreenSiteNameDelete()`

```php
sitesMultiscreenSiteNameDelete($site_name)
```

Permanently deletes a Site and cancels all subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = qw34wq; // string | The unique identifier of the target Site.

try {
    $apiInstance->sitesMultiscreenSiteNameDelete($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenSiteNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| The unique identifier of the target Site. |

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

## `sitesMultiscreenSiteNamePost()`

```php
sitesMultiscreenSiteNamePost($site_name, $site): \OpenAPI\Client\Model\Site
```

Update properties of an existing Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$site = new \OpenAPI\Client\Model\Site(); // \OpenAPI\Client\Model\Site

try {
    $result = $apiInstance->sitesMultiscreenSiteNamePost($site_name, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **site** | [**\OpenAPI\Client\Model\Site**](../Model/Site.md)|  |

### Return type

[**\OpenAPI\Client\Model\Site**](../Model/Site.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSwitchTemplateSiteNamePost()`

```php
sitesMultiscreenSwitchTemplateSiteNamePost($site_name, $inline_object2)
```

Applies a new template to an existing Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$inline_object2 = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2

try {
    $apiInstance->sitesMultiscreenSwitchTemplateSiteNamePost($site_name, $inline_object2);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenSwitchTemplateSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **inline_object2** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  |

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

## `sitesMultiscreenUnpublishSiteNamePost()`

```php
sitesMultiscreenUnpublishSiteNamePost($site_name)
```

Takes down a Site and suspends it's subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->sitesMultiscreenUnpublishSiteNamePost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenUnpublishSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

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

## `sitesMultiscreenUpdateSiteNamePost()`

```php
sitesMultiscreenUpdateSiteNamePost($site_name, $site)
```

Update properties of an existing Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$site = new \OpenAPI\Client\Model\Site(); // \OpenAPI\Client\Model\Site

try {
    $apiInstance->sitesMultiscreenUpdateSiteNamePost($site_name, $site);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitesMultiscreenUpdateSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **site** | [**\OpenAPI\Client\Model\Site**](../Model/Site.md)|  | [optional]

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
