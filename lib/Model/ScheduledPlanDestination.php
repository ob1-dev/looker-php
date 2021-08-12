<?php
/**
 * ScheduledPlanDestination
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
 * ScheduledPlanDestination Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduledPlanDestination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledPlanDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'scheduled_plan_id' => 'int',
        'format' => 'string',
        'apply_formatting' => 'bool',
        'apply_vis' => 'bool',
        'address' => 'string',
        'looker_recipient' => 'bool',
        'type' => 'string',
        'parameters' => 'string',
        'secret_parameters' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'scheduled_plan_id' => 'int64',
        'format' => null,
        'apply_formatting' => null,
        'apply_vis' => null,
        'address' => null,
        'looker_recipient' => null,
        'type' => null,
        'parameters' => null,
        'secret_parameters' => null,
        'message' => null
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
        'id' => 'id',
        'scheduled_plan_id' => 'scheduled_plan_id',
        'format' => 'format',
        'apply_formatting' => 'apply_formatting',
        'apply_vis' => 'apply_vis',
        'address' => 'address',
        'looker_recipient' => 'looker_recipient',
        'type' => 'type',
        'parameters' => 'parameters',
        'secret_parameters' => 'secret_parameters',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'scheduled_plan_id' => 'setScheduledPlanId',
        'format' => 'setFormat',
        'apply_formatting' => 'setApplyFormatting',
        'apply_vis' => 'setApplyVis',
        'address' => 'setAddress',
        'looker_recipient' => 'setLookerRecipient',
        'type' => 'setType',
        'parameters' => 'setParameters',
        'secret_parameters' => 'setSecretParameters',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'scheduled_plan_id' => 'getScheduledPlanId',
        'format' => 'getFormat',
        'apply_formatting' => 'getApplyFormatting',
        'apply_vis' => 'getApplyVis',
        'address' => 'getAddress',
        'looker_recipient' => 'getLookerRecipient',
        'type' => 'getType',
        'parameters' => 'getParameters',
        'secret_parameters' => 'getSecretParameters',
        'message' => 'getMessage'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['scheduled_plan_id'] = $data['scheduled_plan_id'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['apply_formatting'] = $data['apply_formatting'] ?? null;
        $this->container['apply_vis'] = $data['apply_vis'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['looker_recipient'] = $data['looker_recipient'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['secret_parameters'] = $data['secret_parameters'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
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
     * @param int|null $id Unique Id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets scheduled_plan_id
     *
     * @return int|null
     */
    public function getScheduledPlanId()
    {
        return $this->container['scheduled_plan_id'];
    }

    /**
     * Sets scheduled_plan_id
     *
     * @param int|null $scheduled_plan_id Id of a scheduled plan you own
     *
     * @return self
     */
    public function setScheduledPlanId($scheduled_plan_id)
    {
        $this->container['scheduled_plan_id'] = $scheduled_plan_id;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format The data format to send to the given destination. Supported formats vary by destination, but include: \"txt\", \"csv\", \"inline_json\", \"json\", \"json_detail\", \"xlsx\", \"html\", \"wysiwyg_pdf\", \"assembled_pdf\", \"wysiwyg_png\"
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets apply_formatting
     *
     * @return bool|null
     */
    public function getApplyFormatting()
    {
        return $this->container['apply_formatting'];
    }

    /**
     * Sets apply_formatting
     *
     * @param bool|null $apply_formatting Are values formatted? (containing currency symbols, digit separators, etc.
     *
     * @return self
     */
    public function setApplyFormatting($apply_formatting)
    {
        $this->container['apply_formatting'] = $apply_formatting;

        return $this;
    }

    /**
     * Gets apply_vis
     *
     * @return bool|null
     */
    public function getApplyVis()
    {
        return $this->container['apply_vis'];
    }

    /**
     * Sets apply_vis
     *
     * @param bool|null $apply_vis Whether visualization options are applied to the results.
     *
     * @return self
     */
    public function setApplyVis($apply_vis)
    {
        $this->container['apply_vis'] = $apply_vis;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address for recipient. For email e.g. 'user@example.com'. For webhooks e.g. 'https://domain/path'. For Amazon S3 e.g. 's3://bucket-name/path/'. For SFTP e.g. 'sftp://host-name/path/'.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets looker_recipient
     *
     * @return bool|null
     */
    public function getLookerRecipient()
    {
        return $this->container['looker_recipient'];
    }

    /**
     * Sets looker_recipient
     *
     * @param bool|null $looker_recipient Whether the recipient is a Looker user on the current instance (only applicable for email recipients)
     *
     * @return self
     */
    public function setLookerRecipient($looker_recipient)
    {
        $this->container['looker_recipient'] = $looker_recipient;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the address ('email', 'webhook', 's3', or 'sftp')
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return string|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param string|null $parameters JSON object containing parameters for external scheduling. For Amazon S3, this requires keys and values for access_key_id and region. For SFTP, this requires a key and value for username.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets secret_parameters
     *
     * @return string|null
     */
    public function getSecretParameters()
    {
        return $this->container['secret_parameters'];
    }

    /**
     * Sets secret_parameters
     *
     * @param string|null $secret_parameters (Write-Only) JSON object containing secret parameters for external scheduling. For Amazon S3, this requires a key and value for secret_access_key. For SFTP, this requires a key and value for password.
     *
     * @return self
     */
    public function setSecretParameters($secret_parameters)
    {
        $this->container['secret_parameters'] = $secret_parameters;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Optional message to be included in scheduled emails
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


