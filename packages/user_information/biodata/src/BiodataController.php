<?php 
namespace user_information\biodata;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    public function __construct()
    {
    	# code...
    }

    public function index()
    {
        $user_information = array("name"=>"Ravindra", "surname"=>"Miyani","hobby"=>"I love coding and travelling");
    	return View("biodata::bio",compact("user_information"));
    }

}

?>