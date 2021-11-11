<?php
/**
 * Project
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
 * Project Class Doc Comment
 *
 * @category Class
 * @description Represents a project.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'internal_id' => 'string',
        'uuid' => 'string',
        'name' => 'string',
        'parent_project_id' => 'string',
        'parent_project_internal_id' => 'string',
        'parent_project_name' => 'string',
        'archived' => 'bool',
        'description' => 'string',
        'href' => 'string',
        'web_url' => 'string',
        'links' => '\Swagger\Client\Model\Links',
        'parent_project' => '\Swagger\Client\Model\Project',
        'read_only_ui' => '\Swagger\Client\Model\StateField',
        'default_template' => '\Swagger\Client\Model\BuildType',
        'build_types' => '\Swagger\Client\Model\BuildTypes',
        'templates' => '\Swagger\Client\Model\BuildTypes',
        'parameters' => '\Swagger\Client\Model\Properties',
        'vcs_roots' => '\Swagger\Client\Model\VcsRoots',
        'project_features' => '\Swagger\Client\Model\ProjectFeatures',
        'projects' => '\Swagger\Client\Model\Projects',
        'cloud_profiles' => '\Swagger\Client\Model\CloudProfiles',
        'locator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'internal_id' => null,
        'uuid' => null,
        'name' => null,
        'parent_project_id' => null,
        'parent_project_internal_id' => null,
        'parent_project_name' => null,
        'archived' => null,
        'description' => null,
        'href' => null,
        'web_url' => null,
        'links' => null,
        'parent_project' => null,
        'read_only_ui' => null,
        'default_template' => null,
        'build_types' => null,
        'templates' => null,
        'parameters' => null,
        'vcs_roots' => null,
        'project_features' => null,
        'projects' => null,
        'cloud_profiles' => null,
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
        'internal_id' => 'internalId',
        'uuid' => 'uuid',
        'name' => 'name',
        'parent_project_id' => 'parentProjectId',
        'parent_project_internal_id' => 'parentProjectInternalId',
        'parent_project_name' => 'parentProjectName',
        'archived' => 'archived',
        'description' => 'description',
        'href' => 'href',
        'web_url' => 'webUrl',
        'links' => 'links',
        'parent_project' => 'parentProject',
        'read_only_ui' => 'readOnlyUI',
        'default_template' => 'defaultTemplate',
        'build_types' => 'buildTypes',
        'templates' => 'templates',
        'parameters' => 'parameters',
        'vcs_roots' => 'vcsRoots',
        'project_features' => 'projectFeatures',
        'projects' => 'projects',
        'cloud_profiles' => 'cloudProfiles',
        'locator' => 'locator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'internal_id' => 'setInternalId',
        'uuid' => 'setUuid',
        'name' => 'setName',
        'parent_project_id' => 'setParentProjectId',
        'parent_project_internal_id' => 'setParentProjectInternalId',
        'parent_project_name' => 'setParentProjectName',
        'archived' => 'setArchived',
        'description' => 'setDescription',
        'href' => 'setHref',
        'web_url' => 'setWebUrl',
        'links' => 'setLinks',
        'parent_project' => 'setParentProject',
        'read_only_ui' => 'setReadOnlyUi',
        'default_template' => 'setDefaultTemplate',
        'build_types' => 'setBuildTypes',
        'templates' => 'setTemplates',
        'parameters' => 'setParameters',
        'vcs_roots' => 'setVcsRoots',
        'project_features' => 'setProjectFeatures',
        'projects' => 'setProjects',
        'cloud_profiles' => 'setCloudProfiles',
        'locator' => 'setLocator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'internal_id' => 'getInternalId',
        'uuid' => 'getUuid',
        'name' => 'getName',
        'parent_project_id' => 'getParentProjectId',
        'parent_project_internal_id' => 'getParentProjectInternalId',
        'parent_project_name' => 'getParentProjectName',
        'archived' => 'getArchived',
        'description' => 'getDescription',
        'href' => 'getHref',
        'web_url' => 'getWebUrl',
        'links' => 'getLinks',
        'parent_project' => 'getParentProject',
        'read_only_ui' => 'getReadOnlyUi',
        'default_template' => 'getDefaultTemplate',
        'build_types' => 'getBuildTypes',
        'templates' => 'getTemplates',
        'parameters' => 'getParameters',
        'vcs_roots' => 'getVcsRoots',
        'project_features' => 'getProjectFeatures',
        'projects' => 'getProjects',
        'cloud_profiles' => 'getCloudProfiles',
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
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_project_id'] = isset($data['parent_project_id']) ? $data['parent_project_id'] : null;
        $this->container['parent_project_internal_id'] = isset($data['parent_project_internal_id']) ? $data['parent_project_internal_id'] : null;
        $this->container['parent_project_name'] = isset($data['parent_project_name']) ? $data['parent_project_name'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['web_url'] = isset($data['web_url']) ? $data['web_url'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['parent_project'] = isset($data['parent_project']) ? $data['parent_project'] : null;
        $this->container['read_only_ui'] = isset($data['read_only_ui']) ? $data['read_only_ui'] : null;
        $this->container['default_template'] = isset($data['default_template']) ? $data['default_template'] : null;
        $this->container['build_types'] = isset($data['build_types']) ? $data['build_types'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['vcs_roots'] = isset($data['vcs_roots']) ? $data['vcs_roots'] : null;
        $this->container['project_features'] = isset($data['project_features']) ? $data['project_features'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['cloud_profiles'] = isset($data['cloud_profiles']) ? $data['cloud_profiles'] : null;
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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
     * Gets parent_project_id
     *
     * @return string
     */
    public function getParentProjectId()
    {
        return $this->container['parent_project_id'];
    }

    /**
     * Sets parent_project_id
     *
     * @param string $parent_project_id parent_project_id
     *
     * @return $this
     */
    public function setParentProjectId($parent_project_id)
    {
        $this->container['parent_project_id'] = $parent_project_id;

        return $this;
    }

    /**
     * Gets parent_project_internal_id
     *
     * @return string
     */
    public function getParentProjectInternalId()
    {
        return $this->container['parent_project_internal_id'];
    }

    /**
     * Sets parent_project_internal_id
     *
     * @param string $parent_project_internal_id parent_project_internal_id
     *
     * @return $this
     */
    public function setParentProjectInternalId($parent_project_internal_id)
    {
        $this->container['parent_project_internal_id'] = $parent_project_internal_id;

        return $this;
    }

    /**
     * Gets parent_project_name
     *
     * @return string
     */
    public function getParentProjectName()
    {
        return $this->container['parent_project_name'];
    }

    /**
     * Sets parent_project_name
     *
     * @param string $parent_project_name parent_project_name
     *
     * @return $this
     */
    public function setParentProjectName($parent_project_name)
    {
        $this->container['parent_project_name'] = $parent_project_name;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived archived
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets parent_project
     *
     * @return \Swagger\Client\Model\Project
     */
    public function getParentProject()
    {
        return $this->container['parent_project'];
    }

    /**
     * Sets parent_project
     *
     * @param \Swagger\Client\Model\Project $parent_project parent_project
     *
     * @return $this
     */
    public function setParentProject($parent_project)
    {
        $this->container['parent_project'] = $parent_project;

        return $this;
    }

    /**
     * Gets read_only_ui
     *
     * @return \Swagger\Client\Model\StateField
     */
    public function getReadOnlyUi()
    {
        return $this->container['read_only_ui'];
    }

    /**
     * Sets read_only_ui
     *
     * @param \Swagger\Client\Model\StateField $read_only_ui read_only_ui
     *
     * @return $this
     */
    public function setReadOnlyUi($read_only_ui)
    {
        $this->container['read_only_ui'] = $read_only_ui;

        return $this;
    }

    /**
     * Gets default_template
     *
     * @return \Swagger\Client\Model\BuildType
     */
    public function getDefaultTemplate()
    {
        return $this->container['default_template'];
    }

    /**
     * Sets default_template
     *
     * @param \Swagger\Client\Model\BuildType $default_template default_template
     *
     * @return $this
     */
    public function setDefaultTemplate($default_template)
    {
        $this->container['default_template'] = $default_template;

        return $this;
    }

    /**
     * Gets build_types
     *
     * @return \Swagger\Client\Model\BuildTypes
     */
    public function getBuildTypes()
    {
        return $this->container['build_types'];
    }

    /**
     * Sets build_types
     *
     * @param \Swagger\Client\Model\BuildTypes $build_types build_types
     *
     * @return $this
     */
    public function setBuildTypes($build_types)
    {
        $this->container['build_types'] = $build_types;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \Swagger\Client\Model\BuildTypes
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \Swagger\Client\Model\BuildTypes $templates templates
     *
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Swagger\Client\Model\Properties
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Swagger\Client\Model\Properties $parameters parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets vcs_roots
     *
     * @return \Swagger\Client\Model\VcsRoots
     */
    public function getVcsRoots()
    {
        return $this->container['vcs_roots'];
    }

    /**
     * Sets vcs_roots
     *
     * @param \Swagger\Client\Model\VcsRoots $vcs_roots vcs_roots
     *
     * @return $this
     */
    public function setVcsRoots($vcs_roots)
    {
        $this->container['vcs_roots'] = $vcs_roots;

        return $this;
    }

    /**
     * Gets project_features
     *
     * @return \Swagger\Client\Model\ProjectFeatures
     */
    public function getProjectFeatures()
    {
        return $this->container['project_features'];
    }

    /**
     * Sets project_features
     *
     * @param \Swagger\Client\Model\ProjectFeatures $project_features project_features
     *
     * @return $this
     */
    public function setProjectFeatures($project_features)
    {
        $this->container['project_features'] = $project_features;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \Swagger\Client\Model\Projects
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \Swagger\Client\Model\Projects $projects projects
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets cloud_profiles
     *
     * @return \Swagger\Client\Model\CloudProfiles
     */
    public function getCloudProfiles()
    {
        return $this->container['cloud_profiles'];
    }

    /**
     * Sets cloud_profiles
     *
     * @param \Swagger\Client\Model\CloudProfiles $cloud_profiles cloud_profiles
     *
     * @return $this
     */
    public function setCloudProfiles($cloud_profiles)
    {
        $this->container['cloud_profiles'] = $cloud_profiles;

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

