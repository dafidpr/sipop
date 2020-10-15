<?php
$this->load->view('templates/pop_header');
$this->load->view('templates/pop_sidebar');
$this->load->view('templates/pop_topbar');
$this->load->view($content);
$this->load->view('templates/pop_footer');
?>