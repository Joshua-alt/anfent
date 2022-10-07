<?php

namespace App\DataTables;

use App\Models\reunificcation;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use DataTables;
class ReuniDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {
        $reunificcation = reunificcation::select();
        return DataTables::eloquent($reunificcation)
        ->editColumn('action', function ($reunificcation) {
           return view('reunificcations.action')->with('reunificcation', $reunificcation );
           
        })
        ->editColumn('DateNais', function ($reunificcation) {
            return view('reunificcations.datenais')->with('reunificcation', $reunificcation );
    
         })
         ->editColumn('created_at', function ($reunificcation) {
            return view('reunificcations.dat')->with('reunificcation', $reunificcation );
    
         })->blacklist(['id','created_ad'])
        ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ReuniDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $reunificcation = reunificcation::select();

        return $this->applyScopes($reunificcation);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('reunidatatable-table')
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
            Column::make('NomEnf')->title('Nom'),
            Column::make('PostnomEnf')->title('Postnom'),
            Column::make('PrenomEnf')->title('Prenom'),
            Column::make('SexeEnf')->title('Sexe'),
            Column::make('LieuNais')->title('lieu de naissance'),
            Column::make('temoin')->title('Temoin'),
            Column::make('Autorite')->title('Autorite'),
            Column::make('Motifie')->title('Motifie'),
            Column::computed('DateNais')->title('Date de naissance'),
            Column::make('nomparent')->title('Nom de parent'),
            Column::make('idparent')->title('Id de parent'),
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
        return 'Reuni_' . date('YmdHis');
    }
}
