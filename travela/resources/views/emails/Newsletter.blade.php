<!DOCTYPE html>
<html>

<head>
    <title>Newsletter Subscription</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body style="background-color: black; padding: 20px 10px 20px 15px;">
    <h1 style="color: white;">New Newsletter Subscription</h1>
    <br>
    <br>
    <div style="overflow-x: auto; overflow-y: hidden;">
        <table style="width:100%">
            <tr>
                <th>Email:</th>
                <td>{{ $details['Email'] }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
