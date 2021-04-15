<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'accounts', 
			'label' => 'Accounts', 
			'icon' => '<i class="fa fa-google-wallet fa-4x"></i>'
		),
		
		array(
			'path' => 'announcement', 
			'label' => 'Announcement', 
			'icon' => '<i class="fa fa-hacker-news fa-4x"></i>'
		),
		
		array(
			'path' => 'event', 
			'label' => 'Event', 
			'icon' => '<i class="fa fa-level-up fa-4x"></i>'
		),
		
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => '<i class="fa fa-users fa-4x"></i>'
		),
		
		array(
			'path' => 'visitorbook', 
			'label' => 'Visitorbook', 
			'icon' => '<i class="fa fa-tripadvisor fa-4x"></i>'
		),
		
		array(
			'path' => 'giving', 
			'label' => 'Giving', 
			'icon' => '<i class="fa fa-angle-double-down fa-4x"></i>'
		),
		
		array(
			'path' => 'offering', 
			'label' => 'Offering', 
			'icon' => '<i class="fa fa-toggle-off fa-4x"></i>'
		),
		
		array(
			'path' => 'members', 
			'label' => 'Members', 
			'icon' => '<i class="fa fa-calendar-minus-o fa-4x"></i>'
		),
		
		array(
			'path' => 'teens', 
			'label' => 'Teens', 
			'icon' => '<i class="fa fa-child fa-4x"></i>'
		),
		
		array(
			'path' => 'tithe', 
			'label' => 'Tithe', 
			'icon' => '<i class="fa fa-money fa-4x"></i>'
		),
		
		array(
			'path' => 'prayer', 
			'label' => 'Prayer', 
			'icon' => '<i class="fa fa-external-link "></i>'
		),
		
		array(
			'path' => 'message', 
			'label' => 'Message', 
			'icon' => '<i class="fa fa-book fa-4x"></i>'
		)
	);
		
	
	
			public static $relationship = array(
		array(
			"value" => "married", 
			"label" => "Married", 
		),
		array(
			"value" => "others", 
			"label" => "Others", 
		),
		array(
			"value" => "single", 
			"label" => "Single", 
		),
		array(
			"value" => "widowed", 
			"label" => "Widowed", 
		),);
		
			public static $role = array(
		array(
			"value" => "Teen", 
			"label" => "Teen", 
		),
		array(
			"value" => "Admin", 
			"label" => "Admin", 
		),
		array(
			"value" => "Member", 
			"label" => "Member", 
		),
		array(
			"value" => "Visitor", 
			"label" => "Visitor", 
		),);
		
			public static $account_status = array(
		array(
			"value" => "Active", 
			"label" => "Active", 
		),
		array(
			"value" => "Pending", 
			"label" => "Pending", 
		),
		array(
			"value" => "Blocked", 
			"label" => "Blocked", 
		),);
		
			public static $status = array(
		array(
			"value" => "single", 
			"label" => "Single", 
		),
		array(
			"value" => "married", 
			"label" => "Married", 
		),
		array(
			"value" => "widowed", 
			"label" => "Widowed", 
		),);
		
			public static $reason = array(
		array(
			"value" => "to became member", 
			"label" => "To Became member", 
		),
		array(
			"value" => "passing", 
			"label" => "Passing", 
		),
		array(
			"value" => "visit church member", 
			"label" => "Visit Church Member", 
		),
		array(
			"value" => "others", 
			"label" => "Others", 
		),);
		
			public static $payment_method = array(
		array(
			"value" => "m-pesa", 
			"label" => "M-Pesa", 
		),
		array(
			"value" => "bank", 
			"label" => "Bank", 
		),
		array(
			"value" => "cash", 
			"label" => "Cash", 
		),);
		
			public static $gender = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);
		
			public static $relationship2 = array(
		array(
			"value" => "widowed", 
			"label" => "Widowed", 
		),
		array(
			"value" => "married", 
			"label" => "Married", 
		),
		array(
			"value" => "single", 
			"label" => "Single", 
		),);
		
			public static $payment_method2 = array(
		array(
			"value" => "cash", 
			"label" => "Cash", 
		),
		array(
			"value" => "m-pesa", 
			"label" => "M-Pesa", 
		),
		array(
			"value" => "bank", 
			"label" => "Bank", 
		),);
		
}