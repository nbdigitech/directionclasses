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

Route::get('/','IndexController@index')->name('Index');

Route::get('/About','AboutController@index')->name('About');

Route::get('/Contact','ContactController@index')->name('Contact');

Route::get('/Course','CourseController@index')->name('Course');

Route::get('/Social-Media','SocialController@index')->name('Social-Media');

Route::get('/FAQ','FAQController@index')->name('FAQ');

Route::get('/Apply','CareerController@apply')->name('Apply');

Route::get('/Apply-Non-Teaching','CareerController@applyNonTeaching')->name('Apply-Non-Teaching');


Route::post('/Apply/Store','CareerController@store')->name('Apply/Store');

Route::get('/ParentTestimonial','ParentTestimonialController@index')->name('ParentTestimonial');

Route::post('/send/email', 'HomeController@mail')->name('SendMail');

Route::post('/ContactMail', 'HomeController@contactmail')->name('ContactMail');

Route::get('/Franchise', 'FranchiseController@index')->name('Franchise');

Route::get('/Career', 'CareerController@index')->name('');

Route::get('/Thankyou',function(){
    return view('thankyou')   ;
}
);







Route::get('admin/', 'admin\IndexController@index')->name('admin');





Route::get('admin/Category', 'admin\CategoryController@index')->name('admin/Category');

Route::get('admin/Category/Add', 'admin\CategoryController@create')->name('admin/Category/Add');

Route::post('admin/Category/Store', 'admin\CategoryController@store')->name('admin/Category/Store');

Route::post('admin/Category/EditSession', 'admin\CategoryController@editsession')->name('admin/Category/EditSession');

Route::get('admin/Category/Edit', 'admin\CategoryController@edit')->name('admin/Category/Edit');

Route::post('admin/Category/Delete', 'admin\CategoryController@destroy')->name('admin/Category/Delete');

Route::post('admin/Category/Update', 'admin\CategoryController@update')->name('admin/Category/Update');






Route::get('admin/SubCategory', 'admin\SubCategoryController@index')->name('admin/SubCategory');

Route::get('admin/SubCategory/Add', 'admin\SubCategoryController@create')->name('admin/SubCategory/Add');

Route::post('admin/SubCategory/Store', 'admin\SubCategoryController@store')->name('admin/SubCategory/Store');

Route::post('admin/SubCategory/EditSession', 'admin\SubCategoryController@editsession')->name('admin/SubCategory/EditSession');

Route::get('admin/SubCategory/Edit', 'admin\SubCategoryController@edit')->name('admin/SubCategory/Edit');

Route::post('admin/SubCategory/Delete', 'admin\SubCategoryController@destroy')->name('admin/SubCategory/Delete');

Route::post('admin/SubCategory/Update', 'admin\SubCategoryController@update')->name('admin/SubCategory/Update');




Route::get('admin/TestSeries', 'admin\TestSeriesController@index')->name('admin/TestSeries');

Route::get('admin/TestSeries/Add', 'admin\TestSeriesController@create')->name('admin/TestSeries/Add');

Route::post('admin/TestSeries/Store', 'admin\TestSeriesController@store')->name('admin/TestSeries/Store');

Route::post('admin/TestSeries/EditSession', 'admin\TestSeriesController@editsession')->name('admin/TestSeries/EditSession');

Route::post('admin/TestSeries/ShowSession', 'admin\TestSeriesController@showsession')->name('admin/TestSeries/ShowSession');

Route::get('admin/TestSeries/Show', 'admin\TestSeriesController@show')->name('admin/TestSeries/Show');


Route::get('admin/TestSeries/Edit', 'admin\TestSeriesController@edit')->name('admin/TestSeries/Edit');

Route::post('admin/TestSeries/Delete', 'admin\TestSeriesController@destroy')->name('admin/TestSeries/Delete');

Route::post('admin/TestSeries/Update', 'admin\TestSeriesController@update')->name('admin/TestSeries/Update');




Route::get('admin/CrashCourse', 'admin\CrashCourseController@index')->name('admin/CrashCourse');

Route::get('admin/CrashCourse/Add', 'admin\CrashCourseController@create')->name('admin/CrashCourse/Add');

Route::post('admin/CrashCourse/Store', 'admin\CrashCourseController@store')->name('admin/CrashCourse/Store');

Route::post('admin/CrashCourse/EditSession', 'admin\CrashCourseController@editsession')->name('admin/CrashCourse/EditSession');

Route::get('admin/CrashCourse/Edit', 'admin\CrashCourseController@edit')->name('admin/CrashCourse/Edit');

Route::post('admin/CrashCourse/ShowSession', 'admin\CrashCourseController@showsession')->name('admin/CrashCourse/ShowSession');

Route::get('admin/CrashCourse/Show', 'admin\CrashCourseController@show')->name('admin/CrashCourse/Show');


Route::post('admin/CrashCourse/Delete', 'admin\CrashCourseController@destroy')->name('admin/CrashCourse/Delete');

Route::post('admin/CrashCourse/Update', 'admin\CrashCourseController@update')->name('admin/CrashCourse/Update');




Route::get('admin/SpecimenPaper', 'admin\SpecimenPaperController@index')->name('admin/SpecimenPaper');

Route::get('admin/SpecimenPaper/Add', 'admin\SpecimenPaperController@create')->name('admin/SpecimenPaper/Add');

Route::post('admin/SpecimenPaper/Store', 'admin\SpecimenPaperController@store')->name('admin/SpecimenPaper/Store');

Route::post('admin/SpecimenPaper/EditSession', 'admin\SpecimenPaperController@editsession')->name('admin/SpecimenPaper/EditSession');

Route::get('admin/SpecimenPaper/Edit', 'admin\SpecimenPaperController@edit')->name('admin/SpecimenPaper/Edit');


Route::post('admin/SpecimenPaper/ShowSession', 'admin\SpecimenPaperController@showsession')->name('admin/SpecimenPaper/ShowSession');

Route::get('admin/SpecimenPaper/Show', 'admin\SpecimenPaperController@show')->name('admin/SpecimenPaper/Show');



Route::post('admin/SpecimenPaper/Delete', 'admin\SpecimenPaperController@destroy')->name('admin/SpecimenPaper/Delete');

Route::post('admin/SpecimenPaper/Update', 'admin\SpecimenPaperController@update')->name('admin/SpecimenPaper/Update');




Route::get('admin/PastPaper', 'admin\PastPaperController@index')->name('admin/PastPaper');

Route::get('admin/PastPaper/Add', 'admin\PastPaperController@create')->name('admin/PastPaper/Add');

Route::post('admin/PastPaper/Store', 'admin\PastPaperController@store')->name('admin/PastPaper/Store');

Route::post('admin/PastPaper/EditSession', 'admin\PastPaperController@editsession')->name('admin/PastPaper/EditSession');

Route::post('admin/PastPaper/ShowSession', 'admin\PastPaperController@showsession')->name('admin/PastPaper/ShowSession');

Route::get('admin/PastPaper/Show', 'admin\PastPaperController@show')->name('admin/PastPaper/Show');


Route::get('admin/PastPaper/Edit', 'admin\PastPaperController@edit')->name('admin/PastPaper/Edit');

Route::post('admin/PastPaper/Delete', 'admin\PastPaperController@destroy')->name('admin/PastPaper/Delete');

Route::post('admin/PastPaper/Update', 'admin\PastPaperController@update')->name('admin/PastPaper/Update');





Route::get('admin/TopicWisePaper', 'admin\TopicWisePaperController@index')->name('admin/TopicWisePaper');

Route::get('admin/TopicWisePaper/Add', 'admin\TopicWisePaperController@create')->name('admin/TopicWisePaper/Add');

Route::post('admin/TopicWisePaper/Store', 'admin\TopicWisePaperController@store')->name('admin/TopicWisePaper/Store');

Route::post('admin/TopicWisePaper/EditSession', 'admin\TopicWisePaperController@editsession')->name('admin/TopicWisePaper/EditSession');

Route::get('admin/TopicWisePaper/Edit', 'admin\TopicWisePaperController@edit')->name('admin/TopicWisePaper/Edit');

Route::post('admin/TopicWisePaper/ShowSession', 'admin\TopicWisePaperController@showsession')->name('admin/TopicWisePaper/ShowSession');

Route::get('admin/TopicWisePaper/Show', 'admin\TopicWisePaperController@show')->name('admin/TopicWisePaper/Show');


Route::post('admin/TopicWisePaper/Delete', 'admin\TopicWisePaperController@destroy')->name('admin/TopicWisePaper/Delete');

Route::post('admin/TopicWisePaper/Update', 'admin\TopicWisePaperController@update')->name('admin/TopicWisePaper/Update');

