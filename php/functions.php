<?php
function topbar()
{ ?>
    <div class="header">
        <div class="header_left">
            <div class="header_logo"><a href="./index.php"><img src="./img/zwitscher_simple_logo0.png" alt="Logo"></a></div>
            <div class="header_like"><a href="#"><img src="./img/like.png" alt="Like"></a></div>
        </div>
        <div class="header_right">
            <div class="header_pfp"> <a href="./register.php"><img src="./img/defult_pfp.png" alt="pfp"></a></div>
            <div class="header_impressum"><a href="#">Impressum</a></div>
        </div>
    </div>
    <br>
    <?php
}
function zwicher($user, $content, $media)
{
    ?>
    <div class="zwicher">
        <div class="zwicher_userpfp">
            <img src="<?php echo getuserpfp(); ?>" alt="error">
            <?php echo $user ?></div>
        <div class="zwicher_content">
            <p><?php echo $content ?></p>
            <img src="<?php echo $media ?>">
        </div>
    </div>
    <?php
}
function getuserpfp()
{
    return "./img/defult_pfp.png";
}
