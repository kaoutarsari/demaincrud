<?php

namespace App\Http\Livewire;
use App\Models\Student;
use Livewire\Component;

class TestList extends Component
{

    public $name;
    public $email;
    public $mobile;
    public $satut;

    /*
    public function addContact()
    {
        $this->validate([
            'name' => 'required|unique:students|max:255',
      
        ]);
          //dd($this->students->all());

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
           
      
        ]);
    
        return redirect()->to('/student-form');

    }
  */

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
        return view('livewire.test-list');
    }




}
