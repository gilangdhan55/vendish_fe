<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DailyVisitingCustomer extends CI_Controller {
	

	public function render($view, array $data = NULL, $dataHeader = NULL)
    {
           
        $this->load->view($view, $data); 
    }


	public function index()
	{
		$this->daily_visiting();
		exit;
		$data				= array();
		$data['title']	    = 'Daily Visiting';
		$data['menu']		= 'Visiting';
		$data['submenu']	= 'Daily Visiting';
 

		$this->render('visiting/daily_visiting/index', $data);
	}

	public function daily_visiting()
	{
		$response   = array();
     
		$api_url 	= vendish_api().'Visiting/daily_visiting';
	 
		// Inisialisasi sesi cURL
		$ch = curl_init();

		// Set pengaturan cURL
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPGET, true); // Tentukan bahwa metode permintaan adalah GET

		// Eksekusi permintaan GET
		$data_api       = curl_exec($ch);
			
		$data_decode     = json_decode($data_api);
		
		// Tutup sesi cURL
		curl_close($ch);
	}

	public function LoadModalBrand()
	{
		// URL API yang akan diambil
        $api_url = vendish_api().'visiting/allBrand';

        // Inisialisasi cURL session
        $con = curl_init();

        // Set pengaturan cURL
        curl_setopt($con, CURLOPT_URL, $api_url);
        curl_setopt($con, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($con, CURLOPT_HTTPGET, true);

        // Eksekusi cURL dan tangkap respons
        $response = curl_exec($con);

        // Mendapatkan kode status HTTP
        $http_status = curl_getinfo($con, CURLINFO_HTTP_CODE);

        // Menutup session cURL
        curl_close($con);
 
        $result = array();

		if ($http_status === 200) {
            if ($response !== false) {
				$result = json_decode($response);
			}
		} 
		 
		$data['result']		= $result->result;
        $this->load->view('visiting/daily_visiting/modal-brand', $data);
	}

}
