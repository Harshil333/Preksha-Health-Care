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
use App\Discount;
use Illuminate\Http\Request;
use App\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',function(){
    $percent_discount = Discount::where("id",1)->first()->percent_discount;
    return view('admin_panel')->with('percent_discount',$percent_discount);
});
Route::post('/savechanges',function(Request $request){
    $percent_discount = Discount::where('id',1)->first();

    $percent_discount->percent_discount = $request->input('percent_discount');
    $percent_discount->save();

    return redirect()->back()->with('success','Discount Percent has been successfully changed!');
});


Auth::routes();

Route::get('/edit','BeneficiariesController@edit_user');
Route::put('/update/{id}','BeneficiariesController@update_user');
Route::get('/book_tests','BookingsController@test_index');
Route::get('/book_offers','BookingsController@offer_index');
Route::get('/book_profiles','BookingsController@profile_index');
Route::get('/tests/{code}/details','BookingsController@test_detail');
Route::get('/profiles/{code}/details','BookingsController@profile_detail');
Route::get('/offers/{code}/details','BookingsController@offer_detail');
Route::post('/add/{type}/{name}/{code}/{rate}/{margin}/{count}','BookingsController@add_to_cart');
Route::post('/remove/{type}/{code}','BookingsController@remove_from_cart');
Route::get('/viewcart/{user_id}','BookingsController@viewcart');

Route::get('/beneficiaries/add','BeneficiariesController@new');
Route::post('/beneficiaries','BeneficiariesController@store');
Route::get('/beneficiaries/{id}/edit','BeneficiariesController@edit');
Route::put('/beneficiaries/{id}','BeneficiariesController@update');
Route::delete('/beneficiaries/{id}','BeneficiariesController@destroy');
Route::get('/gettimeslots','BookingsController@checkPinCode');
Route::post('/displaytimeslots','BookingsController@displayTimeSlots');
Route::get('/finalpage/{slot}','BookingsController@finalPage');
Route::post('/placeorder/{reports}/{slot}','BookingsController@placeOrder');
// Route::get('/myorders','BookingsController@myOrders');
//Route::get('/home', 'HomeController@index');
