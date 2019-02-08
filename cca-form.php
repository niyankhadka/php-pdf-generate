<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title></title>
</head>

<body>
<div class="container">
    <form action="pdf.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
           <div class="form-group col-md-12">
                <label for="fname">Full Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname">
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
                <label for="street">Street</label>
                <input type="text" class="form-control" id="street" placeholder="1234 Main St" name="street">
            </div>
            <div class="form-group col-md-4">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" placeholder="Austin" name="city">
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" placeholder="Texas" name="state">
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                <label for="zip-code">Zip Code</label>
                <input type="text" class="form-control" id="zip-code" placeholder="73301" name="zip_code">
            </div>
            <div class="form-group col-md-6">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" placeholder="USA" name="country">
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                <label for="tel-number">Telephone Number</label>
                <input type="text" class="form-control" id="tel-number" placeholder="521-494-9400" name="tel_number">
            </div>
            <div class="form-group col-md-6">
                <label for="cell-number">Cell Number</label>
                <input type="text" class="form-control" id="cell-number" placeholder="521-494-9400" name="cell_number">
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
                <label for="payment-method">Pyament Method</label>
                    <select id="payment-method" class="form-control" name="payment_method">
                        <option selected>Choose...</option>
                        <option value="Visa">Visa</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="American Express">American Express</option>
                        <option value="Discover">Discover</option>
                        <option value="Dinners Club">Dinners Club</option>
                  </select>
            </div>
            <div class="form-group col-md-4">
                <label for="card-number">Credit Card Number</label>
                <input type="text" class="form-control" id="card-number" placeholder="5105105105105100" name="card_number">
            </div>
            <div class="form-group col-md-4">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" placeholder="$125" name="amount">
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                <label for="exp-date">Expiration Date</label>
                <input type="text" class="form-control" id="exp-date" placeholder="18/06" name="exp_date">
            </div>
            <div class="form-group col-md-6">
                <label for="cvv">CVV</label>
                <input type="number" class="form-control" id="cvv" placeholder="123" name="cvv">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="name-on-card">Name on Card</label>
                <input type="text" class="form-control" id="name-on-card" placeholder="Full Name" name="name_on_card">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
               <label for="signature">Upload Signature</label>
               <input type="file" class="form-control-file" id="signature" name="signature">
            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
        </div>
        <button type="submit" class="btn btn-danger" name="submit">Submit</button>
    </form>
</div>

    
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
