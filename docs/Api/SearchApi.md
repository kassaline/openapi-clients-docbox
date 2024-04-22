# OpenAPI\Client\Docbox\SearchApi

All URIs are relative to https://localhost:8081/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchPOST()**](SearchApi.md#searchPOST) | **POST** /search |  |


## `searchPOST()`

```php
searchPOST($paginationSize, $paginationPage, $fulltextAll, $fulltextOne, $fulltextNone, $fromDate, $toDate, $followupTerms, $noteTerms, $keywordTerms, $stampsInclusive, $stampsExclusive, $documentNameTerms, $folderNameTerms, $location, $locationFolderId, $recursive, $archiverId, $workflowName, $workflowState, $documentType, $includeTrash, $externalId, $externalMetadata): \OpenAPI\Client\Docbox\Model\SearchPOST200Response
```



Durchsucht das DOCBOX® Archiv und liefert eine pagebare Liste mit den gefundenen Dokumenten.

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


$apiInstance = new OpenAPI\Client\Docbox\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paginationSize = 10; // int | Anzahl der Dokumente die im Ergebnis maximal zurückgegeben werden sollen, d.h. dieser Parameter gibt die Größe des Ergbnisfensters für das Paging des Suchergebnisses an.
$paginationPage = 0; // int | Gibt den Index des Ergebnisfensters an, welches angezeigt werden soll. Das erste Ergebnisfenster entspricht dabei dem Index 0. Durch Erhöhung des Index um 1 gelangt man zum nächsten Ergebnisfenster mit den nächsten Suchtreffern. Beispiel: Bei 27 gefundenen Dokumenten insgesamt und einer pagination-size von 10 liegt der Index des Ergebnisfensters zwischen 0 und 2
$fulltextAll = 'fulltextAll_example'; // string | Liste mit Texten, die alle gemeinsam auf jeder Trefferseite vorkommen müssen.
$fulltextOne = 'fulltextOne_example'; // string | Liste mit Texten, von denen mindestens einer auf jeder Trefferseite vorkommen muss.
$fulltextNone = 'fulltextNone_example'; // string | Liste mit Texten, von denen keiner auf den Trefferseiten vorkommen darf.
$fromDate = 'fromDate_example'; // string | Sucht nur nach Seiten deren Erstelldatum nach diesem Zeitpunkt liegt.
$toDate = 'toDate_example'; // string | Sucht nur nach Seiten deren Erstelldatum vor diesem Zeitpunkt liegt.
$followupTerms = 'followupTerms_example'; // string | Liste mit Texten die alle gemeinsam in den Wiedervorlage-Texten einer Seite vorkommen müssen.
$noteTerms = 'noteTerms_example'; // string | Liste mit Texten die alle gemeinsam in den Notiz-Texten einer Seite vorkommen müssen.
$keywordTerms = 'keywordTerms_example'; // string | Liste von Texten die alle gemeinsam in den Schlagwörtern einer Seite vorkommen müssen.
$stampsInclusive = 'stampsInclusive_example'; // string | Liste mit Namen aller Stempel, die gemeinsam auf einer Seite vorkommen müssen.
$stampsExclusive = 'stampsExclusive_example'; // string | Liste mit Namen aller Stempel, von denen keiner auf einer Seite vorkommen darf.
$documentNameTerms = 'documentNameTerms_example'; // string | Liste von Texten die alle im Dokumentennamen einer Seite vorkommen müssen.
$folderNameTerms = 'folderNameTerms_example'; // string | Liste von Texten die alle im Ordner-Pfad einer Seite vorkommen müssen.
$location = 'location_example'; // string | Pfad zu einem Ordner, auf den die Suche beschränkt werden soll (z. B. „/Muster GmbH/Rechnungen/“, „INBOX/Administrator“). Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt).
$locationFolderId = 56; // int | Ordner-Id, auf den die Suche beschränkt werden soll. Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt).
$recursive = true; // bool | Bestimmt ob auch in Unterordner bei location gesucht wird.
$archiverId = 56; // int | ID des Users der die zu suchenden Seiten archiviert haben muss.
$workflowName = 'workflowName_example'; // string | Name des Workflows in dem sich die zu suchenden Seiten aktuell befinden müssen. Durch Angabe von „*“ wird in allen Workflows gesucht.
$workflowState = 'workflowState_example'; // string | Name des Workflow-Knotens, in dem sich die zu suchenden Seiten aktuell befinden müssen.
$documentType = 'documentType_example'; // string | Name oder Alias-Name eines Dokumenten-Typs, der allen zu suchenden Dokumenten zugewiesen sein muss.
$includeTrash = false; // bool | Gibt an, ob auch Dokumente im Papierkorb mit durchsucht werden sollen.
$externalId = 'externalId_example'; // string | Text der in einer externen ID eines Dokuments vorkommen muss, damit es gefunden wird.
$externalMetadata = 'externalMetadata_example'; // string | Sucht Dokumente anhand ihrer externen Metadaten. Für jedes Metadatum in der Liste muss einem Dokument, damit es gefunden wird, ebenfalls ein Metadatum mit genau diesem Key zugeordnet sein und dessen Value den zu suchenden Value enthalten

try {
    $result = $apiInstance->searchPOST($paginationSize, $paginationPage, $fulltextAll, $fulltextOne, $fulltextNone, $fromDate, $toDate, $followupTerms, $noteTerms, $keywordTerms, $stampsInclusive, $stampsExclusive, $documentNameTerms, $folderNameTerms, $location, $locationFolderId, $recursive, $archiverId, $workflowName, $workflowState, $documentType, $includeTrash, $externalId, $externalMetadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paginationSize** | **int**| Anzahl der Dokumente die im Ergebnis maximal zurückgegeben werden sollen, d.h. dieser Parameter gibt die Größe des Ergbnisfensters für das Paging des Suchergebnisses an. | [optional] [default to 10] |
| **paginationPage** | **int**| Gibt den Index des Ergebnisfensters an, welches angezeigt werden soll. Das erste Ergebnisfenster entspricht dabei dem Index 0. Durch Erhöhung des Index um 1 gelangt man zum nächsten Ergebnisfenster mit den nächsten Suchtreffern. Beispiel: Bei 27 gefundenen Dokumenten insgesamt und einer pagination-size von 10 liegt der Index des Ergebnisfensters zwischen 0 und 2 | [optional] [default to 0] |
| **fulltextAll** | **string**| Liste mit Texten, die alle gemeinsam auf jeder Trefferseite vorkommen müssen. | [optional] |
| **fulltextOne** | **string**| Liste mit Texten, von denen mindestens einer auf jeder Trefferseite vorkommen muss. | [optional] |
| **fulltextNone** | **string**| Liste mit Texten, von denen keiner auf den Trefferseiten vorkommen darf. | [optional] |
| **fromDate** | **string**| Sucht nur nach Seiten deren Erstelldatum nach diesem Zeitpunkt liegt. | [optional] |
| **toDate** | **string**| Sucht nur nach Seiten deren Erstelldatum vor diesem Zeitpunkt liegt. | [optional] |
| **followupTerms** | **string**| Liste mit Texten die alle gemeinsam in den Wiedervorlage-Texten einer Seite vorkommen müssen. | [optional] |
| **noteTerms** | **string**| Liste mit Texten die alle gemeinsam in den Notiz-Texten einer Seite vorkommen müssen. | [optional] |
| **keywordTerms** | **string**| Liste von Texten die alle gemeinsam in den Schlagwörtern einer Seite vorkommen müssen. | [optional] |
| **stampsInclusive** | **string**| Liste mit Namen aller Stempel, die gemeinsam auf einer Seite vorkommen müssen. | [optional] |
| **stampsExclusive** | **string**| Liste mit Namen aller Stempel, von denen keiner auf einer Seite vorkommen darf. | [optional] |
| **documentNameTerms** | **string**| Liste von Texten die alle im Dokumentennamen einer Seite vorkommen müssen. | [optional] |
| **folderNameTerms** | **string**| Liste von Texten die alle im Ordner-Pfad einer Seite vorkommen müssen. | [optional] |
| **location** | **string**| Pfad zu einem Ordner, auf den die Suche beschränkt werden soll (z. B. „/Muster GmbH/Rechnungen/“, „INBOX/Administrator“). Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt). | [optional] |
| **locationFolderId** | **int**| Ordner-Id, auf den die Suche beschränkt werden soll. Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt). | [optional] |
| **recursive** | **bool**| Bestimmt ob auch in Unterordner bei location gesucht wird. | [optional] [default to true] |
| **archiverId** | **int**| ID des Users der die zu suchenden Seiten archiviert haben muss. | [optional] |
| **workflowName** | **string**| Name des Workflows in dem sich die zu suchenden Seiten aktuell befinden müssen. Durch Angabe von „*“ wird in allen Workflows gesucht. | [optional] |
| **workflowState** | **string**| Name des Workflow-Knotens, in dem sich die zu suchenden Seiten aktuell befinden müssen. | [optional] |
| **documentType** | **string**| Name oder Alias-Name eines Dokumenten-Typs, der allen zu suchenden Dokumenten zugewiesen sein muss. | [optional] |
| **includeTrash** | **bool**| Gibt an, ob auch Dokumente im Papierkorb mit durchsucht werden sollen. | [optional] [default to false] |
| **externalId** | **string**| Text der in einer externen ID eines Dokuments vorkommen muss, damit es gefunden wird. | [optional] |
| **externalMetadata** | **string**| Sucht Dokumente anhand ihrer externen Metadaten. Für jedes Metadatum in der Liste muss einem Dokument, damit es gefunden wird, ebenfalls ein Metadatum mit genau diesem Key zugeordnet sein und dessen Value den zu suchenden Value enthalten | [optional] |

### Return type

[**\OpenAPI\Client\Docbox\Model\SearchPOST200Response**](../Model/SearchPOST200Response.md)

### Authorization

[cloudId](../../README.md#cloudId), [apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
