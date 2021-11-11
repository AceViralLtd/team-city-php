<?php
/**
 * ProblemOccurrence
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
 * ProblemOccurrence Class Doc Comment
 *
 * @category Class
 * @description Represents an instance of a failed test in the specific build.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProblemOccurrence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'problemOccurrence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'identity' => 'string',
        'href' => 'string',
        'muted' => 'bool',
        'currently_investigated' => 'bool',
        'currently_muted' => 'bool',
        'log_anchor' => 'string',
        'new_failure' => 'bool',
        'details' => 'string',
        'additional_data' => 'string',
        'problem' => '\Swagger\Client\Model\Problem',
        'mute' => '\Swagger\Client\Model\Mute',
        'build' => '\Swagger\Client\Model\Build'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'identity' => null,
        'href' => null,
        'muted' => null,
        'currently_investigated' => null,
        'currently_muted' => null,
        'log_anchor' => null,
        'new_failure' => null,
        'details' => null,
        'additional_data' => null,
        'problem' => null,
        'mute' => null,
        'build' => null
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
        'id' => 'id',
        'type' => 'type',
        'identity' => 'identity',
        'href' => 'href',
        'muted' => 'muted',
        'currently_investigated' => 'currentlyInvestigated',
        'currently_muted' => 'currentlyMuted',
        'log_anchor' => 'logAnchor',
        'new_failure' => 'newFailure',
        'details' => 'details',
        'additional_data' => 'additionalData',
        'problem' => 'problem',
        'mute' => 'mute',
        'build' => 'build'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'identity' => 'setIdentity',
        'href' => 'setHref',
        'muted' => 'setMuted',
        'currently_investigated' => 'setCurrentlyInvestigated',
        'currently_muted' => 'setCurrentlyMuted',
        'log_anchor' => 'setLogAnchor',
        'new_failure' => 'setNewFailure',
        'details' => 'setDetails',
        'additional_data' => 'setAdditionalData',
        'problem' => 'setProblem',
        'mute' => 'setMute',
        'build' => 'setBuild'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'identity' => 'getIdentity',
        'href' => 'getHref',
        'muted' => 'getMuted',
        'currently_investigated' => 'getCurrentlyInvestigated',
        'currently_muted' => 'getCurrentlyMuted',
        'log_anchor' => 'getLogAnchor',
        'new_failure' => 'getNewFailure',
        'details' => 'getDetails',
        'additional_data' => 'getAdditionalData',
        'problem' => 'getProblem',
        'mute' => 'getMute',
        'build' => 'getBuild'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['muted'] = isset($data['muted']) ? $data['muted'] : null;
        $this->container['currently_investigated'] = isset($data['currently_investigated']) ? $data['currently_investigated'] : null;
        $this->container['currently_muted'] = isset($data['currently_muted']) ? $data['currently_muted'] : null;
        $this->container['log_anchor'] = isset($data['log_anchor']) ? $data['log_anchor'] : null;
        $this->container['new_failure'] = isset($data['new_failure']) ? $data['new_failure'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['problem'] = isset($data['problem']) ? $data['problem'] : null;
        $this->container['mute'] = isset($data['mute']) ? $data['mute'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string $identity identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets muted
     *
     * @return bool
     */
    public function getMuted()
    {
        return $this->container['muted'];
    }

    /**
     * Sets muted
     *
     * @param bool $muted muted
     *
     * @return $this
     */
    public function setMuted($muted)
    {
        $this->container['muted'] = $muted;

        return $this;
    }

    /**
     * Gets currently_investigated
     *
     * @return bool
     */
    public function getCurrentlyInvestigated()
    {
        return $this->container['currently_investigated'];
    }

    /**
     * Sets currently_investigated
     *
     * @param bool $currently_investigated currently_investigated
     *
     * @return $this
     */
    public function setCurrentlyInvestigated($currently_investigated)
    {
        $this->container['currently_investigated'] = $currently_investigated;

        return $this;
    }

    /**
     * Gets currently_muted
     *
     * @return bool
     */
    public function getCurrentlyMuted()
    {
        return $this->container['currently_muted'];
    }

    /**
     * Sets currently_muted
     *
     * @param bool $currently_muted currently_muted
     *
     * @return $this
     */
    public function setCurrentlyMuted($currently_muted)
    {
        $this->container['currently_muted'] = $currently_muted;

        return $this;
    }

    /**
     * Gets log_anchor
     *
     * @return string
     */
    public function getLogAnchor()
    {
        return $this->container['log_anchor'];
    }

    /**
     * Sets log_anchor
     *
     * @param string $log_anchor log_anchor
     *
     * @return $this
     */
    public function setLogAnchor($log_anchor)
    {
        $this->container['log_anchor'] = $log_anchor;

        return $this;
    }

    /**
     * Gets new_failure
     *
     * @return bool
     */
    public function getNewFailure()
    {
        return $this->container['new_failure'];
    }

    /**
     * Sets new_failure
     *
     * @param bool $new_failure new_failure
     *
     * @return $this
     */
    public function setNewFailure($new_failure)
    {
        $this->container['new_failure'] = $new_failure;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return string
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param string $additional_data additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets problem
     *
     * @return \Swagger\Client\Model\Problem
     */
    public function getProblem()
    {
        return $this->container['problem'];
    }

    /**
     * Sets problem
     *
     * @param \Swagger\Client\Model\Problem $problem problem
     *
     * @return $this
     */
    public function setProblem($problem)
    {
        $this->container['problem'] = $problem;

        return $this;
    }

    /**
     * Gets mute
     *
     * @return \Swagger\Client\Model\Mute
     */
    public function getMute()
    {
        return $this->container['mute'];
    }

    /**
     * Sets mute
     *
     * @param \Swagger\Client\Model\Mute $mute mute
     *
     * @return $this
     */
    public function setMute($mute)
    {
        $this->container['mute'] = $mute;

        return $this;
    }

    /**
     * Gets build
     *
     * @return \Swagger\Client\Model\Build
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param \Swagger\Client\Model\Build $build build
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

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

