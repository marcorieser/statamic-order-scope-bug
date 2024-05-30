# Statamic v5 Query Scope Issue
## Things to know
- This is a plain v5 Statamic site in pro mode
- There is a collection `tours` with `date` enabled
- The query logic is extracted to a trait to make sure the query scope and the custom tag use the exact same logic
- The `default.antlers.html` view lists the tours sorted by `date` (ascending) and `title` (descending) in three ways:
  - via the collection tag with `sort` parameter (works correctly ✅)
  - via a custom tag which queries the entries via `Collection` facade (works correctly ✅)
  - via the collection tag with the `query_scope` parameter (`date` part does not work ❌)

## Queries executed
### collection tag with sort
`select * from entries where collection in ('tours') and published = '1' and redirect is null order by date asc, title desc`

### custom tag with integrated sorting
`select * from entries where collection in ('tours') order by date asc, title desc`

### collection tag with `query_scope`
`select * from entries where collection in ('tours') and published = '1' and redirect is null order by date asc, title desc, date desc`

> [!CAUTION]
> Seems like the default `date` sorting gets applied to the end
