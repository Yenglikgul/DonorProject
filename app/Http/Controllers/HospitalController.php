<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use DB;

class HospitalController extends Controller
{
    public function show(Request $request){

        $data = $request->validate([
            'name' => ['max:255', 'string']
        ]);

        $hospitals_collection = Hospital::query();

        if(!empty($data['name'])){
            $hospitals_collection->where(DB::raw('LOWER(name)'), 'like', '%'.strtolower($data['name']).'%');
        }
        
        $hospitals = $hospitals_collection->paginate(2);

        return $hospitals;
    }

    public function create(Request $request){
        $hospital=Hospital::updateOrCreate(['name'=>$request->name, 'address'=>$request->address, 'storageID'=>$request->storageID, 'mapID'=>$request->mapID, 'connectionID'=>$request->connectionID]);
        return $hospital;
    }

    public function update(Request $request, $id){
        try{
            $hospital=Hospital::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $hospital->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $hospital = Hospital::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $hospital->delete();
        return response()->json('Successfully deleted', 204);
    }
}