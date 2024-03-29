<?php
/**
 * SiteUpdate
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
 * SiteUpdate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SiteUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SiteUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'site_domain' => 'string',
        'external_uid' => 'string',
        'default_domain_prefix' => 'string',
        'lang' => 'string',
        'fav_icon' => 'string',
        'force_https' => 'bool',
        'google_tracking_id' => 'string',
        'site_alternate_domains' => '\OpenAPI\Client\Model\AlternateDomains',
        'site_seo' => '\OpenAPI\Client\Model\Seo',
        'schemas' => '\OpenAPI\Client\Model\SiteSchemas'
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
        'default_domain_prefix' => null,
        'lang' => null,
        'fav_icon' => null,
        'force_https' => null,
        'google_tracking_id' => null,
        'site_alternate_domains' => null,
        'site_seo' => null,
        'schemas' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'site_domain' => false,
		'external_uid' => false,
		'default_domain_prefix' => false,
		'lang' => false,
		'fav_icon' => false,
		'force_https' => false,
		'google_tracking_id' => false,
		'site_alternate_domains' => false,
		'site_seo' => false,
		'schemas' => false
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
        'default_domain_prefix' => 'default_domain_prefix',
        'lang' => 'lang',
        'fav_icon' => 'fav_icon',
        'force_https' => 'force_https',
        'google_tracking_id' => 'google_tracking_id',
        'site_alternate_domains' => 'site_alternate_domains',
        'site_seo' => 'site_seo',
        'schemas' => 'schemas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'site_domain' => 'setSiteDomain',
        'external_uid' => 'setExternalUid',
        'default_domain_prefix' => 'setDefaultDomainPrefix',
        'lang' => 'setLang',
        'fav_icon' => 'setFavIcon',
        'force_https' => 'setForceHttps',
        'google_tracking_id' => 'setGoogleTrackingId',
        'site_alternate_domains' => 'setSiteAlternateDomains',
        'site_seo' => 'setSiteSeo',
        'schemas' => 'setSchemas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'site_domain' => 'getSiteDomain',
        'external_uid' => 'getExternalUid',
        'default_domain_prefix' => 'getDefaultDomainPrefix',
        'lang' => 'getLang',
        'fav_icon' => 'getFavIcon',
        'force_https' => 'getForceHttps',
        'google_tracking_id' => 'getGoogleTrackingId',
        'site_alternate_domains' => 'getSiteAlternateDomains',
        'site_seo' => 'getSiteSeo',
        'schemas' => 'getSchemas'
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
        $this->setIfExists('default_domain_prefix', $data ?? [], null);
        $this->setIfExists('lang', $data ?? [], null);
        $this->setIfExists('fav_icon', $data ?? [], null);
        $this->setIfExists('force_https', $data ?? [], null);
        $this->setIfExists('google_tracking_id', $data ?? [], null);
        $this->setIfExists('site_alternate_domains', $data ?? [], null);
        $this->setIfExists('site_seo', $data ?? [], null);
        $this->setIfExists('schemas', $data ?? [], null);
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
     * Gets default_domain_prefix
     *
     * @return string|null
     */
    public function getDefaultDomainPrefix()
    {
        return $this->container['default_domain_prefix'];
    }

    /**
     * Sets default_domain_prefix
     *
     * @param string|null $default_domain_prefix default_domain_prefix
     *
     * @return self
     */
    public function setDefaultDomainPrefix($default_domain_prefix)
    {

        if (is_null($default_domain_prefix)) {
            throw new \InvalidArgumentException('non-nullable default_domain_prefix cannot be null');
        }

        $this->container['default_domain_prefix'] = $default_domain_prefix;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string|null $lang lang
     *
     * @return self
     */
    public function setLang($lang)
    {

        if (is_null($lang)) {
            throw new \InvalidArgumentException('non-nullable lang cannot be null');
        }

        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets fav_icon
     *
     * @return string|null
     */
    public function getFavIcon()
    {
        return $this->container['fav_icon'];
    }

    /**
     * Sets fav_icon
     *
     * @param string|null $fav_icon fav_icon
     *
     * @return self
     */
    public function setFavIcon($fav_icon)
    {

        if (is_null($fav_icon)) {
            throw new \InvalidArgumentException('non-nullable fav_icon cannot be null');
        }

        $this->container['fav_icon'] = $fav_icon;

        return $this;
    }

    /**
     * Gets force_https
     *
     * @return bool|null
     */
    public function getForceHttps()
    {
        return $this->container['force_https'];
    }

    /**
     * Sets force_https
     *
     * @param bool|null $force_https force_https
     *
     * @return self
     */
    public function setForceHttps($force_https)
    {

        if (is_null($force_https)) {
            throw new \InvalidArgumentException('non-nullable force_https cannot be null');
        }

        $this->container['force_https'] = $force_https;

        return $this;
    }

    /**
     * Gets google_tracking_id
     *
     * @return string|null
     */
    public function getGoogleTrackingId()
    {
        return $this->container['google_tracking_id'];
    }

    /**
     * Sets google_tracking_id
     *
     * @param string|null $google_tracking_id google_tracking_id
     *
     * @return self
     */
    public function setGoogleTrackingId($google_tracking_id)
    {

        if (is_null($google_tracking_id)) {
            throw new \InvalidArgumentException('non-nullable google_tracking_id cannot be null');
        }

        $this->container['google_tracking_id'] = $google_tracking_id;

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
     * Gets schemas
     *
     * @return \OpenAPI\Client\Model\SiteSchemas|null
     */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
     * Sets schemas
     *
     * @param \OpenAPI\Client\Model\SiteSchemas|null $schemas schemas
     *
     * @return self
     */
    public function setSchemas($schemas)
    {

        if (is_null($schemas)) {
            throw new \InvalidArgumentException('non-nullable schemas cannot be null');
        }

        $this->container['schemas'] = $schemas;

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


