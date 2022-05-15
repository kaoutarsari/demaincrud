<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Student;

class ListStudent extends Component
{

    public function mount(){
     
        $this->liststudents();
    }


    public function liststudents()
    {
        $students = Student::get();
        $this->students = $students;
    }


    public function render()
    {
        return view('livewire.list-student');
    }


}
