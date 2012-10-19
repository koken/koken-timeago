<?php

class KokenTimeago extends KokenPlugin {

	function __construct()
	{
		$this->register_filter('before_closing_head', 'setup');
	}

	function setup()
	{

		$path = $this->get_path();
		return <<<OUT
<script src="{$path}/jquery.timeago.js"></script>
<script>
	$(function() {
		$('time').timeago();
	});
</script>
OUT;

	}
}