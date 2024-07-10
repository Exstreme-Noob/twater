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
    <dvi class="register">
        <form action="./handle_post.php" method="post">
            <label for="username">Text:</label><br>
            <input class="register_input" id="text" name="username" required type="text" /><br>
            <div class="pfp_uplad">
                <label for="pfp">Post Image:</label><br>
                <input class="pfp_input" id="pfp" name="pfp" type="file" /><br>
            </div>
            <div class="register_buttons">
                <input class="register_send" name="register" type="submit" value="Post" />
                </divclass>
        </form>
    </dvi>