# OpenAPI\Client\Docbox\SearchApi

All URIs are relative to https://localhost:8081/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchPOST()**](SearchApi.md#searchPOST) | **POST** /search |  |


## `searchPOST()`

```php
searchPOST($pagination_size, $pagination_page, $fulltext_all, $fulltext_one, $fulltext_none, $from_date, $to_date, $followup_terms, $note_terms, $keyword_terms, $stamps_inclusive, $stamps_exclusive, $document_name_terms, $folder_name_terms, $location, $location_folder_id, $recursive, $archiver_id, $workflow_name, $workflow_state, $document_type, $include_trash, $external_id, $external_metadata): \OpenAPI\Client\Docbox\Model\SearchPOST200Response
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
$pagination_size = 10; // int | Anzahl der Dokumente die im Ergebnis maximal zurückgegeben werden sollen, d.h. dieser Parameter gibt die Größe des Ergbnisfensters für das Paging des Suchergebnisses an.
$pagination_page = 0; // int | Gibt den Index des Ergebnisfensters an, welches angezeigt werden soll. Das erste Ergebnisfenster entspricht dabei dem Index 0. Durch Erhöhung des Index um 1 gelangt man zum nächsten Ergebnisfenster mit den nächsten Suchtreffern. Beispiel: Bei 27 gefundenen Dokumenten insgesamt und einer pagination-size von 10 liegt der Index des Ergebnisfensters zwischen 0 und 2
$fulltext_all = 'fulltext_all_example'; // string | Liste mit Texten, die alle gemeinsam auf jeder Trefferseite vorkommen müssen.
$fulltext_one = 'fulltext_one_example'; // string | Liste mit Texten, von denen mindestens einer auf jeder Trefferseite vorkommen muss.
$fulltext_none = 'fulltext_none_example'; // string | Liste mit Texten, von denen keiner auf den Trefferseiten vorkommen darf.
$from_date = 'from_date_example'; // string | Sucht nur nach Seiten deren Erstelldatum nach diesem Zeitpunkt liegt.
$to_date = 'to_date_example'; // string | Sucht nur nach Seiten deren Erstelldatum vor diesem Zeitpunkt liegt.
$followup_terms = 'followup_terms_example'; // string | Liste mit Texten die alle gemeinsam in den Wiedervorlage-Texten einer Seite vorkommen müssen.
$note_terms = 'note_terms_example'; // string | Liste mit Texten die alle gemeinsam in den Notiz-Texten einer Seite vorkommen müssen.
$keyword_terms = 'keyword_terms_example'; // string | Liste von Texten die alle gemeinsam in den Schlagwörtern einer Seite vorkommen müssen.
$stamps_inclusive = 'stamps_inclusive_example'; // string | Liste mit Namen aller Stempel, die gemeinsam auf einer Seite vorkommen müssen.
$stamps_exclusive = 'stamps_exclusive_example'; // string | Liste mit Namen aller Stempel, von denen keiner auf einer Seite vorkommen darf.
$document_name_terms = 'document_name_terms_example'; // string | Liste von Texten die alle im Dokumentennamen einer Seite vorkommen müssen.
$folder_name_terms = 'folder_name_terms_example'; // string | Liste von Texten die alle im Ordner-Pfad einer Seite vorkommen müssen.
$location = 'location_example'; // string | Pfad zu einem Ordner, auf den die Suche beschränkt werden soll (z. B. „/Muster GmbH/Rechnungen/“, „INBOX/Administrator“). Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt).
$location_folder_id = 56; // int | Ordner-Id, auf den die Suche beschränkt werden soll. Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt).
$recursive = true; // bool | Bestimmt ob auch in Unterordner bei location gesucht wird.
$archiver_id = 56; // int | ID des Users der die zu suchenden Seiten archiviert haben muss.
$workflow_name = 'workflow_name_example'; // string | Name des Workflows in dem sich die zu suchenden Seiten aktuell befinden müssen. Durch Angabe von „*“ wird in allen Workflows gesucht.
$workflow_state = 'workflow_state_example'; // string | Name des Workflow-Knotens, in dem sich die zu suchenden Seiten aktuell befinden müssen.
$document_type = 'document_type_example'; // string | Name oder Alias-Name eines Dokumenten-Typs, der allen zu suchenden Dokumenten zugewiesen sein muss.
$include_trash = false; // bool | Gibt an, ob auch Dokumente im Papierkorb mit durchsucht werden sollen.
$external_id = 'external_id_example'; // string | Text der in einer externen ID eines Dokuments vorkommen muss, damit es gefunden wird.
$external_metadata = 'external_metadata_example'; // string | Sucht Dokumente anhand ihrer externen Metadaten. Für jedes Metadatum in der Liste muss einem Dokument, damit es gefunden wird, ebenfalls ein Metadatum mit genau diesem Key zugeordnet sein und dessen Value den zu suchenden Value enthalten

try {
    $result = $apiInstance->searchPOST($pagination_size, $pagination_page, $fulltext_all, $fulltext_one, $fulltext_none, $from_date, $to_date, $followup_terms, $note_terms, $keyword_terms, $stamps_inclusive, $stamps_exclusive, $document_name_terms, $folder_name_terms, $location, $location_folder_id, $recursive, $archiver_id, $workflow_name, $workflow_state, $document_type, $include_trash, $external_id, $external_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination_size** | **int**| Anzahl der Dokumente die im Ergebnis maximal zurückgegeben werden sollen, d.h. dieser Parameter gibt die Größe des Ergbnisfensters für das Paging des Suchergebnisses an. | [optional] [default to 10] |
| **pagination_page** | **int**| Gibt den Index des Ergebnisfensters an, welches angezeigt werden soll. Das erste Ergebnisfenster entspricht dabei dem Index 0. Durch Erhöhung des Index um 1 gelangt man zum nächsten Ergebnisfenster mit den nächsten Suchtreffern. Beispiel: Bei 27 gefundenen Dokumenten insgesamt und einer pagination-size von 10 liegt der Index des Ergebnisfensters zwischen 0 und 2 | [optional] [default to 0] |
| **fulltext_all** | **string**| Liste mit Texten, die alle gemeinsam auf jeder Trefferseite vorkommen müssen. | [optional] |
| **fulltext_one** | **string**| Liste mit Texten, von denen mindestens einer auf jeder Trefferseite vorkommen muss. | [optional] |
| **fulltext_none** | **string**| Liste mit Texten, von denen keiner auf den Trefferseiten vorkommen darf. | [optional] |
| **from_date** | **string**| Sucht nur nach Seiten deren Erstelldatum nach diesem Zeitpunkt liegt. | [optional] |
| **to_date** | **string**| Sucht nur nach Seiten deren Erstelldatum vor diesem Zeitpunkt liegt. | [optional] |
| **followup_terms** | **string**| Liste mit Texten die alle gemeinsam in den Wiedervorlage-Texten einer Seite vorkommen müssen. | [optional] |
| **note_terms** | **string**| Liste mit Texten die alle gemeinsam in den Notiz-Texten einer Seite vorkommen müssen. | [optional] |
| **keyword_terms** | **string**| Liste von Texten die alle gemeinsam in den Schlagwörtern einer Seite vorkommen müssen. | [optional] |
| **stamps_inclusive** | **string**| Liste mit Namen aller Stempel, die gemeinsam auf einer Seite vorkommen müssen. | [optional] |
| **stamps_exclusive** | **string**| Liste mit Namen aller Stempel, von denen keiner auf einer Seite vorkommen darf. | [optional] |
| **document_name_terms** | **string**| Liste von Texten die alle im Dokumentennamen einer Seite vorkommen müssen. | [optional] |
| **folder_name_terms** | **string**| Liste von Texten die alle im Ordner-Pfad einer Seite vorkommen müssen. | [optional] |
| **location** | **string**| Pfad zu einem Ordner, auf den die Suche beschränkt werden soll (z. B. „/Muster GmbH/Rechnungen/“, „INBOX/Administrator“). Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt). | [optional] |
| **location_folder_id** | **int**| Ordner-Id, auf den die Suche beschränkt werden soll. Es wird auch in allen Unterordnern dieses Pfades gesucht (außer recursive ist auf false gesetzt). | [optional] |
| **recursive** | **bool**| Bestimmt ob auch in Unterordner bei location gesucht wird. | [optional] [default to true] |
| **archiver_id** | **int**| ID des Users der die zu suchenden Seiten archiviert haben muss. | [optional] |
| **workflow_name** | **string**| Name des Workflows in dem sich die zu suchenden Seiten aktuell befinden müssen. Durch Angabe von „*“ wird in allen Workflows gesucht. | [optional] |
| **workflow_state** | **string**| Name des Workflow-Knotens, in dem sich die zu suchenden Seiten aktuell befinden müssen. | [optional] |
| **document_type** | **string**| Name oder Alias-Name eines Dokumenten-Typs, der allen zu suchenden Dokumenten zugewiesen sein muss. | [optional] |
| **include_trash** | **bool**| Gibt an, ob auch Dokumente im Papierkorb mit durchsucht werden sollen. | [optional] [default to false] |
| **external_id** | **string**| Text der in einer externen ID eines Dokuments vorkommen muss, damit es gefunden wird. | [optional] |
| **external_metadata** | **string**| Sucht Dokumente anhand ihrer externen Metadaten. Für jedes Metadatum in der Liste muss einem Dokument, damit es gefunden wird, ebenfalls ein Metadatum mit genau diesem Key zugeordnet sein und dessen Value den zu suchenden Value enthalten | [optional] |

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
