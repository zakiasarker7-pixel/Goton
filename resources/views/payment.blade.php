@extends('layout')

@section('content')

<div style="max-width: 600px; margin: 50px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">

    <h2 style="text-align:center; margin-bottom:20px;">Payment Page</h2>

    <!-- Order Summary -->
    <div style="margin-bottom:20px; padding:15px; background:#f4f6f9; border-radius:8px;">
        <h3>Order Summary</h3>
        <p>Product: Laravel Website</p>
        <p>Price: 500 BDT</p>
    </div>

    <!-- Payment Methods -->
    <form method="POST" action="/pay">
        @csrf

        <label><b>Select Payment Method</b></label><br><br>

        <input type="radio" name="payment_method" value="bkash" required> bKash<br>
        <input type="radio" name="payment_method" value="nagad"> Nagad<br>
        <input type="radio" name="payment_method" value="card"> Card (Visa/Master)<br><br>

        <!-- bKash/Nagad number -->
        <label>Mobile Number</label><br>
        <input type="text" name="mobile" placeholder="01XXXXXXXXX"
            style="width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px;" required>

        <!-- Transaction ID -->
        <label>Transaction ID</label><br>
        <input type="text" name="trx_id" placeholder="Enter TXN ID"
            style="width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px;" required>

        <!-- Amount -->
        <label>Amount (BDT)</label><br>
        <input type="number" name="amount" value="500"
            style="width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px;" readonly>

        <!-- Button -->
        <button type="submit"
            style="width:100%; padding:12px; background:#4e54c8; color:white; border:none; border-radius:5px; font-size:16px; cursor:pointer;">
            Pay Now
        </button>

    </form>

</div>

@endsection
