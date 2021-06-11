<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Kategori;
use App\Product_custom;
use App\Custom;
use App\Berita;
use App\Testimoni;
class FrontendController extends Controller
{
	public function index()
	{
        $testimonis = Testimoni::all();
    return view('frontend.index',compact('testimonis'));
}

	public function profile()
{
    return view('frontend.profile');
}

	public function custom(Product $product)
    {  
        return view('frontend.custom', compact('product'));
    }
    // public function login(Product $product)
    // {
    //     return view('auth.register', compact('product'));
    // }
	public function product()
{
    $kategorip = Product::all();
    return view('frontend.product', compact('kategorip'));
}  
    public function product_index()
{
    // $kategoripi = Product::all();
    return view('frontend.index');
}
    
     public function product_custom()
{
    $kategoripc = Product_custom::all();
    return view('frontend.index', compact('kategoripc'));
}
    public function filter_product($id)
{
    $kategorip = Product::where('kategori_id', '=', $id)->get();
    return view('frontend.product', compact('kategorip'));
}
    public function filter_product_index($id)
{
    $kategoripi = Product::where('kategori_id', '=', $id)->get();
    return view('frontend.index', compact('kategoripi'));
} 
    public function filter_product_custom($id)
{
    $kategoripc = Product_custom::where('kategori_id', '=', $id)->get();
    return view('frontend.index', compact('kategoripc'));
} 
    public function produk(Product $product)
    {
        $product = Product::all();
        return view('frontend.index',compact('product'));
    }
    public function produk1(Product $product)
    {
        $product = Product::all();
        return view('frontend.product',compact('product'));
    }
    public function single_blog(Product $product)
    {
        return view('frontend.index', compact('product'));
    }
    public function single_blog_product(Product $product)
    {
        return view('frontend.product', compact('product'));
    }

    public function filter_buku($id)
    {
        $kategorig = Product::where('kategori_id','=',$id)->get();
        return view('frontend.index', compact('kategorig'));
    }

    public function blog()
    {
        $beritas  = Berita::orderby('created_at','DESC')->paginate(8);
        return view('frontend.blog', compact('beritas'));
    }

    public function artikel()
    {
        $artikels  = Berita::orderby('created_at','DESC')->paginate(4);
        return view('frontend.index', compact('artikels'));
    }

    public function singleblog($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('frontend.singleblog',compact('beritas'));
    }

    public function productdetail($id)
    {
        $products = Product::findOrFail($id);
        return view('frontend.productdetail',compact('products'));
    }

    public function search(Request $req){
        if($req->search == ""){
            $product = search::paginate(20);
            return view('frontend.result',compact('product'));
        }else{
            $product = Product::where('nama','LIKE','%' . $req->search . '%')->paginate(20);
            $product->appends($req->only('search'));
            $kategori = Kategori::all();

            return view('frontend.result',compact('product','kategori'));
        }
    }

    public function testimoni()
    {
        $testimonis  = Testimoni::orderby('created_at','DESC')->paginate(8);
        return view('frontend.testimoni', compact('testimonis'));
    }
}