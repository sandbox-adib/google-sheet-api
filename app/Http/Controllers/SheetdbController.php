<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class SheetdbController extends Controller
{
    public function get() {
        $sheetdb = new SheetDB('1ajYr5V-yAvKhkUvXG6TXBGglkL2b5CKXeqnLXVtTUbM');

        dd($sheetdb->get());
    }

}
