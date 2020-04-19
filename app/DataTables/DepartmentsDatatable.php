<?php
namespace App\DataTables;
use App\Model\Department;
use Yajra\DataTables\Services\DataTable;

class DepartmentsDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */

    public function dataTable($query) {
        return datatables($query)
            // ->addColumn('checkbox', 'back.departments.btn.checkbox')
            ->addColumn('edit', 'back.departments.btn.edit')
             ->addColumn('add_poroduct', 'back.departments.btn.add_poroduct')
            // ->addColumn('delete', 'back.departments.btn.delete')
            ->addColumn('show', 'back.departments.btn.show')
            ->addColumn('image', 'back.departments.btn.image')
            ->rawColumns([
                // 'checkbox',
                 'add_poroduct',
                'edit',
                // 'delete',
                'show',
                'image'
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
        return Department::query()->where(function ($q)
        {
            if(request()->has('id'))
            {
                return $q->where('id',request('id'));
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
                'lengthMenu'=>[[10,25,50,100,-1],[10,25,50,trans('admin.all_record')]],

                'buttons'=>[
                    // [ 'text'=>' <i class="fa fa-trash"></i> ','className'=>'btn btn-danger delBtn'],

                    // ['text' => '</i><i class="fa fa-plus"></i> ' .trans('admin.create_new_departments').'<i class="fa fa-flag-checkered"> ', 'className' => 'btn 
                    // btn_crete_new_row_departments btn-info'],


                            


                    datatable_buttons_include(),
                ]
              ,//buttons
                    'initComplete'=>" function () {
                    this.api().columns([2,1]).every(function () {
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
            // [
            //     'name'       => 'checkbox',
            //     'data'       => 'checkbox',
            //     'title'      => '<input type="checkbox" class="check_all" onclick="check_all()" />',
            //     'exportable' => false,
            //     'printable'  => false,
            //     'orderable'  => false,
            //     'searchable' => false,
            // ],
             [
                'name'  => 'id',
                'data'  => 'id',
                'title' => '#',
            ],[
                'name'  => 'dep_name_'.session('lang'),
                'data'  => 'dep_name_'.session('lang'),
                'title' => trans('admin.dep_name_'.session('lang')),
            ],
            [
                'name'  => 'image',
                'data'  => 'image',
                'title' => trans('admin.icon_departments'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],
            [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => trans('admin.created_at'),
            ], [
                'name'  => 'updated_at',
                'data'  => 'updated_at',
                'title' => trans('admin.updated_at'),
            ],
             [
                 'name'       => 'add_poroduct',
                 'data'       => 'add_poroduct',
                 'title'      => trans('admin.add_poroduct'),
                 'exportable' => false,
                 'printable'  => false,
                 'orderable'  => false,
                 'searchable' => false,
             ],
            [
                'name'       => 'edit',
                'data'       => 'edit',
                'title'      => trans('admin.edit'),
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ]
            // ,[
            //     'name'       => 'delete',
            //     'data'       => 'delete',
            //     'title'      => trans('admin.delete'),
            //     'exportable' => false,
            //     'printable'  => false,
            //     'orderable'  => false,
            //     'searchable' => false,
            // ]
            ,
            [
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
        return 'Department_' . date('YmdHis');
    }
}
