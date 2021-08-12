<?php
/**
 * ContentValidation
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
 * ContentValidation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContentValidation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentValidation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content_with_errors' => '\OpenAPI\Client\Model\ContentValidatorError[]',
        'computation_time' => 'float',
        'total_looks_validated' => 'int',
        'total_dashboard_elements_validated' => 'int',
        'total_dashboard_filters_validated' => 'int',
        'total_scheduled_plans_validated' => 'int',
        'total_alerts_validated' => 'int',
        'total_explores_validated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content_with_errors' => null,
        'computation_time' => 'float',
        'total_looks_validated' => 'int64',
        'total_dashboard_elements_validated' => 'int64',
        'total_dashboard_filters_validated' => 'int64',
        'total_scheduled_plans_validated' => 'int64',
        'total_alerts_validated' => 'int64',
        'total_explores_validated' => 'int64'
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
        'content_with_errors' => 'content_with_errors',
        'computation_time' => 'computation_time',
        'total_looks_validated' => 'total_looks_validated',
        'total_dashboard_elements_validated' => 'total_dashboard_elements_validated',
        'total_dashboard_filters_validated' => 'total_dashboard_filters_validated',
        'total_scheduled_plans_validated' => 'total_scheduled_plans_validated',
        'total_alerts_validated' => 'total_alerts_validated',
        'total_explores_validated' => 'total_explores_validated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_with_errors' => 'setContentWithErrors',
        'computation_time' => 'setComputationTime',
        'total_looks_validated' => 'setTotalLooksValidated',
        'total_dashboard_elements_validated' => 'setTotalDashboardElementsValidated',
        'total_dashboard_filters_validated' => 'setTotalDashboardFiltersValidated',
        'total_scheduled_plans_validated' => 'setTotalScheduledPlansValidated',
        'total_alerts_validated' => 'setTotalAlertsValidated',
        'total_explores_validated' => 'setTotalExploresValidated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_with_errors' => 'getContentWithErrors',
        'computation_time' => 'getComputationTime',
        'total_looks_validated' => 'getTotalLooksValidated',
        'total_dashboard_elements_validated' => 'getTotalDashboardElementsValidated',
        'total_dashboard_filters_validated' => 'getTotalDashboardFiltersValidated',
        'total_scheduled_plans_validated' => 'getTotalScheduledPlansValidated',
        'total_alerts_validated' => 'getTotalAlertsValidated',
        'total_explores_validated' => 'getTotalExploresValidated'
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
        $this->container['content_with_errors'] = $data['content_with_errors'] ?? null;
        $this->container['computation_time'] = $data['computation_time'] ?? null;
        $this->container['total_looks_validated'] = $data['total_looks_validated'] ?? null;
        $this->container['total_dashboard_elements_validated'] = $data['total_dashboard_elements_validated'] ?? null;
        $this->container['total_dashboard_filters_validated'] = $data['total_dashboard_filters_validated'] ?? null;
        $this->container['total_scheduled_plans_validated'] = $data['total_scheduled_plans_validated'] ?? null;
        $this->container['total_alerts_validated'] = $data['total_alerts_validated'] ?? null;
        $this->container['total_explores_validated'] = $data['total_explores_validated'] ?? null;
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
     * Gets content_with_errors
     *
     * @return \OpenAPI\Client\Model\ContentValidatorError[]|null
     */
    public function getContentWithErrors()
    {
        return $this->container['content_with_errors'];
    }

    /**
     * Sets content_with_errors
     *
     * @param \OpenAPI\Client\Model\ContentValidatorError[]|null $content_with_errors A list of content errors
     *
     * @return self
     */
    public function setContentWithErrors($content_with_errors)
    {
        $this->container['content_with_errors'] = $content_with_errors;

        return $this;
    }

    /**
     * Gets computation_time
     *
     * @return float|null
     */
    public function getComputationTime()
    {
        return $this->container['computation_time'];
    }

    /**
     * Sets computation_time
     *
     * @param float|null $computation_time Duration of content validation in seconds
     *
     * @return self
     */
    public function setComputationTime($computation_time)
    {
        $this->container['computation_time'] = $computation_time;

        return $this;
    }

    /**
     * Gets total_looks_validated
     *
     * @return int|null
     */
    public function getTotalLooksValidated()
    {
        return $this->container['total_looks_validated'];
    }

    /**
     * Sets total_looks_validated
     *
     * @param int|null $total_looks_validated The number of looks validated
     *
     * @return self
     */
    public function setTotalLooksValidated($total_looks_validated)
    {
        $this->container['total_looks_validated'] = $total_looks_validated;

        return $this;
    }

    /**
     * Gets total_dashboard_elements_validated
     *
     * @return int|null
     */
    public function getTotalDashboardElementsValidated()
    {
        return $this->container['total_dashboard_elements_validated'];
    }

    /**
     * Sets total_dashboard_elements_validated
     *
     * @param int|null $total_dashboard_elements_validated The number of dashboard elements validated
     *
     * @return self
     */
    public function setTotalDashboardElementsValidated($total_dashboard_elements_validated)
    {
        $this->container['total_dashboard_elements_validated'] = $total_dashboard_elements_validated;

        return $this;
    }

    /**
     * Gets total_dashboard_filters_validated
     *
     * @return int|null
     */
    public function getTotalDashboardFiltersValidated()
    {
        return $this->container['total_dashboard_filters_validated'];
    }

    /**
     * Sets total_dashboard_filters_validated
     *
     * @param int|null $total_dashboard_filters_validated The number of dashboard filters validated
     *
     * @return self
     */
    public function setTotalDashboardFiltersValidated($total_dashboard_filters_validated)
    {
        $this->container['total_dashboard_filters_validated'] = $total_dashboard_filters_validated;

        return $this;
    }

    /**
     * Gets total_scheduled_plans_validated
     *
     * @return int|null
     */
    public function getTotalScheduledPlansValidated()
    {
        return $this->container['total_scheduled_plans_validated'];
    }

    /**
     * Sets total_scheduled_plans_validated
     *
     * @param int|null $total_scheduled_plans_validated The number of scheduled plans validated
     *
     * @return self
     */
    public function setTotalScheduledPlansValidated($total_scheduled_plans_validated)
    {
        $this->container['total_scheduled_plans_validated'] = $total_scheduled_plans_validated;

        return $this;
    }

    /**
     * Gets total_alerts_validated
     *
     * @return int|null
     */
    public function getTotalAlertsValidated()
    {
        return $this->container['total_alerts_validated'];
    }

    /**
     * Sets total_alerts_validated
     *
     * @param int|null $total_alerts_validated The number of alerts validated
     *
     * @return self
     */
    public function setTotalAlertsValidated($total_alerts_validated)
    {
        $this->container['total_alerts_validated'] = $total_alerts_validated;

        return $this;
    }

    /**
     * Gets total_explores_validated
     *
     * @return int|null
     */
    public function getTotalExploresValidated()
    {
        return $this->container['total_explores_validated'];
    }

    /**
     * Sets total_explores_validated
     *
     * @param int|null $total_explores_validated The number of explores used across all content validated
     *
     * @return self
     */
    public function setTotalExploresValidated($total_explores_validated)
    {
        $this->container['total_explores_validated'] = $total_explores_validated;

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


