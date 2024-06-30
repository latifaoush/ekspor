<?php
// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Menampilkan halaman keranjang
    public function cart()
    {
        $userId = Auth::id();

        $order = Order::firstOrCreate(
            ['user_id' => $userId, 'completed_at' => null] // Mencari order aktif atau membuat yang baru
        );

        $orderItems = $order->items()->with('product')->get();
        $total = $orderItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('cart', compact('order', 'total'));
    }

    // Menambahkan produk ke keranjang
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $userId = Auth::id();
        $product = Product::findOrFail($validatedData['product_id']);

        $order = Order::firstOrCreate(
            ['user_id' => $userId, 'completed_at' => null] // Mencari order aktif atau membuat yang baru
        );

        $order->items()->updateOrCreate(
            ['product_id' => $product->id], // Jika item sudah ada, update quantity
            [
                'quantity' => $validatedData['quantity'],
                'price' => $product->price,
                'image' => $product->image,
                'product_name' => $product->product,
            ]
        );

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    // Menghapus item dari keranjang
    public function remove($id)
    {
        $item = OrderItem::findOrFail($id);
        $item->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }

    // Mengupdate item di keranjang
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $item = OrderItem::findOrFail($id);
        $item->update([
            'quantity' => $validatedData['quantity'],
        ]);

        return redirect()->route('cart.index')->with('success', 'Cart updated!');
    }
}
