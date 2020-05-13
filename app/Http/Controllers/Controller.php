<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Exports\UsersExport;

use App\Imports\UsersImport;

use Maatwebsite\Excel\Facades\Excel;

use Charts;
  

class MyController extends Controller

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function importExportView()

    {

       return view('import');

    }

   

    /**

    * @return \Illuminate\Support\Collection

    */

    public function export() 

    {

        return Excel::download(new UsersExport, 'users.xlsx');

    }

   

    /**

    * @return \Illuminate\Support\Collection

    */

    public function import() 

    {

        Excel::import(new UsersImport,request()->file('file'));

           

        return back();

    }

}
