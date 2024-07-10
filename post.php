<head>
    <title>Zwicher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
</head>

<body>
    <?php
    include "./php/functions.php";
    session_start();//Veljko
    topbar($_SESSION['uid']);
    ?>
    <dvi class="login">
        <form action="./handle_post.php" method="post">
            <label for="post_text">Text:</label><br>
            <input class="register_input" id="post_text" name="post_text" required type="text" /><br>
            <div class="pfp_uplad">
                <label for="post">Post Image:</label><br>
                <input class="pfp_input" id="post" name="post" type="file" /><br>
            </div>
            <div class="register_buttons">
                <input class="register_send" name="post" type="submit" value="Post" />
                </divclass>
        </form>
    </dvi>