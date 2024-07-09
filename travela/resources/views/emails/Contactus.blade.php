<!DOCTYPE html>
<html>
@php
use Illuminate\Support\Str;
@endphp

<head>
    <title>Contact_Us Travela</title>
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
    <h1 style="color: white;">{{ $details['Subject'] }}</h1>
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
              <th>Message:</th>
              <td>{{ $details['Message'] }}</td>
            </tr>
          </table>
    </div>
</body>

</html>
