<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<?php

function getNamemc() {
    if (strpos($_SERVER['HTTP_HOST'], '2b2t.org.au') !== false) {
        echo '<iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/2b2t.org.au/embed" width="728" height="90"></iframe>';
    } elseif (strpos($_SERVER['HTTP_HOST'], '2b2t.com.au') !== false) {
        echo '<iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/2b2t.com.au/embed" width="728" height="90"></iframe>';
    } elseif (strpos($_SERVER['HTTP_HOST'], 'aussieanarchy.org') !== false) {
        echo '<iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/aussieanarchy.org/embed" width="728" height="90"></iframe>';
    } else {
        echo '<iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/2b2t.au/embed" width="728" height="90"></iframe>';
    }
}

function getIp() {
    if (strpos($_SERVER['HTTP_HOST'], '2b2t.org.au') !== false) {
        echo '2b2t.org.au';
    } elseif (strpos($_SERVER['HTTP_HOST'], '2b2t.com.au') !== false) {
        echo '2b2t.com.au';
    } elseif (strpos($_SERVER['HTTP_HOST'], 'aussieanarchy.org') !== false) {
        echo 'aussieanarchy.org';
    } elseif (strpos($_SERVER['HTTP_HOST'], 'toastmc.dev') !== false) {
        echo 'toastmc.dev';
    } else {
        echo '2b2t.au';
    }
}

function getReddit() {
    if (strpos($_SERVER['HTTP_HOST'], '2b2t') !== false) {
        echo 'reddit.com/r/2b2tau';
    } elseif (strpos($_SERVER['HTTP_HOST'], 'aussieanarchy.org') !== false) {
        echo 'reddit.com/r/aussieanarchy';
    }
}

function getTitle() {
    if (strpos($_SERVER['HTTP_HOST'], '2b2t') !== false) {
        echo '2b2t Australia';
    } elseif (strpos($_SERVER['HTTP_HOST'], 'aussieanarchy.org') !== false) {
        echo 'Aussie Anarchy';
    }
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="<?php getTitle(); ?> is the oldest Anarchy Server in Australia!"/>
    <meta name="keywords" content="4chan, v, vg, anarchy, minecraft, server, vanilla, 2B2T.net, 2b2t.net, 2b2t, PvP, pvp, Facepunch, facepunch, number, one, somethingawful, something, awful, 2b2t.org, Australia, 2b2t.com, Aussie Anarchy, 2b2t Australia, 2b2t Au, 2b2t AUS, Australian Anarchy, Australian Anarchy Server, AAS, Australia Anarchy, hacking, toast, slavelabour, fit, fitmc, rusher, fax, faxmachine, virl, the oldest anarchy server in australia, oldest, australia, anarchy, server, oldest australia, real anarchy, 2b2t, digmc"/>

    <link rel="icon" type="image/png" href="assets/icon.png"/>
    <link href="style.css" rel="stylesheet"/>

    <script src="stats.js.php" type="application/javascript" charset="UTF-8"></script>
    <script src="script/jQuery.js" type="text/javascript" charset="UTF-8"></script>
    <script src="script/jquery.scrollTo.js" type="text/javascript" charset="UTF-8"></script>
    <script src="script/slide.js" type="text/javascript" charset="UTF-8"></script>
    <script type="text/javascript" defer src="https://donorbox.org/install-popup-button.js"></script>
    <script>window.DonorBox = { widgetLinkClassName: 'custom-dbox-popup' }</script>
    <title><?php getTitle(); ?></title>
</head>

<body style="background-image:url('/assets/render.jpg')">
<!-- Holder, this container is used to position everything in the centre of the users screen -->
<div class="holder">
    <!-- Start of header -->
    <div class="header">
        <div class="logo">
            <center><a href="#"><?php getTitle(); ?></a></center>
        </div>
    </div>
    <!-- End of header -->

    <!-- Start of navigation -->
    <div class="navigation">
        <a href="#main" class="panel">MAIN</a> <span class="raquo">&raquo;</span> <a class="panel" href="https://discord.gg/fuQ8rTekWb" target="_blank">DISCORD</a> <span class="raquo">&raquo;</span> <a href="https://www.reddit.com/r/2b2tAU/" target="_blank" class="panel">REDDIT</a>
    </div>
    <!-- End of navigation -->

    <div class="cols">
    <!-- Container 1, static donation -->
    <div class="container con1 text">
        <?php getTitle(); ?> runs on automated payments it at least $85 USD for it to pay for itself at the end of every month.
        <p>If donations aren't reached for any month, I will attempt to pay the rest of the amount if it isn't a significant amount.</p>
        <p><strong>Otherwise, I will be publicly releasing the world as a torrent and shutting the server down.</strong></p>
        <p><strong>No bullshit included in donations needed, exact prices and information written are out.</strong>
        <p>I do not intend to gain profit out of this, just keep it running for as long as possible.</p>
        <p>Any roll over donations will go into building a custom server to ensure the longevity of the server.</p>
        <div style="height: 200px;"></div>
        <p>Paid every month.</p>
        <p><a id="bal-amount">Amount</a>
        <b><br>Due <a id="bal-month">Month</a> 1st</p></b>
        <a class="custom-dbox-popup" href="https://donorbox.org/keep-2b2t-australia-running">
            <img src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif"/>
        </a>
<!--        <form action="https://www.paypal.com/donate" method="post" target="_top">-->
<!--            <input type="hidden" name="hosted_button_id" value="NL97H67WRYBA2" />-->
<!--            <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />-->
<!--            <img src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1"  alt=""/>-->
<!--        </form>-->
    </div>
    <!-- Container 1 end -->

    <!-- Container 2, main content, editable -->
    <div class="containerChat con2">
        <div id="wrapper">
            <div id="mask">
                <!-- Main holder, this is what you see on page load -->
                <div id="main" class="item text">
                    <a id="main1"></a>
                    <div class="post-header"><?php getTitle(); ?> (2Bogans2Tradies)</div>
                    <div class="post-content">
                        <?php getTitle(); ?> is the oldest anarchy server in Australia, that promises its players vanilla survival gameplay with pvp encapsulated inside a never ending world with <strong>no rules, no map resets and no p2w</strong>. Anything goes, do as you will. <br/><br/>
                    <div class="content-header">
                        IP: <?php getIp(); ?>
<!--                        IP(s): 2b2t.org.au, 2b2t.com.au-->
                        <br/>
                        <br/>
                        Server Started 20/01/21 (Jan 20th 2021)
                        <br/>
                        <br/>
                        <a id="players">
                            Loading...
                        </a>
                        <br/>
                        <a id="years"></a><a id="months"></a><a id="days"></a><a id="size"></a>
                    </div>
                    </div>
                    <div class="spacer7"></div>
                    <div class="post-header">News - Janurary 2022</div>
                    <div class="post-content">
                        <a href="https://www.reddit.com/r/2b2tAU/comments/s89jiv/january_2022_news/?utm_source=share&utm_medium=web2x&context=3">Full changelog posted on r/2b2tAU.</a>
                    </div>
<!--                    <div class="post-header">News - January</div>-->
<!--                    <div class="post-content">-->
<!--                        RemainingToast has left 2b2t Australia forever and is no longer in charge.<br>-->
<!--                        The server will continue like normal though and will be operated by an anonymous friend.-->
<!--                    </div>-->
                    <div style="height: 10px"></div>
                    <div class="post-header">Hardware Price</div>
                    <div class="post-content">
                        The minecraft server computer costs around <b>$83 USD</b> a month. The hardware is an Intel Core i7-7700k CPU, RAM 32GB and 2x HDD SATA 4TB in soft raid. The extra couple dollars goes towards yearly domain cost. That's <b>$85 USD</b>.<br><br>
                        Currently this is the best deal I can find for a dedicated server in Australia but if you believe you've found cheaper hosting, let me know in an email.<br><br>
                        Any roll over donations will go into building a custom server to ensure the longevity of the server.
                    </div>
                    <div style="height: 10px"></div>
                    <div class="post-header">Contact</div>
                    <div class="post-content">
                        Contact the operator of <?php getTitle(); ?><br>
                        E-mail: <a href="mailto:admin@<?php getIp(); ?>">admin@<?php getIp(); ?></a><br>
                    </div>
                    <div class="spacer7"></div>
                    <div class="post-header">Community Links</div>
                    <div class="post-content">
                        Subreddit: <a href="https://www.reddit.com/r/2b2tAU/" class="big-text" target="_blank"><?php getReddit(); ?></a><br>
                        Discord: <a href="https://discord.gg/fuQ8rTekWb" class="big-text" target="_blank">discord.gg/fuQ8rTekWb</a><br>

                        <br><b>*These are run by the community, to contact the server admin, please email <a href="mailto:admin@<?php getIp(); ?>">admin@<?php getIp(); ?></a><b>
                    </div>
                    <div class="spacer7"></div>
                    <div class="post-header">Help grow the server</div>
                    <div class="post-content">
                        Word of mouth, inviting your friends and creating groups are great ways of growing the server.<br>
                        I also encourage you to create content on the server, voting and liking us on name mc:
                        <div style="height: 15px"></div>
                        <script src="https://minecraft-mp.com/embed.js?id=277659&type=votes&size=normal"></script>
                        <?php getNamemc(); ?>
<!--                        <iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/2b2t.org.au/embed" width="728" height="45"></iframe>-->
<!--                        <iframe style="width:728px;height:90px;max-width:100%;border:none;display:block;margin:auto" src="https://namemc.com/server/2b2t.com.au/embed" width="728" height="45"></iframe>-->
                    </div>
                </div>
                <!-- Main end -->
                <!-- This is additional content, you'll see this when you click the corresponding name in nav -->

                <!-- End of additional content -->
                <!-- Lets clear our styled floats so the holder scales correctly -->
                <div class="clear"></div>
                <!-- End of clear -->
            </div>
        </div>
    </div>
    <!-- Container 2 end -->

    <!-- Container 3 -->
    <div class="container con3">

    </div>
    <!-- Container 3 end -->
    </div>

    <!-- Lets clear our styled floats so the holder scales correctly  --->
    <div class="clear"></div>
    <!-- End of clear -->
</div>
<!-- Holder end -->
</body>

</html>
