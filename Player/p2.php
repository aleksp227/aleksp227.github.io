<?php
include('_head.php');
?>

<body>
    <?php
    include('_header.php');
    ?>

    <div class="site">
            <div class="thumbnail">
                <img src="https://physicsworld.com/wp-content/uploads/2018/02/2018-01-12-trees-635x424.jpg" alt="Content">
                <div class="play-equalizer" role="button" onclick="playerOn()">
                    <div id="start">▶</div>
                    <div id="equalizer"><img src="./Images/pl2.gif"></div>
                </div>
            </div>
        <div class="site-2">
            <div class="text">
                <h3>More Episodes</h3>
                <div class="line">
                    <div class="line-more_episodes"></div>
                </div>
                <p>
                <?php
                include('_slider_klein.php');
                ?>
            </div>
            <div class="text">
                <h3>Titel</h3>
                <div class="line">
                    <div class="line-titel"></div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quae obcaecati debitis amet molestias delectus quos? Animi, doloribus eaque deserunt aspernatur vitae soluta, reiciendis iure, commodi repellendus blanditiis enim debitis?
            </div>

            <div class="text">
                <h3>Info</h3>
                <div class="line">
                    <div class="line-info"></div>
                </div>
                <!--TABLE MACHEN!!!-->
                <p>Year:
                    <p>Country:
                        <p>Length:
                            <p>Year:
                                <p>Country:
                                    <p>Length:
                                        <p>Year:
                                            <p>Country:
                                                <p>Length:
                                                    <p>Year:
                                                        <p>Country:
                                                            <p>Length:
            </div>
        </div>
    </div>

    <div id="audio-container">

        <button id="play" class="play-pause" onclick="playerPlay()">            
            <div class="center"><img src="Images/play_arrow-black-48dp.svg" alt="Play"></div>
        </button>

        <button id="pause" class="play-pause" onclick="playerPause()">            
            <div class="center"><img src="Images/pause-black-48dp.svg" alt="Pause"></div>
        </button>

        <button id="repeat" class="play-pause">            
            <div class="center"><img src="Images/replay-black-48dp.svg" alt="Repeat"></div>
        </button>

        <audio id="sound" controls controlslist="nodownload">
            <source src="Audio/file_example_MP3_700KB.mp3">
        </audio>

        <button class="repl" onclick="replay()">
            <div class="center"><img src="Images/replay_10-black-48dp.svg" alt="Replay"></div>
        </button>

        <button class="forw" onclick="forward()">
            <div class="center"><img src="Images/forward_10-black-48dp.svg" alt="Forward"></div>
        </button>

        <button class="hide-player" onclick="playerOff()">
            <div class="center"><img src="Images/close-black-48dp.svg" alt="Hide"></div>
        </button>
    </div>
    <?php
    include('_footer.php');
    ?>
</body>

</html>