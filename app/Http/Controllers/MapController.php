<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function show(){
        $map=Map::get();
        return $map;
    }

    public function create(Request $request){
        $map=Map::updateOrCreate(['coorX'=>$request->coorX, 'coorY'=>$request->coorY]);
        return $map;
    }

    public function update(Request $request, $id){
        try{
            $map=Map::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $map->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $map = Map::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $map->delete();
        return response()->json('Successfully deleted', 204);
    }
}