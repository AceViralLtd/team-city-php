<?php
/**
 * AgentLocator
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
 * AgentLocator Class Doc Comment
 *
 * @category Class
 * @description Represents a locator string for filtering Agent entities.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgentLocator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgentLocator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorized' => 'bool',
        'build' => 'string',
        'compatible' => 'string',
        'connected' => 'bool',
        'count' => 'int',
        'enabled' => 'bool',
        'id' => 'int',
        'ip' => 'string',
        'item' => 'string',
        'name' => 'string',
        'parameter' => 'string',
        'pool' => 'string',
        'start' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorized' => null,
        'build' => 'BuildLocator',
        'compatible' => 'BuildTypeLocator',
        'connected' => null,
        'count' => 'int32',
        'enabled' => null,
        'id' => 'int32',
        'ip' => null,
        'item' => 'item:(<locator1>),item:(<locator2>...)',
        'name' => null,
        'parameter' => null,
        'pool' => 'AgentPoolLocator',
        'start' => 'int32'
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
        'authorized' => 'authorized',
        'build' => 'build',
        'compatible' => 'compatible',
        'connected' => 'connected',
        'count' => 'count',
        'enabled' => 'enabled',
        'id' => 'id',
        'ip' => 'ip',
        'item' => 'item',
        'name' => 'name',
        'parameter' => 'parameter',
        'pool' => 'pool',
        'start' => 'start'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorized' => 'setAuthorized',
        'build' => 'setBuild',
        'compatible' => 'setCompatible',
        'connected' => 'setConnected',
        'count' => 'setCount',
        'enabled' => 'setEnabled',
        'id' => 'setId',
        'ip' => 'setIp',
        'item' => 'setItem',
        'name' => 'setName',
        'parameter' => 'setParameter',
        'pool' => 'setPool',
        'start' => 'setStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorized' => 'getAuthorized',
        'build' => 'getBuild',
        'compatible' => 'getCompatible',
        'connected' => 'getConnected',
        'count' => 'getCount',
        'enabled' => 'getEnabled',
        'id' => 'getId',
        'ip' => 'getIp',
        'item' => 'getItem',
        'name' => 'getName',
        'parameter' => 'getParameter',
        'pool' => 'getPool',
        'start' => 'getStart'
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
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['compatible'] = isset($data['compatible']) ? $data['compatible'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
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
     * Gets authorized
     *
     * @return bool
     */
    public function getAuthorized()
    {
        return $this->container['authorized'];
    }

    /**
     * Sets authorized
     *
     * @param bool $authorized Is the agent authorized.
     *
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;

        return $this;
    }

    /**
     * Gets build
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param string $build Build locator.
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets compatible
     *
     * @return string
     */
    public function getCompatible()
    {
        return $this->container['compatible'];
    }

    /**
     * Sets compatible
     *
     * @param string $compatible Compatible build types locator.
     *
     * @return $this
     */
    public function setCompatible($compatible)
    {
        $this->container['compatible'] = $compatible;

        return $this;
    }

    /**
     * Gets connected
     *
     * @return bool
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param bool $connected Is the agent connected.
     *
     * @return $this
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count For paginated calls, how many entities to return per page.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Is the agent enabled.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
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
     * @param int $id Entity ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param string $item Supply multiple locators and return a union of the results.
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
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
     * Gets parameter
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param string $parameter parameter
     *
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;

        return $this;
    }

    /**
     * Gets pool
     *
     * @return string
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     *
     * @param string $pool Agent pool locator.
     *
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

        return $this;
    }

    /**
     * Gets start
     *
     * @return int
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param int $start For paginated calls, from which entity to start rendering the page.
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

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


