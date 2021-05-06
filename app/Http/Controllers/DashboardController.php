<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct() {
    }
     
    // Dashboard - Analytics
    public function dashboardAnalytics(){
        // $pageConfigs = [
        //     'pageHeader' => false
        // ];

        // return view('/pages/dashboard-analytics', [
        //     'pageConfigs' => $pageConfigs
        // ]);

        $breadcrumbs = [
            // ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Pages"], ['name'=>"User List"]
            ['link'=>"/",'name'=>"Home"], ['name'=>"User Manage"]
        ];
        return view('/user/app-user-list', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Dashboard - Ecommerce
    public function dashboardEcommerce(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/dashboard-ecommerce', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}

