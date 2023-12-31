<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;


use App\Models\Data;

class DataTable extends DataTableComponent

{
    protected $model = Data::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Value", "value")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
                Column::make('Actions')
                ->label(
                function ($row, Column $column) {
                    return view('datas.action',['data'=>$row]);
                }
            )

        ];
    }
}
