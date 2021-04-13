<?php 
include_once('vendor/autoload.php'); 
use AfricasTalking\SDK\AfricasTalking;

class SMS{
    private $username = 'oby'; 
    private $apikey    = 'cd373492fc927460f207ebf9e42ed6c47ce47f73b0daa0347c65b273974d27c5';
    protected $AT; 
    protected $sms; 


    public function __construct(){
        try {
            $this->AT = new AfricasTalking($this->username, $this->apikey );
            $this->sms = $this->AT->sms();
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }    

    public function send_sms($contacts, $message){  

        for($i=0; $i < count($contacts); $i++){
            try {
                $result   = $this->sms->send([
                    'to'      => $contacts[$i],
                    'message' => $message
                ]); 
                print_r($result); 
            } catch (Exception $th) {
                echo $th->getMessage();
            } 
        }

    }
}