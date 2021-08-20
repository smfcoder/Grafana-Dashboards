<!-- <script rel="javascript" src="https://write.corbpie.com/wp-content/litespeed/localres/cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    setInterval(function () {
        $.ajax({
            url: 'select.php',
            success: function (data) {
                console.log("Success");
            }
        });
    }, 5000);
</script>