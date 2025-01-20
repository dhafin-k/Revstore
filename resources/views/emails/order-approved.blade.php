<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orer Approved</title>
</head>

<body>
    <h1>Order Approved</h1>

    <p>Dear {{ $order->user->name }},</p>
    <p>We are happy to inform you that your order has been approved.</p>
    <p><strong>Order Details:</strong></p>

    <ul>
        <li><strong>Order ID:</strong> {{ $order->id }}</li>
        <li><strong>Product:</strong> {{ $order->product->title }}</li>
        <li><strong>Quantity:</strong> {{ $order->quantity }}</li>
        <li><strong>Total Price:</strong> ${{ number_format($order->total_price, 2) }}</li>
    </ul>
    
    <p>Thank you for choosing our service! Your order will delivered whitin 24 hours</p>
</body>
</html>