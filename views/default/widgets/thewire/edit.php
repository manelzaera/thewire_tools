<?php

	$widget = $vars["entity"];
	
	$num_display = (int) $widget->num_display;
	if($num_display < 1){
		$num_display = 4;
	}
	
	$owner_options = array(
		"mine" => elgg_echo("mine"),
		"friends" => elgg_echo("friends"),
		"all" => elgg_echo("all")
	);
	
?>
<div>
	<?php 
		echo elgg_echo("thewire:num");
		echo "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[num_display]", "options" => range(1, 10), "value" => $num_display));
	?>
</div>
<div>
	<?php 
		echo elgg_echo("widgets:thewire:owner");
		echo "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[owner]", "options_values" => $owner_options, "value" => $widget->owner));
	?>
</div>
<div>
	<?php 
		echo elgg_echo("widgets:thewire:filter");
		echo "&nbsp;" . elgg_view("input/text", array("name" => "params[filter]", "value" => $widget->filter));
	?>
</div>