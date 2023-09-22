<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Variable;


class VariableTable extends DataTableComponent
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
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Measure", "measure")
                ->sortable(),
                Column::make('Actions')
                ->label(
                function ($row, Column $column) {
                    return view('variables.action',['variable'=>$row]);
                }
            )
        ];
    }
}
