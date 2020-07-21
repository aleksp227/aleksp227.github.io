<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js" integrity="sha512-VHsNaV1C4XbgKSc2O0rZDmkUOhMKPg/rIi8abX9qTaVDzVJnrDGHFnLnCnuPmZ3cNi1nQJm+fzJtBbZU9yRCww==" crossorigin="anonymous"></script> 
            <div>
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="inhalt-klein" onclick="window.location='p1.php'">
                                <img src="https://picsum.photos/id/1020/600/400" alt="Image">
                                <div class="descr">
                                    <a href="p1.php">
                                        <h3>Titel</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="inhalt-klein" onclick="window.location='p2.php'">
                                <img src="https://physicsworld.com/wp-content/uploads/2018/02/2018-01-12-trees-635x424.jpg" alt="Image">
                                <div class="descr">
                                    <a href="p2.php">
                                        <h3>Titel</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="inhalt-klein" onclick="window.location='p3.php'">
                                <img src="https://picsum.photos/id/598/600/400" alt="">
                                <div class="descr">
                                    <a href="p3.php">    
                                        <h3>Titel</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="inhalt-klein" onclick="window.location='p4.php'">
                               <img src="https://picsum.photos/id/1076/600/400" alt="">
                                <div class="descr">
                                    <a href="p4.php">    
                                        <h3>Titel</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>

var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2.2,
    spaceBetween: 8,
})

</script>