<?php
/**
 * ContentValidationDashboardElement
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
 * ContentValidationDashboardElement Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContentValidationDashboardElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentValidationDashboardElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body_text' => 'string',
        'dashboard_id' => 'string',
        'id' => 'string',
        'look_id' => 'string',
        'note_display' => 'string',
        'note_state' => 'string',
        'note_text' => 'string',
        'note_text_as_html' => 'string',
        'query_id' => 'int',
        'subtitle_text' => 'string',
        'title' => 'string',
        'title_hidden' => 'bool',
        'title_text' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'body_text' => null,
        'dashboard_id' => null,
        'id' => null,
        'look_id' => null,
        'note_display' => null,
        'note_state' => null,
        'note_text' => null,
        'note_text_as_html' => null,
        'query_id' => 'int64',
        'subtitle_text' => null,
        'title' => null,
        'title_hidden' => null,
        'title_text' => null,
        'type' => null
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
        'body_text' => 'body_text',
        'dashboard_id' => 'dashboard_id',
        'id' => 'id',
        'look_id' => 'look_id',
        'note_display' => 'note_display',
        'note_state' => 'note_state',
        'note_text' => 'note_text',
        'note_text_as_html' => 'note_text_as_html',
        'query_id' => 'query_id',
        'subtitle_text' => 'subtitle_text',
        'title' => 'title',
        'title_hidden' => 'title_hidden',
        'title_text' => 'title_text',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body_text' => 'setBodyText',
        'dashboard_id' => 'setDashboardId',
        'id' => 'setId',
        'look_id' => 'setLookId',
        'note_display' => 'setNoteDisplay',
        'note_state' => 'setNoteState',
        'note_text' => 'setNoteText',
        'note_text_as_html' => 'setNoteTextAsHtml',
        'query_id' => 'setQueryId',
        'subtitle_text' => 'setSubtitleText',
        'title' => 'setTitle',
        'title_hidden' => 'setTitleHidden',
        'title_text' => 'setTitleText',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body_text' => 'getBodyText',
        'dashboard_id' => 'getDashboardId',
        'id' => 'getId',
        'look_id' => 'getLookId',
        'note_display' => 'getNoteDisplay',
        'note_state' => 'getNoteState',
        'note_text' => 'getNoteText',
        'note_text_as_html' => 'getNoteTextAsHtml',
        'query_id' => 'getQueryId',
        'subtitle_text' => 'getSubtitleText',
        'title' => 'getTitle',
        'title_hidden' => 'getTitleHidden',
        'title_text' => 'getTitleText',
        'type' => 'getType'
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
        $this->container['body_text'] = $data['body_text'] ?? null;
        $this->container['dashboard_id'] = $data['dashboard_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['look_id'] = $data['look_id'] ?? null;
        $this->container['note_display'] = $data['note_display'] ?? null;
        $this->container['note_state'] = $data['note_state'] ?? null;
        $this->container['note_text'] = $data['note_text'] ?? null;
        $this->container['note_text_as_html'] = $data['note_text_as_html'] ?? null;
        $this->container['query_id'] = $data['query_id'] ?? null;
        $this->container['subtitle_text'] = $data['subtitle_text'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['title_hidden'] = $data['title_hidden'] ?? null;
        $this->container['title_text'] = $data['title_text'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets body_text
     *
     * @return string|null
     */
    public function getBodyText()
    {
        return $this->container['body_text'];
    }

    /**
     * Sets body_text
     *
     * @param string|null $body_text Text tile body text
     *
     * @return self
     */
    public function setBodyText($body_text)
    {
        $this->container['body_text'] = $body_text;

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
     * Gets look_id
     *
     * @return string|null
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param string|null $look_id Id Of Look
     *
     * @return self
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets note_display
     *
     * @return string|null
     */
    public function getNoteDisplay()
    {
        return $this->container['note_display'];
    }

    /**
     * Sets note_display
     *
     * @param string|null $note_display Note Display
     *
     * @return self
     */
    public function setNoteDisplay($note_display)
    {
        $this->container['note_display'] = $note_display;

        return $this;
    }

    /**
     * Gets note_state
     *
     * @return string|null
     */
    public function getNoteState()
    {
        return $this->container['note_state'];
    }

    /**
     * Sets note_state
     *
     * @param string|null $note_state Note State
     *
     * @return self
     */
    public function setNoteState($note_state)
    {
        $this->container['note_state'] = $note_state;

        return $this;
    }

    /**
     * Gets note_text
     *
     * @return string|null
     */
    public function getNoteText()
    {
        return $this->container['note_text'];
    }

    /**
     * Sets note_text
     *
     * @param string|null $note_text Note Text
     *
     * @return self
     */
    public function setNoteText($note_text)
    {
        $this->container['note_text'] = $note_text;

        return $this;
    }

    /**
     * Gets note_text_as_html
     *
     * @return string|null
     */
    public function getNoteTextAsHtml()
    {
        return $this->container['note_text_as_html'];
    }

    /**
     * Sets note_text_as_html
     *
     * @param string|null $note_text_as_html Note Text as Html
     *
     * @return self
     */
    public function setNoteTextAsHtml($note_text_as_html)
    {
        $this->container['note_text_as_html'] = $note_text_as_html;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return int|null
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param int|null $query_id Id Of Query
     *
     * @return self
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets subtitle_text
     *
     * @return string|null
     */
    public function getSubtitleText()
    {
        return $this->container['subtitle_text'];
    }

    /**
     * Sets subtitle_text
     *
     * @param string|null $subtitle_text Text tile subtitle text
     *
     * @return self
     */
    public function setSubtitleText($subtitle_text)
    {
        $this->container['subtitle_text'] = $subtitle_text;

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
     * @param string|null $title Title of dashboard element
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_hidden
     *
     * @return bool|null
     */
    public function getTitleHidden()
    {
        return $this->container['title_hidden'];
    }

    /**
     * Sets title_hidden
     *
     * @param bool|null $title_hidden Whether title is hidden
     *
     * @return self
     */
    public function setTitleHidden($title_hidden)
    {
        $this->container['title_hidden'] = $title_hidden;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return string|null
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param string|null $title_text Text tile title
     *
     * @return self
     */
    public function setTitleText($title_text)
    {
        $this->container['title_text'] = $title_text;

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
     * @param string|null $type Type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

