<?php
/**
 * IntegrationHub
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
 * IntegrationHub Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IntegrationHub implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntegrationHub';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can' => 'array<string,bool>',
        'id' => 'int',
        'url' => 'string',
        'label' => 'string',
        'official' => 'bool',
        'fetch_error_message' => 'string',
        'authorization_token' => 'string',
        'has_authorization_token' => 'bool',
        'legal_agreement_signed' => 'bool',
        'legal_agreement_required' => 'bool',
        'legal_agreement_text' => 'string'
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
        'id' => 'int64',
        'url' => null,
        'label' => null,
        'official' => null,
        'fetch_error_message' => null,
        'authorization_token' => null,
        'has_authorization_token' => null,
        'legal_agreement_signed' => null,
        'legal_agreement_required' => null,
        'legal_agreement_text' => null
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
        'url' => 'url',
        'label' => 'label',
        'official' => 'official',
        'fetch_error_message' => 'fetch_error_message',
        'authorization_token' => 'authorization_token',
        'has_authorization_token' => 'has_authorization_token',
        'legal_agreement_signed' => 'legal_agreement_signed',
        'legal_agreement_required' => 'legal_agreement_required',
        'legal_agreement_text' => 'legal_agreement_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'url' => 'setUrl',
        'label' => 'setLabel',
        'official' => 'setOfficial',
        'fetch_error_message' => 'setFetchErrorMessage',
        'authorization_token' => 'setAuthorizationToken',
        'has_authorization_token' => 'setHasAuthorizationToken',
        'legal_agreement_signed' => 'setLegalAgreementSigned',
        'legal_agreement_required' => 'setLegalAgreementRequired',
        'legal_agreement_text' => 'setLegalAgreementText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'url' => 'getUrl',
        'label' => 'getLabel',
        'official' => 'getOfficial',
        'fetch_error_message' => 'getFetchErrorMessage',
        'authorization_token' => 'getAuthorizationToken',
        'has_authorization_token' => 'getHasAuthorizationToken',
        'legal_agreement_signed' => 'getLegalAgreementSigned',
        'legal_agreement_required' => 'getLegalAgreementRequired',
        'legal_agreement_text' => 'getLegalAgreementText'
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['official'] = $data['official'] ?? null;
        $this->container['fetch_error_message'] = $data['fetch_error_message'] ?? null;
        $this->container['authorization_token'] = $data['authorization_token'] ?? null;
        $this->container['has_authorization_token'] = $data['has_authorization_token'] ?? null;
        $this->container['legal_agreement_signed'] = $data['legal_agreement_signed'] ?? null;
        $this->container['legal_agreement_required'] = $data['legal_agreement_required'] ?? null;
        $this->container['legal_agreement_text'] = $data['legal_agreement_text'] ?? null;
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id ID of the hub.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL of the hub.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param string|null $label Label of the hub.
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets official
     *
     * @return bool|null
     */
    public function getOfficial()
    {
        return $this->container['official'];
    }

    /**
     * Sets official
     *
     * @param bool|null $official Whether this hub is a first-party integration hub operated by Looker.
     *
     * @return self
     */
    public function setOfficial($official)
    {
        $this->container['official'] = $official;

        return $this;
    }

    /**
     * Gets fetch_error_message
     *
     * @return string|null
     */
    public function getFetchErrorMessage()
    {
        return $this->container['fetch_error_message'];
    }

    /**
     * Sets fetch_error_message
     *
     * @param string|null $fetch_error_message An error message, present if the integration hub metadata could not be fetched. If this is present, the integration hub is unusable.
     *
     * @return self
     */
    public function setFetchErrorMessage($fetch_error_message)
    {
        $this->container['fetch_error_message'] = $fetch_error_message;

        return $this;
    }

    /**
     * Gets authorization_token
     *
     * @return string|null
     */
    public function getAuthorizationToken()
    {
        return $this->container['authorization_token'];
    }

    /**
     * Sets authorization_token
     *
     * @param string|null $authorization_token (Write-Only) An authorization key that will be sent to the integration hub on every request.
     *
     * @return self
     */
    public function setAuthorizationToken($authorization_token)
    {
        $this->container['authorization_token'] = $authorization_token;

        return $this;
    }

    /**
     * Gets has_authorization_token
     *
     * @return bool|null
     */
    public function getHasAuthorizationToken()
    {
        return $this->container['has_authorization_token'];
    }

    /**
     * Sets has_authorization_token
     *
     * @param bool|null $has_authorization_token Whether the authorization_token is set for the hub.
     *
     * @return self
     */
    public function setHasAuthorizationToken($has_authorization_token)
    {
        $this->container['has_authorization_token'] = $has_authorization_token;

        return $this;
    }

    /**
     * Gets legal_agreement_signed
     *
     * @return bool|null
     */
    public function getLegalAgreementSigned()
    {
        return $this->container['legal_agreement_signed'];
    }

    /**
     * Sets legal_agreement_signed
     *
     * @param bool|null $legal_agreement_signed Whether the legal agreement message has been signed by the user. This only matters if legal_agreement_required is true.
     *
     * @return self
     */
    public function setLegalAgreementSigned($legal_agreement_signed)
    {
        $this->container['legal_agreement_signed'] = $legal_agreement_signed;

        return $this;
    }

    /**
     * Gets legal_agreement_required
     *
     * @return bool|null
     */
    public function getLegalAgreementRequired()
    {
        return $this->container['legal_agreement_required'];
    }

    /**
     * Sets legal_agreement_required
     *
     * @param bool|null $legal_agreement_required Whether the legal terms for the integration hub are required before use.
     *
     * @return self
     */
    public function setLegalAgreementRequired($legal_agreement_required)
    {
        $this->container['legal_agreement_required'] = $legal_agreement_required;

        return $this;
    }

    /**
     * Gets legal_agreement_text
     *
     * @return string|null
     */
    public function getLegalAgreementText()
    {
        return $this->container['legal_agreement_text'];
    }

    /**
     * Sets legal_agreement_text
     *
     * @param string|null $legal_agreement_text The legal agreement text for this integration hub.
     *
     * @return self
     */
    public function setLegalAgreementText($legal_agreement_text)
    {
        $this->container['legal_agreement_text'] = $legal_agreement_text;

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


