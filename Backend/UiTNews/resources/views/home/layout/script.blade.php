<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
</script>
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $(".btn-news-videos").on("click", function() {
            $(".more:hidden").slice(0, 3).slideDown()

        });
        $(".btn-news").on("click", function() {
            $(".more-news:hidden").slice(0, 3).slideDown()
        });
        $(".btn-videos").on("click", function() {
            $(".more-videos:hidden").slice(0, 3).slideDown()
        });
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<script>
    // Toggle for mobile
    document.querySelector('.toogleText1').onclick = () => {
        document.querySelector('.toogleMobile1').classList.toggle("active");

    }
    document.querySelector('.toogleText2').onclick = () => {
            document.querySelector('.toogleMobile2').classList.toggle("active");

        }
        // Js for Subscribe
    function mySubscribe() {
        if (document.getElementById("formEmail").value.length == 0) {
            alert("Please fill in the email address box below!").innerHTML;
        } else {
            alert("Thank you for your subscription!").innerHTML;
        }
    }
</script>













<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<script>
    // Toggle for mobile
    document.querySelector('.toogleText1').onclick = () => {
        document.querySelector('.toogleMobile1').classList.toggle("active");

    }
    document.querySelector('.toogleText2').onclick = () => {
            document.querySelector('.toogleMobile2').classList.toggle("active");

        }
        // Js for Subscribe
    function mySubscribe() {
        if (document.getElementById("formEmail").value.length == 0) {
            alert("Please fill in the email address box below!").innerHTML;
        } else {
            alert("Thank you for your subscription!").innerHTML;
        }
    }
</script>