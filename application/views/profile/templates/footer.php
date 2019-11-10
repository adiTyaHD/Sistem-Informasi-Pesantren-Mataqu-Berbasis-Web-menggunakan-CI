<footer class="site-footer">
    <div class="container">


        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-heading mb-4 text-white">Alamat</h3>
                <p><a href="https://goo.gl/maps/DrAspqwkU7K2"><i class="fas fa-fw fa-home text-white mt-3"></i> Pesantren Tahfizh Al Quran MataQu, Sirnagalih, Megamendung, Kabupaten Bogor, Jawa Barat, 16771
                    </a></p>
                <p><a href="https://api.whatsapp.com/send?phone=6287780220777&text=Hi%20Assalamualaikum%20&"><i class="fas fa-fw fa-phone text-white mt-3"></i> +62-877-8022-0777
                    </a></p>
                <p><a href="https://mail.google.com/mail/u/0/"><i class="fas fa-fw fa-envelope text-white mt-3"></i> info@pesantrentahfidzmataqu.com
                    </a></p>


            </div>
            <div class="col-md-5 ml-auto">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="footer-heading mb-4 text-white">Menu Navigasi</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('home/program'); ?>">Program</a></li>
                            <li><a href="<?= base_url('home/pengurus'); ?>">Pengurus</a></li>
                            <li><a href="<?= base_url('home/info'); ?>">Info</a></li>
                            <li><a href="<?= base_url('home/news') ?>">Artikel</a></li>
                            <li><a href="<?= base_url('home/kontak'); ?>">Kontak</a></li>
                            <li><a href="<?= base_url('home/profile'); ?>">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="footer-heading mb-4 text-white">Program</h3>
                        <ul class="list-unstyled">
                            <li><a href="home/santri_alquran">Santri Al-Quran</a></li>
                            <li><a href="home/santri_takhosus">Santri Takhosus</a></li>
                            <li><a href="home/santri_kaderisasi">Santri Kaderisasi </a></li>
                            <li><a href="home/dauroh_alquran">Dauroh Al-Quran</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="col-md-12">
                    <h4 class="footer-heading mb-4 text-white">Media sosial kami</h3>
                </div>
                <div class="col-md-12">

                    <a href="https://www.facebook.com/mahadmataqu" id="nav-icon" class="pb-2 pr-2 pl-0"><i class="fab fa-facebook text-dark"></i></a>
                    <a href="https://twitter.com/pesantrenmataqu" id="nav-icon" class="p-2"><i class="fab fa-twitter text-dark"></i></a>
                    <a href="https://instagram.com/mahadmataqu" id="nav-icon" class="p-2"><i class="fab fa-instagram text-dark"></i></a>
                    <a href="https://t.me/mahadmataqu" id="nav-icon" class="p-2"><i class="fab fa-telegram text-dark"></i></a>


                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> All Rights Reserved | This WEBSITE is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/Aditya.DN04" target="_blank">Aditya</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top">
                <i style="font-size :14pt;" class=" fas fa-chevron-up"></i>

            </button>

        </div>
    </div>
</footer>
</div>

<script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/') ?>js/aos.js"></script>





<script src="<?= base_url('assets/'); ?>js/main.js"></script>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

    }
    $(document).ready(function() {

        /* Toggle Video Modal
  -----------------------------------------*/
        function toggle_video_modal() {

            // Click on video thumbnail or link
            $(".js-trigger-video-modal").on("click", function(e) {

                // prevent default behavior for a-tags, button tags, etc. 
                e.preventDefault();

                // Grab the video ID from the element clicked
                var id = $(this).attr('data-youtube-id');

                // Autoplay when the modal appears
                // Note: this is intetnionally disabled on most mobile devices
                // If critical on mobile, then some alternate method is needed
                var autoplay = '?autoplay=1';

                // Don't show the 'Related Videos' view when the video ends
                var related_no = '&rel=0';

                // String the ID and param variables together
                var src = '//www.youtube.com/embed/' + id + autoplay + related_no;

                // Pass the YouTube video ID into the iframe template...
                // Set the source on the iframe to match the video ID
                $("#youtube").attr('src', src);

                // Add class to the body to visually reveal the modal
                $("body").addClass("show-video-modal noscroll");

            });

            // Close and Reset the Video Modal
            function close_video_modal() {

                event.preventDefault();

                // re-hide the video modal
                $("body").removeClass("show-video-modal noscroll");

                // reset the source attribute for the iframe template, kills the video
                $("#youtube").attr('src', '');

            }
            // if the 'close' button/element, or the overlay are clicked 
            $('body').on('click', '.close-video-modal, .video-modal .overlay', function(event) {

                // call the close and reset function
                close_video_modal();

            });
            // if the ESC key is tapped
            $('body').keyup(function(e) {
                // ESC key maps to keycode `27`
                if (e.keyCode == 27) {

                    // call the close and reset function
                    close_video_modal();

                }
            });
        }
        toggle_video_modal();
    });
</script>



</body>

</html>