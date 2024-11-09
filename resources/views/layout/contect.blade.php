<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid red;
        }
        .header {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 15px;
            text-align: center;
            background-color: #004085;
        }
        .section {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            margin-bottom: 5px;
        }
        .value {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">New Inquiry Received</div>

        <div class="section">
            <div class="label">Full Name:</div>
            <div class="value">{{ $data['name'] }}</div>
        </div>

        <div class="section">
            <div class="label">Email Address:</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        <div class="section">
            <div class="label">Phone Number:</div>
            <div class="value">{{ $data['phone'] }}</div>
        </div>

        <div class="section">
            <div class="label">Service Requested:</div>
            <div class="value">{{ $data['service'] }}</div>
        </div>

        <div class="section">
            <div class="label">Message:</div>
            <div class="value">{{ $data['message'] }}</div>
        </div>
    </div>
</body>
</html>
