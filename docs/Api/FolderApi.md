# OpenAPI\Client\Docbox\FolderApi

All URIs are relative to https://localhost:8081/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**folderCreate()**](FolderApi.md#folderCreate) | **POST** /folder/create | Create folder |


## `folderCreate()`

```php
folderCreate($parent_folder_id, $folder_name): \OpenAPI\Client\Docbox\Model\FolderCreate
```

Create folder

Create a new folder

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


$apiInstance = new OpenAPI\Client\Docbox\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_folder_id = 56; // int
$folder_name = 'folder_name_example'; // string

try {
    $result = $apiInstance->folderCreate($parent_folder_id, $folder_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_folder_id** | **int**|  | |
| **folder_name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Docbox\Model\FolderCreate**](../Model/FolderCreate.md)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
