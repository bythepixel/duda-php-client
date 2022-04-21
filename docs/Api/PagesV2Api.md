# OpenAPI\Client\PagesV2Api

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesMultiscreenSiteNamePagesGet()**](PagesV2Api.md#sitesMultiscreenSiteNamePagesGet) | **GET** /sites/multiscreen/{site_name}/pages | Get details of all the Pages of a Site.
[**sitesMultiscreenSiteNamePagesPageUuidDelete()**](PagesV2Api.md#sitesMultiscreenSiteNamePagesPageUuidDelete) | **DELETE** /sites/multiscreen/{site_name}/pages/{page_uuid} | Delete a Page from a Site.
[**sitesMultiscreenSiteNamePagesPageUuidDuplicatePost()**](PagesV2Api.md#sitesMultiscreenSiteNamePagesPageUuidDuplicatePost) | **POST** /sites/multiscreen/{site_name}/pages/{page_uuid}/duplicate | Duplicate an existing Page of a Site.
[**sitesMultiscreenSiteNamePagesPageUuidGet()**](PagesV2Api.md#sitesMultiscreenSiteNamePagesPageUuidGet) | **GET** /sites/multiscreen/{site_name}/pages/{page_uuid} | Get the details of an individual Page of a Site.
[**sitesMultiscreenSiteNamePagesPageUuidPut()**](PagesV2Api.md#sitesMultiscreenSiteNamePagesPageUuidPut) | **PUT** /sites/multiscreen/{site_name}/pages/{page_uuid} | Update an existing Page of a Site.


## `sitesMultiscreenSiteNamePagesGet()`

```php
sitesMultiscreenSiteNamePagesGet($site_name): \OpenAPI\Client\Model\InlineResponse2001
```

Get details of all the Pages of a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PagesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->sitesMultiscreenSiteNamePagesGet($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->sitesMultiscreenSiteNamePagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNamePagesPageUuidDelete()`

```php
sitesMultiscreenSiteNamePagesPageUuidDelete($site_name, $page_uuid)
```

Delete a Page from a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PagesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$page_uuid = 12345; // string | The uuid of the target page.

try {
    $apiInstance->sitesMultiscreenSiteNamePagesPageUuidDelete($site_name, $page_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->sitesMultiscreenSiteNamePagesPageUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **page_uuid** | **string**| The uuid of the target page. |

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

## `sitesMultiscreenSiteNamePagesPageUuidDuplicatePost()`

```php
sitesMultiscreenSiteNamePagesPageUuidDuplicatePost($site_name, $page_uuid, $inline_object3)
```

Duplicate an existing Page of a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PagesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$page_uuid = 12345; // string | The uuid of the target page.
$inline_object3 = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $apiInstance->sitesMultiscreenSiteNamePagesPageUuidDuplicatePost($site_name, $page_uuid, $inline_object3);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->sitesMultiscreenSiteNamePagesPageUuidDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **page_uuid** | **string**| The uuid of the target page. |
 **inline_object3** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  |

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

## `sitesMultiscreenSiteNamePagesPageUuidGet()`

```php
sitesMultiscreenSiteNamePagesPageUuidGet($site_name, $page_uuid): \OpenAPI\Client\Model\Page
```

Get the details of an individual Page of a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PagesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$page_uuid = 12345; // string | The uuid of the target page.

try {
    $result = $apiInstance->sitesMultiscreenSiteNamePagesPageUuidGet($site_name, $page_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->sitesMultiscreenSiteNamePagesPageUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **page_uuid** | **string**| The uuid of the target page. |

### Return type

[**\OpenAPI\Client\Model\Page**](../Model/Page.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNamePagesPageUuidPut()`

```php
sitesMultiscreenSiteNamePagesPageUuidPut($site_name, $page_uuid, $site)
```

Update an existing Page of a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PagesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$page_uuid = 12345; // string | The uuid of the target page.
$site = new \OpenAPI\Client\Model\Site(); // \OpenAPI\Client\Model\Site

try {
    $apiInstance->sitesMultiscreenSiteNamePagesPageUuidPut($site_name, $page_uuid, $site);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->sitesMultiscreenSiteNamePagesPageUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **page_uuid** | **string**| The uuid of the target page. |
 **site** | [**\OpenAPI\Client\Model\Site**](../Model/Site.md)|  |

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
