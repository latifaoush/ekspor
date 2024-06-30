<?php
// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Menyimpan pesanan
    public function store(Request $request)
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

    // Menyelesaikan pesanan
    public function complete(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->update([
            'completed_at' => now(), // Menandai pesanan sebagai selesai
        ]);

        return redirect()->route('orders.show', $orderId);
    }

    // Menampilkan detail pesanan
    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        $total = $order->items->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('orders.show', compact('order', 'total'));
    }
}
