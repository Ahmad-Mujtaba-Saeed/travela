<!DOCTYPE html>
<html>
    @php
    use Illuminate\Support\Str;
    @endphp    
<head>
    <title>Custom Deal Request</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: gray;
            color: white;
        }
        td {
            color: white;
        }
    </style>
</head>

<body style="background-color: black; padding: 20px 10px 20px 15px;">
    <h1 style="color: white;">{{ $details['title'] }}</h1>
    <br>
    <br>
    <div style="overflow-x: auto; overflow-y: hidden;">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Package</th>
                <th>Persons</th>
                <th>Kids</th>
                <th>Special Request</th>
            </tr>
            <tr>
                <td>{{ $details['Name'] }}</td>
                <td>{{ $details['Email'] }}</td>
                <td>{{ $details['Date'] }}</td>
                <td>{{ $details['Package'] }}</td>
                <td>{{ $details['Persons'] }}</td>
                <td>{{ $details['Kids'] }}</td>
                <td>{{ Str::limit($details['SpecialRequest'], 40) }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
