<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Student;

class Crud extends Component
{
    public $students, $name, $email, $mobile, $student_id;
    public $edit;
    public $isModalOpen = 0;
    public $create;
    public $action;
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.crud');
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover('create');
    }
    public function openModalPopover($action)
    {
        $this->action = $action;
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);
        session()->flash('message', $this->student_id ? 'Student updated.' : 'Student created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $this->openModalPopover('edit');

        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->mobile = $student->mobile;


    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
