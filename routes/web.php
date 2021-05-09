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

Route::group([
    'middleware' => 'auth'
  ], function() {
        Route::get('logout', 'Auth\LoginController@logout');

        // Route url
        Route::get('/', 'DashboardController@dashboardAnalytics')->name('index');

        // Users Pages
        Route::get('/user-list', 'UserPagesController@user_list');

        Route::get('/get-users', 'UserPagesController@get_users')->name('get-users');
        Route::get('/edit-user', 'UserPagesController@edit_user')->name('edit-user');
        Route::post('/create-user', 'UserPagesController@create_user')->name('create-user');
        Route::post('/update-account', 'UserPagesController@update_account')->name('update-account');
        Route::post('/update-information', 'UserPagesController@update_information')->name('update-information');
        Route::post('/update-social', 'UserPagesController@update_social')->name('update-social');
        Route::post('/delete-user', 'UserPagesController@delete_user')->name('delete-user');

        // Monster
        Route::get('/monster-list','MonsterController@index');
        Route::get('/monster-edit','MonsterController@edit_monster')->name('edit-monster');
        Route::get('/monster-add','MonsterController@add_monster')->name('add-monster');
        Route::POST('/monster-store','MonsterController@store_monster')->name('store-monster');
        Route::POST('/monster-update','MonsterController@update_monster')->name('update-monster');
        Route::POST('/monster-delete','MonsterController@delete_monster')->name('delete-monster');

        // Spell
        Route::get('/spell-list','SpellController@index');
        Route::get('/spell-edit','SpellController@edit_spell')->name('edit-spell');
        Route::get('/spell-add','SpellController@add_spell')->name('add-spell');
        Route::POST('/spell-store','SpellController@store_spell')->name('store-spell');
        Route::POST('/spell-update','SpellController@update_spell')->name('update-spell');
        Route::POST('/spell-delete','SpellController@delete_spell')->name('delete-spell');

        // Rune Set
        Route::get('/rune-set-list','RuneSetController@index');
        Route::get('/rune-set-edit','RuneSetController@edit_rune_set')->name('edit-rune-set');
        Route::get('/rune-set-add','RuneSetController@add_rune_set')->name('add-rune-set');
        Route::POST('/rune-set-store','RuneSetController@store_rune_set')->name('store-rune-set');
        Route::POST('/rune-set-update','RuneSetController@update_rune_set')->name('update-rune-set');
        Route::POST('/rune-set-delete','RuneSetController@delete_rune_set')->name('delete-rune-set');

        // Team comp
        Route::get('/team-comp-list','TeamCompController@index');
        Route::get('/team-comp-edit','TeamCompController@edit_team_comp')->name('edit-team-comp');
        Route::get('/team-comp-add','TeamCompController@add_team_comp')->name('add-team-comp');
        Route::POST('/team-comp-store','TeamCompController@store_team_comp')->name('store-team-comp');
        Route::POST('/team-comp-update','TeamCompController@update_team_comp')->name('update-team-comp');
        Route::POST('/team-comp-delete','TeamCompController@delete_team_comp')->name('delete-team-comp');
  });

Route::get('/error-404', 'MiscellaneousController@error_404');
Route::get('/error-500', 'MiscellaneousController@error_500');

// // Users Pages
Route::get('/app-user-list', 'UserPagesController@user_list');
Route::get('/app-user-view', 'UserPagesController@user_view');
Route::get('/app-user-edit', 'UserPagesController@user_edit');

// // Route Data List
// Route::resource('/data-list-view','DataListController');
// Route::resource('/data-thumb-view', 'DataThumbController');

// // Route Dashboards
// Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics');
// Route::get('/dashboard-ecommerce', 'DashboardController@dashboardEcommerce');

// // Route Apps
// Route::get('/app-email', 'EmailAppController@emailApp');
// Route::get('/app-chat', 'ChatAppController@chatApp');
// Route::get('/app-todo', 'ToDoAppController@todoApp');
// Route::get('/app-calender', 'CalenderAppController@calenderApp');
// Route::get('/app-ecommerce-shop', 'EcommerceAppController@ecommerce_shop');
// Route::get('/app-ecommerce-details', 'EcommerceAppController@ecommerce_details');
// Route::get('/app-ecommerce-wishlist', 'EcommerceAppController@ecommerce_wishlist');
// Route::get('/app-ecommerce-checkout', 'EcommerceAppController@ecommerce_checkout');


// // Route Content
// Route::get('/content-grid', 'ContentController@grid');
// Route::get('/content-typography', 'ContentController@typography');
// Route::get('/content-text-utilities', 'ContentController@text_utilities');
// Route::get('/content-syntax-highlighter', 'ContentController@syntax_highlighter');
// Route::get('/content-helper-classes', 'ContentController@helper_classes');

// // Route Color
// Route::get('/colors', 'ContentController@colors');

// // Route Icons
// Route::get('/icons-feather', 'IconsController@icons_feather');
// Route::get('/icons-font-awesome', 'IconsController@icons_font_awesome');

// // Route Cards
// Route::get('/card-basic', 'CardsController@card_basic');
// Route::get('/card-advance', 'CardsController@card_advance');
// Route::get('/card-statistics', 'CardsController@card_statistics');
// Route::get('/card-analytics', 'CardsController@card_analytics');
// Route::get('/card-actions', 'CardsController@card_actions');

// // Route Components
// Route::get('/component-alert', 'ComponentsController@alert');
// Route::get('/component-buttons', 'ComponentsController@buttons');
// Route::get('/component-breadcrumbs', 'ComponentsController@breadcrumbs');
// Route::get('/component-carousel', 'ComponentsController@carousel');
// Route::get('/component-collapse', 'ComponentsController@collapse');
// Route::get('/component-dropdowns', 'ComponentsController@dropdowns');
// Route::get('/component-list-group', 'ComponentsController@list_group');
// Route::get('/component-modals', 'ComponentsController@modals');
// Route::get('/component-pagination', 'ComponentsController@pagination');
// Route::get('/component-navs', 'ComponentsController@navs');
// Route::get('/component-navbar', 'ComponentsController@navbar');
// Route::get('/component-tabs', 'ComponentsController@tabs');
// Route::get('/component-pills', 'ComponentsController@pills');
// Route::get('/component-tooltips', 'ComponentsController@tooltips');
// Route::get('/component-popovers', 'ComponentsController@popovers');
// Route::get('/component-badges', 'ComponentsController@badges');
// Route::get('/component-pill-badges', 'ComponentsController@pill_badges');
// Route::get('/component-progress', 'ComponentsController@progress');
// Route::get('/component-media-objects', 'ComponentsController@media_objects');
// Route::get('/component-spinner', 'ComponentsController@spinner');
// Route::get('/component-toast', 'ComponentsController@toast');

// // Route Extra Components
// Route::get('/ex-component-avatar', 'ExtraComponentsController@avatar');
// Route::get('/ex-component-chips', 'ExtraComponentsController@chips');
// Route::get('/ex-component-divider', 'ExtraComponentsController@divider');

// // Route Forms
// Route::get('/form-select', 'FormsController@select');
// Route::get('/form-switch', 'FormsController@switch');
// Route::get('/form-checkbox', 'FormsController@checkbox');
// Route::get('/form-radio', 'FormsController@radio');
// Route::get('/form-input', 'FormsController@input');
// Route::get('/form-input-groups', 'FormsController@input_groups');
// Route::get('/form-number-input', 'FormsController@number_input');
// Route::get('/form-textarea', 'FormsController@textarea');
// Route::get('/form-date-time-picker', 'FormsController@date_time_picker');
// Route::get('/form-layout', 'FormsController@layouts');
// Route::get('/form-wizard', 'FormsController@wizard');
// Route::get('/form-validation', 'FormsController@validation');

// // Route Tables
// Route::get('/table', 'TableController@table');
// Route::get('/table-datatable', 'TableController@datatable');
// Route::get('/table-ag-grid', 'TableController@ag_grid');

// // Route Pages
// Route::get('/page-user-profile', 'PagesController@user_profile');
// Route::get('/page-faq', 'PagesController@faq');
// Route::get('/page-knowledge-base', 'PagesController@knowledge_base');
// Route::get('/page-kb-category', 'PagesController@kb_category');
// Route::get('/page-kb-question', 'PagesController@kb_question');
// Route::get('/page-search', 'PagesController@search');
// Route::get('/page-invoice', 'PagesController@invoice');
// Route::get('/page-account-settings', 'PagesController@account_settings');

// // Route Authentication Pages
// Route::get('/auth-login', 'AuthenticationController@login');
// Route::get('/auth-register', 'AuthenticationController@register');
// Route::get('/auth-forgot-password', 'AuthenticationController@forgot_password');
// Route::get('/auth-reset-password', 'AuthenticationController@reset_password');
// Route::get('/auth-lock-screen', 'AuthenticationController@lock_screen');

// // Route Miscellaneous Pages
// Route::get('/page-coming-soon', 'MiscellaneousController@coming_soon');
// Route::get('/error-404', 'MiscellaneousController@error_404');
// Route::get('/error-500', 'MiscellaneousController@error_500');
// Route::get('/page-not-authorized', 'MiscellaneousController@not_authorized');
// Route::get('/page-maintenance', 'MiscellaneousController@maintenance');

// // Route Charts & Google Maps
// Route::get('/chart-apex', 'ChartsController@apex');
// Route::get('/chart-chartjs', 'ChartsController@chartjs');
// Route::get('/chart-echarts', 'ChartsController@echarts');
// Route::get('/maps-google', 'ChartsController@maps_google');

// // Route Extension Components
// Route::get('/ext-component-sweet-alerts', 'ExtensionController@sweet_alert');
// Route::get('/ext-component-toastr', 'ExtensionController@toastr');
// Route::get('/ext-component-noui-slider', 'ExtensionController@noui_slider');
// Route::get('/ext-component-file-uploader', 'ExtensionController@file_uploader');
// Route::get('/ext-component-quill-editor', 'ExtensionController@quill_editor');
// Route::get('/ext-component-drag-drop', 'ExtensionController@drag_drop');
// Route::get('/ext-component-tour', 'ExtensionController@tour');
// Route::get('/ext-component-clipboard', 'ExtensionController@clipboard');
// Route::get('/ext-component-plyr', 'ExtensionController@plyr');
// Route::get('/ext-component-context-menu', 'ExtensionController@context_menu');
// Route::get('/ext-component-swiper', 'ExtensionController@swiper');
// Route::get('/ext-component-i18n', 'ExtensionController@i18n');

Auth::routes();

Route::post('/login/validate', 'Auth\LoginController@validate_api');
