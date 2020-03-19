<?php

namespace App\DataTables;

use App\Models\ProductsStock;

class ProductsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('product', function(ProductsStock $model) {
               return $model->product->name;
            })
            ->addColumn('price', function(ProductsStock $model) {
                return $model->product->price;
            })
            ->addColumn('stock', function(ProductsStock $model) {
                return $model->stock;
            })
            ->addColumn('features', function(ProductsStock $model) {
                $strFeatures = "";
                $model->features->map( function( $v ) use (&$strFeatures) {
                    $strFeatures .= $v->feature->name . ':' . $v->value . ';';
                });

                return $strFeatures;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ProductsStock $model)
    {
        return $model->newQuery()
            ->with(['product','features', 'features.feature'])
            ->select(['id', 'product_id', 'stock'])
            ->get();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns());
    }

    /**
     * Get columns.
     *
     * @return array
     */
//    protected function getColumns()
//    {
//        return [
//            'tax_account.process_code' => [
//                'title' => 'CP'
//            ],
//            'tax_account.account_name' => [
//                'title' => 'Cuenta'
//            ],
//            'receipt.folioValue' => [
//                'title' => 'Folio'
//            ],
//            'receipt.receipt_date' => [
//                'title' => 'Fecha'
//            ],
//            'value' => [
//                'title' => 'Valor'
//            ]
//        ];
//    }


}
