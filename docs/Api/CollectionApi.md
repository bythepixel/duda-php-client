# OpenAPI\Client\CollectionApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesMultiscreenCollectionsRevalidateExternalIdPost()**](CollectionApi.md#sitesMultiscreenCollectionsRevalidateExternalIdPost) | **POST** /sites/multiscreen/collections/revalidate/{external_id} | Revalidate all collections in all sites under the same account that use the provided external id
[**sitesMultiscreenSiteNameCollectionCollectionNameDelete()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameDelete) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name} | Get the fields and data of an existing collection
[**sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNameDelete()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNameDelete) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name}/field/{field_name} | Delete an existing field of a collection
[**sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNamePut()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNamePut) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name}/field/{field_name} | Update existing field of a collection
[**sitesMultiscreenSiteNameCollectionCollectionNameFieldPost()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameFieldPost) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/field | Add a new field(s) to an existing collection.
[**sitesMultiscreenSiteNameCollectionCollectionNameGet()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameGet) | **GET** /sites/multiscreen/{site_name}/collection/{collection_name} | Get the fields and data of an existing collection
[**sitesMultiscreenSiteNameCollectionCollectionNamePut()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNamePut) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name} | Update an existing collection
[**sitesMultiscreenSiteNameCollectionCollectionNameRevalidatePost()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameRevalidatePost) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/revalidate | Force Duda to refresh the data from an external URL for a given collection.
[**sitesMultiscreenSiteNameCollectionCollectionNameRowDelete()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameRowDelete) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Delete existing rows of data that exist within the collection.
[**sitesMultiscreenSiteNameCollectionCollectionNameRowPost()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameRowPost) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Add new row(s) of data into an existing collection. This accepts multiple row values if you&#39;d like to insert more than one.
[**sitesMultiscreenSiteNameCollectionCollectionNameRowPut()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionCollectionNameRowPut) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Update existing collection rows.
[**sitesMultiscreenSiteNameCollectionGet()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionGet) | **GET** /sites/multiscreen/{site_name}/collection | Get all collections that exist on this website.
[**sitesMultiscreenSiteNameCollectionPost()**](CollectionApi.md#sitesMultiscreenSiteNameCollectionPost) | **POST** /sites/multiscreen/{site_name}/collection | Create a new collection within a site


## `sitesMultiscreenCollectionsRevalidateExternalIdPost()`

```php
sitesMultiscreenCollectionsRevalidateExternalIdPost($external_id): \OpenAPI\Client\Model\Collection
```

Revalidate all collections in all sites under the same account that use the provided external id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = external-id; // string | The external ID for the collections

try {
    $result = $apiInstance->sitesMultiscreenCollectionsRevalidateExternalIdPost($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenCollectionsRevalidateExternalIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The external ID for the collections |

### Return type

[**\OpenAPI\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameCollectionCollectionNameDelete()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameDelete($site_name, $collection_name)
```

Get the fields and data of an existing collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameDelete($site_name, $collection_name);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |

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

## `sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNameDelete()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNameDelete($site_name, $collection_name, $field_name)
```

Delete an existing field of a collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name
$field_name = field-name; // string | Name of the field in the collection. (must not start with $)

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNameDelete($site_name, $collection_name, $field_name);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **field_name** | **string**| Name of the field in the collection. (must not start with $) |

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

## `sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNamePut()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNamePut($site_name, $collection_name, $field_name, $inline_object14)
```

Update existing field of a collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name
$field_name = field-name; // string | Name of the field in the collection. (must not start with $)
$inline_object14 = new \OpenAPI\Client\Model\InlineObject14(); // \OpenAPI\Client\Model\InlineObject14

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNamePut($site_name, $collection_name, $field_name, $inline_object14);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameFieldFieldNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **field_name** | **string**| Name of the field in the collection. (must not start with $) |
 **inline_object14** | [**\OpenAPI\Client\Model\InlineObject14**](../Model/InlineObject14.md)|  | [optional]

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

## `sitesMultiscreenSiteNameCollectionCollectionNameFieldPost()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameFieldPost($site_name, $collection_name, $inline_object13)
```

Add a new field(s) to an existing collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name
$inline_object13 = new \OpenAPI\Client\Model\InlineObject13(); // \OpenAPI\Client\Model\InlineObject13

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameFieldPost($site_name, $collection_name, $inline_object13);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameFieldPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **inline_object13** | [**\OpenAPI\Client\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

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

## `sitesMultiscreenSiteNameCollectionCollectionNameGet()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameGet($site_name, $collection_name): \OpenAPI\Client\Model\Collection
```

Get the fields and data of an existing collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name

try {
    $result = $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameGet($site_name, $collection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |

### Return type

[**\OpenAPI\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameCollectionCollectionNamePut()`

```php
sitesMultiscreenSiteNameCollectionCollectionNamePut($site_name, $collection_name, $inline_object10)
```

Update an existing collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name
$inline_object10 = new \OpenAPI\Client\Model\InlineObject10(); // \OpenAPI\Client\Model\InlineObject10

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNamePut($site_name, $collection_name, $inline_object10);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **inline_object10** | [**\OpenAPI\Client\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

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

## `sitesMultiscreenSiteNameCollectionCollectionNameRevalidatePost()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameRevalidatePost($site_name, $collection_name): \OpenAPI\Client\Model\Collection
```

Force Duda to refresh the data from an external URL for a given collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name

try {
    $result = $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameRevalidatePost($site_name, $collection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameRevalidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |

### Return type

[**\OpenAPI\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameCollectionCollectionNameRowDelete()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameRowDelete($site_name, $collection_name)
```

Delete existing rows of data that exist within the collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameRowDelete($site_name, $collection_name);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameRowDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |

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

## `sitesMultiscreenSiteNameCollectionCollectionNameRowPost()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameRowPost($site_name, $collection_name, $inline_object12): \OpenAPI\Client\Model\InlineResponse2007[]
```

Add new row(s) of data into an existing collection. This accepts multiple row values if you'd like to insert more than one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name
$inline_object12 = new \OpenAPI\Client\Model\InlineObject12(); // \OpenAPI\Client\Model\InlineObject12

try {
    $result = $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameRowPost($site_name, $collection_name, $inline_object12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameRowPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **inline_object12** | [**\OpenAPI\Client\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameCollectionCollectionNameRowPut()`

```php
sitesMultiscreenSiteNameCollectionCollectionNameRowPut($site_name, $collection_name, $inline_object11)
```

Update existing collection rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$collection_name = collection-name; // string | Collection name
$inline_object11 = new \OpenAPI\Client\Model\InlineObject11(); // \OpenAPI\Client\Model\InlineObject11

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionCollectionNameRowPut($site_name, $collection_name, $inline_object11);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionCollectionNameRowPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **inline_object11** | [**\OpenAPI\Client\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

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

## `sitesMultiscreenSiteNameCollectionGet()`

```php
sitesMultiscreenSiteNameCollectionGet($site_name): \OpenAPI\Client\Model\Collection[]
```

Get all collections that exist on this website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->sitesMultiscreenSiteNameCollectionGet($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\Collection[]**](../Model/Collection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameCollectionPost()`

```php
sitesMultiscreenSiteNameCollectionPost($site_name, $inline_object9)
```

Create a new collection within a site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$inline_object9 = new \OpenAPI\Client\Model\InlineObject9(); // \OpenAPI\Client\Model\InlineObject9

try {
    $apiInstance->sitesMultiscreenSiteNameCollectionPost($site_name, $inline_object9);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->sitesMultiscreenSiteNameCollectionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **inline_object9** | [**\OpenAPI\Client\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

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
