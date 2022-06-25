<?php

namespace App\Http\Livewire;

use App\Models\Equipment;
use Livewire\Component;
use Livewire\WithPagination;

class NetworksLivewire extends Component
{
    public $name, $ip, $mac, $type;

    use WithPagination;

    protected string $paginationTheme = 'bootstrap';
    public string $search = '';
    protected $queryString = [
        'search' => ['except' => '']
    ];

    protected $rules = [
        'name' => 'required|min:3',
        'ip' => 'required|min:3',
        'mac' => 'nullable|min:11',
        'type' => 'required'
    ];

    private function resetInputField()
    {
        $this->name = '';
        $this->ip = '';
        $this->mac = '';
        $this->type = '';
    }

    public function save()
    {
        $this->validate();

        Equipment::create([
            'name' => $this->name,
            'ip' => $this->ip,
            'mac' => $this->mac,
            'type' => $this->type
        ]);

        $this->resetInputField();
        return $this->emit('close_modal_create');
    }

    public function edit(int $id)
    {
        $equipment = Equipment::find($id);
        $this->name = $equipment->name;
        $this->ip = $equipment->ip;
        $this->mac = $equipment->mac;
        $this->type = $equipment->type;
    }

    public function update(int $id)
    {
        $this->validate();

        Equipment::find($id)->update([
            'name' => $this->name,
            'ip' => $this->ip,
            'mac' => $this->mac,
            'type' => $this->type
        ]);

        $this->resetInputField();
        return $this->emit('close_modal_edit');
    }

    public function delete(int $id)
    {
        if ($id) {
            $equipment = Equipment::find($id);
            $equipment->delete();
        }

        return $this->emit('close_modal_delete');
    }

    public function render()
    {
        return view('livewire.networks', [
            'equipments' => Equipment::where(function ($query) {
                $query->orWhere('name', 'LIKE', "%$this->search%")
                    ->orWhere('ip', 'LIKE', "%$this->search%")
                    ->orWhere('mac', 'LIKE', "%$this->search%");
            })
        ->paginate(8)
        ]);
    }
}
