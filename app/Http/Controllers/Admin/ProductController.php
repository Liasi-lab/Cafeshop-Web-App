<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
public function index()
{
$products = Product::with('category')->latest()->paginate(10);
return view('admin.products.index', compact('products'));
}
public function create()
{
$categories = Category::all();
return view('admin.products.create', compact('categories'));
}
public function store(Request $request)
{
$request->validate([
'name' => 'required|string|max:200',
'category_id' => 'required|exists:categories,id',
'price' => 'required|numeric|min:0',
'stock' => 'required|integer|min:0',
'description' => 'nullable|string',
'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
], [
'name.required' => 'Nama produk wajib diisi.',
'category_id.required' => 'Kategori wajib dipilih.',
'price.required' => 'Harga wajib diisi.',
'stock.required' => 'Stok wajib diisi.',
'image.image' => 'File harus berupa gambar.',
'image.max' => 'Ukuran gambar maksimal 2MB.',
]);
$imagePath = null;
if ($request->hasFile('image')) {
$imagePath = $request->file('image')->store('products', 'public');
}
Product::create([
'name' => $request->name,
'category_id' => $request->category_id,
'price' => $request->price,
'stock' => $request->stock,
'description' => $request->description,
'image' => $imagePath,
]);
return redirect()->route('admin.products.index')
->with('success', 'Produk berhasil ditambahkan!');
}
public function edit(Product $product)
{
$categories = Category::all();
return view('admin.products.edit', compact('product', 'categories'));
}
public function update(Request $request, Product $product)
{
$request->validate([
'name' => 'required|string|max:200',
'category_id' => 'required|exists:categories,id',
'price' => 'required|numeric|min:0',
'stock' => 'required|integer|min:0',
'description' => 'nullable|string',
'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
]);
$imagePath = $product->image;
if ($request->hasFile('image')) {
if ($product->image) {
Storage::disk('public')->delete($product->image);
}
$imagePath = $request->file('image')->store('products', 'public');
}
$product->update([
'name' => $request->name,
'category_id' => $request->category_id,
'price' => $request->price,
'stock' => $request->stock,
'description' => $request->description,
'image' => $imagePath,
]);
return redirect()->route('admin.products.index')
->with('success', 'Produk berhasil diupdate!');
}
public function destroy(Product $product)
{
if ($product->image) {
Storage::disk('public')->delete($product->image);
}
$product->delete();
return back()->with('success', 'Produk berhasil dihapus!');
}
}