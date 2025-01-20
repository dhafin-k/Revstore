<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartComponent extends Component
{
    public $cart = [];
    public $total = 0;
    public function mount()

    {
        $this->cart = session()->get('cart', []);
     
        $this->calculateTotal();
    }

    public function removeFromCart($productId)
    {
        if (isset($this->cart[$productId])) {
            unset($this->cart[$productId]);
            session()->put('cart', $this->cart);
            $this->calculateTotal();

            session()->flash('message', 'Product removed from cart.');
        }
    }

    public function updateQuantity($productId, $quantity)
    {
        if (isset($this->cart[$productId]) && $quantity > 0) {
            $this->cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $this->cart);
            $this->calculateTotal();

            session()->flash('message', 'Cart updated successfully.');
        }
    }

    public function confirmOrder()
{
    if (empty($this->cart)) {
        session()->flash('error', 'Cart is empty. Add products to confirm an order.');
        return;
    }

    $orderTotal = 0;
    foreach ($this->cart as $productId => $item) {
        $productTotal = $item['price'] * $item['quantity'];
        $orderTotal += $productTotal;
        Order::create([
            'product_id' => $productId,
            'user_id' => Auth::id(),
            'quantity' => $item['quantity'],
            'price_per_item' => $item['price'],
            'total_price' => $productTotal,
            'status' => 'pending',
        ]);
    }
    // Clear the cart after confirming the order
    session()->forget('cart');
    $this->cart = [];
    $this->total = 0;

    session()->flash('message', "Order placed successfully! Your total is $orderTotal. We will notify you once it is approved.");
}

    public function calculateTotal()

    {
        $this->total = array_reduce($this->cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    }

    public function render()

    {
        return view('livewire.cart-component', ['cart' => $this->cart, 'total' => $this->total]);
    }
}
