<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index() {
		$data = [
			'page_title' => _('title_dashboard') . ' - ' . _('system_name'),
			'title' => _('title_dashboard'),
			'breadcrumb' => [
				_('title_home') => base_url(),
				_('title_dashboard') => base_url('dashboard'),
			],
			'sidebar' => [
				['title' => _('title_dashboard'), 'url' => base_url('dashboard'), 'icon' => 'fa fa-tachometer', 'actived' => true],
				['title' => _('title_profile'), 'url' => base_url('profile'), 'icon' => 'fa fa-user-circle-o', 'actived' => false],
				['title' => _('title_company'), 'url' => base_url('company'), 'icon' => 'fa fa-building-o', 'actived' => false],
			],
		];

		$this->load->render('dashboard', $data);
	}
}

?>