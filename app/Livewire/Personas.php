<?php

namespace App\Livewire;

use App\Models\Persona;
use Livewire\Component;
use Livewire\WithPagination;

use function Psy\debug;

class Personas extends Component
{
    use WithPagination;
    public bool $deletePersonaModal = false;
    public $nombre, $apellido, $persona_id, $search;
    public $updateMode = false;
    public $confirmingItemDeletion = false;
    public function confirmItemDeletion( $id) 
    {
        $this->confirmingItemDeletion = $id;
    }
    public function render()
    {
        $personas  = Persona::where('nombre', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(5);
        //$personas  = Persona::all();
        return view('livewire.persona.personas', ['personas' => $personas]);
    }
    private function resetInputFields(){
        $this->nombre = '';
        $this->apellido = '';
    }
   
    public function store()
    {
        $validatedDate = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
  
        Persona::create($validatedDate);
  
        session()->flash('message', 'Persona Created Successfully.');
  
        $this->resetInputFields();
        $this->dispatch('close-modal');
    }
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        $this->persona_id = $id;
        $this->nombre = $persona->nombre;
        $this->apellido = $persona->apellido;
        $this->dispatch("open-edit");
    }

    public function closeModal()
    {
        $this->resetInputFields();
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
  
        $persona = Persona::find($this->persona_id);
        $persona->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Persona Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Persona::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
