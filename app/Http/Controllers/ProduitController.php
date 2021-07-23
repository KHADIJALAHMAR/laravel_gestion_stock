<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $produit = produit::all();
         return view('produit',['produits' => $produit]);
    }
    public function create (){

      return view('create');
    }
    public function store(Request $request)
    {


        $request->validate([
            'name_product'=>'required',
            'descreption'=>'required',
            'prix'=>'required',
        ]);
        $query = DB::table('produit')->insert(
            [
                'name_product'=>$request->name_product,
                'descreption'=>$request->descreption,
                'prix'=>$request->prix
            ]);
            if ($query){
                return back()->with('success','Data have been succesfuly inserted');
            }else{
                return back()->with('fail','something went wrong ');
            }

    }
    public function edit($id){

        $produit =  produit::findOrFail($id);

        return view('edit',['produits' => $produit]);
       
    }
    public function delete($id)
    {
       
        $produit = produit::findOrFail($id);

        $produit->delete();

        return redirect(route('produit'));

    }
    public function update(Request $input)
    {
        
        
        $query= DB::table('produit')->where('id', $input->id)->update([
            'name_product'=>$input->name_product,
            'descreption'=>$input->descreption,
            'prix'=>$input->prix
        ]);
    

        return redirect(route('produit'));
        if ($query){
            return back()->with('success','oook');
        }else{
            return back()->with('fail','no  ');
        }
    
    
   
 
  
}
}
    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\produit  $produit
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(produit $produit)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\produit  $produit
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(produit $produit)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\produit  $produit
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, produit $produit)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\produit  $produit
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(produit $produit)
    // {

    //     //
    // }
    // public function hello ($name){
    //     return 'hello' .$name;
    // }

