<?php
/**
 * Revision
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
 * Revision Class Doc Comment
 *
 * @category Class
 * @description Represents a revision related to a VCS change.
 * @package  AceViral\TeamCity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Revision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Revision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version' => 'string',
        'internal_version' => 'string',
        'vcs_branch_name' => 'string',
        'vcs_root_instance' => '\AceViral\TeamCity\Model\VcsRootInstance',
        'checkout_rules' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version' => null,
        'internal_version' => null,
        'vcs_branch_name' => null,
        'vcs_root_instance' => null,
        'checkout_rules' => null
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
        'version' => 'version',
        'internal_version' => 'internalVersion',
        'vcs_branch_name' => 'vcsBranchName',
        'vcs_root_instance' => 'vcs-root-instance',
        'checkout_rules' => 'checkout-rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'internal_version' => 'setInternalVersion',
        'vcs_branch_name' => 'setVcsBranchName',
        'vcs_root_instance' => 'setVcsRootInstance',
        'checkout_rules' => 'setCheckoutRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'internal_version' => 'getInternalVersion',
        'vcs_branch_name' => 'getVcsBranchName',
        'vcs_root_instance' => 'getVcsRootInstance',
        'checkout_rules' => 'getCheckoutRules'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['internal_version'] = isset($data['internal_version']) ? $data['internal_version'] : null;
        $this->container['vcs_branch_name'] = isset($data['vcs_branch_name']) ? $data['vcs_branch_name'] : null;
        $this->container['vcs_root_instance'] = isset($data['vcs_root_instance']) ? $data['vcs_root_instance'] : null;
        $this->container['checkout_rules'] = isset($data['checkout_rules']) ? $data['checkout_rules'] : null;
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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets internal_version
     *
     * @return string
     */
    public function getInternalVersion()
    {
        return $this->container['internal_version'];
    }

    /**
     * Sets internal_version
     *
     * @param string $internal_version internal_version
     *
     * @return $this
     */
    public function setInternalVersion($internal_version)
    {
        $this->container['internal_version'] = $internal_version;

        return $this;
    }

    /**
     * Gets vcs_branch_name
     *
     * @return string
     */
    public function getVcsBranchName()
    {
        return $this->container['vcs_branch_name'];
    }

    /**
     * Sets vcs_branch_name
     *
     * @param string $vcs_branch_name vcs_branch_name
     *
     * @return $this
     */
    public function setVcsBranchName($vcs_branch_name)
    {
        $this->container['vcs_branch_name'] = $vcs_branch_name;

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
     * Gets checkout_rules
     *
     * @return string
     */
    public function getCheckoutRules()
    {
        return $this->container['checkout_rules'];
    }

    /**
     * Sets checkout_rules
     *
     * @param string $checkout_rules checkout_rules
     *
     * @return $this
     */
    public function setCheckoutRules($checkout_rules)
    {
        $this->container['checkout_rules'] = $checkout_rules;

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


