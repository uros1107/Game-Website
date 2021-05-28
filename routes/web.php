<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

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



// Auth::routes();
Route::get('/login', function() {
    return redirect()->route('index', Session::get('lang'));
});
Route::post('/login', 'Auth\LoginController@user_login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');


Route::group([
    'middleware' => 'auth'
  ], function() {
    Route::get('/{lang}/user-private/{slug}', 'Frontend\FrontendController@private')->name('user-private');

    Route::post('/update', 'Auth\RegisterController@update')->name('update');
});

// Route url
Route::get('/', function() {
    return redirect()->route('index', Session::get('lang'));
});
Route::get('/{lang}', 'Frontend\FrontendController@index')->name('index');

Route::get('/{lang}/monsters', 'Frontend\MonsterController@monster_list')->name('monster-list');
Route::get('/{lang}/monstres', 'Frontend\MonsterController@monster_list')->name('fr-monster-list');
Route::get('/{lang}/monsters/{slug?}', 'Frontend\MonsterController@monster_detail')->name('monster-detail');
Route::get('/{lang}/monstres/{slug?}', 'Frontend\MonsterController@monster_detail')->name('fr-monster-detail');
Route::get('/{lang}/get-monster', 'Frontend\MonsterController@get_monster')->name('get-monster');
Route::get('/{lang}/get-m-monster', 'Frontend\MonsterController@get_m_monster')->name('get-m-monster');
Route::get('/{lang}/get-li-monster', 'Frontend\MonsterController@get_li_monster')->name('get-li-monster');
Route::get('/{lang}/calculate-monster', 'Frontend\MonsterController@calculate_character')->name('calculate-monster');
Route::get('/{lang}/get-spell', 'Frontend\MonsterController@get_spell')->name('get-spell');
Route::get('/{lang}/get-m-spell', 'Frontend\MonsterController@get_m_spell')->name('get-m-spell');

Route::get('/{lang}/add-rune-set/{slug}', 'Frontend\MonsterController@add_rune_set')->name('user-add-rune-set');
Route::POST('/{lang}/store-rune-set', 'Frontend\MonsterController@store_rune_set')->name('rune-set-store');
Route::POST('/{lang}/add-runes-likes', 'Frontend\MonsterController@add_runes_likes')->name('add-runes-likes');
Route::POST('/{lang}/add-runes-dislikes', 'Frontend\MonsterController@add_runes_dislikes')->name('add-runes-dislikes');

Route::get('/{lang}/comps', 'Frontend\MonsterController@comps_list')->name('comps-list');
Route::get('/{lang}/compos', 'Frontend\MonsterController@comps_list')->name('fr-comps-list');
Route::POST('/{lang}/comps-submit', 'Frontend\MonsterController@comps_submit')->name('comps-submit');
Route::POST('/{lang}/comps-m-submit', 'Frontend\MonsterController@comps_m_submit')->name('comps-m-submit');
Route::get('/{lang}/comps/{slug}', 'Frontend\MonsterController@comps_detail')->name('comps-detail');
Route::get('/{lang}/compos/{slug}', 'Frontend\MonsterController@comps_detail')->name('fr-comps-detail');
Route::POST('/{lang}/comps-comment', 'Frontend\MonsterController@comps_comment')->name('comps-comment');
Route::POST('/{lang}/add-comps-likes', 'Frontend\MonsterController@add_comps_likes')->name('add-comps-likes');
Route::POST('/{lang}/add-comps-dislikes', 'Frontend\MonsterController@add_comps_dislikes')->name('add-comps-dislikes');

Route::get('/{lang}/comps-builder', 'Frontend\MonsterController@comps_builder')->name('comps-builder');
Route::get('/{lang}/compos-builder', 'Frontend\MonsterController@comps_builder')->name('fr-comps-builder');

Route::get('/{lang}/search', 'Frontend\MonsterController@search')->name('search');
Route::get('/{lang}/terms-of-use', 'Frontend\MonsterController@terms_of_use')->name('terms-of-use');

Route::get('/{lang}/setting-lang', 'Frontend\FrontendController@setting_language')->name('setting-lang');

Route::get('/{lang}/user/{name}', 'Frontend\FrontendController@public')->name('user-public');

// Route::get('/en/sitemap.xml', function() {
//     return redirect(Request::root().'/en/sitemap.xml');
// });
// Route::get('/fr/sitemap.xml', function() {
//     return redirect(Request::root().'/fr/sitemap.xml');
// });

// -------------------------- Filter route start -----------------------------
Route::get('/{lang}/get-filter-monster', 'Frontend\FilterController@get_monster')->name('get-filter-monster');
Route::get('/{lang}/get-filter-team-comps', 'Frontend\FilterController@get_team_comps')->name('get-filter-team-comps');
Route::get('/{lang}/get-filter-builder-monster', 'Frontend\FilterController@get_builder_monster')->name('get-filter-builder-monster');
// -------------------------- Filter route end -----------------------------














// ============================================================= Admin Route ==============================================
Route::prefix('admin')->group(function() {

    // ------------- Admin login -------------
    // Route::get('/', function() {
    //     return redirect()->route('admin.login');
    // });
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::group([
        'middleware' => 'admin'
      ], function() {
            // Route::get('logout', 'Auth\LoginController@logout');
    
            // Users Pages
            Route::get('/users', 'Admin\UserPagesController@user_list')->name('user-list');
            Route::get('/get-users', 'Admin\UserPagesController@get_users')->name('get-users');
            Route::get('/edit-user', 'Admin\UserPagesController@edit_user')->name('edit-user');
            Route::post('/create-user', 'Admin\UserPagesController@create_user')->name('create-user');
            Route::post('/update-account', 'Admin\UserPagesController@update_account')->name('update-account');
            Route::post('/update-information', 'Admin\UserPagesController@update_information')->name('update-information');
            Route::post('/update-social', 'Admin\UserPagesController@update_social')->name('update-social');
            Route::post('/delete-user', 'Admin\UserPagesController@delete_user')->name('delete-user');
    
            // Monster
            Route::get('/monster','Admin\MonsterController@index');
            Route::get('/monster-edit','Admin\MonsterController@edit_monster')->name('edit-monster');
            Route::get('/monster-add','Admin\MonsterController@add_monster')->name('add-monster');
            Route::POST('/monster-store','Admin\MonsterController@store_monster')->name('store-monster');
            Route::POST('/monster-update','Admin\MonsterController@update_monster')->name('update-monster');
            Route::POST('/monster-delete','Admin\MonsterController@delete_monster')->name('delete-monster');
    
            // Spell
            Route::get('/spells','Admin\SpellController@index');
            Route::get('/spell-edit','Admin\SpellController@edit_spell')->name('edit-spell');
            Route::get('/spell-add','Admin\SpellController@add_spell')->name('add-spell');
            Route::POST('/spell-store','Admin\SpellController@store_spell')->name('store-spell');
            Route::POST('/spell-update','Admin\SpellController@update_spell')->name('update-spell');
            Route::POST('/spell-delete','Admin\SpellController@delete_spell')->name('delete-spell');
    
            // Rune Set
            Route::get('/runesets','Admin\RuneSetController@index');
            Route::get('/rune-set-edit','Admin\RuneSetController@edit_rune_set')->name('edit-rune-set');
            // Route::get('/rune-set-add','Admin\RuneSetController@add_rune_set')->name('add-rune-set');
            Route::POST('/rune-set-store','Admin\RuneSetController@store_rune_set')->name('store-rune-set');
            Route::POST('/rune-set-update','Admin\RuneSetController@update_rune_set')->name('update-rune-set');
            Route::POST('/rune-set-delete','Admin\RuneSetController@delete_rune_set')->name('delete-rune-set');
    
            // Team comp
            Route::get('/team-comps','Admin\TeamCompController@index');
            Route::get('/team-comp-edit','Admin\TeamCompController@edit_team_comp')->name('edit-team-comp');
            // Route::get('/team-comp-add','Admin\TeamCompController@add_team_comp')->name('add-team-comp');
            Route::POST('/team-comp-store','Admin\TeamCompController@store_team_comp')->name('store-team-comp');
            Route::POST('/team-comp-update','Admin\TeamCompController@update_team_comp')->name('update-team-comp');
            Route::POST('/team-comp-delete','Admin\TeamCompController@delete_team_comp')->name('delete-team-comp');

            // Comment
            Route::get('/comments','Admin\CommentController@index');
            Route::get('/comment-edit','Admin\CommentController@edit_comment')->name('edit-comment');
            Route::POST('/comment-update','Admin\CommentController@update_comment')->name('update-comment');
            Route::POST('/comment-delete','Admin\CommentController@delete_comment')->name('delete-delete');
    });
});


Route::get('/error-404', 'Frontend\MiscellaneousController@error_404');
Route::get('/error-500', 'Frontend\MiscellaneousController@error_500');
