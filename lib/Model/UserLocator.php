<?php
/**
 * UserLocator
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
 * UserLocator Class Doc Comment
 *
 * @category Class
 * @description Represents a locator string for filtering User entities.
 * @package  AceViral\TeamCity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserLocator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserLocator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affected_group' => 'string',
        'email' => 'string',
        'group' => 'string',
        'id' => 'string',
        'item' => 'string',
        'last_login' => '\DateTime',
        'name' => 'string',
        'property' => 'string',
        'role' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affected_group' => 'UserGroupLocator',
        'email' => null,
        'group' => 'UserGroupLocator',
        'id' => null,
        'item' => 'item:(<locator1>),item:(<locator2>...)',
        'last_login' => 'date-time',
        'name' => null,
        'property' => 'property:(name:<name>,value:<value>,matchType:<matchType>)',
        'role' => 'RoleLocator',
        'username' => null
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
        'affected_group' => 'affectedGroup',
        'email' => 'email',
        'group' => 'group',
        'id' => 'id',
        'item' => 'item',
        'last_login' => 'lastLogin',
        'name' => 'name',
        'property' => 'property',
        'role' => 'role',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affected_group' => 'setAffectedGroup',
        'email' => 'setEmail',
        'group' => 'setGroup',
        'id' => 'setId',
        'item' => 'setItem',
        'last_login' => 'setLastLogin',
        'name' => 'setName',
        'property' => 'setProperty',
        'role' => 'setRole',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affected_group' => 'getAffectedGroup',
        'email' => 'getEmail',
        'group' => 'getGroup',
        'id' => 'getId',
        'item' => 'getItem',
        'last_login' => 'getLastLogin',
        'name' => 'getName',
        'property' => 'getProperty',
        'role' => 'getRole',
        'username' => 'getUsername'
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

    const PROPERTY_EXISTS = 'exists';
    const PROPERTY_NOT_EXISTS = 'not-exists';
    const PROPERTY_EQUALS = 'equals';
    const PROPERTY_DOES_NOT_EQUAL = 'does-not-equal';
    const PROPERTY_STARTS_WITH = 'starts-with';
    const PROPERTY_CONTAINS = 'contains';
    const PROPERTY_DOES_NOT_CONTAIN = 'does-not-contain';
    const PROPERTY_ENDS_WITH = 'ends-with';
    const PROPERTY_ANY = 'any';
    const PROPERTY_MATCHES = 'matches';
    const PROPERTY_DOES_NOT_MATCH = 'does-not-match';
    const PROPERTY_MORE_THAN = 'more-than';
    const PROPERTY_NO_MORE_THAN = 'no-more-than';
    const PROPERTY_LESS_THAN = 'less-than';
    const PROPERTY_NO_LESS_THAN = 'no-less-than';
    const PROPERTY_VER_MORE_THAN = 'ver-more-than';
    const PROPERTY_VER_NO_MORE_THAN = 'ver-no-more-than';
    const PROPERTY_VER_LESS_THAN = 'ver-less-than';
    const PROPERTY_VER_NO_LESS_THAN = 'ver-no-less-than';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertyAllowableValues()
    {
        return [
            self::PROPERTY_EXISTS,
            self::PROPERTY_NOT_EXISTS,
            self::PROPERTY_EQUALS,
            self::PROPERTY_DOES_NOT_EQUAL,
            self::PROPERTY_STARTS_WITH,
            self::PROPERTY_CONTAINS,
            self::PROPERTY_DOES_NOT_CONTAIN,
            self::PROPERTY_ENDS_WITH,
            self::PROPERTY_ANY,
            self::PROPERTY_MATCHES,
            self::PROPERTY_DOES_NOT_MATCH,
            self::PROPERTY_MORE_THAN,
            self::PROPERTY_NO_MORE_THAN,
            self::PROPERTY_LESS_THAN,
            self::PROPERTY_NO_LESS_THAN,
            self::PROPERTY_VER_MORE_THAN,
            self::PROPERTY_VER_NO_MORE_THAN,
            self::PROPERTY_VER_LESS_THAN,
            self::PROPERTY_VER_NO_LESS_THAN,
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
        $this->container['affected_group'] = isset($data['affected_group']) ? $data['affected_group'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['last_login'] = isset($data['last_login']) ? $data['last_login'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPropertyAllowableValues();
        if (!is_null($this->container['property']) && !in_array($this->container['property'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'property', must be one of '%s'",
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
     * Gets affected_group
     *
     * @return string
     */
    public function getAffectedGroup()
    {
        return $this->container['affected_group'];
    }

    /**
     * Sets affected_group
     *
     * @param string $affected_group User group (direct or indirect parent) locator.
     *
     * @return $this
     */
    public function setAffectedGroup($affected_group)
    {
        $this->container['affected_group'] = $affected_group;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group User group (direct parent) locator.
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
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
     * Gets last_login
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param \DateTime $last_login last_login
     *
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

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
     * Gets property
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     *
     * @param string $property property
     *
     * @return $this
     */
    public function setProperty($property)
    {
        $allowedValues = $this->getPropertyAllowableValues();
        if (!is_null($property) && !in_array($property, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'property', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role Role locator.
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


