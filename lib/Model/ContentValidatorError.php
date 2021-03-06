<?php
/**
 * ContentValidatorError
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
 * ContentValidatorError Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContentValidatorError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentValidatorError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'look' => '\OpenAPI\Client\Model\ContentValidationLook',
        'dashboard' => '\OpenAPI\Client\Model\ContentValidationDashboard',
        'dashboard_element' => '\OpenAPI\Client\Model\ContentValidationDashboardElement',
        'dashboard_filter' => '\OpenAPI\Client\Model\ContentValidationDashboardFilter',
        'scheduled_plan' => '\OpenAPI\Client\Model\ContentValidationScheduledPlan',
        'alert' => '\OpenAPI\Client\Model\ContentValidationAlert',
        'lookml_dashboard' => '\OpenAPI\Client\Model\ContentValidationLookMLDashboard',
        'lookml_dashboard_element' => '\OpenAPI\Client\Model\ContentValidationLookMLDashboardElement',
        'errors' => '\OpenAPI\Client\Model\ContentValidationError[]',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'look' => null,
        'dashboard' => null,
        'dashboard_element' => null,
        'dashboard_filter' => null,
        'scheduled_plan' => null,
        'alert' => null,
        'lookml_dashboard' => null,
        'lookml_dashboard_element' => null,
        'errors' => null,
        'id' => null
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
        'look' => 'look',
        'dashboard' => 'dashboard',
        'dashboard_element' => 'dashboard_element',
        'dashboard_filter' => 'dashboard_filter',
        'scheduled_plan' => 'scheduled_plan',
        'alert' => 'alert',
        'lookml_dashboard' => 'lookml_dashboard',
        'lookml_dashboard_element' => 'lookml_dashboard_element',
        'errors' => 'errors',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'look' => 'setLook',
        'dashboard' => 'setDashboard',
        'dashboard_element' => 'setDashboardElement',
        'dashboard_filter' => 'setDashboardFilter',
        'scheduled_plan' => 'setScheduledPlan',
        'alert' => 'setAlert',
        'lookml_dashboard' => 'setLookmlDashboard',
        'lookml_dashboard_element' => 'setLookmlDashboardElement',
        'errors' => 'setErrors',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'look' => 'getLook',
        'dashboard' => 'getDashboard',
        'dashboard_element' => 'getDashboardElement',
        'dashboard_filter' => 'getDashboardFilter',
        'scheduled_plan' => 'getScheduledPlan',
        'alert' => 'getAlert',
        'lookml_dashboard' => 'getLookmlDashboard',
        'lookml_dashboard_element' => 'getLookmlDashboardElement',
        'errors' => 'getErrors',
        'id' => 'getId'
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
        $this->container['look'] = $data['look'] ?? null;
        $this->container['dashboard'] = $data['dashboard'] ?? null;
        $this->container['dashboard_element'] = $data['dashboard_element'] ?? null;
        $this->container['dashboard_filter'] = $data['dashboard_filter'] ?? null;
        $this->container['scheduled_plan'] = $data['scheduled_plan'] ?? null;
        $this->container['alert'] = $data['alert'] ?? null;
        $this->container['lookml_dashboard'] = $data['lookml_dashboard'] ?? null;
        $this->container['lookml_dashboard_element'] = $data['lookml_dashboard_element'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
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
     * Gets look
     *
     * @return \OpenAPI\Client\Model\ContentValidationLook|null
     */
    public function getLook()
    {
        return $this->container['look'];
    }

    /**
     * Sets look
     *
     * @param \OpenAPI\Client\Model\ContentValidationLook|null $look look
     *
     * @return self
     */
    public function setLook($look)
    {
        $this->container['look'] = $look;

        return $this;
    }

    /**
     * Gets dashboard
     *
     * @return \OpenAPI\Client\Model\ContentValidationDashboard|null
     */
    public function getDashboard()
    {
        return $this->container['dashboard'];
    }

    /**
     * Sets dashboard
     *
     * @param \OpenAPI\Client\Model\ContentValidationDashboard|null $dashboard dashboard
     *
     * @return self
     */
    public function setDashboard($dashboard)
    {
        $this->container['dashboard'] = $dashboard;

        return $this;
    }

    /**
     * Gets dashboard_element
     *
     * @return \OpenAPI\Client\Model\ContentValidationDashboardElement|null
     */
    public function getDashboardElement()
    {
        return $this->container['dashboard_element'];
    }

    /**
     * Sets dashboard_element
     *
     * @param \OpenAPI\Client\Model\ContentValidationDashboardElement|null $dashboard_element dashboard_element
     *
     * @return self
     */
    public function setDashboardElement($dashboard_element)
    {
        $this->container['dashboard_element'] = $dashboard_element;

        return $this;
    }

    /**
     * Gets dashboard_filter
     *
     * @return \OpenAPI\Client\Model\ContentValidationDashboardFilter|null
     */
    public function getDashboardFilter()
    {
        return $this->container['dashboard_filter'];
    }

    /**
     * Sets dashboard_filter
     *
     * @param \OpenAPI\Client\Model\ContentValidationDashboardFilter|null $dashboard_filter dashboard_filter
     *
     * @return self
     */
    public function setDashboardFilter($dashboard_filter)
    {
        $this->container['dashboard_filter'] = $dashboard_filter;

        return $this;
    }

    /**
     * Gets scheduled_plan
     *
     * @return \OpenAPI\Client\Model\ContentValidationScheduledPlan|null
     */
    public function getScheduledPlan()
    {
        return $this->container['scheduled_plan'];
    }

    /**
     * Sets scheduled_plan
     *
     * @param \OpenAPI\Client\Model\ContentValidationScheduledPlan|null $scheduled_plan scheduled_plan
     *
     * @return self
     */
    public function setScheduledPlan($scheduled_plan)
    {
        $this->container['scheduled_plan'] = $scheduled_plan;

        return $this;
    }

    /**
     * Gets alert
     *
     * @return \OpenAPI\Client\Model\ContentValidationAlert|null
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     *
     * @param \OpenAPI\Client\Model\ContentValidationAlert|null $alert alert
     *
     * @return self
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

        return $this;
    }

    /**
     * Gets lookml_dashboard
     *
     * @return \OpenAPI\Client\Model\ContentValidationLookMLDashboard|null
     */
    public function getLookmlDashboard()
    {
        return $this->container['lookml_dashboard'];
    }

    /**
     * Sets lookml_dashboard
     *
     * @param \OpenAPI\Client\Model\ContentValidationLookMLDashboard|null $lookml_dashboard lookml_dashboard
     *
     * @return self
     */
    public function setLookmlDashboard($lookml_dashboard)
    {
        $this->container['lookml_dashboard'] = $lookml_dashboard;

        return $this;
    }

    /**
     * Gets lookml_dashboard_element
     *
     * @return \OpenAPI\Client\Model\ContentValidationLookMLDashboardElement|null
     */
    public function getLookmlDashboardElement()
    {
        return $this->container['lookml_dashboard_element'];
    }

    /**
     * Sets lookml_dashboard_element
     *
     * @param \OpenAPI\Client\Model\ContentValidationLookMLDashboardElement|null $lookml_dashboard_element lookml_dashboard_element
     *
     * @return self
     */
    public function setLookmlDashboardElement($lookml_dashboard_element)
    {
        $this->container['lookml_dashboard_element'] = $lookml_dashboard_element;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \OpenAPI\Client\Model\ContentValidationError[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \OpenAPI\Client\Model\ContentValidationError[]|null $errors A list of errors found for this piece of content
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
     * @param string|null $id An id unique to this piece of content for this validation run
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


