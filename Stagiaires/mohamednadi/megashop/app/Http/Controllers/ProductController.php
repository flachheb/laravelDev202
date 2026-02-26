<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category($slug)
    {
        
        include(base_path('data.php'));

        
        $dataKey = str_replace('-', '_', $slug);

      
        $categoryProducts = $products[$dataKey] ?? [];
        $categoryInfo = $categories[$dataKey] ?? null;

        if (!$categoryInfo) { abort(404); }

        return view('pages.category', [
            'products' => $categoryProducts,
            'category' => $categoryInfo
        ]);
    }
}