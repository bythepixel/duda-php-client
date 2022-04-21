# OpenAPI\Client\ContentApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesMultiscreenInjectContentSiteNameGet()**](ContentApi.md#sitesMultiscreenInjectContentSiteNameGet) | **GET** /sites/multiscreen/inject-content/{site_name} | Search the website for all references of the data-inject value, either in the HTML or CSS of the website.
[**sitesMultiscreenInjectContentSiteNamePagesPageNamePost()**](ContentApi.md#sitesMultiscreenInjectContentSiteNamePagesPageNamePost) | **POST** /sites/multiscreen/inject-content/{site_name}/pages/{page_name} | Content injection provides the ability to update a page on a website directly via the API.
[**sitesMultiscreenInjectContentSiteNamePost()**](ContentApi.md#sitesMultiscreenInjectContentSiteNamePost) | **POST** /sites/multiscreen/inject-content/{site_name} | Content injection provides the ability to update a website directly via the API.
[**sitesMultiscreenInjectContentSiteNameUploadPost()**](ContentApi.md#sitesMultiscreenInjectContentSiteNameUploadPost) | **POST** /sites/multiscreen/inject-content/{site_name}/upload | Upload a resource to the website from an external source. Resource is uploaded to Duda&#39;s CDN and made available to anyone building the website.
[**sitesMultiscreenSiteNameContentGet()**](ContentApi.md#sitesMultiscreenSiteNameContentGet) | **GET** /sites/multiscreen/{site_name}/content | Get the data that exists within the content library of a website.
[**sitesMultiscreenSiteNameContentLocationLocationIdDelete()**](ContentApi.md#sitesMultiscreenSiteNameContentLocationLocationIdDelete) | **DELETE** /sites/multiscreen/{site_name}/content/location/{location_id} | Delete an existing location
[**sitesMultiscreenSiteNameContentLocationLocationIdGet()**](ContentApi.md#sitesMultiscreenSiteNameContentLocationLocationIdGet) | **GET** /sites/multiscreen/{site_name}/content/location/{location_id} | Get data for a specific location.
[**sitesMultiscreenSiteNameContentLocationLocationIdPost()**](ContentApi.md#sitesMultiscreenSiteNameContentLocationLocationIdPost) | **POST** /sites/multiscreen/{site_name}/content/location/{location_id} | Update an existing location within the content library. You can only update additional_locations that exist as part of the content library.
[**sitesMultiscreenSiteNameContentLocationPost()**](ContentApi.md#sitesMultiscreenSiteNameContentLocationPost) | **POST** /sites/multiscreen/{site_name}/content/location | Create a new location for a website. This location will be apart of the additional_locations object that is returned from a site&#39;s content library.
[**sitesMultiscreenSiteNameContentPost()**](ContentApi.md#sitesMultiscreenSiteNameContentPost) | **POST** /sites/multiscreen/{site_name}/content | Update the data that exists within the content library. Once updated the data is ready for immediate use within the editor.
[**sitesMultiscreenSiteNameContentPublishPost()**](ContentApi.md#sitesMultiscreenSiteNameContentPublishPost) | **POST** /sites/multiscreen/{site_name}/content/publish | Push updates already within the content library directly to the live version of the website. This pushes the data that exists within the content library to the live/published version of the website.


## `sitesMultiscreenInjectContentSiteNameGet()`

```php
sitesMultiscreenInjectContentSiteNameGet($site_name, $key, $type, $ref): \OpenAPI\Client\Model\InlineResponse2005[]
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
    $result = $apiInstance->sitesMultiscreenInjectContentSiteNameGet($site_name, $key, $type, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenInjectContentSiteNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **key** | **string**| Search for a specific element that contains the data-inject attribute or CSS block that has the data-inject CSS property | [optional]
 **type** | **string**| Search for only the specific inject type. Can be DOMATTR, CSS or INNERHTML | [optional]
 **ref** | **string**| Filter for a specific value type (only relevant for DOMATTR &amp; CSS) | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenInjectContentSiteNamePagesPageNamePost()`

```php
sitesMultiscreenInjectContentSiteNamePagesPageNamePost($site_name, $page_name, $inline_object7)
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
$inline_object7 = new \OpenAPI\Client\Model\InlineObject7(); // \OpenAPI\Client\Model\InlineObject7

try {
    $apiInstance->sitesMultiscreenInjectContentSiteNamePagesPageNamePost($site_name, $page_name, $inline_object7);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenInjectContentSiteNamePagesPageNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **page_name** | **string**| Name of a page |
 **inline_object7** | [**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

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

## `sitesMultiscreenInjectContentSiteNamePost()`

```php
sitesMultiscreenInjectContentSiteNamePost($site_name, $inline_object6)
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
$inline_object6 = new \OpenAPI\Client\Model\InlineObject6(); // \OpenAPI\Client\Model\InlineObject6

try {
    $apiInstance->sitesMultiscreenInjectContentSiteNamePost($site_name, $inline_object6);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenInjectContentSiteNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **inline_object6** | [**\OpenAPI\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

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

## `sitesMultiscreenInjectContentSiteNameUploadPost()`

```php
sitesMultiscreenInjectContentSiteNameUploadPost($site_name, $inline_object8): \OpenAPI\Client\Model\InlineResponse2006
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
$inline_object8 = new \OpenAPI\Client\Model\InlineObject8(); // \OpenAPI\Client\Model\InlineObject8

try {
    $result = $apiInstance->sitesMultiscreenInjectContentSiteNameUploadPost($site_name, $inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenInjectContentSiteNameUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **inline_object8** | [**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameContentGet()`

```php
sitesMultiscreenSiteNameContentGet($site_name): \OpenAPI\Client\Model\InlineResponse2003
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
    $result = $apiInstance->sitesMultiscreenSiteNameContentGet($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameContentLocationLocationIdDelete()`

```php
sitesMultiscreenSiteNameContentLocationLocationIdDelete($site_name, $location_id)
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
    $apiInstance->sitesMultiscreenSiteNameContentLocationLocationIdDelete($site_name, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentLocationLocationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **location_id** | **string**| The uuid of the location |

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

## `sitesMultiscreenSiteNameContentLocationLocationIdGet()`

```php
sitesMultiscreenSiteNameContentLocationLocationIdGet($site_name, $location_id): \OpenAPI\Client\Model\InlineResponse2004
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
    $result = $apiInstance->sitesMultiscreenSiteNameContentLocationLocationIdGet($site_name, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentLocationLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **location_id** | **string**| The uuid of the location |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenSiteNameContentLocationLocationIdPost()`

```php
sitesMultiscreenSiteNameContentLocationLocationIdPost($site_name, $location_id, $location)
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
    $apiInstance->sitesMultiscreenSiteNameContentLocationLocationIdPost($site_name, $location_id, $location);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentLocationLocationIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **location_id** | **string**| The uuid of the location |
 **location** | [**\OpenAPI\Client\Model\Location**](../Model/Location.md)|  | [optional]

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

## `sitesMultiscreenSiteNameContentLocationPost()`

```php
sitesMultiscreenSiteNameContentLocationPost($site_name, $location): \OpenAPI\Client\Model\Location
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
    $result = $apiInstance->sitesMultiscreenSiteNameContentLocationPost($site_name, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentLocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **location** | [**\OpenAPI\Client\Model\Location**](../Model/Location.md)|  | [optional]

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

## `sitesMultiscreenSiteNameContentPost()`

```php
sitesMultiscreenSiteNameContentPost($site_name)
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

try {
    $apiInstance->sitesMultiscreenSiteNameContentPost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentPost: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteNameContentPublishPost()`

```php
sitesMultiscreenSiteNameContentPublishPost($site_name)
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
    $apiInstance->sitesMultiscreenSiteNameContentPublishPost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->sitesMultiscreenSiteNameContentPublishPost: ', $e->getMessage(), PHP_EOL;
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
