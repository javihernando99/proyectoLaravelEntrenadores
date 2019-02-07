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
     * @test
     */
    public function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
            ->assertSee('usuarios');

    }

    function it_loads_the_users_details_page(){
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee("Mostrando detalle del usuario: 5 ");
    }
    function it_loads_the_new_users_page(){
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee("Crear nuevo usuario");
    }
}
