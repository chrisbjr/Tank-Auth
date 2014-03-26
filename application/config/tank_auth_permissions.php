<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | Role permissions
  |
  | These variables define whether a role is permitted to access a class or
  | method.
  |
  |--------------------------------------------------------------------------
 */
$config['permissions'] = array(
	'admin' => array(
		array(
			'class' => 'admin'
		)
	),
	'member' => array(
		array(
			'class' => 'welcome'
		),
		array(
//			'class' => 'admin',
//			'methods' => array(
//				'index',
//				'user_list'
//			)
		)
	)
);

/* End of file tank_auth_permissions.php */
/* Location: ./application/config/tank_auth_permissions.php */