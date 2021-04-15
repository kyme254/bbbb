<?php
/**
 * Page Access Control
 * @category  RBAC Helper
 */
defined('ROOT') or exit('No direct script access allowed');
class ACL
{
	

	/**
	 * Array of user roles and page access 
	 * Use "*" to grant all access right to particular user role
	 * @var array
	 */
	public static $role_pages = array(
			'teen' =>
						array(
							'announcement' => array('list','view'),
							'event' => array('list','view'),
							'giving' => array('view','add','edit', 'editfield','delete'),
							'offering' => array('view','add','edit', 'editfield'),
							'teens' => array('list','view','add'),
							'tithe' => array('view','add','edit', 'editfield')
						),
		
			'admin' =>
						array(
							'accounts' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'announcement' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'event' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'users' => array('list','view','userregister','accountedit','accountview','add','edit', 'editfield','delete','import_data'),
							'visitorbook' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'giving' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'offering' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'members' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'teens' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'tithe' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'prayer' => array('list','view','add','edit', 'editfield','delete'),
							'message' => array('list','view','add','edit', 'editfield','delete')
						),
		
			'member' =>
						array(
							'announcement' => array('list','view'),
							'event' => array('list','view'),
							'visitorbook' => array('view'),
							'giving' => array('list','view','add','edit', 'editfield'),
							'offering' => array('list','view','add','edit', 'editfield'),
							'members' => array('view'),
							'teens' => array('view'),
							'tithe' => array('list','view','add','edit', 'editfield'),
							'prayer' => array('list','view','add')
						),
		
			'visitor' =>
						array(
							'accounts' => array('list','view'),
							'announcement' => array('list','view'),
							'event' => array('list','view'),
							'visitorbook' => array('list','view'),
							'giving' => array('list','view','add'),
							'offering' => array('list','view','add','edit', 'editfield'),
							'teens' => array('view'),
							'tithe' => array('list','view','add','edit', 'editfield')
						)
		);

	/**
	 * Current user role name
	 * @var string
	 */
	public static $user_role = null;

	/**
	 * pages to Exclude From Access Validation Check
	 * @var array
	 */
	public static $exclude_page_check = array("", "index", "home", "account", "info", "masterdetail");

	/**
	 * Init page properties
	 */
	public function __construct()
	{	
		if(!empty(USER_ROLE)){
			self::$user_role = USER_ROLE;
		}
	}

	/**
	 * Check page path against user role permissions
	 * if user has access return AUTHORIZED
	 * if user has NO access return UNAUTHORIZED
	 * if user has NO role return NO_ROLE
	 * @return string
	 */
	public static function GetPageAccess($path)
	{
		$rp = self::$role_pages;
		if ($rp == "*") {
			return AUTHORIZED; // Grant access to any user
		} else {
			$path = strtolower(trim($path, '/'));

			$arr_path = explode("/", $path);
			$page = strtolower($arr_path[0]);

			//If user is accessing excluded access contrl pages
			if (in_array($page, self::$exclude_page_check)) {
				return AUTHORIZED;
			}

			$user_role = strtolower(USER_ROLE); // Get user defined role from session value
			if (array_key_exists($user_role, $rp)) {
				$action = (!empty($arr_path[1]) ? $arr_path[1] : "list");
				if ($action == "index") {
					$action = "list";
				}
				//Check if user have access to all pages or user have access to all page actions
				if ($rp[$user_role] == "*" || (!empty($rp[$user_role][$page]) && $rp[$user_role][$page] == "*")) {
					return AUTHORIZED;
				} else {
					if (!empty($rp[$user_role][$page]) && in_array($action, $rp[$user_role][$page])) {
						return AUTHORIZED;
					}
				}
				return FORBIDDEN;
			} else {
				//User does not have any role.
				return NOROLE;
			}
		}
	}

	/**
	 * Check if user role has access to a page
	 * @return Bool
	 */
	public static function is_allowed($path)
	{
		return (self::GetPageAccess($path) == AUTHORIZED);
	}

}
