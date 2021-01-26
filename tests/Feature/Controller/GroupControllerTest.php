<?php

namespace Tests\Feature\Controller;

use App\Models\Group;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GroupControllerTest extends TestCase
{
    //use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexMethodExpetedAllResults()
    {
        Group::factory(10)->create();
        $response = $this->get('/api/groups');
        $response->assertStatus(200);
        $response->assertJsonCount(10);
        $response->assertJsonStructure([
        '*' => [
            'id',
            'name',
            'cnpj',
            'active',
            'created_at',
            'updated_at'
        ]
    ]);
}

public function testStoreMethodWithExpetedSuccessReult()
{
    $data = [
        'code' => 200,
        'name' => 'FBS Sistemas',
        'cnpj' => '86.714.220/0001-00',
        'active' => 1
    ];
    $response = $this->post('/api/groups', $data);
    $response-> assertStatus(201);
}

}
