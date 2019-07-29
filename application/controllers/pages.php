<?php
class pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            //whoops, we dont hav a page for that!
            show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header',$data);
        $this->load->view('pages/home' . $page, $data);
        $this->load->view('templates/footer',$data);
    }
    Public function get_about_page()
    {
        $this->load->view('pages/');
    }
}

