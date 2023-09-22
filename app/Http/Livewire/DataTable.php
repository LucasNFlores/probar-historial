<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

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

                ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([

                    LinkColumn::make('View')
                        ->title(fn ($row) => 'Ver')
                        ->format(function ($value, $column, $row) {
                            return '
                                    <i title="Detalles"
                                    class="material-icons cursor-pointer ">visibility</i> View
';
                        })
                        ->location(fn ($row) => route('data.show', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn ($row) => 'Editar ')
                        ->location(fn ($row) => route('data.edit', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'target' => '_blank',
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                ]),
        ];
    }
}
