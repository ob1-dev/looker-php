<?php
/**
 * SshServer
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
 * SshServer Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SshServer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SshServer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ssh_server_id' => 'string',
        'ssh_server_name' => 'string',
        'ssh_server_host' => 'string',
        'ssh_server_port' => 'int',
        'ssh_server_user' => 'string',
        'finger_print' => 'string',
        'sha_finger_print' => 'string',
        'public_key' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ssh_server_id' => null,
        'ssh_server_name' => null,
        'ssh_server_host' => null,
        'ssh_server_port' => 'int64',
        'ssh_server_user' => null,
        'finger_print' => null,
        'sha_finger_print' => null,
        'public_key' => null,
        'status' => null
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
        'ssh_server_id' => 'ssh_server_id',
        'ssh_server_name' => 'ssh_server_name',
        'ssh_server_host' => 'ssh_server_host',
        'ssh_server_port' => 'ssh_server_port',
        'ssh_server_user' => 'ssh_server_user',
        'finger_print' => 'finger_print',
        'sha_finger_print' => 'sha_finger_print',
        'public_key' => 'public_key',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ssh_server_id' => 'setSshServerId',
        'ssh_server_name' => 'setSshServerName',
        'ssh_server_host' => 'setSshServerHost',
        'ssh_server_port' => 'setSshServerPort',
        'ssh_server_user' => 'setSshServerUser',
        'finger_print' => 'setFingerPrint',
        'sha_finger_print' => 'setShaFingerPrint',
        'public_key' => 'setPublicKey',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ssh_server_id' => 'getSshServerId',
        'ssh_server_name' => 'getSshServerName',
        'ssh_server_host' => 'getSshServerHost',
        'ssh_server_port' => 'getSshServerPort',
        'ssh_server_user' => 'getSshServerUser',
        'finger_print' => 'getFingerPrint',
        'sha_finger_print' => 'getShaFingerPrint',
        'public_key' => 'getPublicKey',
        'status' => 'getStatus'
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
        $this->container['ssh_server_id'] = $data['ssh_server_id'] ?? null;
        $this->container['ssh_server_name'] = $data['ssh_server_name'] ?? null;
        $this->container['ssh_server_host'] = $data['ssh_server_host'] ?? null;
        $this->container['ssh_server_port'] = $data['ssh_server_port'] ?? null;
        $this->container['ssh_server_user'] = $data['ssh_server_user'] ?? null;
        $this->container['finger_print'] = $data['finger_print'] ?? null;
        $this->container['sha_finger_print'] = $data['sha_finger_print'] ?? null;
        $this->container['public_key'] = $data['public_key'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets ssh_server_id
     *
     * @return string|null
     */
    public function getSshServerId()
    {
        return $this->container['ssh_server_id'];
    }

    /**
     * Sets ssh_server_id
     *
     * @param string|null $ssh_server_id A unique id used to identify this SSH Server
     *
     * @return self
     */
    public function setSshServerId($ssh_server_id)
    {
        $this->container['ssh_server_id'] = $ssh_server_id;

        return $this;
    }

    /**
     * Gets ssh_server_name
     *
     * @return string|null
     */
    public function getSshServerName()
    {
        return $this->container['ssh_server_name'];
    }

    /**
     * Sets ssh_server_name
     *
     * @param string|null $ssh_server_name The name to identify this SSH Server
     *
     * @return self
     */
    public function setSshServerName($ssh_server_name)
    {
        $this->container['ssh_server_name'] = $ssh_server_name;

        return $this;
    }

    /**
     * Gets ssh_server_host
     *
     * @return string|null
     */
    public function getSshServerHost()
    {
        return $this->container['ssh_server_host'];
    }

    /**
     * Sets ssh_server_host
     *
     * @param string|null $ssh_server_host The hostname or ip address of the SSH Server
     *
     * @return self
     */
    public function setSshServerHost($ssh_server_host)
    {
        $this->container['ssh_server_host'] = $ssh_server_host;

        return $this;
    }

    /**
     * Gets ssh_server_port
     *
     * @return int|null
     */
    public function getSshServerPort()
    {
        return $this->container['ssh_server_port'];
    }

    /**
     * Sets ssh_server_port
     *
     * @param int|null $ssh_server_port The port to connect to on the SSH Server
     *
     * @return self
     */
    public function setSshServerPort($ssh_server_port)
    {
        $this->container['ssh_server_port'] = $ssh_server_port;

        return $this;
    }

    /**
     * Gets ssh_server_user
     *
     * @return string|null
     */
    public function getSshServerUser()
    {
        return $this->container['ssh_server_user'];
    }

    /**
     * Sets ssh_server_user
     *
     * @param string|null $ssh_server_user The username used to connect to the SSH Server
     *
     * @return self
     */
    public function setSshServerUser($ssh_server_user)
    {
        $this->container['ssh_server_user'] = $ssh_server_user;

        return $this;
    }

    /**
     * Gets finger_print
     *
     * @return string|null
     */
    public function getFingerPrint()
    {
        return $this->container['finger_print'];
    }

    /**
     * Sets finger_print
     *
     * @param string|null $finger_print The md5 fingerprint used to identify the SSH Server
     *
     * @return self
     */
    public function setFingerPrint($finger_print)
    {
        $this->container['finger_print'] = $finger_print;

        return $this;
    }

    /**
     * Gets sha_finger_print
     *
     * @return string|null
     */
    public function getShaFingerPrint()
    {
        return $this->container['sha_finger_print'];
    }

    /**
     * Sets sha_finger_print
     *
     * @param string|null $sha_finger_print The SHA fingerprint used to identify the SSH Server
     *
     * @return self
     */
    public function setShaFingerPrint($sha_finger_print)
    {
        $this->container['sha_finger_print'] = $sha_finger_print;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key The SSH public key created for this instance
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current connection status to this SSH Server
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


