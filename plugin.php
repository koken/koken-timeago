<?php

class KokenTimeago extends KokenPlugin {

	function __construct()
	{
		$this->register_hook('before_closing_head', 'setup');
	}

	function setup()
	{

		$path = $this->get_path();
		echo <<<OUT
<script src="{$path}/jquery.timeago.js"></script>
<script>
	$(function() {
		$('time').timeago();
	});
</script>
OUT;

	}
}