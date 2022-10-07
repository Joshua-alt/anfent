<?php

namespace App\DataTables;

use App\Models\enfant;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use DataTables;
class EnfantDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {
        $enfant = enfant::select();
        return DataTables::eloquent($enfant)
        ->editColumn('action', function ($enfant) {
           return view('enfants.action')->with('enfant', $enfant );
   
        })
        ->editColumn('DateNais', function ($enfant) {
            return view('enfants.datenais')->with('enfant', $enfant );
    
         })
         ->editColumn('created_at', function ($enfant) {
            return view('enfants.dat')->with('enfant', $enfant );
    
         })->blacklist(['id','created_ad'])
        ;
    
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EnfantDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $enfant = enfant::select();

        return $this->applyScopes($enfant);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('enfantdatatable-table')
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
            Column::make('id')->title('Id'),
            Column::make('NomEnf')->title('Nom'),
            Column::make('PostnomEnf')->title('Postnom'),
            Column::make('PrenomEnf')->title('Prenom'),
            Column::make('SexeEnf')->title('Sexe'),
            Column::make('LieuNais')->title('Lieu de naissance'),
            Column::make('Motifie')->title('Motifie'),
            Column::computed('DateNais')->title('Date de naissance'),
            Column::make('nomparent')->title('Nom de parent'),
            Column::make('idparent')->title('Id parent'),
            Column::computed('created_at')->title('Date de creation'),
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
        return 'Enfant_' . date('YmdHis');
    }
}
