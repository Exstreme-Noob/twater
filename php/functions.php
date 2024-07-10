<?php
include "db.php";
if (isset($_SESSION['uid']) && isset($_POST["like"])) {
    $uid = $_SESSION['uid'];
    $zid = $_POST['zid'];

    $sql_check = "SELECT * FROM likes WHERE uid = $uid AND zid = $zid";
    $result = getSQLQuery($sql_check);

    if ($result->num_rows == 0) {
        $sql = "INSERT INTO likes (uid, zid) VALUES ($uid, $zid)";
        getSQLQuery($sql);
    } else {
        $sql = "DELETE FROM likes WHERE uid = $uid AND zid = $zid";
        getSQLQuery($sql);
    }
}
function topbar($user = null)//Veljko
{ ?>
    <div class="header">
        <div class="header_left">
            <div class="header_logo"><a href="./index.php"><img src="./img/zwitscher_simple_logo0.png" alt="Logo"></a></div>
            <div class="header_like"><a href="./liked.php"><img src="./img/like.png" alt="Like"></a></div>
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
                <div class="header_pfp"> <a href="./user.php"><img src="<?php echo getuserpfp($_SESSION['uid']) ?>"
                            alt="pfp"></a></div>
                <div class="header_impressum"><a href="#">Impressum</a></div>
                <div class="header_logout"><a href="handle_logout.php">Logout</a></div>

            <?php }
        ?>
        </div>
    </div>
    <br>
    <br>
    <?php
}
function post_button()
{ ?>
    <div class="post_buton">
        <div class="button_text"><a href="./post.php">+Post</a></div>
    </div>
<?php }
function zwicher($uid, $zid, $content, $media)//Veljko
{
    $user = getUserName($uid);
    if ($user != null) {
        ?>
        <div class="zwicher">
            <div class="zwicher_userpfp">
                <img src="<?php echo getuserpfp($uid); ?>" alt="error">
                <div class="zwicher_user"><?php echo $user ?>
                    <div class="zwicher_uid">ID:<?php echo $uid; ?></div>
                </div>
            </div>
            <div class="zwicher_content">
                <p><?php echo $content ?></p>
                <?php if ($media != null) { ?><img src="<?php echo $media ?>"></img><?php } ?>
            </div>
            <div class="like_post"><?php
            echo countlikes($zid);
            if (isset($_SESSION["user"])) { ?>
                    <form action="#" method="post">
                        <input class="like_send_zid" name="zid" type="hidden" value="<?php echo $zid ?>" />
                        <input class="like_send" name="like" type="submit" value="Like" />
                    </form><?php } ?>
            </div>
        </div>
    <?php } else {
        ?>
        <p class="error">!!!user doesnt exist!!!</p>
        <?php
    }
}
function getuserpfp($uid)//Veljko
{
    if (file_exists("./pfp/$uid.gif")) {
        return "./pfp/$uid.gif";
    } else {
        return "./img/defult_pfp.gif";
    }
}
function content()//Veljko
{
    $sql = "SELECT COUNT(*) FROM zwicherts";
    $allposts = mysqli_fetch_array(getSQLQuery($sql))[0];
    for ($i = 0; $i < $allposts; $i++) {
        $zid = $i + 1;
        $sql = "SELECT * FROM zwicherts WHERE zid = $zid";
        $zwichercontent = mysqli_fetch_array(getSQLQuery($sql));
        $sql = "SELECT uid FROM relation WHERE zid = $zid";
        $relation = mysqli_fetch_array(getSQLQuery($sql));
        $content = $zwichercontent["text"];
        $media = $zwichercontent["media"];
        $uid = &$relation["uid"];
        zwicher($uid, $zid, $content, $media);
    }
}
function content_from($_uid)//Veljko
{
    $sql = "SELECT COUNT(*) FROM zwicherts Z INNER JOIN relation R ON R.zid=Z.zid";
    $allposts = mysqli_fetch_array(getSQLQuery($sql));
    $sql = "SELECT Z.zid FROM zwicherts Z INNER JOIN relation R ON R.zid=Z.zid";
    $zids = mysqli_fetch_array(getSQLQuery($sql));
    for ($i = 0; $i < $allposts[0]; $i++) {
        $zid = $zids[$i];
        $sql = "SELECT * FROM zwicherts WHERE zid = $zid";
        $zwichercontent = mysqli_fetch_array(getSQLQuery($sql));
        $sql = "SELECT uid FROM relation WHERE zid = $zid";
        $relation = mysqli_fetch_array(getSQLQuery($sql));
        $content = $zwichercontent["text"];
        $media = $zwichercontent["media"];
        $uid = &$relation["uid"];
        zwicher($uid, $zid, $content, $media);
    }
}
function content_liked($_uid)//Veljko
{

    $sql = "SELECT COUNT(*) FROM zwicherts Z INNER JOIN likes L ON L.zid=Z.zid";
    $allposts = mysqli_fetch_array(getSQLQuery($sql));
    $sql = "SELECT Z.zid FROM zwicherts Z INNER JOIN likes L ON L.zid=Z.zid";
    $zids = mysqli_fetch_array(getSQLQuery($sql));
    for ($i = 0; $i < $allposts[0]; $i++) {
        $zid = $zids[$i];
        $sql = "SELECT * FROM zwicherts WHERE zid = $zid";
        $zwichercontent = mysqli_fetch_array(getSQLQuery($sql));
        $sql = "SELECT uid FROM relation WHERE zid = $zid";
        $relation = mysqli_fetch_array(getSQLQuery($sql));
        $content = $zwichercontent["text"];
        $media = $zwichercontent["media"];
        $uid = &$relation["uid"];
        zwicher($uid, $zid, $content, $media);
    }
}
function like($zid, $uid)
{//Veljko
    $sql = "INSERT INTO users ($zid,$uid);";
    return getSQLQuery($sql);
}
function isLiked($zid, $uid)
{//Veljko
    $sql = "SELECT uid FROM likes WHERE uid=$uid && zid=$zid;";
    return getSQLQuery($sql)->num_rows;
}
function countlikes($zid)
{
    $sql = "SELECT Count(*) FROM likes WHERE zid=$zid;";
    return mysqli_fetch_array(getSQLQuery($sql))[0];
}