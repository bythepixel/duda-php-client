# OpenAPI\Client\ContentApi

All URIs are relative to https://api.duda.co/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInjectedContent()**](ContentApi.md#createInjectedContent) | **POST** /sites/multiscreen/inject-content/{site_name} | Content injection provides the ability to update a website directly via the API. |
| [**createInjectedContentSinglePage()**](ContentApi.md#createInjectedContentSinglePage) | **POST** /sites/multiscreen/inject-content/{site_name}/pages/{page_name} | Content injection provides the ability to update a page on a website directly via the API. |
| [**createLocation()**](ContentApi.md#createLocation) | **POST** /sites/multiscreen/{site_name}/content/location | Create a new location for a website. This location will be apart of the additional_locations object that is returned from a site&#39;s content library. |
| [**deleteLocation()**](ContentApi.md#deleteLocation) | **DELETE** /sites/multiscreen/{site_name}/content/location/{location_id} | Delete an existing location |
| [**getContentLibrary()**](ContentApi.md#getContentLibrary) | **GET** /sites/multiscreen/{site_name}/content | Get the data that exists within the content library of a website. |
| [**getInjectedContent()**](ContentApi.md#getInjectedContent) | **GET** /sites/multiscreen/inject-content/{site_name} | Search the website for all references of the data-inject value, either in the HTML or CSS of the website. |
| [**getLocation()**](ContentApi.md#getLocation) | **GET** /sites/multiscreen/{site_name}/content/location/{location_id} | Get data for a specific location. |
| [**publishContentLibrary()**](ContentApi.md#publishContentLibrary) | **POST** /sites/multiscreen/{site_name}/content/publish | Push updates already within the content library directly to the live version of the website. This pushes the data that exists within the content library to the live/published version of the website. |
| [**updateContentLibrary()**](ContentApi.md#updateContentLibrary) | **POST** /sites/multiscreen/{site_name}/content | Update the data that exists within the content library. Once updated the data is ready for immediate use within the editor. |
| [**updateLocation()**](ContentApi.md#updateLocation) | **POST** /sites/multiscreen/{site_name}/content/location/{location_id} | Update an existing location within the content library. You can only update additional_locations that exist as part of the content library. |
| [**uploadResource()**](ContentApi.md#uploadResource) | **POST** /sites/multiscreen/resources/{site_name}/upload | Upload a resource to the website from an external source. Resource is uploaded to Duda&#39;s CDN and made available to anyone building the website. |


## `createInjectedContent()`

```php
createInjectedContent($site_name, $injected_content_creation)
```

Content injection provides the ability to update a website directly via the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$injected_content_creation = array(new \OpenAPI\Client\Model\InjectedContentCreation()); // \OpenAPI\Client\Model\InjectedContentCreation[]

try {
    $apiInstance->createInjectedContent($site_name, $injected_content_creation);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createInjectedContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **injected_content_creation** | [**\OpenAPI\Client\Model\InjectedContentCreation[]**](../Model/InjectedContentCreation.md)|  | [optional] |

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

## `createInjectedContentSinglePage()`

```php
createInjectedContentSinglePage($site_name, $page_name, $injected_content_creation)
```

Content injection provides the ability to update a page on a website directly via the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$page_name = My Site; // string | Name of a page
$injected_content_creation = array(new \OpenAPI\Client\Model\InjectedContentCreation()); // \OpenAPI\Client\Model\InjectedContentCreation[]

try {
    $apiInstance->createInjectedContentSinglePage($site_name, $page_name, $injected_content_creation);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createInjectedContentSinglePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **page_name** | **string**| Name of a page | |
| **injected_content_creation** | [**\OpenAPI\Client\Model\InjectedContentCreation[]**](../Model/InjectedContentCreation.md)|  | [optional] |

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

## `createLocation()`

```php
createLocation($site_name, $location): \OpenAPI\Client\Model\Location
```

Create a new location for a website. This location will be apart of the additional_locations object that is returned from a site's content library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$location = new \OpenAPI\Client\Model\Location(); // \OpenAPI\Client\Model\Location

try {
    $result = $apiInstance->createLocation($site_name, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **location** | [**\OpenAPI\Client\Model\Location**](../Model/Location.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Location**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLocation()`

```php
deleteLocation($site_name, $location_id)
```

Delete an existing location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$location_id = location-id; // string | The uuid of the location

try {
    $apiInstance->deleteLocation($site_name, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->deleteLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **location_id** | **string**| The uuid of the location | |

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

## `getContentLibrary()`

```php
getContentLibrary($site_name): \OpenAPI\Client\Model\Content
```

Get the data that exists within the content library of a website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->getContentLibrary($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getContentLibrary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |

### Return type

[**\OpenAPI\Client\Model\Content**](../Model/Content.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInjectedContent()`

```php
getInjectedContent($site_name, $key, $type, $ref): \OpenAPI\Client\Model\GetInjectedContentRequest[]
```

Search the website for all references of the data-inject value, either in the HTML or CSS of the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$key = 'key_example'; // string | Search for a specific element that contains the data-inject attribute or CSS block that has the data-inject CSS property
$type = 'type_example'; // string | Search for only the specific inject type. Can be DOMATTR, CSS or INNERHTML
$ref = 'ref_example'; // string | Filter for a specific value type (only relevant for DOMATTR & CSS)

try {
    $result = $apiInstance->getInjectedContent($site_name, $key, $type, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getInjectedContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **key** | **string**| Search for a specific element that contains the data-inject attribute or CSS block that has the data-inject CSS property | [optional] |
| **type** | **string**| Search for only the specific inject type. Can be DOMATTR, CSS or INNERHTML | [optional] |
| **ref** | **string**| Filter for a specific value type (only relevant for DOMATTR &amp; CSS) | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetInjectedContentRequest[]**](../Model/GetInjectedContentRequest.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocation()`

```php
getLocation($site_name, $location_id): \OpenAPI\Client\Model\Location
```

Get data for a specific location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$location_id = location_id; // string | The uuid of the location

try {
    $result = $apiInstance->getLocation($site_name, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **location_id** | **string**| The uuid of the location | |

### Return type

[**\OpenAPI\Client\Model\Location**](../Model/Location.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishContentLibrary()`

```php
publishContentLibrary($site_name)
```

Push updates already within the content library directly to the live version of the website. This pushes the data that exists within the content library to the live/published version of the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->publishContentLibrary($site_name);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->publishContentLibrary: ', $e->getMessage(), PHP_EOL;
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

## `updateContentLibrary()`

```php
updateContentLibrary($site_name, $content)
```

Update the data that exists within the content library. Once updated the data is ready for immediate use within the editor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$content = new \OpenAPI\Client\Model\Content(); // \OpenAPI\Client\Model\Content

try {
    $apiInstance->updateContentLibrary($site_name, $content);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateContentLibrary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **content** | [**\OpenAPI\Client\Model\Content**](../Model/Content.md)|  | [optional] |

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

## `updateLocation()`

```php
updateLocation($site_name, $location_id, $location)
```

Update an existing location within the content library. You can only update additional_locations that exist as part of the content library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$location_id = f8b9b8f8-b8b8-b8b8-b8b8-b8b8b8b8b8b8; // string | The uuid of the location
$location = new \OpenAPI\Client\Model\Location(); // \OpenAPI\Client\Model\Location

try {
    $apiInstance->updateLocation($site_name, $location_id, $location);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **location_id** | **string**| The uuid of the location | |
| **location** | [**\OpenAPI\Client\Model\Location**](../Model/Location.md)|  | [optional] |

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

## `uploadResource()`

```php
uploadResource($site_name, $resource): \OpenAPI\Client\Model\UploadResourceResponse
```

Upload a resource to the website from an external source. Resource is uploaded to Duda's CDN and made available to anyone building the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$resource = array(new \OpenAPI\Client\Model\Resource()); // \OpenAPI\Client\Model\Resource[]

try {
    $result = $apiInstance->uploadResource($site_name, $resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->uploadResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **site_name** | **string**| Site name | |
| **resource** | [**\OpenAPI\Client\Model\Resource[]**](../Model/Resource.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UploadResourceResponse**](../Model/UploadResourceResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
