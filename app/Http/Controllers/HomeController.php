<?php
 
namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function Home(){
    	return view('Home',["mentor" => Mentor::get()]);
    }
}