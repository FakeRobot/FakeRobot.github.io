<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Blood</title>
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
                            <p><a href="user_page.php">Go to your user page</a></p>
                            <p><a href="home_loggedout.php">Logout</a></p>
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
                <div content="content">
                    <h2>Your User Page</h2>
                    <img src="profilelarge.jpg" />
                    <p>Marli Rauert, your last donation was <span class="red">September 4th, 2010</span>. Thank you!</p>
                    <p>The next time you are eligible to donate is <span class="red">October 30th, 2010</span>. Call 1 888 2 DONATE to make an appointment.</p>
                    <!--<p>Marli Rauert, your last donation was <span class="red">August 15th, 2010</span>. Thank you!</p>
                    <p>It has been more than 56 days since your last donation, please make an appointment to donate today. 1 888 2 DONATE</p>-->
                    <p>You have donated blood 5 times! This gives you the rank of <span class="red">Life Saver</span>!</p>

                    <h3>Register a Donation</h3>
                    <p>Have you donated recently? Look at the document you were given after your donation to find your donor ID, the donation number, and the date. Enter them in the form below to register your donation:</p>
                    <form>
                        <div>
                            <label for="field-1" style="padding-right:52px;">Donor ID</label>
                            <input type="text" id="field-1" name="field-1">
                        </div>

                        <div>
                            <label for="field-2" style="padding-right:3px;">Donation Number</label>
                            <input type="text" id="field-2" name="field-2">
                        </div>

                        <div>
                            <label for="field-2" style="padding-right:76px;">Date</label>
                            <input type="text" id="field-3" name="field-3">
                        </div>
                        <a href="user_page_donated.php"><input type="button" id="button" name="submit" value="Submit"  /></a>
                    </form>

                    <h3>Link your Twitter Account</h3>
                    <p>Click on the button below to link your twitter account with your Donor Connect account and allow other donors to follow you!</p>
                    <form><input type="button" id="button" name="submit" value="Link My Twitter"  /></form>

                </div>
            </div>

            <div class="yui3-u-1-3">
                <div class="content">
                    <h2>Ranks</h2>
                    <h3>Friend</h3>
                    <div>Just sign up for this site to become a friend of the Canadian Blood Services</div>
                    <h3>Donor</h3>
                    <div>Register one blood donation to get this rank!</div>
                    <h3>Life Saver</h3>
                    <div>Register five blood donations to get this rank!</div>
                    <h3>Hero</h3>
                    <div>Register 10 blood donations to get this rank!</div>
                    <h3>Super Hero</h3>
                    <div>Register 15 blood donations to get this rank!</div>
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