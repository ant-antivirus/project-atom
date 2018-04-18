<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class company extends CI_Controller {
	var $title_key = "title_company";
	var $controller_key = "company";

	public function index() {
		$data = [
			'page_title' => _($this->title_key) . ' - ' . _('system_name'),
			'title' => _($this->title_key),
			'breadcrumb' => [
				_('title_home') => base_url(),
				_($this->title_key) => base_url($this->controller_key),
			],
			'sidebar' => $this->load->get_sidebar(_($this->title_key)),
		];

		$this->load->render('dashboard', $data);
	}
}

?>