# OpenAPI\Client\ReportingApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activities()**](ReportingApi.md#activities) | **GET** /sites/multiscreen/{site_name}/activities | Get activity history for a specific website over a certain amount of time.
[**analytics()**](ReportingApi.md#analytics) | **GET** /multiscreen/analytics/site/{site_name} | Get analytics history for a specific website over a certain amount of time.
[**emailSettings()**](ReportingApi.md#emailSettings) | **GET** /accounts/{account_name}/sites/{site_name}/stats-email | Get the status of stats emails for a customer on a given site.
[**formSubmissions()**](ReportingApi.md#formSubmissions) | **GET** /sites/multiscreen/get-forms/{site_name} | Get all the contact form submissions from a given site.
[**siteCreated()**](ReportingApi.md#siteCreated) | **GET** /sites/multiscreen/created | Get a list of Sites created within a span of time.
[**siteUnpublished()**](ReportingApi.md#siteUnpublished) | **GET** /sites/multiscreen/unpublished | Get a list of recently unpublished websites in your account.
[**sitesPublished()**](ReportingApi.md#sitesPublished) | **GET** /sites/multiscreen/published | Get a list of recently published websites in your account.
[**subscribe()**](ReportingApi.md#subscribe) | **POST** /accounts/{account_name}/sites/{site_name}/stats-email | Subscribe a customer (or staff member) to statistics emails for a specific site.
[**unsubscribe()**](ReportingApi.md#unsubscribe) | **DELETE** /accounts/{account_name}/sites/{site_name}/stats-email | Unsubscribe a customer (or staff member) to statistics emails for a specific site.


## `activities()`

```php
activities($site_name, $limit, $offset, $from, $to, $activities): \OpenAPI\Client\Model\Activity[]
```

Get activity history for a specific website over a certain amount of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$limit = 56; // int | Items to be retrieved per page. Lower bound: 1, Upper bound: 100
$offset = 56; // int | The index of the first item to return. Must be greater or equal to zero.
$from = 2020-03-20T23:23:03; // string | Start date
$to = 2020-03-20T23:23:03; // string | End date
$activities = activities=site_created&activities=site_published; // string | Activities are the activity types you are looking to retrieve - this parameter can be included multiple times in your query.

try {
    $result = $apiInstance->activities($site_name, $limit, $offset, $from, $to, $activities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->activities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **limit** | **int**| Items to be retrieved per page. Lower bound: 1, Upper bound: 100 | [optional]
 **offset** | **int**| The index of the first item to return. Must be greater or equal to zero. | [optional]
 **from** | **string**| Start date | [optional]
 **to** | **string**| End date | [optional]
 **activities** | **string**| Activities are the activity types you are looking to retrieve - this parameter can be included multiple times in your query. | [optional]

### Return type

[**\OpenAPI\Client\Model\Activity[]**](../Model/Activity.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analytics()`

```php
analytics($site_name, $from, $to, $dimension, $result, $date_granularity): OneOfAnalyticsActivitiesAnalyticsTraffic[]
```

Get analytics history for a specific website over a certain amount of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$from = 2020-03-20T23:23:03; // string | Start date
$to = 2020-03-20T23:23:03; // string | End date
$dimension = 'dimension_example'; // string | The type of dimension to query the data by.
$result = 'result_example'; // string | Whether to return results with traffic metrics or activities metric.
$date_granularity = 'date_granularity_example'; // string

try {
    $result = $apiInstance->analytics($site_name, $from, $to, $dimension, $result, $date_granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->analytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **from** | **string**| Start date | [optional]
 **to** | **string**| End date | [optional]
 **dimension** | **string**| The type of dimension to query the data by. | [optional]
 **result** | **string**| Whether to return results with traffic metrics or activities metric. | [optional]
 **date_granularity** | **string**|  | [optional]

### Return type

[**OneOfAnalyticsActivitiesAnalyticsTraffic[]**](../Model/OneOfAnalyticsActivitiesAnalyticsTraffic.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailSettings()`

```php
emailSettings($account_name, $site_name): \OpenAPI\Client\Model\SubscribeRequest
```

Get the status of stats emails for a customer on a given site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_name = account-name; // string | The account name is a unique reference to the account
$site_name = My Site; // string | Site name

try {
    $result = $apiInstance->emailSettings($account_name, $site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->emailSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_name** | **string**| The account name is a unique reference to the account |
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\SubscribeRequest**](../Model/SubscribeRequest.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formSubmissions()`

```php
formSubmissions($site_name, $from, $to): \OpenAPI\Client\Model\Form[]
```

Get all the contact form submissions from a given site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_name = My Site; // string | Site name
$from = 2016-03-01; // string | Start date
$to = 2016-03-02; // string | End date

try {
    $result = $apiInstance->formSubmissions($site_name, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->formSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_name** | **string**| Site name |
 **from** | **string**| Start date | [optional]
 **to** | **string**| End date | [optional]

### Return type

[**\OpenAPI\Client\Model\Form[]**](../Model/Form.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siteCreated()`

```php
siteCreated($from, $to): string[]
```

Get a list of Sites created within a span of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2016-03-01; // string | Start date
$to = 2016-03-02; // string | End date

try {
    $result = $apiInstance->siteCreated($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->siteCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date | [optional]
 **to** | **string**| End date | [optional]

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

## `siteUnpublished()`

```php
siteUnpublished($last_days): string[]
```

Get a list of recently unpublished websites in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_days = 7; // string | The number of days in which you would like get sites that have been unpublished

try {
    $result = $apiInstance->siteUnpublished($last_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->siteUnpublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_days** | **string**| The number of days in which you would like get sites that have been unpublished | [optional]

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

## `sitesPublished()`

```php
sitesPublished($last_days): string[]
```

Get a list of recently published websites in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_days = 7; // string | The number of days in which you would like get sites that have been published

try {
    $result = $apiInstance->sitesPublished($last_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->sitesPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_days** | **string**| The number of days in which you would like get sites that have been published | [optional]

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

## `subscribe()`

```php
subscribe($account_name, $site_name, $subscribe_request)
```

Subscribe a customer (or staff member) to statistics emails for a specific site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_name = account-name; // string | The account name is a unique reference to the account
$site_name = My Site; // string | Site name
$subscribe_request = new \OpenAPI\Client\Model\SubscribeRequest(); // \OpenAPI\Client\Model\SubscribeRequest

try {
    $apiInstance->subscribe($account_name, $site_name, $subscribe_request);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->subscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_name** | **string**| The account name is a unique reference to the account |
 **site_name** | **string**| Site name |
 **subscribe_request** | [**\OpenAPI\Client\Model\SubscribeRequest**](../Model/SubscribeRequest.md)|  | [optional]

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

## `unsubscribe()`

```php
unsubscribe($account_name, $site_name)
```

Unsubscribe a customer (or staff member) to statistics emails for a specific site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_name = account-name; // string | The account name is a unique reference to the account
$site_name = My Site; // string | Site name

try {
    $apiInstance->unsubscribe($account_name, $site_name);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->unsubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_name** | **string**| The account name is a unique reference to the account |
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
