<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Crud extends Component
{
    public  $name, $email, $mobile, $student_id,$satut;
    public $edit;
    public $isModalOpen = 0;
    public $create ;
    public $action;
    public $show;
    use WithPagination;

    public $searchTerm = '';

   public $sortBy;
   public $sortDirection ='asc';

    protected $listeners =[

        'refreshlist' => '$refresh',

   ];

   public function mount()
   {
       $this->sortField = 'name';
       $this->sortAsc = true;
   }

   public function updatingsearchTerm()
   {
       $this->resetPage();
   }

  
   public function sortBy($field){
    if ($this->sortDirection =='asc'){
        $this ->sortDirection ='desc';

    }
    else{
        $this->sortDirection ='asc';
    }
    return $this ->sortBy = $field;
}


public function render()
{
    $searchTerm = '%'.$this->searchTerm.'%';
    return view('livewire.crud',[
        'students' => Student::latest()->where('name','like', $searchTerm)
            ->orWhere('email','like', $searchTerm)
            ->paginate(5)
    ]);
}

 public function closeModal(){
    $this->isModalOpen =false;

}


  
    public function create()
    {
        $this->show = true;
        $this->edit = true;
        $this->resetCreateForm();
      //  $this->openModalPopover('create');
        $this->isModalOpen =true;
        
    }


    public function edit($id)
    {

        $this->show = true;
        $this->edit = true;
      //  $this->openModalPopover('edit');
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->mobile = $student->mobile;
        $this->satut = $student->satut;
        $this->emit('refreshlist');  
        $this->isModalOpen =true;


    }

    public function show($id){


        $this->show = false;
        $this->edit = false;
       // $this->openModalPopover('show');
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->mobile = $student->mobile;
        $this->satut = $student->satut;
        $this->isModalOpen =true;


    }

/*
    public function openModalPopover($action)
    {
        $this->action = $action;
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    */
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:students|max:255',
            'email' => 'required',
            'mobile' => 'required',
            'satut' => 'required',
        ]);
          //dd($this->students->all());

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'mobile' => $this->mobile,
            'satut' => $this->satut,    
      
        ]);
    

        //session()->flash('message', $this->student_id ? 'Student updated.' : 'Student ajout avec success.');

          // Set Flash Message
              $this->dispatchBrowserEvent('alert', [
             'type' => 'success',
             'message' => $this->student_id ? 'Contact modifier avec success' : 'Contact ajouter avec success'
             ]);

        $this->emit('refreshlist');  
        $this->closeModalPopover();
        $this->resetCreateForm();

    }
  

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
        $this->emit('refreshlist');  

    }





    
}
