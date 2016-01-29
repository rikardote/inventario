<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ip;
use App\Http\Requests\IpRequest;
use Toastr;
use Laracasts\Flash\Flash;

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

		Toastr::success('Ip Asignada Correctamente');
    	return redirect()->route('ip.index');
    }

    public function update(Request $request, $id)
    {
		$dato = Ip::find($id);
        $dato->fill($request->all());
        $dato->save();
		//Toastr::success('Ip Actualizada Correctamente');
		Flash::success('Ip Actualizada Correctamente');
        return redirect()->route('ip.index');
    }
	public function destroy($id)
    {
        $dato = Ip::find($id);

        $dato->delete();
      	Toastr::error('Ip Liberada Correctamente');
        return redirect()->route('ip.index');
    } 

}
