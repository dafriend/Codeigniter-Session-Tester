<?php

/**
 * This class is useful for testing the configuration of the CodeIgniter "session" library.
 * It works only for CodeIgniter versions > 3.0.0
 * 
 * If "session" is properly configured then each click of the button will toggle the "status" of the user.
 * The text of the button changes from "Log In" to "Log Out" on each press.
 * If sessions are working a reload of the page should not change the "status".
 * IOW, the button text won't change.
 * 
 * If what was just described doesn't happen then any (or many) from the following list may need attention
 *    "Session Variables" in config.php
 *    "Cookie Related Variables" in config.php
 *    If using the 'files' driver the path set as the value to $config['sess_save_path'] may not exist or has inappropriate permissions. 
 *    If using the 'database' driver the table is not defined correctly.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_sessions extends CI_Controller
{

    /**
     * This constructor can be deleted if library 'session' AND helper 'form' are autoloaded.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('test_sessions_view');
    }

    public function process_submit()
    {
        //we literally check the button submit value to decide what to do
        if($this->input->post('submit') === "Log In")
        {
            $_SESSION['status'] = TRUE;
        }
        else
        {
            session_destroy();
        }
        redirect('test_sessions', 'location');
    }
}
