<!DOCTYPE html>
<html>
@php
use Illuminate\Support\Str;
@endphp

<head>
    <title>Custom Deal Request</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px;
        text-align: left;
      }
      </style>
</head>

<body style="background-color: black; padding: 20px 10px 20px 15px;">
    <h1 style="color: white;">{{ $details['title'] }}</h1>
    <br>
    <br>
    <div style="overflow-x: auto; overflow-y: hidden;">
        <table style="width:100%">
            <tr>
              <th>Name:</th>
              <td>{{ $details['Name'] }}</td>
            </tr>
            <tr>
              <th>Email:</th>
              <td>{{ $details['Email'] }}</td>
            </tr>
            <tr>
              <th>Date:</th>
              <td>{{ $details['Date'] }}</td>
            </tr>
            <tr>
                <th>Package:</th>
                <td>{{ $details['Package'] }}</td>
              </tr>
              <tr>
                <th>Persons:</th>
                <td>{{ $details['Persons'] }}</td>
              </tr>
              <tr>
                <th>Kids:</th>
                <td>{{ $details['Kids'] }}</td>
              </tr>
              <tr>
                <th>SpecialRequest:</th>
                <td>{{ $details['SpecialRequest'] }}</td>
              </tr>
          </table>
    </div>
</body>

</html>
