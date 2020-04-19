<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model("login_model");
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}

	public function index()
	{
		if($this->isLoged("home")){
				$this->load->view('header');
				$this->load->view('home');
		}
}


	public function band()
	{
		$this->load->view('headerSec');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('band');
		$crud->set_subject('Band');
		$crud->unset_export();
		$crud->unset_print();
		$crud->columns('Name', 'Description', 'AgentID');

		$crud->fields('Name', 'Description', 'AgentID');

		$crud->set_relation('AgentID','Agent','{givenName} {familyName}');

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
		//this function links up to corresponding page in the views folder to display content for this table
		if($this->isLoged("band")){
			$this->load->view('band_view.php', $output);
		}
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
		//$crud->set_relation_n_n('orders', 'order_items', 'orders', 'item_id', 'invoice_no', 'invoiceNo');
		//$crud->display_as('itemDesc', 'Description');


		$crud->display_as('ID', 'ID');
		$crud->display_as('Name', 'Name');
		$crud->display_as('Capacity', 'Backstage Capacity');
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->stage_output($output);
	}

	function stage_output($output = null)
	{
		if($this->isLoged("stage")){
			$this->load->view('stage_view.php', $output);
		}
	}


		public function agent()
	{
		$this->load->view('headerSec');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('agent');
		$crud->set_subject('Agent');
		$crud->fields('ID', 'GivenName', 'FamilyName', 'Contact');
		$crud->columns('ID', 'GivenName', 'FamilyName', 'Contact');
		$crud->required_fields('ID', 'GivenName', 'FamilyName', 'Contact');
		$crud->display_as('ID', 'ID');
		$crud->display_as('GivenName', 'First Name');
		$crud->display_as('FamilyName', 'Surname');
		$crud->display_as('contact', 'Contact');
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->agent_output($output);
	}

	function agent_output($output = null)
	{
		if($this->isLoged("agent")){
			$this->load->view('agent_view.php', $output);
		}
	}



	public function performance()
	{
		$this->load->view('headerSec');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		//table name exact from database
		$crud->set_table('performance');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Performance');
		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('ID','Band',  'Stage','Date', 'Time');
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('Band', 'Stage', 'Date', 'Time');
		$crud->required_fields('ID','Band', 'Stage', 'date','time');
 		$crud->unset_edit();
		$crud->unset_export();
		$crud->unset_print();
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('Band','band','Name');
		$crud->set_relation('Stage','stage','Name');

		$crud->display_as('ID', 'ID');
		$crud->display_as('Band', 'Band');
		$crud->display_as('Date', 'Date');
		$crud->display_as('Stage', 'Stage');
		$crud->display_as('Time', 'Time');


		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');

		//form validation (could match database columns set to "not null")

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		//$crud->display_as('custID', 'CustomerID');

		$output = $crud->render();
		$this->performance_output($output);
	}



	function performance_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		if($this->isLoged("performance")){
			$this->load->view('performance_view.php', $output);
		}
	}

public function member()
	{
		$this->load->view('headerSec');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		//table name exact from database
		$crud->set_table('member');
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Member');
		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('ID','Title', 'GivenName', 'FamilyName', 'Band', 'JobType', 'Status');
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('Title', 'GivenName', 'FamilyName', 'Band', 'JobType', 'Status');
		$crud->required_fields('Title', 'GivenName', 'FamilyName', 'Band', 'JobType', 'Status');
		$crud->unset_export();
		$crud->unset_print();
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('Band','band','Name');
		$crud->field_type('Status','dropdown',
            array('1' => 'Active', '2' => 'Cancelled'));
		$crud->field_type('Title','dropdown',
				    array('1' => 'Mr', '2' => 'Ms', '3' => 'Dr'));

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

		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');

		//form validation (could match database columns set to "not null")

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		//$crud->display_as('custID', 'CustomerID');

		$output = $crud->render();
		$this->member_output($output);
	}

	function member_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		if($this->isLoged("member")){
			$this->load->view('member_view.php', $output);
		}
	}

	public function inout()
	{
		$this->load->view('headerSec');
		if($this->isLoged("inout")){
			$this->load->view('inout_view.php');
		}
	}



	public function query()
	{
		$this->load->view('headerSec');
		$this->load->view('query_view');
	}



	public function isLoged($destination){
		if($this->login_model->isLogged()){
		if($this->asPermission($destination)){
			return true;
		}
	}


		else{
			redirect("/login");
		}
	}

	public function asPermission($destination){

		$usersPermission = array(array("home","performance","band","stage","agent","member","inout"),array("home","performance","band"),array("home","performance","agent","band","member"),array("home","inout")); #admin, bmt, security officer, security guard

		$activePermission = $this->login_model->permission();
		$activeUser = $usersPermission[$activePermission];


		if (in_array($destination, $activeUser)) {
    return true;
}else{
	echo ' <script type="text/javascript">
            alert("YOU DON\'T HAVE ACCESS TO THIS PAGE");
            window.location.href = "/BEAM/";

</script>';

}




	}
}
