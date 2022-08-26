<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AssociationController;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/','App\Http\Controllers\AccueilController@welcome')->name('welcome');
//Route::get('/espaceClient','App\Http\Controllers\ClientController@espaceClient')->name('espaceClient'); 



//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE GESTION DES USERS//
Route::get('/addUser','App\Http\Controllers\UserController@addUser')->name('addUser');
Route::POST('/addUserBD','App\Http\Controllers\UserController@addUserBD')->name('addUserBD');
Route::get('/ListeUserAdmin','App\Http\Controllers\UserController@ListeUserAdmin')->name('ListeUserAdmin');
Route::get('/ListeTechnicien','App\Http\Controllers\UserController@ListeTechnicien')->name('ListeTechnicien');
Route::get('/FormeditTechnicien/{id}','App\Http\Controllers\UserController@FormeditTechnicien')->name('FormeditTechnicien');
Route::post('/FormeditTechnicienBD','App\Http\Controllers\UserController@FormeditTechnicienBD')->name('FormeditTechnicienBD');
Route::get('/DeleteTechnicien/{id}','App\Http\Controllers\UserController@DeleteTechnicien')->name('DeleteTechnicien');
Route::get('/ListeClient','App\Http\Controllers\UserController@ListeClient')->name('ListeClient');
Route::get('/FormeditClient/{id}','App\Http\Controllers\UserController@FormeditClient')->name('FormeditClient');
Route::post('/FormeditClientBD','App\Http\Controllers\UserController@FormeditClientBD')->name('FormeditClientBD');
Route::get('/DeleteClient/{id}','App\Http\Controllers\UserController@DeleteClient')->name('DeleteClient');
Route::get('/ProfileAdmin/{id}','App\Http\Controllers\UserController@ProfileAdmin')->name('ProfileAdmin');
Route::get('/FormUpdateProfile/{id}','App\Http\Controllers\UserController@FormUpdateProfile')->name('FormUpdateProfile');
Route::post('/updateProfileUserBD','App\Http\Controllers\UserController@updateProfileUserBD')->name('updateProfileUserBD');
Route::get('/ListeAbonnement','App\Http\Controllers\AbonnementController@ListeAbonnement')->name('ListeAbonnement');
Route::get('/attenteAb/{id}','App\Http\Controllers\AbonnementController@attenteAb')->name('attenteAb');
Route::get('/accepterAb/{id}','App\Http\Controllers\AbonnementController@accepterAb')->name('accepterAb');
Route::get('/supprimerAb/{id}','App\Http\Controllers\AbonnementController@supprimerAb')->name('supprimerAb');


Route::get('/destroyAbonnement/{id}','App\Http\Controllers\AbonnementController@destroyAbonnement')->name('destroyAbonnement');
Route::get('/ArchiveAbonnement','App\Http\Controllers\AbonnementController@ArchiveAbonnement')->name('ArchiveAbonnement');
Route::get('/FormProjet','App\Http\Controllers\ProjetController@FormProjet')->name('FormProjet');
Route::Post('/AddProjetBD','App\Http\Controllers\ProjetController@AddProjetBD')->name('AddProjetBD');
Route::Post('/addImageProjet','App\Http\Controllers\ProjetController@addImageProjet')->name('addImageProjet');
Route::get('/listeProjet','App\Http\Controllers\ProjetController@listeProjet')->name('listeProjet');
Route::get('/Editprojet/{id}','App\Http\Controllers\ProjetController@Editprojet')->name('Editprojet');
Route::POST('/UpdateProjet','App\Http\Controllers\ProjetController@UpdateProjet')->name('UpdateProjet');
Route::get('/DeletProjet/{id}','App\Http\Controllers\ProjetController@DeletProjet')->name('DeletProjet');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE CHENGER MOT DE PASSE //
Route::get('/FormUpdatePw','App\Http\Controllers\Auth\ResetPasswordController@FormUpdatePw')->name('FormUpdatePw');
Route::post('/updatePwBD','App\Http\Controllers\Auth\ResetPasswordController@updatePwBD')->name('updatePwBD');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES ROLE//
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
Route::get('/espaceMembre', [HomeController::class, 'membreHome'])->name('membre.home');
Route::get('/espaceTechnicien', [HomeController::class, 'technicienHome'])->name('technicien.home');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES EQUIPE//
Route::get('/FormEquipe','App\Http\Controllers\EquipeController@FormEquipe')->name('FormEquipe');
Route::post('/AddEquipeBD','App\Http\Controllers\EquipeController@AddEquipeBD')->name('AddEquipeBD');
Route::get('/viewEquipe','App\Http\Controllers\EquipeController@viewEquipe')->name('viewEquipe');
Route::get('/ListeEquipe','App\Http\Controllers\EquipeController@ListeEquipe')->name('ListeEquipe');
Route::get('/editMembreBD/{id}','App\Http\Controllers\EquipeController@UpdateEquipe')->name('UpdateEquipe');
Route::post('/editEquipeBD','App\Http\Controllers\EquipeController@editEquipeBD')->name('editEquipeBD');
Route::get('/deleteMembreBD/{id}','App\Http\Controllers\EquipeController@deleteMembreBD')->name('deleteMembreBD');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES PROJETS//
Route::get('/viewProjet','App\Http\Controllers\ProjetController@viewProjet')->name('viewProjet');
Route::get('/FormProjet','App\Http\Controllers\ProjetController@FormProjet')->name('FormProjet');
Route::post('/AddProjetBD','App\Http\Controllers\ProjetController@AddProjetBD')->name('AddProjetBD');
Route::post('/addImageProjetBD','App\Http\Controllers\ProjetController@addImageProjetBD')->name('addImageProjetBD');


//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES MEMBRE//
Route::get('/membreHome','App\Http\Controllers\HomeController@membreHome')->name('membreHome');
Route::get('/ProfileMembre/{id}','App\Http\Controllers\MembreController@ProfileMembre')->name('ProfileMembre');
Route::get('/FormUpdateProfileMembre/{id}','App\Http\Controllers\MembreController@FormUpdateProfileMembre')->name('FormUpdateProfileMembre');
Route::post('/updateProfileMembreBD','App\Http\Controllers\MembreController@updateProfileMembreBD')->name('updateProfileMembreBD');
Route::get('/FormUpdatePwMembre','App\Http\Controllers\MembreController@FormUpdatePwMembre')->name('FormUpdatePwMembre');
Route::post('/FormUpdatePwMembreBD','App\Http\Controllers\MembreController@FormUpdatePwMembreBD')->name('FormUpdatePwMembreBD');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES CONTACT//
Route::get('/Contacter','App\Http\Controllers\TestMail@Contacter')->name('Contacter');
Route::post('/contacterBD','App\Http\Controllers\TestMail@contacterBD')->name('contacterBD');
Route::post('/sendMailAbonnement','App\Http\Controllers\Abonnement@sendMailAbonnement')->name('sendMailAbonnement');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES ADMIN Passe Reclamation//
Route::get('/FormReclamationAdmin/{id}','App\Http\Controllers\ReclamationController@FormReclamationAdmin')->name('FormReclamationAdmin');
Route::post('/ReclamationAdminBD','App\Http\Controllers\ReclamationController@ReclamationAdminBD')->name('ReclamationAdminBD');
Route::get('/ListeReclamation','App\Http\Controllers\ReclamationController@ListeReclamation')->name('ListeReclamation');
Route::get('/editReclamation/{id}','App\Http\Controllers\ReclamationController@editReclamation')->name('editReclamation');
Route::post('/UpdateReclamationBD','App\Http\Controllers\ReclamationController@UpdateReclamationBD')->name('UpdateReclamationBD');
Route::get('/deleteReclamationBD/{id}','App\Http\Controllers\ReclamationController@deleteReclamationBD')->name('deleteReclamationBD');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES TECHNICIEN //
Route::get('/ListeReclamationTechnicien','App\Http\Controllers\ReclamationController@ListeReclamationTechnicien')->name('ListeReclamationTechnicien');
Route::get('/attente/{id}','App\Http\Controllers\ReclamationController@attente')->name('attente');
Route::get('/accepter/{id}','App\Http\Controllers\ReclamationController@accepter')->name('accepter');
Route::get('/Archive','App\Http\Controllers\ReclamationController@Archive')->name('Archive');
Route::get('/destroyReclamation/{id}','App\Http\Controllers\ReclamationController@destroyReclamation')->name('destroyReclamation');
Route::get('/ProfileTechnicien/{id}','App\Http\Controllers\TechnicienController@ProfileTechnicien')->name('ProfileTechnicien');
Route::get('/FormUpdateProfileT/{id}','App\Http\Controllers\TechnicienController@FormUpdateProfileT')->name('FormUpdateProfileT');
Route::post('/updateProfilethechnicien','App\Http\Controllers\TechnicienController@updateProfilethechnicien')->name('updateProfilethechnicien');
Route::get('/listeReservationTechnicien','App\Http\Controllers\TechnicienController@listeReservationTechnicien')->name('listeReservationTechnicien');
Route::get('/FormUpdateProfileTechnicien/{id}','App\Http\Controllers\TechnicienController@FormUpdateProfileTechnicien')->name('FormUpdateProfileTechnicien');
Route::post('/updateProfileTechnicienBD','App\Http\Controllers\TechnicienController@updateProfileTechnicienBD')->name('updateProfileTechnicienBD');
Route::get('/FormUpdatePwTechnicien','App\Http\Controllers\TechnicienController@FormUpdatePwTechnicien')->name('FormUpdatePwTechnicien');
Route::post('/FormUpdatePwTechnicienBD','App\Http\Controllers\TechnicienController@FormUpdatePwTechnicienBD')->name('FormUpdatePwTechnicienBD');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES CLIENT //
Route::get('/AbonnementForms/{id}','App\Http\Controllers\ClientController@AbonnementForms')->name('AbonnementForms');
Route::post('/AbonnementFormsBD','App\Http\Controllers\ClientController@AbonnementFormsBD')->name('AbonnementFormsBD');
Route::get('/ListeDemandeA','App\Http\Controllers\ClientController@ListeDemandeA')->name('ListeDemandeA');
Route::get('/editAbonnement/{id}','App\Http\Controllers\ClientController@editAbonnement')->name('editAbonnement');
Route::Post('/UpdateAbonnement/{id}','App\Http\Controllers\ClientController@UpdateAbonnement')->name('UpdateAbonnement');
Route::get('/FormReservation/{id}','App\Http\Controllers\ReservationController@FormReservation')->name('FormReservation');
Route::get('/TelechargerDemande/{id}','App\Http\Controllers\ClientController@TelechargerDemande')->name('TelechargerDemande');
Route::post('/updateProfileClientBD','App\Http\Controllers\ClientController@updateProfileClientBD')->name('updateProfileClientBD');
Route::get('/FormUpdateProfileClient/{id}','App\Http\Controllers\ClientController@FormUpdateProfileClient')->name('FormUpdateProfileClient');
Route::get('/ProfileClient/{id}','App\Http\Controllers\ClientController@ProfileClient')->name('ProfileClient');
Route::get('/FormUpdatePwClient','App\Http\Controllers\ClientController@FormUpdatePwClient')->name('FormUpdatePwClient');
Route::post('/FormUpdatePwClientBD','App\Http\Controllers\ClientController@FormUpdatePwClientBD')->name('FormUpdatePwClientBD');


//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES Association //
Route::get('/Association','App\Http\Controllers\AssociationController@Association')->name('Association');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES ESPACE /
Route::get('/FormAddSpace','App\Http\Controllers\SpaceController@FormAddSpace')->name('FormAddSpace');
Route::post('/addSpaceBD','App\Http\Controllers\SpaceController@addSpaceBD')->name('addSpaceBD');
Route::get('/AddPhotoSpace/{id}','App\Http\Controllers\SpaceController@AddPhotoSpace')->name('AddPhotoSpace');
Route::post('/AddPhotoSpaceBD','App\Http\Controllers\SpaceController@AddPhotoSpaceBD')->name('AddPhotoSpaceBD');
Route::get('/ListeSpace','App\Http\Controllers\SpaceController@ListeSpace')->name('ListeSpace');
Route::get('/FormeditSpace/{id}','App\Http\Controllers\SpaceController@FormeditSpace')->name('FormeditSpace');
Route::post('/UpdateSpaceBD','App\Http\Controllers\SpaceController@UpdateSpaceBD')->name('UpdateSpaceBD');
Route::get('/DeleteSpaceBD/{id}','App\Http\Controllers\SpaceController@DeleteSpaceBD')->name('DeleteSpaceBD');
Route::get('/VoirPhotoSpace/{id}','App\Http\Controllers\SpaceController@VoirPhotoSpace')->name('VoirPhotoSpace');
Route::get('/FormEditPhotoSpace/{id}','App\Http\Controllers\SpaceController@FormEditPhotoSpace')->name('FormEditPhotoSpace');
Route::post('/UpdatePhotoSpaceBD','App\Http\Controllers\SpaceController@UpdatePhotoSpaceBD')->name('UpdatePhotoSpaceBD');
Route::get('/DeletePhotoSpaceBD/{id}','App\Http\Controllers\SpaceController@DeletePhotoSpaceBD')->name('DeletePhotoSpaceBD');
Route::Post('/AddPhotoSpace/{id}','App\Http\Controllers\SpaceController@UpdatePhotoProjetBD')->name('UpdatePhotoProjetBD');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE ERREUR /
Route::get('/erreur','App\Http\Controllers\UserController@construct')->name('erreur');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE GESTION MATERIEL /
Route::get('/FormAddMateriel/{id}','App\Http\Controllers\MaterielController@FormAddMateriel')->name('FormAddMateriel');
Route::post('/AddMaterielBD','App\Http\Controllers\MaterielController@AddMaterielBD')->name('AddMaterielBD');
Route::get('/ListeMateriel','App\Http\Controllers\MaterielController@ListeMateriel')->name('ListeMateriel');
Route::get('/FormeditMateriel/{id}','App\Http\Controllers\MaterielController@FormeditMateriel')->name('FormeditMateriel');
Route::Post('/UpdateMaterielBD','App\Http\Controllers\MaterielController@UpdateMaterielBD')->name('UpdateMaterielBD');
Route::get('/DeleteMaterielBD/{id}','App\Http\Controllers\MaterielController@DeleteMaterielBD')->name('DeleteMaterielBD');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE GESTION Projet /

Route::get('/FormeditProjet/{id}','App\Http\Controllers\ProjetController@Editprojet')->name('FormeditProjet');
Route::get('/ListeImageProjet/{id}','App\Http\Controllers\ProjetController@ListeImageProjet')->name('ListeImageProjet');
Route::get('/AddPhotoProjet/{id}','App\Http\Controllers\ProjetController@AddPhotoProjet')->name('AddPhotoProjet');
Route::get('/FormEditPhotoProjet/{id}','App\Http\Controllers\ProjetController@FormEditPhotoProjet')->name('FormEditPhotoProjet');
Route::Post('/UpdatePhotoProjetBD/{id}','App\Http\Controllers\ProjetController@UpdatePhotoProjetBD')->name('UpdatePhotoProjetBD');
Route::get('/DeletImageProjet/{id}','App\Http\Controllers\ProjetController@DeletImageProjet')->name('DeletImageProjet');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES partenaires /
Route::get('/formPartenaire','App\Http\Controllers\PartenaireController@formPartenaire')->name('formPartenaire');
Route::Post('/addPartenaireBD','App\Http\Controllers\PartenaireController@addPartenaireBD')->name('addPartenaireBD');
Route::get('/listePartenaire','App\Http\Controllers\PartenaireController@listePartenaire')->name('listePartenaire');
Route::get('/EditPartenaire/{id}','App\Http\Controllers\PartenaireController@EditPartenaire')->name('EditPartenaire');
Route::post('/UpdatePartenaire/{id}','App\Http\Controllers\PartenaireController@UpdatePartenaire')->name('UpdatePartenaire');
Route::get('/DeletePartenaire/{id}','App\Http\Controllers\PartenaireController@DeletePartenaire')->name('DeletePartenaire');

//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE AFFICHAGE /
Route::get('/','App\Http\Controllers\AffichageController@getSpace')->name('getSpace');
Route::get('/DetailSpace/{id}','App\Http\Controllers\AffichageController@DetailSpace')->name('DetailSpace');
Route::get('/test','App\Http\Controllers\AffichageController@test')->name('test');
Route::get('/FormReservation/{id}','App\Http\Controllers\ReservationController@FormReservation')->name('FormReservation');
Route::get('/viewProjet','App\Http\Controllers\AffichageController@viewProjet')->name('viewProjet');
//--------------------------------------------------------------------------------------------------------------//
                             //ROUTE DES reservation /
 Route::get('/ReserverEspace','App\Http\Controllers\ReservationController@ReserverEspace')->name('ReserverEspace');
 Route::get('/listeReservation','App\Http\Controllers\ReservationController@listeReservation')->name('listeReservation');
 Route::get('/listeReservationMembre','App\Http\Controllers\ReservationController@listeReservationMembre')->name('listeReservationMembre');

 Route::get('/ListeDemandeR','App\Http\Controllers\ReservationController@ListeDemandeR')->name('ListeDemandeR');
 Route::get('/EditReservation/{id}','App\Http\Controllers\ReservationController@EditReservation')->name('EditReservation');
 Route::Post('/UpdateReservation/{id}','App\Http\Controllers\ReservationController@UpdateReservation')->name('UpdateReservation');
 Route::get('/DeleteReservationBD/{id}','App\Http\Controllers\ReservationController@DeleteReservationBD')->name('DeleteReservationBD');
 Route::get('/attenteRE/{id}','App\Http\Controllers\ReservationController@attenteRE')->name('attenteRE');
 Route::get('/accepterRE/{id}','App\Http\Controllers\ReservationController@accepterRE')->name('accepterRE');
 Route::get('/deleteReservationA/{id}','App\Http\Controllers\ReservationController@deleteReservationA')->name('deleteReservationA');
 Route::get('/destroyReservation/{id}','App\Http\Controllers\ReservationController@destroyReservation')->name('destroyReservation');
 Route::get('/ArchiveReservation','App\Http\Controllers\ReservationController@ArchiveReservation')->name('ArchiveReservation');



 