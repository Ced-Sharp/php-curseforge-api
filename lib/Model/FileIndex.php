<?php
/**
 * FileIndex
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
 * Generator version: 7.7.0
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
 * FileIndex Class Doc Comment
 *
 * @category Class
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FileIndex implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FileIndex';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'game_version' => 'string',
        'file_id' => 'int',
        'filename' => 'string',
        'release_type' => '\Aternos\CurseForgeApi\Model\FileReleaseType',
        'game_version_type_id' => 'int',
        'mod_loader' => '\Aternos\CurseForgeApi\Model\ModLoaderType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'game_version' => null,
        'file_id' => 'int32',
        'filename' => null,
        'release_type' => null,
        'game_version_type_id' => 'int32',
        'mod_loader' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'game_version' => false,
        'file_id' => false,
        'filename' => false,
        'release_type' => false,
        'game_version_type_id' => true,
        'mod_loader' => false
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
        'game_version' => 'gameVersion',
        'file_id' => 'fileId',
        'filename' => 'filename',
        'release_type' => 'releaseType',
        'game_version_type_id' => 'gameVersionTypeId',
        'mod_loader' => 'modLoader'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_version' => 'setGameVersion',
        'file_id' => 'setFileId',
        'filename' => 'setFilename',
        'release_type' => 'setReleaseType',
        'game_version_type_id' => 'setGameVersionTypeId',
        'mod_loader' => 'setModLoader'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_version' => 'getGameVersion',
        'file_id' => 'getFileId',
        'filename' => 'getFilename',
        'release_type' => 'getReleaseType',
        'game_version_type_id' => 'getGameVersionTypeId',
        'mod_loader' => 'getModLoader'
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
        $this->setIfExists('game_version', $data ?? [], null);
        $this->setIfExists('file_id', $data ?? [], null);
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('release_type', $data ?? [], null);
        $this->setIfExists('game_version_type_id', $data ?? [], null);
        $this->setIfExists('mod_loader', $data ?? [], null);
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
     * Gets game_version
     *
     * @return string|null
     */
    public function getGameVersion()
    {
        return $this->container['game_version'];
    }

    /**
     * Sets game_version
     *
     * @param string|null $game_version game_version
     *
     * @return self
     */
    public function setGameVersion($game_version)
    {
        if (is_null($game_version)) {
            throw new \InvalidArgumentException('non-nullable game_version cannot be null');
        }
        $this->container['game_version'] = $game_version;

        return $this;
    }

    /**
     * Gets file_id
     *
     * @return int|null
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param int|null $file_id file_id
     *
     * @return self
     */
    public function setFileId($file_id)
    {
        if (is_null($file_id)) {
            throw new \InvalidArgumentException('non-nullable file_id cannot be null');
        }
        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename filename
     *
     * @return self
     */
    public function setFilename($filename)
    {
        if (is_null($filename)) {
            throw new \InvalidArgumentException('non-nullable filename cannot be null');
        }
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets release_type
     *
     * @see FileReleaseType
     * @return int|null
     */
    public function getReleaseType()
    {
        return $this->container['release_type'];
    }

    /**
     * Sets release_type
     *
     * @see FileReleaseType
     * @param int|null $release_type release_type
     *
     * @return self
     */
    public function setReleaseType($release_type)
    {
        if (is_null($release_type)) {
            throw new \InvalidArgumentException('non-nullable release_type cannot be null');
        }
        $this->container['release_type'] = $release_type;

        return $this;
    }

    /**
     * Gets game_version_type_id
     *
     * @return int|null
     */
    public function getGameVersionTypeId()
    {
        return $this->container['game_version_type_id'];
    }

    /**
     * Sets game_version_type_id
     *
     * @param int|null $game_version_type_id game_version_type_id
     *
     * @return self
     */
    public function setGameVersionTypeId($game_version_type_id)
    {
        if (is_null($game_version_type_id)) {
            array_push($this->openAPINullablesSetToNull, 'game_version_type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('game_version_type_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['game_version_type_id'] = $game_version_type_id;

        return $this;
    }

    /**
     * Gets mod_loader
     *
     * @see ModLoaderType
     * @return int|null
     */
    public function getModLoader()
    {
        return $this->container['mod_loader'];
    }

    /**
     * Sets mod_loader
     *
     * @see ModLoaderType
     * @param int|null $mod_loader mod_loader
     *
     * @return self
     */
    public function setModLoader($mod_loader)
    {
        if (is_null($mod_loader)) {
            throw new \InvalidArgumentException('non-nullable mod_loader cannot be null');
        }
        $this->container['mod_loader'] = $mod_loader;

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


