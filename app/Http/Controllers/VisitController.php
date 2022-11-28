<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitController extends Controller
{
    //
    public function show(){
        $visit=Visit::get();
        return $visit;
    }

    public function create(Request $request){
        $visit=Visit::updateOrCreate(['name'=>$request->name, 'hospitalID'=>$request->hospitalID, 'donorID'=>$request->donorID, 'VisitDate'=>$request->VisitDate]);
        return $visit;
    }

    public function update(Request $request, $id){
        try{
            $visit=Visit::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $visit->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $visit = Visit::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $visit->delete();
        return response()->json('Successfully deleted', 204);
    }
}
