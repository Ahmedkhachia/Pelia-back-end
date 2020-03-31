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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('session/{id}', 'SessionController@index');
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/pelia/add', 'MesureController@add');
// Route::post('test', 'MesureController@user');

// Route::get('/medicament', 'Patient\MedicamentController@index');
// Route::get('/medicament/Ajouter', 'Patient\MedicamentController@create');
// Route::get('medicament/{id}/edit', 'Patient\MedicamentController@edit');
// Route::put('medicament/{id}', 'Patient\MedicamentController@update');
// Route::delete('medicament/{id}', 'Patient\MedicamentController@destroy');   

//Routes of Medicaments
Route::resource("medicament","Patient\MedicamentController");

//Routes of Mesures
Route::get('/mesures', 'Patient\MesureController@index');

//Routes of Listes Patients and Medecins
Route::get('/listeMedecin', 'Patient\ListeMedecinController@index');
Route::post('/medecins', 'Patient\ListeMedecinController@store');
Route::get('/listeMedecin/create', 'Patient\ListeMedecinController@create');
Route::get('/listeMedecin/edit/{id}', 'Patient\ListeMedecinController@edit');
Route::put('/medecins/edit/{id}/{idSpec}', 'Patient\ListeMedecinController@update');
Route::get('/listePatient', 'Patient\ListeMedecinController@index');
Route::delete('/listePatient/{id}', 'Patient\ListeMedecinController@delete');

//Routes of Messages
Route::get('/message', 'MessagesController@index');
Route::get('/message/{id}', 'MessagesController@affiche');

Route::get("/medecins/liste", "MedecinsPatientsController@index");

//Routes of Register Medecin
Route::get("/inscrire", "InscrireMedecinController@index");
Route::post("/inscrire/images", "InscrireMedecinController@createImagesCabinet");
Route::post('/inscrire', 'InscrireMedecinController@createUsersInfo');
Route::post('/inscrire/cursus', 'InscrireMedecinController@createUserCursus');

//Routes of Dashboard
Route::get("dashboard", "Medecin\DashboardController@index");

//Routes of login Google
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

//Routes of login Facebook
Route::get('/redirect/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/callback/facebook', 'SocialAuthFacebookController@callback');

//Routes of Rendez-vous
// Route::get('/rendez-vous/{type}/{id}', 'RendezVousController@indexRndv');
Route::get('/rendez-vous/{id}', 'RendezVousController@create');
Route::get('/rendez-vous/{type}/{id}', 'RendezVousController@indexRndv');
Route::get('/rendez-vous', 'RendezVousController@index');
Route::post('/rendez-vous', 'RendezVousController@storeFromRndv');
Route::get('/rendez-vous/edit/{id}', 'RendezVousController@edit');
Route::delete('/rendez-vous/{id}', 'RendezVousController@destroy');
Route::put('/rendez-vous/edit/{id}', 'RendezVousController@update');
Route::post('/rendez-vous/{id}', 'RendezVousController@storeFromProfilMedecin');


//Routes of Invitations
Route::get('/invitations/accepte/{id}', 'InvitationsController@accepte');
Route::get('/invitations/create/{id}', 'InvitationsController@create');
Route::delete('/invitations/delete/{id}', 'InvitationsController@destroy');

//Routes of Search medecin
Route::get('/trouvezMedecin', 'Patient\SearchMedecinController@index');
Route::post('/trouvezMedecin/traitement', 'Patient\SearchMedecinController@getDataSearch');
Route::get('/profilMedecin/{id}', 'Patient\SearchMedecinController@profilMedecin');

Route::get('/activation', function(){
    $user = Auth::user();
    Notification::send($user , new \App\Notifications\RegisterNotification($user));
    return view("Activation.index");
});


View::composer(["*"], "App\Http\Controllers\InvitationsController@index");