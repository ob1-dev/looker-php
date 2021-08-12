<?php
/**
 * UserAttributeWithValue
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
 * UserAttributeWithValue Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserAttributeWithValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserAttributeWithValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can' => 'array<string,bool>',
        'name' => 'string',
        'label' => 'string',
        'rank' => 'int',
        'value' => 'string',
        'user_id' => 'int',
        'user_can_edit' => 'bool',
        'value_is_hidden' => 'bool',
        'user_attribute_id' => 'int',
        'source' => 'string',
        'hidden_value_domain_whitelist' => 'string'
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
        'name' => null,
        'label' => null,
        'rank' => 'int64',
        'value' => null,
        'user_id' => 'int64',
        'user_can_edit' => null,
        'value_is_hidden' => null,
        'user_attribute_id' => 'int64',
        'source' => null,
        'hidden_value_domain_whitelist' => null
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
        'name' => 'name',
        'label' => 'label',
        'rank' => 'rank',
        'value' => 'value',
        'user_id' => 'user_id',
        'user_can_edit' => 'user_can_edit',
        'value_is_hidden' => 'value_is_hidden',
        'user_attribute_id' => 'user_attribute_id',
        'source' => 'source',
        'hidden_value_domain_whitelist' => 'hidden_value_domain_whitelist'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'name' => 'setName',
        'label' => 'setLabel',
        'rank' => 'setRank',
        'value' => 'setValue',
        'user_id' => 'setUserId',
        'user_can_edit' => 'setUserCanEdit',
        'value_is_hidden' => 'setValueIsHidden',
        'user_attribute_id' => 'setUserAttributeId',
        'source' => 'setSource',
        'hidden_value_domain_whitelist' => 'setHiddenValueDomainWhitelist'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'name' => 'getName',
        'label' => 'getLabel',
        'rank' => 'getRank',
        'value' => 'getValue',
        'user_id' => 'getUserId',
        'user_can_edit' => 'getUserCanEdit',
        'value_is_hidden' => 'getValueIsHidden',
        'user_attribute_id' => 'getUserAttributeId',
        'source' => 'getSource',
        'hidden_value_domain_whitelist' => 'getHiddenValueDomainWhitelist'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['user_can_edit'] = $data['user_can_edit'] ?? null;
        $this->container['value_is_hidden'] = $data['value_is_hidden'] ?? null;
        $this->container['user_attribute_id'] = $data['user_attribute_id'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['hidden_value_domain_whitelist'] = $data['hidden_value_domain_whitelist'] ?? null;
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
     * @param string|null $name Name of user attribute
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Human-friendly label for user attribute
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank Precedence for setting value on user (lowest wins)
     *
     * @return self
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Value of attribute for user
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id Id of User
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_can_edit
     *
     * @return bool|null
     */
    public function getUserCanEdit()
    {
        return $this->container['user_can_edit'];
    }

    /**
     * Sets user_can_edit
     *
     * @param bool|null $user_can_edit Can the user set this value
     *
     * @return self
     */
    public function setUserCanEdit($user_can_edit)
    {
        $this->container['user_can_edit'] = $user_can_edit;

        return $this;
    }

    /**
     * Gets value_is_hidden
     *
     * @return bool|null
     */
    public function getValueIsHidden()
    {
        return $this->container['value_is_hidden'];
    }

    /**
     * Sets value_is_hidden
     *
     * @param bool|null $value_is_hidden If true, the \"value\" field will be null, because the attribute settings block access to this value
     *
     * @return self
     */
    public function setValueIsHidden($value_is_hidden)
    {
        $this->container['value_is_hidden'] = $value_is_hidden;

        return $this;
    }

    /**
     * Gets user_attribute_id
     *
     * @return int|null
     */
    public function getUserAttributeId()
    {
        return $this->container['user_attribute_id'];
    }

    /**
     * Sets user_attribute_id
     *
     * @param int|null $user_attribute_id Id of User Attribute
     *
     * @return self
     */
    public function setUserAttributeId($user_attribute_id)
    {
        $this->container['user_attribute_id'] = $user_attribute_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source How user got this value for this attribute
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets hidden_value_domain_whitelist
     *
     * @return string|null
     */
    public function getHiddenValueDomainWhitelist()
    {
        return $this->container['hidden_value_domain_whitelist'];
    }

    /**
     * Sets hidden_value_domain_whitelist
     *
     * @param string|null $hidden_value_domain_whitelist If this user attribute is hidden, whitelist of destinations to which it may be sent.
     *
     * @return self
     */
    public function setHiddenValueDomainWhitelist($hidden_value_domain_whitelist)
    {
        $this->container['hidden_value_domain_whitelist'] = $hidden_value_domain_whitelist;

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


