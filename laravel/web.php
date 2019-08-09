
<?php

.......

Route::get('/import_excel', 'ImportExcelController@index');
Route::post('/import_excel/import', 'ImportExcelController@import');
