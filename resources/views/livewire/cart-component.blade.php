<div>
    <div class="row">
    @if (session()->has('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif
    
    @if (session()->has('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if (empty($cart))
        <p>Your cart is empty.</p>
    @else
        <div class="col-12">
          <div class="product_card">
            <div class="table-reponsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
  
                <tbody>
                    @foreach ($cart as $productId => $item)
                    <tr>
                        <td>{{ $item['title'] }}</td>
                        <td>${{ $item['price'] }}</td>
                        <td>
                            <input type="number" wire:model.lazy="cart.{{ $productId }}.quantity" 
                                   min="1" wire:change="updateQuantity({{ $productId }}, cart.{{ $productId }}.quantity)">
                        </td>
                        <td>${{ $item['price'] * $item['quantity'] }}</td>
                        <td>
                            <button class="btn btn-warning" wire:click="removeFromCart({{ $productId }})">Remove</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
  
                <tfoot>
                  <tr>
                    <th>Total</th>
                    <td></td>
                    <td></td>
                    <td>${{ $total }}</td>
                    <td><button wire:click="confirmOrder" class="btn btn-primary">Confirm Order</button></td>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        @endif
      </div>
</div>
