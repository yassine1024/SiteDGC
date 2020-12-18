<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Mail\OrderShippedMarkDown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //
    public function ship(){

      //  Mail::to('the.fire.of.hell.is.black@gmail.com')->send(new OrderShipped());
      //  dd("Your email is shipped with succes.");
        Mail::to('yassine.atik@mf.gov.dz')->send(new OrderShippedMarkDown());
       // return ;
    }
}
