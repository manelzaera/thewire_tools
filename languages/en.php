<?php 

	$english = array(
		'thewire_tools' => "The Wire Tools",
		'thewire_tools:no_result' => "No wire posts were found",	
		'thewire_tools:login_required' => "You need to be logged in to use this feature",
	
		// menu
		'thewire_tools:menu:mentions' => "Mentions",
	
		// settings
		'thewire_tools:general_settings' => 'General settings',
		'thewire_tools:activity_settings' => 'Activity settings',
		'thewire_tools:group_settings' => 'Group-related settings',
		'thewire_tools:menu_settings' => 'Menu items settings',
		'thewire_tools:settings:enable_site_menu_item' => 'Enable site menu item for The Wire',
		'thewire_tools:settings:enable_group' => "Enable the wire for groups",
		'thewire_tools:settings:enable_group_menu_item' => "Enable group menu item for The Wire",
		'thewire_tools:settings:extend_widgets' => "Extend the wire widget with the option to post update directly from the widget",
		'thewire_tools:settings:extend_activity' => "Extend the activity page with the wire form",
	    'thewire_tools:settings:extend_group_activity' => "Extend the group activity page with the wire form",
		'thewire_tools:settings:textarea_label' => 'Textarea label',
		'thewire_tools:settings:textarea_label_hint' => 'Label to show next to textarea in widget. You can write a string handle to get it from language file. Leave empty to use default label',
		'thewire_tools:settings:default_textarea_label' => 'Update your status',
		'thewire_tools:settings:group_textarea_label' => 'Group textarea label',
		'thewire_tools:settings:group_textarea_label_hint' => 'Label to show next to textarea in widget. You can write a string handle to get it from language file. Leave empty to use default label',
		'thewire_tools:settings:group_default_textarea_label' => 'Write a publication',
	
		// notification
		// mention
		'thewire_tools:notify:mention:subject' => "You've been mentioned on the wire",
		'thewire_tools:notify:mention:message' => "Hi %s,

%s mentioned you in his/her wire post.

To view your mentions on the wire click here:
%s",

		// user settings
		'thewire_tools:usersettings:notify_mention' => "I wish to receive a notification when I'm mentioned in a Wire post",
		
		// group wire
		'thewire_tools:group:title' => "Group wire posts",
		'thewire_tools:groups:tool_option' => "Enable group wire posts",
		'thewire_tools:groups:error:not_enabled' => "The wire has been disabled for this group",
		
		// search
		'thewire_tools:search:title' => "Search the wire for: '%s'",
		'thewire_tools:search:title:no_query' => "Search the wire",
		'thewire_tools:search:no_query' => "To search in the wire, please enter your search text above",
				
		// widget
		// thewire_groups
		'widgets:thewire_groups:title' => "Group wire posts",
		'widgets:thewire_groups:description' => "Show the wire posts in the group",
		
		// index_thewire
		'widgets:index_thewire:title' => "The Wire",
		'widgets:index_thewire:description' => "Show the latest wire posts on your community",
		
		// the wire post
		'widgets:thewire_post:title' => "Update the wire",
		'widgets:thewire_post:description' => "Update your status on the wire from this widget",
	
		// the wire (default widget)
		'widgets:thewire:owner' => "Whos wire post to show",
		'widgets:thewire:filter' => "Filter wire posts (optional)",		
	);

	add_translation("en", $english);
