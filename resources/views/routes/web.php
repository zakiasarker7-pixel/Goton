use Illuminate\Http\Request;

Route::get('/payment', function () {
    return view('payment');
});

Route::post('/pay', function (Request $request) {

    return $request->all(); // test only
});
