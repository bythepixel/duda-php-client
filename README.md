# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.duda.co/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CollectionApi* | [**clearCache**](docs/Api/CollectionApi.md#clearcache) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/revalidate | Force Duda to refresh the data from an external URL for a given collection.
*CollectionApi* | [**clearCacheByExternalId**](docs/Api/CollectionApi.md#clearcachebyexternalid) | **POST** /sites/multiscreen/collections/revalidate/{external_id} | Revalidate all collections in all sites under the same account that use the provided external id
*CollectionApi* | [**createCollection**](docs/Api/CollectionApi.md#createcollection) | **POST** /sites/multiscreen/{site_name}/collection | Create a new collection within a site
*CollectionApi* | [**createFields**](docs/Api/CollectionApi.md#createfields) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/field | Add a new field(s) to an existing collection.
*CollectionApi* | [**createRows**](docs/Api/CollectionApi.md#createrows) | **POST** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Add new row(s) of data into an existing collection. This accepts multiple row values if you&#39;d like to insert more than one.
*CollectionApi* | [**deleteCollection**](docs/Api/CollectionApi.md#deletecollection) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name} | Delete an existing collection
*CollectionApi* | [**deleteFields**](docs/Api/CollectionApi.md#deletefields) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name}/field/{field_name} | Delete an existing field of a collection
*CollectionApi* | [**deleteRows**](docs/Api/CollectionApi.md#deleterows) | **DELETE** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Delete existing rows of data that exist within the collection.
*CollectionApi* | [**getCollection**](docs/Api/CollectionApi.md#getcollection) | **GET** /sites/multiscreen/{site_name}/collection/{collection_name} | Get the fields and data of an existing collection
*CollectionApi* | [**listCollections**](docs/Api/CollectionApi.md#listcollections) | **GET** /sites/multiscreen/{site_name}/collection | Get all collections that exist on this website.
*CollectionApi* | [**updateCollection**](docs/Api/CollectionApi.md#updatecollection) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name} | Update an existing collection
*CollectionApi* | [**updateFields**](docs/Api/CollectionApi.md#updatefields) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name}/field/{field_name} | Update existing field of a collection
*CollectionApi* | [**updateRows**](docs/Api/CollectionApi.md#updaterows) | **PUT** /sites/multiscreen/{site_name}/collection/{collection_name}/row | Update existing collection rows.
*ContentApi* | [**createInjectedContent**](docs/Api/ContentApi.md#createinjectedcontent) | **POST** /sites/multiscreen/inject-content/{site_name} | Content injection provides the ability to update a website directly via the API.
*ContentApi* | [**createInjectedContentSinglePage**](docs/Api/ContentApi.md#createinjectedcontentsinglepage) | **POST** /sites/multiscreen/inject-content/{site_name}/pages/{page_name} | Content injection provides the ability to update a page on a website directly via the API.
*ContentApi* | [**createLocation**](docs/Api/ContentApi.md#createlocation) | **POST** /sites/multiscreen/{site_name}/content/location | Create a new location for a website. This location will be apart of the additional_locations object that is returned from a site&#39;s content library.
*ContentApi* | [**deleteLocation**](docs/Api/ContentApi.md#deletelocation) | **DELETE** /sites/multiscreen/{site_name}/content/location/{location_id} | Delete an existing location
*ContentApi* | [**getContentLibrary**](docs/Api/ContentApi.md#getcontentlibrary) | **GET** /sites/multiscreen/{site_name}/content | Get the data that exists within the content library of a website.
*ContentApi* | [**getInjectedContent**](docs/Api/ContentApi.md#getinjectedcontent) | **GET** /sites/multiscreen/inject-content/{site_name} | Search the website for all references of the data-inject value, either in the HTML or CSS of the website.
*ContentApi* | [**getLocation**](docs/Api/ContentApi.md#getlocation) | **GET** /sites/multiscreen/{site_name}/content/location/{location_id} | Get data for a specific location.
*ContentApi* | [**publishContentLibrary**](docs/Api/ContentApi.md#publishcontentlibrary) | **POST** /sites/multiscreen/{site_name}/content/publish | Push updates already within the content library directly to the live version of the website. This pushes the data that exists within the content library to the live/published version of the website.
*ContentApi* | [**updateContentLibrary**](docs/Api/ContentApi.md#updatecontentlibrary) | **POST** /sites/multiscreen/{site_name}/content | Update the data that exists within the content library. Once updated the data is ready for immediate use within the editor.
*ContentApi* | [**updateLocation**](docs/Api/ContentApi.md#updatelocation) | **POST** /sites/multiscreen/{site_name}/content/location/{location_id} | Update an existing location within the content library. You can only update additional_locations that exist as part of the content library.
*ContentApi* | [**uploadResource**](docs/Api/ContentApi.md#uploadresource) | **POST** /sites/multiscreen/inject-content/{site_name}/upload | Upload a resource to the website from an external source. Resource is uploaded to Duda&#39;s CDN and made available to anyone building the website.
*OtherApi* | [**createBackup**](docs/Api/OtherApi.md#createbackup) | **POST** /sites/multiscreen/backups/{site_name}/create | Create a new backup of a site. This is used for saving the existing state of a site. Good for saving a restore point before a user starts to edit a site or after work has been completed.
*OtherApi* | [**createSSLCertificate**](docs/Api/OtherApi.md#createsslcertificate) | **POST** /sites/multiscreen/{site_name}/certificate | Generate a SSL certificate for a specific website.
*OtherApi* | [**deleteBackup**](docs/Api/OtherApi.md#deletebackup) | **DELETE** /sites/multiscreen/backups/{site_name}/{backup_name} | Deletes an existing backup from a Site.
*OtherApi* | [**deleteSSLCertificate**](docs/Api/OtherApi.md#deletesslcertificate) | **DELETE** /sites/multiscreen/{site_name}/certificate | Delete a certificate that has been generated for a website. This will ensure that the website is served over only an HTTP (insecure) connection and will delete the generated certificate.
*OtherApi* | [**listBackups**](docs/Api/OtherApi.md#listbackups) | **GET** /sites/multiscreen/backups/{site_name} | Get an array of existing site backups
*OtherApi* | [**renewSSLCertificate**](docs/Api/OtherApi.md#renewsslcertificate) | **POST** /sites/multiscreen/{site_name}/certificate/renew | Starts the renewal process for an SSL certificate
*OtherApi* | [**restoreBackup**](docs/Api/OtherApi.md#restorebackup) | **POST** /sites/multiscreen/backups/{site_name}/restore/{backup_name} | Restore a site from an existing backup. This will fully restore the site back to the state it was in at the time of the backup creation. When restoring a site, a backup is automatically made before the restore begins.
*PagesV2Api* | [**deletePage**](docs/Api/PagesV2Api.md#deletepage) | **DELETE** /sites/multiscreen/{site_name}/pages/{page_uuid} | Delete a Page from a Site.
*PagesV2Api* | [**duplicatePage**](docs/Api/PagesV2Api.md#duplicatepage) | **POST** /sites/multiscreen/{site_name}/pages/{page_uuid}/duplicate | Duplicate an existing Page of a Site.
*PagesV2Api* | [**getPage**](docs/Api/PagesV2Api.md#getpage) | **GET** /sites/multiscreen/{site_name}/pages/{page_uuid} | Get the details of an individual Page of a Site.
*PagesV2Api* | [**listPages**](docs/Api/PagesV2Api.md#listpages) | **GET** /sites/multiscreen/{site_name}/pages | Get details of all the Pages of a Site.
*PagesV2Api* | [**updatePage**](docs/Api/PagesV2Api.md#updatepage) | **PUT** /sites/multiscreen/{site_name}/pages/{page_uuid} | Update an existing Page of a Site.
*ReportingApi* | [**activities**](docs/Api/ReportingApi.md#activities) | **GET** /sites/multiscreen/{site_name}/activities | Get activity history for a specific website over a certain amount of time.
*ReportingApi* | [**analytics**](docs/Api/ReportingApi.md#analytics) | **GET** /multiscreen/analytics/site/{site_name} | Get analytics history for a specific website over a certain amount of time.
*ReportingApi* | [**emailSettings**](docs/Api/ReportingApi.md#emailsettings) | **GET** /accounts/{account_name}/sites/{site_name}/stats-email | Get the status of stats emails for a customer on a given site.
*ReportingApi* | [**formSubmissions**](docs/Api/ReportingApi.md#formsubmissions) | **GET** /sites/multiscreen/get-forms/{site_name} | Get all the contact form submissions from a given site.
*ReportingApi* | [**siteCreated**](docs/Api/ReportingApi.md#sitecreated) | **GET** /sites/multiscreen/created | Get a list of Sites created within a span of time.
*ReportingApi* | [**siteUnpublished**](docs/Api/ReportingApi.md#siteunpublished) | **GET** /sites/multiscreen/unpublished | Get a list of recently unpublished websites in your account.
*ReportingApi* | [**sitesPublished**](docs/Api/ReportingApi.md#sitespublished) | **GET** /sites/multiscreen/published | Get a list of recently published websites in your account.
*ReportingApi* | [**subscribe**](docs/Api/ReportingApi.md#subscribe) | **POST** /accounts/{account_name}/sites/{site_name}/stats-email | Subscribe a customer (or staff member) to statistics emails for a specific site.
*ReportingApi* | [**unsubscribe**](docs/Api/ReportingApi.md#unsubscribe) | **DELETE** /accounts/{account_name}/sites/{site_name}/stats-email | Unsubscribe a customer (or staff member) to statistics emails for a specific site.
*SiteApi* | [**createSite**](docs/Api/SiteApi.md#createsite) | **POST** /sites/multiscreen/create | Create a new Site from a Template.
*SiteApi* | [**deleteSite**](docs/Api/SiteApi.md#deletesite) | **DELETE** /sites/multiscreen/{site_name} | Permanently deletes a Site and cancels all subscriptions.
*SiteApi* | [**duplicateSite**](docs/Api/SiteApi.md#duplicatesite) | **POST** /sites/multiscreen/duplicate/{site_name} | Creates a new Site based on an existing one.
*SiteApi* | [**getSite**](docs/Api/SiteApi.md#getsite) | **GET** /sites/multiscreen/{site_name} | Details about a site
*SiteApi* | [**getSiteByExternalId**](docs/Api/SiteApi.md#getsitebyexternalid) | **GET** /sites/multiscreen/byexternalid/{external_uid} | Get the names of Sites that have a specific external id.
*SiteApi* | [**publishSite**](docs/Api/SiteApi.md#publishsite) | **POST** /sites/multiscreen/publish/{site_name} | Takes a Site live and purchases a subscription.
*SiteApi* | [**resetSite**](docs/Api/SiteApi.md#resetsite) | **POST** /sites/multiscreen/reset/{site_name} | Resets a Site to initial state or based on a new template and data.
*SiteApi* | [**switchTemplate**](docs/Api/SiteApi.md#switchtemplate) | **POST** /sites/multiscreen/switchTemplate/{site_name} | Applies a new template to an existing Site.
*SiteApi* | [**unpublishSite**](docs/Api/SiteApi.md#unpublishsite) | **POST** /sites/multiscreen/unpublish/{site_name} | Takes down a Site and suspends it&#39;s subscription.
*SiteApi* | [**updateSite**](docs/Api/SiteApi.md#updatesite) | **POST** /sites/multiscreen/update/{site_name} | Update properties of an existing Site.
*TemplateApi* | [**createFromSite**](docs/Api/TemplateApi.md#createfromsite) | **POST** /sites/multiscreen/templates/fromsite | Create a new Template based on an existing site
*TemplateApi* | [**createFromTemplate**](docs/Api/TemplateApi.md#createfromtemplate) | **POST** /sites/multiscreen/templates/fromtemplate | Create a new Template based on an existing one
*TemplateApi* | [**deleteTemplate**](docs/Api/TemplateApi.md#deletetemplate) | **DELETE** /sites/multiscreen/templates/{template_id} | Delete a custom Template.
*TemplateApi* | [**getTemplate**](docs/Api/TemplateApi.md#gettemplate) | **GET** /sites/multiscreen/templates/{template_id} | Get the details of a Template.
*TemplateApi* | [**listTemplates**](docs/Api/TemplateApi.md#listtemplates) | **GET** /sites/multiscreen/templates | Get all available Templates.
*TemplateApi* | [**updateTemplate**](docs/Api/TemplateApi.md#updatetemplate) | **POST** /sites/multiscreen/templates/{template_id} | Update the name of a custom Template.
*URLRulesApi* | [**createRule**](docs/Api/URLRulesApi.md#createrule) | **POST** /sites/multiscreen/site/{site_name}/urlrules | Create a new URL rule.
*URLRulesApi* | [**deleteRule**](docs/Api/URLRulesApi.md#deleterule) | **DELETE** /sites/multiscreen/site/{site_name}/urlrules/{id} | Delete an existing URL rule.
*URLRulesApi* | [**getAllRules**](docs/Api/URLRulesApi.md#getallrules) | **GET** /sites/multiscreen/site/{site_name}/urlrules | Get all of the URL rules of a Site.
*URLRulesApi* | [**getRule**](docs/Api/URLRulesApi.md#getrule) | **GET** /sites/multiscreen/site/{site_name}/urlrules/{id} | Get the details of a specific URL rule
*URLRulesApi* | [**updateRule**](docs/Api/URLRulesApi.md#updaterule) | **PUT** /sites/multiscreen/site/{site_name}/urlrules/{id} | Update an existing URL rule.

## Models

- [Activity](docs/Model/Activity.md)
- [ActivityResults](docs/Model/ActivityResults.md)
- [Address](docs/Model/Address.md)
- [AlternateDomains](docs/Model/AlternateDomains.md)
- [AnalyticsActivities](docs/Model/AnalyticsActivities.md)
- [AnalyticsTraffic](docs/Model/AnalyticsTraffic.md)
- [BusinessData](docs/Model/BusinessData.md)
- [Collection](docs/Model/Collection.md)
- [CollectionCreateRequest](docs/Model/CollectionCreateRequest.md)
- [CollectionCreateRequestAllOf](docs/Model/CollectionCreateRequestAllOf.md)
- [CollectionUpdateRequest](docs/Model/CollectionUpdateRequest.md)
- [CollectionValues](docs/Model/CollectionValues.md)
- [Content](docs/Model/Content.md)
- [ContentLibraryUpdateRequest](docs/Model/ContentLibraryUpdateRequest.md)
- [CreateBackupRequest](docs/Model/CreateBackupRequest.md)
- [CreateBackupResponse](docs/Model/CreateBackupResponse.md)
- [CreateFieldsRequest](docs/Model/CreateFieldsRequest.md)
- [CreateInjectedContentRequest](docs/Model/CreateInjectedContentRequest.md)
- [CreateInjectedContentRequestAllOf](docs/Model/CreateInjectedContentRequestAllOf.md)
- [CreateInjectedContentSinglePageRequest](docs/Model/CreateInjectedContentSinglePageRequest.md)
- [CreateRowData](docs/Model/CreateRowData.md)
- [CreateRowsRequest](docs/Model/CreateRowsRequest.md)
- [CreateSiteRequest](docs/Model/CreateSiteRequest.md)
- [CreateTemplateFromSiteRequest](docs/Model/CreateTemplateFromSiteRequest.md)
- [CreateTemplateFromTemplateRequest](docs/Model/CreateTemplateFromTemplateRequest.md)
- [CustomSiteText](docs/Model/CustomSiteText.md)
- [CustomerLock](docs/Model/CustomerLock.md)
- [DuplicatePageRequest](docs/Model/DuplicatePageRequest.md)
- [DuplicateSiteRequest](docs/Model/DuplicateSiteRequest.md)
- [Error](docs/Model/Error.md)
- [ExternalDetails](docs/Model/ExternalDetails.md)
- [Field](docs/Model/Field.md)
- [Form](docs/Model/Form.md)
- [FormMessage](docs/Model/FormMessage.md)
- [Frequency](docs/Model/Frequency.md)
- [GetAllRulesResponse](docs/Model/GetAllRulesResponse.md)
- [GetInjectedContentRequest](docs/Model/GetInjectedContentRequest.md)
- [GetInjectedContentRequestAllOf](docs/Model/GetInjectedContentRequestAllOf.md)
- [InjectedContent](docs/Model/InjectedContent.md)
- [ListBackupsResponse](docs/Model/ListBackupsResponse.md)
- [ListPagesResponse](docs/Model/ListPagesResponse.md)
- [LocalBusiness](docs/Model/LocalBusiness.md)
- [Location](docs/Model/Location.md)
- [LocationAddress](docs/Model/LocationAddress.md)
- [LocationBusinessHours](docs/Model/LocationBusinessHours.md)
- [LocationEmails](docs/Model/LocationEmails.md)
- [LocationGeo](docs/Model/LocationGeo.md)
- [LocationPhones](docs/Model/LocationPhones.md)
- [LocationSchema](docs/Model/LocationSchema.md)
- [LocationSocialAccounts](docs/Model/LocationSocialAccounts.md)
- [Page](docs/Model/Page.md)
- [Resource](docs/Model/Resource.md)
- [RowData](docs/Model/RowData.md)
- [RowId](docs/Model/RowId.md)
- [Seo](docs/Model/Seo.md)
- [Site](docs/Model/Site.md)
- [SiteBusinessInfo](docs/Model/SiteBusinessInfo.md)
- [SiteImage](docs/Model/SiteImage.md)
- [SiteNameResponse](docs/Model/SiteNameResponse.md)
- [SiteSchemas](docs/Model/SiteSchemas.md)
- [SiteTexts](docs/Model/SiteTexts.md)
- [SubscribeRequest](docs/Model/SubscribeRequest.md)
- [SwitchTemplateRequest](docs/Model/SwitchTemplateRequest.md)
- [Template](docs/Model/Template.md)
- [TemplateProperties](docs/Model/TemplateProperties.md)
- [UpdateFieldsRequest](docs/Model/UpdateFieldsRequest.md)
- [UpdateRowsRequest](docs/Model/UpdateRowsRequest.md)
- [UpdateTemplateRequest](docs/Model/UpdateTemplateRequest.md)
- [UploadResourceRequest](docs/Model/UploadResourceRequest.md)
- [UploadResourceResponse](docs/Model/UploadResourceResponse.md)
- [UploadedResource](docs/Model/UploadedResource.md)
- [UrlRule](docs/Model/UrlRule.md)

## Authorization

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
