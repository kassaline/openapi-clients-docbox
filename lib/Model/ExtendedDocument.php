<?php
/**
 * ExtendedDocument
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
 * ExtendedDocument Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Docbox
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExtendedDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'extendedDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'num_pages' => 'int',
        'mandator' => 'string',
        'folder_id' => 'int',
        'folder_path' => 'string',
        'creation_date' => '\DateTime',
        'creator_id' => 'int',
        'creator_name' => 'string',
        'keywords' => 'string[]',
        'classification' => 'string[]',
        'external' => '\OpenAPI\Client\Docbox\Model\ExtendedDocumentExternal',
        'workflows' => '\OpenAPI\Client\Docbox\Model\ExtendedDocumentWorkflowsInner[]',
        'pages' => '\OpenAPI\Client\Docbox\Model\DocumentPage[]'
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
        'num_pages' => null,
        'mandator' => null,
        'folder_id' => 'int64',
        'folder_path' => null,
        'creation_date' => 'date-time',
        'creator_id' => 'int64',
        'creator_name' => null,
        'keywords' => null,
        'classification' => null,
        'external' => null,
        'workflows' => null,
        'pages' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'num_pages' => false,
        'mandator' => false,
        'folder_id' => false,
        'folder_path' => false,
        'creation_date' => false,
        'creator_id' => false,
        'creator_name' => false,
        'keywords' => false,
        'classification' => false,
        'external' => false,
        'workflows' => false,
        'pages' => false
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
        'id' => 'id',
        'name' => 'name',
        'num_pages' => 'numPages',
        'mandator' => 'mandator',
        'folder_id' => 'folderId',
        'folder_path' => 'folderPath',
        'creation_date' => 'creationDate',
        'creator_id' => 'creatorId',
        'creator_name' => 'creatorName',
        'keywords' => 'keywords',
        'classification' => 'classification',
        'external' => 'external',
        'workflows' => 'workflows',
        'pages' => 'pages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'num_pages' => 'setNumPages',
        'mandator' => 'setMandator',
        'folder_id' => 'setFolderId',
        'folder_path' => 'setFolderPath',
        'creation_date' => 'setCreationDate',
        'creator_id' => 'setCreatorId',
        'creator_name' => 'setCreatorName',
        'keywords' => 'setKeywords',
        'classification' => 'setClassification',
        'external' => 'setExternal',
        'workflows' => 'setWorkflows',
        'pages' => 'setPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'num_pages' => 'getNumPages',
        'mandator' => 'getMandator',
        'folder_id' => 'getFolderId',
        'folder_path' => 'getFolderPath',
        'creation_date' => 'getCreationDate',
        'creator_id' => 'getCreatorId',
        'creator_name' => 'getCreatorName',
        'keywords' => 'getKeywords',
        'classification' => 'getClassification',
        'external' => 'getExternal',
        'workflows' => 'getWorkflows',
        'pages' => 'getPages'
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
        $this->setIfExists('num_pages', $data ?? [], null);
        $this->setIfExists('mandator', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('folder_path', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('creator_name', $data ?? [], null);
        $this->setIfExists('keywords', $data ?? [], null);
        $this->setIfExists('classification', $data ?? [], null);
        $this->setIfExists('external', $data ?? [], null);
        $this->setIfExists('workflows', $data ?? [], null);
        $this->setIfExists('pages', $data ?? [], null);
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
     *
     * @return self
     */
    public function setId($id)
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
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets num_pages
     *
     * @return int|null
     */
    public function getNumPages()
    {
        return $this->container['num_pages'];
    }

    /**
     * Sets num_pages
     *
     * @param int|null $num_pages num_pages
     *
     * @return self
     */
    public function setNumPages($num_pages)
    {
        if (is_null($num_pages)) {
            throw new \InvalidArgumentException('non-nullable num_pages cannot be null');
        }
        $this->container['num_pages'] = $num_pages;

        return $this;
    }

    /**
     * Gets mandator
     *
     * @return string|null
     */
    public function getMandator()
    {
        return $this->container['mandator'];
    }

    /**
     * Sets mandator
     *
     * @param string|null $mandator mandator
     *
     * @return self
     */
    public function setMandator($mandator)
    {
        if (is_null($mandator)) {
            throw new \InvalidArgumentException('non-nullable mandator cannot be null');
        }
        $this->container['mandator'] = $mandator;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return int|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param int|null $folder_id folder_id
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            throw new \InvalidArgumentException('non-nullable folder_id cannot be null');
        }
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folder_path
     *
     * @return string|null
     */
    public function getFolderPath()
    {
        return $this->container['folder_path'];
    }

    /**
     * Sets folder_path
     *
     * @param string|null $folder_path folder_path
     *
     * @return self
     */
    public function setFolderPath($folder_path)
    {
        if (is_null($folder_path)) {
            throw new \InvalidArgumentException('non-nullable folder_path cannot be null');
        }
        $this->container['folder_path'] = $folder_path;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date creation_date
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return int|null
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int|null $creator_id creator_id
     *
     * @return self
     */
    public function setCreatorId($creator_id)
    {
        if (is_null($creator_id)) {
            throw new \InvalidArgumentException('non-nullable creator_id cannot be null');
        }
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets creator_name
     *
     * @return string|null
     */
    public function getCreatorName()
    {
        return $this->container['creator_name'];
    }

    /**
     * Sets creator_name
     *
     * @param string|null $creator_name creator_name
     *
     * @return self
     */
    public function setCreatorName($creator_name)
    {
        if (is_null($creator_name)) {
            throw new \InvalidArgumentException('non-nullable creator_name cannot be null');
        }
        $this->container['creator_name'] = $creator_name;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        if (is_null($keywords)) {
            throw new \InvalidArgumentException('non-nullable keywords cannot be null');
        }
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return string[]|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string[]|null $classification classification
     *
     * @return self
     */
    public function setClassification($classification)
    {
        if (is_null($classification)) {
            throw new \InvalidArgumentException('non-nullable classification cannot be null');
        }
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets external
     *
     * @return \OpenAPI\Client\Docbox\Model\ExtendedDocumentExternal|null
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     *
     * @param \OpenAPI\Client\Docbox\Model\ExtendedDocumentExternal|null $external external
     *
     * @return self
     */
    public function setExternal($external)
    {
        if (is_null($external)) {
            throw new \InvalidArgumentException('non-nullable external cannot be null');
        }
        $this->container['external'] = $external;

        return $this;
    }

    /**
     * Gets workflows
     *
     * @return \OpenAPI\Client\Docbox\Model\ExtendedDocumentWorkflowsInner[]|null
     */
    public function getWorkflows()
    {
        return $this->container['workflows'];
    }

    /**
     * Sets workflows
     *
     * @param \OpenAPI\Client\Docbox\Model\ExtendedDocumentWorkflowsInner[]|null $workflows workflows
     *
     * @return self
     */
    public function setWorkflows($workflows)
    {
        if (is_null($workflows)) {
            throw new \InvalidArgumentException('non-nullable workflows cannot be null');
        }
        $this->container['workflows'] = $workflows;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return \OpenAPI\Client\Docbox\Model\DocumentPage[]|null
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param \OpenAPI\Client\Docbox\Model\DocumentPage[]|null $pages pages
     *
     * @return self
     */
    public function setPages($pages)
    {
        if (is_null($pages)) {
            throw new \InvalidArgumentException('non-nullable pages cannot be null');
        }
        $this->container['pages'] = $pages;

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

