<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    private function _render_template($title = null, $selected_nav=null, $view, $content= array())
    {
        // header
        $header_data['title'] = $title;
        $template['header'] = $this->load->view('template/header', $header_data);

        // menu
        $menu = 'template/menu/admin_menu';
        $menu_data['active_nav'] = $selected_nav;
        $content['menu'] = $this->load->view($menu, $menu_data);

        // contents
        $template['body'] = $this->load->view($view, $content);

        // footer
        $template['footer'] = $this->load->view('template/footer');

        // template
        $this->load->view('template/template', $template);
    }

    function index()
    {
        //content

        $view = 'view_home';

        $content['mydata'] = 'test data passed to view_home.';

        $this->_render_template('Home', '', $view, $content);
    }
}
