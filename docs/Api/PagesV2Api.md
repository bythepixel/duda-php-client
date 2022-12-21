# OpenAPI\Client\PagesV2Api

All URIs are relative to https://api.duda.co/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePage()**](PagesV2Api.md#deletePage) | **DELETE** /sites/multiscreen/{site_name}/pages/{page_uuid} | Delete a Page from a Site. |
| [**duplicatePage()**](PagesV2Api.md#duplicatePage) | **POST** /sites/multiscreen/{site_name}/pages/{page_uuid}/duplicate | Duplicate an existing Page of a Site. |
| [**getPage()**](PagesV2Api.md#getPage) | **GET** /sites/multiscreen/{site_name}/pages/{page_uuid} | Get the details of an individual Page of a Site. |
| [**listPages()**](PagesV2Api.md#listPages) | **GET** /sites/multiscreen/{site_name}/pages | Get details of all the Pages of a Site. |
| [**updatePage()**](PagesV2Api.md#updatePage) | **PUT** /sites/multiscreen/{site_name}/pages/{page_uuid} | Update an existing Page of a Site. |


## `deletePage()`

```php
deletePage($site_name, $page_uuid)
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
    $apiInstance->deletePage($site_name, $page_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->deletePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **page_uuid** | **string**| The uuid of the target page. | |

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

## `duplicatePage()`

```php
duplicatePage($site_name, $page_uuid, $duplicate_page_request)
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
$duplicate_page_request = new \OpenAPI\Client\Model\DuplicatePageRequest(); // \OpenAPI\Client\Model\DuplicatePageRequest

try {
    $apiInstance->duplicatePage($site_name, $page_uuid, $duplicate_page_request);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->duplicatePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **page_uuid** | **string**| The uuid of the target page. | |
| **duplicate_page_request** | [**\OpenAPI\Client\Model\DuplicatePageRequest**](../Model/DuplicatePageRequest.md)|  | |

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

## `getPage()`

```php
getPage($site_name, $page_uuid): \OpenAPI\Client\Model\Page
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
    $result = $apiInstance->getPage($site_name, $page_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->getPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **page_uuid** | **string**| The uuid of the target page. | |

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

## `listPages()`

```php
listPages($site_name): \OpenAPI\Client\Model\ListPagesResponse
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
    $result = $apiInstance->listPages($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->listPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |

### Return type

[**\OpenAPI\Client\Model\ListPagesResponse**](../Model/ListPagesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePage()`

```php
updatePage($site_name, $page_uuid, $page)
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
$page = new \OpenAPI\Client\Model\Page(); // \OpenAPI\Client\Model\Page

try {
    $apiInstance->updatePage($site_name, $page_uuid, $page);
} catch (Exception $e) {
    echo 'Exception when calling PagesV2Api->updatePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **page_uuid** | **string**| The uuid of the target page. | |
| **page** | [**\OpenAPI\Client\Model\Page**](../Model/Page.md)|  | |

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
