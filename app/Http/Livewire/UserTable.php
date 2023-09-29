<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

use Livewire\Component;

class UserTable extends DataTableComponent
{
    protected $model = Variable::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
// sd
    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Password", "password")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
                Column::make('Actions')
                ->label(
                function ($row, Column $column) {
                    return view('users.action',['user'=>$row]);
                }
            )
        ];
    }
}
