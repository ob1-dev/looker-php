<?php
/**
 * Datagroup
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Looker API 4.0 (Experimental) Reference
 *
 * Welcome to the future! API 4.0 co-exists with APIs 3.1 and 3.0. (3.0 should no longer be used.) We've tagged 4.0 as \"experimental\" to indicate work still planned for API 4.0 may include breaking changes. Please pardon our dust while we remodel a few rooms!  ### Authorization  The classic method of API authorization uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs. It is a replacement for the 'api-docs' page currently provided on Looker instances.  For details, see the [API Explorer documentation](https://looker.com/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://looker.com/docs/r/api/versioning).   ### In This Release  API 4.0 version was introduced so we can make adjustments to API functions, parameters, and response types to fix bugs and inconsistencies. These changes fall outside the bounds of non-breaking additive changes we can make to our stable API 3.1.  One benefit of these type adjustments in API 4.0 is dramatically better support for strongly typed languages like TypeScript, Kotlin, Swift, Go, C#, and more.  While API 3.1 is still the de-facto Looker API (\"current\", \"stable\", \"default\", etc), the bulk of our development activity has shifted to API 4.0, where all new features are added.  The API Explorer can be used to [interactively compare](https://looker.com/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.
 *
 * The version of the OpenAPI document: 4.0.21.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Datagroup Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Datagroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Datagroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can' => 'array<string,bool>',
        'created_at' => 'int',
        'id' => 'int',
        'model_name' => 'string',
        'name' => 'string',
        'stale_before' => 'int',
        'trigger_check_at' => 'int',
        'trigger_error' => 'string',
        'trigger_value' => 'string',
        'triggered_at' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'can' => null,
        'created_at' => 'int64',
        'id' => 'int64',
        'model_name' => null,
        'name' => null,
        'stale_before' => 'int64',
        'trigger_check_at' => 'int64',
        'trigger_error' => null,
        'trigger_value' => null,
        'triggered_at' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'can' => 'can',
        'created_at' => 'created_at',
        'id' => 'id',
        'model_name' => 'model_name',
        'name' => 'name',
        'stale_before' => 'stale_before',
        'trigger_check_at' => 'trigger_check_at',
        'trigger_error' => 'trigger_error',
        'trigger_value' => 'trigger_value',
        'triggered_at' => 'triggered_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'created_at' => 'setCreatedAt',
        'id' => 'setId',
        'model_name' => 'setModelName',
        'name' => 'setName',
        'stale_before' => 'setStaleBefore',
        'trigger_check_at' => 'setTriggerCheckAt',
        'trigger_error' => 'setTriggerError',
        'trigger_value' => 'setTriggerValue',
        'triggered_at' => 'setTriggeredAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'created_at' => 'getCreatedAt',
        'id' => 'getId',
        'model_name' => 'getModelName',
        'name' => 'getName',
        'stale_before' => 'getStaleBefore',
        'trigger_check_at' => 'getTriggerCheckAt',
        'trigger_error' => 'getTriggerError',
        'trigger_value' => 'getTriggerValue',
        'triggered_at' => 'getTriggeredAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['can'] = $data['can'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['model_name'] = $data['model_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['stale_before'] = $data['stale_before'] ?? null;
        $this->container['trigger_check_at'] = $data['trigger_check_at'] ?? null;
        $this->container['trigger_error'] = $data['trigger_error'] ?? null;
        $this->container['trigger_value'] = $data['trigger_value'] ?? null;
        $this->container['triggered_at'] = $data['triggered_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets can
     *
     * @return array<string,bool>|null
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param array<string,bool>|null $can Operations the current user is able to perform on this object
     *
     * @return self
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at UNIX timestamp at which this entry was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique ID of the datagroup
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string|null $model_name Name of the model containing the datagroup. Unique when combined with name.
     *
     * @return self
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the datagroup. Unique when combined with model_name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets stale_before
     *
     * @return int|null
     */
    public function getStaleBefore()
    {
        return $this->container['stale_before'];
    }

    /**
     * Sets stale_before
     *
     * @param int|null $stale_before UNIX timestamp before which cache entries are considered stale. Cannot be in the future.
     *
     * @return self
     */
    public function setStaleBefore($stale_before)
    {
        $this->container['stale_before'] = $stale_before;

        return $this;
    }

    /**
     * Gets trigger_check_at
     *
     * @return int|null
     */
    public function getTriggerCheckAt()
    {
        return $this->container['trigger_check_at'];
    }

    /**
     * Sets trigger_check_at
     *
     * @param int|null $trigger_check_at UNIX timestamp at which this entry trigger was last checked.
     *
     * @return self
     */
    public function setTriggerCheckAt($trigger_check_at)
    {
        $this->container['trigger_check_at'] = $trigger_check_at;

        return $this;
    }

    /**
     * Gets trigger_error
     *
     * @return string|null
     */
    public function getTriggerError()
    {
        return $this->container['trigger_error'];
    }

    /**
     * Sets trigger_error
     *
     * @param string|null $trigger_error The message returned with the error of the last trigger check.
     *
     * @return self
     */
    public function setTriggerError($trigger_error)
    {
        $this->container['trigger_error'] = $trigger_error;

        return $this;
    }

    /**
     * Gets trigger_value
     *
     * @return string|null
     */
    public function getTriggerValue()
    {
        return $this->container['trigger_value'];
    }

    /**
     * Sets trigger_value
     *
     * @param string|null $trigger_value The value of the trigger when last checked.
     *
     * @return self
     */
    public function setTriggerValue($trigger_value)
    {
        $this->container['trigger_value'] = $trigger_value;

        return $this;
    }

    /**
     * Gets triggered_at
     *
     * @return int|null
     */
    public function getTriggeredAt()
    {
        return $this->container['triggered_at'];
    }

    /**
     * Sets triggered_at
     *
     * @param int|null $triggered_at UNIX timestamp at which this entry became triggered. Cannot be in the future.
     *
     * @return self
     */
    public function setTriggeredAt($triggered_at)
    {
        $this->container['triggered_at'] = $triggered_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

