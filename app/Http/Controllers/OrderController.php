<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderConfirm;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $donHangs = Auth::user()->donHang;

        $trangThaiDonHang = DonHang::TRANG_THAI_DON_HANG;

        $type_cho_xac_nhan = DonHang::CHO_XAC_NHAN;

        $type_dang_van_chuyen = DonHang::DANG_VAN_CHUYEN;

        return view('clients.donhangs.index', compact('donHangs', 'trangThaiDonHang', 'type_cho_xac_nhan', 'type_dang_van_chuyen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cart = session()->get('cart', []);
        if (!empty($cart)) {
            $total = 0;
            $subTotal = 0;
            foreach ($cart as $item) {
                $subTotal += $item['gia'] * $item['so_luong'];
            }
            $shipping = 30000;
            $total = $subTotal + $shipping;
            return view('clients.donhangs.create', compact('cart', 'subTotal', 'total', 'shipping'));
        }
        return redirect()->route('cart.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $params = $request->except('_token');
                $params['ma_don_hang'] = $this->generateUniqueOrderCode();
                $donHang = DonHang::query()->create($params);
                $don_hang_id = $donHang->id;
                $carts = session()->get('cart', []);

                foreach ($carts as $key => $item) {
                    $thanhTien = $item['gia'] * $item['so_luong'];

                    $donHang->chiTietDonHang()->create([
                        'don_hang_id' => $don_hang_id,
                        'san_pham_id' => $key,
                        'don_gia' => $item['gia'],
                        'so_luong' => $item['so_luong'],
                        'thanh_tien' => $thanhTien
                    ]);
                }
                DB::commit();
                Mail::to($donHang->email_nguoi_nhan)->queue(new OrderConfirm($donHang));
                session()->put('cart', []);

                return redirect()->route('donhangs.index')->with('success', 'Đơn hàng đã được tạo thành công !');
            } catch (\Exception $e) {
                DB::rollBack();

                return redirect()->route('cart.list')->with('error', 'Có lỗi khi tạo đơn hàng. Vui lòng thử lại sau');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donHang = DonHang::query()->findOrFail($id);

        $trangThaiDonHang = DonHang::TRANG_THAI_DON_HANG;

        $trangThaiThanhToan = DonHang::TRANG_THAI_THANH_TOAN;

        return view('clients.donhangs.show', compact('donHang', 'trangThaiDonHang', 'trangThaiThanhToan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donHang = DonHang::query()->findOrFail($id);

        DB::beginTransaction();

        try {
            if ($request->has('huy_don_hang')) {
                $donHang->update(['trang_thai_don_hang' => DonHang::HUY_DON_HANG]);
            } elseif ($request->has('da_giao_hang')) {
                $donHang->update(['trang_thai_don_hang' => DonHang::DA_GIAO_HANG]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function generateUniqueOrderCode()
    {
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (DonHang::where('ma_don_hang', $orderCode)->exists());

        return $orderCode;
    }
}
