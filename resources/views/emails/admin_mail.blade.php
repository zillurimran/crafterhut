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
                                            Greeting! </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"
                                        style="text-align:center; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p align="center" style="text-align:center; font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                            Getting in touch! A New order has been received.</p>
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