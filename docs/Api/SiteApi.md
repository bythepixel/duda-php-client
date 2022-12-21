# OpenAPI\Client\SiteApi

All URIs are relative to https://api.duda.co/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSite()**](SiteApi.md#createSite) | **POST** /sites/multiscreen/create | Create a new Site from a Template. |
| [**deleteSite()**](SiteApi.md#deleteSite) | **DELETE** /sites/multiscreen/{site_name} | Permanently deletes a Site and cancels all subscriptions. |
| [**duplicateSite()**](SiteApi.md#duplicateSite) | **POST** /sites/multiscreen/duplicate/{site_name} | Creates a new Site based on an existing one. |
| [**getSite()**](SiteApi.md#getSite) | **GET** /sites/multiscreen/{site_name} | Details about a site |
| [**getSiteByExternalId()**](SiteApi.md#getSiteByExternalId) | **GET** /sites/multiscreen/byexternalid/{external_uid} | Get the names of Sites that have a specific external id. |
| [**publishSite()**](SiteApi.md#publishSite) | **POST** /sites/multiscreen/publish/{site_name} | Takes a Site live and purchases a subscription. |
| [**resetSite()**](SiteApi.md#resetSite) | **POST** /sites/multiscreen/reset/{site_name} | Resets a Site to initial state or based on a new template and data. |
| [**switchTemplate()**](SiteApi.md#switchTemplate) | **POST** /sites/multiscreen/switchTemplate/{site_name} | Applies a new template to an existing Site. |
| [**unpublishSite()**](SiteApi.md#unpublishSite) | **POST** /sites/multiscreen/unpublish/{site_name} | Takes down a Site and suspends it&#39;s subscription. |
| [**updateSite()**](SiteApi.md#updateSite) | **POST** /sites/multiscreen/update/{site_name} | Update properties of an existing Site. |


## `createSite()`

```php
createSite($create_site_request): \OpenAPI\Client\Model\SiteNameResponse
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
$create_site_request = new \OpenAPI\Client\Model\CreateSiteRequest(); // \OpenAPI\Client\Model\CreateSiteRequest

try {
    $result = $apiInstance->createSite($create_site_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->createSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_site_request** | [**\OpenAPI\Client\Model\CreateSiteRequest**](../Model/CreateSiteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SiteNameResponse**](../Model/SiteNameResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSite()`

```php
deleteSite($site_name)
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
    $apiInstance->deleteSite($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->deleteSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| The unique identifier of the target Site. | |

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

## `duplicateSite()`

```php
duplicateSite($site_name, $duplicate_site_request): \OpenAPI\Client\Model\SiteNameResponse
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
$duplicate_site_request = new \OpenAPI\Client\Model\DuplicateSiteRequest(); // \OpenAPI\Client\Model\DuplicateSiteRequest

try {
    $result = $apiInstance->duplicateSite($site_name, $duplicate_site_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->duplicateSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **duplicate_site_request** | [**\OpenAPI\Client\Model\DuplicateSiteRequest**](../Model/DuplicateSiteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SiteNameResponse**](../Model/SiteNameResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSite()`

```php
getSite($site_name): \OpenAPI\Client\Model\Site
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
    $result = $apiInstance->getSite($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |

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

## `getSiteByExternalId()`

```php
getSiteByExternalId($external_uid): string[]
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
    $result = $apiInstance->getSiteByExternalId($external_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteByExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_uid** | **string**| The external ID associated with a single or group of Sites. | |

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

## `publishSite()`

```php
publishSite($site_name)
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
    $apiInstance->publishSite($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->publishSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |

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

## `resetSite()`

```php
resetSite($site_name)
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
    $apiInstance->resetSite($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->resetSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |

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

## `switchTemplate()`

```php
switchTemplate($site_name, $switch_template_request)
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
$switch_template_request = new \OpenAPI\Client\Model\SwitchTemplateRequest(); // \OpenAPI\Client\Model\SwitchTemplateRequest

try {
    $apiInstance->switchTemplate($site_name, $switch_template_request);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->switchTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **switch_template_request** | [**\OpenAPI\Client\Model\SwitchTemplateRequest**](../Model/SwitchTemplateRequest.md)|  | |

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

## `unpublishSite()`

```php
unpublishSite($site_name)
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
    $apiInstance->unpublishSite($site_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->unpublishSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |

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

## `updateSite()`

```php
updateSite($site_name, $site_update)
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
$site_update = new \OpenAPI\Client\Model\SiteUpdate(); // \OpenAPI\Client\Model\SiteUpdate

try {
    $apiInstance->updateSite($site_name, $site_update);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->updateSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **site_update** | [**\OpenAPI\Client\Model\SiteUpdate**](../Model/SiteUpdate.md)|  | [optional] |

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
