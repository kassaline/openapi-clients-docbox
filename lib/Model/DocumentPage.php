<?php
/**
 * DocumentPage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Docbox
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DOCBOX® API
 *
 * The DOCBOX® REST API makes it possible to integrate the DOCBOX® into third-party programs such as ERP or CRM applications. The third-party programs can access certain DOCBOX® functions, for example to archive documents in the DOCBOX® or to search for documents in it.  The api is available under https://{docbox-host}:{api-port}/api/v2. The default port is 8081 and should not be mistaken with the port of the webapp.  To authenticate to the API you must pass the API-Key header. Api keys can be configured by administrators in the modules->API section. If you are using the cloud version of DOCBOX® you must also pass the Cloud-ID header with your Cloudid.
 *
 * The version of the OpenAPI document: 7.6.0
 * Contact: support@docbox.eu
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Docbox\Model;

use \ArrayAccess;
use \OpenAPI\Client\Docbox\ObjectSerializer;

/**
 * DocumentPage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Docbox
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentPage implements ModelInterface, ArrayAccess, \JsonSerializable, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'documentPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'hit' => 'bool',
        'notes' => '\OpenAPI\Client\Docbox\Model\DocumentPageNotesInner[]',
        'stamps' => '\OpenAPI\Client\Docbox\Model\DocumentPageStampsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'hit' => null,
        'notes' => null,
        'stamps' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'hit' => false,
        'notes' => false,
        'stamps' => false
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
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->openAPINullablesSetToNull, true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'hit' => 'hit',
        'notes' => 'notes',
        'stamps' => 'stamps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'hit' => 'setHit',
        'notes' => 'setNotes',
        'stamps' => 'setStamps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'hit' => 'getHit',
        'notes' => 'getNotes',
        'stamps' => 'getStamps'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('hit', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('stamps', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
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
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }

        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }

        if ($this->container['stamps'] === null) {
            $invalidProperties[] = "'stamps' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return $this->listInvalidProperties() === [];
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     */
    public function setId($id): self
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets hit
     *
     * @return bool|null
     */
    public function getHit()
    {
        return $this->container['hit'];
    }

    /**
     * Sets hit
     *
     * @param bool|null $hit hit
     */
    public function setHit($hit): self
    {
        if (is_null($hit)) {
            throw new \InvalidArgumentException('non-nullable hit cannot be null');
        }

        $this->container['hit'] = $hit;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \OpenAPI\Client\Docbox\Model\DocumentPageNotesInner[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \OpenAPI\Client\Docbox\Model\DocumentPageNotesInner[] $notes notes
     */
    public function setNotes($notes): self
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }

        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets stamps
     *
     * @return \OpenAPI\Client\Docbox\Model\DocumentPageStampsInner[]
     */
    public function getStamps()
    {
        return $this->container['stamps'];
    }

    /**
     * Sets stamps
     *
     * @param \OpenAPI\Client\Docbox\Model\DocumentPageStampsInner[] $stamps stamps
     */
    public function setStamps($stamps): self
    {
        if (is_null($stamps)) {
            throw new \InvalidArgumentException('non-nullable stamps cannot be null');
        }

        $this->container['stamps'] = $stamps;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     */
    public function offsetSet($offset, mixed $value): void
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
     */
    public function __toString(): string
    {
        return (string) json_encode(
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


