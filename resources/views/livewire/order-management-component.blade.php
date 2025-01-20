<div>
    <div class="mx-2 com_card">
        <h3 class="mb-3 com_card_title">All Orders</h3>

        <div class="table-responsive">
          <table class="data-table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price Per Item</th>
                <th>Total Price</th>
                <th>User</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>${{ number_format($order->price_per_item, 2) }}</td>
                    <td>${{ number_format($order->total_price, 2) }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <button class="btn btn-primary" wire:click="approveOrder({{ $order->id }})">Approve</button>
    
                        <button class="btn btn-danger" wire:click="cancelOrder({{ $order->id }})">Cancel</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
 