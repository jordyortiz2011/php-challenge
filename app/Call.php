<?php

namespace App;


class Call
{
    protected $contact;
    protected $state = FALSE; //TRUE: Called succesful  | FALSE: Call error
	
	function __construct(Contact $contact)
	{
		# code...
        $this->contact = $contact;

        if(!empty($this->contact->getName())) {
            //return $this->contact;
            $this->state = TRUE;
        }else{
            $this->state = FALSE;
        }
	}

	public  function  getContact(){

	    if(!empty($this->contact->getName())) {
	        return $this->contact;
        }else{
	        return null;
        }
    }

    public  function  getStateCall(){
        return $this->state;
    }
}