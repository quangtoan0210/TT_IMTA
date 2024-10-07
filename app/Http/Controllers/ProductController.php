<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $listSanPham = SanPham::query()->get()->all();
        return view('clients.trangchu', compact('listSanPham'));
    }
    public function shop(Request $request)
    {
        // Lấy min_price và max_price từ request, nếu không có thì gán giá trị mặc định
        $minPrice = $request->input('min_price', null);  
        $maxPrice = $request->input('max_price', null);  
    
        // Bắt đầu truy vấn cho sản phẩm
        $query = SanPham::query();
    
        // Nếu có giá trị min_price và max_price, thêm điều kiện lọc vào truy vấn
        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('gia_san_pham', [$minPrice, $maxPrice]);
        }
    
        // Lấy danh sách sản phẩm theo truy vấn
        $listSanPham = $query->get();
    
        // Lấy danh mục cùng với số lượng sản phẩm
        $danhmuc = DanhMuc::withCount('sanPhams')->get();
    
        // Trả về view với danh sách sản phẩm đã lọc và danh mục
        return view('clients.shop', compact('listSanPham', 'danhmuc'));
    }
    

    public function chiTietSanPham(string $id)
    {
        $sanPham = SanPham::query()->findOrFail($id);
        $listSanPham = SanPham::query()->get();

        return view('clients.sanphams.chitiet', compact('sanPham', 'listSanPham'));
    }
}
