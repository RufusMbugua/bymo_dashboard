<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see http://codeigniter.com/user_guide/general/urls.html
	*/
	// public function index_get(){
	//
	// }

	public function index(){
	//Testing an EndPoint
		$curl = new Curl\Curl();

		$data = json_encode(array(
			'phoneHash' => sha1(md5 ('0713004221'))
		));
		echo '<pre>';print_r($data);
		$curl->post('http://api.buymore.co.ke/card/customers/signin',$data );

		if ($curl->error) {
			echo '<pre>';print_r ($curl->error_code);
		}
		else {
			echo '<pre>';print_r ($curl->response);
		}
	}
}
