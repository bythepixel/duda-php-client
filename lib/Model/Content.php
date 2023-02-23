<?php
/**
 * Content
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
 * Content Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Content implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location_data' => '\OpenAPI\Client\Model\Location',
        'additional_locations' => '\OpenAPI\Client\Model\Location[]',
        'site_texts' => '\OpenAPI\Client\Model\SiteTexts',
        'business_data' => '\OpenAPI\Client\Model\BusinessData',
        'site_images' => '\OpenAPI\Client\Model\SiteImage[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location_data' => null,
        'additional_locations' => null,
        'site_texts' => null,
        'business_data' => null,
        'site_images' => null
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
        'location_data' => 'location_data',
        'additional_locations' => 'additional_locations',
        'site_texts' => 'site_texts',
        'business_data' => 'business_data',
        'site_images' => 'site_images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_data' => 'setLocationData',
        'additional_locations' => 'setAdditionalLocations',
        'site_texts' => 'setSiteTexts',
        'business_data' => 'setBusinessData',
        'site_images' => 'setSiteImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_data' => 'getLocationData',
        'additional_locations' => 'getAdditionalLocations',
        'site_texts' => 'getSiteTexts',
        'business_data' => 'getBusinessData',
        'site_images' => 'getSiteImages'
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
        $this->container['location_data'] = $data['location_data'] ?? null;
        $this->container['additional_locations'] = $data['additional_locations'] ?? null;
        $this->container['site_texts'] = $data['site_texts'] ?? null;
        $this->container['business_data'] = $data['business_data'] ?? null;
        $this->container['site_images'] = $data['site_images'] ?? null;
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
     * Gets location_data
     *
     * @return \OpenAPI\Client\Model\Location|null
     */
    public function getLocationData()
    {
        return $this->container['location_data'];
    }

    /**
     * Sets location_data
     *
     * @param \OpenAPI\Client\Model\Location|null $location_data location_data
     *
     * @return self
     */
    public function setLocationData($location_data)
    {
        $this->container['location_data'] = $location_data;

        return $this;
    }

    /**
     * Gets additional_locations
     *
     * @return \OpenAPI\Client\Model\Location[]|null
     */
    public function getAdditionalLocations()
    {
        return $this->container['additional_locations'];
    }

    /**
     * Sets additional_locations
     *
     * @param \OpenAPI\Client\Model\Location[]|null $additional_locations additional_locations
     *
     * @return self
     */
    public function setAdditionalLocations($additional_locations)
    {
        $this->container['additional_locations'] = $additional_locations;

        return $this;
    }

    /**
     * Gets site_texts
     *
     * @return \OpenAPI\Client\Model\SiteTexts|null
     */
    public function getSiteTexts()
    {
        return $this->container['site_texts'];
    }

    /**
     * Sets site_texts
     *
     * @param \OpenAPI\Client\Model\SiteTexts|null $site_texts site_texts
     *
     * @return self
     */
    public function setSiteTexts($site_texts)
    {
        $this->container['site_texts'] = $site_texts;

        return $this;
    }

    /**
     * Gets business_data
     *
     * @return \OpenAPI\Client\Model\BusinessData|null
     */
    public function getBusinessData()
    {
        return $this->container['business_data'];
    }

    /**
     * Sets business_data
     *
     * @param \OpenAPI\Client\Model\BusinessData|null $business_data business_data
     *
     * @return self
     */
    public function setBusinessData($business_data)
    {
        $this->container['business_data'] = $business_data;

        return $this;
    }

    /**
     * Gets site_images
     *
     * @return \OpenAPI\Client\Model\SiteImage[]|null
     */
    public function getSiteImages()
    {
        return $this->container['site_images'];
    }

    /**
     * Sets site_images
     *
     * @param \OpenAPI\Client\Model\SiteImage[]|null $site_images site_images
     *
     * @return self
     */
    public function setSiteImages($site_images)
    {
        $this->container['site_images'] = $site_images;

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


