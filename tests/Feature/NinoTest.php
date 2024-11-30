<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Nino;
use App\Models\Tutor;

class NinoTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_all_children(): void
    {
        Nino::factory()->create(['nombre' => 'Juanito']);
        Nino::factory()->create(['nombre' => 'Pedro']);
        Nino::factory()->create(['nombre' => 'Maria']);

        $response = $this->get(route('ninos.index'));

        $response->assertStatus(200);

        $response->assertSee('Juanito');
        $response->assertSee('Pedro');
        $response->assertSee('Maria');
    }

    public function test_create_a_child(): void
    {
        $tutor = Tutor::factory()->create();

        $response = $this->post(route('ninos.store'), [
            'nombre' => 'Juanito',
            'fecha_nacimiento' => '2000-01-01',
            'tutor_id' => $tutor->id,
        ]);

        $response->assertRedirect(route('ninos.index'));

        $this->assertDatabaseHas('ninos', [
            'nombre' => 'Juanito',
            'fecha_nacimiento' => '2000-01-01',
            'tutor_id' => $tutor->id,
        ]);
    }

    public function test_update_child(): void
    {
        $nino = Nino::factory()->create();

        $response = $this->put(route('ninos.update', $nino->id), [
            'nombre' => 'Juanito Actualizado',
            'fecha_nacimiento' => '2000-02-02',
            'tutor_id' => $nino->tutor_id,
        ]);

        $response->assertRedirect(route('ninos.index'));

        $this->assertDatabaseHas('ninos', [
            'id' => $nino->id,
            'nombre' => 'Juanito Actualizado',
            'fecha_nacimiento' => '2000-02-02',
            'tutor_id' => $nino->tutor_id,
        ]);
    }

    public function test_delete_child(): void
    {
        $nino = Nino::factory()->create();

        $response = $this->delete(route('ninos.destroy', $nino->id));

        $response->assertRedirect(route('ninos.index'));

        $this->assertDatabaseMissing('ninos', [
            'id' => $nino->id,
        ]);
    }
}
