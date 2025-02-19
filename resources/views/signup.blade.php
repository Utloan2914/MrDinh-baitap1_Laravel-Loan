<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.5.1/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f0f4f8;
            padding: 20px;
            width: 60%;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 10px;
            width: 100%;
        }

        .form-control:focus {
            border-color: #ff6600;
        }

        .btn-primary {
            background-color: #ff6600;
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #e65c00;
        }

        .display-infor {
            margin-top: 30px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f8f9fa;
            border-radius: 5px;
        }

        .display-infor p {
            font-size: 16px;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <form action="{{ route('signup.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age">
        </div>

        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="form-group">
            <label>Web</label>
            <input type="url" class="form-control" name="web">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address">
        </div>

        {{-- Nhúng file error.blade.php --}}
        <div>
            @include('block.error')
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="display-infor">
        @if(isset($user))
        <p>Name: {{ $user['name'] }}</p>
        <p>Age: {{ $user['age'] }}</p>
        <p>Date: {{ $user['date'] }}</p>
        <p>Phone: {{ $user['phone'] }}</p>
        <p>Website: {{ $user['web'] }}</p>
        <p>Address: {{ $user['address'] }}</p>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.5.1/js/bootstrap.min.js"></script>
</body>

</html>