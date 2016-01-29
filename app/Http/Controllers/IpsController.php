<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ip;
use App\Http\Requests\IpRequest;

class IpsController extends Controller
{
    public function index()
    {	
    	$ips = Ip::all()->toArray();
    	while($row = array_shift($ips)) {
             $json[] = $row['ip'];
       	}
     
       	$x = json_encode($json);
       	$s = json_decode($x);
    	//dd($s);
       	//$datos = Ip::where('ip', '=', $ip);
    	return view('ip.index')->with('ips', $s);
    }

    public function create($ip) 
    {
    	return view('ip.create')->with('ip', $ip);
    }

    public function edit($ip) 
    {
    	$datos = Ip::where('ip', '=', $ip)->get()->first();
   
    	return view('ip.edit')->with('datos', $datos);
    }

    public function store(IpRequest $request) 
    {
    	$datos = new Ip($request->all());	
    	$datos->save();

    	return redirect()->route('ip.index');
    }

    public function update(Request $request, $id)
    {
		$dato = Ip::find($id);
        $dato->fill($request->all());
        $dato->save();

        return redirect()->route('ip.index');
    }
	public function destroy($id)
    {
        $dato = Ip::find($id);

        $dato->delete();
       
        return redirect()->route('ip.index');
    } 

}
