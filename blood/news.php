<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Blood - News</title>
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
                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="photos.php">Photos</a></li>
                        <li class="yui3-menuitem current"><a class="yui3-menuitem-content" href="news.php">News</a></li>


                    </ul>
                </div>
            </div>
            <!-- end of nav -->
        </div>
        <!-- start of bd -->
        <div class="yui3-g" id="bd">
            <div class="yui3-u-2-3">
                <div class="content">
                    <h2 class="padding">Recent News</h2>
                    <div class="article">
                        <h3>Parliament Hill 'Swab Event' Offers Hope to Canada's 777 Patients Waiting for Stem Cell Transplants</h3>
                        <div class="date">October 6, 2010</div>
                        <div class="excerpt">Chair National Health Committee of Canada, MP Joy Smith, joins MP Terrence Young to draw greater awareness to Canada's need for more stem cell donors. <a href="/news_page.php">More ...</a></div>
                    </div>
                    <div class="article">
                        <h3>Canadian Blood Services mourns passing of Sindi Hawkins</h3>
                        <div class="date">September 21, 2010</div>
                        <div class="excerpt">Former B.C. MLA Sindi Hawkins lost her battle with leukemia on Tuesday, September 21. Sindi had been national co-chair of the first two National Stem Cell Awareness weeks. <a href="/news_page.php">More ...</a></div>
                    </div>
                    <div class="article">
                        <h3>Canadian Blood Services Releases "Annual Checkup"</h3>
                        <div class="date">September 13, 2010</div>
                        <div class="excerpt">At the Annual General Meeting of the Ministers of Health, Canadian Blood Services presented its 11th annual report, A Report to Canadians: Annual Checkup for 2009/2010. <a href="/news_page.php">More ...</a></div>
                    </div>
                    <div class="article">
                        <h3>Canadian Blood Services' CEO Gives Initial Reaction to Ontario Superior Court MSM Ruling</h3>
                        <div class="date">September 9, 2010</div>
                        <div class="excerpt">Canadian Blood Services welcomes the Ontario Superior Court ruling in the Charter challenge involving Kyle Freeman. The ruling by Justice Catherine Aitken held that Canadian Blood Services' donor screening methods uphold the highest standards of safety for its recipients, and are not a violation of Mr. Freeman's Charter rights. Justice Aitken also ruled the Charter does not apply to Canadian Blood Services. <a href="/news_page.php">More ...</a></div>
                    </div>
                </div>
            </div>
            <div class="yui3-u-1-3">
                <div class="content" style="background-color:#E2E4E4; padding-right:30px;">
                    <h2>About Us</h2>
                    <p>Canadian Blood Services is a not-for-profit, charitable organization whose sole mission is to manage the blood and blood products supply for Canadians.</p>
                    <p>To this end, Canadian Blood Services:</p>
                    <ul>
                        <li>Collects approximately 850,000 units of blood annually and processes it into the components and products that are administered to thousands of patients each year.</li>
                        <li>Manages the OneMatch Stem Cell and Marrow Network whose mission is to secure, in an expeditious way, donors for Canadian bone marrow transplant patients and for patients abroad.</li>
                        <li>Screens every donor and tests each unit of blood or blood product collected for a variety of transmissible diseases.</li>
                        <li>Ensures that Canadian transfusion medicine research and development remains at the cutting edge.</li>
                    </ul>
                    <p>Canadian Blood Services is committed to blood safety. In addition to the effective screening and testing processes, this pursuit of safety is reflected in every branch of its organizational structure and in each management and operational decision that is made.</p>
                    <p>Would you like to <a target="_blank" href="http://www.blood.ca/CentreApps/Internet/uw_v502_mainengine.nsf/page/E_Become%20a%20Donor?OpenDocument&CloseMenu">become a donor?</a></p>
                    <br />
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