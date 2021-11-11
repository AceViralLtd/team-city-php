<?php
/**
 * Server
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
 * Server Class Doc Comment
 *
 * @category Class
 * @description Represents various details of this server including the installation version.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Server implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'server';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version' => 'string',
        'version_major' => 'int',
        'version_minor' => 'int',
        'start_time' => 'string',
        'current_time' => 'string',
        'build_number' => 'string',
        'build_date' => 'string',
        'internal_id' => 'string',
        'role' => 'string',
        'web_url' => 'string',
        'projects' => '\Swagger\Client\Model\Href',
        'vcs_roots' => '\Swagger\Client\Model\Href',
        'builds' => '\Swagger\Client\Model\Href',
        'users' => '\Swagger\Client\Model\Href',
        'user_groups' => '\Swagger\Client\Model\Href',
        'agents' => '\Swagger\Client\Model\Href',
        'build_queue' => '\Swagger\Client\Model\Href',
        'agent_pools' => '\Swagger\Client\Model\Href',
        'investigations' => '\Swagger\Client\Model\Href',
        'mutes' => '\Swagger\Client\Model\Href',
        'artifacts_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version' => null,
        'version_major' => 'int32',
        'version_minor' => 'int32',
        'start_time' => null,
        'current_time' => null,
        'build_number' => null,
        'build_date' => null,
        'internal_id' => null,
        'role' => null,
        'web_url' => null,
        'projects' => null,
        'vcs_roots' => null,
        'builds' => null,
        'users' => null,
        'user_groups' => null,
        'agents' => null,
        'build_queue' => null,
        'agent_pools' => null,
        'investigations' => null,
        'mutes' => null,
        'artifacts_url' => null
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
        'version_major' => 'versionMajor',
        'version_minor' => 'versionMinor',
        'start_time' => 'startTime',
        'current_time' => 'currentTime',
        'build_number' => 'buildNumber',
        'build_date' => 'buildDate',
        'internal_id' => 'internalId',
        'role' => 'role',
        'web_url' => 'webUrl',
        'projects' => 'projects',
        'vcs_roots' => 'vcsRoots',
        'builds' => 'builds',
        'users' => 'users',
        'user_groups' => 'userGroups',
        'agents' => 'agents',
        'build_queue' => 'buildQueue',
        'agent_pools' => 'agentPools',
        'investigations' => 'investigations',
        'mutes' => 'mutes',
        'artifacts_url' => 'artifactsUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'version_major' => 'setVersionMajor',
        'version_minor' => 'setVersionMinor',
        'start_time' => 'setStartTime',
        'current_time' => 'setCurrentTime',
        'build_number' => 'setBuildNumber',
        'build_date' => 'setBuildDate',
        'internal_id' => 'setInternalId',
        'role' => 'setRole',
        'web_url' => 'setWebUrl',
        'projects' => 'setProjects',
        'vcs_roots' => 'setVcsRoots',
        'builds' => 'setBuilds',
        'users' => 'setUsers',
        'user_groups' => 'setUserGroups',
        'agents' => 'setAgents',
        'build_queue' => 'setBuildQueue',
        'agent_pools' => 'setAgentPools',
        'investigations' => 'setInvestigations',
        'mutes' => 'setMutes',
        'artifacts_url' => 'setArtifactsUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'version_major' => 'getVersionMajor',
        'version_minor' => 'getVersionMinor',
        'start_time' => 'getStartTime',
        'current_time' => 'getCurrentTime',
        'build_number' => 'getBuildNumber',
        'build_date' => 'getBuildDate',
        'internal_id' => 'getInternalId',
        'role' => 'getRole',
        'web_url' => 'getWebUrl',
        'projects' => 'getProjects',
        'vcs_roots' => 'getVcsRoots',
        'builds' => 'getBuilds',
        'users' => 'getUsers',
        'user_groups' => 'getUserGroups',
        'agents' => 'getAgents',
        'build_queue' => 'getBuildQueue',
        'agent_pools' => 'getAgentPools',
        'investigations' => 'getInvestigations',
        'mutes' => 'getMutes',
        'artifacts_url' => 'getArtifactsUrl'
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
        $this->container['version_major'] = isset($data['version_major']) ? $data['version_major'] : null;
        $this->container['version_minor'] = isset($data['version_minor']) ? $data['version_minor'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['current_time'] = isset($data['current_time']) ? $data['current_time'] : null;
        $this->container['build_number'] = isset($data['build_number']) ? $data['build_number'] : null;
        $this->container['build_date'] = isset($data['build_date']) ? $data['build_date'] : null;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['web_url'] = isset($data['web_url']) ? $data['web_url'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['vcs_roots'] = isset($data['vcs_roots']) ? $data['vcs_roots'] : null;
        $this->container['builds'] = isset($data['builds']) ? $data['builds'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['user_groups'] = isset($data['user_groups']) ? $data['user_groups'] : null;
        $this->container['agents'] = isset($data['agents']) ? $data['agents'] : null;
        $this->container['build_queue'] = isset($data['build_queue']) ? $data['build_queue'] : null;
        $this->container['agent_pools'] = isset($data['agent_pools']) ? $data['agent_pools'] : null;
        $this->container['investigations'] = isset($data['investigations']) ? $data['investigations'] : null;
        $this->container['mutes'] = isset($data['mutes']) ? $data['mutes'] : null;
        $this->container['artifacts_url'] = isset($data['artifacts_url']) ? $data['artifacts_url'] : null;
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
     * Gets version_major
     *
     * @return int
     */
    public function getVersionMajor()
    {
        return $this->container['version_major'];
    }

    /**
     * Sets version_major
     *
     * @param int $version_major version_major
     *
     * @return $this
     */
    public function setVersionMajor($version_major)
    {
        $this->container['version_major'] = $version_major;

        return $this;
    }

    /**
     * Gets version_minor
     *
     * @return int
     */
    public function getVersionMinor()
    {
        return $this->container['version_minor'];
    }

    /**
     * Sets version_minor
     *
     * @param int $version_minor version_minor
     *
     * @return $this
     */
    public function setVersionMinor($version_minor)
    {
        $this->container['version_minor'] = $version_minor;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets current_time
     *
     * @return string
     */
    public function getCurrentTime()
    {
        return $this->container['current_time'];
    }

    /**
     * Sets current_time
     *
     * @param string $current_time current_time
     *
     * @return $this
     */
    public function setCurrentTime($current_time)
    {
        $this->container['current_time'] = $current_time;

        return $this;
    }

    /**
     * Gets build_number
     *
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->container['build_number'];
    }

    /**
     * Sets build_number
     *
     * @param string $build_number build_number
     *
     * @return $this
     */
    public function setBuildNumber($build_number)
    {
        $this->container['build_number'] = $build_number;

        return $this;
    }

    /**
     * Gets build_date
     *
     * @return string
     */
    public function getBuildDate()
    {
        return $this->container['build_date'];
    }

    /**
     * Sets build_date
     *
     * @param string $build_date build_date
     *
     * @return $this
     */
    public function setBuildDate($build_date)
    {
        $this->container['build_date'] = $build_date;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id internal_id
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

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
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets web_url
     *
     * @return string
     */
    public function getWebUrl()
    {
        return $this->container['web_url'];
    }

    /**
     * Sets web_url
     *
     * @param string $web_url web_url
     *
     * @return $this
     */
    public function setWebUrl($web_url)
    {
        $this->container['web_url'] = $web_url;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \Swagger\Client\Model\Href $projects projects
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets vcs_roots
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getVcsRoots()
    {
        return $this->container['vcs_roots'];
    }

    /**
     * Sets vcs_roots
     *
     * @param \Swagger\Client\Model\Href $vcs_roots vcs_roots
     *
     * @return $this
     */
    public function setVcsRoots($vcs_roots)
    {
        $this->container['vcs_roots'] = $vcs_roots;

        return $this;
    }

    /**
     * Gets builds
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getBuilds()
    {
        return $this->container['builds'];
    }

    /**
     * Sets builds
     *
     * @param \Swagger\Client\Model\Href $builds builds
     *
     * @return $this
     */
    public function setBuilds($builds)
    {
        $this->container['builds'] = $builds;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Swagger\Client\Model\Href $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets user_groups
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getUserGroups()
    {
        return $this->container['user_groups'];
    }

    /**
     * Sets user_groups
     *
     * @param \Swagger\Client\Model\Href $user_groups user_groups
     *
     * @return $this
     */
    public function setUserGroups($user_groups)
    {
        $this->container['user_groups'] = $user_groups;

        return $this;
    }

    /**
     * Gets agents
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getAgents()
    {
        return $this->container['agents'];
    }

    /**
     * Sets agents
     *
     * @param \Swagger\Client\Model\Href $agents agents
     *
     * @return $this
     */
    public function setAgents($agents)
    {
        $this->container['agents'] = $agents;

        return $this;
    }

    /**
     * Gets build_queue
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getBuildQueue()
    {
        return $this->container['build_queue'];
    }

    /**
     * Sets build_queue
     *
     * @param \Swagger\Client\Model\Href $build_queue build_queue
     *
     * @return $this
     */
    public function setBuildQueue($build_queue)
    {
        $this->container['build_queue'] = $build_queue;

        return $this;
    }

    /**
     * Gets agent_pools
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getAgentPools()
    {
        return $this->container['agent_pools'];
    }

    /**
     * Sets agent_pools
     *
     * @param \Swagger\Client\Model\Href $agent_pools agent_pools
     *
     * @return $this
     */
    public function setAgentPools($agent_pools)
    {
        $this->container['agent_pools'] = $agent_pools;

        return $this;
    }

    /**
     * Gets investigations
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getInvestigations()
    {
        return $this->container['investigations'];
    }

    /**
     * Sets investigations
     *
     * @param \Swagger\Client\Model\Href $investigations investigations
     *
     * @return $this
     */
    public function setInvestigations($investigations)
    {
        $this->container['investigations'] = $investigations;

        return $this;
    }

    /**
     * Gets mutes
     *
     * @return \Swagger\Client\Model\Href
     */
    public function getMutes()
    {
        return $this->container['mutes'];
    }

    /**
     * Sets mutes
     *
     * @param \Swagger\Client\Model\Href $mutes mutes
     *
     * @return $this
     */
    public function setMutes($mutes)
    {
        $this->container['mutes'] = $mutes;

        return $this;
    }

    /**
     * Gets artifacts_url
     *
     * @return string
     */
    public function getArtifactsUrl()
    {
        return $this->container['artifacts_url'];
    }

    /**
     * Sets artifacts_url
     *
     * @param string $artifacts_url artifacts_url
     *
     * @return $this
     */
    public function setArtifactsUrl($artifacts_url)
    {
        $this->container['artifacts_url'] = $artifacts_url;

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

