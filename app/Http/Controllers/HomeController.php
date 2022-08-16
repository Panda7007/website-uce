<?php
 
namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function Home(){
    	return view('Home',["mentor" => Mentor::get()], ["title"=>"Home"]);
    }

        public function showMentor($id) {
        return view("mentor.show", [
            "title" => "Mentor",
            "mentor" => Mentor::find($id)
        ]);
    }

    public function perusahaan($id){
        return view("perusahaan",["title"=>"Perusahaan",
            "mentor" => Mentor::find($id)
    ]);
    }
}