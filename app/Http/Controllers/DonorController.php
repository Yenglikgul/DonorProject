<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{    
    public function show(){
        $donor=Donor::get();
        return $donor;
    }

    public function create(Request $request){
        $donor=Donor::updateOrCreate(['name'=>$request->name, 'BloodID'=>$request->BloodID]);
        return $donor;
    }

    public function update(Request $request, $id){
        try{
            $donor=Donor::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $donor->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $donor = Donor::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $donor->delete();
        return response()->json('Successfully deleted', 204);
    }
}