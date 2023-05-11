<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        body {
            height: 100% !important;
            width: 100% !important;
        }
    </style>

<body style="margin: 100px 0 0 0 !important; padding: 0 !important; background-color: #eeeeee; font-family:Arial,sans-serif; height: 100vh; display: flex; align-items: center;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial,sans-serif;">
        <tr>
            <td align="center" style="background-color: #eeeeee; padding-bottom: 100px">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    {{-- <tr>
                        <td align="center" style="padding: 35px; background-color: gray;">
                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" style="text-align: center;">
                                        <img src="{{ asset('uploads/logo/pdflogo.png') }}" alt="">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> --}}
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center"
                                        style=" font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">

                                        @if (generalsettings()->logo)
                                        <img src="{{ asset('uploads/generalSettings/'.generalsettings()->logo) }}" alt="logo" class="invoice__header__logo__image" height="120"
                                        style="display: block; border: 0px; max-width: 100%; max-height: 120px; margin-bottom: 20px">
                                        @else
                                        <img src="{{ asset('uploads/logo/pdflogo.png') }}" height="120"
                                            style="display: block; border: 0px; max-width: 100%; max-height: 120px; margin-bottom: 20px" />
                                        @endif
                                        
                                        <br>
                                        <h2 align="center" style="text-align:center; font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                                            Thank You For Your Order! </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"
                                        style="text-align:center; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p align="center" style="text-align:center; font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                            Your order is now pending, Please wait for confirmation </p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left"
                                                    style="font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                                    TOTAL </td>
                                                <td width="25%" align="left"
                                                    style="font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                                    {{ $total+$shipping }} ৳</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td align="left" height="100%" valign="top" width="100%"
                            style="padding: 0 35px 35px 35px; background-color: #ffffff;">
                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="left" valign="top" style="font-size:0;" style="display:inline-block;
                                        width:100%;">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                            style="max-width:300px;">
                                            <tr>
                                                <td align="left" valign="top"
                                                    style="font-size: 16px; font-weight: 400; line-height: 24px;">
                                                    <p style="font-weight: 800; margin: 0;">Delivery Address</p>
                                                    <p> {{ $address }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> --}}
                </table>
            </td>
        </tr>
    </table>
</body>

</html>