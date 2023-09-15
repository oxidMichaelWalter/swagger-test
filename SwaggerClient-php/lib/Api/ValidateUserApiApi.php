<?php
/**
 * ValidateUserApiApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UMAS API PROD
 *
 * These are UMAS published API availble for third party system consumption.
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.47-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * ValidateUserApiApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValidateUserApiApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation validateUserAndOrg
     *
     * Check if a user belongs to a given organization. i.e. the organization with the given organizationId MUST be the users home org with the given userId.
     *
     * @param  string $requester_id Name of the application which is calling the API, e.g. B2B. This is a freetext field. (required)
     * @param  string $user_id User id from which user will validate (required)
     * @param  string $gs_id gssnId from which validate the organisation corresponding user (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function validateUserAndOrg($requester_id, $user_id, $gs_id)
    {
        $this->validateUserAndOrgWithHttpInfo($requester_id, $user_id, $gs_id);
    }

    /**
     * Operation validateUserAndOrgWithHttpInfo
     *
     * Check if a user belongs to a given organization. i.e. the organization with the given organizationId MUST be the users home org with the given userId.
     *
     * @param  string $requester_id Name of the application which is calling the API, e.g. B2B. This is a freetext field. (required)
     * @param  string $user_id User id from which user will validate (required)
     * @param  string $gs_id gssnId from which validate the organisation corresponding user (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateUserAndOrgWithHttpInfo($requester_id, $user_id, $gs_id)
    {
        $returnType = '';
        $request = $this->validateUserAndOrgRequest($requester_id, $user_id, $gs_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation validateUserAndOrgAsync
     *
     * Check if a user belongs to a given organization. i.e. the organization with the given organizationId MUST be the users home org with the given userId.
     *
     * @param  string $requester_id Name of the application which is calling the API, e.g. B2B. This is a freetext field. (required)
     * @param  string $user_id User id from which user will validate (required)
     * @param  string $gs_id gssnId from which validate the organisation corresponding user (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateUserAndOrgAsync($requester_id, $user_id, $gs_id)
    {
        return $this->validateUserAndOrgAsyncWithHttpInfo($requester_id, $user_id, $gs_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation validateUserAndOrgAsyncWithHttpInfo
     *
     * Check if a user belongs to a given organization. i.e. the organization with the given organizationId MUST be the users home org with the given userId.
     *
     * @param  string $requester_id Name of the application which is calling the API, e.g. B2B. This is a freetext field. (required)
     * @param  string $user_id User id from which user will validate (required)
     * @param  string $gs_id gssnId from which validate the organisation corresponding user (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateUserAndOrgAsyncWithHttpInfo($requester_id, $user_id, $gs_id)
    {
        $returnType = '';
        $request = $this->validateUserAndOrgRequest($requester_id, $user_id, $gs_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'validateUserAndOrg'
     *
     * @param  string $requester_id Name of the application which is calling the API, e.g. B2B. This is a freetext field. (required)
     * @param  string $user_id User id from which user will validate (required)
     * @param  string $gs_id gssnId from which validate the organisation corresponding user (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function validateUserAndOrgRequest($requester_id, $user_id, $gs_id)
    {
        // verify the required parameter 'requester_id' is set
        if ($requester_id === null || (is_array($requester_id) && count($requester_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $requester_id when calling validateUserAndOrg'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling validateUserAndOrg'
            );
        }
        // verify the required parameter 'gs_id' is set
        if ($gs_id === null || (is_array($gs_id) && count($gs_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $gs_id when calling validateUserAndOrg'
            );
        }

        $resourcePath = '/validate/{requesterId}/{userId}/{gsId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($requester_id !== null) {
            $resourcePath = str_replace(
                '{' . 'requesterId' . '}',
                ObjectSerializer::toPathValue($requester_id),
                $resourcePath
            );
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($gs_id !== null) {
            $resourcePath = str_replace(
                '{' . 'gsId' . '}',
                ObjectSerializer::toPathValue($gs_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
