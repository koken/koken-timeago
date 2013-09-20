<?php

class KokenTimeago extends KokenPlugin {

	function __construct()
	{
		$this->register_hook('before_closing_head', 'setup');
	}

	function setup()
	{
		echo <<<OUT
<script>
	$(function() {
		$('time').timeago();
	});
</script>
OUT;

	}
}