<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
	}


	public function band()
	{
		$this->load->view('headerSec');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('band');
		$crud->set_subject('band');
		$crud->columns('Name', 'Description', 'AgentID');
		$crud->fields('Name', 'Description', 'AgentID');
		$crud->set_relation('AgentID','agent','{givenName} {familyName}');
		$crud->required_fields('Name', 'Description', 'AgentID');
		$crud->display_as('Name', 'Name');
		$crud->display_as('Description', 'Music Style');
		$crud->display_as('AgentID', 'Agent');
		
		$crud->field_type('Description','dropdown',
						array('1' => 'Heavy Rock',
						'2' => 'Garage',
						'3' => 'Easy Listening',
						'4' => 'Rock',
						'5' => 'Punk Rock',
						'6' => 'Pop',
						'7' => 'Jazz' ));

		$output = $crud->render();
		$this->band_output($output);
	}

		function band_output($output = null)
	{
		$this->load->view('band_view.php', $output);
	}


	public function stage()
	{
		$this->load->view('headerSec');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('stage');
		$crud->set_subject('stage');
		$crud->columns('ID', 'Name', 'Capacity');
		$crud->fields('Name', 'Capacity');
		$crud->required_fields('Name', 'Capacity');
		$crud->display_as('ID', 'ID');
		$crud->display_as('Name', 'Name');
		$crud->display_as('Capacity', 'Backstage Capacity');

		$output = $crud->render();
		$this->stage_output($output);
	}

	function stage_output($output = null)
	{
		$this->load->view('stage_view.php', $output);
	}


		public function agent()
	{
		$this->load->view('headerSec');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('agent');
		$crud->set_subject('agent');
		$crud->fields('GivenName', 'FamilyName', 'Contact');
		$crud->columns('ID', 'GivenName', 'FamilyName', 'Contact');
		$crud->required_fields('GivenName', 'FamilyName', 'Contact');
		$crud->display_as('ID', 'ID');
		$crud->display_as('GivenName', 'First Name');
		$crud->display_as('FamilyName', 'Surname');
		$crud->display_as('Contact', 'Contact');

		$output = $crud->render();
		$this->agent_output($output);
	}

	function agent_output($output = null)
	{
		$this->load->view('agent_view.php', $output);
	}


	public function performance()
	{
		$this->load->view('headerSec');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('performance');
		$crud->set_subject('performance');
		$crud->columns('ID','Band',  'Stage','DATETIME');
		$crud->fields('Band', 'Stage', 'date', 'time');
		$crud->required_fields('ID','Band', 'Stage', 'date','time');
		$crud->field_type('DATETIME','date');
		$crud->set_relation('Band','band','Name');
		$crud->set_relation('Stage','stage','Name');
		$crud->display_as('ID', 'ID');
		$crud->display_as('Band', 'Band');
		$crud->display_as('Stage', 'Stage');
		//$crud->display_as('DATETIME', 'Date - Time');
		$crud->display_as('DATETIME', 'Date');

		$output = $crud->render();
		$this->performance_output($output);
	}

	function performance_output($output = null)
	{
		$this->load->view('performance_view.php', $output);
	}


public function member()
	{
		$this->load->view('headerSec');
		
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('member');
		$crud->set_subject('member');
		$crud->columns('ID','Title', 'GivenName', 'FamilyName', 'Band', 'JobType', 'Status');
		$crud->fields('Title', 'GivenName', 'FamilyName', 'Band', 'JobType', 'Status');
		$crud->required_fields('Title', 'GivenName', 'FamilyName', 'Band', 'JobType', 'Status');
		$crud->set_relation('Band','Band','Name');
		
		$crud->field_type('Status','dropdown',
            array('1' => 'Active', '2' => 'Cancelled'));
			
		$crud->field_type('Title','dropdown',
				    array('1' => 'Mr',
					'2' => 'Mrs',
					'3' => 'Ms',
					'4' => 'Dr',
					'5' => 'Master',
					'6' => 'Miss',
					'7' => 'Sir',
					'8' => 'Lord',
					'9' => 'Lady'));

		$crud->display_as('ID', 'ID');
		$crud->display_as('Title', 'Title');
		$crud->display_as('GivenName', 'First Name');
		$crud->display_as('FamilyName', 'Surname');
		$crud->display_as('JobType', 'Job');
		$crud->display_as('Status', 'Status');

		$crud->field_type('JobType','dropdown',
						array('1' => 'Vocals',
						'2' => 'Voice Coach',
						'3' => 'Make up',
						'4' => 'Drums',
						'5' => 'Guitar',
						'6' => 'Roadie',
						'7' => 'Backing',
						'8' => 'Lead Guitar',
						'9' => 'Sound Tech',
						'10' => 'Bass Guitar',
						'11' => 'Dancer', 
					));

		$output = $crud->render();
		$this->member_output($output);
	}

	function member_output($output = null)
	{
		$this->load->view('member_view.php', $output);
	}


	public function querynav()
	{
		$this->load->view('headerSec');
		$this->load->view('querynav_view');
	}

	public function query1()
	{
		$this->load->view('headerSec');
		$this->load->view('query1_view');
	}

	public function query2()
	{
		$this->load->view('headerSec');
		$this->load->view('query2_view');
	}

	public function blank()
	{
		$this->load->view('headerSec');
		$this->load->view('blank_view');
	}
}
