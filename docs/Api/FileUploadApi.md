# OpenAPI\Client\Docbox\FileUploadApi

All URIs are relative to https://localhost:8081/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fileUpload()**](FileUploadApi.md#fileUpload) | **POST** /file-upload | File upload |


## `fileUpload()`

```php
fileUpload($targetMandatorName, $targetFolderPath, $targetFolderId, $targetDocumentName, $uploadData, $uploadDataBase64, $keywords, $documentTypes, $externalId, $externalMetadatas, $emailImportOrder, $forceNewDocument): int
```

File upload

Archives a file in the DOCBOX® or places it in an input tray.  **INFO:** Bitte beachten Sie, dass * bei einer Splittarchivierung aus dem Eingangsfach in das Archiv mehrere Dokumenten-ID's   entstehen.      Beispiel: Es liegt ein 5-seitiges Dokument mit der Dokumenten ID 1036 im Eingangsfach.   Nun archivieren man Seite 1-2 und am Schluss Seite 3-5. Die Seiten 3-5 behalten die   Dokumenten-ID 1036, die Seiten 1-2 erhalten eine neue Dokumenten-ID.  * Wenn Sie ein Dokument im Eingangsfach in Einzelseiten auftrennen (Symbol Schere) entstehen   neue Dokumenten-ID's und die ursprüngliche ID wird verworfen.

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


$apiInstance = new OpenAPI\Client\Docbox\Api\FileUploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$targetMandatorName = 'targetMandatorName_example'; // string | Name of the mandator where the document should be archived
$targetFolderPath = 'targetFolderPath_example'; // string | Path to the target folder starting at the mandator. Either this or `target-folder-id` is required. Example: \\\"/Eingangsrechnungen/2018/\\\"
$targetFolderId = 56; // int | Id of the target folder. Either this or `target-folder-path` is required.
$targetDocumentName = 'targetDocumentName_example'; // string
$uploadData = "/path/to/file.txt"; // \SplFileObject | The file to upload. Either this or `upload-data-base64` is required.
$uploadDataBase64 = 'uploadDataBase64_example'; // string | Base64 encoded content of the upload-data. When using this parameter `target-document-name` is required. Either this or `upload-data` is required.
$keywords = 'keywords_example'; // string | Comma separated list of keywords. Commas can be escaped by prepending \\\\\\\\.
$documentTypes = 'documentTypes_example'; // string | Comma separated list of document types (or their alias). Commas can be escaped by prepending \\\\\\\\. Ignores values where no document-type was found.
$externalId = 'externalId_example'; // string
$externalMetadatas = 'externalMetadatas_example'; // string | Comma separated list of key=value pairs. Comma and equals signs can be escaped by prepending \\\\\\\\.
$emailImportOrder = 'emailImportOrder_example'; // string
$forceNewDocument = True; // bool

try {
    $result = $apiInstance->fileUpload($targetMandatorName, $targetFolderPath, $targetFolderId, $targetDocumentName, $uploadData, $uploadDataBase64, $keywords, $documentTypes, $externalId, $externalMetadatas, $emailImportOrder, $forceNewDocument);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileUploadApi->fileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **targetMandatorName** | **string**| Name of the mandator where the document should be archived | [optional] |
| **targetFolderPath** | **string**| Path to the target folder starting at the mandator. Either this or &#x60;target-folder-id&#x60; is required. Example: \\\&quot;/Eingangsrechnungen/2018/\\\&quot; | [optional] |
| **targetFolderId** | **int**| Id of the target folder. Either this or &#x60;target-folder-path&#x60; is required. | [optional] |
| **targetDocumentName** | **string**|  | [optional] |
| **uploadData** | **\SplFileObject****\SplFileObject**| The file to upload. Either this or &#x60;upload-data-base64&#x60; is required. | [optional] |
| **uploadDataBase64** | **string**| Base64 encoded content of the upload-data. When using this parameter &#x60;target-document-name&#x60; is required. Either this or &#x60;upload-data&#x60; is required. | [optional] |
| **keywords** | **string**| Comma separated list of keywords. Commas can be escaped by prepending \\\\\\\\. | [optional] |
| **documentTypes** | **string**| Comma separated list of document types (or their alias). Commas can be escaped by prepending \\\\\\\\. Ignores values where no document-type was found. | [optional] |
| **externalId** | **string**|  | [optional] |
| **externalMetadatas** | **string**| Comma separated list of key&#x3D;value pairs. Comma and equals signs can be escaped by prepending \\\\\\\\. | [optional] |
| **emailImportOrder** | **string**|  | [optional] |
| **forceNewDocument** | **bool**|  | [optional] |

### Return type

**int**

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
