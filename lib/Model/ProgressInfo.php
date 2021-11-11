<?php
/**
 * ProgressInfo
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
 * ProgressInfo Class Doc Comment
 *
 * @category Class
 * @description Represents a progress estimate of this build.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'progress-info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'percentage_complete' => 'int',
        'elapsed_seconds' => 'int',
        'estimated_total_seconds' => 'int',
        'left_seconds' => 'int',
        'current_stage_text' => 'string',
        'outdated' => 'bool',
        'probably_hanging' => 'bool',
        'last_activity_time' => 'string',
        'outdated_reason_build' => '\Swagger\Client\Model\Build'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'percentage_complete' => 'int32',
        'elapsed_seconds' => 'int64',
        'estimated_total_seconds' => 'int64',
        'left_seconds' => 'int64',
        'current_stage_text' => null,
        'outdated' => null,
        'probably_hanging' => null,
        'last_activity_time' => null,
        'outdated_reason_build' => null
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
        'percentage_complete' => 'percentageComplete',
        'elapsed_seconds' => 'elapsedSeconds',
        'estimated_total_seconds' => 'estimatedTotalSeconds',
        'left_seconds' => 'leftSeconds',
        'current_stage_text' => 'currentStageText',
        'outdated' => 'outdated',
        'probably_hanging' => 'probablyHanging',
        'last_activity_time' => 'lastActivityTime',
        'outdated_reason_build' => 'outdatedReasonBuild'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percentage_complete' => 'setPercentageComplete',
        'elapsed_seconds' => 'setElapsedSeconds',
        'estimated_total_seconds' => 'setEstimatedTotalSeconds',
        'left_seconds' => 'setLeftSeconds',
        'current_stage_text' => 'setCurrentStageText',
        'outdated' => 'setOutdated',
        'probably_hanging' => 'setProbablyHanging',
        'last_activity_time' => 'setLastActivityTime',
        'outdated_reason_build' => 'setOutdatedReasonBuild'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percentage_complete' => 'getPercentageComplete',
        'elapsed_seconds' => 'getElapsedSeconds',
        'estimated_total_seconds' => 'getEstimatedTotalSeconds',
        'left_seconds' => 'getLeftSeconds',
        'current_stage_text' => 'getCurrentStageText',
        'outdated' => 'getOutdated',
        'probably_hanging' => 'getProbablyHanging',
        'last_activity_time' => 'getLastActivityTime',
        'outdated_reason_build' => 'getOutdatedReasonBuild'
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
        $this->container['percentage_complete'] = isset($data['percentage_complete']) ? $data['percentage_complete'] : null;
        $this->container['elapsed_seconds'] = isset($data['elapsed_seconds']) ? $data['elapsed_seconds'] : null;
        $this->container['estimated_total_seconds'] = isset($data['estimated_total_seconds']) ? $data['estimated_total_seconds'] : null;
        $this->container['left_seconds'] = isset($data['left_seconds']) ? $data['left_seconds'] : null;
        $this->container['current_stage_text'] = isset($data['current_stage_text']) ? $data['current_stage_text'] : null;
        $this->container['outdated'] = isset($data['outdated']) ? $data['outdated'] : null;
        $this->container['probably_hanging'] = isset($data['probably_hanging']) ? $data['probably_hanging'] : null;
        $this->container['last_activity_time'] = isset($data['last_activity_time']) ? $data['last_activity_time'] : null;
        $this->container['outdated_reason_build'] = isset($data['outdated_reason_build']) ? $data['outdated_reason_build'] : null;
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
     * Gets percentage_complete
     *
     * @return int
     */
    public function getPercentageComplete()
    {
        return $this->container['percentage_complete'];
    }

    /**
     * Sets percentage_complete
     *
     * @param int $percentage_complete percentage_complete
     *
     * @return $this
     */
    public function setPercentageComplete($percentage_complete)
    {
        $this->container['percentage_complete'] = $percentage_complete;

        return $this;
    }

    /**
     * Gets elapsed_seconds
     *
     * @return int
     */
    public function getElapsedSeconds()
    {
        return $this->container['elapsed_seconds'];
    }

    /**
     * Sets elapsed_seconds
     *
     * @param int $elapsed_seconds elapsed_seconds
     *
     * @return $this
     */
    public function setElapsedSeconds($elapsed_seconds)
    {
        $this->container['elapsed_seconds'] = $elapsed_seconds;

        return $this;
    }

    /**
     * Gets estimated_total_seconds
     *
     * @return int
     */
    public function getEstimatedTotalSeconds()
    {
        return $this->container['estimated_total_seconds'];
    }

    /**
     * Sets estimated_total_seconds
     *
     * @param int $estimated_total_seconds estimated_total_seconds
     *
     * @return $this
     */
    public function setEstimatedTotalSeconds($estimated_total_seconds)
    {
        $this->container['estimated_total_seconds'] = $estimated_total_seconds;

        return $this;
    }

    /**
     * Gets left_seconds
     *
     * @return int
     */
    public function getLeftSeconds()
    {
        return $this->container['left_seconds'];
    }

    /**
     * Sets left_seconds
     *
     * @param int $left_seconds left_seconds
     *
     * @return $this
     */
    public function setLeftSeconds($left_seconds)
    {
        $this->container['left_seconds'] = $left_seconds;

        return $this;
    }

    /**
     * Gets current_stage_text
     *
     * @return string
     */
    public function getCurrentStageText()
    {
        return $this->container['current_stage_text'];
    }

    /**
     * Sets current_stage_text
     *
     * @param string $current_stage_text current_stage_text
     *
     * @return $this
     */
    public function setCurrentStageText($current_stage_text)
    {
        $this->container['current_stage_text'] = $current_stage_text;

        return $this;
    }

    /**
     * Gets outdated
     *
     * @return bool
     */
    public function getOutdated()
    {
        return $this->container['outdated'];
    }

    /**
     * Sets outdated
     *
     * @param bool $outdated outdated
     *
     * @return $this
     */
    public function setOutdated($outdated)
    {
        $this->container['outdated'] = $outdated;

        return $this;
    }

    /**
     * Gets probably_hanging
     *
     * @return bool
     */
    public function getProbablyHanging()
    {
        return $this->container['probably_hanging'];
    }

    /**
     * Sets probably_hanging
     *
     * @param bool $probably_hanging probably_hanging
     *
     * @return $this
     */
    public function setProbablyHanging($probably_hanging)
    {
        $this->container['probably_hanging'] = $probably_hanging;

        return $this;
    }

    /**
     * Gets last_activity_time
     *
     * @return string
     */
    public function getLastActivityTime()
    {
        return $this->container['last_activity_time'];
    }

    /**
     * Sets last_activity_time
     *
     * @param string $last_activity_time last_activity_time
     *
     * @return $this
     */
    public function setLastActivityTime($last_activity_time)
    {
        $this->container['last_activity_time'] = $last_activity_time;

        return $this;
    }

    /**
     * Gets outdated_reason_build
     *
     * @return \Swagger\Client\Model\Build
     */
    public function getOutdatedReasonBuild()
    {
        return $this->container['outdated_reason_build'];
    }

    /**
     * Sets outdated_reason_build
     *
     * @param \Swagger\Client\Model\Build $outdated_reason_build outdated_reason_build
     *
     * @return $this
     */
    public function setOutdatedReasonBuild($outdated_reason_build)
    {
        $this->container['outdated_reason_build'] = $outdated_reason_build;

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


