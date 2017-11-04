<?php
/**
 * RemindersApi
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.100414
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Api;

use \QuantiModo\Client\ApiClient;
use \QuantiModo\Client\ApiException;
use \QuantiModo\Client\Configuration;
use \QuantiModo\Client\ObjectSerializer;

/**
 * RemindersApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RemindersApi
{
    /**
     * API Client
     *
     * @var \QuantiModo\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \QuantiModo\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\QuantiModo\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \QuantiModo\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \QuantiModo\Client\ApiClient $apiClient set the API client
     *
     * @return RemindersApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteTrackingReminder
     *
     * Delete tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderDelete $body Id of reminder to be deleted (required)
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function deleteTrackingReminder($body, $user_id = null)
    {
        list($response) = $this->deleteTrackingReminderWithHttpInfo($body, $user_id);
        return $response;
    }

    /**
     * Operation deleteTrackingReminderWithHttpInfo
     *
     * Delete tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderDelete $body Id of reminder to be deleted (required)
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTrackingReminderWithHttpInfo($body, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling deleteTrackingReminder');
        }
        // parse inputs
        $resourcePath = "/v3/trackingReminders/delete";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\CommonResponse',
                '/v3/trackingReminders/delete'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\CommonResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\CommonResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTrackingReminderNotifications
     *
     * Get specific tracking reminder notifications
     *
     * @param string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param float $user_id User&#39;s id (optional)
     * @param string $created_at When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $variable_category_name Limit results to a specific variable category (optional)
     * @param string $reminder_time Example: (lt)2017-07-31 21:43:26 (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @param bool $only_past Example: 1 (optional)
     * @param bool $include_deleted Example: (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse
     */
    public function getTrackingReminderNotifications($sort = null, $user_id = null, $created_at = null, $updated_at = null, $limit = '100', $offset = null, $variable_category_name = null, $reminder_time = null, $app_name = null, $client_id = null, $only_past = null, $include_deleted = null)
    {
        list($response) = $this->getTrackingReminderNotificationsWithHttpInfo($sort, $user_id, $created_at, $updated_at, $limit, $offset, $variable_category_name, $reminder_time, $app_name, $client_id, $only_past, $include_deleted);
        return $response;
    }

    /**
     * Operation getTrackingReminderNotificationsWithHttpInfo
     *
     * Get specific tracking reminder notifications
     *
     * @param string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param float $user_id User&#39;s id (optional)
     * @param string $created_at When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $variable_category_name Limit results to a specific variable category (optional)
     * @param string $reminder_time Example: (lt)2017-07-31 21:43:26 (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @param bool $only_past Example: 1 (optional)
     * @param bool $include_deleted Example: (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrackingReminderNotificationsWithHttpInfo($sort = null, $user_id = null, $created_at = null, $updated_at = null, $limit = '100', $offset = null, $variable_category_name = null, $reminder_time = null, $app_name = null, $client_id = null, $only_past = null, $include_deleted = null)
    {
        if (!is_null($offset) && ($offset < 0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling RemindersApi.getTrackingReminderNotifications, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/v3/trackingReminderNotifications";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['createdAt'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_name);
        }
        // query params
        if ($reminder_time !== null) {
            $queryParams['reminderTime'] = $this->apiClient->getSerializer()->toQueryValue($reminder_time);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($only_past !== null) {
            $queryParams['onlyPast'] = $this->apiClient->getSerializer()->toQueryValue($only_past);
        }
        // query params
        if ($include_deleted !== null) {
            $queryParams['includeDeleted'] = $this->apiClient->getSerializer()->toQueryValue($include_deleted);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse',
                '/v3/trackingReminderNotifications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTrackingReminders
     *
     * Get repeating tracking reminder settings
     *
     * @param float $user_id User&#39;s id (optional)
     * @param string $variable_category_name Limit results to a specific variable category (optional)
     * @param string $created_at When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @param string $app_version Example: 2.1.1.0 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\TrackingReminderArray
     */
    public function getTrackingReminders($user_id = null, $variable_category_name = null, $created_at = null, $updated_at = null, $limit = '100', $offset = null, $sort = null, $app_name = null, $client_id = null, $app_version = null)
    {
        list($response) = $this->getTrackingRemindersWithHttpInfo($user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort, $app_name, $client_id, $app_version);
        return $response;
    }

    /**
     * Operation getTrackingRemindersWithHttpInfo
     *
     * Get repeating tracking reminder settings
     *
     * @param float $user_id User&#39;s id (optional)
     * @param string $variable_category_name Limit results to a specific variable category (optional)
     * @param string $created_at When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @param string $app_version Example: 2.1.1.0 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\TrackingReminderArray, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrackingRemindersWithHttpInfo($user_id = null, $variable_category_name = null, $created_at = null, $updated_at = null, $limit = '100', $offset = null, $sort = null, $app_name = null, $client_id = null, $app_version = null)
    {
        if (!is_null($offset) && ($offset < 0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling RemindersApi.getTrackingReminders, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/v3/trackingReminders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_name);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['createdAt'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($app_version !== null) {
            $queryParams['appVersion'] = $this->apiClient->getSerializer()->toQueryValue($app_version);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\TrackingReminderArray',
                '/v3/trackingReminders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\TrackingReminderArray', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\TrackingReminderArray', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postTrackingReminderNotifications
     *
     * Snooze, skip, or track a tracking reminder notification
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationPost[] $body Id of the tracking reminder notification to be snoozed (required)
     * @param float $user_id User&#39;s id (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function postTrackingReminderNotifications($body, $user_id = null, $app_name = null, $client_id = null)
    {
        list($response) = $this->postTrackingReminderNotificationsWithHttpInfo($body, $user_id, $app_name, $client_id);
        return $response;
    }

    /**
     * Operation postTrackingReminderNotificationsWithHttpInfo
     *
     * Snooze, skip, or track a tracking reminder notification
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationPost[] $body Id of the tracking reminder notification to be snoozed (required)
     * @param float $user_id User&#39;s id (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTrackingReminderNotificationsWithHttpInfo($body, $user_id = null, $app_name = null, $client_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postTrackingReminderNotifications');
        }
        // parse inputs
        $resourcePath = "/v3/trackingReminderNotifications";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\CommonResponse',
                '/v3/trackingReminderNotifications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\CommonResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\CommonResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postTrackingReminders
     *
     * Store a Tracking Reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderArray $body TrackingReminder that should be stored (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\PostTrackingRemindersResponse
     */
    public function postTrackingReminders($body)
    {
        list($response) = $this->postTrackingRemindersWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postTrackingRemindersWithHttpInfo
     *
     * Store a Tracking Reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderArray $body TrackingReminder that should be stored (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\PostTrackingRemindersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTrackingRemindersWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postTrackingReminders');
        }
        // parse inputs
        $resourcePath = "/v3/trackingReminders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\PostTrackingRemindersResponse',
                '/v3/trackingReminders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\PostTrackingRemindersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\PostTrackingRemindersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
