<?php
/**
 * TestCounters
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
 * TestCounters Class Doc Comment
 *
 * @category Class
 * @description Represents a test results counter (how many times this test was successful/failed/muted/ignored).
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestCounters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'testCounters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ignored' => 'int',
        'failed' => 'int',
        'muted' => 'int',
        'success' => 'int',
        'all' => 'int',
        'new_failed' => 'int',
        'duration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ignored' => 'int32',
        'failed' => 'int32',
        'muted' => 'int32',
        'success' => 'int32',
        'all' => 'int32',
        'new_failed' => 'int32',
        'duration' => 'int64'
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
        'ignored' => 'ignored',
        'failed' => 'failed',
        'muted' => 'muted',
        'success' => 'success',
        'all' => 'all',
        'new_failed' => 'newFailed',
        'duration' => 'duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignored' => 'setIgnored',
        'failed' => 'setFailed',
        'muted' => 'setMuted',
        'success' => 'setSuccess',
        'all' => 'setAll',
        'new_failed' => 'setNewFailed',
        'duration' => 'setDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignored' => 'getIgnored',
        'failed' => 'getFailed',
        'muted' => 'getMuted',
        'success' => 'getSuccess',
        'all' => 'getAll',
        'new_failed' => 'getNewFailed',
        'duration' => 'getDuration'
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
        $this->container['ignored'] = isset($data['ignored']) ? $data['ignored'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['muted'] = isset($data['muted']) ? $data['muted'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['new_failed'] = isset($data['new_failed']) ? $data['new_failed'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
     * Gets ignored
     *
     * @return int
     */
    public function getIgnored()
    {
        return $this->container['ignored'];
    }

    /**
     * Sets ignored
     *
     * @param int $ignored ignored
     *
     * @return $this
     */
    public function setIgnored($ignored)
    {
        $this->container['ignored'] = $ignored;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return int
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param int $failed failed
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets muted
     *
     * @return int
     */
    public function getMuted()
    {
        return $this->container['muted'];
    }

    /**
     * Sets muted
     *
     * @param int $muted muted
     *
     * @return $this
     */
    public function setMuted($muted)
    {
        $this->container['muted'] = $muted;

        return $this;
    }

    /**
     * Gets success
     *
     * @return int
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param int $success success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets all
     *
     * @return int
     */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
     * Sets all
     *
     * @param int $all all
     *
     * @return $this
     */
    public function setAll($all)
    {
        $this->container['all'] = $all;

        return $this;
    }

    /**
     * Gets new_failed
     *
     * @return int
     */
    public function getNewFailed()
    {
        return $this->container['new_failed'];
    }

    /**
     * Sets new_failed
     *
     * @param int $new_failed new_failed
     *
     * @return $this
     */
    public function setNewFailed($new_failed)
    {
        $this->container['new_failed'] = $new_failed;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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

