## NelsonDJCR

Route::get('/nameRoute', [nameController::class, 'nameFunction']);

Route::resourse('/nameRoute', nameController::class);

url('/nameRoute/redirec');

$data = request()->except('_token');
return response()->json($data);

if ($request->hasFile('nameInputImg')) 
{
$data['nameInputImg'] = $request->file('nameInputImg')->store('upload', 'public');
}

$datos['customers']= Customers::paginate(3);