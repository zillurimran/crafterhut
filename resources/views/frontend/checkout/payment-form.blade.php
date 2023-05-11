<html>
<head>

</head>
<body>
<form name="form" action="https://p.monetico-services.com/test/paiement.cgi" method="POST"  name="process_payment" id="process_payment">
    @csrf
    @foreach($fields as $key => $value) 
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
    <input type="submit" name="submit" id="submit" value="submit">
</form>

<script type="application/javascript">
    //Once the page is loaded, submit the form
    // setTimeout(function(){ document.getElementById('process_payment').submit.click(); }, 200);

</script>
</body>
</html>
