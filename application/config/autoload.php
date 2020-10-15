<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'email', 'session', 'fpdf', 'form_validation', 'googlemaps', 'recaptcha');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file', 'security', 'pos');
$autoload['config'] = array('recaptcha');
$autoload['language'] = array();
$autoload['model'] = array('model', 'bts_m', 'operator_m', 'pengguna_bts_m', 'router_m', 'user_log_m', 'user_m', 'report_m');
