<?php

namespace App\Livewire;

use App\Models\Estudent;
use Livewire\Component;

class Estudiantes extends Component
{
    public $nombre, $apellido, $persona_id, $search;
    public function render()
    {
        $estudiantes  = Estudent::where('nombre', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(5);
        //$personas  = Persona::all();
       //return view('livewire.persona.personas', ['personas' => $personas]);
        return view('livewire.estudiantes.estudiantes' , ['estudiantes' => $estudiantes]);
    }
}
