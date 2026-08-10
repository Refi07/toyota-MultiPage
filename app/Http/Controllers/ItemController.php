<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier; // PERBAIKAN 1: Wajib panggil model Supplier di sini
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // 1. HALAMAN UTAMA: Menampilkan semua daftar barang + FITUR BONUS PENCARIAN & FILTER
    public function index(Request $request)
    {
        $query = Item::with(['category', 'supplier']); // Ditambahkan relasi supplier agar bisa tampil di tabel utama

        // Logika Bonus: Pencarian Nama atau Kode Barang
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('code', 'like', '%' . $request->search . '%');
            });
        }

        // Logika Bonus: Filter Berdasarkan Kategori
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Menggunakan paginate(10) sesuai struktur awal modul Anda
        $items = $query->paginate(10);
        $categories = Category::all();

        return view('items.index', compact('items', 'categories'));
    }

    // 2. HALAMAN TAMBAH: Menampilkan form tambah barang
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all(); // Mengambil data supplier dari database

        // Kirim variabel $suppliers ke dalam view
        return view('items.create', compact('categories', 'suppliers'));
    }

    // 3. PROSES SIMPAN: Menyimpan data barang baru ke database
    public function store(Request $request)
    {
        // PERBAIKAN 2: Menambahkan validasi untuk supplier_id dan stock agar wajib diisi
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id', 
            'code'        => 'required|unique:items,code',
            'name'        => 'required|string|max:255',
            'stock'       => 'required|integer|min:0',
            'image'       => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('items', 'public');
        }

        Item::create($data); // Otomatis menyimpan category_id, supplier_id, dan stock karena sudah diatur di $fillable
        return redirect()->route('items.index')->with('success', 'Data barang berhasil ditambah!');
    }

    // 4. HALAMAN EDIT: Menampilkan form edit barang
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();
        $suppliers = Supplier::all(); // Tambahkan ini agar halaman edit juga mengenali data supplier
        return view('items.edit', compact('item', 'categories', 'suppliers'));
    }

    // 5. PROSES UPDATE: Memperbarui data barang di database
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'code'        => 'required|unique:items,code,' . $id,
            'name'        => 'required|string|max:255',
            'stock'       => 'required|integer|min:0',
            'image'       => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('items', 'public');
        }

        $item->update($data);
        return redirect()->route('items.index')->with('success', 'Data barang berhasil diubah!');
    }

    // 6. PROSES HAPUS: Menghapus data barang dari database
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Data barang berhasil dihapus!');
    }
}