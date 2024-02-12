<?php
/**
 * Category
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CurseForge API
 *
 * HTTP API for CurseForge
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aternos\CurseForgeApi\Model;

use \ArrayAccess;
use \Aternos\CurseForgeApi\ObjectSerializer;

/**
 * Category Class Doc Comment
 *
 * @category Class
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Category implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'game_id' => 'int',
        'name' => 'string',
        'slug' => 'string',
        'url' => 'string',
        'icon_url' => 'string',
        'date_modified' => '\DateTime',
        'is_class' => 'bool',
        'class_id' => 'int',
        'parent_category_id' => 'int',
        'display_index' => 'int'
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
        'game_id' => 'int64',
        'name' => null,
        'slug' => null,
        'url' => 'uri',
        'icon_url' => 'uri',
        'date_modified' => 'date-time',
        'is_class' => null,
        'class_id' => 'int64',
        'parent_category_id' => 'int64',
        'display_index' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'game_id' => false,
        'name' => false,
        'slug' => false,
        'url' => false,
        'icon_url' => false,
        'date_modified' => false,
        'is_class' => false,
        'class_id' => false,
        'parent_category_id' => false,
        'display_index' => false
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
        'game_id' => 'gameId',
        'name' => 'name',
        'slug' => 'slug',
        'url' => 'url',
        'icon_url' => 'iconUrl',
        'date_modified' => 'dateModified',
        'is_class' => 'isClass',
        'class_id' => 'classId',
        'parent_category_id' => 'parentCategoryId',
        'display_index' => 'displayIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'game_id' => 'setGameId',
        'name' => 'setName',
        'slug' => 'setSlug',
        'url' => 'setUrl',
        'icon_url' => 'setIconUrl',
        'date_modified' => 'setDateModified',
        'is_class' => 'setIsClass',
        'class_id' => 'setClassId',
        'parent_category_id' => 'setParentCategoryId',
        'display_index' => 'setDisplayIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'game_id' => 'getGameId',
        'name' => 'getName',
        'slug' => 'getSlug',
        'url' => 'getUrl',
        'icon_url' => 'getIconUrl',
        'date_modified' => 'getDateModified',
        'is_class' => 'getIsClass',
        'class_id' => 'getClassId',
        'parent_category_id' => 'getParentCategoryId',
        'display_index' => 'getDisplayIndex'
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
        $this->setIfExists('game_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('icon_url', $data ?? [], null);
        $this->setIfExists('date_modified', $data ?? [], null);
        $this->setIfExists('is_class', $data ?? [], null);
        $this->setIfExists('class_id', $data ?? [], null);
        $this->setIfExists('parent_category_id', $data ?? [], null);
        $this->setIfExists('display_index', $data ?? [], null);
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
     * Gets game_id
     *
     * @return int|null
     */
    public function getGameId()
    {
        return $this->container['game_id'];
    }

    /**
     * Sets game_id
     *
     * @param int|null $game_id game_id
     *
     * @return self
     */
    public function setGameId($game_id)
    {
        if (is_null($game_id)) {
            throw new \InvalidArgumentException('non-nullable game_id cannot be null');
        }
        $this->container['game_id'] = $game_id;

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
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

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
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url icon_url
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        if (is_null($icon_url)) {
            throw new \InvalidArgumentException('non-nullable icon_url cannot be null');
        }
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime|null $date_modified date_modified
     *
     * @return self
     */
    public function setDateModified($date_modified)
    {
        if (is_null($date_modified)) {
            throw new \InvalidArgumentException('non-nullable date_modified cannot be null');
        }
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets is_class
     *
     * @return bool|null
     */
    public function getIsClass()
    {
        return $this->container['is_class'];
    }

    /**
     * Sets is_class
     *
     * @param bool|null $is_class is_class
     *
     * @return self
     */
    public function setIsClass($is_class)
    {
        if (is_null($is_class)) {
            throw new \InvalidArgumentException('non-nullable is_class cannot be null');
        }
        $this->container['is_class'] = $is_class;

        return $this;
    }

    /**
     * Gets class_id
     *
     * @return int|null
     */
    public function getClassId()
    {
        return $this->container['class_id'];
    }

    /**
     * Sets class_id
     *
     * @param int|null $class_id class_id
     *
     * @return self
     */
    public function setClassId($class_id)
    {
        if (is_null($class_id)) {
            throw new \InvalidArgumentException('non-nullable class_id cannot be null');
        }
        $this->container['class_id'] = $class_id;

        return $this;
    }

    /**
     * Gets parent_category_id
     *
     * @return int|null
     */
    public function getParentCategoryId()
    {
        return $this->container['parent_category_id'];
    }

    /**
     * Sets parent_category_id
     *
     * @param int|null $parent_category_id parent_category_id
     *
     * @return self
     */
    public function setParentCategoryId($parent_category_id)
    {
        if (is_null($parent_category_id)) {
            throw new \InvalidArgumentException('non-nullable parent_category_id cannot be null');
        }
        $this->container['parent_category_id'] = $parent_category_id;

        return $this;
    }

    /**
     * Gets display_index
     *
     * @return int|null
     */
    public function getDisplayIndex()
    {
        return $this->container['display_index'];
    }

    /**
     * Sets display_index
     *
     * @param int|null $display_index display_index
     *
     * @return self
     */
    public function setDisplayIndex($display_index)
    {
        if (is_null($display_index)) {
            throw new \InvalidArgumentException('non-nullable display_index cannot be null');
        }
        $this->container['display_index'] = $display_index;

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


