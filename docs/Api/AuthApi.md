# OpenAPI\Client\AuthApi

All URIs are relative to https://localhost:20000/api/4.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateAppUser()**](AuthApi.md#activateAppUser) | **POST** /oauth_client_apps/{client_guid}/users/{user_id} | Activate OAuth App User
[**allOauthClientApps()**](AuthApi.md#allOauthClientApps) | **GET** /oauth_client_apps | Get All OAuth Client Apps
[**allUserLoginLockouts()**](AuthApi.md#allUserLoginLockouts) | **GET** /user_login_lockouts | Get All User Login Lockouts
[**createEmbedUrlAsMe()**](AuthApi.md#createEmbedUrlAsMe) | **POST** /embed/token_url/me | Create Embed URL
[**createOidcTestConfig()**](AuthApi.md#createOidcTestConfig) | **POST** /oidc_test_configs | Create OIDC Test Configuration
[**createSamlTestConfig()**](AuthApi.md#createSamlTestConfig) | **POST** /saml_test_configs | Create SAML Test Configuration
[**createSsoEmbedUrl()**](AuthApi.md#createSsoEmbedUrl) | **POST** /embed/sso_url | Create SSO Embed Url
[**deactivateAppUser()**](AuthApi.md#deactivateAppUser) | **DELETE** /oauth_client_apps/{client_guid}/users/{user_id} | Deactivate OAuth App User
[**deleteOauthClientApp()**](AuthApi.md#deleteOauthClientApp) | **DELETE** /oauth_client_apps/{client_guid} | Delete OAuth Client App
[**deleteOidcTestConfig()**](AuthApi.md#deleteOidcTestConfig) | **DELETE** /oidc_test_configs/{test_slug} | Delete OIDC Test Configuration
[**deleteSamlTestConfig()**](AuthApi.md#deleteSamlTestConfig) | **DELETE** /saml_test_configs/{test_slug} | Delete SAML Test Configuration
[**deleteUserLoginLockout()**](AuthApi.md#deleteUserLoginLockout) | **DELETE** /user_login_lockout/{key} | Delete User Login Lockout
[**fetchAndParseSamlIdpMetadata()**](AuthApi.md#fetchAndParseSamlIdpMetadata) | **POST** /fetch_and_parse_saml_idp_metadata | Parse SAML IdP Url
[**forcePasswordResetAtNextLoginForAllUsers()**](AuthApi.md#forcePasswordResetAtNextLoginForAllUsers) | **PUT** /password_config/force_password_reset_at_next_login_for_all_users | Force password reset
[**invalidateTokens()**](AuthApi.md#invalidateTokens) | **DELETE** /oauth_client_apps/{client_guid}/tokens | Invalidate Tokens
[**ldapConfig()**](AuthApi.md#ldapConfig) | **GET** /ldap_config | Get LDAP Configuration
[**oauthClientApp()**](AuthApi.md#oauthClientApp) | **GET** /oauth_client_apps/{client_guid} | Get OAuth Client App
[**oidcConfig()**](AuthApi.md#oidcConfig) | **GET** /oidc_config | Get OIDC Configuration
[**oidcTestConfig()**](AuthApi.md#oidcTestConfig) | **GET** /oidc_test_configs/{test_slug} | Get OIDC Test Configuration
[**parseSamlIdpMetadata()**](AuthApi.md#parseSamlIdpMetadata) | **POST** /parse_saml_idp_metadata | Parse SAML IdP XML
[**passwordConfig()**](AuthApi.md#passwordConfig) | **GET** /password_config | Get Password Config
[**registerOauthClientApp()**](AuthApi.md#registerOauthClientApp) | **POST** /oauth_client_apps/{client_guid} | Register OAuth App
[**samlConfig()**](AuthApi.md#samlConfig) | **GET** /saml_config | Get SAML Configuration
[**samlTestConfig()**](AuthApi.md#samlTestConfig) | **GET** /saml_test_configs/{test_slug} | Get SAML Test Configuration
[**searchUserLoginLockouts()**](AuthApi.md#searchUserLoginLockouts) | **GET** /user_login_lockouts/search | Search User Login Lockouts
[**sessionConfig()**](AuthApi.md#sessionConfig) | **GET** /session_config | Get Session Config
[**testLdapConfigAuth()**](AuthApi.md#testLdapConfigAuth) | **PUT** /ldap_config/test_auth | Test LDAP Auth
[**testLdapConfigConnection()**](AuthApi.md#testLdapConfigConnection) | **PUT** /ldap_config/test_connection | Test LDAP Connection
[**testLdapConfigUserAuth()**](AuthApi.md#testLdapConfigUserAuth) | **PUT** /ldap_config/test_user_auth | Test LDAP User Auth
[**testLdapConfigUserInfo()**](AuthApi.md#testLdapConfigUserInfo) | **PUT** /ldap_config/test_user_info | Test LDAP User Info
[**updateLdapConfig()**](AuthApi.md#updateLdapConfig) | **PATCH** /ldap_config | Update LDAP Configuration
[**updateOauthClientApp()**](AuthApi.md#updateOauthClientApp) | **PATCH** /oauth_client_apps/{client_guid} | Update OAuth App
[**updateOidcConfig()**](AuthApi.md#updateOidcConfig) | **PATCH** /oidc_config | Update OIDC Configuration
[**updatePasswordConfig()**](AuthApi.md#updatePasswordConfig) | **PATCH** /password_config | Update Password Config
[**updateSamlConfig()**](AuthApi.md#updateSamlConfig) | **PATCH** /saml_config | Update SAML Configuration
[**updateSessionConfig()**](AuthApi.md#updateSessionConfig) | **PATCH** /session_config | Update Session Config


## `activateAppUser()`

```php
activateAppUser($client_guid, $user_id, $fields): string
```

Activate OAuth App User

### Activate an app for a user  Activates a user for a given oauth client app. This indicates the user has been informed that the app will have access to the user's looker data, and that the user has accepted and allowed the app to use their Looker account.  Activating a user for an app that the user is already activated with returns a success response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of this application
$user_id = 56; // int | The id of the user to enable use of this app
$fields = 'fields_example'; // string | Requested fields.

try {
    $result = $apiInstance->activateAppUser($client_guid, $user_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->activateAppUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of this application |
 **user_id** | **int**| The id of the user to enable use of this app |
 **fields** | **string**| Requested fields. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `allOauthClientApps()`

```php
allOauthClientApps($fields): \OpenAPI\Client\Model\OauthClientApp[]
```

Get All OAuth Client Apps

### List All OAuth Client Apps  Lists all applications registered to use OAuth2 login with this Looker instance, including enabled and disabled apps.  Results are filtered to include only the apps that the caller (current user) has permission to see.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = 'fields_example'; // string | Requested fields.

try {
    $result = $apiInstance->allOauthClientApps($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->allOauthClientApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\OauthClientApp[]**](../Model/OauthClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `allUserLoginLockouts()`

```php
allUserLoginLockouts($fields): \OpenAPI\Client\Model\UserLoginLockout[]
```

Get All User Login Lockouts

### Get currently locked-out users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = 'fields_example'; // string | Include only these fields in the response

try {
    $result = $apiInstance->allUserLoginLockouts($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->allUserLoginLockouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Include only these fields in the response | [optional]

### Return type

[**\OpenAPI\Client\Model\UserLoginLockout[]**](../Model/UserLoginLockout.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmbedUrlAsMe()`

```php
createEmbedUrlAsMe($embed_params): \OpenAPI\Client\Model\EmbedUrlResponse
```

Create Embed URL

### Create an Embed URL  Creates an embed URL that runs as the Looker user making this API call. (\"Embed as me\") This embed URL can then be used to instantiate a Looker embed session in a \"Powered by Looker\" (PBL) web application.  This is similar to Private Embedding (https://docs.looker.com/r/admin/embed/private-embed). Instead of of logging into the Web UI to authenticate, the user has already authenticated against the API to be able to make this call. However, unlike Private Embed where the user has access to any other part of the Looker UI, the embed web session created by requesting the EmbedUrlResponse.url in a browser only has access to content visible under the `/embed` context.  An embed URL can only be used once, and must be used within 5 minutes of being created. After it has been used to request a page from the Looker server, the URL is invalid. Future requests using the same URL will fail. This is to prevent 'replay attacks'.  The `target_url` property must be a complete URL of a Looker Embedded UI page - scheme, hostname, path starting with \"/embed\" and query params. To load a dashboard with id 56 and with a filter of `Date=1 years`, the looker Embed URL would look like `https://myname.looker.com/embed/dashboards/56?Date=1%20years`. The best way to obtain this target_url is to navigate to the desired Looker page in your web browser, copy the URL shown in the browser address bar, insert \"/embed\" after the host/port, and paste it into the `target_url` property as a quoted string value in this API request.  #### Security Note Protect this embed URL as you would an access token or password credentials - do not write it to disk, do not pass it to a third party, and only pass it through a secure HTTPS encrypted transport.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$embed_params = new \OpenAPI\Client\Model\EmbedParams(); // \OpenAPI\Client\Model\EmbedParams | Embed parameters

try {
    $result = $apiInstance->createEmbedUrlAsMe($embed_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->createEmbedUrlAsMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embed_params** | [**\OpenAPI\Client\Model\EmbedParams**](../Model/EmbedParams.md)| Embed parameters |

### Return type

[**\OpenAPI\Client\Model\EmbedUrlResponse**](../Model/EmbedUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOidcTestConfig()`

```php
createOidcTestConfig($oidc_config): \OpenAPI\Client\Model\OIDCConfig
```

Create OIDC Test Configuration

### Create a OIDC test configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oidc_config = new \OpenAPI\Client\Model\OIDCConfig(); // \OpenAPI\Client\Model\OIDCConfig | OIDC test config

try {
    $result = $apiInstance->createOidcTestConfig($oidc_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->createOidcTestConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oidc_config** | [**\OpenAPI\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)| OIDC test config |

### Return type

[**\OpenAPI\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSamlTestConfig()`

```php
createSamlTestConfig($saml_config): \OpenAPI\Client\Model\SamlConfig
```

Create SAML Test Configuration

### Create a SAML test configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$saml_config = new \OpenAPI\Client\Model\SamlConfig(); // \OpenAPI\Client\Model\SamlConfig | SAML test config

try {
    $result = $apiInstance->createSamlTestConfig($saml_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->createSamlTestConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saml_config** | [**\OpenAPI\Client\Model\SamlConfig**](../Model/SamlConfig.md)| SAML test config |

### Return type

[**\OpenAPI\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSsoEmbedUrl()`

```php
createSsoEmbedUrl($embed_sso_params): \OpenAPI\Client\Model\EmbedUrlResponse
```

Create SSO Embed Url

### Create SSO Embed URL  Creates an SSO embed URL and cryptographically signs it with an embed secret. This signed URL can then be used to instantiate a Looker embed session in a PBL web application. Do not make any modifications to this URL - any change may invalidate the signature and cause the URL to fail to load a Looker embed session.  A signed SSO embed URL can only be used once. After it has been used to request a page from the Looker server, the URL is invalid. Future requests using the same URL will fail. This is to prevent 'replay attacks'.  The `target_url` property must be a complete URL of a Looker UI page - scheme, hostname, path and query params. To load a dashboard with id 56 and with a filter of `Date=1 years`, the looker URL would look like `https:/myname.looker.com/dashboards/56?Date=1%20years`. The best way to obtain this target_url is to navigate to the desired Looker page in your web browser, copy the URL shown in the browser address bar and paste it into the `target_url` property as a quoted string value in this API request.  Permissions for the embed user are defined by the groups in which the embed user is a member (group_ids property) and the lists of models and permissions assigned to the embed user. At a minimum, you must provide values for either the group_ids property, or both the models and permissions properties. These properties are additive; an embed user can be a member of certain groups AND be granted access to models and permissions.  The embed user's access is the union of permissions granted by the group_ids, models, and permissions properties.  This function does not strictly require all group_ids, user attribute names, or model names to exist at the moment the SSO embed url is created. Unknown group_id, user attribute names or model names will be passed through to the output URL. To diagnose potential problems with an SSO embed URL, you can copy the signed URL into the Embed URI Validator text box in `<your looker instance>/admin/embed`.  The `secret_id` parameter is optional. If specified, its value must be the id of an active secret defined in the Looker instance. if not specified, the URL will be signed using the newest active secret defined in the Looker instance.  #### Security Note Protect this signed URL as you would an access token or password credentials - do not write it to disk, do not pass it to a third party, and only pass it through a secure HTTPS encrypted transport.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$embed_sso_params = new \OpenAPI\Client\Model\EmbedSsoParams(); // \OpenAPI\Client\Model\EmbedSsoParams | SSO parameters

try {
    $result = $apiInstance->createSsoEmbedUrl($embed_sso_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->createSsoEmbedUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embed_sso_params** | [**\OpenAPI\Client\Model\EmbedSsoParams**](../Model/EmbedSsoParams.md)| SSO parameters |

### Return type

[**\OpenAPI\Client\Model\EmbedUrlResponse**](../Model/EmbedUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateAppUser()`

```php
deactivateAppUser($client_guid, $user_id, $fields): string
```

Deactivate OAuth App User

### Deactivate an app for a user  Deactivate a user for a given oauth client app. All tokens issued to the app for this user will be invalid immediately. Before the user can use the app with their Looker account, the user will have to read and accept an account use disclosure statement for the app.  Admin users can deactivate other users, but non-admin users can only deactivate themselves.  As with most REST DELETE operations, this endpoint does not return an error if the indicated resource (app or user) does not exist or has already been deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of this application
$user_id = 56; // int | The id of the user to enable use of this app
$fields = 'fields_example'; // string | Requested fields.

try {
    $result = $apiInstance->deactivateAppUser($client_guid, $user_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deactivateAppUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of this application |
 **user_id** | **int**| The id of the user to enable use of this app |
 **fields** | **string**| Requested fields. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOauthClientApp()`

```php
deleteOauthClientApp($client_guid): string
```

Delete OAuth Client App

### Delete OAuth Client App  Deletes the registration info of the app with the matching client_guid. All active sessions and tokens issued for this app will immediately become invalid.  ### Note: this deletion cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of this application

try {
    $result = $apiInstance->deleteOauthClientApp($client_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteOauthClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of this application |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOidcTestConfig()`

```php
deleteOidcTestConfig($test_slug): string
```

Delete OIDC Test Configuration

### Delete a OIDC test configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = 'test_slug_example'; // string | Slug of test config

try {
    $result = $apiInstance->deleteOidcTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteOidcTestConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSamlTestConfig()`

```php
deleteSamlTestConfig($test_slug): string
```

Delete SAML Test Configuration

### Delete a SAML test configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = 'test_slug_example'; // string | Slug of test config

try {
    $result = $apiInstance->deleteSamlTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteSamlTestConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserLoginLockout()`

```php
deleteUserLoginLockout($key): string
```

Delete User Login Lockout

### Removes login lockout for the associated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key associated with the locked user

try {
    $result = $apiInstance->deleteUserLoginLockout($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteUserLoginLockout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key associated with the locked user |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchAndParseSamlIdpMetadata()`

```php
fetchAndParseSamlIdpMetadata($body): \OpenAPI\Client\Model\SamlMetadataParseResult
```

Parse SAML IdP Url

### Fetch the given url and parse it as a SAML IdP metadata document and return the result. Note that this requires that the url be public or at least at a location where the Looker instance can fetch it without requiring any special authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | SAML IdP metadata public url

try {
    $result = $apiInstance->fetchAndParseSamlIdpMetadata($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->fetchAndParseSamlIdpMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| SAML IdP metadata public url |

### Return type

[**\OpenAPI\Client\Model\SamlMetadataParseResult**](../Model/SamlMetadataParseResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forcePasswordResetAtNextLoginForAllUsers()`

```php
forcePasswordResetAtNextLoginForAllUsers(): string
```

Force password reset

### Force all credentials_email users to reset their login passwords upon their next login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->forcePasswordResetAtNextLoginForAllUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->forcePasswordResetAtNextLoginForAllUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invalidateTokens()`

```php
invalidateTokens($client_guid): string
```

Invalidate Tokens

### Invalidate All Issued Tokens  Immediately invalidates all auth codes, sessions, access tokens and refresh tokens issued for this app for ALL USERS of this app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of the application

try {
    $result = $apiInstance->invalidateTokens($client_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->invalidateTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of the application |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ldapConfig()`

```php
ldapConfig(): \OpenAPI\Client\Model\LDAPConfig
```

Get LDAP Configuration

### Get the LDAP configuration.  Looker can be optionally configured to authenticate users against an Active Directory or other LDAP directory server. LDAP setup requires coordination with an administrator of that directory server.  Only Looker administrators can read and update the LDAP configuration.  Configuring LDAP impacts authentication for all users. This configuration should be done carefully.  Looker maintains a single LDAP configuration. It can be read and updated.       Updates only succeed if the new state will be valid (in the sense that all required fields are populated);       it is up to you to ensure that the configuration is appropriate and correct).  LDAP is enabled or disabled for Looker using the **enabled** field.  Looker will never return an **auth_password** field. That value can be set, but never retrieved.  See the [Looker LDAP docs](https://www.looker.com/docs/r/api/ldap_setup) for additional information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ldapConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->ldapConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthClientApp()`

```php
oauthClientApp($client_guid, $fields): \OpenAPI\Client\Model\OauthClientApp
```

Get OAuth Client App

### Get Oauth Client App  Returns the registered app client with matching client_guid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of this application
$fields = 'fields_example'; // string | Requested fields.

try {
    $result = $apiInstance->oauthClientApp($client_guid, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->oauthClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of this application |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\OauthClientApp**](../Model/OauthClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oidcConfig()`

```php
oidcConfig(): \OpenAPI\Client\Model\OIDCConfig
```

Get OIDC Configuration

### Get the OIDC configuration.  Looker can be optionally configured to authenticate users against an OpenID Connect (OIDC) authentication server. OIDC setup requires coordination with an administrator of that server.  Only Looker administrators can read and update the OIDC configuration.  Configuring OIDC impacts authentication for all users. This configuration should be done carefully.  Looker maintains a single OIDC configuation. It can be read and updated.       Updates only succeed if the new state will be valid (in the sense that all required fields are populated);       it is up to you to ensure that the configuration is appropriate and correct).  OIDC is enabled or disabled for Looker using the **enabled** field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oidcConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->oidcConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oidcTestConfig()`

```php
oidcTestConfig($test_slug): \OpenAPI\Client\Model\OIDCConfig
```

Get OIDC Test Configuration

### Get a OIDC test configuration by test_slug.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = 'test_slug_example'; // string | Slug of test config

try {
    $result = $apiInstance->oidcTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->oidcTestConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

[**\OpenAPI\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parseSamlIdpMetadata()`

```php
parseSamlIdpMetadata($body): \OpenAPI\Client\Model\SamlMetadataParseResult
```

Parse SAML IdP XML

### Parse the given xml as a SAML IdP metadata document and return the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | SAML IdP metadata xml

try {
    $result = $apiInstance->parseSamlIdpMetadata($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->parseSamlIdpMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| SAML IdP metadata xml |

### Return type

[**\OpenAPI\Client\Model\SamlMetadataParseResult**](../Model/SamlMetadataParseResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `passwordConfig()`

```php
passwordConfig(): \OpenAPI\Client\Model\PasswordConfig
```

Get Password Config

### Get password config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->passwordConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->passwordConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PasswordConfig**](../Model/PasswordConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerOauthClientApp()`

```php
registerOauthClientApp($client_guid, $oauth_client_app, $fields): \OpenAPI\Client\Model\OauthClientApp
```

Register OAuth App

### Register an OAuth2 Client App  Registers details identifying an external web app or native app as an OAuth2 login client of the Looker instance. The app registration must provide a unique client_guid and redirect_uri that the app will present in OAuth login requests. If the client_guid and redirect_uri parameters in the login request do not match the app details registered with the Looker instance, the request is assumed to be a forgery and is rejected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of this application
$oauth_client_app = new \OpenAPI\Client\Model\OauthClientApp(); // \OpenAPI\Client\Model\OauthClientApp | OAuth Client App
$fields = 'fields_example'; // string | Requested fields.

try {
    $result = $apiInstance->registerOauthClientApp($client_guid, $oauth_client_app, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->registerOauthClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of this application |
 **oauth_client_app** | [**\OpenAPI\Client\Model\OauthClientApp**](../Model/OauthClientApp.md)| OAuth Client App |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\OauthClientApp**](../Model/OauthClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `samlConfig()`

```php
samlConfig(): \OpenAPI\Client\Model\SamlConfig
```

Get SAML Configuration

### Get the SAML configuration.  Looker can be optionally configured to authenticate users against a SAML authentication server. SAML setup requires coordination with an administrator of that server.  Only Looker administrators can read and update the SAML configuration.  Configuring SAML impacts authentication for all users. This configuration should be done carefully.  Looker maintains a single SAML configuation. It can be read and updated.       Updates only succeed if the new state will be valid (in the sense that all required fields are populated);       it is up to you to ensure that the configuration is appropriate and correct).  SAML is enabled or disabled for Looker using the **enabled** field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->samlConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->samlConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `samlTestConfig()`

```php
samlTestConfig($test_slug): \OpenAPI\Client\Model\SamlConfig
```

Get SAML Test Configuration

### Get a SAML test configuration by test_slug.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = 'test_slug_example'; // string | Slug of test config

try {
    $result = $apiInstance->samlTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->samlTestConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

[**\OpenAPI\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUserLoginLockouts()`

```php
searchUserLoginLockouts($fields, $page, $per_page, $sorts, $auth_type, $full_name, $email, $remote_id, $filter_or): \OpenAPI\Client\Model\UserLoginLockout[]
```

Search User Login Lockouts

### Search currently locked-out users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = 'fields_example'; // string | Include only these fields in the response
$page = 56; // int | Return only page N of paginated results
$per_page = 56; // int | Return N rows of data per page
$sorts = 'sorts_example'; // string | Fields to sort by.
$auth_type = 'auth_type_example'; // string | Auth type user is locked out for (email, ldap, totp, api)
$full_name = 'full_name_example'; // string | Match name
$email = 'email_example'; // string | Match email
$remote_id = 'remote_id_example'; // string | Match remote LDAP ID
$filter_or = True; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchUserLoginLockouts($fields, $page, $per_page, $sorts, $auth_type, $full_name, $email, $remote_id, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->searchUserLoginLockouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Include only these fields in the response | [optional]
 **page** | **int**| Return only page N of paginated results | [optional]
 **per_page** | **int**| Return N rows of data per page | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **auth_type** | **string**| Auth type user is locked out for (email, ldap, totp, api) | [optional]
 **full_name** | **string**| Match name | [optional]
 **email** | **string**| Match email | [optional]
 **remote_id** | **string**| Match remote LDAP ID | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\OpenAPI\Client\Model\UserLoginLockout[]**](../Model/UserLoginLockout.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionConfig()`

```php
sessionConfig(): \OpenAPI\Client\Model\SessionConfig
```

Get Session Config

### Get session config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->sessionConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->sessionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SessionConfig**](../Model/SessionConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testLdapConfigAuth()`

```php
testLdapConfigAuth($ldap_config): \OpenAPI\Client\Model\LDAPConfigTestResult
```

Test LDAP Auth

### Test the connection authentication settings for an LDAP configuration.  This tests that the connection is possible and that a 'server' account to be used by Looker can       authenticate to the LDAP server given connection and authentication information.  **connection_host**, **connection_port**, and **auth_username**, are required.       **connection_tls** and **auth_password** are optional.  Example: ```json {   \"connection_host\": \"ldap.example.com\",   \"connection_port\": \"636\",   \"connection_tls\": true,   \"auth_username\": \"cn=looker,dc=example,dc=com\",   \"auth_password\": \"secret\" } ```  Looker will never return an **auth_password**. If this request omits the **auth_password** field, then       the **auth_password** value from the active config (if present) will be used for the test.  The active LDAP settings are not modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ldap_config = new \OpenAPI\Client\Model\LDAPConfig(); // \OpenAPI\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigAuth($ldap_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ldap_config** | [**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\OpenAPI\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testLdapConfigConnection()`

```php
testLdapConfigConnection($ldap_config): \OpenAPI\Client\Model\LDAPConfigTestResult
```

Test LDAP Connection

### Test the connection settings for an LDAP configuration.  This tests that the connection is possible given a connection_host and connection_port.  **connection_host** and **connection_port** are required. **connection_tls** is optional.  Example: ```json {   \"connection_host\": \"ldap.example.com\",   \"connection_port\": \"636\",   \"connection_tls\": true } ```  No authentication to the LDAP server is attempted.  The active LDAP settings are not modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ldap_config = new \OpenAPI\Client\Model\LDAPConfig(); // \OpenAPI\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigConnection($ldap_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ldap_config** | [**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\OpenAPI\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testLdapConfigUserAuth()`

```php
testLdapConfigUserAuth($ldap_config): \OpenAPI\Client\Model\LDAPConfigTestResult
```

Test LDAP User Auth

### Test the user authentication settings for an LDAP configuration.  This test accepts a full LDAP configuration along with a username/password pair and attempts to       authenticate the user with the LDAP server. The configuration is validated before attempting the       authentication.  Looker will never return an **auth_password**. If this request omits the **auth_password** field, then       the **auth_password** value from the active config (if present) will be used for the test.  **test_ldap_user** and **test_ldap_password** are required.  The active LDAP settings are not modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ldap_config = new \OpenAPI\Client\Model\LDAPConfig(); // \OpenAPI\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigUserAuth($ldap_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigUserAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ldap_config** | [**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\OpenAPI\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testLdapConfigUserInfo()`

```php
testLdapConfigUserInfo($ldap_config): \OpenAPI\Client\Model\LDAPConfigTestResult
```

Test LDAP User Info

### Test the user authentication settings for an LDAP configuration without authenticating the user.  This test will let you easily test the mapping for user properties and roles for any user without      needing to authenticate as that user.  This test accepts a full LDAP configuration along with a username and attempts to find the full info      for the user from the LDAP server without actually authenticating the user. So, user password is not      required.The configuration is validated before attempting to contact the server.  **test_ldap_user** is required.  The active LDAP settings are not modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ldap_config = new \OpenAPI\Client\Model\LDAPConfig(); // \OpenAPI\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigUserInfo($ldap_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigUserInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ldap_config** | [**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\OpenAPI\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLdapConfig()`

```php
updateLdapConfig($ldap_config): \OpenAPI\Client\Model\LDAPConfig
```

Update LDAP Configuration

### Update the LDAP configuration.  Configuring LDAP impacts authentication for all users. This configuration should be done carefully.  Only Looker administrators can read and update the LDAP configuration.  LDAP is enabled or disabled for Looker using the **enabled** field.  It is **highly** recommended that any LDAP setting changes be tested using the APIs below before being set globally.  See the [Looker LDAP docs](https://www.looker.com/docs/r/api/ldap_setup) for additional information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ldap_config = new \OpenAPI\Client\Model\LDAPConfig(); // \OpenAPI\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->updateLdapConfig($ldap_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateLdapConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ldap_config** | [**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\OpenAPI\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOauthClientApp()`

```php
updateOauthClientApp($client_guid, $oauth_client_app, $fields): \OpenAPI\Client\Model\OauthClientApp
```

Update OAuth App

### Update OAuth2 Client App Details  Modifies the details a previously registered OAuth2 login client app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_guid = 'client_guid_example'; // string | The unique id of this application
$oauth_client_app = new \OpenAPI\Client\Model\OauthClientApp(); // \OpenAPI\Client\Model\OauthClientApp | OAuth Client App
$fields = 'fields_example'; // string | Requested fields.

try {
    $result = $apiInstance->updateOauthClientApp($client_guid, $oauth_client_app, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateOauthClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_guid** | **string**| The unique id of this application |
 **oauth_client_app** | [**\OpenAPI\Client\Model\OauthClientApp**](../Model/OauthClientApp.md)| OAuth Client App |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\OauthClientApp**](../Model/OauthClientApp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOidcConfig()`

```php
updateOidcConfig($oidc_config): \OpenAPI\Client\Model\OIDCConfig
```

Update OIDC Configuration

### Update the OIDC configuration.  Configuring OIDC impacts authentication for all users. This configuration should be done carefully.  Only Looker administrators can read and update the OIDC configuration.  OIDC is enabled or disabled for Looker using the **enabled** field.  It is **highly** recommended that any OIDC setting changes be tested using the APIs below before being set globally.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oidc_config = new \OpenAPI\Client\Model\OIDCConfig(); // \OpenAPI\Client\Model\OIDCConfig | OIDC Config

try {
    $result = $apiInstance->updateOidcConfig($oidc_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateOidcConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oidc_config** | [**\OpenAPI\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)| OIDC Config |

### Return type

[**\OpenAPI\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePasswordConfig()`

```php
updatePasswordConfig($password_config): \OpenAPI\Client\Model\PasswordConfig
```

Update Password Config

### Update password config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password_config = new \OpenAPI\Client\Model\PasswordConfig(); // \OpenAPI\Client\Model\PasswordConfig | Password Config

try {
    $result = $apiInstance->updatePasswordConfig($password_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updatePasswordConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_config** | [**\OpenAPI\Client\Model\PasswordConfig**](../Model/PasswordConfig.md)| Password Config |

### Return type

[**\OpenAPI\Client\Model\PasswordConfig**](../Model/PasswordConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSamlConfig()`

```php
updateSamlConfig($saml_config): \OpenAPI\Client\Model\SamlConfig
```

Update SAML Configuration

### Update the SAML configuration.  Configuring SAML impacts authentication for all users. This configuration should be done carefully.  Only Looker administrators can read and update the SAML configuration.  SAML is enabled or disabled for Looker using the **enabled** field.  It is **highly** recommended that any SAML setting changes be tested using the APIs below before being set globally.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$saml_config = new \OpenAPI\Client\Model\SamlConfig(); // \OpenAPI\Client\Model\SamlConfig | SAML Config

try {
    $result = $apiInstance->updateSamlConfig($saml_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateSamlConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saml_config** | [**\OpenAPI\Client\Model\SamlConfig**](../Model/SamlConfig.md)| SAML Config |

### Return type

[**\OpenAPI\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSessionConfig()`

```php
updateSessionConfig($session_config): \OpenAPI\Client\Model\SessionConfig
```

Update Session Config

### Update session config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_config = new \OpenAPI\Client\Model\SessionConfig(); // \OpenAPI\Client\Model\SessionConfig | Session Config

try {
    $result = $apiInstance->updateSessionConfig($session_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateSessionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_config** | [**\OpenAPI\Client\Model\SessionConfig**](../Model/SessionConfig.md)| Session Config |

### Return type

[**\OpenAPI\Client\Model\SessionConfig**](../Model/SessionConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
