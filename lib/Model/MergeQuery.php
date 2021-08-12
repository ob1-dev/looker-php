<?php
/**
 * MergeQuery
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
 * MergeQuery Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MergeQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MergeQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can' => 'array<string,bool>',
        'column_limit' => 'string',
        'dynamic_fields' => 'string',
        'id' => 'string',
        'pivots' => 'string[]',
        'result_maker_id' => 'int',
        'sorts' => 'string[]',
        'source_queries' => '\OpenAPI\Client\Model\MergeQuerySourceQuery[]',
        'total' => 'bool',
        'vis_config' => 'array<string,string>'
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
        'column_limit' => null,
        'dynamic_fields' => null,
        'id' => null,
        'pivots' => null,
        'result_maker_id' => 'int64',
        'sorts' => null,
        'source_queries' => null,
        'total' => null,
        'vis_config' => null
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
        'column_limit' => 'column_limit',
        'dynamic_fields' => 'dynamic_fields',
        'id' => 'id',
        'pivots' => 'pivots',
        'result_maker_id' => 'result_maker_id',
        'sorts' => 'sorts',
        'source_queries' => 'source_queries',
        'total' => 'total',
        'vis_config' => 'vis_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'column_limit' => 'setColumnLimit',
        'dynamic_fields' => 'setDynamicFields',
        'id' => 'setId',
        'pivots' => 'setPivots',
        'result_maker_id' => 'setResultMakerId',
        'sorts' => 'setSorts',
        'source_queries' => 'setSourceQueries',
        'total' => 'setTotal',
        'vis_config' => 'setVisConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'column_limit' => 'getColumnLimit',
        'dynamic_fields' => 'getDynamicFields',
        'id' => 'getId',
        'pivots' => 'getPivots',
        'result_maker_id' => 'getResultMakerId',
        'sorts' => 'getSorts',
        'source_queries' => 'getSourceQueries',
        'total' => 'getTotal',
        'vis_config' => 'getVisConfig'
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
        $this->container['column_limit'] = $data['column_limit'] ?? null;
        $this->container['dynamic_fields'] = $data['dynamic_fields'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['pivots'] = $data['pivots'] ?? null;
        $this->container['result_maker_id'] = $data['result_maker_id'] ?? null;
        $this->container['sorts'] = $data['sorts'] ?? null;
        $this->container['source_queries'] = $data['source_queries'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['vis_config'] = $data['vis_config'] ?? null;
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
     * Gets column_limit
     *
     * @return string|null
     */
    public function getColumnLimit()
    {
        return $this->container['column_limit'];
    }

    /**
     * Sets column_limit
     *
     * @param string|null $column_limit Column Limit
     *
     * @return self
     */
    public function setColumnLimit($column_limit)
    {
        $this->container['column_limit'] = $column_limit;

        return $this;
    }

    /**
     * Gets dynamic_fields
     *
     * @return string|null
     */
    public function getDynamicFields()
    {
        return $this->container['dynamic_fields'];
    }

    /**
     * Sets dynamic_fields
     *
     * @param string|null $dynamic_fields Dynamic Fields
     *
     * @return self
     */
    public function setDynamicFields($dynamic_fields)
    {
        $this->container['dynamic_fields'] = $dynamic_fields;

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
     * Gets pivots
     *
     * @return string[]|null
     */
    public function getPivots()
    {
        return $this->container['pivots'];
    }

    /**
     * Sets pivots
     *
     * @param string[]|null $pivots Pivots
     *
     * @return self
     */
    public function setPivots($pivots)
    {
        $this->container['pivots'] = $pivots;

        return $this;
    }

    /**
     * Gets result_maker_id
     *
     * @return int|null
     */
    public function getResultMakerId()
    {
        return $this->container['result_maker_id'];
    }

    /**
     * Sets result_maker_id
     *
     * @param int|null $result_maker_id Unique to get results
     *
     * @return self
     */
    public function setResultMakerId($result_maker_id)
    {
        $this->container['result_maker_id'] = $result_maker_id;

        return $this;
    }

    /**
     * Gets sorts
     *
     * @return string[]|null
     */
    public function getSorts()
    {
        return $this->container['sorts'];
    }

    /**
     * Sets sorts
     *
     * @param string[]|null $sorts Sorts
     *
     * @return self
     */
    public function setSorts($sorts)
    {
        $this->container['sorts'] = $sorts;

        return $this;
    }

    /**
     * Gets source_queries
     *
     * @return \OpenAPI\Client\Model\MergeQuerySourceQuery[]|null
     */
    public function getSourceQueries()
    {
        return $this->container['source_queries'];
    }

    /**
     * Sets source_queries
     *
     * @param \OpenAPI\Client\Model\MergeQuerySourceQuery[]|null $source_queries Source Queries defining the results to be merged.
     *
     * @return self
     */
    public function setSourceQueries($source_queries)
    {
        $this->container['source_queries'] = $source_queries;

        return $this;
    }

    /**
     * Gets total
     *
     * @return bool|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param bool|null $total Total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets vis_config
     *
     * @return array<string,string>|null
     */
    public function getVisConfig()
    {
        return $this->container['vis_config'];
    }

    /**
     * Sets vis_config
     *
     * @param array<string,string>|null $vis_config Visualization Config
     *
     * @return self
     */
    public function setVisConfig($vis_config)
    {
        $this->container['vis_config'] = $vis_config;

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

