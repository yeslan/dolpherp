<?php
/**
 * Created by PhpStorm.
 * User: qjj
 * Date: 2018/4/4
 * Time: 17:12
 */

namespace App\Http\Controllers;


use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{


    public function index()
    {
        $company = Company::find(14);
        $company->delete();
        //var_dump($company);exit;
        //return view('company.index', compact('company'));
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request)
    {

    }
}