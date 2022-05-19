<?php

class Index extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        redirect('/admin/login', 'refresh');
    }

}
