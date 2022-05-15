<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentForm extends Component
{
    public  $name, $email, $mobile, $student_id,$satut;


    public function submit() {
        $this->validate([
            'name' => 'required|unique:students|max:255',
            'email' => 'required',
            'mobile' => 'required',
        ]);
          //dd($this->students->all());

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'mobile' => $this->mobile,
      
        ]);    
}
    

    public function render()
    {
        return view('livewire.student-form');
    }
}
