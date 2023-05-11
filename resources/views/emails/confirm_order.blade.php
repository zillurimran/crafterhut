<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Template</title>
</head>

<body style="margin:0;padding:0; ">
    <table role="presentation"
        style="width:100% !important;border-collapse:collapse;border:0;border-spacing:0;background:#f0f0f0; height: 100vh; font-family:Arial,sans-serif;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse; border-spacing:0;text-align:left;">
                    {{-- <tr>
                        <td align="center" style="padding:5px 0 5px 0;">
                            <img src="{{ asset('uploads/logo/logo.jpg') }}" alt="main logo"
                                style="height:100px; display:block;" />
                        </td>
                    </tr> --}}
                    <tr style="background-color: #ffffff;">
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643; text-align: center;">
                                        
                                        
                                        @if (generalsettings()->logo)
                                        <img style="margin-bottom: 10px;"
                                        <img src="{{ asset('uploads/generalSettings/'.generalsettings()->logo) }}" alt="logo" class="invoice__header__logo__image" width="125" height="120"
                                        style="display: block; border: 0px;">
                                        @else
                                        <img src="{{ asset('uploads/logo/pdflogo.png') }}" alt="logo" class="invoice__header__logo__image" width="125" height="120"
                                        style="display: block; border: 0px;">
                                        @endif
                                        <p style="margin:0;font-size:24px;line-height:24px;text-align: center;">
                                            Order Confirmed
                                        </p>
                                        <p>
                                            <span>You order is confirmed, Please wait for delivery</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;">
                                <tr>
                                    <td style="padding:0;" align="center">
                                        <p style="margin:0;font-size:14px;line-height:16px;color: #949492;">
                                            &reg; Furniture BD. All rights reserved.
                                        </p>
                                        <br>
                                        {{-- <p style="margin:0;font-size:14px;line-height:16px;color: #949492;">
                                            123 Incredible Street, SomeTown, OR, 87466 US, (123) 456-7890
                                        </p> --}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>