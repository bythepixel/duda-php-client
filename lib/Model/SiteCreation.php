<?php
/**
 * SiteCreation
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
 * OpenAPI Generator version: 6.4.0
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
 * SiteCreation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SiteCreation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SiteCreation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'site_domain' => 'string',
        'external_uid' => 'string',
        'site_business_info' => '\OpenAPI\Client\Model\SiteBusinessInfo',
        'site_alternate_domains' => '\OpenAPI\Client\Model\AlternateDomains',
        'site_seo' => '\OpenAPI\Client\Model\Seo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'site_domain' => null,
        'external_uid' => null,
        'site_business_info' => null,
        'site_alternate_domains' => null,
        'site_seo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'site_domain' => false,
		'external_uid' => false,
		'site_business_info' => false,
		'site_alternate_domains' => false,
		'site_seo' => false
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
        'site_domain' => 'site_domain',
        'external_uid' => 'external_uid',
        'site_business_info' => 'site_business_info',
        'site_alternate_domains' => 'site_alternate_domains',
        'site_seo' => 'site_seo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'site_domain' => 'setSiteDomain',
        'external_uid' => 'setExternalUid',
        'site_business_info' => 'setSiteBusinessInfo',
        'site_alternate_domains' => 'setSiteAlternateDomains',
        'site_seo' => 'setSiteSeo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'site_domain' => 'getSiteDomain',
        'external_uid' => 'getExternalUid',
        'site_business_info' => 'getSiteBusinessInfo',
        'site_alternate_domains' => 'getSiteAlternateDomains',
        'site_seo' => 'getSiteSeo'
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
        $this->setIfExists('site_domain', $data ?? [], null);
        $this->setIfExists('external_uid', $data ?? [], null);
        $this->setIfExists('site_business_info', $data ?? [], null);
        $this->setIfExists('site_alternate_domains', $data ?? [], null);
        $this->setIfExists('site_seo', $data ?? [], null);
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
     * Gets site_domain
     *
     * @return string|null
     */
    public function getSiteDomain()
    {
        return $this->container['site_domain'];
    }

    /**
     * Sets site_domain
     *
     * @param string|null $site_domain site_domain
     *
     * @return self
     */
    public function setSiteDomain($site_domain)
    {
        if (is_null($site_domain)) {
            throw new \InvalidArgumentException('non-nullable site_domain cannot be null');
        }
        $this->container['site_domain'] = $site_domain;

        return $this;
    }

    /**
     * Gets external_uid
     *
     * @return string|null
     */
    public function getExternalUid()
    {
        return $this->container['external_uid'];
    }

    /**
     * Sets external_uid
     *
     * @param string|null $external_uid external_uid
     *
     * @return self
     */
    public function setExternalUid($external_uid)
    {
        if (is_null($external_uid)) {
            throw new \InvalidArgumentException('non-nullable external_uid cannot be null');
        }
        $this->container['external_uid'] = $external_uid;

        return $this;
    }

    /**
     * Gets site_business_info
     *
     * @return \OpenAPI\Client\Model\SiteBusinessInfo|null
     */
    public function getSiteBusinessInfo()
    {
        return $this->container['site_business_info'];
    }

    /**
     * Sets site_business_info
     *
     * @param \OpenAPI\Client\Model\SiteBusinessInfo|null $site_business_info site_business_info
     *
     * @return self
     */
    public function setSiteBusinessInfo($site_business_info)
    {
        if (is_null($site_business_info)) {
            throw new \InvalidArgumentException('non-nullable site_business_info cannot be null');
        }
        $this->container['site_business_info'] = $site_business_info;

        return $this;
    }

    /**
     * Gets site_alternate_domains
     *
     * @return \OpenAPI\Client\Model\AlternateDomains|null
     */
    public function getSiteAlternateDomains()
    {
        return $this->container['site_alternate_domains'];
    }

    /**
     * Sets site_alternate_domains
     *
     * @param \OpenAPI\Client\Model\AlternateDomains|null $site_alternate_domains site_alternate_domains
     *
     * @return self
     */
    public function setSiteAlternateDomains($site_alternate_domains)
    {
        if (is_null($site_alternate_domains)) {
            throw new \InvalidArgumentException('non-nullable site_alternate_domains cannot be null');
        }
        $this->container['site_alternate_domains'] = $site_alternate_domains;

        return $this;
    }

    /**
     * Gets site_seo
     *
     * @return \OpenAPI\Client\Model\Seo|null
     */
    public function getSiteSeo()
    {
        return $this->container['site_seo'];
    }

    /**
     * Sets site_seo
     *
     * @param \OpenAPI\Client\Model\Seo|null $site_seo site_seo
     *
     * @return self
     */
    public function setSiteSeo($site_seo)
    {
        if (is_null($site_seo)) {
            throw new \InvalidArgumentException('non-nullable site_seo cannot be null');
        }
        $this->container['site_seo'] = $site_seo;

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


