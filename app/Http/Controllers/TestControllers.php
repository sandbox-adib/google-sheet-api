<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheet;

class TestControllers extends Controller
{
    public function readSpreadsheet()
    {
        $gs = new GoogleSheet();

        $data = $gs->readGoogleSheet(); 
        
        return view('Spreadsheet.index', compact('data'));
    }

    public function writeSpreadsheet(Request $request)
    {
        $gs = new GoogleSheet();

        $values = [
            [
                $request['name'],
                $request['address'],
            ]
        ];
        
        $data = $gs->writeGoogleSheet($values);

        return redirect('/');
    }
}
