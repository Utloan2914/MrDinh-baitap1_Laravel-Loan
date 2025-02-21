<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Data</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Country</th>
                <th>Total Confirmed</th>
                <th>Total Deaths</th>
                <th>Total Recovered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dd)
            <tr>
                <td>{{ $dd['title'] }}</td>
                <td>{{ $dd['body']}}</td>

            </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>