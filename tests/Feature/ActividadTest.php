<?php

namespace Tests\Feature;

use App\Models\Actividad;
use App\Models\Nino;
use App\Models\TipoActividad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActividadTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_all_activities(): void
    {
        $nino = Nino::factory()->create();
        TipoActividad::factory()->create(['nombre' => 'Deporte']);
        TipoActividad::factory()->create(['nombre' => 'Arte']);

        Actividad::factory()->create([
            'nino_id' => $nino->id,
            'tipo_actividad_id' => 1,
            'descripcion' => 'Fútbol',
            'fecha' => '2024-01-01',
        ]);

        Actividad::factory()->create([
            'nino_id' => $nino->id,
            'tipo_actividad_id' => 2,
            'descripcion' => 'Pintura',
            'fecha' => '2024-02-01',
        ]);

        $response = $this->get(route('actividades.index'));

        $response->assertStatus(200);

        $response->assertSee('Fútbol');
        $response->assertSee('Pintura');
    }

    public function test_create_activity(): void
    {
        $nino = Nino::factory()->create();
        $tipoActividad = TipoActividad::factory()->create();

        $response = $this->post(route('actividades.store'), [
            'nino_id' => $nino->id,
            'tipo_actividad_id' => $tipoActividad->id,
            'descripcion' => 'Fútbol',
            'fecha' => '2024-01-01',
        ]);

        $response->assertRedirect(route('actividades.index'));

        $this->assertDatabaseHas('actividades', [
            'nino_id' => $nino->id,
            'tipo_actividad_id' => $tipoActividad->id,
            'descripcion' => 'Fútbol',
            'fecha' => '2024-01-01',
        ]);
    }

    public function test_update_activity(): void
    {
        $actividad = Actividad::factory()->create();

        $response = $this->put(route('actividades.update', $actividad->id), [
            'nino_id' => $actividad->nino_id,
            'tipo_actividad_id' => $actividad->tipo_actividad_id,
            'descripcion' => 'Fútbol actualizado',
            'fecha' => '2024-02-01',
        ]);

        $response->assertRedirect(route('actividades.index'));

        $this->assertDatabaseHas('actividades', [
            'id' => $actividad->id,
            'descripcion' => 'Fútbol actualizado',
            'fecha' => '2024-02-01',
        ]);
    }

    public function test_delete_activity(): void
    {
        $actividad = Actividad::factory()->create();

        $response = $this->delete(route('actividades.destroy', $actividad->id));

        $response->assertRedirect(route('actividades.index'));

        $this->assertDatabaseMissing('actividades', [
            'id' => $actividad->id,
        ]);
    }
}
