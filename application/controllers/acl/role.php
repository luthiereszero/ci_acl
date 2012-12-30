<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI_ACL
 * 
 * Yet another ACL implementation for CodeIgniter. More specifically this is 
 * a role-based access control list for CodeIgniter.
 * 
 * @package		ACL
 * @author		William Duyck <fuzzyfox0@gmail.com>
 * @copyright	Copyright (c) 2012, William Duyck
 * @license		http://www.mozilla.org/MPL/2.0/ Mozilla Public License 2.0
 * @since		2012.12.30
 */

// ------------------------------------------------------------------------

/**
 * ACL Controller (Role)
 * 
 * Provides a set functions to maintain user roles within the system
 * 
 * @package		ACL
 * @subpackage	Controllers
 * @author		William Duyck <wemd2@kent.ac.uk>
 */
class Role extends CI_controller {
	
	public function add() {
		$this->load->view('acl/form/add_role.php', NULL, FALSE, 'bootstrap-journal');
	}
	
	public function edit($id) {
		echo 'edit';
	}
	
	public function del($id) {
		echo 'delete';
	}
	
	public function index() {
		$data['role_list'] = $this->acl_model->get_all_roles();
		
		$this->load->view('acl/role', $data, FALSE, 'bootstrap-journal');
	}
}

/* End of file role.php */
/* Location: ./application/controllers/acl/role.php */