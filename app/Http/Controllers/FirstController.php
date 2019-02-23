<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class FirstController extends Controller {
	public function show() {
		
	}
}

class UsmcController extends Controller {
	public function guns() {
		echo $users = DB::select('select * from `guns`');
	}
}


?>