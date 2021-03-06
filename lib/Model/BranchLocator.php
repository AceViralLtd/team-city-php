<?php
/**
 * BranchLocator
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
 * BranchLocator Class Doc Comment
 *
 * @category Class
 * @description Represents a locator string for filtering Branch entities.
 * @package  AceViral\TeamCity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BranchLocator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BranchLocator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branched' => 'string',
        'build' => 'string',
        'build_type' => 'string',
        'default' => 'string',
        'item' => 'string',
        'name' => 'string',
        'policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branched' => 'boolean',
        'build' => 'BuildLocator',
        'build_type' => 'BuildTypeLocator',
        'default' => 'boolean',
        'item' => 'item:(<locator1>),item:(<locator2>...)',
        'name' => null,
        'policy' => null
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
        'branched' => 'branched',
        'build' => 'build',
        'build_type' => 'buildType',
        'default' => 'default',
        'item' => 'item',
        'name' => 'name',
        'policy' => 'policy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branched' => 'setBranched',
        'build' => 'setBuild',
        'build_type' => 'setBuildType',
        'default' => 'setDefault',
        'item' => 'setItem',
        'name' => 'setName',
        'policy' => 'setPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branched' => 'getBranched',
        'build' => 'getBuild',
        'build_type' => 'getBuildType',
        'default' => 'getDefault',
        'item' => 'getItem',
        'name' => 'getName',
        'policy' => 'getPolicy'
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

    const POLICY_VCS_BRANCHES = 'VCS_BRANCHES';
    const POLICY_ACTIVE_VCS_BRANCHES = 'ACTIVE_VCS_BRANCHES';
    const POLICY_HISTORY_BRANCHES = 'HISTORY_BRANCHES';
    const POLICY_ACTIVE_HISTORY_BRANCHES = 'ACTIVE_HISTORY_BRANCHES';
    const POLICY_ACTIVE_HISTORY_AND_ACTIVE_VCS_BRANCHES = 'ACTIVE_HISTORY_AND_ACTIVE_VCS_BRANCHES';
    const POLICY_ALL_BRANCHES = 'ALL_BRANCHES';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPolicyAllowableValues()
    {
        return [
            self::POLICY_VCS_BRANCHES,
            self::POLICY_ACTIVE_VCS_BRANCHES,
            self::POLICY_HISTORY_BRANCHES,
            self::POLICY_ACTIVE_HISTORY_BRANCHES,
            self::POLICY_ACTIVE_HISTORY_AND_ACTIVE_VCS_BRANCHES,
            self::POLICY_ALL_BRANCHES,
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
        $this->container['branched'] = isset($data['branched']) ? $data['branched'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['build_type'] = isset($data['build_type']) ? $data['build_type'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPolicyAllowableValues();
        if (!is_null($this->container['policy']) && !in_array($this->container['policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'policy', must be one of '%s'",
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
     * Gets branched
     *
     * @return string
     */
    public function getBranched()
    {
        return $this->container['branched'];
    }

    /**
     * Sets branched
     *
     * @param string $branched Is feature branch.
     *
     * @return $this
     */
    public function setBranched($branched)
    {
        $this->container['branched'] = $branched;

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
     * Gets build_type
     *
     * @return string
     */
    public function getBuildType()
    {
        return $this->container['build_type'];
    }

    /**
     * Sets build_type
     *
     * @param string $build_type Build type locator.
     *
     * @return $this
     */
    public function setBuildType($build_type)
    {
        $this->container['build_type'] = $build_type;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string $default Is default branch.
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

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
     * Gets policy
     *
     * @return string
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     *
     * @param string $policy policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $allowedValues = $this->getPolicyAllowableValues();
        if (!is_null($policy) && !in_array($policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'policy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['policy'] = $policy;

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


