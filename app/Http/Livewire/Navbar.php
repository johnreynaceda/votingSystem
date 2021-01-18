<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Navbar extends Component
{
    public $showModal=false,$sidn,$pass,$data;
    public function render()
    {
        
       
        return view('livewire.navbar');
    }

      //##########################################################################
        // ITEXMO SEND SMS API - PHP - CURL METHOD
        // Visit www.itexmo.com/developers.php for more info about this API
        //##########################################################################
        public function itexmo($number,$message,$apicode,$passwd){
            $url = 'https://www.itexmo.com/php_api/api.php';
            $itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
            $param = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($itexmo),
                ),
            );
            
            $context  = stream_context_create($param);
            return file_get_contents($url, false, $context);
           
    
        
        //##########################################################################
    }

   
    
    public function request(){
        $this->showModal=true;
    }
    public function send(){
       
        $data = User::where('sidn',$this->sidn)->first();
        $contact = $data->contact;
        $pass = "Your Password: \n ".$data->pass;
        // dd($contact);
        // dd($pass);
        
        $this->emit('alert',['type'=>'success','message' => 'Message Sent Successfully']);
        $this->showModal=false;
        return $this->itexmo($contact,$pass,'TR-SKSUO092304_66M8J', '[ug$xe1]j]');  
       
    
        
    }
    
}
