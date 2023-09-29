<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;



class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
// sd
    public function columns(): array
    {
        return [
            Column::make("Id", "id")
            ->sortable(),
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
