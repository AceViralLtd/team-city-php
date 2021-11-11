<?php
/**
 * BuildLocator
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
 * BuildLocator Class Doc Comment
 *
 * @category Class
 * @description Represents a locator string for filtering Build entities.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildLocator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildLocator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affected_project' => 'string',
        'agent' => 'string',
        'agent_type_id' => 'int',
        'any' => 'bool',
        'artifact_dependency' => 'string',
        'branch' => 'string',
        'build_type' => 'string',
        'canceled' => 'bool',
        'compatible_agent' => 'string',
        'composite' => 'bool',
        'count' => 'int',
        'default_filter' => 'bool',
        'failed_to_start' => 'bool',
        'finish_date' => 'string',
        'finished' => 'bool',
        'hanging' => 'bool',
        'history' => 'bool',
        'id' => 'int',
        'item' => 'string',
        'lookup_limit' => 'int',
        'number' => 'string',
        'personal' => 'bool',
        'pinned' => 'bool',
        'project' => 'string',
        'property' => 'string',
        'queued' => 'bool',
        'queued_date' => 'string',
        'running' => 'bool',
        'snapshot_dependency' => 'string',
        'start' => 'int',
        'start_date' => 'string',
        'state' => 'string',
        'status' => 'string',
        'tag' => 'string',
        'task_id' => 'int',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affected_project' => 'ProjectLocator',
        'agent' => 'AgentLocator',
        'agent_type_id' => 'int32',
        'any' => null,
        'artifact_dependency' => null,
        'branch' => 'BranchLocator',
        'build_type' => 'BuildTypeLocator',
        'canceled' => null,
        'compatible_agent' => 'AgentLocator',
        'composite' => null,
        'count' => 'int32',
        'default_filter' => null,
        'failed_to_start' => null,
        'finish_date' => 'date:<yyyyMMddTHHmmss+ZZZZ>,build:<build locator>,condition:<before/after>',
        'finished' => null,
        'hanging' => null,
        'history' => null,
        'id' => 'int32',
        'item' => 'item:(<locator1>),item:(<locator2>...)',
        'lookup_limit' => 'int32',
        'number' => null,
        'personal' => null,
        'pinned' => null,
        'project' => 'ProjectLocator',
        'property' => 'property:(name:<name>,value:<value>,matchType:<matchType>)',
        'queued' => null,
        'queued_date' => 'date:<yyyyMMddTHHmmss+ZZZZ>,build:<build locator>,condition:<before/after>',
        'running' => null,
        'snapshot_dependency' => null,
        'start' => 'int32',
        'start_date' => 'date:<yyyyMMddTHHmmss+ZZZZ>,build:<build locator>,condition:<before/after>',
        'state' => null,
        'status' => null,
        'tag' => 'TagLocator',
        'task_id' => 'int32',
        'user' => 'UserLocator'
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
        'agent' => 'agent',
        'agent_type_id' => 'agentTypeId',
        'any' => 'any',
        'artifact_dependency' => 'artifactDependency',
        'branch' => 'branch',
        'build_type' => 'buildType',
        'canceled' => 'canceled',
        'compatible_agent' => 'compatibleAgent',
        'composite' => 'composite',
        'count' => 'count',
        'default_filter' => 'defaultFilter',
        'failed_to_start' => 'failedToStart',
        'finish_date' => 'finishDate',
        'finished' => 'finished',
        'hanging' => 'hanging',
        'history' => 'history',
        'id' => 'id',
        'item' => 'item',
        'lookup_limit' => 'lookupLimit',
        'number' => 'number',
        'personal' => 'personal',
        'pinned' => 'pinned',
        'project' => 'project',
        'property' => 'property',
        'queued' => 'queued',
        'queued_date' => 'queuedDate',
        'running' => 'running',
        'snapshot_dependency' => 'snapshotDependency',
        'start' => 'start',
        'start_date' => 'startDate',
        'state' => 'state',
        'status' => 'status',
        'tag' => 'tag',
        'task_id' => 'taskId',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affected_project' => 'setAffectedProject',
        'agent' => 'setAgent',
        'agent_type_id' => 'setAgentTypeId',
        'any' => 'setAny',
        'artifact_dependency' => 'setArtifactDependency',
        'branch' => 'setBranch',
        'build_type' => 'setBuildType',
        'canceled' => 'setCanceled',
        'compatible_agent' => 'setCompatibleAgent',
        'composite' => 'setComposite',
        'count' => 'setCount',
        'default_filter' => 'setDefaultFilter',
        'failed_to_start' => 'setFailedToStart',
        'finish_date' => 'setFinishDate',
        'finished' => 'setFinished',
        'hanging' => 'setHanging',
        'history' => 'setHistory',
        'id' => 'setId',
        'item' => 'setItem',
        'lookup_limit' => 'setLookupLimit',
        'number' => 'setNumber',
        'personal' => 'setPersonal',
        'pinned' => 'setPinned',
        'project' => 'setProject',
        'property' => 'setProperty',
        'queued' => 'setQueued',
        'queued_date' => 'setQueuedDate',
        'running' => 'setRunning',
        'snapshot_dependency' => 'setSnapshotDependency',
        'start' => 'setStart',
        'start_date' => 'setStartDate',
        'state' => 'setState',
        'status' => 'setStatus',
        'tag' => 'setTag',
        'task_id' => 'setTaskId',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affected_project' => 'getAffectedProject',
        'agent' => 'getAgent',
        'agent_type_id' => 'getAgentTypeId',
        'any' => 'getAny',
        'artifact_dependency' => 'getArtifactDependency',
        'branch' => 'getBranch',
        'build_type' => 'getBuildType',
        'canceled' => 'getCanceled',
        'compatible_agent' => 'getCompatibleAgent',
        'composite' => 'getComposite',
        'count' => 'getCount',
        'default_filter' => 'getDefaultFilter',
        'failed_to_start' => 'getFailedToStart',
        'finish_date' => 'getFinishDate',
        'finished' => 'getFinished',
        'hanging' => 'getHanging',
        'history' => 'getHistory',
        'id' => 'getId',
        'item' => 'getItem',
        'lookup_limit' => 'getLookupLimit',
        'number' => 'getNumber',
        'personal' => 'getPersonal',
        'pinned' => 'getPinned',
        'project' => 'getProject',
        'property' => 'getProperty',
        'queued' => 'getQueued',
        'queued_date' => 'getQueuedDate',
        'running' => 'getRunning',
        'snapshot_dependency' => 'getSnapshotDependency',
        'start' => 'getStart',
        'start_date' => 'getStartDate',
        'state' => 'getState',
        'status' => 'getStatus',
        'tag' => 'getTag',
        'task_id' => 'getTaskId',
        'user' => 'getUser'
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
    const STATE_QUEUED = 'queued';
    const STATE_RUNNING = 'running';
    const STATE_FINISHED = 'finished';
    const STATE_ANY = 'any';
    

    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_QUEUED,
            self::STATE_RUNNING,
            self::STATE_FINISHED,
            self::STATE_ANY,
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
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['agent_type_id'] = isset($data['agent_type_id']) ? $data['agent_type_id'] : null;
        $this->container['any'] = isset($data['any']) ? $data['any'] : null;
        $this->container['artifact_dependency'] = isset($data['artifact_dependency']) ? $data['artifact_dependency'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['build_type'] = isset($data['build_type']) ? $data['build_type'] : null;
        $this->container['canceled'] = isset($data['canceled']) ? $data['canceled'] : null;
        $this->container['compatible_agent'] = isset($data['compatible_agent']) ? $data['compatible_agent'] : null;
        $this->container['composite'] = isset($data['composite']) ? $data['composite'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['default_filter'] = isset($data['default_filter']) ? $data['default_filter'] : null;
        $this->container['failed_to_start'] = isset($data['failed_to_start']) ? $data['failed_to_start'] : null;
        $this->container['finish_date'] = isset($data['finish_date']) ? $data['finish_date'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['hanging'] = isset($data['hanging']) ? $data['hanging'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['lookup_limit'] = isset($data['lookup_limit']) ? $data['lookup_limit'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['personal'] = isset($data['personal']) ? $data['personal'] : null;
        $this->container['pinned'] = isset($data['pinned']) ? $data['pinned'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['queued'] = isset($data['queued']) ? $data['queued'] : null;
        $this->container['queued_date'] = isset($data['queued_date']) ? $data['queued_date'] : null;
        $this->container['running'] = isset($data['running']) ? $data['running'] : null;
        $this->container['snapshot_dependency'] = isset($data['snapshot_dependency']) ? $data['snapshot_dependency'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param string $agent Agent locator.
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets agent_type_id
     *
     * @return int
     */
    public function getAgentTypeId()
    {
        return $this->container['agent_type_id'];
    }

    /**
     * Sets agent_type_id
     *
     * @param int $agent_type_id typeId of agent used to execute build.
     *
     * @return $this
     */
    public function setAgentTypeId($agent_type_id)
    {
        $this->container['agent_type_id'] = $agent_type_id;

        return $this;
    }

    /**
     * Gets any
     *
     * @return bool
     */
    public function getAny()
    {
        return $this->container['any'];
    }

    /**
     * Sets any
     *
     * @param bool $any State can be any.
     *
     * @return $this
     */
    public function setAny($any)
    {
        $this->container['any'] = $any;

        return $this;
    }

    /**
     * Gets artifact_dependency
     *
     * @return string
     */
    public function getArtifactDependency()
    {
        return $this->container['artifact_dependency'];
    }

    /**
     * Sets artifact_dependency
     *
     * @param string $artifact_dependency artifact_dependency
     *
     * @return $this
     */
    public function setArtifactDependency($artifact_dependency)
    {
        $this->container['artifact_dependency'] = $artifact_dependency;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch Branch locator.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

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
     * Gets canceled
     *
     * @return bool
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /**
     * Sets canceled
     *
     * @param bool $canceled Is canceled.
     *
     * @return $this
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /**
     * Gets compatible_agent
     *
     * @return string
     */
    public function getCompatibleAgent()
    {
        return $this->container['compatible_agent'];
    }

    /**
     * Sets compatible_agent
     *
     * @param string $compatible_agent Agent locator.
     *
     * @return $this
     */
    public function setCompatibleAgent($compatible_agent)
    {
        $this->container['compatible_agent'] = $compatible_agent;

        return $this;
    }

    /**
     * Gets composite
     *
     * @return bool
     */
    public function getComposite()
    {
        return $this->container['composite'];
    }

    /**
     * Sets composite
     *
     * @param bool $composite Is composite.
     *
     * @return $this
     */
    public function setComposite($composite)
    {
        $this->container['composite'] = $composite;

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
     * Gets default_filter
     *
     * @return bool
     */
    public function getDefaultFilter()
    {
        return $this->container['default_filter'];
    }

    /**
     * Sets default_filter
     *
     * @param bool $default_filter If true, applies default filter which returns only \"normal\" builds (finished builds which are not canceled, not failed-to-start, not personal, and on default branch (in branched build configurations)).
     *
     * @return $this
     */
    public function setDefaultFilter($default_filter)
    {
        $this->container['default_filter'] = $default_filter;

        return $this;
    }

    /**
     * Gets failed_to_start
     *
     * @return bool
     */
    public function getFailedToStart()
    {
        return $this->container['failed_to_start'];
    }

    /**
     * Sets failed_to_start
     *
     * @param bool $failed_to_start Is failed to start.
     *
     * @return $this
     */
    public function setFailedToStart($failed_to_start)
    {
        $this->container['failed_to_start'] = $failed_to_start;

        return $this;
    }

    /**
     * Gets finish_date
     *
     * @return string
     */
    public function getFinishDate()
    {
        return $this->container['finish_date'];
    }

    /**
     * Sets finish_date
     *
     * @param string $finish_date Requires either date or build dimension.
     *
     * @return $this
     */
    public function setFinishDate($finish_date)
    {
        $this->container['finish_date'] = $finish_date;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return bool
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param bool $finished Is finished.
     *
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets hanging
     *
     * @return bool
     */
    public function getHanging()
    {
        return $this->container['hanging'];
    }

    /**
     * Sets hanging
     *
     * @param bool $hanging Is hanging.
     *
     * @return $this
     */
    public function setHanging($hanging)
    {
        $this->container['hanging'] = $hanging;

        return $this;
    }

    /**
     * Gets history
     *
     * @return bool
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param bool $history Is history build.
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets personal
     *
     * @return bool
     */
    public function getPersonal()
    {
        return $this->container['personal'];
    }

    /**
     * Sets personal
     *
     * @param bool $personal Is a personal build.
     *
     * @return $this
     */
    public function setPersonal($personal)
    {
        $this->container['personal'] = $personal;

        return $this;
    }

    /**
     * Gets pinned
     *
     * @return bool
     */
    public function getPinned()
    {
        return $this->container['pinned'];
    }

    /**
     * Sets pinned
     *
     * @param bool $pinned Is pinned.
     *
     * @return $this
     */
    public function setPinned($pinned)
    {
        $this->container['pinned'] = $pinned;

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
     * Gets queued
     *
     * @return bool
     */
    public function getQueued()
    {
        return $this->container['queued'];
    }

    /**
     * Sets queued
     *
     * @param bool $queued Is queued.
     *
     * @return $this
     */
    public function setQueued($queued)
    {
        $this->container['queued'] = $queued;

        return $this;
    }

    /**
     * Gets queued_date
     *
     * @return string
     */
    public function getQueuedDate()
    {
        return $this->container['queued_date'];
    }

    /**
     * Sets queued_date
     *
     * @param string $queued_date Requires either date or build dimension.
     *
     * @return $this
     */
    public function setQueuedDate($queued_date)
    {
        $this->container['queued_date'] = $queued_date;

        return $this;
    }

    /**
     * Gets running
     *
     * @return bool
     */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
     * Sets running
     *
     * @param bool $running Is running.
     *
     * @return $this
     */
    public function setRunning($running)
    {
        $this->container['running'] = $running;

        return $this;
    }

    /**
     * Gets snapshot_dependency
     *
     * @return string
     */
    public function getSnapshotDependency()
    {
        return $this->container['snapshot_dependency'];
    }

    /**
     * Sets snapshot_dependency
     *
     * @param string $snapshot_dependency snapshot_dependency
     *
     * @return $this
     */
    public function setSnapshotDependency($snapshot_dependency)
    {
        $this->container['snapshot_dependency'] = $snapshot_dependency;

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
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Requires either date or build dimension.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag Tag locator.
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param int $task_id ID of a build or build promotion.
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user User locator.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


