<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for pdoTools.

2.12.10 pl
==============
- [#308] [pdoPage] Fixed the type of snippet property "field"

2.12.9 pl
==============
- [Fenom] Update to version 2.12.0

2.12.8 pl
==============
- [pdoPage] Fix reflected XSS in generated meta links

2.12.7 pl
==============
- Make pdoTools canonical url work with Babel #304

2.12.6 pl
==============
- [pdoPage] Reverted back #287

2.12.5 pl
==============
- [Fenom] Added caching dinamic properties to prevent speed degradation.

2.12.4 pl
==============
- [#290] Improved running snippet via @FILE binding.
- [#296] Fix adding quotes to numeric values.
- [#297] Make cross context weblink url possible.
- [#274] [Fenom] User, resource and context properties are now dinamic.
- [#287] [pdoPage] Remove prev & next meta tags
- [#294] [#298] Improved pdopage.js and updated minified js files

2.12.3 pl
==============
- Fixed E_NOTICE introduced in #285.

2.12.2 pl
==============
- Updated chunks for Bootstrap 4.

2.12.1 pl
==============
- [pdoMenu] Reverted back #283 and fixed docs for &tplCategoryFolder.
- [#284] [Fenom] Fixed properties of $_modx->context variable.
- [#275] [Fenom] Added "reset" and "end" modifiers.

2.12.0 pl
==============
- [Fenom] More security fixes from Sergey Shlokov.
- [#278] [pdoPage] Fixed caching.
- [pdoPage] Show internal log on &showLog=`1`.
- [#283] [pdoMenu] Fixed use of &tplCategoryFolder according to docs.
- [#281] [pdoTools] Fixed load of models from case sensitive paths.
- [#277] [pdoCrumbs] Ability to specify &customParents.
- [#265] [pdoFetch] Fixed return of "Array" on SQL errors.

2.11.3 pl
==============
- Added French lexicon entries.

2.11.2 pl
==============
- Fix detection of element names starting with a number.

2.11.1 pl
==============
- Faster processing of static files.

2.11.0 pl
==============
- [pdoFetch] Added "setTotal" option to enable calculating all rows ("SQL_CALC_FOUND_ROWS"), which will also result in the "totalVar" placeholder is being set.
- [pdoFetch] Option "setTotal" disabled by default.
- [pdoPage] Forces "setTotal" to provide pagination.

2.10.6 pl
==============
- Improved German lexicons.

2.10.5 pl
==============
- [pdoTools] Ability to return array from "prepareSnippet" for more performance.
- [FenomX] Fixed method "getStore".

2.10.4 pl
==============
- [Fenom] Do not output raw tags if there was a compile errors.
- [#266] [pdoMenu] Fixed the setting of "here" and "self" classes.
- [#261] [Fenom] Fixed unexpected behavior of the fenom tag "ignore".

2.10.3 pl
==============
- Improved compatibility with PHP 7.2
- [pdoFetch] Ability to use arrays in "&sortby".

2.10.2 pl
==============
- [Fenom] Improved processing of caching snippets inside uncached.

2.10.1 pl
==============
- [#256] [Fenom] Fixed bug with caching of scripts and styles.
- [pdoPage] "&setMeta" now works when "&cache=`1`".
- [Fenom] Improved regular expression to detect Fenom syntax.

2.10.0 pl
==============
- [#259] [pdoFetch] Fixed error when passed pure SQL into "having" parameter.
- [#258] [pdoPage] Canonical urls always must be "full".
- [#245] [pdoMenu] Ability to use conditional tpls instead of regular "tpl".
- [#121] [pdoMenu] Improved work of specified chunks with weblinks.

2.9.3 pl
==============
- [#255] [Fenom] New system setting "pdotools_fenom_save_on_errors" to save code on compilation errors in the cache directory for later debugging.

2.9.2 pl
==============
- [pdoParser] Proper traversal trough arrays fields of resources in fast tags.

2.9.1 pl
==============
- [Fenom] Updated to version 2.11.8.

2.9.0 pl
==============
- [pdoPage] Improved "&pageLinkScheme" logic.
- [#249] A little improvement for resource modifier.
- [#251] [pdoFetch] More compatibility with PHP 7.1.
- [#253] [pdoPage] Fixing a missing pagination in Ajax mode.
- [#254] [Fenom] Options of json modifiers must check version of PHP to proper work.

2.8.6 pl
==============
- [pdoArchive] Ability to specify fields with regular dates in the "&dateField" parameter.
- [Fenom] Added all options to json modifiers.

2.8.5 pl
==============
- [#248] [pdoPage] Fixed E_WARNING with array values in GET parameters.

2.8.4 pl
==============
- Ability to use file elements in core path outside base path.
- Fixed bug with the caching of elements.

2.8.3 pl
==============
- [Fenom] Fixed rare bug with the caching of scripts and styles that was registered via Fenom.
- [pdoPage] Fixed the "?page=1" in the url when ajaxMode is enabled.
- [pdoPage] Snippet will register "canonical" link if "&setMeta" is enabled.
- [pdoPage] Fix processing of request with rawurldecode on some servers.
- [pdoTools] Added passing of "scriptProperties" values into a "&prepareSnippet".

2.8.2 pl
==============
- [pdoMenu] Fixed the checking of permissions for containers.
- [pdoPage] Added the ability to run files as &element.
- [pdoTools] The method runSnippet will return boolean false if snippet was not found.
- [Fenom] Fixed the possible bugs of caching of scripts and styles.

2.8.1 pl
==============
- [#244] Fixed possible duplicate of a container in the jquery.pdopage.js.
- Added fallback class for the enable modParser.

2.8.0 pl
==============
- Ability to use an arrays in the parameters of the snippets.
- Replaced modX::toJSON and modX::fromJSON to native php functions.

2.7.5 pl
==============
- Fenom is now managed via composer.
- [Fenom] Modifier "resource" no longer checks fields of resources in their schema.
- [Fenom] Modifier "strrev" now can work with arrays.
- [Fenom] Improved modifier "ismember".

2.7.4 pl
==============
- [#242] Added jquery.pdopage.js plugin and minified versions.
- [#241] [Fenom] Improved the retrieving of TVs for a current resource.
- [pdoFetch] Restored the checking of possible SQL injections in the &sortby with xPDO 2.5.1.

2.7.3 pl
==============
- Improved compatibility with MODX 2.5.2.

2.7.2 pl
==============
- [pdoFetch] Some security improvements.

2.7.1 pl
==============
- Some security improvements in the connector.php.
- Fixed bug with registering scripts in styles via Fenom introduced in version 2.7.0.

2.7.0 pl
==============
- [Fenom] Updated to the version 2.11.4.
- [Fenom] Fixed resource cache for scripts and styles registered by Fenom.
- [Fenom] Added rand() and number_format() to an allowed PHP functions.
- [Fenom] New output filter "number" (or "number_format").

2.6.5 pl
==============
- Fixed undeclared variable (PHP 7.1)

2.6.4 pl
==============
- Added escaping of a MODX tags that being processed in the &prepareSnippet.
- [#239] Improved work of the &decodeJSON option.

2.6.3 pl
==============
- Fixed possible E_NOTICE on line 305 pdofetch.class.php.
- Fixed possible E_NOTICE when "snippet" and "chunk" Fenom modifiers was called.

2.6.2 pl
==============
- Fixed possible E_NOTICE on line 1317 pdotools.class.php.

2.6.1 pl
==============
- Improved compatibility with PHP 5.3.

2.6.0 pl
==============
- [Fenom] The ability to extend Fenom via system event "pdoToolsOnFenomInit".

2.5.6 pl
==============
- [pdoFetch] Ability to join TVs not only to the query main class.

2.5.5 pl
==============
- Fixed parse of INLINE chunks with "@" symbols.

2.5.4 pl
==============
- [#224] Added microMODX::cleanAlias().
- [#226] [Fenom] Added "declension" modifier.

2.5.3 pl
==============
- [#221] Fixed typo in month name.
- [Fenom] Fixed path to compile dir.

2.5.2 pl
==============
- [#220] Cache code of snippet with respect to property set.

2.5.1 pl
==============
- Fixed cache of snippets in pdoTools::runSnippet().

2.5.0 pl
==============
- Improved support of debugParser.
- [#209] Improved loading of the models.
- [Fenom] New modifiers: "snippet" and "chunk".
- [Fenom] New elements provider: "file".
- New method pdoTools::runSnippet().

2.4.0 pl
==============
- Added snippet pdoArchive.
- [pdoResources] Faster processing of additional snippet parameters to placeholders.
- [#123] [pdoMenu] Fixed bug with &displayStart and unpublished root nodes.
- [#207] [pdoMenu] Fixed &webLinkClass option.
- [#193] [pdoNeighbors] Added parameter &wrapIfEmpty.
- [#203] [Fenom] Added more PCRE modifiers.

2.3.5 pl
==============
- [pdoFetch] Added escaping of columns names in query.

2.3.4 pl
==============
- [#200] [pdoFetch] Fixed &sortbyTV with dot in name.

2.3.3 pl
==============
- Added system plugin for "autoload" of main classes with respect to their paths in system settings.

2.3.2 pl
==============
- [#196] [pdoPage] Added workaround to support ClientConfig tags in ajax mode.
- [Fenom] Added general MODX output filters as Fenom modifiers.
- [Fenom] Implemented autoload of modifiers from snippets.
- [Fenom] Removed system setting "pdotools_fenom_modifiers".

2.3.1 pl
==============
- [pdoSitemap] Lightning fast work chunks processing with &scheme=`uri`.
- [Fenom] Improved check of syntax before processing.

2.3.0 pl
==============
- Removed shortcuts from system core.
- PSR-2.
- [Fenom] Added default modifiers: "url" and "lexicon".
- [pdoCrumbs] Changed default chunks to ul -> li.
- [#190] [pdoSitemap] Changed date format to ISO 8601.

2.2.8 pl
==============
- [Fenom] Use modResource::getContent() method to get content of current resource in {$_modx->resource}.

2.2.7 pl
==============
- [pdoPage] Ability to get access to a javascript configs from 3rd party scripts.

2.2.6 pl
==============
- [#184] [Fenom] Updated to version 2.8.2.

2.2.5 pl
==============
- [#182] [pdoTitle] Added passing a parameters into nested pdoCrumbs.
- [pdoSitemap] Added processing of MODX tags if needed.
- Added method pdoTools::makeUrl().
- [#181] New url schema type - "uri".

2.2.4 pl
==============
- [Fenom] Fixed speed issues when MODX snippets are run as Fenom modifiers.
- [pdoUsers] Fixed overwrite modUser.id by modUserProfile.id.

2.2.3 pl
==============
- [pdoPage] Fixed processing of uncached conditions in chunks when ajax mode is enabled.

2.2.2 pl
==============
- [pdoPage] Added new parameter &pageLinkScheme.

2.2.1 pl
==============
- [#155] [pdoPage] Added new parameter &ajaxHistory.
- [pdoPage] Added connector for requests in ajax mode.

2.2.0 pl
==============
- [#175] [pdoFetch] Ability to specify sequence of table joins.
- [#174] [Fenom] Ability to add Fenom modifiers into pdoParser.

2.1.21 pl
==============
- [#175] [pdoFetch] Ability to specify sequence of table joins.
- [#176] [pdoUsers] Fixed &toPlaceholders with &returnIds.

2.1.20 pl
==============
- [pdoSitemap] Fixed default &cacheKey.

2.1.19 pl
==============
- [Fenom] Disabled $options in cacheManager::set() due to security reasons.

2.1.18 pl
==============
- [Fenom] Fixed ability to access to the modX object from {$_modx} variable.
- [Fenom] Improved method {$_modx->runProcessor()}.

2.1.17 pl
==============
- [Fenom] Added {$_modx->getResource($id, $options)}.
- [Fenom] Added {$_modx->getResources($where, $options)}.
- [Fenom] Improved support of debugParser.

2.1.16 pl
==============
- [Fenom] Added {$_modx->isMember($groups, $matchAll)}.
- [Fenom] Added {$_modx->getPlaceholders()}.

2.1.15 pl
==============
- [pdoPage] Added parameter &strictMode.

2.1.14 pl
==============
- [pdoSitemap] Added options for cache snippets results.
- [pdoSitemap] Cache enabled by default.

2.1.13 pl
==============
- [#163] Fixed ignoring of &idx in pdoResources and pdoUsers.

2.1.12 pl
==============
- [pdoPage] [#161] Fixed support of arrays in hash when &ajaxMode is enabled.

2.1.11 pl
==============
- [#150] [Fenom] Fixed processing of TVs values in a {$_modx->resource}.
- [#147] [pdoSitemap] Fixed possible duplicates in sitemap.
- [pdoPage] Support of arrays in hash when &ajaxMode is enabled.

2.1.10 pl
==============
- [#157] [Fenom] Fixed pre-processing of Fenom tags in extending templates and chunks.
- [#145] [pdoPage] Rolled back #81 due to issues with complicate forms.

2.1.9 pl
==============
- [#144] [pdoParser] Leave unprocessed FastField tags so other components could parse them.
- [pdoFetch] Updated syntax for "SET SQL_BIG_SELECTS = 1".

2.1.8 pl
==============
- [Fenom] Ability to use id of chunks and templates in {include} and {extends}.
- [Fenom] Added support of debugParser.
- [Fenom] Added {$_modx->getChildIds()} and {$_modx->getParentIds()}.

2.1.7 pl
==============
- Fixed work with integer values from system setting "link_tag_scheme".

2.1.6 pl
==============
- [Fenom] Updated to version 2.8.0.
- [Fenom] Improved check of syntax to process content of chunks.
- [pdoParser] Fixed E_WARNING on line 50 introduced in previous version.

2.1.5 pl
==============
- [Fenom] Fixed register of scripts and styles by cached snippets.

2.1.4 pl
==============
- [Fenom] Fixed TVs in {$_modx->resource}
- [Fenom] Added new method {$_modx->getInfo()}

2.1.3 pl
==============
- Improved work of system setting "pdotools_fenom_php".

2.1.2 pl
==============
- [Fenom] Replaced {$_modx->placeholders} to functions.

2.1.1 pl
==============
- pdoParser enabled by default.
- [Fenom] Fixed return content in {$_modx->getChunk}.
- [Fenom] Added cache for snippets called through {$_modx->runSnippet}.
- [pdoTools] Added processing of property sets for chunks.
- [pdoResources] Set additionalPlaceholders in &tplWrapper

2.1.0 pl
==============
- [Fenom] Updated Fenom to version 2.7.1.
- [Fenom] Added safe system variable {$_modx}.
- [Fenom] Added MODX template provider for chunks and templates.

2.0.5 pl
==============
- [#132] Fixed possible E_WARNING on empty chunks.
- [#122] Ability to use 3rd party pdoPage and pdoMenu classes.
- [#118] [pdoPage] Fixed parameter &offset.
- [pdoPage] Fixed default CSS classes in "empty" chunks.

2.0.4 pl
==============
- Fixed processing of "pdotools_fenom_cache" system setting.

2.0.3 pl
==============
- [#125] [pdoTitle] Fixed parameter &id.

2.0.2 pl
==============
- Improved processing of @FILE binding.

2.0.1 pl
==============
- Fixed possible E_WARNING on line 319 and 349 of pdoTools class.
- Disabled system option "pdotools_fenom_modx" by default due to security issues.

2.0.0 pl
==============
- New system settings to control the Fenom.
- Ability to enable caching of Fenom compiled chunks.
- Improved handling of parameter "cache_key".
- [pdoMenu] Improved work when &cache is enabled.

2.0.0 rc2
==============
- Compiled Fenom templates cached to RAM instead of HDD.
- Removed plugin pdoTools.

2.0.0 rc1
==============
- Added Fenom template engine.
- Fenom enabled by default.
- pdoParser uses Fenom to process pages.

1.11.2 pl
==============
- [#116] [pdoTitle] Disabled &register_js by default.

1.11.1 pl
==============
- [pdoSitemap] Fixed default url scheme after last update.

1.11.0 pl1
==============
- [pdoTitle] Added new snippet.
- [pdoPage] Added support of snippet pdoTitle when &ajaxMode is enabled.
- [pdoPage] Prevent overwriting of scripts and styles of nested &element by default parameters.
- [pdoPage] Added triggering javascript event "pdopage_load".

1.10.2 pl1
==============
- [#112] Parameter &scheme was set to system default in all snippets.
- [#111] [pdoPage] Added ability to set "prev" & "next" meta tags.
- [#107] [pdoNeighbors] Added ability to specify &parents for work.
- [#106] [pdoMenu] Fixed "hereClass" and "selfClass" enabled &useWeblinkUrl parameter.
- [#104] [pdoMenu] Snippet now using "pagetitle" for link titles if "titleOfLinks" is empty.

1.10.1 pl
==============
- [#108] [pdoFetch] Fixed E_ERROR when using &sortbyTV.
- [pdoFetch] Added new parameter &sortbyTVType.
- [pdoFetch] If &sortdirTV is not set it will be equal to &sortdir.

1.10.0 pl
==============
- [pdoMenu] Returned and fixed parameter &showDeleted.
- [pdoPage] Improved default javascript.
- [pdoPage] Fixed overwriting &frontend_js and &frontend_css parameters when &ajax is disabled.
- [pdoFetch] Ability to specify functions in select fields.
- [pdoTools] Ability to use compound quick placeholders.

1.10.0 beta4
==============
- [pdoPage] Ajax pagination out from the box.
- [pdoFetch] Improved log of getCollection.
- [pdoTools] Added tplOperator "contains".

1.9.7 pl
==============
- [#99] [pdoFetch] Fixed returning of primary key in "ids" mode.
- [#97] [pdoTools] Fixed default tplPath for @FILE chunks.
- [#85] [pdoFetch] Added function getChildIds().
- [pdoFetch] Disabled "total" placeholder for &return=`ids`.

1.9.6 pl2
==============
- [pdoFetch] Fixed exclusion of field "id" in custom classes.
- [pdoMenu] Improved parameter &countChildren.
- [#100] [pdoMenu] Removed parameter &showDeleted because it not working.

1.9.6 rc
==============
- Added execution of SQL_BIG_SELECTS = 1 before query.
- [pdoPage] Added parameter &ajax for supporting of ajax requests.

1.9.5 pl1
==============
- Rolled back #72 due to issues in pdoMenu.

1.9.5 pl
==============
- Added ability to return JSON or serialized string from pdoFetch::run().
- [#83] [pdoMenu] Added level placeholder to outer templates.
- [#82] [pdoFetch] Added support for complex &where parameter.
- [#81] [pdoPage] Improved handling of arrays in url.
- [#77] Fixed making of url for modWebLink to another context.
- [#72] [pdoTools] Fixed order for children of excluded parents in buildTree.
- [#60] [pdoMenu] Fixed parameter &tplCategoryFolder.
- [#57] [pdoMenu] Improved placeholder [[+children]].
- [#57] [pdoMenu] Added parameter &countChildren.

1.9.4 pl1
==============
- [#78] [pdoNeighbors] Added parameter &loop=`1` for looping links.
- [pdoSitemap] Fixed possible E_FATAL php-apc.

1.9.3 pl1
==============
- [pdoTools] Ability to specify value for empty quick placeholders.
- [pdoTools] Ability to use INLINE snippets and filters.
- [pdoFetch] Improved loading of 3rd party models.
- [pdoPage] Fixed E_WARNING when &limit=`0`.

1.9.2 pl2
==============
- [#56] [pdoParser] Fixed wrong links processing.
- [#53] Improved loading of classes.
- [pdoField] Rolled back to original logic of "top" and "topLevel" parameters due to issues.
- [pdoField] Added parameter "ultimate" to emulate logic of UltimateParent.

1.9.1 pl6
==============
- [pdoFetch] Adding alias of main class of query to "sortby" if no alias exists.
- [pdoFetch] Improved selecting of all fields of class with specified alias.
- [pdoField] Parameter "topLevel" works exactly as in UltimateParent.
- [pdoField] Parameter "top" without "topLevel" returns parent on "top" level.

1.9.1 pl
==============
- [#47] [pdoMenu] Fixed processing &tplOuter when output is empty.
- [#46] [pdoParser] Fixed processing of TVs with dots in name.
- [#44] [pdoMenu] Improved handling of Wayfinder parameters "includeDocs" and "excludeDocs".
- [#37] [pdoField] get the default, only if the field was empty.
- [#34] Fixed processing of "modSymLink" documents.
- [#32] Improved cache methods.
- [#26] Replaced FIND_IN_SET() to FIELD().
- [pdoFetch] Ability to work with objects, that has multiple primary keys.
- [pdoPage] New parameter &cacheAnonymous.
- [pdoMenu] New parameter &cacheAnonymous.
- Added aliases for sort query in order of specified &resources: "ids" or "resources".
- Removed unnecessary query in pdoFetch::getCollection().
- Improved pdoFetch::getCollection().
- Renamed pdoFetch::getObject() to getArray(). Now it uses getCollection for retrieve results.
- pdoTools::setCache() now returns cacheKey.
- pdoFetch::getObject() is now alias of pdoFetch::getArray().

1.9.0 pl2
==============
- [pdoMenu] Chunks of parents and categories are now depends on the descendants and ignores parameter isfolder.
- [pdoNeighbors] Speed improvements.
- [#27] Ability to specify custom pdoFetch and pdoTools classes through FQN system settings.
- [pdoParser] Handles TVs in resource tags.
- [pdoParser] Handles output filters.
- [pdoFetch] Improved method "addTVFilters", that used by "tvFilters" parameter in pdoResources.
- [pdoSitemap] Pass the whole row so we can use more columns.

1.9.0 rc
==============
- Improved method pdoTools::getChunk().
- Improved method pdoTools::parseChunk().
- Improved method pdoTools::fastProcess().
- Improved method pdoTools::makePlaceholders().
- Accelerated snippet pdoNeighbors.
- Fixed bug in pdoUsers when usersgroups was specified by names.
- getObject and getCollection() runs in separate instance.
- Added pdoParser with FastField tags.
- [pdoPage] Changed default value of parameter "totalVar" due to issues.
- [#24] Fixed prepareTVs and empty tvPrefix.
- [#23] [pdoResources] Ability to return ids to placeholder.
- Fixed warning when getObject returns false.
- Fixed placeholders prefix in recursive makePlaceholders.

1.8.9 pl4
==============
- Added german lexicon.
- [#20] Ability to specify not JSON string in &where=``.
- [pdoPage] Added parameter "pageCountVar" for specifying name of variable with number of pages.
- [pdoPage] Support Bootstrap3.
- [pdoField] Ability to specify class for fetching field.
- Improved joining of tables in pdoFetch.
- Added preparing and processing TVs in getObject and getCollection methods.
- Improved load of 3rd party models.

1.8.8 pl2
==============
- Rewrited cache of snippets "pdoMenu" and "pdoPage".
- New methods pdoTools::getCache() and pdoTools::setCache().
- [pdoMenu] Fixed parameter "tplParentRowActive".
- [#18] Fixed "idx" in pdoTools::defineChunk().

1.8.7 pl
==============
- Added boolean parameter "decodeJSON" to specify whether or not decode JSON in results rows.
- Removed default "sortby" and "sortdir" from class pdoFetch for better work of getCollection() method.

1.8.6 pl2
==============
- Fixed possibly E_NOTICE when site has no extension packages installed.
- [#17] [pdoMenu] Added placeholder [[+wf.menutitle]].
- [#16] [pdoMenu] Disabled status verification of specified parents.
- [#13] [pdoMenu] Improved work with root of multiple contexts.
- [pdoMenu] Fixed bug when specified parent has only the one child.
- [pdoResources] Added parameter "&useWeblink" and placeholder "[[+link]]". It is disabled by default.

1.8.5 pl
==============
- [#15] [pdoPage] Improved generation of links to pages.
- [pdoMenu] Improved processing of classes "modSymlink" and "modWeblink".
- [pdoBreadcrumbs] Improved processing of classes "modSymlink" and "modWeblink". Added parameter "&useWeblink".
- [pdoNeighbors] Added parameter "&useWeblink" and placeholder "[[+link]]".
- [pdoSitemap] Added parameter "&useWeblink" and proper processing of classes "modSymlink" and "modWeblink".

1.8.4 pl
==============
- [pdoCrumbs] Added ability to specify the crumbs root (defaulting to site_start)
- [pdoCrumbs] Added ability to specify class_key (ie. to generate crumbs only for derivative classes)
- More accuracy when try to decode json in fetch results.

1.8.3 pl3
==============
- Improved preparation of template variables.
- Improved transfer of additional parameters from snippet to results.
- [pdoMenu] Added lexicon entries for parameters.
- [pdoMenu] Allow to specify "limit" and "offset".
- [#12] Added parameter "toPlaceholder".
- Increased accuracy of timings log.

1.8.1 pl2
==============
- Accelerated method pdoTools::getChunk().
- Added snippet pdoMenu.
- Added support for tags [^qt^] and [^q^].

1.8.0 pl
==============
- [#10] [pdoPage] Added placeholder "page".
- [#9] [pdoPage] Added placeholder "pageCount".
- [#8] Improved support of big numbers when sorting by TVs.
- Fixed work of pdoPage when it called multiple times on page.
- Fixed mistype in pdoFetch::getCollection().

1.8.0 rc5
==============
- Added processing of JSON fields. For example, you can use [[+extended.keyname]] in chunks of pdoUsers.
- pdoTools was removed from system extension packages, but you can still use "$modx->getService(\'pdoFetch\');".
- Fixed getting chunk without any parameters.
- Added snippet pdoPage.

1.8.0 beta1
==============
- Improved handling of "default_text" parameter in TVs.
- Fixed and improved method pdoTools::buildTree().
- The logic of build the conditions of the query moved into new method pdoFetch::additionalConditions().
- Improved method pdoFetch::addSelects().
- Improved method pdoFetch::addSort().
- Improved some snippets in accordance to new abilities of pdoFetch: pdoResources, pdoNeighbors and pdoSitemap.

1.7.4 pl
==============
- [#7] [pdoSitemap] Fixed hidden parameters "&sortBy" and "&sortDir" that used for compatibility with GoogleSiteMap.

1.7.3 pl1
==============
- [pdoCrumbs] Fixed possible E_NOTICE on line 157.
- [pdoCrumbs] Fixed generation of link to site start in relative mode.
- [#6] pdoCrumbs and pdoNeighbors are now uses "menutitle" by default. If it is empty, will be used "pagetitle".

1.7.2 pl1
==============
- [pdoField] Added new parameters: "default=``" and "&field=``".
- [pdoField] Improved logic of "&top=``" and "&topLevel=``".
- Added 2 new methods: pdoFetch::getObject() and pdoFetch::getCollection().
- Ability to send arrays into common config parameters. JSON is still supported.
- Improved select of default values in TVs.

1.7.1 pl
==============
- [pdoCrumbs] Fixed work with "modSymLink" and "modWebLink" resources.

1.7.0 pl1
==============
- New snippet pdoCrumbs.
- New snippet pdoField.
- New snippet pdoSitemap.
- New snippet pdoNeighbors.
- Ability to specify snippet for preparation of fetched rows by parameter "&prepareSnippet=``".
- Added method pdoTools::checkPermissions() for checking user privileges to view the results.
- Added @TEMPLATE binding. You can use name or id of any template. If empty - will use template of each row.
- [pdoResources] Improved parameter "&context".
- [pdoResources] Script properties are now passed to chunks. You can send any placeholders to it.

1.6.0 pl1
==============
- Fixed compatibility issues in PHP < 5.3.

1.6.0 pl
==============
- Added parameter "&loadModels" for comma-separated list of 3rd party components that needed for query.
- Added parameters "&prepareTVs" and "&processTVs".
- Added parameters "&tvFilters", "&tvFiltersAndDelimiter" and "&tvFiltersAndDelimiter".
- Added support of parameters "&sortbyTV" and "&sortdirTV" for compatibility with getResources.
- Added ability to use @INLINE and @FILE bindings in all template parameters.
- Removed method pdoTools::getPlaceholders.

1.5.0 pl2
==============
- Fixed sort of decimals in TVs.

1.5.0 pl1
==============
- Added processing of simple [[~id]] placeholders in fastMode.
- Added support of default value for TVs.
- Improved sort by TVs of types "number" and "date".

1.5.0 rc
==============
- [pdoUsers] Added new snippet "pdoUsers".
- [pdoResources] Fixed "toSeparatePlaceholders".
- [pdoResources] Parameter "parents" now supports dash prefix for excluding resources from query by parent.
- [pdoResources] Fixed issue when snippet runs multiple times at one page.

1.4.1 pl1
==============
- Improved "context" processing.
- Fixed "idx" when multiple snippets called at one page.
- Fixed default sortby when joined tables exists.

1.4.1 beta3
==============
- Added parameters "tplCondition", "tplOperator" and "conditionalTpls".
- Added parameter "select" for specifying needed columns of selected tables. Can be a JSON string with array.
- Added parameter "toSeparatePlaceholders".
- Improved "pdoResources" snippet.

1.4.0 beta1
==============
- Ability to specify JSON string in "sortby", for example "&sortby=`{"pagetitle":"asc","createdon":"desc"}`"
- Added automatic replacement of tvs in "where" and "having" parameters.
- Added automatic replacement of tvs in "sortby" parameter.
- Removed example snippet
- Added snippet "pdoResources", that could replace "getResources".
- Added method pdoTools::defineChunk() for chunk of given idx.
- Added "memory usage" in log.

1.3.0
==============
- Improved placeholders processing when fastMode is enabled.
- Added support of "having" conditions.

1.2.1
==============
- Fixed not working "includeTVs" when "leftJoin" is empty.

1.2.0
==============
- Native render of quick placeholders, such as "<!--pdotools_introtext <blockquote>[[+introtext]]</blockquote>-->".
- Added joining of TVs in pdoFetch. Use parameter "includeTVs" with comma-separated list of template variables.
- Added method pdoFetch::setConfig() for proper setting options when you run multiple pdoTools snippets at the one page.
- Method pdoTools::makeArray is now recursive, for processing a multidimensional arrays of values.

1.1.0
==============
- Improved getChunk function.

1.0.1
==============
- Fixed setting total in "chunks" mode.
- Improved displaying "where" condition in log.

1.0.0
==============
- Initial release.',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
pdoTools
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------

Small library for creating fast snippets for MODX Revolution that works through PDO.

Required by Tickets and miniShop2.

Main features
- Builds queries with xPDO.
- Retrieve results with PDO.
- Improved pdoTools::getChunk() function, that processing placeholders faster, than original modX::getChunk().

pdoTools snippets will work so faster, than more fields you will retrieve from database at one query.

--------------------
Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/bezumkin/pdoTools/issues
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'fc1cfe848c78e5cae2c89ccc844f5a1b',
      'native_key' => 'pdotools',
      'filename' => 'modNamespace/d57bad743788947519f0412f5a8e1921.vehicle',
      'namespace' => 'pdotools',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '031079c87393cfe3824e1f5642d0ae02',
      'native_key' => 'pdoTools.class',
      'filename' => 'modSystemSetting/87c8711ea34545db94b6311b231b7c92.vehicle',
      'namespace' => 'pdotools',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'be3f16fe4c63a023e479bcb6463fda65',
      'native_key' => 'pdoFetch.class',
      'filename' => 'modSystemSetting/7a935e4d7e46d2079b8d16b7594b8846.vehicle',
      'namespace' => 'pdotools',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dc2b783cd9c3aa828d3d7cdeabe27598',
      'native_key' => 'pdotools_class_path',
      'filename' => 'modSystemSetting/727e2596a28a8317de980f9fac190980.vehicle',
      'namespace' => 'pdotools',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b93e8df7eb281fe857966ba33ca49424',
      'native_key' => 'pdofetch_class_path',
      'filename' => 'modSystemSetting/a580e0160fed7f2ed6f4952b0ce10a07.vehicle',
      'namespace' => 'pdotools',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7952aa16a8aafea8473b02ac081e371',
      'native_key' => 'pdotools_fenom_default',
      'filename' => 'modSystemSetting/55fdf8e9abdd2a00619dece00c02709e.vehicle',
      'namespace' => 'pdotools',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '688515e36560d647929b39b42dc621dc',
      'native_key' => 'pdotools_fenom_parser',
      'filename' => 'modSystemSetting/9a0637520b9c2dececd6adaa762801c4.vehicle',
      'namespace' => 'pdotools',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7467affd441114537dbf8f77e4cc57b',
      'native_key' => 'pdotools_fenom_php',
      'filename' => 'modSystemSetting/96fcdb8a294a3362c26c6afda9ff4841.vehicle',
      'namespace' => 'pdotools',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '09b9d0aa6d71b9e7f25ea6fc412f1312',
      'native_key' => 'pdotools_fenom_modx',
      'filename' => 'modSystemSetting/d256e05eaa4ca2ab320de808a01fb958.vehicle',
      'namespace' => 'pdotools',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8f0f71c987752d3a3c5da94c3877d553',
      'native_key' => 'pdotools_fenom_options',
      'filename' => 'modSystemSetting/50ae45604e2df6149cb26d2ce18d26f5.vehicle',
      'namespace' => 'pdotools',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ce3c56d040272f4b0879f10725032732',
      'native_key' => 'pdotools_fenom_cache',
      'filename' => 'modSystemSetting/d2f27fc08b36db1d7a70c6a38f766c38.vehicle',
      'namespace' => 'pdotools',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '54a9cc96d00deb10aaf3088f824ac5a1',
      'native_key' => 'pdotools_fenom_save_on_errors',
      'filename' => 'modSystemSetting/698580106a2328eaa8ef5beca6104249.vehicle',
      'namespace' => 'pdotools',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5165fc4f1c7e9385a13b7bb2a0ca19bd',
      'native_key' => 'pdotools_elements_path',
      'filename' => 'modSystemSetting/e3ab0cc5591d812d6a4f6e900b69be5d.vehicle',
      'namespace' => 'pdotools',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ef623c8b8dd205285e213c56bb023fdf',
      'native_key' => 'pdoToolsOnFenomInit',
      'filename' => 'modEvent/27a72129b503906059d4e080a5b43f0d.vehicle',
      'namespace' => 'pdotools',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'b3b0a5197dd551cd2bfc8c071ed5332b',
      'native_key' => 1,
      'filename' => 'modCategory/6573a478babcb74473cd59ecbde97c04.vehicle',
      'namespace' => 'pdotools',
    ),
  ),
);