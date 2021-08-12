<?php
/**
 * GroupHierarchy
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
 * GroupHierarchy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GroupHierarchy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupHierarchy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can' => 'array<string,bool>',
        'can_add_to_content_metadata' => 'bool',
        'contains_current_user' => 'bool',
        'external_group_id' => 'string',
        'externally_managed' => 'bool',
        'id' => 'int',
        'include_by_default' => 'bool',
        'name' => 'string',
        'user_count' => 'int',
        'parent_group_ids' => 'int[]',
        'role_ids' => 'int[]'
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
        'can_add_to_content_metadata' => null,
        'contains_current_user' => null,
        'external_group_id' => null,
        'externally_managed' => null,
        'id' => 'int64',
        'include_by_default' => null,
        'name' => null,
        'user_count' => 'int64',
        'parent_group_ids' => 'int64',
        'role_ids' => 'int64'
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
        'can_add_to_content_metadata' => 'can_add_to_content_metadata',
        'contains_current_user' => 'contains_current_user',
        'external_group_id' => 'external_group_id',
        'externally_managed' => 'externally_managed',
        'id' => 'id',
        'include_by_default' => 'include_by_default',
        'name' => 'name',
        'user_count' => 'user_count',
        'parent_group_ids' => 'parent_group_ids',
        'role_ids' => 'role_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'can_add_to_content_metadata' => 'setCanAddToContentMetadata',
        'contains_current_user' => 'setContainsCurrentUser',
        'external_group_id' => 'setExternalGroupId',
        'externally_managed' => 'setExternallyManaged',
        'id' => 'setId',
        'include_by_default' => 'setIncludeByDefault',
        'name' => 'setName',
        'user_count' => 'setUserCount',
        'parent_group_ids' => 'setParentGroupIds',
        'role_ids' => 'setRoleIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'can_add_to_content_metadata' => 'getCanAddToContentMetadata',
        'contains_current_user' => 'getContainsCurrentUser',
        'external_group_id' => 'getExternalGroupId',
        'externally_managed' => 'getExternallyManaged',
        'id' => 'getId',
        'include_by_default' => 'getIncludeByDefault',
        'name' => 'getName',
        'user_count' => 'getUserCount',
        'parent_group_ids' => 'getParentGroupIds',
        'role_ids' => 'getRoleIds'
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
        $this->container['can_add_to_content_metadata'] = $data['can_add_to_content_metadata'] ?? null;
        $this->container['contains_current_user'] = $data['contains_current_user'] ?? null;
        $this->container['external_group_id'] = $data['external_group_id'] ?? null;
        $this->container['externally_managed'] = $data['externally_managed'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['include_by_default'] = $data['include_by_default'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['user_count'] = $data['user_count'] ?? null;
        $this->container['parent_group_ids'] = $data['parent_group_ids'] ?? null;
        $this->container['role_ids'] = $data['role_ids'] ?? null;
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
     * Gets can_add_to_content_metadata
     *
     * @return bool|null
     */
    public function getCanAddToContentMetadata()
    {
        return $this->container['can_add_to_content_metadata'];
    }

    /**
     * Sets can_add_to_content_metadata
     *
     * @param bool|null $can_add_to_content_metadata Group can be used in content access controls
     *
     * @return self
     */
    public function setCanAddToContentMetadata($can_add_to_content_metadata)
    {
        $this->container['can_add_to_content_metadata'] = $can_add_to_content_metadata;

        return $this;
    }

    /**
     * Gets contains_current_user
     *
     * @return bool|null
     */
    public function getContainsCurrentUser()
    {
        return $this->container['contains_current_user'];
    }

    /**
     * Sets contains_current_user
     *
     * @param bool|null $contains_current_user Currently logged in user is group member
     *
     * @return self
     */
    public function setContainsCurrentUser($contains_current_user)
    {
        $this->container['contains_current_user'] = $contains_current_user;

        return $this;
    }

    /**
     * Gets external_group_id
     *
     * @return string|null
     */
    public function getExternalGroupId()
    {
        return $this->container['external_group_id'];
    }

    /**
     * Sets external_group_id
     *
     * @param string|null $external_group_id External Id group if embed group
     *
     * @return self
     */
    public function setExternalGroupId($external_group_id)
    {
        $this->container['external_group_id'] = $external_group_id;

        return $this;
    }

    /**
     * Gets externally_managed
     *
     * @return bool|null
     */
    public function getExternallyManaged()
    {
        return $this->container['externally_managed'];
    }

    /**
     * Sets externally_managed
     *
     * @param bool|null $externally_managed Group membership controlled outside of Looker
     *
     * @return self
     */
    public function setExternallyManaged($externally_managed)
    {
        $this->container['externally_managed'] = $externally_managed;

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
     * Gets include_by_default
     *
     * @return bool|null
     */
    public function getIncludeByDefault()
    {
        return $this->container['include_by_default'];
    }

    /**
     * Sets include_by_default
     *
     * @param bool|null $include_by_default New users are added to this group by default
     *
     * @return self
     */
    public function setIncludeByDefault($include_by_default)
    {
        $this->container['include_by_default'] = $include_by_default;

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
     * @param string|null $name Name of group
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user_count
     *
     * @return int|null
     */
    public function getUserCount()
    {
        return $this->container['user_count'];
    }

    /**
     * Sets user_count
     *
     * @param int|null $user_count Number of users included in this group
     *
     * @return self
     */
    public function setUserCount($user_count)
    {
        $this->container['user_count'] = $user_count;

        return $this;
    }

    /**
     * Gets parent_group_ids
     *
     * @return int[]|null
     */
    public function getParentGroupIds()
    {
        return $this->container['parent_group_ids'];
    }

    /**
     * Sets parent_group_ids
     *
     * @param int[]|null $parent_group_ids IDs of parents of this group
     *
     * @return self
     */
    public function setParentGroupIds($parent_group_ids)
    {
        $this->container['parent_group_ids'] = $parent_group_ids;

        return $this;
    }

    /**
     * Gets role_ids
     *
     * @return int[]|null
     */
    public function getRoleIds()
    {
        return $this->container['role_ids'];
    }

    /**
     * Sets role_ids
     *
     * @param int[]|null $role_ids Role IDs assigned to group
     *
     * @return self
     */
    public function setRoleIds($role_ids)
    {
        $this->container['role_ids'] = $role_ids;

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


