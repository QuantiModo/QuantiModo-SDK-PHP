<?php
/**
 * VoteApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
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
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * VoteApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoteApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://app.quantimo.do/api/v2');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return VoteApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * votesGet
     *
     * Get all Votes
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $client_id The ID of the client application which last created or updated this vote (optional)
     * @param int $user_id ID of the user who voted (optional)
     * @param int $cause_id ID of predictor variable (optional)
     * @param int $effect_id ID of outcome variable (optional)
     * @param int $value Value of Vote. 1 is for upvote. 0 is for downvote.  Otherwise, there is no vote. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\InlineResponse20011
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesGet($access_token = null, $client_id = null, $user_id = null, $cause_id = null, $effect_id = null, $value = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->votesGetWithHttpInfo ($access_token, $client_id, $user_id, $cause_id, $effect_id, $value, $created_at, $updated_at, $limit, $offset, $sort);
        return $response; 
    }


    /**
     * votesGetWithHttpInfo
     *
     * Get all Votes
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $client_id The ID of the client application which last created or updated this vote (optional)
     * @param int $user_id ID of the user who voted (optional)
     * @param int $cause_id ID of predictor variable (optional)
     * @param int $effect_id ID of outcome variable (optional)
     * @param int $value Value of Vote. 1 is for upvote. 0 is for downvote.  Otherwise, there is no vote. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20011, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesGetWithHttpInfo($access_token = null, $client_id = null, $user_id = null, $cause_id = null, $effect_id = null, $value = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/votes";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }// query params
        
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }// query params
        
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }// query params
        
        if ($cause_id !== null) {
            $queryParams['cause_id'] = $this->apiClient->getSerializer()->toQueryValue($cause_id);
        }// query params
        
        if ($effect_id !== null) {
            $queryParams['effect_id'] = $this->apiClient->getSerializer()->toQueryValue($effect_id);
        }// query params
        
        if ($value !== null) {
            $queryParams['value'] = $this->apiClient->getSerializer()->toQueryValue($value);
        }// query params
        
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }// query params
        
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20011'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20011', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20011', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * votesPost
     *
     * Store Vote
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Vote $body Vote that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20036
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesPost($access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->votesPostWithHttpInfo ($access_token, $body);
        return $response; 
    }


    /**
     * votesPostWithHttpInfo
     *
     * Store Vote
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Vote $body Vote that should be stored (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20036, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesPostWithHttpInfo($access_token = null, $body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/votes";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20036'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20036', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20036', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * votesIdGet
     *
     * Get Vote
     *
     * @param int $id id of Vote (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse20036
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesIdGet($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->votesIdGetWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * votesIdGetWithHttpInfo
     *
     * Get Vote
     *
     * @param int $id id of Vote (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20036, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling votesIdGet');
        }
  
        // parse inputs
        $resourcePath = "/votes/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20036'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20036', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20036', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * votesIdPut
     *
     * Update Vote
     *
     * @param int $id id of Vote (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Vote $body Vote that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesIdPut($id, $access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->votesIdPutWithHttpInfo ($id, $access_token, $body);
        return $response; 
    }


    /**
     * votesIdPutWithHttpInfo
     *
     * Update Vote
     *
     * @param int $id id of Vote (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Vote $body Vote that should be updated (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling votesIdPut');
        }
  
        // parse inputs
        $resourcePath = "/votes/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * votesIdDelete
     *
     * Delete Vote
     *
     * @param int $id id of Vote (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesIdDelete($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->votesIdDeleteWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * votesIdDeleteWithHttpInfo
     *
     * Delete Vote
     *
     * @param int $id id of Vote (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function votesIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling votesIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/votes/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}