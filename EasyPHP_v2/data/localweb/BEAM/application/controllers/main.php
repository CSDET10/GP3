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
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		//table name exact from database
		$crud->set_table('band');

		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Band');

		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('BandName', 'Description', 'Agent');

		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('BandName', 'Description', 'Agent');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		//$crud->set_relation('custID','customers','custID');

		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');

		//form validation (could match database columns set to "not null")
		$crud->required_fields('BandName', 'Description', 'Agent');

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		//$crud->display_as('custID', 'CustomerID');

		$output = $crud->render();
		$this->band_output($output);
	}
	
		function band_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('band_view.php', $output);
	}

	public function performance()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		//table name exact from database
		$crud->set_table('performance');

		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Performance');

		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('BandName', 'Date', 'StageName', 'Time');

		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('BandName', 'StageName', 'Date', 'Time');

		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('BandName','band','BandName');

		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');

		//form validation (could match database columns set to "not null")
		$crud->required_fields('BandName', 'Date', 'PerformanceID', 'StageName', 'Time');

		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		//$crud->display_as('custID', 'CustomerID');

		$output = $crud->render();
		$this->performance_output($output);
	}

	function performance_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('performance_view.php', $output);
	}

	public function stage()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		$crud->set_table('stage');
		$crud->set_subject('stage');
		$crud->columns('stageNumber', 'stageName', 'backstageCapacity');
		$crud->fields('stageName', 'backstageCapacity');
		$crud->required_fields('stageName', 'backstageCapacity');
		//$crud->set_relation_n_n('orders', 'order_items', 'orders', 'item_id', 'invoice_no', 'invoiceNo');
		//$crud->display_as('itemDesc', 'Description');

		$output = $crud->render();
		$this->stage_output($output);
	}

	function stage_output($output = null)
	{
		$this->load->view('stage_view.php', $output);
	}
	public function customers()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('customers');
		$crud->set_subject('customer');
		$crud->fields('custID', 'custName', 'custAddress', 'custTown', 'custPostcode', 'custTel', 'custEmail');
		$crud->required_fields('custID', 'custName', 'custAddress', 'custTown', 'custPostcode', 'custTel', 'custEmail');
		$crud->display_as('custID', 'CustomerID');
		$crud->display_as('custName', 'Name');
		$crud->display_as('custAddress', 'Address');
		$crud->display_as('custTown', 'Town');
		$crud->display_as('custPostcode', 'Postcode');
		$crud->display_as('custTel', 'Phone');
		$crud->display_as('custEmail', 'Email');

		$output = $crud->render();
		$this->cust_output($output);
	}

	function cust_output($output = null)
	{
		$this->load->view('cust_view.php', $output);
	}

		public function agent()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('agent');
		$crud->set_subject('Agent');
		$crud->fields('agentNumber', 'givenName', 'familyName', 'contact');
		$crud->required_fields('agentNumber', 'givenName', 'familyName', 'contact');
		$crud->display_as('agentNumber', 'agent number');
		$crud->display_as('givenName', 'given name');
		$crud->display_as('familyName', 'family name');
		$crud->display_as('contact', 'contact');

		$output = $crud->render();
		$this->agent_output($output);
	}

	function agent_output($output = null)
	{
		$this->load->view('agent_view.php', $output);
	}

	public function orderline()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('order_items');
		$crud->set_subject('order line');
		$crud->fields('invoice_no', 'item_id', 'itemQty', 'itemPrice');
		$crud->set_relation('invoice_no','orders','invoiceNo');
		//have multiple columns show in one FK column by concatenation:  www.grocerycrud.com/forums/topic/479-concatenate-two-or-more-fields-into-one-field/
		$crud->set_relation('item_id','items','{itemID} - {itemDesc}');
		$crud->required_fields('invoice_no', 'item_id', 'itemQty', 'itemPrice');
		$crud->display_as('invoice_no', 'InvoiceNo');
		$crud->display_as('item_id', 'ItemID');
		$crud->display_as('itemQty', 'Quantity');
		$crud->display_as('itemPrice', 'Price');

		$output = $crud->render();
		$this->orderline_output($output);
	}

	function orderline_output($output = null)
	{
		$this->load->view('orderline_view.php', $output);
	}

	public function querynav()
	{
		$this->load->view('header');
		$this->load->view('querynav_view');
	}

	public function query1()
	{
		$this->load->view('header');
		$this->load->view('query1_view');
	}

	public function query2()
	{
		$this->load->view('header');
		$this->load->view('query2_view');
	}

	public function blank()
	{
		$this->load->view('header');
		$this->load->view('blank_view');
	}
}
