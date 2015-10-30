<?php
/**
 * CorpusApi
 * PHP version 5
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 *
 * Do not edit the class manually.
 */

namespace Systran\Client;

use \Systran\Client\Configuration;
use \Systran\Client\ApiClient;
use \Systran\Client\ApiException;
use \Systran\Client\ObjectSerializer;

/**
 * CorpusApi Class Doc Comment
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class CorpusApi
{

    /**
     * API Client
     * @var \Systran\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Systran\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost:8903');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Systran\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Systran\Client\ApiClient $apiClient set the API client
     * @return CorpusApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * resourcesCorpusAddPost
     *
     * Add a new corpus
     *
     * @param string $name Corpus name. The name also contains the directories (ex: \&quot;/myproject/firstPass/PersonalCorpus\&quot;) (required)
     * @param string $lang Language code ([details](#description_langage_code_values)) (required)
     * @param string[] $tag Tag for the the corpus (this parameter can be repeated) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusAddResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusAddPost($name, $lang, $tag=null, $callback=null)
    {
        
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling resourcesCorpusAddPost');
        }
        // verify the required parameter 'lang' is set
        if ($lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lang when calling resourcesCorpusAddPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/add";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }// query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusAddResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusAddResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusAddResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusDeletePost
     *
     * Delete corpus
     *
     * @param string[] $corpus_id Corpus identifier (this parameter can be repeated) (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusDeleteResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusDeletePost($corpus_id, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusDeletePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/delete";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusDeleteResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusDeleteResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusDeleteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusDetailsGet
     *
     * Detail corpus
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusDetailResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusDetailsGet($corpus_id, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusDetailsGet');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/details";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusDetailResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusDetailResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusDetailResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusExistsGet
     *
     * Corpus Exists
     *
     * @param string $name Corpus name. The name also contains the directories (ex: \&quot;/myproject/firstPass/PersonalCorpus\&quot;) (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusExistsResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusExistsGet($name, $callback=null)
    {
        
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling resourcesCorpusExistsGet');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/exists";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusExistsResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusExistsResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusExistsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusExportGet
     *
     * Export corpus
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param string $format The expected corpus format (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \SplFileObject
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusExportGet($corpus_id, $format=null, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusExportGet');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/export";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/x-tmx+xml', 'text/bitext'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($format !== null) {
            $queryParams['format'] = $this->apiClient->getSerializer()->toQueryValue($format);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\SplFileObject'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusImportPost
     *
     * Import corpus
     *
     * @param string $name Corpus name. The name also contains the directories (ex: \&quot;/myproject/firstPass/PersonalCorpus\&quot;) (required)
     * @param string $input Content of the existing corpus\n\n**Either `input` or `inputFile` is required** (optional)
     * @param \SplFileObject $input_file Content of the existing corpus\n\n**Either `input` or `inputFile` is required** (optional)
     * @param string $format Format of the input corpus. (optional)
     * @param string[] $tag Tag for the the corpus (this parameter can be repeated) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusImportResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusImportPost($name, $input=null, $input_file=null, $format=null, $tag=null, $callback=null)
    {
        
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling resourcesCorpusImportPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/import";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('','application/x-www-form-urlencoded','*/*'));
  
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($input !== null) {
            $queryParams['input'] = $this->apiClient->getSerializer()->toQueryValue($input);
        }// query params
        if ($format !== null) {
            $queryParams['format'] = $this->apiClient->getSerializer()->toQueryValue($format);
        }// query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        // form params
        if ($input_file !== null) {
            $formParams['inputFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($input_file);
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusImportResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusImportResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusImportResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusListGet
     *
     * List corpora
     *
     * @param string $source_lang Source language code ([details](#description_langage_code_values)) (optional)
     * @param string $target_lang Target language code ([details](#description_langage_code_values)) (optional)
     * @param bool $without_pending Filter out corpora in \&quot;pending\&quot; status (optional)
     * @param bool $without_error Filter out corpora in \&quot;error\&quot; status (optional)
     * @param string $prefix Prefix of the corpus name (optional)
     * @param string $directory If specified, response will return the content of this directory, including corpora and directories. This list can can also be filtered by the prefix parameter. (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusListResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusListGet($source_lang=null, $target_lang=null, $without_pending=null, $without_error=null, $prefix=null, $directory=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/resources/corpus/list";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($source_lang !== null) {
            $queryParams['sourceLang'] = $this->apiClient->getSerializer()->toQueryValue($source_lang);
        }// query params
        if ($target_lang !== null) {
            $queryParams['targetLang'] = $this->apiClient->getSerializer()->toQueryValue($target_lang);
        }// query params
        if ($without_pending !== null) {
            $queryParams['withoutPending'] = $this->apiClient->getSerializer()->toQueryValue($without_pending);
        }// query params
        if ($without_error !== null) {
            $queryParams['withoutError'] = $this->apiClient->getSerializer()->toQueryValue($without_error);
        }// query params
        if ($prefix !== null) {
            $queryParams['prefix'] = $this->apiClient->getSerializer()->toQueryValue($prefix);
        }// query params
        if ($directory !== null) {
            $queryParams['directory'] = $this->apiClient->getSerializer()->toQueryValue($directory);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusListResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusListResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusListResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusMatchGet
     *
     * Corpus Match
     *
     * @param string[] $corpus_id Corpus identifier (this parameter can be repeated) (required)
     * @param string[] $input Text is used to perform the match operation (this parameter can be repeated) (required)
     * @param string $source_lang Source language code ([details](#description_langage_code_values)) (required)
     * @param string $target_lang Target language code ([details](#description_langage_code_values)) (required)
     * @param double $threshold The fuzzy match threshold from which a sentence will be considered as a match result (optional)
     * @param int $limit Limit the number of returned matches. Only first matches within the \&quot;limit\&quot; will be returned (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusMatchResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusMatchGet($corpus_id, $input, $source_lang, $target_lang, $threshold=null, $limit=null, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusMatchGet');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesCorpusMatchGet');
        }
        // verify the required parameter 'source_lang' is set
        if ($source_lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $source_lang when calling resourcesCorpusMatchGet');
        }
        // verify the required parameter 'target_lang' is set
        if ($target_lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $target_lang when calling resourcesCorpusMatchGet');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/match";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($input !== null) {
            $queryParams['input'] = $this->apiClient->getSerializer()->toQueryValue($input);
        }// query params
        if ($source_lang !== null) {
            $queryParams['sourceLang'] = $this->apiClient->getSerializer()->toQueryValue($source_lang);
        }// query params
        if ($target_lang !== null) {
            $queryParams['targetLang'] = $this->apiClient->getSerializer()->toQueryValue($target_lang);
        }// query params
        if ($threshold !== null) {
            $queryParams['threshold'] = $this->apiClient->getSerializer()->toQueryValue($threshold);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusMatchResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusMatchResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusMatchResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusSegmentAddPost
     *
     * Add corpus segments
     *
     * @param \Systran\Client\Model\CorpusSegmentAddRequest $body List of segments to add (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusSegmentAddResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusSegmentAddPost($body, $callback=null)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling resourcesCorpusSegmentAddPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/segment/add";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusSegmentAddResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusSegmentAddResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusSegmentAddResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusSegmentDeletePost
     *
     * Delete corpus segments
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param string[] $seg_id Segment Id (this parameter can be repeated) (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusSegmentDeleteResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusSegmentDeletePost($corpus_id, $seg_id, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusSegmentDeletePost');
        }
        // verify the required parameter 'seg_id' is set
        if ($seg_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seg_id when calling resourcesCorpusSegmentDeletePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/segment/delete";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($seg_id !== null) {
            $queryParams['segId'] = $this->apiClient->getSerializer()->toQueryValue($seg_id);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusSegmentDeleteResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusSegmentDeleteResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusSegmentDeleteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusSegmentListGet
     *
     * List corpus segments
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param int $skip Skip first found segments in the response (optional)
     * @param int $limit Limit the number of returned segments (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusSegmentListResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusSegmentListGet($corpus_id, $skip=null, $limit=null, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusSegmentListGet');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/segment/list";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusSegmentListResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusSegmentListResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusSegmentListResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusSegmentTargetAddPost
     *
     * Add corpus segment targets
     *
     * @param \Systran\Client\Model\CorpusSegmentAddTargetRequest $body List of targets to add (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusSegmentAddTargetResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusSegmentTargetAddPost($body, $callback=null)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling resourcesCorpusSegmentTargetAddPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/segment/target/add";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusSegmentAddTargetResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusSegmentAddTargetResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusSegmentAddTargetResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusSegmentTargetDeletePost
     *
     * Delete corpus segment targets
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param string $seg_id Segment Id (required)
     * @param string[] $target_id Target id (this parameter can be repeated) (required)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusSegmentDeleteTargetResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusSegmentTargetDeletePost($corpus_id, $seg_id, $target_id, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusSegmentTargetDeletePost');
        }
        // verify the required parameter 'seg_id' is set
        if ($seg_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seg_id when calling resourcesCorpusSegmentTargetDeletePost');
        }
        // verify the required parameter 'target_id' is set
        if ($target_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $target_id when calling resourcesCorpusSegmentTargetDeletePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/segment/target/delete";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($seg_id !== null) {
            $queryParams['segId'] = $this->apiClient->getSerializer()->toQueryValue($seg_id);
        }// query params
        if ($target_id !== null) {
            $queryParams['targetId'] = $this->apiClient->getSerializer()->toQueryValue($target_id);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusSegmentDeleteTargetResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusSegmentDeleteTargetResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusSegmentDeleteTargetResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusSegmentUpdatePost
     *
     * Update corpus segment
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param string $seg_id Segment Id (required)
     * @param string $source Source text (optional)
     * @param string $target_id Target id (optional)
     * @param string $target Target text. `targetId` is required if `target` is specified. (optional)
     * @param string $target_lang Target language. `targetId` is required if `targetLang` is specified. (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusSegmentUpdateResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusSegmentUpdatePost($corpus_id, $seg_id, $source=null, $target_id=null, $target=null, $target_lang=null, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusSegmentUpdatePost');
        }
        // verify the required parameter 'seg_id' is set
        if ($seg_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seg_id when calling resourcesCorpusSegmentUpdatePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/segment/update";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($seg_id !== null) {
            $queryParams['segId'] = $this->apiClient->getSerializer()->toQueryValue($seg_id);
        }// query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }// query params
        if ($target_id !== null) {
            $queryParams['targetId'] = $this->apiClient->getSerializer()->toQueryValue($target_id);
        }// query params
        if ($target !== null) {
            $queryParams['target'] = $this->apiClient->getSerializer()->toQueryValue($target);
        }// query params
        if ($target_lang !== null) {
            $queryParams['targetLang'] = $this->apiClient->getSerializer()->toQueryValue($target_lang);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusSegmentUpdateResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusSegmentUpdateResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusSegmentUpdateResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesCorpusUpdatePost
     *
     * Update corpus properties
     *
     * @param string $corpus_id Corpus identifier (required)
     * @param string $name Corpus name. The name also contains the directories (ex: \&quot;/myproject/firstPass/PersonalCorpus\&quot;) (optional)
     * @param string[] $tag Tag for the the corpus (this parameter can be repeated) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\CorpusUpdateResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesCorpusUpdatePost($corpus_id, $name=null, $tag=null, $callback=null)
    {
        
        // verify the required parameter 'corpus_id' is set
        if ($corpus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corpus_id when calling resourcesCorpusUpdatePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/corpus/update";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($corpus_id !== null) {
            $queryParams['corpusId'] = $this->apiClient->getSerializer()->toQueryValue($corpus_id);
        }// query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\Model\CorpusUpdateResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\CorpusUpdateResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\CorpusUpdateResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
