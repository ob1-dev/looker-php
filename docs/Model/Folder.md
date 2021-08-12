# # Folder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique Name |
**parent_id** | **string** | Id of Parent. If the parent id is null, this is a root-level entry | [optional]
**id** | **string** | Unique Id | [optional] [readonly]
**content_metadata_id** | **int** | Id of content metadata | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Time the space was created | [optional] [readonly]
**creator_id** | **int** | User Id of Creator | [optional] [readonly]
**child_count** | **int** | Children Count | [optional] [readonly]
**external_id** | **string** | Embedder&#39;s Id if this folder was autogenerated as an embedding shared folder via &#39;external_group_id&#39; in an SSO embed login | [optional] [readonly]
**is_embed** | **bool** | Folder is an embed folder | [optional] [readonly]
**is_embed_shared_root** | **bool** | Folder is the root embed shared folder | [optional] [readonly]
**is_embed_users_root** | **bool** | Folder is the root embed users folder | [optional] [readonly]
**is_personal** | **bool** | Folder is a user&#39;s personal folder | [optional] [readonly]
**is_personal_descendant** | **bool** | Folder is descendant of a user&#39;s personal folder | [optional] [readonly]
**is_shared_root** | **bool** | Folder is the root shared folder | [optional] [readonly]
**is_users_root** | **bool** | Folder is the root user folder | [optional] [readonly]
**can** | **array<string,bool>** | Operations the current user is able to perform on this object | [optional] [readonly]
**dashboards** | [**\OpenAPI\Client\Model\DashboardBase[]**](DashboardBase.md) | Dashboards | [optional] [readonly]
**looks** | [**\OpenAPI\Client\Model\LookWithDashboards[]**](LookWithDashboards.md) | Looks | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)