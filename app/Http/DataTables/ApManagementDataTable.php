<?php

namespace App\Http\DataTables;

use App\Models\ApManagement;
use Redbastie\Crudify\Traits\BuildsTables;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ApManagementDataTable extends DataTable
{
    use BuildsTables;

    protected $model = ApManagement::class;

    public function dataTable($query)
    {
        return $this->dataTables($query)->editColumn('action', 'ap-managements.action');
    }

    public function query(ApManagement $apManagement)
    {
        return $apManagement->newQuery();
    }

    public function html()
    {
        return $this->tableBuilder()->orderBy(0, 'desc');
    }

    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')->title(''),
        ];
    }
}
