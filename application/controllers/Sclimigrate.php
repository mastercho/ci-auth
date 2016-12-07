<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sclimigrate extends CI_Controller {

   public function index($version = null)
   {
       $this->load->library('migration');

       if ($version != null) 
       {
           if(!$this->migration->version($version))
           {
               echo $this->migration->error_string();
           }
           else
           {
               echo 'Successful Migration! - Version: ' . $version;
           }
       }
       else
       {
           if(!$this->migration->latest())
           {
               echo $this->migration->error_string();
           }
           else
           {
               echo 'Successful Migration!';
           }
       }
   }
}