<?php

namespace App\DataTables;

use App\Models\ListsParents;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use DataTables;
class ParentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {
        $ListsParents = ListsParents::select();
        return DataTables::eloquent($ListsParents)
        ->editColumn('action', function ($ListsParents) {
           return view('lists_parents.action')->with('listsParents', $ListsParents );
   
        })
        ->editColumn('created_at', function ($ListsParents) {
            return view('lists_parents.dat')->with('listsParents', $ListsParents );
    
         })->blacklist(['id','created_ad'])
        ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ParentDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $ListsParents = ListsParents::select();

        return $this->applyScopes($ListsParents);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('parentdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('excel'),
                        Button::make('print'),

                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
          
            Column::make('id'),
            Column::make('NomPar')->title('Nom'),
            Column::make('PostnomPar')->title('Postnom'),
            Column::make('PrenomPar')->title('Prenom'),
            Column::make('AdressePar')->title('Adresse'),
            Column::computed('created_at'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Parent_' . date('YmdHis');
    }
}
