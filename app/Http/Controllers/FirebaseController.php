<?php

namespace App\Http\Controllers;

use Log;
use Exception;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use App\Services\FirebaseService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class FirebaseController extends BaseController
{


    public function index()
    {

        $data1 = $this->database->getReference('/parameter/irrigation1')
        ->orderByKey()
        ->limitToLast(1)
        ->getSnapshot();
        $data_new1 = $data1->getValue();

        $data2 = $this->database->getReference('/parameter/irrigation2')
        ->orderByKey()
        ->limitToLast(1)
        ->getSnapshot();
        $data_new2 = $data2->getValue();

        // $humidity1 = $data->getChild('/irrigation1/humidity')->getValue();


        $data_relay = $this->database->getReference('/setting/relay')
        ->orderByKey()
        ->getSnapshot();
        $relay = $data_relay->getValue();
        // dd($relay);

        return view('dashboard', [
            'data_new1' => $data_new1,
            'data_new2' => $data_new2,
            'relay' => $relay]);
    }





    public function turn_off_relay($irrigation)
    {
        // $testData = [
        //     'relay1' => 0,
        // ];
        $this->database->getReference('/setting/relay/'.$irrigation)->set(1);
        return redirect()->route('setting-hethong');
    }
    public function turn_on_relay($irrigation)
    {
        $this->database->getReference('/setting/relay/'.$irrigation)->set(0);
        return redirect()->route('setting-hethong');
    }


    public function detail_view()
    {

        // Hệ thống 1
        $data1 = $this->database->getReference('/parameter/irrigation1')
        ->orderByKey()
        ->limitToLast(10)
        ->getSnapshot();
        $data_new1 = $data1->getValue();

         // Hệ thống 2
         $data2 = $this->database->getReference('/parameter/irrigation2')
         ->orderByKey()
         ->limitToLast(10)
         ->getSnapshot();
         $data_new2 = $data2->getValue();


        // dd($data_new1);


        return view('detail_view', [
            'data_new1' => $data_new1,
            'data_new2' => $data_new2
        ]);
    }


    public function setting()
    {
        $threshold = $this->database->getReference('/setting/threshold')
        ->orderByKey()
        ->getSnapshot();
        $data_threshold = $threshold->getValue();
        // dd($data_threshold);


        $data_relay = $this->database->getReference('/setting/relay')
        ->orderByKey()
        ->getSnapshot();
        $relay = $data_relay->getValue();


        return view('setting', [
            'data_threshold' => $data_threshold,
            'relay' => $relay
        ]);
    }



    public function edit_threshold_get($irrigation)
    {
        $humidity = $this->database->getReference('/setting/threshold/'.$irrigation.'/humidity')
        ->orderByKey()
        ->getSnapshot();
        $humidity = $humidity->getValue();

        $temperature = $this->database->getReference('/setting/threshold/'.$irrigation.'/temperature')
        ->orderByKey()
        ->getSnapshot();
        $temperature = $temperature->getValue();

        $soil_moisture = $this->database->getReference('/setting/threshold/'.$irrigation.'/soil_moisture')
        ->orderByKey()
        ->getSnapshot();
        $soil_moisture = $soil_moisture->getValue();
        // dd($data_threshold);

        return view('edit-threshold', [
            'irrigation' => $irrigation,
            'soil_moisture' => $soil_moisture,
            'humidity' => $humidity,
            'temperature' => $temperature,
        ]);
    }




    public function edit_threshold_post($irrigation, Request $request)
    {
        // dd($request->all());
          $data = [
            'humidity' => (int)$request->humidity,
            'soil_moisture' => (int)$request->soil_moisture,
            'temperature' => (int)$request->temperature,
        ];
        $this->database->getReference('/setting/threshold/'.$irrigation)->set($data);
        return redirect()->route('setting-hethong');

    }
}
