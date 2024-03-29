<?php
/**
 * ExternalDetails
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.2.1
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
 * ExternalDetails Class Doc Comment
 *
 * @category Class
 * @description Contains properties related to the data source.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExternalDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled' => 'bool',
        'external_endpoint' => 'string',
        'external_id' => 'string',
        'authorization_header_value' => 'string',
        'page_item_url_field' => 'string',
        'collection_data_json_path' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled' => null,
        'external_endpoint' => null,
        'external_id' => null,
        'authorization_header_value' => null,
        'page_item_url_field' => null,
        'collection_data_json_path' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled' => false,
		'external_endpoint' => false,
		'external_id' => false,
		'authorization_header_value' => false,
		'page_item_url_field' => false,
		'collection_data_json_path' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'enabled' => 'enabled',
        'external_endpoint' => 'external_endpoint',
        'external_id' => 'external_id',
        'authorization_header_value' => 'authorization_header_value',
        'page_item_url_field' => 'page_item_url_field',
        'collection_data_json_path' => 'collection_data_json_path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'external_endpoint' => 'setExternalEndpoint',
        'external_id' => 'setExternalId',
        'authorization_header_value' => 'setAuthorizationHeaderValue',
        'page_item_url_field' => 'setPageItemUrlField',
        'collection_data_json_path' => 'setCollectionDataJsonPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'external_endpoint' => 'getExternalEndpoint',
        'external_id' => 'getExternalId',
        'authorization_header_value' => 'getAuthorizationHeaderValue',
        'page_item_url_field' => 'getPageItemUrlField',
        'collection_data_json_path' => 'getCollectionDataJsonPath'
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
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('external_endpoint', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('authorization_header_value', $data ?? [], null);
        $this->setIfExists('page_item_url_field', $data ?? [], null);
        $this->setIfExists('collection_data_json_path', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled A boolean flag to specify the collection as external (true) vs. an internal (false) collection.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {

        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }

        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets external_endpoint
     *
     * @return string|null
     */
    public function getExternalEndpoint()
    {
        return $this->container['external_endpoint'];
    }

    /**
     * Sets external_endpoint
     *
     * @param string|null $external_endpoint external_endpoint
     *
     * @return self
     */
    public function setExternalEndpoint($external_endpoint)
    {

        if (is_null($external_endpoint)) {
            throw new \InvalidArgumentException('non-nullable external_endpoint cannot be null');
        }

        $this->container['external_endpoint'] = $external_endpoint;

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
     * @param string|null $external_id Value that can be used to revalidate the collection cache without using a site alias.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {

        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets authorization_header_value
     *
     * @return string|null
     */
    public function getAuthorizationHeaderValue()
    {
        return $this->container['authorization_header_value'];
    }

    /**
     * Sets authorization_header_value
     *
     * @param string|null $authorization_header_value authorization_header_value
     *
     * @return self
     */
    public function setAuthorizationHeaderValue($authorization_header_value)
    {

        if (is_null($authorization_header_value)) {
            throw new \InvalidArgumentException('non-nullable authorization_header_value cannot be null');
        }

        $this->container['authorization_header_value'] = $authorization_header_value;

        return $this;
    }

    /**
     * Gets page_item_url_field
     *
     * @return string|null
     */
    public function getPageItemUrlField()
    {
        return $this->container['page_item_url_field'];
    }

    /**
     * Sets page_item_url_field
     *
     * @param string|null $page_item_url_field The name of a field in the collection. The value of this field will be used to generate the URL slug for dynamic pages generated by this collection. The values contained in this field should not exceed 350 characters - excess characters will be trimmed from the URL.
     *
     * @return self
     */
    public function setPageItemUrlField($page_item_url_field)
    {

        if (is_null($page_item_url_field)) {
            throw new \InvalidArgumentException('non-nullable page_item_url_field cannot be null');
        }

        $this->container['page_item_url_field'] = $page_item_url_field;

        return $this;
    }

    /**
     * Gets collection_data_json_path
     *
     * @return string|null
     */
    public function getCollectionDataJsonPath()
    {
        return $this->container['collection_data_json_path'];
    }

    /**
     * Sets collection_data_json_path
     *
     * @param string|null $collection_data_json_path Path to the root of the collection data within the collection endpoint response. If no path is provided the entire response will be used as collection data. The value can use dot or bracket notation e.g., object.property or ['object'].['property']
     *
     * @return self
     */
    public function setCollectionDataJsonPath($collection_data_json_path)
    {

        if (is_null($collection_data_json_path)) {
            throw new \InvalidArgumentException('non-nullable collection_data_json_path cannot be null');
        }

        $this->container['collection_data_json_path'] = $collection_data_json_path;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


