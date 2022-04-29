# OpenAPI\Client\OtherApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBackup()**](OtherApi.md#createBackup) | **POST** /sites/multiscreen/backups/{site_name}/create | Create a new backup of a site. This is used for saving the existing state of a site. Good for saving a restore point before a user starts to edit a site or after work has been completed.
[**createSSLCertificate()**](OtherApi.md#createSSLCertificate) | **POST** /sites/multiscreen/{site_name}/certificate | Generate a SSL certificate for a specific website.
[**deleteBackup()**](OtherApi.md#deleteBackup) | **DELETE** /sites/multiscreen/backups/{site_name}/{backup_name} | Deletes an existing backup from a Site.
[**deleteSSLCertificate()**](OtherApi.md#deleteSSLCertificate) | **DELETE** /sites/multiscreen/{site_name}/certificate | Delete a certificate that has been generated for a website. This will ensure that the website is served over only an HTTP (insecure) connection and will delete the generated certificate.
[**listBackups()**](OtherApi.md#listBackups) | **GET** /sites/multiscreen/backups/{site_name} | Get an array of existing site backups
[**renewSSLCertificate()**](OtherApi.md#renewSSLCertificate) | **POST** /sites/multiscreen/{site_name}/certificate/renew | Starts the renewal process for an SSL certificate
[**restoreBackup()**](OtherApi.md#restoreBackup) | **POST** /sites/multiscreen/backups/{site_name}/restore/{backup_name} | Restore a site from an existing backup. This will fully restore the site back to the state it was in at the time of the backup creation. When restoring a site, a backup is automatically made before the restore begins.


## `createBackup()`

```php
createBackup($site_name, $create_backup_request): \OpenAPI\Client\Model\CreateBackupResponse
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
$create_backup_request = new \OpenAPI\Client\Model\CreateBackupRequest(); // \OpenAPI\Client\Model\CreateBackupRequest

try {
    $result = $apiInstance->createBackup($site_name, $create_backup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->createBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **create_backup_request** | [**\OpenAPI\Client\Model\CreateBackupRequest**](../Model/CreateBackupRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateBackupResponse**](../Model/CreateBackupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSSLCertificate()`

```php
createSSLCertificate($site_name)
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
    $apiInstance->createSSLCertificate($site_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->createSSLCertificate: ', $e->getMessage(), PHP_EOL;
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

## `deleteBackup()`

```php
deleteBackup($site_name, $backup_name)
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
    $apiInstance->deleteBackup($site_name, $backup_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->deleteBackup: ', $e->getMessage(), PHP_EOL;
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

## `deleteSSLCertificate()`

```php
deleteSSLCertificate($site_name)
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
    $apiInstance->deleteSSLCertificate($site_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->deleteSSLCertificate: ', $e->getMessage(), PHP_EOL;
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

## `listBackups()`

```php
listBackups($site_name): \OpenAPI\Client\Model\ListBackupsResponse
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
    $result = $apiInstance->listBackups($site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->listBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\ListBackupsResponse**](../Model/ListBackupsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewSSLCertificate()`

```php
renewSSLCertificate($site_name)
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
    $apiInstance->renewSSLCertificate($site_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->renewSSLCertificate: ', $e->getMessage(), PHP_EOL;
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

## `restoreBackup()`

```php
restoreBackup($site_name, $backup_name)
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
    $apiInstance->restoreBackup($site_name, $backup_name);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->restoreBackup: ', $e->getMessage(), PHP_EOL;
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
