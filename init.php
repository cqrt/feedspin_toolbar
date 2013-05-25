<?php
class feedspin_toolbar extends Plugin {

  private $link;
	private $host;

	function about() {
		return array(1.0,
			"Small Toolbar for easy access to feed functions.",
			"cqrt", false);
	}

	function init($host) {
		$this->link = $host->get_link();
		$this->host = $host;

		$host->add_hook($host::HOOK_TOOLBAR_BUTTON, $this);
	}

	function get_js() {
		return file_get_contents(dirname(__FILE__) . "/toolbar.js");
	}

	function HOOK_TOOLBAR_BUTTON() {
		require_once dirname(__FILE__) . "/toolbar.php";
	}
	
	function api_version() {
		return 2;
	}

}
?>
