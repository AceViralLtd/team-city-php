<?php
/**
 * VcsLabel
 *
 * PHP version 5
 *
 * @category Class
 * @package  AceViral\TeamCity
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

namespace AceViral\TeamCity\Model;

use \ArrayAccess;
use \AceViral\TeamCity\ObjectSerializer;

/**
 * VcsLabel Class Doc Comment
 *
 * @category Class
 * @description Represents a VCS-side label of this build&#39;s sources.
 * @package  AceViral\TeamCity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VcsLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'vcsLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'failure_reason' => 'string',
        'status' => 'string',
        'build_id' => 'int',
        'vcs_root_instance' => '\AceViral\TeamCity\Model\VcsRootInstance'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'failure_reason' => null,
        'status' => null,
        'build_id' => 'int64',
        'vcs_root_instance' => null
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
        'text' => 'text',
        'failure_reason' => 'failureReason',
        'status' => 'status',
        'build_id' => 'buildId',
        'vcs_root_instance' => 'vcs-root-instance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'failure_reason' => 'setFailureReason',
        'status' => 'setStatus',
        'build_id' => 'setBuildId',
        'vcs_root_instance' => 'setVcsRootInstance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'failure_reason' => 'getFailureReason',
        'status' => 'getStatus',
        'build_id' => 'getBuildId',
        'vcs_root_instance' => 'getVcsRootInstance'
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

    const STATUS_NONE = 'none';
    const STATUS_SET = 'set';
    const STATUS_IS_BEING_SET = 'is being set';
    const STATUS_FAILED = 'failed';
    const STATUS_DISABLED_FOR_THE_VCS_ROOT = 'disabled for the vcs root';
    const STATUS_NOT_SUPPORTED_YET_FOR_THE_VCS = 'not supported yet for the vcs';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NONE,
            self::STATUS_SET,
            self::STATUS_IS_BEING_SET,
            self::STATUS_FAILED,
            self::STATUS_DISABLED_FOR_THE_VCS_ROOT,
            self::STATUS_NOT_SUPPORTED_YET_FOR_THE_VCS,
        ];
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['build_id'] = isset($data['build_id']) ? $data['build_id'] : null;
        $this->container['vcs_root_instance'] = isset($data['vcs_root_instance']) ? $data['vcs_root_instance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string $failure_reason failure_reason
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets build_id
     *
     * @return int
     */
    public function getBuildId()
    {
        return $this->container['build_id'];
    }

    /**
     * Sets build_id
     *
     * @param int $build_id build_id
     *
     * @return $this
     */
    public function setBuildId($build_id)
    {
        $this->container['build_id'] = $build_id;

        return $this;
    }

    /**
     * Gets vcs_root_instance
     *
     * @return \AceViral\TeamCity\Model\VcsRootInstance
     */
    public function getVcsRootInstance()
    {
        return $this->container['vcs_root_instance'];
    }

    /**
     * Sets vcs_root_instance
     *
     * @param \AceViral\TeamCity\Model\VcsRootInstance $vcs_root_instance vcs_root_instance
     *
     * @return $this
     */
    public function setVcsRootInstance($vcs_root_instance)
    {
        $this->container['vcs_root_instance'] = $vcs_root_instance;

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


