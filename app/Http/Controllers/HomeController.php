<?php
 
namespace App\Http\Controllers;
use App\Models\Media;
use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
class HomeController extends Controller
{
    public function Home(){
    	return view('Home',[
            "mentor" => Mentor::get(),
            "media" => Media::get(),
            "title" => "Home"
        ]);
    }

        public function showMentor($id) {
        return view("mentor.show", [
            "title" => "Mentor",
            "mentor" => Mentor::find($id),
        ]);
    }

    public function perusahaan($id){
        return view("perusahaan",["title"=>"Perusahaan",
            "mentor" => Mentor::find($id)
    ]);
    }
}