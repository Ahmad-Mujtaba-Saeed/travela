<!DOCTYPE html>
<html>

<head>
    <title>Custom Deal Request</title>
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
    <h1 style="color: white;">{{ $details['title'] }}</h1>
    <br>
    <p>Hi {{ $details['Name'] }},
    </p>
    <p>
        We have considered your Custom Tour Request and Managed to organized a tour at the Fair cost of
        <u class="color:blue;">{{ '$' . number_format($details['Price'], 2) }}</u>
    </p>
    <p>
        Please follow the following Link to confirm your tour. Then we will contact you soon.
    </p>
    <center>
        <a href="{{ url('/Booking/TourConfirm?ID=' . $details['id']) }}"><button class="button-20" role="button"
            style=" appearance: button;
            background-color: #4D4AE8;
            background-image: linear-gradient(180deg, rgba(255, 255, 255, .15), rgba(255, 255, 255, 0));
            border: 1px solid #4D4AE8;
            border-radius: 1rem;
            box-shadow: rgba(255, 255, 255, 0.15) 0 1px 0 inset,rgba(46, 54, 80, 0.075) 0 1px 1px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Inter,sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            margin: 0;
            padding: .5rem 1rem;
            text-align: center;
            text-transform: none;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;">Click
            Me!</button></a>
    </center>
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
            <tr>
                <th>SpecialRequest:</th>
                <td>{{ '$' . number_format($details['Price'], 2) }}</td>
            </tr>
        </table>
        <br><br>
    </div>
</body>

</html>
