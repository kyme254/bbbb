<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_username_value_exist Model Action
     * @return array
     */
	function users_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * getcount_users Model Action
     * @return Value
     */
	function getcount_users(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_accounts Model Action
     * @return Value
     */
	function getcount_accounts(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM accounts";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_announcement Model Action
     * @return Value
     */
	function getcount_announcement(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM announcement";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_event Model Action
     * @return Value
     */
	function getcount_event(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM event";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_visitorbook Model Action
     * @return Value
     */
	function getcount_visitorbook(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM visitorbook";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_giving Model Action
     * @return Value
     */
	function getcount_giving(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM giving";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_offering Model Action
     * @return Value
     */
	function getcount_offering(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM offering";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_members Model Action
     * @return Value
     */
	function getcount_members(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM members";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_teens Model Action
     * @return Value
     */
	function getcount_teens(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM teens";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_tithe Model Action
     * @return Value
     */
	function getcount_tithe(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tithe";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_prayer Model Action
     * @return Value
     */
	function getcount_prayer(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM prayer";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_message Model Action
     * @return Value
     */
	function getcount_message(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM message";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
