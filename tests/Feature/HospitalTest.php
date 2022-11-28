<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HospitalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }


    public function test_204(){
        $response=$this->delete('http://127.0.0.1:8000/api/deleteHospital/8');
        $response->assertStatus(204);
    }

    public function test_404(){
        $response=$this->delete('http://127.0.0.1:8000/api/deleteHospital/2');
        $response->assertStatus(404);
    }

    public function test_create_hospital_success(){
        $response=$this->delete('http://127.0.0.1:8000/api/createHospital/8');
        $response->assertStatus(201);
    }

    public function test_500(){
        $response=$this->delete('http://127.0.0.1:8000/api/deleteHospital/8');
        $response->assertStatus(500);
    }

    public function test_200(){
        $response=$this->delete('http://127.0.0.1:8000/api/showHospital');
        $response->assertStatus(200);
    }
}
