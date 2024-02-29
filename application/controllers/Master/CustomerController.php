<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {

    function __construct()
    {
        parent::__construct(); 
        $this->load->driver('cache');
    }

	public function render($view, array $data = NULL)
    {
        $data['title']		= 'Listing Customer Produk';
		$data['menu']		= 'customer';
		$data['submenu']	= 'listing customer produk';
 
        $this->load->view($view, $data); 
    }


	public function index()
	{  
        $cacheALLCustomer = $this->cache->file->get('get_all_customer');

        if ($cacheALLCustomer === false) {
            $data		= array();
            $response   = array();
     
            $api_url 	= vendish_api().'customer/list_customer_produk';
            
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
            $expire = 300;
            $this->cache->file->save('get_all_customer', $data_decode->data, $expire); 
        } 
 
        $data            = [
            'customer'      => $cacheALLCustomer
        ];
	 
		$this->render('master/customer/index', $data);
	}

 
 


     
}
