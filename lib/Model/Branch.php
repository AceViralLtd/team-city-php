<?php
/**
 * Branch
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TeamCity REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2018.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.24-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Branch Class Doc Comment
 *
 * @category Class
 * @description Represents a branch on which this build has been started.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Branch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'branch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'internal_name' => 'string',
        'default' => 'bool',
        'unspecified' => 'bool',
        'active' => 'bool',
        'last_activity' => 'string',
        'group_flag' => 'bool',
        'builds' => '\Swagger\Client\Model\Builds'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'internal_name' => null,
        'default' => null,
        'unspecified' => null,
        'active' => null,
        'last_activity' => null,
        'group_flag' => null,
        'builds' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'internal_name' => 'internalName',
        'default' => 'default',
        'unspecified' => 'unspecified',
        'active' => 'active',
        'last_activity' => 'lastActivity',
        'group_flag' => 'groupFlag',
        'builds' => 'builds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'internal_name' => 'setInternalName',
        'default' => 'setDefault',
        'unspecified' => 'setUnspecified',
        'active' => 'setActive',
        'last_activity' => 'setLastActivity',
        'group_flag' => 'setGroupFlag',
        'builds' => 'setBuilds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'internal_name' => 'getInternalName',
        'default' => 'getDefault',
        'unspecified' => 'getUnspecified',
        'active' => 'getActive',
        'last_activity' => 'getLastActivity',
        'group_flag' => 'getGroupFlag',
        'builds' => 'getBuilds'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['internal_name'] = isset($data['internal_name']) ? $data['internal_name'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['unspecified'] = isset($data['unspecified']) ? $data['unspecified'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['last_activity'] = isset($data['last_activity']) ? $data['last_activity'] : null;
        $this->container['group_flag'] = isset($data['group_flag']) ? $data['group_flag'] : null;
        $this->container['builds'] = isset($data['builds']) ? $data['builds'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets internal_name
     *
     * @return string
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param string $internal_name internal_name
     *
     * @return $this
     */
    public function setInternalName($internal_name)
    {
        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets unspecified
     *
     * @return bool
     */
    public function getUnspecified()
    {
        return $this->container['unspecified'];
    }

    /**
     * Sets unspecified
     *
     * @param bool $unspecified unspecified
     *
     * @return $this
     */
    public function setUnspecified($unspecified)
    {
        $this->container['unspecified'] = $unspecified;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return string
     */
    public function getLastActivity()
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param string $last_activity last_activity
     *
     * @return $this
     */
    public function setLastActivity($last_activity)
    {
        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets group_flag
     *
     * @return bool
     */
    public function getGroupFlag()
    {
        return $this->container['group_flag'];
    }

    /**
     * Sets group_flag
     *
     * @param bool $group_flag group_flag
     *
     * @return $this
     */
    public function setGroupFlag($group_flag)
    {
        $this->container['group_flag'] = $group_flag;

        return $this;
    }

    /**
     * Gets builds
     *
     * @return \Swagger\Client\Model\Builds
     */
    public function getBuilds()
    {
        return $this->container['builds'];
    }

    /**
     * Sets builds
     *
     * @param \Swagger\Client\Model\Builds $builds builds
     *
     * @return $this
     */
    public function setBuilds($builds)
    {
        $this->container['builds'] = $builds;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


