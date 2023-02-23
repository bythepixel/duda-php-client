# OpenAPI\Client\TemplateApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFromSite()**](TemplateApi.md#createFromSite) | **POST** /sites/multiscreen/templates/fromsite | Create a new Template based on an existing site
[**createFromTemplate()**](TemplateApi.md#createFromTemplate) | **POST** /sites/multiscreen/templates/fromtemplate | Create a new Template based on an existing one
[**deleteTemplate()**](TemplateApi.md#deleteTemplate) | **DELETE** /sites/multiscreen/templates/{template_id} | Delete a custom Template.
[**getTemplate()**](TemplateApi.md#getTemplate) | **GET** /sites/multiscreen/templates/{template_id} | Get the details of a Template.
[**listTemplates()**](TemplateApi.md#listTemplates) | **GET** /sites/multiscreen/templates | Get all available Templates.
[**updateTemplate()**](TemplateApi.md#updateTemplate) | **POST** /sites/multiscreen/templates/{template_id} | Update the name of a custom Template.


## `createFromSite()`

```php
createFromSite($create_template_from_site_request): \OpenAPI\Client\Model\Template
```

Create a new Template based on an existing site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_from_site_request = new \OpenAPI\Client\Model\CreateTemplateFromSiteRequest(); // \OpenAPI\Client\Model\CreateTemplateFromSiteRequest

try {
    $result = $apiInstance->createFromSite($create_template_from_site_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createFromSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_template_from_site_request** | [**\OpenAPI\Client\Model\CreateTemplateFromSiteRequest**](../Model/CreateTemplateFromSiteRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFromTemplate()`

```php
createFromTemplate($create_template_from_template_request): \OpenAPI\Client\Model\Template
```

Create a new Template based on an existing one

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_from_template_request = new \OpenAPI\Client\Model\CreateTemplateFromTemplateRequest(); // \OpenAPI\Client\Model\CreateTemplateFromTemplateRequest

try {
    $result = $apiInstance->createFromTemplate($create_template_from_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_template_from_template_request** | [**\OpenAPI\Client\Model\CreateTemplateFromTemplateRequest**](../Model/CreateTemplateFromTemplateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($template_id)
```

Delete a custom Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1000134; // string | ID of the template to delete

try {
    $apiInstance->deleteTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| ID of the template to delete |

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

## `getTemplate()`

```php
getTemplate($template_id): \OpenAPI\Client\Model\Template
```

Get the details of a Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1000134; // string | ID associated with a template

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| ID associated with a template |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates(): \OpenAPI\Client\Model\Template[]
```

Get all available Templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($template_id, $update_template_request)
```

Update the name of a custom Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1000134; // string | ID associated with a template
$update_template_request = new \OpenAPI\Client\Model\UpdateTemplateRequest(); // \OpenAPI\Client\Model\UpdateTemplateRequest

try {
    $apiInstance->updateTemplate($template_id, $update_template_request);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| ID associated with a template |
 **update_template_request** | [**\OpenAPI\Client\Model\UpdateTemplateRequest**](../Model/UpdateTemplateRequest.md)|  | [optional]

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
