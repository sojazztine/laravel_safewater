<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Data View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .data {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>API Data</h2>

    @if(isset($data['status']) && $data['status'] == true)
        <div class="data">
            <p><strong>Quarterly Volume:</strong> {{ $data['data']['quarterly_volume'] }}</p>
            <p class=""><strong>Total Sachets:</strong> {{ $data['data']['total_sachets'] }}</p>
            <p><strong>Total Users:</strong> {{ $data['data']['total_users'] }}</p>
        </div>
    @else
        <p>Error fetching data.</p>
    @endif

</div>



</body>
</html>
