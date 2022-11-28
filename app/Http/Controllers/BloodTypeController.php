<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodType;

class BloodTypeController extends Controller
{
    //
    public function show(){
        $bloodType=BloodType::get();
        return $bloodType;
    }

    public function create(Request $request){
        $bloodType=BloodType::updateOrCreate(['name'=>$request->name, 'rhFactor'=>$request->rhFactor]);
        return $bloodType;
    }

    public function update(Request $request, $id){
        try{
            $bloodType=BloodType::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $bloodType->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $bloodType = BloodType::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $bloodType->delete();
        return response()->json('Successfully deleted', 204);
    }
}