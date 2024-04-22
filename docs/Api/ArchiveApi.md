# OpenAPI\Client\Docbox\ArchiveApi

All URIs are relative to https://localhost:8081/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archivestructure()**](ArchiveApi.md#archivestructure) | **GET** /archivestructure | Archive structure |


## `archivestructure()`

```php
archivestructure($parent_folder_id, $lazy): \OpenAPI\Client\Docbox\Model\DocboxArchive
```

Archive structure

Retrieves the folder structure of the DOCBOX®.

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_folder_id** | **int**| Parent folder id. If omitted the whole archive is returned. | [optional] |
| **lazy** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Docbox\Model\DocboxArchive**](../Model/DocboxArchive.md)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
