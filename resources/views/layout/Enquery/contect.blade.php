<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry Received</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            padding: 40px 0;
            color: #333;
            line-height: 1.6;
        }

        .email-container {
            max-width: 700px;
            width: 100%;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .header {
            background: linear-gradient(135deg, #004085, #0066cc);
            color: #ffffff;
            padding: 20px 0;
            font-size: 24px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        .section {
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
            margin-bottom: 15px;
        }

        .section:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: 600;
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .value {
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            padding: 8px;
            border-radius: 5px;
            word-wrap: break-word;
        }

        .button {
            display: inline-block;
            background-color: #004085;
            color: white;
            padding: 12px 25px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #003366;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
            text-align: center;
        }

        .footer a {
            color: #004085;
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            .email-container {
                padding: 15px;
                margin: 0 10px;
            }

            .header {
                font-size: 22px;
                padding: 15px 0;
            }

            .button {
                width: 100%;
                padding: 14px;
                font-size: 16px;
            }

            .label {
                font-size: 14px;
            }

            .value {
                font-size: 14px;
                padding: 6px;
            }
        }

        /* Mobile-First Section Adjustments */
        @media screen and (max-width: 400px) {
            .header {
                font-size: 20px;
            }

            .button {
                padding: 12px 20px;
                font-size: 15px;
            }

            .value {
                font-size: 14px;
                padding: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="header">
            New Inquiry Received
        </div>

        <!-- Full Name Section -->
        <div class="section">
            <div class="label">Full Name:</div>
            <div class="value">{{ $data['name'] }}</div>
        </div>

        <!-- Email Address Section -->
        <div class="section">
            <div class="label">Email Address:</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        <!-- Phone Number Section -->
        <div class="section">
            <div class="label">Phone Number:</div>
            <div class="value">{{ $data['phone'] }}</div>
        </div>

        <!-- Service Requested Section -->
        <div class="section">
            <div class="label">Service Requested:</div>
            <div class="value">{{ $data['service'] }}</div>
        </div>

        <!-- Message Section -->
        <div class="section">
            <div class="label">Message:</div>
            <div class="value">{{ $data['message'] }}</div>
        </div>

        <!-- Button to Enquire Further -->
        <a href="mailto:{{ $data['email'] }}" class="button">Reply to Inquiry</a>

        <!-- Footer Section -->
        <div class="footer">
            <p>Thank you for choosing <strong>Albest Pools Contracting and Services</strong>.</p>
            <p>If you need assistance or more information, feel free to <a href="mailto:albestpools55@gmail.com">contact us</a>.</p>
        </div>
    </div>
</body>
</html>
