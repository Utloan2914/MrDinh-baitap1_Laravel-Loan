<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Hai Số</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sum1.css') }}">
</head>

<body>
    <div class="container">
        <h3>Tính tổng hai số A và B</h3>
        <form action="/sum1" method="POST">
            @csrf
            <label for="a">Enter Số A</label>
            <input type="number" name="a" id="a" value="{{ $a ?? '' }}" required>

            <label for="b">Enter Số B</label>
            <input type="number" name="b" id="b" value="{{ $b ?? '' }}" required>

            <button type="submit">Submit</button>
        </form>
        <div class="result">Kết quả: {{ $sum1 ?? '0' }}</div>
    </div>
</body>

</html>