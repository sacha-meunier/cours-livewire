<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Account;
use Livewire\WithPagination;

class OrganizationsTable extends Component
{
    use WithPagination;

    public $account;

    public function mount()
    {
        $this->account = Account::whereName('Acme Corporation')->first();
    }

    #[Computed]
    public function organizations()
    {
        return $this->account
            ->organizations()
            ->orderBy('name')
            ->paginate(10);
    }
}
