<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return $id;
    }
    public function handleQueryString(Request $request){
        $firstname = $request->get('firstName');
        $lastname = $request->get('lastName');
        $email = $request->get('email');
        return view('datahandle',[
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname
        ]);
    }
    public function returnForm(){
        return view('form-data');
    }
    public function processForm(Request $request){
        $eventname = $request->get('eventName');
        $bandnames = $request->get('bandNames');
        $startdate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        return view('form-success',[
            'eventName' => $eventname,
            'bandNames' => $bandnames,
            'startDate' => $startdate,
            'endDate' => $endDate,
            'portfolio' => $portfolio,
            'ticketPrice' => $ticketPrice,
            'status' => $status
        ]);
    }
}
