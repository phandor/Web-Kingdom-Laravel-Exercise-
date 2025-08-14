<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index(){
        return 'Welcome to your Inventory';
    }

    private function getInventory() {
        return 'All Items';
    }
}
