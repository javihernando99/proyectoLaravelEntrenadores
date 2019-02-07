<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');
    }
    /**
     * @test
     */
    function it_loads_the_users_details_page(){
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario: 5');
    }

    /**
     * @test
     */
    function it_loads_the_new_users_page(){
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('crear nuevo usuario');
    }
    function test(){
     $this->get('/usuarios/5/edit')
     ->assertStatus(200)
     ->assertSee('editando usuario 5');
    }
}
