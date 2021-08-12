<?php
/**
 * Folder
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
 * Folder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Folder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Folder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'parent_id' => 'string',
        'id' => 'string',
        'content_metadata_id' => 'int',
        'created_at' => '\DateTime',
        'creator_id' => 'int',
        'child_count' => 'int',
        'external_id' => 'string',
        'is_embed' => 'bool',
        'is_embed_shared_root' => 'bool',
        'is_embed_users_root' => 'bool',
        'is_personal' => 'bool',
        'is_personal_descendant' => 'bool',
        'is_shared_root' => 'bool',
        'is_users_root' => 'bool',
        'can' => 'array<string,bool>',
        'dashboards' => '\OpenAPI\Client\Model\DashboardBase[]',
        'looks' => '\OpenAPI\Client\Model\LookWithDashboards[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'parent_id' => null,
        'id' => null,
        'content_metadata_id' => 'int64',
        'created_at' => 'date-time',
        'creator_id' => 'int64',
        'child_count' => 'int64',
        'external_id' => null,
        'is_embed' => null,
        'is_embed_shared_root' => null,
        'is_embed_users_root' => null,
        'is_personal' => null,
        'is_personal_descendant' => null,
        'is_shared_root' => null,
        'is_users_root' => null,
        'can' => null,
        'dashboards' => null,
        'looks' => null
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
        'name' => 'name',
        'parent_id' => 'parent_id',
        'id' => 'id',
        'content_metadata_id' => 'content_metadata_id',
        'created_at' => 'created_at',
        'creator_id' => 'creator_id',
        'child_count' => 'child_count',
        'external_id' => 'external_id',
        'is_embed' => 'is_embed',
        'is_embed_shared_root' => 'is_embed_shared_root',
        'is_embed_users_root' => 'is_embed_users_root',
        'is_personal' => 'is_personal',
        'is_personal_descendant' => 'is_personal_descendant',
        'is_shared_root' => 'is_shared_root',
        'is_users_root' => 'is_users_root',
        'can' => 'can',
        'dashboards' => 'dashboards',
        'looks' => 'looks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'id' => 'setId',
        'content_metadata_id' => 'setContentMetadataId',
        'created_at' => 'setCreatedAt',
        'creator_id' => 'setCreatorId',
        'child_count' => 'setChildCount',
        'external_id' => 'setExternalId',
        'is_embed' => 'setIsEmbed',
        'is_embed_shared_root' => 'setIsEmbedSharedRoot',
        'is_embed_users_root' => 'setIsEmbedUsersRoot',
        'is_personal' => 'setIsPersonal',
        'is_personal_descendant' => 'setIsPersonalDescendant',
        'is_shared_root' => 'setIsSharedRoot',
        'is_users_root' => 'setIsUsersRoot',
        'can' => 'setCan',
        'dashboards' => 'setDashboards',
        'looks' => 'setLooks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'id' => 'getId',
        'content_metadata_id' => 'getContentMetadataId',
        'created_at' => 'getCreatedAt',
        'creator_id' => 'getCreatorId',
        'child_count' => 'getChildCount',
        'external_id' => 'getExternalId',
        'is_embed' => 'getIsEmbed',
        'is_embed_shared_root' => 'getIsEmbedSharedRoot',
        'is_embed_users_root' => 'getIsEmbedUsersRoot',
        'is_personal' => 'getIsPersonal',
        'is_personal_descendant' => 'getIsPersonalDescendant',
        'is_shared_root' => 'getIsSharedRoot',
        'is_users_root' => 'getIsUsersRoot',
        'can' => 'getCan',
        'dashboards' => 'getDashboards',
        'looks' => 'getLooks'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['content_metadata_id'] = $data['content_metadata_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['creator_id'] = $data['creator_id'] ?? null;
        $this->container['child_count'] = $data['child_count'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['is_embed'] = $data['is_embed'] ?? null;
        $this->container['is_embed_shared_root'] = $data['is_embed_shared_root'] ?? null;
        $this->container['is_embed_users_root'] = $data['is_embed_users_root'] ?? null;
        $this->container['is_personal'] = $data['is_personal'] ?? null;
        $this->container['is_personal_descendant'] = $data['is_personal_descendant'] ?? null;
        $this->container['is_shared_root'] = $data['is_shared_root'] ?? null;
        $this->container['is_users_root'] = $data['is_users_root'] ?? null;
        $this->container['can'] = $data['can'] ?? null;
        $this->container['dashboards'] = $data['dashboards'] ?? null;
        $this->container['looks'] = $data['looks'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Unique Name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id Id of Parent. If the parent id is null, this is a root-level entry
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique Id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets content_metadata_id
     *
     * @return int|null
     */
    public function getContentMetadataId()
    {
        return $this->container['content_metadata_id'];
    }

    /**
     * Sets content_metadata_id
     *
     * @param int|null $content_metadata_id Id of content metadata
     *
     * @return self
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Time the space was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return int|null
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int|null $creator_id User Id of Creator
     *
     * @return self
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets child_count
     *
     * @return int|null
     */
    public function getChildCount()
    {
        return $this->container['child_count'];
    }

    /**
     * Sets child_count
     *
     * @param int|null $child_count Children Count
     *
     * @return self
     */
    public function setChildCount($child_count)
    {
        $this->container['child_count'] = $child_count;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id Embedder's Id if this folder was autogenerated as an embedding shared folder via 'external_group_id' in an SSO embed login
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets is_embed
     *
     * @return bool|null
     */
    public function getIsEmbed()
    {
        return $this->container['is_embed'];
    }

    /**
     * Sets is_embed
     *
     * @param bool|null $is_embed Folder is an embed folder
     *
     * @return self
     */
    public function setIsEmbed($is_embed)
    {
        $this->container['is_embed'] = $is_embed;

        return $this;
    }

    /**
     * Gets is_embed_shared_root
     *
     * @return bool|null
     */
    public function getIsEmbedSharedRoot()
    {
        return $this->container['is_embed_shared_root'];
    }

    /**
     * Sets is_embed_shared_root
     *
     * @param bool|null $is_embed_shared_root Folder is the root embed shared folder
     *
     * @return self
     */
    public function setIsEmbedSharedRoot($is_embed_shared_root)
    {
        $this->container['is_embed_shared_root'] = $is_embed_shared_root;

        return $this;
    }

    /**
     * Gets is_embed_users_root
     *
     * @return bool|null
     */
    public function getIsEmbedUsersRoot()
    {
        return $this->container['is_embed_users_root'];
    }

    /**
     * Sets is_embed_users_root
     *
     * @param bool|null $is_embed_users_root Folder is the root embed users folder
     *
     * @return self
     */
    public function setIsEmbedUsersRoot($is_embed_users_root)
    {
        $this->container['is_embed_users_root'] = $is_embed_users_root;

        return $this;
    }

    /**
     * Gets is_personal
     *
     * @return bool|null
     */
    public function getIsPersonal()
    {
        return $this->container['is_personal'];
    }

    /**
     * Sets is_personal
     *
     * @param bool|null $is_personal Folder is a user's personal folder
     *
     * @return self
     */
    public function setIsPersonal($is_personal)
    {
        $this->container['is_personal'] = $is_personal;

        return $this;
    }

    /**
     * Gets is_personal_descendant
     *
     * @return bool|null
     */
    public function getIsPersonalDescendant()
    {
        return $this->container['is_personal_descendant'];
    }

    /**
     * Sets is_personal_descendant
     *
     * @param bool|null $is_personal_descendant Folder is descendant of a user's personal folder
     *
     * @return self
     */
    public function setIsPersonalDescendant($is_personal_descendant)
    {
        $this->container['is_personal_descendant'] = $is_personal_descendant;

        return $this;
    }

    /**
     * Gets is_shared_root
     *
     * @return bool|null
     */
    public function getIsSharedRoot()
    {
        return $this->container['is_shared_root'];
    }

    /**
     * Sets is_shared_root
     *
     * @param bool|null $is_shared_root Folder is the root shared folder
     *
     * @return self
     */
    public function setIsSharedRoot($is_shared_root)
    {
        $this->container['is_shared_root'] = $is_shared_root;

        return $this;
    }

    /**
     * Gets is_users_root
     *
     * @return bool|null
     */
    public function getIsUsersRoot()
    {
        return $this->container['is_users_root'];
    }

    /**
     * Sets is_users_root
     *
     * @param bool|null $is_users_root Folder is the root user folder
     *
     * @return self
     */
    public function setIsUsersRoot($is_users_root)
    {
        $this->container['is_users_root'] = $is_users_root;

        return $this;
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
     * Gets dashboards
     *
     * @return \OpenAPI\Client\Model\DashboardBase[]|null
     */
    public function getDashboards()
    {
        return $this->container['dashboards'];
    }

    /**
     * Sets dashboards
     *
     * @param \OpenAPI\Client\Model\DashboardBase[]|null $dashboards Dashboards
     *
     * @return self
     */
    public function setDashboards($dashboards)
    {
        $this->container['dashboards'] = $dashboards;

        return $this;
    }

    /**
     * Gets looks
     *
     * @return \OpenAPI\Client\Model\LookWithDashboards[]|null
     */
    public function getLooks()
    {
        return $this->container['looks'];
    }

    /**
     * Sets looks
     *
     * @param \OpenAPI\Client\Model\LookWithDashboards[]|null $looks Looks
     *
     * @return self
     */
    public function setLooks($looks)
    {
        $this->container['looks'] = $looks;

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


