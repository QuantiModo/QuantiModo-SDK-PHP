<?php
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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace SwaggerClient;

class VariablesApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * correlationsPost
   *
   * Store or Update a Correlation
   *
   * @param string $cause  (required)
   * @param string $effect  (required)
   * @param string $correlationcoefficient  (required)
   * @param string $vote  (required)
   * @return void
   */
   public function correlationsPost($cause, $effect, $correlationcoefficient, $vote) {
      
      // verify the required parameter 'cause' is set
      if ($cause === null) {
        throw new \InvalidArgumentException('Missing the required parameter $cause when calling correlationsPost');
      }
      
      // verify the required parameter 'effect' is set
      if ($effect === null) {
        throw new \InvalidArgumentException('Missing the required parameter $effect when calling correlationsPost');
      }
      
      // verify the required parameter 'correlationcoefficient' is set
      if ($correlationcoefficient === null) {
        throw new \InvalidArgumentException('Missing the required parameter $correlationcoefficient when calling correlationsPost');
      }
      
      // verify the required parameter 'vote' is set
      if ($vote === null) {
        throw new \InvalidArgumentException('Missing the required parameter $vote when calling correlationsPost');
      }
      

      // parse inputs
      $resourcePath = "/correlations";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($cause !== null) {
        $queryParams['cause'] = $this->apiClient->toQueryValue($cause);
      }// query params
      if($effect !== null) {
        $queryParams['effect'] = $this->apiClient->toQueryValue($effect);
      }// query params
      if($correlationcoefficient !== null) {
        $queryParams['correlationcoefficient'] = $this->apiClient->toQueryValue($correlationcoefficient);
      }// query params
      if($vote !== null) {
        $queryParams['vote'] = $this->apiClient->toQueryValue($vote);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * publicVariablesGet
   *
   * Get public variables
   *
   * @return Variable
   */
   public function publicVariablesGet() {
      

      // parse inputs
      $resourcePath = "/public/variables";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Variable');
      return $responseObject;
  }
  
  /**
   * publicVariablesSearchSearchGet
   *
   * Get top 5 PUBLIC variables with the most correlations
   *
   * @param string $search Search query can be some fraction of a variable name. (required)
   * @param string $effect_or_cause Allows us to specify which column in the `correlations` table will be searched. Choices are effect or cause. (required)
   * @return Variable
   */
   public function publicVariablesSearchSearchGet($search, $effect_or_cause) {
      
      // verify the required parameter 'search' is set
      if ($search === null) {
        throw new \InvalidArgumentException('Missing the required parameter $search when calling publicVariablesSearchSearchGet');
      }
      

      // parse inputs
      $resourcePath = "/public/variables/search/{search}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($effect_or_cause !== null) {
        $queryParams['effectOrCause'] = $this->apiClient->toQueryValue($effect_or_cause);
      }
      
      // path params
      if($search !== null) {
        $resourcePath = str_replace("{" . "search" . "}",
                                    $this->apiClient->toPathValue($search), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Variable');
      return $responseObject;
  }
  
  /**
   * variableCategoriesGet
   *
   * Get variable categories
   *
   * @return array[VariableCategory]
   */
   public function variableCategoriesGet() {
      

      // parse inputs
      $resourcePath = "/variableCategories";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[VariableCategory]');
      return $responseObject;
  }
  
  /**
   * variableUserSettingsPost
   *
   * Update User Settings for a Variable
   *
   * @param VariableUserSettings $sharing_data Variable user settings data (required)
   * @return void
   */
   public function variableUserSettingsPost($sharing_data) {
      
      // verify the required parameter 'sharing_data' is set
      if ($sharing_data === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sharing_data when calling variableUserSettingsPost');
      }
      

      // parse inputs
      $resourcePath = "/variableUserSettings";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($sharing_data)) {
        $_tempBody = $sharing_data;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * variablesGet
   *
   * Get variables by the category name
   *
   * @param int $user_id User id (required)
   * @param string $category_name Category name (required)
   * @return Variable
   */
   public function variablesGet($user_id, $category_name) {
      

      // parse inputs
      $resourcePath = "/variables";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($user_id !== null) {
        $queryParams['userId'] = $this->apiClient->toQueryValue($user_id);
      }// query params
      if($category_name !== null) {
        $queryParams['categoryName'] = $this->apiClient->toQueryValue($category_name);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('basicAuth', 'oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Variable');
      return $responseObject;
  }
  
  /**
   * variablesPost
   *
   * Set variable
   *
   * @param VariablesNew $variable_name Original name for the variable. (required)
   * @return void
   */
   public function variablesPost($variable_name) {
      
      // verify the required parameter 'variable_name' is set
      if ($variable_name === null) {
        throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling variablesPost');
      }
      

      // parse inputs
      $resourcePath = "/variables";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($variable_name)) {
        $_tempBody = $variable_name;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * variablesSearchSearchGet
   *
   * Get variables by search query
   *
   * @param string $search Search query which may be an entire variable name or a fragment of one. (required)
   * @param string $category_name Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. (required)
   * @param string $source Specify a data source name to only return variables from a specific data source. (required)
   * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (required)
   * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (required)
   * @return array[Variable]
   */
   public function variablesSearchSearchGet($search, $category_name, $source, $limit, $offset) {
      
      // verify the required parameter 'search' is set
      if ($search === null) {
        throw new \InvalidArgumentException('Missing the required parameter $search when calling variablesSearchSearchGet');
      }
      

      // parse inputs
      $resourcePath = "/variables/search/{search}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($category_name !== null) {
        $queryParams['categoryName'] = $this->apiClient->toQueryValue($category_name);
      }// query params
      if($source !== null) {
        $queryParams['source'] = $this->apiClient->toQueryValue($source);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }
      
      // path params
      if($search !== null) {
        $resourcePath = str_replace("{" . "search" . "}",
                                    $this->apiClient->toPathValue($search), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[Variable]');
      return $responseObject;
  }
  
  /**
   * variablesVariableNameGet
   *
   * Get info about a variable
   *
   * @param string $variable_name Variable name (required)
   * @return Variable
   */
   public function variablesVariableNameGet($variable_name) {
      
      // verify the required parameter 'variable_name' is set
      if ($variable_name === null) {
        throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling variablesVariableNameGet');
      }
      

      // parse inputs
      $resourcePath = "/variables/{variableName}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      // path params
      if($variable_name !== null) {
        $resourcePath = str_replace("{" . "variableName" . "}",
                                    $this->apiClient->toPathValue($variable_name), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Variable');
      return $responseObject;
  }
  

}