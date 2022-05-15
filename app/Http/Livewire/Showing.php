<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Showing extends Component
{

public $student;

public function mount($id){

$this->student = Student::where('id',$id)->firstOrFail();

}



    public function render()
    {
        return view('livewire.showing');
    }



}
