<?php
	$settings = array(


		###### ADMIN ######
		'admin' => array(
			'max_upload_size' => '5242880',
		),
		########


		###### SYMPHONY ######
		'symphony' => array(
			'pagination_maximum_rows' => '20',
			'lang' => 'en',
			'pages_table_nest_children' => 'no',
			'version' => '2.3.2',
			'cookie_prefix' => 'sym-',
			'session_gc_divisor' => '10',
		),
		########


		###### LOG ######
		'log' => array(
			'archive' => '1',
			'maxsize' => '102400',
		),
		########


		###### DATABASE ######
		'database' => array(
			'host' => 'localhost',
			'port' => '3306',
			'user' => null,
			'password' => null,
			'db' => null,
			'tbl_prefix' => 'sym_',
		),
		########


		###### PUBLIC ######
		'public' => array(
			'display_event_xml_in_source' => 'no',
		),
		########


		###### GENERAL ######
		'general' => array(
			'sitename' => 'Personal Health Diary',
		),
		########


		###### FILE ######
		'file' => array(
			'write_mode' => '0644',
		),
		########


		###### DIRECTORY ######
		'directory' => array(
			'write_mode' => '0755',
		),
		########


		###### REGION ######
		'region' => array(
			'time_format' => 'H:i:s',
			'date_format' => 'Y-m-d',
			'datetime_separator' => ' ',
			'timezone' => 'America/Chicago',
		),
		########


		###### IMAGE ######
		'image' => array(
			'cache' => '1',
			'quality' => '90',
			'disable_regular_rules' => 'no',
			'disable_upscaling' => 'no',
		),
		########


		###### MAINTENANCE_MODE ######
		'maintenance_mode' => array(
			'enabled' => 'no',
		),
		########


		###### GLOBALRESOURCELOADER ######
		'globalresourceloader' => array(
			'ds-names' => 'auth_token,current_user,datetime,useragent_details',
		),
		########


		###### DOCUMENTATION ######
		'documentation' => array(
			'text-formatter' => 'markdown_with_purifier',
			'button-text' => 'Documentation',
		),
		########


		###### SORTING ######
		'sorting' => array(
			'section_body-parts_sortby' => '38',
			'section_body-parts_order' => 'desc',
			'data_sources_index_sortby' => 'name',
			'data_sources_index_order' => 'asc',
			'section_sleep-diary_sortby' => '17',
			'section_sleep-diary_order' => 'asc',
		),
		########


		###### USERAGENT_DETAILS ######
		'useragent_details' => array(
			'geoplugin' => 'yes',
		),
		########


		###### MEMBERS ######
		'members' => array(
			'cookie-prefix' => 'sym-members',
			'section' => '10',
		),
		########


		###### APIPAGE ######
		'apipage' => array(
			'default-format' => 'json',
			'param-selector' => 'url-format',
			'jsonp-var' => 'api_read',
			'jsonp-callback' => 'api_page',
			'header-override' => 'no',
			'disable-content-length' => 'yes',
		),
		########
	);
