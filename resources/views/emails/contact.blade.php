<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        .header {
            text-align: center;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e5e5e5;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #09090b;
        }
        .logo span {
            color: #0ea5e9;
        }
        h1 {
            font-size: 20px;
            color: #09090b;
            margin: 16px 0 0 0;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #71717a;
            margin-bottom: 6px;
        }
        .value {
            font-size: 16px;
            color: #18181b;
            background-color: #f4f4f5;
            padding: 12px 16px;
            border-radius: 8px;
        }
        .message-value {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #e5e5e5;
            text-align: center;
            font-size: 14px;
            color: #71717a;
        }
        .footer a {
            color: #0ea5e9;
            text-decoration: none;
        }
        .timestamp {
            font-size: 12px;
            color: #a1a1aa;
            text-align: center;
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Site<span>Star</span></div>
            <h1>New Contact Form Submission</h1>
        </div>
        
        <div class="field">
            <div class="label">Name</div>
            <div class="value">{{ $name }}</div>
        </div>
        
        <div class="field">
            <div class="label">Email</div>
            <div class="value">
                <a href="mailto:{{ $email }}" style="color: #0ea5e9; text-decoration: none;">{{ $email }}</a>
            </div>
        </div>
        
        @if($company)
        <div class="field">
            <div class="label">Company</div>
            <div class="value">{{ $company }}</div>
        </div>
        @endif
        
        <div class="field">
            <div class="label">Message</div>
            <div class="value message-value">{{ $userMessage }}</div>
        </div>
        
        <div class="footer">
            <p>This message was sent via the contact form on <a href="{{ config('app.url') }}">sitestar.by</a></p>
        </div>
        
        <div class="timestamp">
            Received on {{ now()->format('F j, Y \a\t g:i A') }} (UTC)
        </div>
    </div>
</body>
</html>
