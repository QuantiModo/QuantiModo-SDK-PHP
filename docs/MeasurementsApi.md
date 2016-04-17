# Swagger\Client\MeasurementsApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1MeasurementSourcesGet**](MeasurementsApi.md#v1MeasurementSourcesGet) | **GET** /v1/measurementSources | Get measurement sources
[**v1MeasurementSourcesPost**](MeasurementsApi.md#v1MeasurementSourcesPost) | **POST** /v1/measurementSources | Add a data source
[**v1MeasurementsDailyGet**](MeasurementsApi.md#v1MeasurementsDailyGet) | **GET** /v1/measurements/daily | Get daily measurements for this user
[**v1MeasurementsDeletePost**](MeasurementsApi.md#v1MeasurementsDeletePost) | **POST** /v1/measurements/delete | Delete a measurement
[**v1MeasurementsGet**](MeasurementsApi.md#v1MeasurementsGet) | **GET** /v1/measurements | Get measurements for this user
[**v1MeasurementsPost**](MeasurementsApi.md#v1MeasurementsPost) | **POST** /v1/measurements | Post a new set or update existing measurements to the database
[**v1MeasurementsRangeGet**](MeasurementsApi.md#v1MeasurementsRangeGet) | **GET** /v1/measurementsRange | Get measurements range for this user
[**v2MeasurementsCsvGet**](MeasurementsApi.md#v2MeasurementsCsvGet) | **GET** /v2/measurements/csv | Get Measurements CSV
[**v2MeasurementsIdDelete**](MeasurementsApi.md#v2MeasurementsIdDelete) | **DELETE** /v2/measurements/{id} | Delete Measurement
[**v2MeasurementsIdGet**](MeasurementsApi.md#v2MeasurementsIdGet) | **GET** /v2/measurements/{id} | Get Measurement
[**v2MeasurementsIdPut**](MeasurementsApi.md#v2MeasurementsIdPut) | **PUT** /v2/measurements/{id} | Update Measurement
[**v2MeasurementsRequestCsvPost**](MeasurementsApi.md#v2MeasurementsRequestCsvPost) | **POST** /v2/measurements/request_csv | Post Request for Measurements CSV


# **v1MeasurementSourcesGet**
> \Swagger\Client\Model\MeasurementSource v1MeasurementSourcesGet()

Get measurement sources

Returns a list of all the apps from which measurement data is obtained.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();

try { 
    $result = $api_instance->v1MeasurementSourcesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementSourcesGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MeasurementSource**](MeasurementSource.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1MeasurementSourcesPost**
> v1MeasurementSourcesPost($body, $access_token)

Add a data source

Add a life-tracking app or device to the QuantiModo list of data sources.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$body = new \Swagger\Client\Model\MeasurementSource(); // \Swagger\Client\Model\MeasurementSource | An array of names of data sources you want to add.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $api_instance->v1MeasurementSourcesPost($body, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementSourcesPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MeasurementSource**](\Swagger\Client\Model\MeasurementSource.md)| An array of names of data sources you want to add. | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1MeasurementsDailyGet**
> \Swagger\Client\Model\Measurement v1MeasurementsDailyGet($variable_name, $access_token, $abbreviated_unit_name, $start_time, $end_time, $grouping_width, $grouping_timezone, $limit, $offset, $sort)

Get daily measurements for this user

Measurements are any value that can be recorded like daily steps, a mood rating, or apples eaten. <br>Supported filter parameters:<br><ul><li><b>value</b> - Value of measurement</li><li><b>lastUpdated</b> - The time that this measurement was created or last updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"</li></ul><br>

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$variable_name = "variable_name_example"; // string | Name of the variable you want measurements for
$access_token = "access_token_example"; // string | User's OAuth2 access token
$abbreviated_unit_name = "abbreviated_unit_name_example"; // string | The unit your want the measurements in
$start_time = "start_time_example"; // string | The lower limit of measurements returned (Iso8601)
$end_time = "end_time_example"; // string | The upper limit of measurements returned (Iso8601)
$grouping_width = 56; // int | The time (in seconds) over which measurements are grouped together
$grouping_timezone = "grouping_timezone_example"; // string | The time (in seconds) over which measurements are grouped together
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try { 
    $result = $api_instance->v1MeasurementsDailyGet($variable_name, $access_token, $abbreviated_unit_name, $start_time, $end_time, $grouping_width, $grouping_timezone, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementsDailyGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Name of the variable you want measurements for | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **abbreviated_unit_name** | **string**| The unit your want the measurements in | [optional] 
 **start_time** | **string**| The lower limit of measurements returned (Iso8601) | [optional] 
 **end_time** | **string**| The upper limit of measurements returned (Iso8601) | [optional] 
 **grouping_width** | [**int**](.md)| The time (in seconds) over which measurements are grouped together | [optional] 
 **grouping_timezone** | **string**| The time (in seconds) over which measurements are grouped together | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional] 
 **offset** | [**int**](.md)| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional] 
 **sort** | [**int**](.md)| Sort by given field. If the field is prefixed with `-, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\Measurement**](Measurement.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1MeasurementsDeletePost**
> \Swagger\Client\Model\CommonResponse v1MeasurementsDeletePost($body)

Delete a measurement

Delete a previously submitted measurement

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$body = new \Swagger\Client\Model\MeasurementDelete(); // \Swagger\Client\Model\MeasurementDelete | The startTime and variableId of the measurement to be deleted.

try { 
    $result = $api_instance->v1MeasurementsDeletePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementsDeletePost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MeasurementDelete**](\Swagger\Client\Model\MeasurementDelete.md)| The startTime and variableId of the measurement to be deleted. | 

### Return type

[**\Swagger\Client\Model\CommonResponse**](CommonResponse.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1MeasurementsGet**
> \Swagger\Client\Model\Measurement v1MeasurementsGet($access_token, $variable_name, $source, $value, $last_updated, $unit, $start_time, $created_at, $updated_at, $end_time, $grouping_width, $grouping_timezone, $limit, $offset, $sort)

Get measurements for this user

Measurements are any value that can be recorded like daily steps, a mood rating, or apples eaten. <br>Supported filter parameters:<br><ul><li><b>value</b> - Value of measurement</li><li><b>lastUpdated</b> - The time that this measurement was created or last updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"</li></ul><br>

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$variable_name = "variable_name_example"; // string | Name of the variable you want measurements for
$source = "source_example"; // string | Name of the source you want measurements for (supports exact name match only)
$value = "value_example"; // string | Value of measurement
$last_updated = "last_updated_example"; // string | The time that this measurement was created or last updated in the format \"YYYY-MM-DDThh:mm:ss\"
$unit = "unit_example"; // string | The unit you want the measurements returned in
$start_time = "start_time_example"; // string | The lower limit of measurements returned (Epoch)
$created_at = "created_at_example"; // string | The time the measurement record was first created in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | The time the measurement record was last changed in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local.
$end_time = "end_time_example"; // string | The upper limit of measurements returned (Epoch)
$grouping_width = 56; // int | The time (in seconds) over which measurements are grouped together
$grouping_timezone = "grouping_timezone_example"; // string | The time (in seconds) over which measurements are grouped together
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try { 
    $result = $api_instance->v1MeasurementsGet($access_token, $variable_name, $source, $value, $last_updated, $unit, $start_time, $created_at, $updated_at, $end_time, $grouping_width, $grouping_timezone, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementsGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **variable_name** | **string**| Name of the variable you want measurements for | [optional] 
 **source** | **string**| Name of the source you want measurements for (supports exact name match only) | [optional] 
 **value** | **string**| Value of measurement | [optional] 
 **last_updated** | **string**| The time that this measurement was created or last updated in the format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional] 
 **unit** | **string**| The unit you want the measurements returned in | [optional] 
 **start_time** | **string**| The lower limit of measurements returned (Epoch) | [optional] 
 **created_at** | **string**| The time the measurement record was first created in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local. | [optional] 
 **updated_at** | **string**| The time the measurement record was last changed in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local. | [optional] 
 **end_time** | **string**| The upper limit of measurements returned (Epoch) | [optional] 
 **grouping_width** | [**int**](.md)| The time (in seconds) over which measurements are grouped together | [optional] 
 **grouping_timezone** | **string**| The time (in seconds) over which measurements are grouped together | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional] 
 **offset** | [**int**](.md)| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional] 
 **sort** | [**int**](.md)| Sort by given field. If the field is prefixed with `-, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\Measurement**](Measurement.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1MeasurementsPost**
> v1MeasurementsPost($body, $access_token)

Post a new set or update existing measurements to the database

You can submit or update multiple measurements in a \"measurements\" sub-array.  If the variable these measurements correspond to does not already exist in the database, it will be automatically added.  The request body should look something like [{\"measurements\":[{\"startTime\":1439389320,\"value\":\"3\"}, {\"startTime\":1439389319,\"value\":\"2\"}],\"name\":\"Acne (out of 5)\",\"source\":\"QuantiModo\",\"category\":\"Symptoms\",\"combinationOperation\":\"MEAN\",\"unit\":\"/5\"}]

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$body = new \Swagger\Client\Model\MeasurementSet(); // \Swagger\Client\Model\MeasurementSet | An array of measurements you want to insert.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $api_instance->v1MeasurementsPost($body, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementsPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MeasurementSet**](\Swagger\Client\Model\MeasurementSet.md)| An array of measurements you want to insert. | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1MeasurementsRangeGet**
> \Swagger\Client\Model\MeasurementRange v1MeasurementsRangeGet($sources, $user)

Get measurements range for this user

Get Unix time-stamp (epoch time) of the user's first and last measurements taken.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$sources = "sources_example"; // string | Enter source name to limit to specific source (varchar)
$user = 56; // int | If not specified, uses currently logged in user (bigint)

try { 
    $result = $api_instance->v1MeasurementsRangeGet($sources, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v1MeasurementsRangeGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sources** | **string**| Enter source name to limit to specific source (varchar) | [optional] 
 **user** | [**int**](.md)| If not specified, uses currently logged in user (bigint) | [optional] 

### Return type

[**\Swagger\Client\Model\MeasurementRange**](MeasurementRange.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2MeasurementsCsvGet**
> \SplFileObject v2MeasurementsCsvGet($access_token)

Get Measurements CSV

Download a CSV containing all user measurements

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $result = $api_instance->v2MeasurementsCsvGet($access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v2MeasurementsCsvGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Authorization

[quantimodo_oauth2](../README.md#quantimodo_oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2MeasurementsIdDelete**
> \Swagger\Client\Model\InlineResponse20012 v2MeasurementsIdDelete($id, $access_token)

Delete Measurement

Delete Measurement

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$id = 56; // int | id of Measurement
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $result = $api_instance->v2MeasurementsIdDelete($id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v2MeasurementsIdDelete: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](.md)| id of Measurement | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](InlineResponse20012.md)

### Authorization

[quantimodo_oauth2](../README.md#quantimodo_oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2MeasurementsIdGet**
> \Swagger\Client\Model\InlineResponse20011 v2MeasurementsIdGet($id, $access_token)

Get Measurement

Get Measurement

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$id = 56; // int | id of Measurement
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $result = $api_instance->v2MeasurementsIdGet($id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v2MeasurementsIdGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](.md)| id of Measurement | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](InlineResponse20011.md)

### Authorization

[quantimodo_oauth2](../README.md#quantimodo_oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2MeasurementsIdPut**
> \Swagger\Client\Model\InlineResponse20012 v2MeasurementsIdPut($id, $access_token, $body)

Update Measurement

Update Measurement

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$id = 56; // int | id of Measurement
$access_token = "access_token_example"; // string | User's OAuth2 access token
$body = new \Swagger\Client\Model\Measurement(); // \Swagger\Client\Model\Measurement | Measurement that should be updated

try { 
    $result = $api_instance->v2MeasurementsIdPut($id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v2MeasurementsIdPut: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int**](.md)| id of Measurement | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **body** | [**\Swagger\Client\Model\Measurement**](\Swagger\Client\Model\Measurement.md)| Measurement that should be updated | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](InlineResponse20012.md)

### Authorization

[quantimodo_oauth2](../README.md#quantimodo_oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2MeasurementsRequestCsvPost**
> int v2MeasurementsRequestCsvPost($access_token)

Post Request for Measurements CSV

Use this endpoint to schedule a CSV export containing all user measurements to be emailed to the user within 24 hours.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MeasurementsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $result = $api_instance->v2MeasurementsRequestCsvPost($access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementsApi->v2MeasurementsRequestCsvPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

**int**

### Authorization

[quantimodo_oauth2](../README.md#quantimodo_oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
