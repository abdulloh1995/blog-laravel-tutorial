<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
</head>
<body>
    <h1>Lists of Companies</h1>
    <br>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>ADDRESS</td>
                <td>PHONE</td>
            </tr>
        </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ ($loop->index+1) }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>