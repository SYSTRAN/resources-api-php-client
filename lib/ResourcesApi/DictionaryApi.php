<?php
/**
 * DictionaryApi
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
 * DictionaryApi Class Doc Comment
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionaryApi
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
     * @return DictionaryApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * resourcesDictionaryAddPost
     *
     * Add dictionary
     *
     * @param \Systran\Client\Model\DictionaryAddBody $input Input with dictionary information (required)
     * @return \Systran\Client\Model\DictionaryAddResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryAddPost($input)
    {
        
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesDictionaryAddPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/add";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
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
                $headerParams, '\Systran\Client\Model\DictionaryAddResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\DictionaryAddResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\DictionaryAddResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryDeletePost
     *
     * Delete a dictionary
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @return void
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryDeletePost($dictionary_id)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryDeletePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/delete";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
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
                $headerParams
            );
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
        
    }
    
    /**
     * resourcesDictionaryEntryAddPost
     *
     * Add an entry
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @param \Systran\Client\Model\EntryAddBody $input Input with dictionary id and entries information (required)
     * @return \Systran\Client\Model\EntryAddResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryEntryAddPost($dictionary_id, $input)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryEntryAddPost');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesDictionaryEntryAddPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/entry/add";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
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
                $headerParams, '\Systran\Client\Model\EntryAddResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\EntryAddResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\EntryAddResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryEntryDeletePost
     *
     * Delete an entry
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @param \Systran\Client\Model\EntryDeleteBody $input Input with dictionary id + entry id (src or tgt) to delete (required)
     * @return \Systran\Client\Model\EntryDeleteResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryEntryDeletePost($dictionary_id, $input)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryEntryDeletePost');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesDictionaryEntryDeletePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/entry/delete";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
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
                $headerParams, '\Systran\Client\Model\EntryDeleteResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\EntryDeleteResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\EntryDeleteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryEntryImportPost
     *
     * Import entries
     *
     * @param string $dictionary_id Id of the dictionary where to import entries (required)
     * @param string $source_lang Source lang of the entries to import (required)
     * @param \SplFileObject $input_file File with entries to import (required)
     * @return \Systran\Client\Model\DictionariesImportResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryEntryImportPost($dictionary_id, $source_lang, $input_file)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryEntryImportPost');
        }
        // verify the required parameter 'source_lang' is set
        if ($source_lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $source_lang when calling resourcesDictionaryEntryImportPost');
        }
        // verify the required parameter 'input_file' is set
        if ($input_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input_file when calling resourcesDictionaryEntryImportPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/entry/import";
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
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('multipart/form-data','application/x-www-form-urlencoded','*/*'));
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
        }// query params
        if ($source_lang !== null) {
            $queryParams['sourceLang'] = $this->apiClient->getSerializer()->toQueryValue($source_lang);
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
                $headerParams, '\Systran\Client\Model\DictionariesImportResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\DictionariesImportResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\DictionariesImportResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryEntryListPost
     *
     * List entries
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @param \Systran\Client\Model\EntriesListFilters $filters Different filters that can be applied to the list functionality (skip/limit/sort/match) (optional)
     * @return \Systran\Client\Model\EntriesListResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryEntryListPost($dictionary_id, $filters=null)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryEntryListPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/entry/list";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($filters)) {
            $_tempBody = $filters;
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
                $headerParams, '\Systran\Client\Model\EntriesListResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\EntriesListResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\EntriesListResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryEntryUpdatePost
     *
     * Update an entry
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @param \Systran\Client\Model\EntryUpdateBody $input Input with dictionary id + entry id (src or tgt) to delete (required)
     * @return \Systran\Client\Model\EntryUpdateResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryEntryUpdatePost($dictionary_id, $input)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryEntryUpdatePost');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesDictionaryEntryUpdatePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/entry/update";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
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
                $headerParams, '\Systran\Client\Model\EntryUpdateResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\EntryUpdateResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\EntryUpdateResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryExportPost
     *
     * Export a dictionary
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @return void
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryExportPost($dictionary_id)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryExportPost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/export";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
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
                $headerParams
            );
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
        
    }
    
    /**
     * resourcesDictionaryListPost
     *
     * List dictionaries
     *
     * @param \Systran\Client\Model\DictionariesListFilters $filters Different filters that can be applied to the list functionality (skip/limit/sort/match) (optional)
     * @return \Systran\Client\Model\DictionariesListResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryListPost($filters=null)
    {
        
  
        // parse inputs
        $resourcePath = "/resources/dictionary/list";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($filters)) {
            $_tempBody = $filters;
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
                $headerParams, '\Systran\Client\Model\DictionariesListResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\DictionariesListResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\DictionariesListResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryLookupGet
     *
     * Lookup
     *
     * @param string $source Language code of the source text (required)
     * @param string $target Language code in which to lookup the source text (required)
     * @param string[] $input Input word (the &#39;input&#39; parameter can be repeated) (required)
     * @param bool $autocomplete With this option, if the input word is not found in the source language, it will be filled in with autocompletion to perform the lookup\n\nDefault: false (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\LookupResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryLookupGet($source, $target, $input, $autocomplete=null, $callback=null)
    {
        
        // verify the required parameter 'source' is set
        if ($source === null) {
            throw new \InvalidArgumentException('Missing the required parameter $source when calling resourcesDictionaryLookupGet');
        }
        // verify the required parameter 'target' is set
        if ($target === null) {
            throw new \InvalidArgumentException('Missing the required parameter $target when calling resourcesDictionaryLookupGet');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesDictionaryLookupGet');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/lookup";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }// query params
        if ($target !== null) {
            $queryParams['target'] = $this->apiClient->getSerializer()->toQueryValue($target);
        }// query params
        if ($input !== null) {
            $queryParams['input'] = $this->apiClient->getSerializer()->toQueryValue($input);
        }// query params
        if ($autocomplete !== null) {
            $queryParams['autocomplete'] = $this->apiClient->getSerializer()->toQueryValue($autocomplete);
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
                $headerParams, '\Systran\Client\Model\LookupResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\LookupResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\LookupResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryLookupSupportedLanguagesGet
     *
     * Lookup Supported Languages
     *
     * @param string $source Language code of the source text (optional)
     * @param string $target Language code into which to translate the source text (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\Model\LookupSupportedLanguageResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryLookupSupportedLanguagesGet($source=null, $target=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/resources/dictionary/lookup/supportedLanguages";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }// query params
        if ($target !== null) {
            $queryParams['target'] = $this->apiClient->getSerializer()->toQueryValue($target);
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
                $headerParams, '\Systran\Client\Model\LookupSupportedLanguageResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\LookupSupportedLanguageResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\LookupSupportedLanguageResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionarySupportedLanguagesGet
     *
     * Supported Languages
     *
     * @return \Systran\Client\Model\SupportedLanguagesResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionarySupportedLanguagesGet()
    {
        
  
        // parse inputs
        $resourcePath = "/resources/dictionary/supportedLanguages";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        
        
  
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
                $headerParams, '\Systran\Client\Model\SupportedLanguagesResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\SupportedLanguagesResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\SupportedLanguagesResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * resourcesDictionaryUpdatePost
     *
     * Update a dictionary
     *
     * @param string $dictionary_id Dictionary Id (required)
     * @param \Systran\Client\Model\DictionaryUpdateBody $input Input with dictionary id (required)
     * @return \Systran\Client\Model\DictionaryUpdateResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function resourcesDictionaryUpdatePost($dictionary_id, $input)
    {
        
        // verify the required parameter 'dictionary_id' is set
        if ($dictionary_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dictionary_id when calling resourcesDictionaryUpdatePost');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling resourcesDictionaryUpdatePost');
        }
  
        // parse inputs
        $resourcePath = "/resources/dictionary/update";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($dictionary_id !== null) {
            $queryParams['dictionaryId'] = $this->apiClient->getSerializer()->toQueryValue($dictionary_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
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
                $headerParams, '\Systran\Client\Model\DictionaryUpdateResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\Model\DictionaryUpdateResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\Model\DictionaryUpdateResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
