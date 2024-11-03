<?php

namespace App\Livewire;

use App\Models\Human;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;

    public $search = '';

    // Reset the page when the search term is updated
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchResults = Human::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('education', 'like', '%' . $this->search . '%')
            ->orWhere('organization2', 'like', '%' . $this->search . '%')
            ->orWhere('country', 'like', '%' . $this->search . '%')
            ->orWhere('motivation', 'like', '%' . $this->search . '%')
            ->orWhere('fb_url', 'like', '%' . $this->search . '%')
            ->orWhere('Area_of_experties', 'like', '%' . $this->search . '%')
            ->orWhere('working_interest', 'like', '%' . $this->search . '%')
            ->orWhere('job', 'like', '%' . $this->search . '%')
            ->orWhere('fb_post', 'like', '%' . $this->search . '%')
            ->paginate(20); // Paginate 20 items per page

        return view('livewire.search-component', [
            'searchResults' => $searchResults
        ]);
        
        // return view('home', [
        //     'searchResults' => $searchResults
        // ]);
    }
}
