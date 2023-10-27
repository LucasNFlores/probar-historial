<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Apiary;
use App\Http\Livewire\Builder;


class ApiaryTable extends DataTableComponent
{
    protected $model = Apiary::class;


    // public function mount($model)
    // {
    //     $this->model = $model;
    // }

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
            Column::make("Location", "location")
                ->sortable(),
            Column::make("Latitude", "latitude")
                ->sortable(),
            Column::make("Longitude", "longitude")
                ->sortable(),
            Column::make("User", "user_id")
                ->sortable(),
            // Column::make('Actions')
            //     ->format(function ($value, $column, $row) {
            //         return view('apiaries.apiary.action', ['apiary' => $row]);
            //     })
            Column::make('Actions')
                ->label(
                function ($row, Column $column) {
                    return view('apiaries.action',['apiary'=>$row]);
                }
            )


        ];

    }
    // public function builder(): Builder
    // {
    //     return Apiary::query()->where('user_id','==',12)->get();
    // }

}
