<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialsController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    public function index()
    {
        $testimonials = DB::table('testimonials')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('admin.testimonials', [
            'testimonials' => $testimonials
        ]);
    }
    
    public function toggleStatus($testimonial_id)
    {
        if (!$this->request->ajax()) {
            abort(404);
        }
    
        $response = [];
        
        $updateSuccess = DB::table('testimonials')
            ->where('id', '=', $testimonial_id)
            ->update(['flag_active' => DB::raw('CASE WHEN flag_active = 1 THEN 0 ELSE 1 END')]);
    
        if ($updateSuccess) {
            $response['data'] = Testimonial::find($testimonial_id);
        } else {
            $response['message'] = 'Could not update testimonial status';
        }
    
        $response['success'] = $updateSuccess;
        
        return response()->json($response);
    }
}
