<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/','IndexController@frontpage')->name('Homes');

Route::post('/CBSESession','CBSEController@indexsession')->name('CBSESession');

Route::get('/CBSE','CBSEController@index')->name('CBSE');

Route::post('/IGCSESession','IGCSEController@indexsession')->name('IGCSESession');

Route::get('/IGCSE','IGCSEController@index')->name('IGCSE');

Route::post('/Contact/Store','ContactController@store')->name('Contact/Store');

Route::post('/Enquiry/Store','ContactController@enquiry')->name('Enquiry/Store');

Route::get('/Admission','AdmissionController@index')->name('Admission');

Route::get('/WhyChanakya','WhyChanakyaController@index')->name('WhyChanakya');

Route::get('/Career','CareerController@index')->name('Career');

Route::post('/Admission/Store','AdmissionController@store')->name('Admission/Store');

Route::get('/Contact','ContactController@index')->name('Contact');

Route::get('/Gallery/Images','ImageGalleryController@index')->name('Gallery/Images');

Route::get('/Gallery/Videos','VideoGalleryController@index')->name('Gallery/Videos');

Route::get('/News','NewsController@index')->name('News');

Route::get('/ChairmanMessage','ChairmanMessageController@index')->name('ChairmanMessage');

Route::get('/AboutUs','AboutUsController@index')->name('AboutUs');

Route::post('/Payment','PayController@index')->name('Payment');













/////admin panel///////

Route::get('/Admin/Login', 'Admin\LoginController@index')->name('Admin/Login');

Route::post('Admin/Login/Attempt', 'Admin\LoginController@attempt')->name('Admin/Login/Attempt');


Route::group(['middleware'=>'auth'],function(){

Route::get('/Admin/Dashboard', 'Admin\DashboardController@index')->name('Admin/Dashboard');

Route::get('/Admin', 'Admin\DashboardController@index')->name('Admin/Dashboard');

//category crud
Route::get('/Admin/Category', 'Admin\CategoryController@index')->name('Admin/Category');

Route::get('/Admin/Category/Add', 'Admin\CategoryController@create')->name('Admin/Category/Add');

Route::post('/Admin/Category/Store', 'Admin\CategoryController@store')->name('Admin/Category/Store');

Route::post('/Admin/Category/EditSession', 'Admin\CategoryController@editsession')->name('Admin/Category/EditSession');

Route::get('/Admin/Category/Edit', 'Admin\CategoryController@edit')->name('Admin/Category/Edit');

Route::post('/Admin/Category/Update', 'Admin\CategoryController@update')->name('Admin/Category/Update');

Route::post('/Admin/Category/Delete', 'Admin\CategoryController@delete')->name('Admin/Category/Delete');





Route::get('/Admin/SubCategory', 'Admin\SubCategoryController@index')->name('Admin/SubCategory');

Route::get('/Admin/SubCategory/Add', 'Admin\SubCategoryController@create')->name('Admin/SubCategory/Add');

Route::post('/Admin/SubCategory/Store', 'Admin\SubCategoryController@store')->name('Admin/SubCategory/Store');

Route::post('/Admin/SubCategory/EditSession', 'Admin\SubCategoryController@editsession')->name('Admin/SubCategory/EditSession');

Route::get('/Admin/SubCategory/Edit', 'Admin\SubCategoryController@edit')->name('Admin/SubCategory/Edit');

Route::post('/Admin/SubCategory/Update', 'Admin\SubCategoryController@update')->name('Admin/SubCategory/Update');

Route::post('/Admin/SubCategory/Delete', 'Admin\SubCategoryController@delete')->name('Admin/SubCategory/Delete');



Route::get('/Admin/Board', 'Admin\BoardController@index')->name('Admin/Board');

Route::get('/Admin/Board/Add', 'Admin\BoardController@create')->name('Admin/Board/Add');

Route::post('/Admin/Board/Store', 'Admin\BoardController@store')->name('Admin/Board/Store');

Route::post('/Admin/Board/EditSession', 'Admin\BoardController@editsession')->name('Admin/Board/EditSession');

Route::get('/Admin/Board/Edit', 'Admin\BoardController@edit')->name('Admin/Board/Edit');

Route::post('/Admin/Board/Update', 'Admin\BoardController@update')->name('Admin/Board/Update');

Route::post('/Admin/Board/Delete', 'Admin\BoardController@delete')->name('Admin/Board/Delete');

Route::post('/show_category', 'Admin\BoardController@show_category')->name('show_category');

Route::post('/show_sub_category', 'Admin\BoardController@show_sub_category')->name('show_sub_category');




//image crud

Route::get('/Admin/Image', 'Admin\ImageController@index')->name('Admin/Image');

Route::get('/Admin/Image/Add', 'Admin\ImageController@create')->name('Admin/Image/Add');

Route::post('/Admin/Image/Store', 'Admin\ImageController@store')->name('Admin/Image/Store');

Route::post('/Admin/Image/EditSession', 'Admin\ImageController@editsession')->name('Admin/Image/EditSession');

Route::get('/Admin/Image/Edit', 'Admin\ImageController@edit')->name('Admin/Image/Edit');

Route::post('/Admin/Image/Update', 'Admin\ImageController@update')->name('Admin/Image/Update');

Route::post('/Admin/Image/Delete', 'Admin\ImageController@delete')->name('Admin/Image/Delete');




//video crud
Route::get('/Admin/Video', 'Admin\VideoController@index')->name('Admin/Video');

Route::get('/Admin/Video/Add', 'Admin\VideoController@create')->name('Admin/Video/Add');

Route::post('/Admin/Video/Store', 'Admin\VideoController@store')->name('Admin/Video/Store');

Route::post('/Admin/Video/EditSession', 'Admin\VideoController@editsession')->name('Admin/Video/EditSession');

Route::get('/Admin/Video/Edit', 'Admin\VideoController@edit')->name('Admin/Video/Edit');

Route::post('/Admin/Video/Update', 'Admin\VideoController@update')->name('Admin/Video/Update');

Route::post('/Admin/Video/Delete', 'Admin\VideoController@delete')->name('Admin/Video/Delete');



//news crud


Route::get('/Admin/Products', 'Admin\ProductsController@index')->name('Admin/Products');

Route::get('/Admin/Products/Add', 'Admin\ProductsController@create')->name('Admin/Products/Add');

Route::post('/Admin/Products/Store', 'Admin\ProductsController@store')->name('Admin/Products/Store');

Route::post('/Admin/Products/EditSession', 'Admin\ProductsController@editsession')->name('Admin/Products/EditSession');

Route::get('/Admin/Products/Edit', 'Admin\ProductsController@edit')->name('Admin/Products/Edit');

Route::post('/Admin/Products/ShowSession', 'Admin\ProductsController@showsession')->name('Admin/Products/ShowSession');

Route::get('/Admin/Products/Show', 'Admin\ProductsController@show')->name('Admin/Products/Show');

Route::post('/Admin/Products/Update', 'Admin\ProductsController@update')->name('Admin/Products/Update');

Route::post('/Admin/Products/Delete', 'Admin\ProductsController@delete')->name('Admin/Products/Delete');



//feedback review


//Contact details
Route::get('/Admin/Contact', 'Admin\ContactController@index')->name('Admin/Contact');

//Admission Details
Route::get('/Admin/Admission', 'Admin\AdmissionController@index')->name('Admin/Admission');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
