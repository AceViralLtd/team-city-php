<?php
/**
 * VcsRootInstanceLocator
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
 * VcsRootInstanceLocator Class Doc Comment
 *
 * @category Class
 * @description Represents a locator string for filtering VcsRootInstance entities.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VcsRootInstanceLocator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VcsRootInstanceLocator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affected_project' => 'string',
        'build' => 'string',
        'build_type' => 'string',
        'count' => 'int',
        'id' => 'int',
        'item' => 'string',
        'lookup_limit' => 'int',
        'project' => 'string',
        'property' => 'string',
        'start' => 'int',
        'type' => 'string',
        'vcs_root' => 'string',
        'versioned_settings' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affected_project' => 'ProjectLocator',
        'build' => 'BuildLocator',
        'build_type' => 'BuildTypeLocator',
        'count' => 'int32',
        'id' => 'int32',
        'item' => 'item:(<locator1>),item:(<locator2>...)',
        'lookup_limit' => 'int32',
        'project' => 'ProjectLocator',
        'property' => 'property:(name:<name>,value:<value>,matchType:<matchType>)',
        'start' => 'int32',
        'type' => null,
        'vcs_root' => 'VcsRootLocator',
        'versioned_settings' => null
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
        'affected_project' => 'affectedProject',
        'build' => 'build',
        'build_type' => 'buildType',
        'count' => 'count',
        'id' => 'id',
        'item' => 'item',
        'lookup_limit' => 'lookupLimit',
        'project' => 'project',
        'property' => 'property',
        'start' => 'start',
        'type' => 'type',
        'vcs_root' => 'vcsRoot',
        'versioned_settings' => 'versionedSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affected_project' => 'setAffectedProject',
        'build' => 'setBuild',
        'build_type' => 'setBuildType',
        'count' => 'setCount',
        'id' => 'setId',
        'item' => 'setItem',
        'lookup_limit' => 'setLookupLimit',
        'project' => 'setProject',
        'property' => 'setProperty',
        'start' => 'setStart',
        'type' => 'setType',
        'vcs_root' => 'setVcsRoot',
        'versioned_settings' => 'setVersionedSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affected_project' => 'getAffectedProject',
        'build' => 'getBuild',
        'build_type' => 'getBuildType',
        'count' => 'getCount',
        'id' => 'getId',
        'item' => 'getItem',
        'lookup_limit' => 'getLookupLimit',
        'project' => 'getProject',
        'property' => 'getProperty',
        'start' => 'getStart',
        'type' => 'getType',
        'vcs_root' => 'getVcsRoot',
        'versioned_settings' => 'getVersionedSettings'
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
        $this->container['affected_project'] = isset($data['affected_project']) ? $data['affected_project'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['build_type'] = isset($data['build_type']) ? $data['build_type'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['lookup_limit'] = isset($data['lookup_limit']) ? $data['lookup_limit'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vcs_root'] = isset($data['vcs_root']) ? $data['vcs_root'] : null;
        $this->container['versioned_settings'] = isset($data['versioned_settings']) ? $data['versioned_settings'] : null;
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
     * Gets affected_project
     *
     * @return string
     */
    public function getAffectedProject()
    {
        return $this->container['affected_project'];
    }

    /**
     * Sets affected_project
     *
     * @param string $affected_project Project (direct or indirect parent) locator.
     *
     * @return $this
     */
    public function setAffectedProject($affected_project)
    {
        $this->container['affected_project'] = $affected_project;

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
     * Gets lookup_limit
     *
     * @return int
     */
    public function getLookupLimit()
    {
        return $this->container['lookup_limit'];
    }

    /**
     * Sets lookup_limit
     *
     * @param int $lookup_limit Limit processing to the latest `<lookupLimit>` entities.
     *
     * @return $this
     */
    public function setLookupLimit($lookup_limit)
    {
        $this->container['lookup_limit'] = $lookup_limit;

        return $this;
    }

    /**
     * Gets project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param string $project Project (direct parent) locator.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * @param string $type Type of VCS (e.g. jetbrains.git).
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vcs_root
     *
     * @return string
     */
    public function getVcsRoot()
    {
        return $this->container['vcs_root'];
    }

    /**
     * Sets vcs_root
     *
     * @param string $vcs_root VCS root locator.
     *
     * @return $this
     */
    public function setVcsRoot($vcs_root)
    {
        $this->container['vcs_root'] = $vcs_root;

        return $this;
    }

    /**
     * Gets versioned_settings
     *
     * @return bool
     */
    public function getVersionedSettings()
    {
        return $this->container['versioned_settings'];
    }

    /**
     * Sets versioned_settings
     *
     * @param bool $versioned_settings Is used for versioned settings.
     *
     * @return $this
     */
    public function setVersionedSettings($versioned_settings)
    {
        $this->container['versioned_settings'] = $versioned_settings;

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

