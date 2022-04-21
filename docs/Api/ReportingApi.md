# OpenAPI\Client\ReportingApi

All URIs are relative to https://api.duda.co/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountNameSitesSiteNameStatsEmailDelete()**](ReportingApi.md#accountsAccountNameSitesSiteNameStatsEmailDelete) | **DELETE** /accounts/{account_name}/sites/{site_name}/stats-email | Unsubscribe a customer (or staff member) to statistics emails for a specific site.
[**accountsAccountNameSitesSiteNameStatsEmailGet()**](ReportingApi.md#accountsAccountNameSitesSiteNameStatsEmailGet) | **GET** /accounts/{account_name}/sites/{site_name}/stats-email | Get the status of stats emails for a customer on a given site.
[**accountsAccountNameSitesSiteNameStatsEmailPost()**](ReportingApi.md#accountsAccountNameSitesSiteNameStatsEmailPost) | **POST** /accounts/{account_name}/sites/{site_name}/stats-email | Subscribe a customer (or staff member) to statistics emails for a specific site.
[**multiscreenAnalyticsSiteSiteNameGet()**](ReportingApi.md#multiscreenAnalyticsSiteSiteNameGet) | **GET** /multiscreen/analytics/site/{site_name} | Get analytics history for a specific website over a certain amount of time.
[**sitesMultiscreenCreatedGet()**](ReportingApi.md#sitesMultiscreenCreatedGet) | **GET** /sites/multiscreen/created | Get a list of Sites created within a span of time.
[**sitesMultiscreenGetFormsSiteNameGet()**](ReportingApi.md#sitesMultiscreenGetFormsSiteNameGet) | **GET** /sites/multiscreen/get-forms/{site_name} | Get all the contact form submissions from a given site.
[**sitesMultiscreenPublishedGet()**](ReportingApi.md#sitesMultiscreenPublishedGet) | **GET** /sites/multiscreen/published | Get a list of recently published websites in your account.
[**sitesMultiscreenSiteNameActivitiesGet()**](ReportingApi.md#sitesMultiscreenSiteNameActivitiesGet) | **GET** /sites/multiscreen/{site_name}/activities | Get activity history for a specific website over a certain amount of time.
[**sitesMultiscreenUnpublishedGet()**](ReportingApi.md#sitesMultiscreenUnpublishedGet) | **GET** /sites/multiscreen/unpublished | Get a list of recently unpublished websites in your account.


## `accountsAccountNameSitesSiteNameStatsEmailDelete()`

```php
accountsAccountNameSitesSiteNameStatsEmailDelete($account_name, $site_name)
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
    $apiInstance->accountsAccountNameSitesSiteNameStatsEmailDelete($account_name, $site_name);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->accountsAccountNameSitesSiteNameStatsEmailDelete: ', $e->getMessage(), PHP_EOL;
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

## `accountsAccountNameSitesSiteNameStatsEmailGet()`

```php
accountsAccountNameSitesSiteNameStatsEmailGet($account_name, $site_name): \OpenAPI\Client\Model\InlineResponse2008
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
    $result = $apiInstance->accountsAccountNameSitesSiteNameStatsEmailGet($account_name, $site_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->accountsAccountNameSitesSiteNameStatsEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_name** | **string**| The account name is a unique reference to the account |
 **site_name** | **string**| Site name |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsAccountNameSitesSiteNameStatsEmailPost()`

```php
accountsAccountNameSitesSiteNameStatsEmailPost($account_name, $site_name, $inline_object15)
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
$inline_object15 = new \OpenAPI\Client\Model\InlineObject15(); // \OpenAPI\Client\Model\InlineObject15

try {
    $apiInstance->accountsAccountNameSitesSiteNameStatsEmailPost($account_name, $site_name, $inline_object15);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->accountsAccountNameSitesSiteNameStatsEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_name** | **string**| The account name is a unique reference to the account |
 **site_name** | **string**| Site name |
 **inline_object15** | [**\OpenAPI\Client\Model\InlineObject15**](../Model/InlineObject15.md)|  | [optional]

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

## `multiscreenAnalyticsSiteSiteNameGet()`

```php
multiscreenAnalyticsSiteSiteNameGet($site_name, $from, $to, $dimension, $result, $date_granularity): OneOfAnalyticsActivitiesAnalyticsTraffic[]
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
    $result = $apiInstance->multiscreenAnalyticsSiteSiteNameGet($site_name, $from, $to, $dimension, $result, $date_granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->multiscreenAnalyticsSiteSiteNameGet: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenCreatedGet()`

```php
sitesMultiscreenCreatedGet($from, $to): string[]
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
    $result = $apiInstance->sitesMultiscreenCreatedGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->sitesMultiscreenCreatedGet: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenGetFormsSiteNameGet()`

```php
sitesMultiscreenGetFormsSiteNameGet($site_name, $from, $to): \OpenAPI\Client\Model\Form[]
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
    $result = $apiInstance->sitesMultiscreenGetFormsSiteNameGet($site_name, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->sitesMultiscreenGetFormsSiteNameGet: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenPublishedGet()`

```php
sitesMultiscreenPublishedGet($last_days): string[]
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
    $result = $apiInstance->sitesMultiscreenPublishedGet($last_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->sitesMultiscreenPublishedGet: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenSiteNameActivitiesGet()`

```php
sitesMultiscreenSiteNameActivitiesGet($site_name, $limit, $offset, $from, $to, $activities): \OpenAPI\Client\Model\Activity[]
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
    $result = $apiInstance->sitesMultiscreenSiteNameActivitiesGet($site_name, $limit, $offset, $from, $to, $activities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->sitesMultiscreenSiteNameActivitiesGet: ', $e->getMessage(), PHP_EOL;
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

## `sitesMultiscreenUnpublishedGet()`

```php
sitesMultiscreenUnpublishedGet($last_days): string[]
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
    $result = $apiInstance->sitesMultiscreenUnpublishedGet($last_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->sitesMultiscreenUnpublishedGet: ', $e->getMessage(), PHP_EOL;
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