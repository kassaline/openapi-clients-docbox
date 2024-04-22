# OpenAPIClient-php

The DOCBOX® REST API makes it possible to integrate the DOCBOX® into third-party programs such as ERP or CRM applications. The third-party programs can access certain DOCBOX® functions, for example to archive documents in the DOCBOX® or to search for documents in it.

The api is available under https://{docbox-host}:{api-port}/api/v2. The default port is 8081 and should not be mistaken with the port of the webapp.

To authenticate to the API you must pass the API-Key header. Api keys can be configured by administrators in the modules->API section. If you are using the cloud version of DOCBOX® you must also pass the Cloud-ID header with your Cloudid.

For more information, please visit [https://www.docbox.eu/service-kontakt/kontakt.html](https://www.docbox.eu/service-kontakt/kontakt.html).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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



// Configure API key authorization: cloudId
$config = OpenAPI\Client\Docbox\Configuration::getDefaultConfiguration()->setApiKey('Cloud-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Docbox\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cloud-ID', 'Bearer');

// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Docbox\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Docbox\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Docbox\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_folder_id = 56; // int | Parent folder id. If omitted the whole archive is returned.
$lazy = false; // bool

try {
    $result = $apiInstance->archivestructure($parent_folder_id, $lazy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->archivestructure: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://localhost:8081/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ArchiveApi* | [**archivestructure**](docs/Api/ArchiveApi.md#archivestructure) | **GET** /archivestructure | Archive structure
*DocumentApi* | [**documentArchive**](docs/Api/DocumentApi.md#documentarchive) | **POST** /document/{id}/archive | Archives a INBOX-document
*DocumentApi* | [**documentAutoExportStatus**](docs/Api/DocumentApi.md#documentautoexportstatus) | **POST** /document/auto_export_status/set | Set auto export status
*DocumentApi* | [**documentData**](docs/Api/DocumentApi.md#documentdata) | **GET** /document/{id}/data | 
*DocumentApi* | [**documentIdDeletePost**](docs/Api/DocumentApi.md#documentiddeletepost) | **POST** /document/{id}/delete | Deletes a inbox document
*DocumentApi* | [**documentIdReplacePost**](docs/Api/DocumentApi.md#documentidreplacepost) | **POST** /document/{id}/replace | Replaces a document in Inbox.
*DocumentApi* | [**documentKeywordsPost**](docs/Api/DocumentApi.md#documentkeywordspost) | **POST** /document/{id}/keywords | 
*DocumentApi* | [**documentList**](docs/Api/DocumentApi.md#documentlist) | **GET** /document/list | Document list
*DocumentApi* | [**documentMetadataGet**](docs/Api/DocumentApi.md#documentmetadataget) | **GET** /document/{id}/metadata | 
*DocumentApi* | [**documentMetadataPost**](docs/Api/DocumentApi.md#documentmetadatapost) | **POST** /document/{id}/metadata | 
*DocumentApi* | [**documentOcrResult**](docs/Api/DocumentApi.md#documentocrresult) | **GET** /document/{id}/ocr-result | Returns the OCR-result of a document
*DocumentApi* | [**documentPdf**](docs/Api/DocumentApi.md#documentpdf) | **GET** /document/{id}/pdf | Document
*DocumentApi* | [**documentRename**](docs/Api/DocumentApi.md#documentrename) | **POST** /document/{id}/rename | 
*DocumentApi* | [**documentUploadedWith**](docs/Api/DocumentApi.md#documentuploadedwith) | **GET** /document/{id}/uploaded-with | 
*FileUploadApi* | [**fileUpload**](docs/Api/FileUploadApi.md#fileupload) | **POST** /file-upload | File upload
*FolderApi* | [**folderCreate**](docs/Api/FolderApi.md#foldercreate) | **POST** /folder/create | Create folder
*InboxApi* | [**inboxList**](docs/Api/InboxApi.md#inboxlist) | **GET** /inboxes | Inbox list
*PageApi* | [**pageOcrResult**](docs/Api/PageApi.md#pageocrresult) | **GET** /page/{id}/ocr-result | Returns the OCR-result of a page
*PageApi* | [**pagePreview**](docs/Api/PageApi.md#pagepreview) | **GET** /page/{id}/preview | Page preview
*SearchApi* | [**searchPOST**](docs/Api/SearchApi.md#searchpost) | **POST** /search | 

## Models

- [DocboxArchive](docs/Model/DocboxArchive.md)
- [Document](docs/Model/Document.md)
- [DocumentPage](docs/Model/DocumentPage.md)
- [DocumentPageNotesInner](docs/Model/DocumentPageNotesInner.md)
- [DocumentPageStampsInner](docs/Model/DocumentPageStampsInner.md)
- [ExtendedDocument](docs/Model/ExtendedDocument.md)
- [ExtendedDocumentExternal](docs/Model/ExtendedDocumentExternal.md)
- [ExtendedDocumentWorkflowsInner](docs/Model/ExtendedDocumentWorkflowsInner.md)
- [ExternalMetadata](docs/Model/ExternalMetadata.md)
- [Folder](docs/Model/Folder.md)
- [FolderCreate](docs/Model/FolderCreate.md)
- [InboxFolder](docs/Model/InboxFolder.md)
- [InboxStructure](docs/Model/InboxStructure.md)
- [SearchPOST200Response](docs/Model/SearchPOST200Response.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyAuth

- **Type**: API key
- **API key parameter name**: API-Key
- **Location**: HTTP header


### cloudId

- **Type**: API key
- **API key parameter name**: Cloud-ID
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@docbox.eu

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `7.6.0`
    - Generator version: `7.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
