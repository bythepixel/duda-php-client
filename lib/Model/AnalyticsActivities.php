<?php
/**
 * AnalyticsActivities
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Duda
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * AnalyticsActivities Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AnalyticsActivities implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AnalyticsActivities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'click_to_emails' => 'int',
        'form_submits' => 'int',
        'click_to_maps' => 'int',
        'click_to_calls' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'click_to_emails' => null,
        'form_submits' => null,
        'click_to_maps' => null,
        'click_to_calls' => null
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
        'click_to_emails' => 'CLICK_TO_EMAILS',
        'form_submits' => 'FORM_SUBMITS',
        'click_to_maps' => 'CLICK_TO_MAPS',
        'click_to_calls' => 'CLICK_TO_CALLS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'click_to_emails' => 'setClickToEmails',
        'form_submits' => 'setFormSubmits',
        'click_to_maps' => 'setClickToMaps',
        'click_to_calls' => 'setClickToCalls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'click_to_emails' => 'getClickToEmails',
        'form_submits' => 'getFormSubmits',
        'click_to_maps' => 'getClickToMaps',
        'click_to_calls' => 'getClickToCalls'
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
        $this->container['click_to_emails'] = $data['click_to_emails'] ?? null;
        $this->container['form_submits'] = $data['form_submits'] ?? null;
        $this->container['click_to_maps'] = $data['click_to_maps'] ?? null;
        $this->container['click_to_calls'] = $data['click_to_calls'] ?? null;
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
     * Gets click_to_emails
     *
     * @return int|null
     */
    public function getClickToEmails()
    {
        return $this->container['click_to_emails'];
    }

    /**
     * Sets click_to_emails
     *
     * @param int|null $click_to_emails click_to_emails
     *
     * @return self
     */
    public function setClickToEmails($click_to_emails)
    {
        $this->container['click_to_emails'] = $click_to_emails;

        return $this;
    }

    /**
     * Gets form_submits
     *
     * @return int|null
     */
    public function getFormSubmits()
    {
        return $this->container['form_submits'];
    }

    /**
     * Sets form_submits
     *
     * @param int|null $form_submits form_submits
     *
     * @return self
     */
    public function setFormSubmits($form_submits)
    {
        $this->container['form_submits'] = $form_submits;

        return $this;
    }

    /**
     * Gets click_to_maps
     *
     * @return int|null
     */
    public function getClickToMaps()
    {
        return $this->container['click_to_maps'];
    }

    /**
     * Sets click_to_maps
     *
     * @param int|null $click_to_maps click_to_maps
     *
     * @return self
     */
    public function setClickToMaps($click_to_maps)
    {
        $this->container['click_to_maps'] = $click_to_maps;

        return $this;
    }

    /**
     * Gets click_to_calls
     *
     * @return int|null
     */
    public function getClickToCalls()
    {
        return $this->container['click_to_calls'];
    }

    /**
     * Sets click_to_calls
     *
     * @param int|null $click_to_calls click_to_calls
     *
     * @return self
     */
    public function setClickToCalls($click_to_calls)
    {
        $this->container['click_to_calls'] = $click_to_calls;

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


