<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistic extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('id')) {
            redirect(base_url() . 'backend/admin/login');
        }


        $this->load->library('logger/logger');

        $this->load->model('backend/admin/Model_common');
        $this->load->model('backend/shop/Model_store');
        $this->load->model('backend/shop/Model_order');
        $this->load->model('backend/admin/Model_setting_shop_order_status');

        $data['setting'] = $this->Model_common->get_setting_data();

        if (!in_array($this->session->userdata('role'), ['Superadmin'])) {
            if ($data['setting']['website_status_backend'] === "Passive") {
                $data['message'] = $data['setting']['website_status_backend_message'];
                redirect(base_url('backend/info'));
            }
        }
    }

    public function index()
    {
        $data['setting'] = $this->Model_common->get_setting_data();
        $data['setting_shop_order_status'] = $this->Model_common->get_setting_shop_order_status();
        $data['stores'] = $this->Model_store->show();
        $data['get_order'] = $this->Model_order->get_order();

        // $this->calc($data['get_order']);

        $this->load->view('backend/admin/view_header', $data);
        $this->load->view('backend/shop/view_statistic', $data);
        $this->load->view('backend/admin/view_footer');
    }

    public function sum_order_total()
    {

        // $this->Model_order->sum_order_total($this->input->post('store_id'), 'web', $this->input->post('start_date'), $this->input->post('end_date'));
        // exit($this->db->last_query());
        $web = $this->Model_order->sum_order_total($this->input->post('store_id'), 'web', $this->input->post('start_date'), $this->input->post('end_date')); 
        $kiosk = $this->Model_order->sum_order_total($this->input->post('store_id'), 'kiosk', $this->input->post('start_date'), $this->input->post('end_date')); 

        $total_web = 0;
        $total_update_web = 0;
        $total_kiosk = 0;
        $total_update_kiosk = 0;

        $count_order = 0;

        foreach($web as $row_web){
            // if($row_web['status_process'] != 1){}
                $count_order += +1;
                $total_web += $row_web['total']; 
                $total_update_web += $row_web['total_update']; 
        }
        
        foreach($kiosk as $row_kiosk){
            // if($row_web['status_process'] != 1){}
                $count_order += +1;
                $total_kiosk += $row_web['total']; 
                $total_update_kiosk += $row_kiosk['total_update']; 
        }
        $response = array(
            'web' => array(
                'total' => number_format($total_web,2),
                'total_update' => number_format($total_update_web,2)
            ),
            'kiosk' => array(
                'total' => number_format($total_kiosk,2), 
                'total_update' => number_format($total_update_kiosk,2) 
            ),
            'count' => array(
                'count_order' => $count_order 
            )

        );

        // $response = array(
        //     'web' => $this->Model_order->sum_order_total($this->input->post('store_id'), 'web', $this->input->post('start_date'), $this->input->post('end_date')), 
        //     'kiosk' => $this->Model_order->sum_order_total($this->input->post('store_id'), 'kiosk', $this->input->post('start_date'), $this->input->post('end_date')) 
        // );
        exit(json_encode(array('result' => $response)));
    }

    public function calc($data){
        $count = count($data);
        echo json_encode($data);
    }
}
