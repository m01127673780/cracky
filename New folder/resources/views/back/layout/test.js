->parameters([
'dom'=>'Blfrtip',
'lengthMenu'=>[[1,10,25,50,100,-1],[1,10,25,50,'All Record']],
'buttons'=>[
[ 'extend'=>'print','className'=>'btn btn-dark','text'=>'<i class="fa fa-user-plus"></i> '],
[ 'extend'=>'print','className'=>'btn btn-dark','text'=>'<i class="fa fa-print"></i> '],
[ 'extend'=>'pdf','className'=>'btn btn-success','text'=>' <i class="fa fa-file-pdf "></i> PDF' ],
[ 'extend'=>'excel','className'=>'btn btn-warning','text'=>' <i class="fa fa-file-excel "></i> EXCEL'],
[ 'extend'=>'csv','className'=>'btn btn-success','text'=>'<i class="fa fa-file-csv "></i> CSV'],
[ 'extend'=>'columnToggle','className'=>'btn btn-danger','text'=>'<i class="fa fa-th-list "></i> columnToggle'],
[ 'extend'=>'copy','className'=>'btn btn-warning','text'=>'<i class="fa fa-copy "></i> copy'],
[ 'extend'=>'colvis','className'=>'btn btn-info','text'=>'<i class="fa fa-eye"></i> colvis'],
[ 'extend'=>'colvisRestore','className'=>'btn btn-primary','text'=>'<i class="fa fa-retweet "></i>'],
[ 'extend'=>'pageLength','className'=>'btn btn-light','text'=>'pageLength'],
[ 'extend'=>'selectAll','className'=>'btn btn-success','text'=>'selectAll'],
[ 'extend'=>'selectNone','className'=>'btn btn-danger','text'=>'selectNone'],
//                           [ 'extend'=>'','className'=>'btn btn-danger','text'=>'Reload'],



],
]);//parameters