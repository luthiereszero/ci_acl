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
 * @since		2012.12.23
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
class Perm extends CI_controller {
	
	public function add() {
		echo 'add';
	}
	
	public function edit($id) {
		echo 'edit';
	}
	
	public function del($id) {
		echo 'delete';
	}
	
	public function index() {
		echo 'list';
	}
}

/* End of file role.php */
/* Location: ./application/controllers/acl/role.php */