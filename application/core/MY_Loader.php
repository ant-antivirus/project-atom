<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
	var $default_template = "default/";
	var $default_assets = "admin-wrap-lite/";
	var $variables = null;

	public function __construct() {
		$this->variables = new stdClass();
		$this->variables->template = $this->get_template();
		$this->variables->assets = $this->get_assets();

		$this->vars("template", $this->variables);
	}

	public function get_template() {
		$result = "template/".$this->default_template;
		return $result;
	}

	public function get_assets() {
		$result = "assets/".$this->default_assets;
		return $result;
	}

	public function render($view, $data = null) {
		$this->view($this->variables->template.'/header', $data);
		$this->view($view, $data);
		$this->view($this->variables->template.'/footer', $data);
	}

	public function get_sidebar($current) {
		$result = [
			['title' => _('title_dashboard'), 'url' => base_url('dashboard'), 'icon' => 'fa fa-tachometer', 'actived' => false],
			['title' => _('title_profile'), 'url' => base_url('profile'), 'icon' => 'fa fa-user-circle-o', 'actived' => false],
			['title' => _('title_company'), 'url' => base_url('company'), 'icon' => 'fa fa-building-o', 'actived' => false],
		];

		return $result;
	}

}
?>