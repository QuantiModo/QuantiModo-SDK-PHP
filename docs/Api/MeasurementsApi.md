# QuantiModo\Client\MeasurementsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMeasurement**](MeasurementsApi.md#deleteMeasurement) | **DELETE** /v3/measurements/delete | Delete a measurement
[**getMeasurements**](MeasurementsApi.md#getMeasurements) | **GET** /v3/measurements | Get measurements for this user
[**getPairs**](MeasurementsApi.md#getPairs) | **GET** /v3/pairs | Get pairs of measurements for correlational analysis
[**measurementExportRequest**](MeasurementsApi.md#measurementExportRequest) | **POST** /v2/measurements/exportRequest | Post Request for Measurements CSV
[**postMeasurements**](MeasurementsApi.md#postMeasurements) | **POST** /v3/measurements/post | Post a new set or update existing measurements to the database
[**updateMeasurement**](MeasurementsApi.md#updateMeasurement) | **POST** /v3/measurements/update | Update a measurement


# **deleteMeasurement**
> \QuantiModo\Client\Model\CommonResponse deleteMeasurement($body)

Delete a measurement

Delete a previously submitted measurement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\MeasurementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\MeasurementDelete(); // \QuantiModo\Client\Model\MeasurementDelete | The startTime and variableId of the measurement to be deleted.

try {
    $result = $apiInstance->deleteMeasurement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->deleteMeasurement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\MeasurementDelete**](../Model/MeasurementDelete.md)| The startTime and variableId of the measurement to be deleted. |

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMeasurements**
> \QuantiModo\Client\Model\Measurement[] getMeasurements($variable_name, $sort, $limit, $offset, $variable_category_name, $updated_at, $user_id, $source_name, $connector_name, $value, $unit_name, $earliest_measurement_time, $latest_measurement_time, $created_at, $id, $grouping_width, $grouping_timezone, $do_not_process, $client_id, $do_not_convert, $min_max_filter, $platform)

Get measurements for this user

Measurements are any value that can be recorded like daily steps, a mood rating, or apples eaten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\MeasurementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variable_name = "variable_name_example"; // string | Name of the variable you want measurements for
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$variable_category_name = "variable_category_name_example"; // string | Ex: Emotions, Treatments, Symptoms...
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$user_id = 8.14; // float | User's id
$source_name = "source_name_example"; // string | ID of the source you want measurements for (supports exact name match only)
$connector_name = "connector_name_example"; // string | Ex: facebook
$value = "value_example"; // string | Value of measurement
$unit_name = "unit_name_example"; // string | Ex: Milligrams
$earliest_measurement_time = "earliest_measurement_time_example"; // string | Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
$latest_measurement_time = "latest_measurement_time_example"; // string | Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$id = 56; // int | Measurement id
$grouping_width = 56; // int | The time (in seconds) over which measurements are grouped together
$grouping_timezone = "grouping_timezone_example"; // string | The time (in seconds) over which measurements are grouped together
$do_not_process = true; // bool | Ex: true
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$do_not_convert = true; // bool | Ex: 1
$min_max_filter = true; // bool | Ex: 1
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getMeasurements($variable_name, $sort, $limit, $offset, $variable_category_name, $updated_at, $user_id, $source_name, $connector_name, $value, $unit_name, $earliest_measurement_time, $latest_measurement_time, $created_at, $id, $grouping_width, $grouping_timezone, $do_not_process, $client_id, $do_not_convert, $min_max_filter, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->getMeasurements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Name of the variable you want measurements for | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **variable_category_name** | **string**| Ex: Emotions, Treatments, Symptoms... | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **source_name** | **string**| ID of the source you want measurements for (supports exact name match only) | [optional]
 **connector_name** | **string**| Ex: facebook | [optional]
 **value** | **string**| Value of measurement | [optional]
 **unit_name** | **string**| Ex: Milligrams | [optional]
 **earliest_measurement_time** | **string**| Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. | [optional]
 **latest_measurement_time** | **string**| Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Measurement id | [optional]
 **grouping_width** | **int**| The time (in seconds) over which measurements are grouped together | [optional]
 **grouping_timezone** | **string**| The time (in seconds) over which measurements are grouped together | [optional]
 **do_not_process** | **bool**| Ex: true | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **do_not_convert** | **bool**| Ex: 1 | [optional]
 **min_max_filter** | **bool**| Ex: 1 | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\Measurement[]**](../Model/Measurement.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPairs**
> \QuantiModo\Client\Model\Pair[] getPairs($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $effect_unit_name, $user_id, $cause_unit_name, $onset_delay, $duration_of_action, $earliest_measurement_time, $latest_measurement_time, $limit, $offset, $sort)

Get pairs of measurements for correlational analysis

Pairs cause measurements with effect measurements grouped over the duration of action after the onset delay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\MeasurementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood
$cause_variable_id = 56; // int | Variable id of the hypothetical predictor variable.  Ex: 1398
$effect_variable_id = 56; // int | Variable id of the outcome variable of interest.  Ex: 1398
$predictor_variable_name = "predictor_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$outcome_variable_name = "outcome_variable_name_example"; // string | Name of the outcome variable of interest.  Ex: Overall Mood
$effect_unit_name = "effect_unit_name_example"; // string | Name for the unit effect measurements to be returned in
$user_id = 8.14; // float | User's id
$cause_unit_name = "cause_unit_name_example"; // string | Name for the unit cause measurements to be returned in
$onset_delay = "onset_delay_example"; // string | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
$duration_of_action = "duration_of_action_example"; // string | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds
$earliest_measurement_time = "earliest_measurement_time_example"; // string | Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
$latest_measurement_time = "latest_measurement_time_example"; // string | Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.

try {
    $result = $apiInstance->getPairs($cause_variable_name, $effect_variable_name, $cause_variable_id, $effect_variable_id, $predictor_variable_name, $outcome_variable_name, $effect_unit_name, $user_id, $cause_unit_name, $onset_delay, $duration_of_action, $earliest_measurement_time, $latest_measurement_time, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->getPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Deprecated: Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Deprecated: Name of the outcome variable of interest.  Ex: Overall Mood | [optional]
 **cause_variable_id** | **int**| Variable id of the hypothetical predictor variable.  Ex: 1398 | [optional]
 **effect_variable_id** | **int**| Variable id of the outcome variable of interest.  Ex: 1398 | [optional]
 **predictor_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **outcome_variable_name** | **string**| Name of the outcome variable of interest.  Ex: Overall Mood | [optional]
 **effect_unit_name** | **string**| Name for the unit effect measurements to be returned in | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **cause_unit_name** | **string**| Name for the unit cause measurements to be returned in | [optional]
 **onset_delay** | **string**| The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional]
 **duration_of_action** | **string**| The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds | [optional]
 **earliest_measurement_time** | **string**| Excluded records with measurement times earlier than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. | [optional]
 **latest_measurement_time** | **string**| Excluded records with measurement times later than this value. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\Pair[]**](../Model/Pair.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **measurementExportRequest**
> int measurementExportRequest($user_id)

Post Request for Measurements CSV

Use this endpoint to schedule a CSV export containing all user measurements to be emailed to the user within 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\MeasurementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 8.14; // float | User's id

try {
    $result = $apiInstance->measurementExportRequest($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->measurementExportRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

**int**

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMeasurements**
> \QuantiModo\Client\Model\PostMeasurementsResponse postMeasurements($body, $user_id)

Post a new set or update existing measurements to the database

You can submit or update multiple measurements in a \"measurements\" sub-array.  If the variable these measurements correspond to does not already exist in the database, it will be automatically added.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\MeasurementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \QuantiModo\Client\Model\MeasurementSet()); // \QuantiModo\Client\Model\MeasurementSet[] | An array of measurement sets containing measurement items you want to insert.
$user_id = 8.14; // float | User's id

try {
    $result = $apiInstance->postMeasurements($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->postMeasurements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\MeasurementSet[]**](../Model/MeasurementSet.md)| An array of measurement sets containing measurement items you want to insert. |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\PostMeasurementsResponse**](../Model/PostMeasurementsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMeasurement**
> \QuantiModo\Client\Model\CommonResponse updateMeasurement($body)

Update a measurement

Update a previously submitted measurement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\MeasurementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\MeasurementUpdate(); // \QuantiModo\Client\Model\MeasurementUpdate | The id as well as the new startTime, note, and/or value of the measurement to be updated

try {
    $result = $apiInstance->updateMeasurement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->updateMeasurement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\MeasurementUpdate**](../Model/MeasurementUpdate.md)| The id as well as the new startTime, note, and/or value of the measurement to be updated |

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

