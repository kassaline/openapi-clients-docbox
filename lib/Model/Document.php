<?php
/**
 * Document
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
 * Document Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Docbox
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, \JsonSerializable, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'numPages' => 'int',
        'creationDate' => '\DateTime',
        'archivingDate' => '\DateTime',
        'archivingUserId' => 'int',
        'folderId' => 'int',
        'externalMetadata' => '\OpenAPI\Client\Docbox\Model\ExternalMetadata[]'
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
        'name' => null,
        'numPages' => 'int32',
        'creationDate' => 'date-time',
        'archivingDate' => 'date-time',
        'archivingUserId' => 'int64',
        'folderId' => 'int64',
        'externalMetadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'numPages' => false,
        'creationDate' => false,
        'archivingDate' => true,
        'archivingUserId' => true,
        'folderId' => true,
        'externalMetadata' => false
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
        'name' => 'name',
        'numPages' => 'num-pages',
        'creationDate' => 'creation-date',
        'archivingDate' => 'archiving-date',
        'archivingUserId' => 'archiving-user-id',
        'folderId' => 'folder-id',
        'externalMetadata' => 'external-metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'numPages' => 'setNumPages',
        'creationDate' => 'setCreationDate',
        'archivingDate' => 'setArchivingDate',
        'archivingUserId' => 'setArchivingUserId',
        'folderId' => 'setFolderId',
        'externalMetadata' => 'setExternalMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'numPages' => 'getNumPages',
        'creationDate' => 'getCreationDate',
        'archivingDate' => 'getArchivingDate',
        'archivingUserId' => 'getArchivingUserId',
        'folderId' => 'getFolderId',
        'externalMetadata' => 'getExternalMetadata'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('numPages', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('archivingDate', $data ?? [], null);
        $this->setIfExists('archivingUserId', $data ?? [], null);
        $this->setIfExists('folderId', $data ?? [], null);
        $this->setIfExists('externalMetadata', $data ?? [], null);
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
        return [];
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     */
    public function setName($name): self
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets numPages
     *
     * @return int|null
     */
    public function getNumPages()
    {
        return $this->container['numPages'];
    }

    /**
     * Sets numPages
     *
     * @param int|null $numPages numPages
     */
    public function setNumPages($numPages): self
    {
        if (is_null($numPages)) {
            throw new \InvalidArgumentException('non-nullable numPages cannot be null');
        }

        $this->container['numPages'] = $numPages;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate creationDate
     */
    public function setCreationDate($creationDate): self
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }

        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets archivingDate
     *
     * @return \DateTime|null
     */
    public function getArchivingDate()
    {
        return $this->container['archivingDate'];
    }

    /**
     * Sets archivingDate
     *
     * @param \DateTime|null $archivingDate archivingDate
     */
    public function setArchivingDate($archivingDate): self
    {
        if (is_null($archivingDate)) {
            $this->openAPINullablesSetToNull[] = 'archivingDate';
        } else {
            $nullablesSetToNull = $this->openAPINullablesSetToNull;
            $index = array_search('archivingDate', $nullablesSetToNull, true);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['archivingDate'] = $archivingDate;

        return $this;
    }

    /**
     * Gets archivingUserId
     *
     * @return int|null
     */
    public function getArchivingUserId()
    {
        return $this->container['archivingUserId'];
    }

    /**
     * Sets archivingUserId
     *
     * @param int|null $archivingUserId archivingUserId
     */
    public function setArchivingUserId($archivingUserId): self
    {
        if (is_null($archivingUserId)) {
            $this->openAPINullablesSetToNull[] = 'archivingUserId';
        } else {
            $nullablesSetToNull = $this->openAPINullablesSetToNull;
            $index = array_search('archivingUserId', $nullablesSetToNull, true);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['archivingUserId'] = $archivingUserId;

        return $this;
    }

    /**
     * Gets folderId
     *
     * @return int|null
     */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     *
     * @param int|null $folderId folderId
     */
    public function setFolderId($folderId): self
    {
        if (is_null($folderId)) {
            $this->openAPINullablesSetToNull[] = 'folderId';
        } else {
            $nullablesSetToNull = $this->openAPINullablesSetToNull;
            $index = array_search('folderId', $nullablesSetToNull, true);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets externalMetadata
     *
     * @return \OpenAPI\Client\Docbox\Model\ExternalMetadata[]|null
     */
    public function getExternalMetadata()
    {
        return $this->container['externalMetadata'];
    }

    /**
     * Sets externalMetadata
     *
     * @param \OpenAPI\Client\Docbox\Model\ExternalMetadata[]|null $externalMetadata externalMetadata
     */
    public function setExternalMetadata($externalMetadata): self
    {
        if (is_null($externalMetadata)) {
            throw new \InvalidArgumentException('non-nullable externalMetadata cannot be null');
        }

        $this->container['externalMetadata'] = $externalMetadata;

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


