<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;

class ConnectionController extends Controller
{
    public function show(){
        $connection=Connection::get();
        return $connection;
    }

    public function create(Request $request){
        $connection=Connection::updateOrCreate(['phone'=>$request->phone, 'webSite'=>$request->webSite, 'email'=>$request->email]);
        return $connection;
    }

    public function update(Request $request, $id){
        try{
            $connection=Connection::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $connection->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $connection = Connection::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $connection->delete();
        return response()->json('Successfully deleted', 204);
    }
}