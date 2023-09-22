<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

use App\Models\Device;


class DeviceTable extends DataTableComponent
{
    protected $model = Device::class;

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
            Column::make("Functionality", "functionality")
                ->sortable(),
            Column::make("State", "state")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
                Column::make('Actions')
                ->label(
                function ($row, Column $column) {
                    return view('devices.action',['device'=>$row]);
                }
            )
        ];
    }
}
