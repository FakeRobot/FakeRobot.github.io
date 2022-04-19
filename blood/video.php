<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Blood - Video</title>
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
                        <li class="yui3-menuitem current"><a class="yui3-menuitem-content" href="video.php">Video</a></li>
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="twitter.php">Twitter</a></li>
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="photos.php">Photos</a></li>
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="news.php">News</a></li>
                        

                    </ul>
                </div>
            </div>
            <!-- end of nav -->
        </div>
        <!-- start of bd -->
        <div class="yui3-g" id="bd">
            <div class="yui3-u-2-3">
                <h2>Recent Videos</h2>
                <table class="videothumbnails">
                    <tr>
                        <td>
                           <a href="video_page.php"><img src="videothumb.jpg" /></a>
                        </td>
                        <td>
                            <h3><a href="video_page.php">In the Time It Takes to Give Blood</a></h3>
                            August 07, 2010 - Real blood donors talk about some of the trivial things they do that take the same amount of time as donating blood. This brief video is a light-hearted reminder that it doesnt take much time to save someones life, and you get to have donuts. This blood donation advocacy video was produced by In The Telling with educational funding from Johnson & Johnson...
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <a href="video_page.php"><img src="videothumb.jpg" /></a>
                        </td>
                        <td>
                            <h3><a href="video_page.php">Donating Saves lives</a></h3>
                            August 07, 2010 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, lorem in tincidunt facilisis, felis metus viverra massa, id viverra lectus enim eu nisi.
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <a href="video_page.php"><img src="videothumb.jpg" /></a>
                        </td>
                        <td>
                            <h3><a href="video_page.php">Do it for the cookies</a></h3>
                            August 07, 2010 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, lorem in tincidunt facilisis, felis metus viverra massa, id viverra lectus enim eu nisi.
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <a href="video_page.php"><img src="videothumb.jpg" /></a>
                        </td>
                        <td>
                            <h3><a href="video_page.php">Why I love blood donors</a></h3>
                            August 07, 2010 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, lorem in tincidunt facilisis, felis metus viverra massa, id viverra lectus enim eu nisi.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="yui3-u-1-3">
                <div class="content">
                    <h2>How to share your donation videos:</h2>
                    <ol>
                        <li>If you don't already have one, sign up for a <a href="youtube.com">YouTube</a> account.</li>
                        <li>Follow the instructions there to upload your video.</li>
                        <li>Tag the video with <span class="red">CanBloodServices</span> by putting the word into the <strong>Tags</strong> field.</li>
                        <li>We will use that tag to find your video and share it with other donors! Don't worry if it doesn't show up right away, sometimes it can take up to a day to find the videos.</li>
                    </ol>
                </div>
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