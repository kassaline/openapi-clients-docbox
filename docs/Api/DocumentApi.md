# OpenAPI\Client\Docbox\DocumentApi

All URIs are relative to https://localhost:8081/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentArchive()**](DocumentApi.md#documentArchive) | **POST** /document/{id}/archive | Archives a INBOX-document |
| [**documentAutoExportStatus()**](DocumentApi.md#documentAutoExportStatus) | **POST** /document/auto_export_status/set | Set auto export status |
| [**documentData()**](DocumentApi.md#documentData) | **GET** /document/{id}/data |  |
| [**documentIdDeletePost()**](DocumentApi.md#documentIdDeletePost) | **POST** /document/{id}/delete | Deletes a inbox document |
| [**documentIdReplacePost()**](DocumentApi.md#documentIdReplacePost) | **POST** /document/{id}/replace | Replaces a document in Inbox. |
| [**documentKeywordsPost()**](DocumentApi.md#documentKeywordsPost) | **POST** /document/{id}/keywords |  |
| [**documentList()**](DocumentApi.md#documentList) | **GET** /document/list | Document list |
| [**documentMetadataGet()**](DocumentApi.md#documentMetadataGet) | **GET** /document/{id}/metadata |  |
| [**documentMetadataPost()**](DocumentApi.md#documentMetadataPost) | **POST** /document/{id}/metadata |  |
| [**documentOcrResult()**](DocumentApi.md#documentOcrResult) | **GET** /document/{id}/ocr-result | Returns the OCR-result of a document |
| [**documentPdf()**](DocumentApi.md#documentPdf) | **GET** /document/{id}/pdf | Document |
| [**documentRename()**](DocumentApi.md#documentRename) | **POST** /document/{id}/rename |  |
| [**documentUploadedWith()**](DocumentApi.md#documentUploadedWith) | **GET** /document/{id}/uploaded-with |  |


## `documentArchive()`

```php
documentArchive($id, $target_folder_id, $target_mandator_name, $target_folder_path, $target_document_name, $keywords)
```

Archives a INBOX-document

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id
$target_folder_id = 56; // int | Id of the target folder. Either this or `target-folder-path` is required.
$target_mandator_name = 'target_mandator_name_example'; // string | Name of the mandator where the document should be archived
$target_folder_path = 'target_folder_path_example'; // string | Path to the target folder starting at the mandator. Either this or `target-folder-id` is required. Example: \\\"/Eingangsrechnungen/2018/\\\"
$target_document_name = 'target_document_name_example'; // string | Name of the new created archive-document. If not present, the current name of the document is used.
$keywords = 'keywords_example'; // string | Comma separated list of keywords, which get added to the document.

try {
    $apiInstance->documentArchive($id, $target_folder_id, $target_mandator_name, $target_folder_path, $target_document_name, $keywords);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |
| **target_folder_id** | **int**| Id of the target folder. Either this or &#x60;target-folder-path&#x60; is required. | [optional] |
| **target_mandator_name** | **string**| Name of the mandator where the document should be archived | [optional] |
| **target_folder_path** | **string**| Path to the target folder starting at the mandator. Either this or &#x60;target-folder-id&#x60; is required. Example: \\\&quot;/Eingangsrechnungen/2018/\\\&quot; | [optional] |
| **target_document_name** | **string**| Name of the new created archive-document. If not present, the current name of the document is used. | [optional] |
| **keywords** | **string**| Comma separated list of keywords, which get added to the document. | [optional] |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentAutoExportStatus()`

```php
documentAutoExportStatus($document_id, $autoexport_status)
```

Set auto export status

Sets the auto export status for a document.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 56; // int
$autoexport_status = True; // bool

try {
    $apiInstance->documentAutoExportStatus($document_id, $autoexport_status);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentAutoExportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **int**|  | |
| **autoexport_status** | **bool**|  | |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentData()`

```php
documentData($id): \OpenAPI\Client\Docbox\Model\ExtendedDocument
```



Returns data of a document. e.g. pages and annotations

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id

try {
    $result = $apiInstance->documentData($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |

### Return type

[**\OpenAPI\Client\Docbox\Model\ExtendedDocument**](../Model/ExtendedDocument.md)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentIdDeletePost()`

```php
documentIdDeletePost($id)
```

Deletes a inbox document

The document must be in inbox, not signed and must not be in an active workflow.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id

try {
    $apiInstance->documentIdDeletePost($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentIdReplacePost()`

```php
documentIdReplacePost($id, $keywords, $upload_data, $upload_data_base64)
```

Replaces a document in Inbox.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id
$keywords = 'keywords_example'; // string | Comma separated list of keywords to set for the new document. Commas can be escaped by prepending \\\\.
$upload_data = "/path/to/file.txt"; // \SplFileObject | The file to upload. Either this or `upload-data-base64` is required.
$upload_data_base64 = 'upload_data_base64_example'; // string | Base64 encoded content of the upload-data. When using this parameter `target-document-name` is required. Either this or `upload-data` is required.

try {
    $apiInstance->documentIdReplacePost($id, $keywords, $upload_data, $upload_data_base64);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |
| **keywords** | **string**| Comma separated list of keywords to set for the new document. Commas can be escaped by prepending \\\\. | [optional] |
| **upload_data** | **\SplFileObject****\SplFileObject**| The file to upload. Either this or &#x60;upload-data-base64&#x60; is required. | [optional] |
| **upload_data_base64** | **string**| Base64 encoded content of the upload-data. When using this parameter &#x60;target-document-name&#x60; is required. Either this or &#x60;upload-data&#x60; is required. | [optional] |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentKeywordsPost()`

```php
documentKeywordsPost($id, $request_body)
```



Updates the keywords assigned to this document

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->documentKeywordsPost($id, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentKeywordsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentList()`

```php
documentList($folder_id, $included_metadata_keys, $excluded_matadata_keys, $with_autoexport_status, $filter_date_created_after, $subfolders_recursive): \OpenAPI\Client\Docbox\Model\Document[]
```

Document list

Lists the documents within a specific folder.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 56; // int
$included_metadata_keys = 'included_metadata_keys_example'; // string
$excluded_matadata_keys = 'excluded_matadata_keys_example'; // string
$with_autoexport_status = True; // bool
$filter_date_created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$subfolders_recursive = false; // bool

try {
    $result = $apiInstance->documentList($folder_id, $included_metadata_keys, $excluded_matadata_keys, $with_autoexport_status, $filter_date_created_after, $subfolders_recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **int**|  | |
| **included_metadata_keys** | **string**|  | [optional] |
| **excluded_matadata_keys** | **string**|  | [optional] |
| **with_autoexport_status** | **bool**|  | [optional] |
| **filter_date_created_after** | **\DateTime**|  | [optional] |
| **subfolders_recursive** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Docbox\Model\Document[]**](../Model/Document.md)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentMetadataGet()`

```php
documentMetadataGet($id): array<string,string>
```



Gets the metadata assigned to this document

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id

try {
    $result = $apiInstance->documentMetadataGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |

### Return type

**array<string,string>**

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentMetadataPost()`

```php
documentMetadataPost($id, $request_body)
```



Updates the metadata assigned to this document. Metafields are identified by their tag. Metafields not present in the request are left unhanged.  Number fields must be written with a point as decimal separator. Date fields must be provided in ISO 8601 format.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->documentMetadataPost($id, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentMetadataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |
| **request_body** | [**array<string,string>**](../Model/string.md)|  | |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentOcrResult()`

```php
documentOcrResult($id): string
```

Returns the OCR-result of a document

The OCR-result is encoded as UTF-8. The OCR-texts of the individual pages are separated by Form-Feed Characters (0xFF).

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id

try {
    $result = $apiInstance->documentOcrResult($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentOcrResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |

### Return type

**string**

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentPdf()`

```php
documentPdf($id, $original, $annotations): \SplFileObject
```

Document

Gets the current version of a document as a PDF.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id
$original = false; // bool
$annotations = 'annotations_example'; // string | Comma separated list of annotations to export. The following values are valid: \"stamp\", \"text\", \"symbol\" and \"note\"

try {
    $result = $apiInstance->documentPdf($id, $original, $annotations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |
| **original** | **bool**|  | [optional] [default to false] |
| **annotations** | **string**| Comma separated list of annotations to export. The following values are valid: \&quot;stamp\&quot;, \&quot;text\&quot;, \&quot;symbol\&quot; and \&quot;note\&quot; | [optional] |

### Return type

**\SplFileObject**

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentRename()`

```php
documentRename($id, $new_name)
```



Renames a document

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id
$new_name = 'new_name_example'; // string

try {
    $apiInstance->documentRename($id, $new_name);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |
| **new_name** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentUploadedWith()`

```php
documentUploadedWith($id): int[]
```



If a document is uploaded and multiple documents are created (e.g. emails and their attachment) this endpoint can be used to fetch ids of the other created documents.

### Example

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


$apiInstance = new OpenAPI\Client\Docbox\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document id

try {
    $result = $apiInstance->documentUploadedWith($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentUploadedWith: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Document id | |

### Return type

**int[]**

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
