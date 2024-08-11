    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\PesanController;
    use App\Http\Controllers\KatalogController;
    use App\Http\Controllers\ProfileController;



    Route::get('/', [KatalogController::class, 'indexx'])->name('katalog');
    Route::get('/detailkatalog/{id}', [KatalogController::class, 'detail'])->name('detailkatalog');
    Route::get('/tabelkatalog', [KatalogController::class, 'index'])->name('tabelkatalog');
    Route::get('/tambahkatalog', [KatalogController::class, 'tambahkatalog'])->name('tambahkatalog');
    Route::post('/simpankatalog', [KatalogController::class, 'simpankatalog'])->name('simpankatalog');
    Route::get('/deletekatalog/{id}', [KatalogController::class, 'delete'])->name('deletekatalog');
    Route::get('/editkatalog/{id}', [KatalogController::class, 'editkatalog'])->name('editkatalog');
    Route::post('/updatekatalog/{id}', [KatalogController::class, 'updatekatalog'])->name('updatekatalog');


    Route::get('/kontakkami', [ProfileController::class, 'kontakkami'])->name('kontakkami');
    Route::get('/tabelprofile', [ProfileController::class, 'profile'])->name('tabelprofile');
    Route::get('/tambahprofile', [ProfileController::class, 'tambahprofile'])->name('tambahprofile');
    Route::post('/simpanprofile', [ProfileController::class, 'simpanprofile'])->name('simpanprofile');
    Route::get('/editprofile/{id}', [ProfileController::class, 'editprofile'])->name('editprofile');
    Route::post('/updateprofile/{id}', [ProfileController::class, 'updateprofile'])->name('updateprofile');
    Route::get('/deleteprofile/{id}', [ProfileController::class, 'delete'])->name('deleteprofile');


    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/tambahdata', [KatalogController::class, 'tambahdata'])->name('tambahdata');
    Route::post('/simpandata', [KatalogController::class, 'simpandata'])->name('simpandata');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/pemesan',[PesanController::class, 'pemesan'])->name('pemesan');
        Route::post('/simpandata',[PesanController::class, 'simpandata'])->name('simpandata');
        Route::get('/admin',[PesanController::class, 'datapesanan'])->name('datapesanan');
        Route::get('/historypesanan',[PesanController::class, 'historypesanan'])->name('historypesanan');
        Route::get('/tabelpesanan',[PesanController::class, 'tabelpesanan'])->name('tabelpesanan');
        Route::get('/editpesanan/{id}', [PesanController::class, 'editpesanan'])->name('editpesanan');
        Route::put('/updatepesanan/{id}', [PesanController::class, 'updatepesanan'])->name('updatepesanan');
        Route::get('/laporanpesanan',[PesanController::class, 'laporanpesanan'])->name('laporanpesanan');

        Route::get('/cetakpesanan', [PesanController::class, 'cetakpesanan'])->name('cetakpesanan');
        Route::get('/search', [PesanController::class, 'search'])->name('search');



    });
