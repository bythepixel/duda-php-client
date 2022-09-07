# OpenAPI\Client\CollectionApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearCache()**](CollectionApi.md#clearCache) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/revalidate | Force Duda to refresh the data from an external URL for a given collection.
[**clearCacheByExternalId()**](CollectionApi.md#clearCacheByExternalId) | **POST** /sites/multiscreen/collections/revalidate/{external_id} | Revalidate all collections in all sites under the same account that use the provided external id
[**createCollection()**](CollectionApi.md#createCollection) | **POST** /sites/multiscreen/{site_name}/collection | Create a new collection within a site
[**createFields()**](CollectionApi.md#createFields) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/field | Add a new field(s) to an existing collection.
[**createRows()**](CollectionApi.md#createRows) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Add new row(s) of data into an existing collection. This accepts multiple row values if you&#39;d like to insert more than one.
[**deleteCollection()**](CollectionApi.md#deleteCollection) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name} | Delete an existing collection
[**deleteFields()**](CollectionApi.md#deleteFields) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name}/field/{field_name} | Delete an existing field of a collection
[**deleteRows()**](CollectionApi.md#deleteRows) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Delete existing rows of data that exist within the collection.
[**getCollection()**](CollectionApi.md#getCollection) | **GET** /sites/multiscreen/{site_name}/collection/{collection_name} | Get the fields and data of an existing collection
[**listCollections()**](CollectionApi.md#listCollections) | **GET** /sites/multiscreen/{site_name}/collection | Get all collections that exist on this website.
[**updateCollection()**](CollectionApi.md#updateCollection) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name} | Update an existing collection
[**updateFields()**](CollectionApi.md#updateFields) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name}/field/{field_name} | Update existing field of a collection
[**updateRows()**](CollectionApi.md#updateRows) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Update existing collection rows.


## `clearCache()`

```php
clearCache($site_name, $collection_name): \OpenAPI\Client\Model\Collection
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
    $result = $apiInstance->clearCache($site_name, $collection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->clearCache: ', $e->getMessage(), PHP_EOL;
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

## `clearCacheByExternalId()`

```php
clearCacheByExternalId($external_id): \OpenAPI\Client\Model\Collection
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
    $result = $apiInstance->clearCacheByExternalId($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->clearCacheByExternalId: ', $e->getMessage(), PHP_EOL;
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

## `createCollection()`

```php
createCollection($site_name, $collection_create_request)
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
$collection_create_request = new \OpenAPI\Client\Model\CollectionCreateRequest(); // \OpenAPI\Client\Model\CollectionCreateRequest

try {
    $apiInstance->createCollection($site_name, $collection_create_request);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_create_request** | [**\OpenAPI\Client\Model\CollectionCreateRequest**](../Model/CollectionCreateRequest.md)|  | [optional]

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

## `createFields()`

```php
createFields($site_name, $collection_name, $create_fields_request)
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
$create_fields_request = new \OpenAPI\Client\Model\CreateFieldsRequest(); // \OpenAPI\Client\Model\CreateFieldsRequest

try {
    $apiInstance->createFields($site_name, $collection_name, $create_fields_request);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->createFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **create_fields_request** | [**\OpenAPI\Client\Model\CreateFieldsRequest**](../Model/CreateFieldsRequest.md)|  | [optional]

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

## `createRows()`

```php
createRows($site_name, $collection_name, $create_row_data): \OpenAPI\Client\Model\RowId[]
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
$create_row_data = array(new \OpenAPI\Client\Model\CreateRowData()); // \OpenAPI\Client\Model\CreateRowData[]

try {
    $result = $apiInstance->createRows($site_name, $collection_name, $create_row_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->createRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **create_row_data** | [**\OpenAPI\Client\Model\CreateRowData[]**](../Model/CreateRowData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RowId[]**](../Model/RowId.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCollection()`

```php
deleteCollection($site_name, $collection_name)
```

Delete an existing collection

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
    $apiInstance->deleteCollection($site_name, $collection_name);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
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

## `deleteFields()`

```php
deleteFields($site_name, $collection_name, $field_name)
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
    $apiInstance->deleteFields($site_name, $collection_name, $field_name);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->deleteFields: ', $e->getMessage(), PHP_EOL;
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

## `deleteRows()`

```php
deleteRows($site_name, $collection_name, $request_body)
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
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->deleteRows($site_name, $collection_name, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->deleteRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **request_body** | [**string[]**](../Model/string.md)|  | [optional]

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

## `getCollection()`

```php
getCollection($site_name, $collection_name): \OpenAPI\Client\Model\Collection
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
    $result = $apiInstance->getCollection($site_name, $collection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->getCollection: ', $e->getMessage(), PHP_EOL;
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

## `listCollections()`

```php
listCollections($site_name): \OpenAPI\Client\Model\Collection[]
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
    $result = $apiInstance->listCollections($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->listCollections: ', $e->getMessage(), PHP_EOL;
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

## `updateCollection()`

```php
updateCollection($site_name, $collection_name, $collection_update_request)
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
$collection_update_request = new \OpenAPI\Client\Model\CollectionUpdateRequest(); // \OpenAPI\Client\Model\CollectionUpdateRequest

try {
    $apiInstance->updateCollection($site_name, $collection_name, $collection_update_request);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **collection_update_request** | [**\OpenAPI\Client\Model\CollectionUpdateRequest**](../Model/CollectionUpdateRequest.md)|  | [optional]

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

## `updateFields()`

```php
updateFields($site_name, $collection_name, $field_name, $update_fields_request)
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
$update_fields_request = new \OpenAPI\Client\Model\UpdateFieldsRequest(); // \OpenAPI\Client\Model\UpdateFieldsRequest

try {
    $apiInstance->updateFields($site_name, $collection_name, $field_name, $update_fields_request);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->updateFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **field_name** | **string**| Name of the field in the collection. (must not start with $) |
 **update_fields_request** | [**\OpenAPI\Client\Model\UpdateFieldsRequest**](../Model/UpdateFieldsRequest.md)|  | [optional]

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

## `updateRows()`

```php
updateRows($site_name, $collection_name, $row_data)
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
$row_data = array(new \OpenAPI\Client\Model\RowData()); // \OpenAPI\Client\Model\RowData[]

try {
    $apiInstance->updateRows($site_name, $collection_name, $row_data);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->updateRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **collection_name** | **string**| Collection name |
 **row_data** | [**\OpenAPI\Client\Model\RowData[]**](../Model/RowData.md)|  | [optional]

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
