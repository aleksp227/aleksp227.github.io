<?php
include('_head.php');
?>
<body>

    <?php
    include('_header.php');
    ?>

    <div class="site">
        <div class="site-2">

            <h2>Themengebiet</h2>
            <?php 
            include('_slider_klein.php');
            ?>

            <h2>Themengebiet</h2>
            <div class="inhalt-gross" onclick="window.location='p5.php'">
               <img src="https://picsum.photos/id/945/600/400" alt="">
                <div class="descr">
                    <h3>Titel</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quae obcaecati debitis amet molestias delectus quos? Animi, doloribus eaque deserunt aspernatur vitae soluta, reiciendis iure, commodi repellendus blanditiis enim debitis?
                </div>
            </div>
            <h2>Themengebiet</h2>
            <?php 
            include('_slider_klein.php');
            ?>
            <h2>Themengebiet</h2>
            <div class="inhalt-mittel">

            </div>
        </div><!-- Site 2 (CONTENT MUSS SICH OBERHALB VON SITE 2 BEFINDEN)-->
    </div><!-- Site -->
    
    <?php
    include('_footer.php');
    ?>
</body>

</html>