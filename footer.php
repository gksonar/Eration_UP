 <!-- footer top -->
   <!--  <div class="footer-top py-lg-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-logo mb-lg-0 mb-4">
                    <h2>
                        <a href="index.html"> <span class="fa fa-vine" aria-hidden="true"></span>ersatile</a>
                    </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum
                        has
                        been
                        the
                        industry's standard.</p>
                    <div class="social-icons">
                        <h5 class="footer-top-title">stay connected</h5>
                        <ul class="social-icons">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-top-title">latest posts</h5>
                    <ul class="post-links">
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 3 hrs ago
                        </li>
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 10 hrs ago
                        </li>
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 22 hrs ago

                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-top-title">contact information</h5>
                    <ul class="d-flex flex-column">
                        <li>
                            <span class="fa fa-home mr-3"></span>
                            <p class="d-inline">+4667 Woodland, California 916-983-6577.</p>
                        </li>
                        <li class="my-3">
                            <span class="fa fa-envelope-open mr-3"></span>
                            <a href="mailto:example@email.com" class="text-secondary">info@example.com</a>
                        </li>
                        <li>
                            <span class="fa fa-phone mr-3"></span>
                            <p class="d-inline">+456 123 7890</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- //footer top -->
    <!-- footer -->
   <!--  <footer>
        <div class="container">
            <div class="cpy-right text-center">
                <p>© 2019 E-Ration Card. All rights reserved | Design by
                    <a href="http://w3layouts.com"> W3layouts.</a>
                </p>
            </div>
        </div>
    </footer> -->
    <!-- //footer -->
    <!-- Login modal -->

    <!-- // Register modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <script>
        $(window).scroll(function () {
            if ($(document).scrollTop() > 70) {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
            } else {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
            }
        });
    </script>
    <!-- count down -->
    <script src="js/count-down.js"></script>
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- testimonials  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>