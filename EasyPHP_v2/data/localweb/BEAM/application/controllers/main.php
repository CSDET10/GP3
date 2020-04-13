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

		//table name exact from database
		$crud->set_table('band');

		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Band');

		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('bandName', 'description', 'agent');

		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('bandName', 'description', 'agent');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('agent','agent','{givenName} {familyName}');

		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');

		//form validation (could match database columns set to "not null")
		$crud->required_fields('bandName', 'description', 'agent');

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		//$crud->display_as('custID', 'CustomerID');

		$crud->display_as('bandName', 'Name');
		$crud->display_as('description', 'Music Style');
		$crud->display_as('agent', 'Agent');

		$crud->field_type('description','dropdown',
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
		$crud->columns('stageNumber', 'stageName', 'backstageCapacity');
		$crud->fields('stageName', 'backstageCapacity');
		$crud->required_fields('stageName', 'backstageCapacity');
		//$crud->set_relation_n_n('orders', 'order_items', 'orders', 'item_id', 'invoice_no', 'invoiceNo');
		//$crud->display_as('itemDesc', 'Description');


		$crud->display_as('stageNumber', 'ID');
		$crud->display_as('stageName', 'Name');
		$crud->display_as('backstageCapacity', 'Backstage Capacity');

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
		$crud->fields('agentID', 'givenName', 'familyName', 'contact');
		$crud->columns('agentID', 'givenName', 'familyName', 'contact');
		$crud->required_fields('agentID', 'givenName', 'familyName', 'contact');
		$crud->display_as('agentID', 'ID');
		$crud->display_as('givenName', 'First Name');
		$crud->display_as('familyName', 'Surname');
		$crud->display_as('contact', 'Contact');

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
		$crud->columns('performanceID','bandName',  'stageNumber','date', 'time');
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('bandName', 'stageNumber', 'date', 'time');
		$crud->required_fields('performanceID','bandName', 'stageNumber', 'date','time');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('bandName','band','bandName');
		$crud->set_relation('stageNumber','stage','stageName');

		$crud->display_as('performanceID', 'ID');
		$crud->display_as('bandName', 'Band');
		$crud->display_as('date', 'Date');
		$crud->display_as('stageNumber', 'Stage');
		$crud->display_as('time', 'Time');
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
		$crud->columns('memberID','title', 'givenName', 'familyName', 'band', 'jobType', 'status');
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('title', 'givenName', 'familyName', 'band', 'jobType', 'status');
		$crud->required_fields('title', 'givenName', 'familyName', 'band', 'jobType', 'status');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('band','band','bandName');
		$crud->field_type('status','dropdown',
            array('1' => 'Active', '2' => 'Cancelled'));
		$crud->field_type('title','dropdown',
				    array('1' => 'Mr', '2' => 'Ms', '3' => 'Dr'));

		$crud->display_as('memberID', 'ID');
		$crud->display_as('title', 'Title');
		$crud->display_as('givenName', 'First Name');
		$crud->display_as('familyName', 'Surname');
		$crud->display_as('jobType', 'Job');
		$crud->display_as('status', 'Status');


		$crud->field_type('jobType','dropdown',
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

	public function querynav()
	{
		$this->load->view('headerSec');
		if($this->isLoged("inout")){
			$this->load->view('querynav_view.php');
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
		$usersPermission = array(array("home","performance","band","stage","agent","member","inout"),array("home","performance","band"),array("home","performance","band","member"),array("home","inout"),array("home","performance")); #admin, beam, security officer, security guard, BMT
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
