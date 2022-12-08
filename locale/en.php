<?php

require_once __DIR__ . "/../lib/locale.php";

\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "MODULE_NAME"              => "Migrations for developers",
        "MODULE_DESCRIPTION"       => "Module for managing migration, creating, installing, rolling back migration",
        "PARTNER_NAME"             => "Andrey Ryabin",
        "PARTNER_URI"              => "https://packagist.org/packages/andreyryabin/sprint.migration",
        "ACCESS_DENIED"            => "Access denied",
        "MENU_SPRINT"              => "Migrations for developers",
        "MENU_SCHEMAS"             => "Data schemas",
        "TITLE"                    => "Migrations",
        "FORM_DESCR"               => "Description",
        "FORM_PREFIX"              => "Name prefix",
        "LIST_EMPTY"               => "empty",
        "UP"                       => "Install",
        "DOWN"                     => "Rollback",
        "UP_START"                 => "Install all",
        "UP_START_WITH_TAG"        => "Install all with tag",
        "DOWN_START"               => "Rollback all",
        "DELETE_UNKNOWN"           => "Delete all unknown",
        "VIEW_FILE"                => "View file",
        "TRANSFER_TO"              => "Transfer to",
        "TOGGLE_LIST"              => "All",
        "TOGGLE_NEW"               => "New",
        "TOGGLE_STATUS"            => "Summary",
        "TOGGLE_INSTALLED"         => "Installed",
        "TOGGLE_MODIFIED"          => "Modified",
        "TOGGLE_OLDER"             => "Not supported",
        "TOGGLE_TAG"               => "Tag",
        "LINK_MP"                  => "Marketplace",
        "LINK_DOC"                 => "Documentation",
        "LINK_ARTICLES"            => "Articles",
        "LINK_COMPOSER"            => "Composer",
        "LINK_TASKS"               => "Tasks",
        "LINK_TELEGRAM"            => "Telegram",
        "LINK_IMPROVE_TRANSLATION" => "Improve translation to english, create pull request with this file",
        "NEW"                      => "New migrations",
        "INSTALLED"                => "Installed",
        "UNKNOWN"                  => "Unknown",
        "VERSION_NEW"              => "New",
        "VERSION_INSTALLED"        => "Installed",
        "DESC_NEW"                 => "(file only)",
        "DESC_INSTALLED"           => "(file + database record)",
        "DESC_UNKNOWN"             => "(database record)",
        "META_NEW"                 => "New",
        "META_INSTALLED"           => "Installed",
        "META_UNKNOWN"             => "Unknown",
        "CREATED_SUCCESS"          => "Migration #VERSION# created",
        "SEARCH"                   => "Search",
        "ADMIN_INTERFACE_HIDDEN"   => "Admin interface hidden",
        "CONFIG_LIST"              => "Configuration list",
        "COMMAND_RUN"              => "Command execution",
        "COMMAND_HELP"             => "Help",
        "COMMAND_CONFIG"           => "View configuration",
        "CURRENT_USER"             => "Current user",
        "BITRIX_VERSION"           => "Bitrix version",
        "MODULE_VERSION"           => "Module version",
        "CFG_TITLE"                => "Migrations",
        "SCH_TITLE"                => "Data schemas",
        "CONFIG"                   => "Configuration",
        "BUILDER_ERROR"            => "Error",
        "BUILDER_NEXT"             => "Next",
        "BUILDER_RESET"            => "Reset",
        "SELECT_ALL"               => "Select all",
        "SELECT_ONE"               => "Select one",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "CONFIG_archive"                     => "Archive",
        "CONFIG_migration_dir"               => "Directory for migration",
        "CONFIG_migration_dir_absolute"      => "Is absolute path migration_dir",
        "CONFIG_exchange_dir"                => "Directory for exchange files",
        "CONFIG_exchange_dir_absolute"       => "Is absolute path exchange_dir",
        "CONFIG_migration_extend_class"      => "Class to inherit by migrations",
        "CONFIG_migration_table"             => "Table in the database with migrations",
        "CONFIG_version_prefix"              => "Name prefix for migrations",
        "CONFIG_version_builders"            => "Builders",
        "CONFIG_version_filter"              => "Migrations filter",
        "CONFIG_show_admin_interface"        => "Show admin interface",
        "CONFIG_console_user"                => "User who run migrations from console",
        "CONFIG_console_auth_events_disable" => "Disable auth events in console",
        "CONFIG_config_file"                 => "Config file",
        "CONFIG_title"                       => "Config name",
        "CONFIG_version_schemas"             => "Data schemas",
        "CONFIG_yes"                         => "yes",
        "CONFIG_no"                          => "no",
        "CONFIG_version_name_template"       => "Version name template",
        "CONFIG_tracker_task_url"            => "Task url template",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "BUILDER_Transfer1"                  => "Transfer migrations",
        "BUILDER_TransferTo"                 => "Transfer в другую конфигурацию",
        "BUILDER_TransferAll"                => "All",
        "BUILDER_TransferNew"                => "New",
        "BUILDER_TransferInstalled"          => "Installed",
        "BUILDER_TransferUnknown"            => "Unknown",
        "BUILDER_TransferSelect"             => "Select migrations",
        "BUILDER_EventExport1"               => "Create migration for event types",
        "BUILDER_EventExport_event_types"    => "Select event types",
        "BUILDER_AgentExport1"               => "Create migration for agents",
        "BUILDER_AgentExport_agent_id"       => "Select agents",
        "BUILDER_Version1"                   => "Create empty migration",
        "BUILDER_UserGroupExport1"           => "Create migration for user groups",
        "BUILDER_UserGroupExport_user_group" => "Select user groups",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "BUILDER_IblockExport1"                        => "Create migration for information block",
        "BUILDER_IblockExport_IblockId"                => "Select information block",
        "BUILDER_IblockExport_Properties"              => "Select properties",
        "BUILDER_IblockExport_What"                    => "Select export items",
        "BUILDER_IblockExport_WhatIblock"              => "Information block",
        "BUILDER_IblockExport_WhatIblockType"          => "Information block type",
        "BUILDER_IblockExport_WhatIblockFields"        => "Information block fields",
        "BUILDER_IblockExport_WhatIblockProperties"    => "Information block properties",
        "BUILDER_IblockExport_WhatIblockUserOptions"   => "User options for form and list",
        "BUILDER_IblockExport_WhatIblockPermissions"   => "Information block permissions",
        "BUILDER_IblockElementsExport1"                => "Export information block elements",
        "BUILDER_IblockElementsExport2"                => "Export elements with fields and properties\nExport images, files and lists",
        "BUILDER_IblockElementsExport_IblockId"        => "Select information block",
        "BUILDER_IblockElementsExport_Properties"      => "Select properties",
        "BUILDER_IblockElementsExport_Fields"          => "Select fields",
        "BUILDER_IblockElementsExport_Filter"          => "Select elements",
        "BUILDER_IblockElementsExport_SelectSomeId"    => "Enter elements ID",
        "BUILDER_IblockElementsExport_FilterListId"    => "Enter elements ID by comma",
        "BUILDER_IblockElementsExport_SelectSomeXmlId" => "Enter elements XML_ID",
        "BUILDER_IblockElementsExport_FilterListXmlId" => "Enter elements XML_ID by comma",
        "BUILDER_IblockElementsExport_UpdateMode"      => "Export settings",
        "BUILDER_IblockElementsExport_SelectAll"       => "Select all",
        "BUILDER_IblockElementsExport_SelectNone"      => "Select none",
        "BUILDER_IblockElementsExport_SelectSome"      => "Select some",
        "BUILDER_IblockElementsExport_NotUpdate"       => "Only add elements",
        "BUILDER_IblockElementsExport_UpdateByCode"    => "Update existing elements by CODE",
        "BUILDER_IblockElementsExport_UpdateByXmlId"   => "Update existing elements by XML_ID",
        "BUILDER_IblockCategoryExport1"                => "Export information block categories",
        "BUILDER_IblockCategoryExport2"                => "Export information block categories without images",
        "BUILDER_IblockCategoryExport_IblockId"        => "Select information block",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "BUILDER_HlblockElementsExport1"          => "Export highload block elements",
        "BUILDER_HlblockElementsExport2"          => "Export highload block elements\nExport images, files and lists",
        "BUILDER_HlblockElementsExport_HlblockId" => "Select highload block",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "BUILDER_UserOptionsExport_Title"         => "Create migration for user options",
        "BUILDER_UserOptionsExport_What"          => "Select export items",
        "BUILDER_UserOptionsExport_WhatUserForm"  => "User form",
        "BUILDER_UserOptionsExport_WhatUserList"  => "User list",
        "BUILDER_UserOptionsExport_WhatGroupList" => "User group list",
        "BUILDER_HlblockExport1"                  => "Create migration for highload block",
        "BUILDER_HlblockExport_HlblockId"         => "Select highload blocks",
        "BUILDER_UserTypeEntities1"               => "Create migration for user type entities",
        "BUILDER_UserTypeEntities_EntityId"       => "Select entity id",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "BUILDER_FormExport1"              => "Create migration for web form",
        "BUILDER_FormExport_FormId"        => "Select web form",
        "BUILDER_FormExport_What"          => "Select export items",
        "BUILDER_FormExport_Form"          => "Form",
        "BUILDER_FormExport_Fields"        => "Form questionsn",
        "BUILDER_FormExport_Statuses"      => "Form statuses",
        "BUILDER_OptionExport1"            => "Create migration for module options",
        "BUILDER_OptionExport_module_id"   => "Select modules",
        "BUILDER_CacheCleaner1"            => "Cache clean",
        "BUILDER_CacheCleaner2"            => "Execute BXClearCache(true)",
        "BUILDER_Configurator"             => "Create configuration",
        "BUILDER_Archive"                  => "Create archive configuration",
        "BUILDER_Configurator_config_name" => "Name",
        "BUILDER_Configurator_error"       => "Error creating configuration",
        "BUILDER_Configurator_success"     => "Configuration created",
        "BUILDER_Cleaner"                  => "Delete configuration",
        "BUILDER_Cleaner_desc"             => "Delete configuration file, migration files and migration records",
        "BUILDER_Cleaner_config_name"      => "Name",
        "BUILDER_Cleaner_error"            => "Error deleting configuration",
        "BUILDER_Cleaner_success"          => "Configuration deleted",
        "BUILDER_SchemaImport"             => "Install data schema",
        "BUILDER_SchemaExport"             => "Create data schema",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en", [
        "BUILDER_MedialibElements1"             => "Export media library images",
        "BUILDER_MedialibElements_CollectionId" => "Select collections",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "GOTO_MIGRATION"         => "Admin interface",
        "GOTO_OPTIONS"           => "Settings",
        "OPTIONS_REMOVE"         => "Reset module options",
        "OPTIONS_REMOVE_success" => "Options reset",
        "MARK"                   => "Mark migration",
        "MARK_FIELD1"            => "Select migration",
        "MARK_FIELD2"            => "Marks as",
        "MARK_VERSION"           => "Name|installed|new|unknown",
        "MARK_AS_NEW"            => "new",
        "MARK_AS_INSTALLED"      => "installed",
        "MARK_SUCCESS1"          => "Migration #VERSION# mark as new",
        "MARK_SUCCESS2"          => "Migration #VERSION# mark as installed",
        "MARK_SUCCESS3"          => "Migration #VERSION# deleted",
        "MARK_ERROR1"            => "Migration #VERSION# already new",
        "MARK_ERROR2"            => "Migration #VERSION# already installed",
        "MARK_ERROR3"            => "Migration #VERSION# not changed",
        "MARK_ERROR4"            => "No migrations for change found",
        "MARK_NEW_AS_INSTALLED"  => "Mark as installed",
        "MARK_INSTALLED_AS_NEW"  => "Mark as new",
        "MARK_UNKNOWN_AS_NEW"    => "Delete",
        "DELETE"                 => "Delete",
        "DELETE_OK"              => "Migration #VERSION# deleted",
        "DELETE_ERROR1"          => "Migrations for delete not found",
        "DELETE_ERROR2"          => "Migration #VERSION# not found",
        "TRANSFER_OK"            => "Migration #VERSION# transfer",
        "TRANSFER_OK_CNT"        => "Transfer migrations: #CNT#",
        "TRANSFER_ERROR1"        => "Migrations for transfer not found",
        "TRANSFER_ERROR2"        => "Migration is already in this configuration",
        "CREATE"                 => "Create migration",
        "VERSION_NOT_FOUND"      => "Migration not found",
        "RIGHT_D"                => "Access deny",
        "RIGHT_W"                => "Full access",
        "MODIFIED_SCHEMA"        => "Data schema was modified after install",
        "MODIFIED_VERSION"       => "Migration file was modified after install",
        "MODIFIED_LABEL"         => "M",
        "OLDER_VERSION"          => "Migration file created in a later version of the module #V1#\nPerhaps it uses features that are not implemented in the current version #V2#",
        "OLDER_LABEL"            => "!",
        "TAG"                    => "Migration tag",
        "SETTAG"                 => "Set tag",
        "SETTAG_OK"              => "Tag for migration #VERSION# setting",
        "SETTAG_ERROR1"          => "Migrations for setting tag not found",
        "SETTAG_ERROR2"          => "Migration #VERSION# not found",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "SCHEMA_DIFF"                  => "Show difference",
        "SCHEMA_IMPORT"                => "Install data schema",
        "SCHEMA_EXPORT"                => "Create data schema",
        "SCHEMA_AGENT"                 => "Data schema agents",
        "SCHEMA_AGENT_DESC"            => "Agents: #COUNT#",
        "SCHEMA_EVENT"                 => "Data schema event types",
        "SCHEMA_EVENT_DESC"            => "Event types: #COUNT#",
        "SCHEMA_EVENT_MESSAGES_DESC"   => "Event messages: #COUNT#",
        "SCHEMA_USER_GROUP"            => "Data schema user groups",
        "SCHEMA_USER_GROUP_DESC"       => "User groups: #COUNT#",
        "SCHEMA_HLBLOCK"               => "Data schema highload blocks",
        "SCHEMA_HLBLOCK_DESC"          => "Highload blocks: #COUNT#",
        "SCHEMA_HLBLOCK_FIELDS_DESC"   => "Highload blocks fields: #COUNT#",
        "SCHEMA_IBLOCK"                => "Data schema information blocks",
        "SCHEMA_IBLOCK_TYPE_DESC"      => "Information blocks types: #COUNT#",
        "SCHEMA_IBLOCK_DESC"           => "Information blocks: #COUNT#",
        "SCHEMA_IBLOCK_PROPS_DESC"     => "Information blocks properties: #COUNT#",
        "SCHEMA_IBLOCK_FORMS_DESC"     => "Information blocks user options: #COUNT#",
        "SCHEMA_OPTION"                => "Data schema module options",
        "SCHEMA_OPTION_DESC"           => "Module options: #COUNT#",
        "SCHEMA_USER_TYPE_ENTITY"      => "Data schema user type entities",
        "SCHEMA_USER_TYPE_ENTITY_DESC" => "User type entities: #COUNT#",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "ERR_BUILDER_NOT_FOUND"             => "Builder not found",
        "ERR_CANT_CREATE_DIRECTORY"         => "Cant create directory #NAME#",
        "ERR_MSSQL_NOT_SUPPORTED"           => "MSSQL not supported",
        "ERR_JSON_NOT_SUPPORTED"            => "Install php-ext json",
        "ERR_PHP_NOT_SUPPORTED"             => "\"#NAME#\" not supported",
        "ERR_EXCHANGE_DISABLED"             => "Exchange disabled, install required bitrix modules",
        "ERR_EXCHANGE_DISABLED_XML"         => "Exchange disabled, install php-ext XMLReader and XMLWriter",
        "ERR_CLASS_NOT_FOUND"               => "Class \"#NAME#\" not found",
        "ERR_MIGRATION_FAIL"                => "Migration fail",
        "ERR_SOME_MIGRATIONS_FAILS"         => "Some migrations fails",
        "ERR_VERSION_NOT_FOUND"             => "Migration not found",
        "ERR_INVALID_ARGUMENTS"             => "Invalid arguments, see help",
        "ERR_COMMAND_NOT_FOUND"             => "Command \"#NAME#\" not found, смотрите помощь",
        "ERR_METHOD_NOT_FOUND"              => "Method \"#NAME#\"  not found",
        "ERR_CANT_CREATE_FILE"              => "Cant create file \"#NAME#\"",
        "ERR_FORM_NOT_FOUND"                => "Form \"#NAME#\" not found",
        "ERR_EMPTY_REQ_FIELD"               => "Required field \"#NAME#\" is empty",
        "ERR_HELPER_DISABLED"               => "Helper class \"#NAME#\" disabled",
        "ERR_AGENT_NOT_ADDED"               => "Agent \"#NAME#\" not created",
        "ERR_EVENT_TYPE_NOT_UPDATED"        => "Event type not updated",
        "ERR_CANT_DELETE_FORM"              => "Error deleting form \"#NAME#\"",
        "ERR_CANT_DELETE_EVENT_TYPE"        => "Error deleting event type \"#NAME#\"",
        "ERR_CANT_DELETE_EVENT_MESSAGE"     => "Error deleting event message \"#NAME#\"",
        "ERR_EVENT_TYPE_NOT_ADDED"          => "Event type \"#NAME#\" not created",
        "ERR_EVENT_MESSAGE_NOT_ADDED"       => "Event message \"#NAME#\" not created",
        "ERR_HLBLOCK_NOT_FOUND"             => "Highload block \"#HLBLOCK#\" not found",
        "ERR_HLBLOCK_FIELD_NOT_FOUND"       => "Highload block field not found",
        "ERR_DEFAULT_LANGUAGE_NOT_FOUND"    => "Default language not found",
        "ERR_ACTIVE_LANGUAGES_NOT_FOUND"    => "Active languages not found",
        "ERR_DEFAULT_SITE_NOT_FOUND"        => "Default site not found",
        "ERR_ACTIVE_SITES_NOT_FOUND"        => "Active sites not found",
        "ERR_USER_GROUP_CODE_NOT_FOUND"     => "User group code not found",
        "ERR_SET_FIELDS_FOR_UPDATE_GROUP"   => "Set user group fields for update",
        "ERR_USERTYPE_NOT_ADDED"            => "User type entity \"#NAME#\" not created",
        "ERR_USERTYPE_NOT_UPDATED"          => "User type entity \"#NAME#\" not updated",
        "ERR_USERTYPE_NOT_DELETED"          => "User type entity \"#NAME#\" not deleted",
        "ERR_USERTYPE_EXPORT"               => "Error exporting user type \"#USER_TYPE_ID#\":",
        "ERR_IB_PROPERTY_CODE_NOT_FOUND"    => "Information block property code not found",
        "ERR_IB_CODE_NOT_FOUND"             => "Information block \"#IBLOCK_ID#\" code not found",
        "ERR_TYPE_OF_IB_NOT_FOUND"          => "Type of information block not found for \"#IBLOCK_ID#\"",
        "ERR_IB_SECTION_NAME_NOT_FOUND"     => "Section name not found",
        "ERR_IB_NOT_FOUND"                  => "Information block \"#IBLOCK#\" not found",
        "ERR_IB_TYPE_NOT_FOUND"             => "Information block type \"#IBLOCK_TYPE_ID#\" not found",
        "ERR_CANT_DELETE_IBLOCK"            => "Error deleting information block \"#NAME#\"",
        "ERR_CANT_DELETE_IBLOCK_TYPE"       => "Error deleting information block type \"#NAME#\"",
        "ERR_IB_FORM_OPTIONS_NOT_FOUND"     => "Information block form options not found",
        "ERR_SCHEMA_EMPTY"                  => "Data schema \"#NAME#\" empty",
        "ERR_SCHEMA_CREATED"                => "Data schema \"#NAME#\" saved",
        "ERR_EXCHANGE_FILE_NOT_FOUND"       => "Exchange file not found: #FILE#",
        "ERR_EXCHANGE_VERSION"              => "Exchange file \"#NAME#\" not supported in this version of module.\nPlease recreate it",
        "ERR_IB_SECTION_ID_EMPTY"           => "Section in iblock \"#IBLOCK_ID#\" empty",
        "ERR_IB_SECTION_ID_NOT_FOUND"       => "Section \"#SECTION_ID#\" in iblock \"#IBLOCK_ID#\" not found",
        "ERR_IB_SECTION_ON_LEVEL_NOT_FOUND" => "Section \"#SECTION_NAME#\" on level \"#DEPTH_LEVEL#\" not found",
        "ERR_SAVE_COLLECTION_BY_PATH"       => "Collection by path \"#PATH#\" not created",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "AGENT_CREATED"            => "Agent \"#NAME#\" created",
        "AGENT_UPDATED"            => "Agent \"#NAME#\" updated",
        "AGENT_EQUAL"              => "Agent \"#NAME#\" equivalent",
        "AGENT_DELETED"            => "Agent \"#NAME#\" deleted",
        "EVENT_MESSAGE_CREATED"    => "Event message \"#NAME#\" created",
        "EVENT_MESSAGE_UPDATED"    => "Event message \"#NAME#\" updated",
        "EVENT_MESSAGE_EQUAL"      => "Event message \"#NAME#\" equivalent",
        "EVENT_MESSAGE_DELETED"    => "Event message \"#NAME#\" deleted",
        "EVENT_TYPE_CREATED"       => "Event type \"#NAME#\" created",
        "EVENT_TYPE_UPDATED"       => "Event type \"#NAME#\" updated",
        "EVENT_TYPE_EQUAL"         => "Event type \"#NAME#\" equivalent",
        "EVENT_TYPE_DELETED"       => "Event type \"#NAME#\" deleted",
        "HLBLOCK_CREATED"          => "Highload block \"#NAME#\" created",
        "HLBLOCK_UPDATED"          => "Highload block \"#NAME#\" updated",
        "HLBLOCK_EQUAL"            => "Highload block \"#NAME#\" equivalent",
        "HLBLOCK_DELETED"          => "Highload block \"#NAME#\" deleted",
        "OPTION_CREATED"           => "Option \"#NAME#\" created",
        "OPTION_UPDATED"           => "Option \"#NAME#\" updated",
        "OPTION_EQUAL"             => "Option \"#NAME#\" equivalent",
        "USER_GROUP_CREATED"       => "User group \"#NAME#\" created",
        "USER_GROUP_UPDATED"       => "User group \"#NAME#\" updated",
        "USER_GROUP_EQUAL"         => "User group \"#NAME#\" equivalent",
        "USER_GROUP_DELETED"       => "User group \"#NAME#\" deleted",
        "USER_OPTION_LIST_CREATED" => "User option list \"#NAME#\" saved",
        "USER_OPTION_LIST_EQUAL"   => "User option list \"#NAME#\" equivalent",
        "USER_OPTION_GRID_CREATED" => "User option grid \"#NAME#\" saved",
        "USER_OPTION_GRID_EQUAL"   => "User option grid \"#NAME#\" equivalent",
        "USER_OPTION_FORM_CREATED" => "User option form \"#NAME#\" saved",
        "USER_OPTION_FORM_EQUAL"   => "User option form \"#NAME#\" equivalent",
        "USER_TYPE_ENTITY_CREATED" => "User type entity \"#NAME#\" created",
        "USER_TYPE_ENTITY_UPDATED" => "User type entity \"#NAME#\" updated",
        "USER_TYPE_ENTITY_EQUAL"   => "User type entity \"#NAME#\" equivalent",
        "USER_TYPE_ENTITY_DELETED" => "User type entity \"#NAME#\" deleted",
        "IB_PROPERTY_CREATED"      => "Information block \"#IBLOCK_ID#\": property \"#NAME#\" created",
        "IB_PROPERTY_UPDATED"      => "Information block \"#IBLOCK_ID#\": property \"#NAME#\" updated",
        "IB_PROPERTY_EQUAL"        => "Information block \"#IBLOCK_ID#\": property \"#NAME#\" equivalent",
        "IB_PROPERTY_DELETED"      => "Information block \"#IBLOCK_ID#\": property \"#NAME#\" deleted",
        "IB_CREATED"               => "Information block \"#NAME#\" created",
        "IB_UPDATED"               => "Information block \"#NAME#\" updated",
        "IB_EQUAL"                 => "Information block \"#NAME#\" equivalent",
        "IB_DELETED"               => "Information block \"#NAME#\" deleted",
        "IB_FIELDS_CREATED"        => "Information block \"#NAME#\": fields created",
        "IB_FIELDS_UPDATED"        => "Information block \"#NAME#\": fields updated",
        "IB_FIELDS_EQUAL"          => "Information block \"#NAME#\": fields equivalent",
        "IB_TYPE_CREATED"          => "Information block type \"#NAME#\" created",
        "IB_TYPE_UPDATED"          => "Information block type \"#NAME#\" updated",
        "IB_TYPE_EQUAL"            => "Information block type \"#NAME#\" equivalent",
        "IB_TYPE_DELETED"          => "Information block type \"#NAME#\" deleted",
    ]
);
\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "GD_INSTALL"          => "Install gadgets: \"Migration summary\"",
        "GD_INSTALL_success"  => "Gadgets installed",
        "GD_SELECT_CONFIGS"   => "Configs",
        "GD_CHECK_SCHEMAS"    => "Check data schemas",
        "GD_INFO_NAME"        => "Migration summary",
        "GD_INFO_DESC"        => "Migration summary",
        "GD_TYPE"             => "Type",
        "GD_STATE"            => "State",
        "GD_SHOW"             => "Show",
        "GD_SHOW_SCHEMAS"     => "Show data schemas",
        "GD_SHOW_MIGRATIONS"  => "Show migrations",
        "GD_MIGRATIONS"       => "Migrations",
        "GD_MIGRATIONS_RED"   => "Some migrations not installed",
        "GD_MIGRATIONS_GREEN" => "All migrations installed",
        "GD_SCHEMAS"          => "Data schemas",
        "GD_SCHEMA_RED"       => "Not installed",
        "GD_SCHEMA_GREEN"     => "Installed",
    ]
);

\Sprint\Migration\Locale::loadLocale(
    "en",
    [
        "BUILDER_GROUP_Main"     => "Main module",
        "BUILDER_GROUP_Iblock"   => "Information blocks",
        "BUILDER_GROUP_Hlblock"  => "Highload information blocks",
        "BUILDER_GROUP_Form"     => "Web Forms",
        "BUILDER_GROUP_Medialib" => "Media Library",
        "BUILDER_GROUP_Tools"    => "Tools",
    ]
);
