<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AppServices;


class TestController extends Controller
{
   
    public function Phrase()
    {  
        $string=(isset($_GET['query']))?$_GET['query']:null;
        $appServices = new AppServices;
        return $appServices->getPhrase($string);
    }
    public function IPinfo()
    {   
       $ip = request()->ip();
       $appServices = new AppServices;
       return $appServices->getIP($ip); 
       
        
    }
  
}
