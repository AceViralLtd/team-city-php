# BuildLocator

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affected_project** | **string** | Project (direct or indirect parent) locator. | [optional] 
**agent** | **string** | Agent locator. | [optional] 
**agent_type_id** | **int** | typeId of agent used to execute build. | [optional] 
**any** | **bool** | State can be any. | [optional] 
**artifact_dependency** | **string** |  | [optional] 
**branch** | **string** | Branch locator. | [optional] 
**build_type** | **string** | Build type locator. | [optional] 
**canceled** | **bool** | Is canceled. | [optional] 
**compatible_agent** | **string** | Agent locator. | [optional] 
**composite** | **bool** | Is composite. | [optional] 
**count** | **int** | For paginated calls, how many entities to return per page. | [optional] 
**default_filter** | **bool** | If true, applies default filter which returns only \&quot;normal\&quot; builds (finished builds which are not canceled, not failed-to-start, not personal, and on default branch (in branched build configurations)). | [optional] 
**failed_to_start** | **bool** | Is failed to start. | [optional] 
**finish_date** | **string** | Requires either date or build dimension. | [optional] 
**finished** | **bool** | Is finished. | [optional] 
**hanging** | **bool** | Is hanging. | [optional] 
**history** | **bool** | Is history build. | [optional] 
**id** | **int** | Entity ID. | [optional] 
**item** | **string** | Supply multiple locators and return a union of the results. | [optional] 
**lookup_limit** | **int** | Limit processing to the latest &#x60;&lt;lookupLimit&gt;&#x60; entities. | [optional] 
**number** | **string** |  | [optional] 
**personal** | **bool** | Is a personal build. | [optional] 
**pinned** | **bool** | Is pinned. | [optional] 
**project** | **string** | Project (direct parent) locator. | [optional] 
**property** | **string** |  | [optional] 
**queued** | **bool** | Is queued. | [optional] 
**queued_date** | **string** | Requires either date or build dimension. | [optional] 
**running** | **bool** | Is running. | [optional] 
**snapshot_dependency** | **string** |  | [optional] 
**start** | **int** | For paginated calls, from which entity to start rendering the page. | [optional] 
**start_date** | **string** | Requires either date or build dimension. | [optional] 
**state** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**tag** | **string** | Tag locator. | [optional] 
**task_id** | **int** | ID of a build or build promotion. | [optional] 
**user** | **string** | User locator. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


