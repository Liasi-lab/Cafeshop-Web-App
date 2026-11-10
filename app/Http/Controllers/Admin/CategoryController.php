<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
public function index()
{
$categories = Category::withCount('products')->latest()->get();
return view('admin.categories.index', compact('categories'));
}
public function create()
{
return view('admin.categories.create');
}
public function store(Request $request)
{
$request->validate([
'name' => 'required|string|max:100|unique:categories,name',
], [
'name.required' => 'Nama kategori wajib diisi.',
'name.unique' => 'Nama kategori sudah ada.',
]);
Category::create(['name' => $request->name]);
return redirect()->route('admin.categories.index')
->with('success', 'Kategori berhasil ditambahkan!');
}
public function edit(Category $category)
{
return view('admin.categories.edit', compact('category'));
}
public function update(Request $request, Category $category)
{
$request->validate([
'name' => 'required|string|max:100|unique:categories,name,' . $category->id,
], [
'name.required' => 'Nama kategori wajib diisi.',
'name.unique' => 'Nama kategori sudah ada.',
]);
$category->update(['name' => $request->name]);
return redirect()->route('admin.categories.index')
->with('success', 'Kategori berhasil diupdate!');
}
public function destroy(Category $category)
{
if ($category->products()->count() > 0) {
return back()->with('error', 'Kategori tidak bisa dihapus karena masih
punya produk!');
}
$category->delete();
return back()->with('success', 'Kategori berhasil dihapus!');
}
}