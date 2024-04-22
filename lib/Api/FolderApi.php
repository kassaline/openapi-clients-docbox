<?php
/**
 * FolderApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Docbox
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DOCBOX® API
 *
 * The DOCBOX® REST API makes it possible to integrate the DOCBOX® into third-party programs such as ERP or CRM applications. The third-party programs can access certain DOCBOX® functions, for example to archive documents in the DOCBOX® or to search for documents in it.  The api is available under https://{docbox-host}:{api-port}/api/v2. The default port is 8081 and should not be mistaken with the port of the webapp.  To authenticate to the API you must pass the API-Key header. Api keys can be configured by administrators in the modules->API section. If you are using the cloud version of DOCBOX® you must also pass the Cloud-ID header with your Cloudid.
 *
 * The version of the OpenAPI document: 7.6.0
 * Contact: support@docbox.eu
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Docbox\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\Docbox\ApiException;
use OpenAPI\Client\Docbox\Configuration;
use OpenAPI\Client\Docbox\HeaderSelector;
use OpenAPI\Client\Docbox\ObjectSerializer;

/**
 * FolderApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Docbox
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FolderApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'folderCreate' => [
            'application/x-www-form-urlencoded',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation folderCreate
     *
     * Create folder
     *
     * @param  int $parent_folder_id parent_folder_id (required)
     * @param  string $folder_name folder_name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\Docbox\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Docbox\Model\FolderCreate
     */
    public function folderCreate($parent_folder_id, $folder_name, string $contentType = self::contentTypes['folderCreate'][0])
    {
        list($response) = $this->folderCreateWithHttpInfo($parent_folder_id, $folder_name, $contentType);
        return $response;
    }

    /**
     * Operation folderCreateWithHttpInfo
     *
     * Create folder
     *
     * @param  int $parent_folder_id (required)
     * @param  string $folder_name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\Docbox\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Docbox\Model\FolderCreate, HTTP status code, HTTP response headers (array of strings)
     */
    public function folderCreateWithHttpInfo($parent_folder_id, $folder_name, string $contentType = self::contentTypes['folderCreate'][0])
    {
        $request = $this->folderCreateRequest($parent_folder_id, $folder_name, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Docbox\Model\FolderCreate' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Docbox\Model\FolderCreate' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Docbox\Model\FolderCreate', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Docbox\Model\FolderCreate';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Docbox\Model\FolderCreate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation folderCreateAsync
     *
     * Create folder
     *
     * @param  int $parent_folder_id (required)
     * @param  string $folder_name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderCreateAsync($parent_folder_id, $folder_name, string $contentType = self::contentTypes['folderCreate'][0])
    {
        return $this->folderCreateAsyncWithHttpInfo($parent_folder_id, $folder_name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderCreateAsyncWithHttpInfo
     *
     * Create folder
     *
     * @param  int $parent_folder_id (required)
     * @param  string $folder_name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderCreateAsyncWithHttpInfo($parent_folder_id, $folder_name, string $contentType = self::contentTypes['folderCreate'][0])
    {
        $returnType = '\OpenAPI\Client\Docbox\Model\FolderCreate';
        $request = $this->folderCreateRequest($parent_folder_id, $folder_name, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'folderCreate'
     *
     * @param  int $parent_folder_id (required)
     * @param  string $folder_name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function folderCreateRequest($parent_folder_id, $folder_name, string $contentType = self::contentTypes['folderCreate'][0])
    {

        // verify the required parameter 'parent_folder_id' is set
        if ($parent_folder_id === null || (is_array($parent_folder_id) && count($parent_folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $parent_folder_id when calling folderCreate'
            );
        }

        // verify the required parameter 'folder_name' is set
        if ($folder_name === null || (is_array($folder_name) && count($folder_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_name when calling folderCreate'
            );
        }


        $resourcePath = '/folder/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        if ($parent_folder_id !== null) {
            $formParams['parent-folder-id'] = ObjectSerializer::toFormValue($parent_folder_id);
        }
        // form params
        if ($folder_name !== null) {
            $formParams['folder-name'] = ObjectSerializer::toFormValue($folder_name);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Cloud-ID');
        if ($apiKey !== null) {
            $headers['Cloud-ID'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('API-Key');
        if ($apiKey !== null) {
            $headers['API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
