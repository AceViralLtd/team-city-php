<?php
/**
 * Agent
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
 * Agent Class Doc Comment
 *
 * @category Class
 * @description Represents a known agent instance.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Agent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'agent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'type_id' => 'int',
        'connected' => 'bool',
        'enabled' => 'bool',
        'authorized' => 'bool',
        'uptodate' => 'bool',
        'outdated' => 'bool',
        'plugins_outdated' => 'bool',
        'java_outdated' => 'bool',
        'ip' => 'string',
        'protocol' => 'string',
        'version' => 'string',
        'current_agent_version' => 'string',
        'last_activity_time' => 'string',
        'idle_since_time' => 'string',
        'disconnection_comment' => 'string',
        'registration_timestamp' => 'string',
        'host' => 'string',
        'cpu_rank' => 'int',
        'port' => 'int',
        'href' => 'string',
        'web_url' => 'string',
        'build' => '\Swagger\Client\Model\Build',
        'links' => '\Swagger\Client\Model\Links',
        'enabled_info' => '\Swagger\Client\Model\EnabledInfo',
        'authorized_info' => '\Swagger\Client\Model\AuthorizedInfo',
        'properties' => '\Swagger\Client\Model\Properties',
        'cloud_instance' => '\Swagger\Client\Model\CloudInstance',
        'cloud_image' => '\Swagger\Client\Model\CloudImage',
        'environment' => '\Swagger\Client\Model\Environment',
        'pool' => '\Swagger\Client\Model\AgentPool',
        'compatibility_policy' => '\Swagger\Client\Model\CompatibilityPolicy',
        'compatible_build_types' => '\Swagger\Client\Model\BuildTypes',
        'incompatible_build_types' => '\Swagger\Client\Model\Compatibilities',
        'builds' => '\Swagger\Client\Model\Builds',
        'locator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'type_id' => 'int32',
        'connected' => null,
        'enabled' => null,
        'authorized' => null,
        'uptodate' => null,
        'outdated' => null,
        'plugins_outdated' => null,
        'java_outdated' => null,
        'ip' => null,
        'protocol' => null,
        'version' => null,
        'current_agent_version' => null,
        'last_activity_time' => null,
        'idle_since_time' => null,
        'disconnection_comment' => null,
        'registration_timestamp' => null,
        'host' => null,
        'cpu_rank' => 'int32',
        'port' => 'int32',
        'href' => null,
        'web_url' => null,
        'build' => null,
        'links' => null,
        'enabled_info' => null,
        'authorized_info' => null,
        'properties' => null,
        'cloud_instance' => null,
        'cloud_image' => null,
        'environment' => null,
        'pool' => null,
        'compatibility_policy' => null,
        'compatible_build_types' => null,
        'incompatible_build_types' => null,
        'builds' => null,
        'locator' => null
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
        'name' => 'name',
        'type_id' => 'typeId',
        'connected' => 'connected',
        'enabled' => 'enabled',
        'authorized' => 'authorized',
        'uptodate' => 'uptodate',
        'outdated' => 'outdated',
        'plugins_outdated' => 'pluginsOutdated',
        'java_outdated' => 'javaOutdated',
        'ip' => 'ip',
        'protocol' => 'protocol',
        'version' => 'version',
        'current_agent_version' => 'currentAgentVersion',
        'last_activity_time' => 'lastActivityTime',
        'idle_since_time' => 'idleSinceTime',
        'disconnection_comment' => 'disconnectionComment',
        'registration_timestamp' => 'registrationTimestamp',
        'host' => 'host',
        'cpu_rank' => 'cpuRank',
        'port' => 'port',
        'href' => 'href',
        'web_url' => 'webUrl',
        'build' => 'build',
        'links' => 'links',
        'enabled_info' => 'enabledInfo',
        'authorized_info' => 'authorizedInfo',
        'properties' => 'properties',
        'cloud_instance' => 'cloudInstance',
        'cloud_image' => 'cloudImage',
        'environment' => 'environment',
        'pool' => 'pool',
        'compatibility_policy' => 'compatibilityPolicy',
        'compatible_build_types' => 'compatibleBuildTypes',
        'incompatible_build_types' => 'incompatibleBuildTypes',
        'builds' => 'builds',
        'locator' => 'locator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type_id' => 'setTypeId',
        'connected' => 'setConnected',
        'enabled' => 'setEnabled',
        'authorized' => 'setAuthorized',
        'uptodate' => 'setUptodate',
        'outdated' => 'setOutdated',
        'plugins_outdated' => 'setPluginsOutdated',
        'java_outdated' => 'setJavaOutdated',
        'ip' => 'setIp',
        'protocol' => 'setProtocol',
        'version' => 'setVersion',
        'current_agent_version' => 'setCurrentAgentVersion',
        'last_activity_time' => 'setLastActivityTime',
        'idle_since_time' => 'setIdleSinceTime',
        'disconnection_comment' => 'setDisconnectionComment',
        'registration_timestamp' => 'setRegistrationTimestamp',
        'host' => 'setHost',
        'cpu_rank' => 'setCpuRank',
        'port' => 'setPort',
        'href' => 'setHref',
        'web_url' => 'setWebUrl',
        'build' => 'setBuild',
        'links' => 'setLinks',
        'enabled_info' => 'setEnabledInfo',
        'authorized_info' => 'setAuthorizedInfo',
        'properties' => 'setProperties',
        'cloud_instance' => 'setCloudInstance',
        'cloud_image' => 'setCloudImage',
        'environment' => 'setEnvironment',
        'pool' => 'setPool',
        'compatibility_policy' => 'setCompatibilityPolicy',
        'compatible_build_types' => 'setCompatibleBuildTypes',
        'incompatible_build_types' => 'setIncompatibleBuildTypes',
        'builds' => 'setBuilds',
        'locator' => 'setLocator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type_id' => 'getTypeId',
        'connected' => 'getConnected',
        'enabled' => 'getEnabled',
        'authorized' => 'getAuthorized',
        'uptodate' => 'getUptodate',
        'outdated' => 'getOutdated',
        'plugins_outdated' => 'getPluginsOutdated',
        'java_outdated' => 'getJavaOutdated',
        'ip' => 'getIp',
        'protocol' => 'getProtocol',
        'version' => 'getVersion',
        'current_agent_version' => 'getCurrentAgentVersion',
        'last_activity_time' => 'getLastActivityTime',
        'idle_since_time' => 'getIdleSinceTime',
        'disconnection_comment' => 'getDisconnectionComment',
        'registration_timestamp' => 'getRegistrationTimestamp',
        'host' => 'getHost',
        'cpu_rank' => 'getCpuRank',
        'port' => 'getPort',
        'href' => 'getHref',
        'web_url' => 'getWebUrl',
        'build' => 'getBuild',
        'links' => 'getLinks',
        'enabled_info' => 'getEnabledInfo',
        'authorized_info' => 'getAuthorizedInfo',
        'properties' => 'getProperties',
        'cloud_instance' => 'getCloudInstance',
        'cloud_image' => 'getCloudImage',
        'environment' => 'getEnvironment',
        'pool' => 'getPool',
        'compatibility_policy' => 'getCompatibilityPolicy',
        'compatible_build_types' => 'getCompatibleBuildTypes',
        'incompatible_build_types' => 'getIncompatibleBuildTypes',
        'builds' => 'getBuilds',
        'locator' => 'getLocator'
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

    const PROTOCOL_UNIDIRECTIONAL = 'unidirectional';
    const PROTOCOL_BIDIRECTIONAL = 'bidirectional';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_UNIDIRECTIONAL,
            self::PROTOCOL_BIDIRECTIONAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['uptodate'] = isset($data['uptodate']) ? $data['uptodate'] : null;
        $this->container['outdated'] = isset($data['outdated']) ? $data['outdated'] : null;
        $this->container['plugins_outdated'] = isset($data['plugins_outdated']) ? $data['plugins_outdated'] : null;
        $this->container['java_outdated'] = isset($data['java_outdated']) ? $data['java_outdated'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['current_agent_version'] = isset($data['current_agent_version']) ? $data['current_agent_version'] : null;
        $this->container['last_activity_time'] = isset($data['last_activity_time']) ? $data['last_activity_time'] : null;
        $this->container['idle_since_time'] = isset($data['idle_since_time']) ? $data['idle_since_time'] : null;
        $this->container['disconnection_comment'] = isset($data['disconnection_comment']) ? $data['disconnection_comment'] : null;
        $this->container['registration_timestamp'] = isset($data['registration_timestamp']) ? $data['registration_timestamp'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['cpu_rank'] = isset($data['cpu_rank']) ? $data['cpu_rank'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['web_url'] = isset($data['web_url']) ? $data['web_url'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['enabled_info'] = isset($data['enabled_info']) ? $data['enabled_info'] : null;
        $this->container['authorized_info'] = isset($data['authorized_info']) ? $data['authorized_info'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['cloud_instance'] = isset($data['cloud_instance']) ? $data['cloud_instance'] : null;
        $this->container['cloud_image'] = isset($data['cloud_image']) ? $data['cloud_image'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['compatibility_policy'] = isset($data['compatibility_policy']) ? $data['compatibility_policy'] : null;
        $this->container['compatible_build_types'] = isset($data['compatible_build_types']) ? $data['compatible_build_types'] : null;
        $this->container['incompatible_build_types'] = isset($data['incompatible_build_types']) ? $data['incompatible_build_types'] : null;
        $this->container['builds'] = isset($data['builds']) ? $data['builds'] : null;
        $this->container['locator'] = isset($data['locator']) ? $data['locator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id type_id
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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
     * @param bool $connected connected
     *
     * @return $this
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

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
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
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
     * @param bool $authorized authorized
     *
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;

        return $this;
    }

    /**
     * Gets uptodate
     *
     * @return bool
     */
    public function getUptodate()
    {
        return $this->container['uptodate'];
    }

    /**
     * Sets uptodate
     *
     * @param bool $uptodate uptodate
     *
     * @return $this
     */
    public function setUptodate($uptodate)
    {
        $this->container['uptodate'] = $uptodate;

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
     * Gets plugins_outdated
     *
     * @return bool
     */
    public function getPluginsOutdated()
    {
        return $this->container['plugins_outdated'];
    }

    /**
     * Sets plugins_outdated
     *
     * @param bool $plugins_outdated plugins_outdated
     *
     * @return $this
     */
    public function setPluginsOutdated($plugins_outdated)
    {
        $this->container['plugins_outdated'] = $plugins_outdated;

        return $this;
    }

    /**
     * Gets java_outdated
     *
     * @return bool
     */
    public function getJavaOutdated()
    {
        return $this->container['java_outdated'];
    }

    /**
     * Sets java_outdated
     *
     * @param bool $java_outdated java_outdated
     *
     * @return $this
     */
    public function setJavaOutdated($java_outdated)
    {
        $this->container['java_outdated'] = $java_outdated;

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
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($protocol) && !in_array($protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'protocol', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

        return $this;
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
     * Gets current_agent_version
     *
     * @return string
     */
    public function getCurrentAgentVersion()
    {
        return $this->container['current_agent_version'];
    }

    /**
     * Sets current_agent_version
     *
     * @param string $current_agent_version current_agent_version
     *
     * @return $this
     */
    public function setCurrentAgentVersion($current_agent_version)
    {
        $this->container['current_agent_version'] = $current_agent_version;

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
     * Gets idle_since_time
     *
     * @return string
     */
    public function getIdleSinceTime()
    {
        return $this->container['idle_since_time'];
    }

    /**
     * Sets idle_since_time
     *
     * @param string $idle_since_time idle_since_time
     *
     * @return $this
     */
    public function setIdleSinceTime($idle_since_time)
    {
        $this->container['idle_since_time'] = $idle_since_time;

        return $this;
    }

    /**
     * Gets disconnection_comment
     *
     * @return string
     */
    public function getDisconnectionComment()
    {
        return $this->container['disconnection_comment'];
    }

    /**
     * Sets disconnection_comment
     *
     * @param string $disconnection_comment disconnection_comment
     *
     * @return $this
     */
    public function setDisconnectionComment($disconnection_comment)
    {
        $this->container['disconnection_comment'] = $disconnection_comment;

        return $this;
    }

    /**
     * Gets registration_timestamp
     *
     * @return string
     */
    public function getRegistrationTimestamp()
    {
        return $this->container['registration_timestamp'];
    }

    /**
     * Sets registration_timestamp
     *
     * @param string $registration_timestamp registration_timestamp
     *
     * @return $this
     */
    public function setRegistrationTimestamp($registration_timestamp)
    {
        $this->container['registration_timestamp'] = $registration_timestamp;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets cpu_rank
     *
     * @return int
     */
    public function getCpuRank()
    {
        return $this->container['cpu_rank'];
    }

    /**
     * Sets cpu_rank
     *
     * @param int $cpu_rank cpu_rank
     *
     * @return $this
     */
    public function setCpuRank($cpu_rank)
    {
        $this->container['cpu_rank'] = $cpu_rank;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

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
     * Gets links
     *
     * @return \Swagger\Client\Model\Links
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\Links $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets enabled_info
     *
     * @return \Swagger\Client\Model\EnabledInfo
     */
    public function getEnabledInfo()
    {
        return $this->container['enabled_info'];
    }

    /**
     * Sets enabled_info
     *
     * @param \Swagger\Client\Model\EnabledInfo $enabled_info enabled_info
     *
     * @return $this
     */
    public function setEnabledInfo($enabled_info)
    {
        $this->container['enabled_info'] = $enabled_info;

        return $this;
    }

    /**
     * Gets authorized_info
     *
     * @return \Swagger\Client\Model\AuthorizedInfo
     */
    public function getAuthorizedInfo()
    {
        return $this->container['authorized_info'];
    }

    /**
     * Sets authorized_info
     *
     * @param \Swagger\Client\Model\AuthorizedInfo $authorized_info authorized_info
     *
     * @return $this
     */
    public function setAuthorizedInfo($authorized_info)
    {
        $this->container['authorized_info'] = $authorized_info;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Swagger\Client\Model\Properties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\Properties $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets cloud_instance
     *
     * @return \Swagger\Client\Model\CloudInstance
     */
    public function getCloudInstance()
    {
        return $this->container['cloud_instance'];
    }

    /**
     * Sets cloud_instance
     *
     * @param \Swagger\Client\Model\CloudInstance $cloud_instance cloud_instance
     *
     * @return $this
     */
    public function setCloudInstance($cloud_instance)
    {
        $this->container['cloud_instance'] = $cloud_instance;

        return $this;
    }

    /**
     * Gets cloud_image
     *
     * @return \Swagger\Client\Model\CloudImage
     */
    public function getCloudImage()
    {
        return $this->container['cloud_image'];
    }

    /**
     * Sets cloud_image
     *
     * @param \Swagger\Client\Model\CloudImage $cloud_image cloud_image
     *
     * @return $this
     */
    public function setCloudImage($cloud_image)
    {
        $this->container['cloud_image'] = $cloud_image;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \Swagger\Client\Model\Environment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Swagger\Client\Model\Environment $environment environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets pool
     *
     * @return \Swagger\Client\Model\AgentPool
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     *
     * @param \Swagger\Client\Model\AgentPool $pool pool
     *
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

        return $this;
    }

    /**
     * Gets compatibility_policy
     *
     * @return \Swagger\Client\Model\CompatibilityPolicy
     */
    public function getCompatibilityPolicy()
    {
        return $this->container['compatibility_policy'];
    }

    /**
     * Sets compatibility_policy
     *
     * @param \Swagger\Client\Model\CompatibilityPolicy $compatibility_policy compatibility_policy
     *
     * @return $this
     */
    public function setCompatibilityPolicy($compatibility_policy)
    {
        $this->container['compatibility_policy'] = $compatibility_policy;

        return $this;
    }

    /**
     * Gets compatible_build_types
     *
     * @return \Swagger\Client\Model\BuildTypes
     */
    public function getCompatibleBuildTypes()
    {
        return $this->container['compatible_build_types'];
    }

    /**
     * Sets compatible_build_types
     *
     * @param \Swagger\Client\Model\BuildTypes $compatible_build_types compatible_build_types
     *
     * @return $this
     */
    public function setCompatibleBuildTypes($compatible_build_types)
    {
        $this->container['compatible_build_types'] = $compatible_build_types;

        return $this;
    }

    /**
     * Gets incompatible_build_types
     *
     * @return \Swagger\Client\Model\Compatibilities
     */
    public function getIncompatibleBuildTypes()
    {
        return $this->container['incompatible_build_types'];
    }

    /**
     * Sets incompatible_build_types
     *
     * @param \Swagger\Client\Model\Compatibilities $incompatible_build_types incompatible_build_types
     *
     * @return $this
     */
    public function setIncompatibleBuildTypes($incompatible_build_types)
    {
        $this->container['incompatible_build_types'] = $incompatible_build_types;

        return $this;
    }

    /**
     * Gets builds
     *
     * @return \Swagger\Client\Model\Builds
     */
    public function getBuilds()
    {
        return $this->container['builds'];
    }

    /**
     * Sets builds
     *
     * @param \Swagger\Client\Model\Builds $builds builds
     *
     * @return $this
     */
    public function setBuilds($builds)
    {
        $this->container['builds'] = $builds;

        return $this;
    }

    /**
     * Gets locator
     *
     * @return string
     */
    public function getLocator()
    {
        return $this->container['locator'];
    }

    /**
     * Sets locator
     *
     * @param string $locator locator
     *
     * @return $this
     */
    public function setLocator($locator)
    {
        $this->container['locator'] = $locator;

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


