<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>New SiteStar inquiry</title>
    </head>
    <body style="font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; line-height: 1.5; color: #09090b;">
        <h2 style="margin: 0 0 12px;">New inquiry</h2>

        <table style="width: 100%; border-collapse: collapse; margin: 0 0 18px;">
            <tr>
                <td style="padding: 6px 0; width: 120px; color: #52525b;">Name</td>
                <td style="padding: 6px 0; font-weight: 600;">{{ $data['name'] ?? '' }}</td>
            </tr>
            <tr>
                <td style="padding: 6px 0; width: 120px; color: #52525b;">Email</td>
                <td style="padding: 6px 0; font-weight: 600;">{{ $data['email'] ?? '' }}</td>
            </tr>
            @if (!empty($data['company']))
                <tr>
                    <td style="padding: 6px 0; width: 120px; color: #52525b;">Company</td>
                    <td style="padding: 6px 0;">{{ $data['company'] }}</td>
                </tr>
            @endif
            @if (!empty($data['budget']))
                <tr>
                    <td style="padding: 6px 0; width: 120px; color: #52525b;">Budget</td>
                    <td style="padding: 6px 0;">{{ $data['budget'] }}</td>
                </tr>
            @endif
        </table>

        <div style="border-top: 1px solid #e4e4e7; margin: 18px 0;"></div>

        <div>
            {!! nl2br(e($data['message'] ?? '')) !!}
        </div>
    </body>
</html>
