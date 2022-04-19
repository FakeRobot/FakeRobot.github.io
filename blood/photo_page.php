<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Blood - Photos</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/3.2.0/build/cssreset/reset.css" type="text/css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/3.2.0/build/cssfonts/fonts.css" type="text/css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/3.2.0/build/cssgrids/grids.css" type="text/css">

        <link rel="stylesheet" type="text/css" href="base.css">

        <script type="text/javascript">
            //	Hide the menu while its dependencies are being loaded
            document.documentElement.className = "yui3-loading";
        </script>

    </head>
    <body class="yui3-skin-sam">
        <div id="hd">
            <div class="yui3-g header">
                <div class="yui3-u-2-3">
                    <div class="left">
                        <img src="Logo.gif" alt="Canadian Blood Services" class="logo" />
                        <h1>Donor Connect</h1>
                    </div>
                </div>
                <div class="yui3-u-1-3">
                    <div class="right">
                        <img src="safe_image.jpeg" alt="User Profile Picture" class="profile" />
                        <div class="user-info">
                            <p>Marli Rauert</p>
                            <p>Rank: Life saver</p>
                                                        <p><a href="user_page.php">Go to your user page</a></p>                             <p><a href="home_loggedout.php">Logout</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start of nav -->
            <div id="mainnav" class="yui3-menu yui3-menu-horizontal">
                <div class="yui3-menu-content">
                    <ul class="first-of-type">
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="/blood/">Home</a></li>
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="video.php">Video</a></li>
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="twitter.php">Twitter</a></li>
                        <li class="yui3-menuitem current"><a class="yui3-menuitem-content" href="photos.php">Photos</a></li>
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="news.php">News</a></li>
                        

                    </ul>
                </div>
            </div>
            <!-- end of nav -->
        </div>
        <!-- start of bd -->
        <div class="yui3-g" id="bd">
            <div class="yui3-u">
                <h2>WordStorm Blood Donation June08 06</h2>
                <img src="largephoto.jpg" />
                <h2>Comments</h2>
                <img src="comment.png" />
            </div>
        </div>
        <!-- end of bd -->

        <?php include 'footer.php'; ?>


        <!-- YUI Seed -->
        <script type="text/javascript" src="http://yui.yahooapis.com/3.2.0/build/yui/yui.js"></script>

        <script type="text/javascript">

            //	Call the "use" method, passing in "node-menunav".  This will load the
            //	script and CSS for the MenuNav Node Plugin and all of the required
            //	dependencies.

            YUI().use("node-menunav", function(Y) {

                //	Retrieve the Node instance representing the root menu
                //	(<div id="productsandservices">) and call the "plug" method
                //	passing in a reference to the MenuNav Node Plugin.

                var menu = Y.one("#mainnav");

                menu.plug(Y.Plugin.NodeMenuNav);

                //	Show the menu now that it is ready

                menu.get("ownerDocument").get("documentElement").removeClass("yui3-loading");

            });

        </script>

    </body>
</html>