# Swagger\Client\AuthenticationApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2AuthSocialAuthorizeCodeGet**](AuthenticationApi.md#v2AuthSocialAuthorizeCodeGet) | **GET** /v2/auth/social/authorizeCode | Second Step in Social Authentication flow with JWT Token
[**v2AuthSocialAuthorizeTokenGet**](AuthenticationApi.md#v2AuthSocialAuthorizeTokenGet) | **GET** /v2/auth/social/authorizeToken | Native Social Authentication
[**v2AuthSocialLoginGet**](AuthenticationApi.md#v2AuthSocialLoginGet) | **GET** /v2/auth/social/login | First Setp in Social Authentication flow with JWT Token
[**v2Oauth2AccessTokenGet**](AuthenticationApi.md#v2Oauth2AccessTokenGet) | **GET** /v2/oauth2/access_token | Get a user access token
[**v2OauthAuthorizeGet**](AuthenticationApi.md#v2OauthAuthorizeGet) | **GET** /v2/oauth/authorize | Request Authorization Code


# **v2AuthSocialAuthorizeCodeGet**
> v2AuthSocialAuthorizeCodeGet($code, $provider)

Second Step in Social Authentication flow with JWT Token

Here is the flow for how social authentication works with a JWT Token\n\n1.**Client:** The client needs to open popup with social auth url (`https://app/quantimo.do/api/v2/auth/social/login?provider={provider}&redirectUrl={url}`) of server with `provider` and `redirectUrl`. (Url should be registered with our social apps. Facebook and Twitter are fine with any redirect url with the same domain base url but Google needs exact redirect url.)\n\n\n2.**Server:** The QM server will redirect user to that provider to get access.\n\n\n3.**Client:** After successful or failed authentication, it will be redirected to given `redirectUrl` with code or error.\n\n\n4.**Client:** The client needs to get that code and needs to send an Ajax request to server at `https://app.quantimo.do/api/v2/auth/social/authorizeCode?provider={provider}&code={authorizationCode}`\n\n\n5.**Server:** The QM server will authorize that code from the social connection and will authenticate user and will retrieve user info.\n\n\n6.**Server:** The QM server will try to find existing user by unique identity. If the user already exists then it will login. Otherwise, it will create new user and will then login.\n\n\n7.**Server:** Once user is found/created, it will return a JWT token for that user in the response.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$code = "code_example"; // string | Authorization code obtained from the provider.
$provider = "provider_example"; // string | The current options are `google` and `facebook`.

try { 
    $api_instance->v2AuthSocialAuthorizeCodeGet($code, $provider);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v2AuthSocialAuthorizeCodeGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Authorization code obtained from the provider. | 
 **provider** | **string**| The current options are `google` and `facebook`. | 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2AuthSocialAuthorizeTokenGet**
> v2AuthSocialAuthorizeTokenGet($access_token, $provider, $refresh_token)

Native Social Authentication

If you are using native authentication via Facebook or Google SDKs then you should use the following flow.\n\n\n1.**Client:** Using native authentication via your native mobile app, get an access token using the instructions provided by the Facebook SDK (https://developers.facebook.com/docs/facebook-login) or Google (https://developers.google.com/identity/protocols/OAuth2)\n\n\n2.**Client:** Send an Ajax request with provider name and access token on `https://app.quantimo.do/api/v2/auth/social/authorizeToken?provider={provider}&accessToken={accessToken}&refreshToken={refreshToken}` (`refreshToken` is optional)\n\n\n3.**Server:** Server will try to get user info and will find existing user by unique identity. If user exist then it will do a login for that or it will create new user and will do login\n\n\n4.**Server:** Once user is found/created, it will return a JWT token for that user in response\n\n\n5.**Client:** After getting the JWT token to get a QM access token follow these steps and include your JWT token in them as a header (Authorization: Bearer **{yourJWThere}**) or as a url parameter (https://app.quantimo.do/api/v2/oauth/authorize?token={yourJWThere}).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token obtained from Google or FB native SDK
$provider = "provider_example"; // string | The current options are `google` and `facebook`.
$refresh_token = "refresh_token_example"; // string | Optional refresh token obtained from Google or FB native SDK

try { 
    $api_instance->v2AuthSocialAuthorizeTokenGet($access_token, $provider, $refresh_token);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v2AuthSocialAuthorizeTokenGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token obtained from Google or FB native SDK | 
 **provider** | **string**| The current options are `google` and `facebook`. | 
 **refresh_token** | **string**| Optional refresh token obtained from Google or FB native SDK | [optional] 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2AuthSocialLoginGet**
> v2AuthSocialLoginGet($redirect_url, $provider)

First Setp in Social Authentication flow with JWT Token

Here is the flow for how social authentication works with a JWT Token\n\n1.**Client:** The client needs to open popup with social auth url (`https://app/quantimo.do/api/v2/auth/social/login?provider={provider}&redirectUrl={url}`) of server with `provider` and `redirectUrl`. (Url should be registered with our social apps. Facebook and Twitter are fine with any redirect url with the same domain base url but Google needs exact redirect url.)\n\n\n2.**Server:** The QM server will redirect user to that provider to get access.\n\n\n3.**Client:** After successful or failed authentication, it will be redirected to given `redirectUrl` with code or error.\n\n\n4.**Client:** The client needs to get that code and needs to send an Ajax request to server at `https://app.quantimo.do/api/v2/auth/social/authorizeCode?provider={provider}&code={authorizationCode}`\n\n\n5.**Server:** The QM server will authorize that code from the social connection and will authenticate user and will retrieve user info.\n\n\n6.**Server:** The QM server will try to find existing user by unique identity. If the user already exists then it will login. Otherwise, it will create new user and will then login.\n\n\n7.**Server:** Once user is found/created, it will return a JWT token for that user in the response.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$redirect_url = "redirect_url_example"; // string | The redirect URI is the URL within your client application that will receive the OAuth2 credentials. Url should be registered with our social apps. Facebook and Twitter are fine with any redirect url with the same domain base url but Google needs exact redirect url.
$provider = "provider_example"; // string | The current options are `google` and `facebook`.

try { 
    $api_instance->v2AuthSocialLoginGet($redirect_url, $provider);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v2AuthSocialLoginGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redirect_url** | **string**| The redirect URI is the URL within your client application that will receive the OAuth2 credentials. Url should be registered with our social apps. Facebook and Twitter are fine with any redirect url with the same domain base url but Google needs exact redirect url. | 
 **provider** | **string**| The current options are `google` and `facebook`. | 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2Oauth2AccessTokenGet**
> v2Oauth2AccessTokenGet($client_id, $client_secret, $grant_type, $code, $response_type, $scope, $redirect_uri, $state)

Get a user access token

Client provides authorization token obtained from /api/v1/oauth2/authorize to this endpoint and receives an access token. Access token can then be used to query different API endpoints of QuantiModo.\n### Request Access Token\nAfter user approves your access to the given scope form the https:/app.quantimo.do/v2/oauth2/authorize endpoint, you'll recevive an authorization code to request an access token. This time make a `POST` request to `/api/v2/oauth/access_token` with parameters including:\n* `grant_type` Can be `authorization_code` or `refresh_token` since we are getting the `access_token` for the first time we don't have a `refresh_token` so this must be `authorization_code`.\n* `code` Authorization code you received with the previous request.\n* `redirect_uri` Your application's redirect url.\n\n\n\n\n\n\n\n\n### Refreshing Access Token\nAccess tokens expire at some point, to continue using our api you need to refresh them with `refresh_token` you received along with the `access_token`. To do this make a `POST` request to `/api/v2/oauth/access_token` with correct parameters, which are:\n* `grant_type` This time grant type must be `refresh_token` since we have it.\n* `clientId` Your application's client id.\n* `client_secret` Your application's client secret.\n* `refresh_token` The refresh token you received with the `access_token`.\nEvery request you make to this endpoint will give you a new refresh token and make the old one expired. So you can keep getting new access tokens with new refresh tokens.\n### Using Access Token\nCurrently we support 2 ways for this, you can't use both at the same time.\n* Adding access token to the request header as `Authorization: Bearer {access_token}`\n* Adding to the url as a query parameter `?access_token={access_token}`\n\n\n\n\n\n\n\n\nYou can read more about OAuth2 from [here](http://oauth.net/2/)

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$client_id = "client_id_example"; // string | This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by emailing info@quantimo.do.
$client_secret = "client_secret_example"; // string | This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId.
$grant_type = "grant_type_example"; // string | Grant Type can be 'authorization_code' or 'refresh_token'
$code = "code_example"; // string | Authorization code you received with the previous request.
$response_type = "response_type_example"; // string | If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment.
$scope = "scope_example"; // string | Scopes include basic, readmeasurements, and writemeasurements. The \"basic\" scope allows you to read user info (displayname, email, etc). The \"readmeasurements\" scope allows one to read a user's data. The \"writemeasurements\" scope allows you to write user data. Separate multiple scopes by a space.
$redirect_uri = "redirect_uri_example"; // string | The redirect URI is the URL within your client application that will receive the OAuth2 credentials.
$state = "state_example"; // string | An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI

try { 
    $api_instance->v2Oauth2AccessTokenGet($client_id, $client_secret, $grant_type, $code, $response_type, $scope, $redirect_uri, $state);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v2Oauth2AccessTokenGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by emailing info@quantimo.do. | 
 **client_secret** | **string**| This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId. | 
 **grant_type** | **string**| Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; | 
 **code** | **string**| Authorization code you received with the previous request. | 
 **response_type** | **string**| If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. | [optional] 
 **scope** | **string**| Scopes include basic, readmeasurements, and writemeasurements. The \&quot;basic\&quot; scope allows you to read user info (displayname, email, etc). The \&quot;readmeasurements\&quot; scope allows one to read a user&#39;s data. The \&quot;writemeasurements\&quot; scope allows you to write user data. Separate multiple scopes by a space. | [optional] 
 **redirect_uri** | **string**| The redirect URI is the URL within your client application that will receive the OAuth2 credentials. | [optional] 
 **state** | **string**| An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI | [optional] 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2OauthAuthorizeGet**
> v2OauthAuthorizeGet($client_id, $client_secret, $response_type, $scope, $redirect_uri, $state)

Request Authorization Code

You can implement OAuth2 authentication to your application using our **OAuth2** endpoints.  You need to redirect users to `/api/v2/oauth/authorize` endpoint to get an authorization code and include the parameters below.   This page will ask the user if they want to allow a client's application to submit or obtain data from their QM account. It will redirect the user to the url provided by the client application with the code as a query parameter or error in case of an error.\n\n\n\n\nSee the /api/v2/oauth/access_token endpoint for the next steps.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$client_id = "client_id_example"; // string | This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do).
$client_secret = "client_secret_example"; // string | This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId.  Obtain this by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do).
$response_type = "response_type_example"; // string | If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment.
$scope = "scope_example"; // string | Scopes include basic, readmeasurements, and writemeasurements. The \"basic\" scope allows you to read user info (displayname, email, etc). The \"readmeasurements\" scope allows one to read a user's data. The \"writemeasurements\" scope allows you to write user data. Separate multiple scopes by a space.
$redirect_uri = "redirect_uri_example"; // string | The redirect URI is the URL within your client application that will receive the OAuth2 credentials.
$state = "state_example"; // string | An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI

try { 
    $api_instance->v2OauthAuthorizeGet($client_id, $client_secret, $response_type, $scope, $redirect_uri, $state);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v2OauthAuthorizeGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do). | 
 **client_secret** | **string**| This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId.  Obtain this by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do). | 
 **response_type** | **string**| If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. | 
 **scope** | **string**| Scopes include basic, readmeasurements, and writemeasurements. The \&quot;basic\&quot; scope allows you to read user info (displayname, email, etc). The \&quot;readmeasurements\&quot; scope allows one to read a user&#39;s data. The \&quot;writemeasurements\&quot; scope allows you to write user data. Separate multiple scopes by a space. | 
 **redirect_uri** | **string**| The redirect URI is the URL within your client application that will receive the OAuth2 credentials. | [optional] 
 **state** | **string**| An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI | [optional] 

### Return type

void (empty response body)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
