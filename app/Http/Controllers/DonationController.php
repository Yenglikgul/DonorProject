<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function show(){
        $donation=Donation::get();
        return $donation;
    }

    public function create(Request $request){
        $donation=Donation::updateOrCreate(['acceptanceStatus'=>$request->acceptanceStatus, 'donationCode'=>$request->donationCode]);
        return $donation;
    }

    public function update(Request $request, $id){
        try{
            $donation=Donation::findOrFail($id);
        }
        catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $donation->update(['name'=>$request->name]);
        return response()->json('Successfully updated', 201);
    }

    public function delete($id){
        try{
            $donation = Donation::findOrFail($id);
        } catch(\Exception $exception){
            throw new NotFoundException('not found');
        }
        $donation->delete();
        return response()->json('Successfully deleted', 204);
    }
}