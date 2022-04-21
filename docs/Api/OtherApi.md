# OpenAPI\Client\OtherApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sitesMultiscreenBackupsSiteNameBackupNameDelete()**](OtherApi.md#sitesMultiscreenBackupsSiteNameBackupNameDelete) | **DELETE** /sites/multiscreen/backups/{site_name}/{backup_name} | Deletes an existing backup from a Site.
[**sitesMultiscreenBackupsSiteNameCreatePost()**](OtherApi.md#sitesMultiscreenBackupsSiteNameCreatePost) | **POST** /sites/multiscreen/backups/{site_name}/create | Create a new backup of a site. This is used for saving the existing state of a site. Good for saving a restore point before a user starts to edit a site or after work has been completed.
[**sitesMultiscreenBackupsSiteNameGet()**](OtherApi.md#sitesMultiscreenBackupsSiteNameGet) | **GET** /sites/multiscreen/backups/{site_name} | Get an array of existing site backups
[**sitesMultiscreenBackupsSiteNameRestoreBackupNamePost()**](OtherApi.md#sitesMultiscreenBackupsSiteNameRestoreBackupNamePost) | **POST** /sites/multiscreen/backups/{site_name}/restore/{backup_name} | Restore a site from an existing backup. This will fully restore the site back to the state it was in at the time of the backup creation. When restoring a site, a backup is automatically made before the restore begins.
[**sitesMultiscreenSiteNameCertificateDelete()**](OtherApi.md#sitesMultiscreenSiteNameCertificateDelete) | **DELETE** /sites/multiscreen/{site_name}/certificate | Delete a certificate that has been generated for a website. This will ensure that the website is served over only an HTTP (insecure) connection and will delete the generated certificate.
[**sitesMultiscreenSiteNameCertificatePost()**](OtherApi.md#sitesMultiscreenSiteNameCertificatePost) | **POST** /sites/multiscreen/{site_name}/certificate | Generate a SSL certificate for a specific website.
[**sitesMultiscreenSiteNameCertificateRenewPost()**](OtherApi.md#sitesMultiscreenSiteNameCertificateRenewPost) | **POST** /sites/multiscreen/{site_name}/certificate/renew | Starts the renewal process for an SSL certificate


## `sitesMultiscreenBackupsSiteNameBackupNameDelete()`

```php
sitesMultiscreenBackupsSiteNameBackupNameDelete($site_name, $backup_name)
```

Deletes an existing backup from a Site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$backup_name = backup-name; // string | The name of a site backup to restore from

try {
    $apiInstance->sitesMultiscreenBackupsSiteNameBackupNameDelete($site_name, $backup_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenBackupsSiteNameBackupNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **backup_name** | **string**| The name of a site backup to restore from |

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

## `sitesMultiscreenBackupsSiteNameCreatePost()`

```php
sitesMultiscreenBackupsSiteNameCreatePost($site_name, $inline_object16): \OpenAPI\Client\Model\InlineObject16
```

Create a new backup of a site. This is used for saving the existing state of a site. Good for saving a restore point before a user starts to edit a site or after work has been completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$inline_object16 = new \OpenAPI\Client\Model\InlineObject16(); // \OpenAPI\Client\Model\InlineObject16

try {
    $result = $apiInstance->sitesMultiscreenBackupsSiteNameCreatePost($site_name, $inline_object16);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenBackupsSiteNameCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **inline_object16** | [**\OpenAPI\Client\Model\InlineObject16**](../Model/InlineObject16.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject16**](../Model/InlineObject16.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenBackupsSiteNameGet()`

```php
sitesMultiscreenBackupsSiteNameGet($site_name): \OpenAPI\Client\Model\InlineResponse2009
```

Get an array of existing site backups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->sitesMultiscreenBackupsSiteNameGet($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenBackupsSiteNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitesMultiscreenBackupsSiteNameRestoreBackupNamePost()`

```php
sitesMultiscreenBackupsSiteNameRestoreBackupNamePost($site_name, $backup_name)
```

Restore a site from an existing backup. This will fully restore the site back to the state it was in at the time of the backup creation. When restoring a site, a backup is automatically made before the restore begins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$backup_name = backup-name; // string | The name of a site backup to restore from

try {
    $apiInstance->sitesMultiscreenBackupsSiteNameRestoreBackupNamePost($site_name, $backup_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenBackupsSiteNameRestoreBackupNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **backup_name** | **string**| The name of a site backup to restore from |

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

## `sitesMultiscreenSiteNameCertificateDelete()`

```php
sitesMultiscreenSiteNameCertificateDelete($site_name)
```

Delete a certificate that has been generated for a website. This will ensure that the website is served over only an HTTP (insecure) connection and will delete the generated certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->sitesMultiscreenSiteNameCertificateDelete($site_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenSiteNameCertificateDelete: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteNameCertificatePost()`

```php
sitesMultiscreenSiteNameCertificatePost($site_name)
```

Generate a SSL certificate for a specific website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->sitesMultiscreenSiteNameCertificatePost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenSiteNameCertificatePost: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteNameCertificateRenewPost()`

```php
sitesMultiscreenSiteNameCertificateRenewPost($site_name)
```

Starts the renewal process for an SSL certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name

try {
    $apiInstance->sitesMultiscreenSiteNameCertificateRenewPost($site_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->sitesMultiscreenSiteNameCertificateRenewPost: ', $e->getMessage(), PHP_EOL;
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
