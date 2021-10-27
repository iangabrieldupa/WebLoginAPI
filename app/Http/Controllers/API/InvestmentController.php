<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Repositories\InvestmentRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class InvestmentController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $investment = Investment::all();

        if (count($investment) > 0) {
            return response()->json($investment, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no registrations in the database'], 404);
        }
    }
}
?>