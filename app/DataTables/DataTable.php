<?php

namespace App\DataTables;

use Illuminate\Support\Arr;

/**
 * Class DataTable
 *
 * Personalize Datatable service behaviour for our app.
 *
 * @package App\DataTables
 */
class DataTable extends \Yajra\DataTables\Services\DataTable
{
    /**
     * List of columns to be excluded from numeric columns.
     * @var array
     */
    protected $excludingNumericColumns = [];

    /**
     * Process dataTables needed render output as json.
     *
     * @return mixed
     */
    public function json()
    {
        if ($action = $this->request()->get('action') and in_array($action, $this->actions)) {
            if ($action == 'print') {
                return app()->call([$this, 'printPreview']);
            }

            return app()->call([$this, $action]);
        }

        if ($this->request()->wantsJson()) {
            return app()->call([$this, 'ajax']);
        }

        return response()->json();
    }

    /**
     * Display printable view of datatables.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function printPreview()
    {
        $data = $this->getDataForPrint();

        $title = 'Print table';
        $description = '';
        $headerTitle = '';
        $excludingNumericColumns = $this->excludingNumericColumns;

        return view($this->printPreview, array_merge(compact(
            'data',
            'title',
            'description',
            'headerTitle',
            'excludingNumericColumns'
        ), array_except($this->mergeData(), 'data')));
    }

    /**
     * Data to be included in the view.
     *
     * @return array
     */
    protected function mergeData()
    {
        return [];
    }

    /**
     * Format number to thousands as points and no decimals.
     *
     * @param mixed $number
     * @return string
     */
    protected function formatNumber($number)
    {
        return number_format($number, 0, ',', '.');
    }

    protected function getExportableColumns()
    {
        $columns = $this->getColumns();

        return Arr::where($columns, function ($column) {
            return $column['exportable'] == 'true';
        });
    }

    protected function getFilters()
    {
        return $this->request()->get('filters', null);
    }
}
