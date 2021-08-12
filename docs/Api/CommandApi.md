# OpenAPI\Client\CommandApi

All URIs are relative to https://localhost:20000/api/4.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommand()**](CommandApi.md#createCommand) | **POST** /commands | Create a custom command
[**deleteCommand()**](CommandApi.md#deleteCommand) | **DELETE** /commands/{command_id} | Delete a custom command
[**getAllCommands()**](CommandApi.md#getAllCommands) | **GET** /commands | Get All Commands
[**updateCommand()**](CommandApi.md#updateCommand) | **PATCH** /commands/{command_id} | Update a custom command


## `createCommand()`

```php
createCommand($command): \OpenAPI\Client\Model\Command
```

Create a custom command

### Create a new command. # Required fields: [:name, :linked_content_id, :linked_content_type] # `linked_content_type` must be one of [\"dashboard\", \"lookml_dashboard\"] #

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$command = new \OpenAPI\Client\Model\Command(); // \OpenAPI\Client\Model\Command | Writable command parameters

try {
    $result = $apiInstance->createCommand($command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->createCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command** | [**\OpenAPI\Client\Model\Command**](../Model/Command.md)| Writable command parameters |

### Return type

[**\OpenAPI\Client\Model\Command**](../Model/Command.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommand()`

```php
deleteCommand($command_id)
```

Delete a custom command

### Delete an existing custom command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$command_id = 56; // int | ID of a command

try {
    $apiInstance->deleteCommand($command_id);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->deleteCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **int**| ID of a command |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCommands()`

```php
getAllCommands($content_id, $content_type, $limit): \OpenAPI\Client\Model\Command[]
```

Get All Commands

### Get All Commands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_id = 'content_id_example'; // string | Id of the associated content. This must be accompanied with content_type.
$content_type = 'content_type_example'; // string | Type of the associated content. This must be accompanied with content_id.
$limit = 56; // int | Number of results to return.

try {
    $result = $apiInstance->getAllCommands($content_id, $content_type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getAllCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **string**| Id of the associated content. This must be accompanied with content_type. | [optional]
 **content_type** | **string**| Type of the associated content. This must be accompanied with content_id. | [optional]
 **limit** | **int**| Number of results to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\Command[]**](../Model/Command.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommand()`

```php
updateCommand($command_id, $update_command): \OpenAPI\Client\Model\Command
```

Update a custom command

### Update an existing custom command. # Optional fields: ['name', 'description'] #

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$command_id = 56; // int | ID of a command
$update_command = new \OpenAPI\Client\Model\UpdateCommand(); // \OpenAPI\Client\Model\UpdateCommand | Re-writable command parameters

try {
    $result = $apiInstance->updateCommand($command_id, $update_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->updateCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **int**| ID of a command |
 **update_command** | [**\OpenAPI\Client\Model\UpdateCommand**](../Model/UpdateCommand.md)| Re-writable command parameters |

### Return type

[**\OpenAPI\Client\Model\Command**](../Model/Command.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
