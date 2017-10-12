<?php

<<<<<<< HEAD
namespace App\Http\Controllers;
 use App\Car;
=======
namespace App\Http\Controllers\Api\v1;

>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
<<<<<<< HEAD
     * @return \Illuminate\Http\Response
=======
     * @return Response
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
<<<<<<< HEAD
     * @return \Illuminate\Http\Response
=======
     * @return Response
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
     */
    public function create()
    {
        //
<<<<<<< HEAD
        return view('partials.add-car');
=======
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
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
        

=======
     * @return Response
     */
    public function store()
    {
        //
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
<<<<<<< HEAD
     * @return \Illuminate\Http\Response
=======
     * @return Response
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
<<<<<<< HEAD
     * @return \Illuminate\Http\Response
=======
     * @return Response
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
=======
     * @param  int  $id
     * @return Response
     */
    public function update($id)
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
<<<<<<< HEAD
     * @return \Illuminate\Http\Response
=======
     * @return Response
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
     */
    public function destroy($id)
    {
        //
    }
<<<<<<< HEAD

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
=======
>>>>>>> b2a002c403b96ead2fa08ddc49b4969f91799b22
}
