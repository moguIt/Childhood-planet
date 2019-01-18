    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018</p>
                <p class="pull-right">Планета детства</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
    <script src="/template/js/script.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
        $(".cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
        // $(".sort span").click(function () {
        //     var id = $(this).attr("id");
        //     alert(id);
        //     $.post("/site/sort/"+id, {} )});
        //     return false;
        //     // $("#fon").css({'display':'block'});
        //     // $("#load").fadeIn(1000, function () {
        //     // $.ajax({
        //     //     url:'/controllers/SiteController.php',
        //     //     data:'sort_id='+id,
        //     //     type:'GET',
        //     //     success:function (html) {
        //     //         alert(html);
        //     //     }
        //     // });
        //     //});
        // });
    });
</script>

</body>
</html>