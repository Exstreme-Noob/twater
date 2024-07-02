<?php
include "db.php";
function topbar($user = null)
{ ?>
    <div class="header">
        <div class="header_left">
            <div class="header_logo"><a href="./index.php"><img src="./img/zwitscher_simple_logo0.png" alt="Logo"></a></div>
            <div class="header_like"><a href="#"><img src="./img/like.png" alt="Like"></a></div>
        </div>
        <?php
        if (is_null($user)) {
            ?>
            <div class="header_right">
                <div class="header_pfp"> <a href="./login.php"><img src="./img/no_user_pfp.png" alt="pfp"></a></div>
                <div class="header_impressum"><a href="#">Impressum</a></div>
            </div>
        <?php } else {
            ?>
            <div class="header_right">
                <div class="header_pfp"> <a href="./user.php"><img src="<?php echo getuserpfp($_SESSION['uid']) ?>" alt="pfp"></a></div>
                <div class="header_impressum"><a href="#">Impressum</a></div>
                <div class="header_logout"><a href="handle_logout.php">Logout</a></div>
            <?php }
        ?>
        </div>
    </div>
    <br>
    <?php
}
function zwicher($uid, $content, $media)
{
    $user= getUserName($uid);
    ?>
    <div class="zwicher">
        <div class="zwicher_userpfp">
            <img src="<?php echo getuserpfp($uid); ?>" alt="error">
            <div class="zwicher_user"><?php echo $user ?><div class="zwicher_uid"><?php echo $uid;?></div></div>
        </div>
        <div class="zwicher_content">
            <p><?php echo $content ?></p>
            <img src="<?php echo $media ?>">
        </div>
    </div>
    <?php
}
function getuserpfp($uid)
{
    if (file_exists("./pfp/$uid.png")) {
        return "./pfp/$uid.png";
    } else {
        return "./img/defult_pfp.png";
    }
}
