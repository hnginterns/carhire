<?php


namespace App\Http\Controllers;
 use App\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        //

        return view('partials.add-car');

    }

    /**
     * Store a newly created resource in storage.
     *

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Car $car)
    {
       

     $this->validate($request, $this->rules());
        
      if ($request->hasFile('image'))    
        {
            $file = $request->file('image');

            $destinationPath = public_path(). '/images/cars/';
            $filename = $this->getImageName();

            $file->move($destinationPath, $filename);
            $car->image= $filename;  
        }
         $car->driver_id = 1;
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->car_price = $request->input('car_price');


                if ($car->save()){
            return redirect()->back()->with('data', 'Car instance added successfully');
        }
    }
        


  

    /**
     * Display the specified resource.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response

     * @return Response

     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response

     * @return Response

     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *

     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
        //
     }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response

     * @return Response

     */
    public function destroy($id)
    {
        //
    }


    public function rules(){
          return [
            'brand'=>'required',
            'model'=>'required',
            'car_price'=>'required',
            'image'=>'image',
        ];
    }


      public function getImageName()
    {
        return  md5(uniqid(rand(0, 1000), TRUE))."-".date('d-m-Y-H-i-s', time()).'.jpg';
    }


}
