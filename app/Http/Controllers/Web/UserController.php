<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return view('index');
    }


    public function getAdmin(User $user)
    {
        $products = Product::where('user_id', $user->id)->get();
        return view('admin_page', ['products' => $products, 'user' => $user]);
    }

    public function editProduct(Request $request, User $user, Product $product)
    {
        return view('edit_product', ['product' => $product, 'user' => $user]);
    }

    public function updateProduct(ProductRequest $request, User $user, Product $product)
    {
        if ($product->user_id === $user->id) {

            if ($request->hasFile('image')) {

                $imagePath = $request->file('image')->store('public/images');
                $imageName = basename($imagePath);

                $product->image = $imageName;
            }
            $product->name = $request->nama;
            $product->stock = $request->stok;
            $product->weight = $request->berat;
            $product->price = $request->harga;
            $product->description = $request->deskripsi;
            $product->condition = $request->kondisi;
            $product->save();
        }

        return redirect()->route('admin_page', ['user' => $user->id])->with('message', 'Berhasil update data');
    }

    public function deleteProduct(Request $request, User $user, Product $product)
    {
        if ($product->user_id === $user->id) {
            $product->delete();
        }
        return redirect()->back()->with('status', 'Berhasil menghapus data');
    }


    public function getFormRequest()
    {
        return view('form_request');
    }


    public function handleRequest(Request $request, User $user)
    {
        return view('handle_request', ['user' => $user]);
    }

    public function postRequest(ProductRequest $request, User $user)
    {

        $imagePath = $request->file('image')->store('public/images');
        $imageName = basename($imagePath);
        Product::create([
            'user_id' => $user->id,
            'image' => $imageName,
            'name' => $request->nama,
            'weight' => $request->berat,
            'price' => $request->harga,
            'condition' => $request->kondisi,
            'stock' => $request->stok,
            'description' => $request->deskripsi,
        ]);

        return redirect()->route('admin_page', ['user' => $user->id]);
    }

    public function getProduct()
    {

        // $user = User::find(1);
        // $data = $user->products;
        $data = Product::all();

        return view('products')->with('products', $data);
    }


    public function getProfile(Request $request, User $user)
    {
        $user = User::with('summarize')->find($user->id);

        return view('profile', ['user' => $user]);
    }
}
