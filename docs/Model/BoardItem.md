# # BoardItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **array<string,bool>** | Operations the current user is able to perform on this object | [optional] [readonly]
**content_created_by** | **string** | Name of user who created the content this item is based on | [optional] [readonly]
**content_favorite_id** | **int** | Content favorite id associated with the item this content is based on | [optional] [readonly]
**content_metadata_id** | **int** | Content metadata id associated with the item this content is based on | [optional] [readonly]
**content_updated_at** | **string** | Last time the content that this item is based on was updated | [optional] [readonly]
**dashboard_id** | **int** | Dashboard to base this item on | [optional]
**description** | **string** | The actual description for display | [optional] [readonly]
**favorite_count** | **int** | Number of times content has been favorited, if present | [optional] [readonly]
**board_section_id** | **int** | Associated Board Section | [optional]
**id** | **int** | Unique Id | [optional] [readonly]
**location** | **string** | The container folder name of the content | [optional] [readonly]
**look_id** | **int** | Look to base this item on | [optional]
**lookml_dashboard_id** | **string** | LookML Dashboard to base this item on | [optional]
**order** | **int** | An arbitrary integer representing the sort order within the section | [optional]
**title** | **string** | The actual title for display | [optional] [readonly]
**url** | **string** | Relative url for the associated content | [optional] [readonly]
**view_count** | **int** | Number of times content has been viewed, if present | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
