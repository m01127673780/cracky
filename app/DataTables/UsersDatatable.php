<?php
namespace App\DataTables;
use App\User;
use Yajra\DataTables\Services\DataTable;

class UsersDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */

    public function dataTable($query) {
        return datatables($query)
            ->addColumn('checkbox', 'back.users.btn.checkbox')
            ->addColumn('edit', 'back.users.btn.edit')
            ->addColumn('delete', 'back.users.btn.delete')
            ->addColumn('show', 'back.users.btn.show')
            ->addColumn('level', 'back.users.btn.level')
            ->rawColumns([
                'checkbox',
                'edit',
                'delete',
                'show',
                'level'
            ]);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Admin $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return User::query()->where(function ($q)
        {
            if(request()->has('level'))
            {
                return $q->where('level',request('level'));
            }//if
        });//$q
    }//query

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
          //  ->addAction(['width' => '80px'])
            // ->parameters($this->getBuilderParameters());
            ->parameters([
                'dom'=>'Blfrtip',
                'lengthMenu'=>[[5,10,25,50,100,-1],[5,10,25,50,trans('admin.all_record')]],

                'buttons'=>[
                    [ 'text'=>'<i class="fa fa-trash"></i>','className'=>'btn btn-danger delBtn'],

                    ['text' => '<i class="fa fa-user-plus"></i> ' .trans('admin.create_user'), 'className' => 'btn btn_crete_new_row_users btn-info'],


							


                    datatable_buttons_include(),
                ]
              ,//buttons
                    'initComplete'=>" function () {
                    this.api().columns([2,1,3]).every(function () {
                    var column = this;
                    var input = document.createElement(\"input\");
                    $(input).appendTo($(column.footer()).empty())
                    .on('keyup', function () {
                    column.search($(this).val(), false, false, true).draw();
                    });
                    });
                    }",
              'language'=>datatable_lang(),

            ]);//parameters
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            [
                'name'       => 'checkbox',
                'data'       => 'checkbox',
                'title'      => '<input type="checkbox" class="check_all" onclick="check_all()" />',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ], [
                'name'  => 'name',
                'data'  => 'name',
                'title' => trans('admin.name'),
            ], [
                'name'  => 'email',
                'data'  => 'email',
                'title' => trans('admin.email'),
            ], [
                'name'  => 'level',
                'data'  => 'level',
                'title' => trans('admin.level'),
            ], [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => trans('admin.created_at'),
            ], [
                'name'  => 'updated_at',
                'data'  => 'updated_at',
                'title' => trans('admin.updated_at'),
            ], [
                'name'       => 'edit',
                'data'       => 'edit',
                'title'      => trans('admin.edit'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],[
                'name'       => 'delete',
                'data'       => 'delete',
                'title'      => trans('admin.delete'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],[
                'name'       => 'show',
                'data'       => 'show',
                'title'      => trans('admin.show'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
