<?php

					// <==Frontend==>

Route::get('/','Frontend\HomeController@home')->name('home');
Route::get('/location-{location_id}','Frontend\HomeController@locationpackage')->name('locationpackage');
Route::get('/about','Frontend\HomeController@about')->name('about');
Route::get('/contact','Frontend\HomeController@contact')->name('contact');
Route::post('/contact','Frontend\HomeController@docontact')->name('docontact');

Route::get('/booking-view-{package_id}','Frontend\HomeController@booking')->name('booking');



Route::post('/booking','BookingController@dobooking')->name('dobooking');

Route::get('/authbooking-view-{package_id}','Frontend\HomeController@authbooking')->name('authbooking');
Route::post('/authdobooking','BookingController@authdobooking')->name('authdobooking');

Route::get('/normalbooking','Frontend\HomeController@normalbooking')->name('normalbooking');
Route::post('/normalbooking','BookingController@donormalbooking')->name('donormalbooking');


Route::get('/bookinglist','Frontend\HomeController@bookinglist')->name('bookinglist');

Route::get('/car','Frontend\HomeController@car')->name('car');
Route::post('/car','Frontend\HomeController@bookcar')->name('bookcar');
Route::get('/tourguidelocation','Frontend\HomeController@tourguide')->name('tourguide');
Route::get('/tourguide-{location_id}','Frontend\HomeController@guides')->name('guides');
Route::post('/car','Frontend\HomeController@bookcar')->name('bookcar');


Route::get('/test','Frontend\HomeController@test')->name('test');
Route::get('/packages','Frontend\HomeController@packages')->name('packages');

Route::get('/feedback-{package_id}','Frontend\HomeController@feedback')->name('feedback');
Route::post('/feedback','Frontend\HomeController@givefeedback')->name('givefeedback');

Route::get('/packages-view-{package_id}','Frontend\HomeController@singlepackage')->name('singlepackage');



Route::group(['middleware' => 'auth'], function () {
Route::get('/admin','Backend\HomeController@admin')->name('admin');
Route::get('/userlist','Backend\HomeController@userlist')->name('userlist');
Route::get('/carrental','Backend\HomeController@cars')->name('cars');
Route::post('/carrental','Backend\HomeController@addcars')->name('addcars');
Route::get('/adduser','Backend\HomeController@adduser')->name('adduser');
Route::post('/adduser','Backend\HomeController@addusers')->name('addusers');

Route::get('/edituser-{id}','Backend\HomeController@edituser')->name('edituser');
Route::post('/edituser-{id}','Backend\HomeController@editusers')->name('editusers');


Route::get('/userprint','Backend\HomeController@userprint')->name('userprint');
Route::get('/printuserlist','Backend\HomeController@printuserlist')->name('printuserlist');

Route::get('/userlist/delete/{id}','Backend\HomeController@userlistdelete')->name('userlist.delete');

Route::get('/userbooking','Backend\HomeController@userbooking')->name('userbooking');
/*Route::post('/userbooking-','Backend\HomeController@userbookingapprove')->name('userbookingapprove');*/

Route::get('/userbookingupdate-{id}','Backend\HomeController@userbookingupdate')->name('userbookingupdate');
Route::get('/userbookingdeny-{id}','Backend\HomeController@userbookingdeny')->name('userbookingdeny');

Route::get('/admin-packages','Backend\PackageController@packages')->name('admin.packages');
Route::get('/admin-packages/delete/{package_id}','Backend\PackageController@packagesdelete')->name('admin.packages.delete');
Route::get('/admin-district','Backend\HomeController@district')->name('admin.district');
Route::get('/admin-showdistrict','Backend\HomeController@showdistrict')->name('admin.showdistrict');
Route::post('/admin-district','Backend\HomeController@adddistrict')->name('admin.adddistrict');
Route::post('/admin-addpackages','Backend\PackageController@addpackages')->name('admin.addpackages');
Route::get('/admin-location','Backend\HomeController@viewlocation')->name('admin.location');
Route::post('/admin-addlocation','Backend\HomeController@addlocation')->name('admin.addlocation');

Route::get('/userfeedback','Backend\HomeController@userfeedback')->name('userfeedback');
Route::get('/guide','Backend\HomeController@guide')->name('guide');
Route::post('/guide','Backend\HomeController@addguide')->name('addguide');

});


Route::get('/loginpage','Backend\UserController@loginpage')->name('loginpage');
Route::get('/login','Backend\UserController@login')->name('login');
Route::post('/login','Backend\UserController@logindo')->name('logindo');
Route::post('/loginpage','Backend\UserController@dologin')->name('dologin');
Route::get('/registration','Backend\UserController@registration')->name('registration');
Route::post('/registry','Backend\UserController@registry')->name('registry');
Route::get('/logout','Backend\UserController@logout')->name('logout');
Route::get('/userlogout','Backend\UserController@userlogout')->name('userlogout');




Route::group(['middleware' => 'auth'], function () {
Route::get('/userdashboard','User\HomeController@user')->name('user');
Route::get('/picture','User\HomeController@picture')->name('picture');
Route::get('/editprofile','User\HomeController@editprofile')->name('editprofile');
Route::post('/editprofile','User\HomeController@edit')->name('edit');
Route::get('/userbookinginfo','User\HomeController@userbooking')->name('userbook');
Route::get('/userpayment-{id}','User\HomeController@payment')->name('userpayment');
Route::get('/deletebooking-{id}','User\HomeController@deletebooking')->name('deletebooking');
Route::get('/userpaymentview','User\HomeController@paymentview')->name('userpaymentview');
Route::get('/print-{id}','User\HomeController@printinvoice')->name('print');
});



