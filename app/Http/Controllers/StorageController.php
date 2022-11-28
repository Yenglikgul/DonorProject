<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;

class StorageController extends Controller
{
    //
    public function show(){ 
        $storage=Storage::get(); 
        return $storage; 
    } 
 
    public function create(Request $request){ 
        $storage=Storage::updateOrCreate(['name'=>$request->name]); 
        return $storage; 
    } 
 
    public function update(Request $request, $id){ 
        try{ 
            $storage=Storage::findOrFail($id); 
        } 
        catch(\Exception $exception){ 
            throw new NotFoundException('not found'); 
        } 
        $storage->update(['name'=>$request->name]); 
        return response()->json('Successfully updated', 201); 
    } 
 
    public function delete($id){ 
        try{ 
            $storage = Storage::findOrFail($id); 
        } catch(\Exception $exception){ 
            throw new NotFoundException('not found'); 
        } 
        $storage->delete(); 
        return response()->json('Successfully deleted', 204); 
    }
}
