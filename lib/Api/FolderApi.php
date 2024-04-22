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
    protected \GuzzleHttp\ClientInterface $client;

    protected \OpenAPI\Client\Docbox\Configuration $config;

    protected \OpenAPI\Client\Docbox\HeaderSelector $headerSelector;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'folderCreate' => [
            'application/x-www-form-urlencoded',
        ],
    ];

    /**
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $configuration = null,
        HeaderSelector $headerSelector = null,
        protected $hostIndex = 0
    ) {
        $this->client = $client instanceof \GuzzleHttp\ClientInterface ? $client : new Client();
        $this->config = $configuration instanceof \OpenAPI\Client\Docbox\Configuration ? $configuration : new Configuration();
        $this->headerSelector = $headerSelector instanceof \OpenAPI\Client\Docbox\HeaderSelector ? $headerSelector : new HeaderSelector();
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

    public function getConfig(): \OpenAPI\Client\Docbox\Configuration
    {
        return $this->config;
    }

    /**
     * Operation folderCreate
     *
     * Create folder
     *
     * @param  int $parentFolderId parentFolderId (required)
     * @param  string $folderName folderName (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\Docbox\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Docbox\Model\FolderCreate
     */
    public function folderCreate($parentFolderId, $folderName, string $contentType = self::contentTypes['folderCreate'][0])
    {
        [$response] = $this->folderCreateWithHttpInfo($parentFolderId, $folderName, $contentType);
        return $response;
    }

    /**
     * Operation folderCreateWithHttpInfo
     *
     * Create folder
     *
     * @param  int $parentFolderId (required)
     * @param  string $folderName (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\Docbox\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Docbox\Model\FolderCreate, HTTP status code, HTTP response headers (array of strings)
     */
    public function folderCreateWithHttpInfo($parentFolderId, $folderName, string $contentType = self::contentTypes['folderCreate'][0])
    {
        $request = $this->folderCreateRequest($parentFolderId, $folderName, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    sprintf('[%d] %s', $e->getCode(), $e->getMessage()),
                    (int) $e->getCode(),
                    $e->getResponse() instanceof \Psr\Http\Message\ResponseInterface ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() instanceof \Psr\Http\Message\ResponseInterface ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    sprintf('[%d] %s', $e->getCode(), $e->getMessage()),
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

            if ($statusCode === 200) {
                if (\OpenAPI\Client\Docbox\Model\FolderCreate::class === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException) {
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

                return [
                    ObjectSerializer::deserialize($content, \OpenAPI\Client\Docbox\Model\FolderCreate::class, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            }

            $returnType = \OpenAPI\Client\Docbox\Model\FolderCreate::class;
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException) {
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

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $apiException) {
            if ($apiException->getCode() === 200) {
                $data = ObjectSerializer::deserialize(
                    $apiException->getResponseBody(),
                    \OpenAPI\Client\Docbox\Model\FolderCreate::class,
                    $apiException->getResponseHeaders()
                );
                $apiException->setResponseObject($data);
            }

            throw $apiException;
        }
    }

    /**
     * Operation folderCreateAsync
     *
     * Create folder
     *
     * @param  int $parentFolderId (required)
     * @param  string $folderName (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     */
    public function folderCreateAsync($parentFolderId, $folderName, string $contentType = self::contentTypes['folderCreate'][0]): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->folderCreateAsyncWithHttpInfo($parentFolderId, $folderName, $contentType)
            ->then(
                static fn($response) => $response[0]
            );
    }

    /**
     * Operation folderCreateAsyncWithHttpInfo
     *
     * Create folder
     *
     * @param  int $parentFolderId (required)
     * @param  string $folderName (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     */
    public function folderCreateAsyncWithHttpInfo($parentFolderId, $folderName, string $contentType = self::contentTypes['folderCreate'][0]): \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = \OpenAPI\Client\Docbox\Model\FolderCreate::class;
        $request = $this->folderCreateRequest($parentFolderId, $folderName, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                static function ($response) use ($returnType) : array {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        $content = json_decode($content);
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                static function ($exception) : void {
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
     * @param  int $parentFolderId (required)
     * @param  string $folderName (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['folderCreate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     */
    public function folderCreateRequest($parentFolderId, $folderName, string $contentType = self::contentTypes['folderCreate'][0]): \GuzzleHttp\Psr7\Request
    {

        // verify the required parameter 'parentFolderId' is set
        if ($parentFolderId === null || (is_array($parentFolderId) && $parentFolderId === [])) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $parentFolderId when calling folderCreate'
            );
        }

        // verify the required parameter 'folderName' is set
        if ($folderName === null || (is_array($folderName) && $folderName === [])) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folderName when calling folderCreate'
            );
        }


        $resourcePath = '/folder/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // form params
        $formParams['parent-folder-id'] = ObjectSerializer::toFormValue($parentFolderId);

        // form params
        $formParams['folder-name'] = ObjectSerializer::toFormValue($folderName);

        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
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
            $operationHost . $resourcePath . ($query !== '' && $query !== '0' ? '?' . $query : ''),
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
    protected function createHttpClientOption(): array
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
