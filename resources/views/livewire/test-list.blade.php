<div class="flex flex-col items-start">

    <button class="flex mx-auto">
        Yak had create student
    </button>

    {{-- // Daba wach ma3rftich hadi route('ajouter-etudiant') ,.3rfthaa, o 3lach mnin jit lguitk 
        Dayra href fost mn <button>  ?
        Wach button kandiro liha href? nn
        o lach dayraha ? 3tini hir sabab wahd 3lach dayra href f button 
        "3afak 3lach sditi b button", hadik hir nsitha ana 3ndi f vscode auto close tags
        Kadir <a f lowl automatiquement kayktb lik a f lekher 
        Daba 3lach drti href f button ? ma3rftch
        Ana angolik 3lach, mnin makatkhdmch lik chi haja katbday tjrbi n'importe quoi bla 
        mat3rfi ach kadiri. o hadchi rah makhdamch.wlah hi5liha 3la lah hadchi mrdnii
        Wa nti kayna f wahd l hfra o katzidi tghrqi f rask, Chdi HTML T7niha 3rfi ach kadiri 
        Qbel madozi tester tma f tailwind ola livewire
        Rah bhal had akhta2 rah unacceptable, ayji wahd ichofk dara href f button aydhek 3lik
        oui c vrai,
        3lach katba "/ajout" nichan f href ? finahwa dak spa 
        F spa drti ->name("listBlog") f web.php o f href drti route("listBlog")
        Top mziana
        Mais 3lach madrtihach hna ? rah tlfni livewiree rah ndirha hi baki ma3rfa rassi man rjliya
        Rah hadi mn bin akbar machakil li kanlhadhom fik
        Wa hwa mnin katstressay katbqay ha katjrbi o kadiri makat3rfich ach kadiri.
        Kanji kandkhel kanlga chi haja dertiha mziaan fach knti khdama fiha 3la khatrk 
        O fost deght ola stress makat3rfich diriha ola kadiriha mgloba.ouii kaynna 
    --}} 
    <a href="/test-student" class="flex mx-auto p-4 my-7 w-content rounded-md
     bg-red-500 text-white shadow-sm hover:bg-indigo-700 transition-all">zakriaaaaa</a>

    

     <a href="/test-student" class=" btn btn-blue">zakriaaaaa</a>

     <a href="{{ url('test-student') }}" class="flex mx-auto p-4 my-4 w-content rounded-md
     bg-indigo-500 text-white shadow-sm hover:bg-indigo-700 transition-all">create</a>


  

  {{-- chofi d7ka li kanti dayra
    <a href="/ajout">iccccccccccccccccci</a>
    <button onclick="addContact() ='/ajout'">Cliquez Ici</button>
        --}} 


    @foreach ($students as $student)
        {{ $student->name }}
        {{ $student->email }}
    @endforeach

</div>
