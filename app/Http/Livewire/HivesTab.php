<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Hive;

class HivesTab extends DataTableComponent
{
    protected $model = Hive::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            
            // Column::make('Actions')
            //     ->format(function ($value, $column, $row) {
            //         return view('apiaries.apiary.action', ['apiary' => $row]);
            //     })
            Column::make('Actions')
                ->label(
                function ($row, Column $column) {
                    return view('hives.action',['hive'=>$row]);
                }
            )
        ];
    }
}
