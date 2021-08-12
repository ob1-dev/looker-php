<?php
/**
 * DashboardFilter
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
 * DashboardFilter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DashboardFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DashboardFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can' => 'array<string,bool>',
        'id' => 'string',
        'dashboard_id' => 'string',
        'name' => 'string',
        'title' => 'string',
        'type' => 'string',
        'default_value' => 'string',
        'model' => 'string',
        'explore' => 'string',
        'dimension' => 'string',
        'field' => 'array<string,Any>',
        'row' => 'int',
        'listens_to_filters' => 'string[]',
        'allow_multiple_values' => 'bool',
        'required' => 'bool',
        'ui_config' => 'array<string,Any>'
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
        'id' => null,
        'dashboard_id' => null,
        'name' => null,
        'title' => null,
        'type' => null,
        'default_value' => null,
        'model' => null,
        'explore' => null,
        'dimension' => null,
        'field' => 'any',
        'row' => 'int64',
        'listens_to_filters' => null,
        'allow_multiple_values' => null,
        'required' => null,
        'ui_config' => 'any'
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
        'id' => 'id',
        'dashboard_id' => 'dashboard_id',
        'name' => 'name',
        'title' => 'title',
        'type' => 'type',
        'default_value' => 'default_value',
        'model' => 'model',
        'explore' => 'explore',
        'dimension' => 'dimension',
        'field' => 'field',
        'row' => 'row',
        'listens_to_filters' => 'listens_to_filters',
        'allow_multiple_values' => 'allow_multiple_values',
        'required' => 'required',
        'ui_config' => 'ui_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'dashboard_id' => 'setDashboardId',
        'name' => 'setName',
        'title' => 'setTitle',
        'type' => 'setType',
        'default_value' => 'setDefaultValue',
        'model' => 'setModel',
        'explore' => 'setExplore',
        'dimension' => 'setDimension',
        'field' => 'setField',
        'row' => 'setRow',
        'listens_to_filters' => 'setListensToFilters',
        'allow_multiple_values' => 'setAllowMultipleValues',
        'required' => 'setRequired',
        'ui_config' => 'setUiConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'dashboard_id' => 'getDashboardId',
        'name' => 'getName',
        'title' => 'getTitle',
        'type' => 'getType',
        'default_value' => 'getDefaultValue',
        'model' => 'getModel',
        'explore' => 'getExplore',
        'dimension' => 'getDimension',
        'field' => 'getField',
        'row' => 'getRow',
        'listens_to_filters' => 'getListensToFilters',
        'allow_multiple_values' => 'getAllowMultipleValues',
        'required' => 'getRequired',
        'ui_config' => 'getUiConfig'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['dashboard_id'] = $data['dashboard_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['default_value'] = $data['default_value'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['explore'] = $data['explore'] ?? null;
        $this->container['dimension'] = $data['dimension'] ?? null;
        $this->container['field'] = $data['field'] ?? null;
        $this->container['row'] = $data['row'] ?? null;
        $this->container['listens_to_filters'] = $data['listens_to_filters'] ?? null;
        $this->container['allow_multiple_values'] = $data['allow_multiple_values'] ?? null;
        $this->container['required'] = $data['required'] ?? null;
        $this->container['ui_config'] = $data['ui_config'] ?? null;
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
     * Gets dashboard_id
     *
     * @return string|null
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param string|null $dashboard_id Id of Dashboard
     *
     * @return self
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

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
     * @param string|null $name Name of filter
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of filter
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string|null $type Type of filter: one of date, number, string, or field
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value Default value of filter
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model Model of filter (required if type = field)
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets explore
     *
     * @return string|null
     */
    public function getExplore()
    {
        return $this->container['explore'];
    }

    /**
     * Sets explore
     *
     * @param string|null $explore Explore of filter (required if type = field)
     *
     * @return self
     */
    public function setExplore($explore)
    {
        $this->container['explore'] = $explore;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return string|null
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param string|null $dimension Dimension of filter (required if type = field)
     *
     * @return self
     */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;

        return $this;
    }

    /**
     * Gets field
     *
     * @return array<string,Any>|null
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param array<string,Any>|null $field Field information
     *
     * @return self
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets row
     *
     * @return int|null
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param int|null $row Display order of this filter relative to other filters
     *
     * @return self
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }

    /**
     * Gets listens_to_filters
     *
     * @return string[]|null
     */
    public function getListensToFilters()
    {
        return $this->container['listens_to_filters'];
    }

    /**
     * Sets listens_to_filters
     *
     * @param string[]|null $listens_to_filters Array of listeners for faceted filters
     *
     * @return self
     */
    public function setListensToFilters($listens_to_filters)
    {
        $this->container['listens_to_filters'] = $listens_to_filters;

        return $this;
    }

    /**
     * Gets allow_multiple_values
     *
     * @return bool|null
     */
    public function getAllowMultipleValues()
    {
        return $this->container['allow_multiple_values'];
    }

    /**
     * Sets allow_multiple_values
     *
     * @param bool|null $allow_multiple_values Whether the filter allows multiple filter values (deprecated in the latest version of dashboards)
     *
     * @return self
     */
    public function setAllowMultipleValues($allow_multiple_values)
    {
        $this->container['allow_multiple_values'] = $allow_multiple_values;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required Whether the filter requires a value to run the dashboard
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets ui_config
     *
     * @return array<string,Any>|null
     */
    public function getUiConfig()
    {
        return $this->container['ui_config'];
    }

    /**
     * Sets ui_config
     *
     * @param array<string,Any>|null $ui_config The visual configuration for this filter. Used to set up how the UI for this filter should appear.
     *
     * @return self
     */
    public function setUiConfig($ui_config)
    {
        $this->container['ui_config'] = $ui_config;

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


