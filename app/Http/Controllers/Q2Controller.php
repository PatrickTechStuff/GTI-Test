<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesTbl;

class Q2Controller extends Controller
{
    public function show()
    {
      
        
            $table = SalesTbl::all();
           
            return view('pages.Q2Show',[
                'table' => $table
            ]);
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Q2Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newData = new SalesTbl;
        $newData->SalesPerson =  $request->SalesPerson;
        $newData->Item1 =  $request->Item1;
        $newData->Item2 =  $request->Item2;
        $newData->Item3 =  $request->Item3;
        $newData->Total =  $newData->Item1 + $newData->Item2 + $newData->Item3;
        $newData->save();

        return redirect('/Q2');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edititem = SalesTbl::find($id);
        return view('pages.Q2Edit',[
            'edititem' => $edititem
        ]);
       
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
        $updateitem = SalesTbl::find($id);
        $updateitem->SalesPerson =  $request->SalesPerson;
        $updateitem->Item1 =  $request->Item1;
        $updateitem->Item2 =  $request->Item2;
        $updateitem->Item3 =  $request->Item3;
        $updateitem->Total =  $updateitem->Item1 + $updateitem->Item2 + $updateitem->Item3;
        $updateitem->save();

        return redirect('/Q2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteitem = SalesTbl::find($id);
        $deleteitem->delete();
        return redirect('/Q2');
        //
    }
}
