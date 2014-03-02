<?php 

@include(dirname(__FILE__).'/header.php') ?>

                <div id="page-banner">
                    <div id="page-banner-screenshot"></div>
                    
                    <div id="page-banner-text">
                        <p id="page-banner-title">Easy version control for Linux</p>
                        
                        <div id="page-banner-body">
                            <p class="description">
                                RabbitVCS is a set of <a href="http://wiki.rabbitvcs.org/wiki/about/screenshots">graphical tools</a> written to provide simple and straightforward access to the version control systems you use.  We provide multiple clients and extensions designed to give you a uniform experience no matter what development tools you use.
                            </p>
                        
                            <div id="page-banner-download">
                                <h2>Get it!</h2><br />
                                <a href="http://wiki.rabbitvcs.org/wiki/install/ubuntu" title="ubuntu"><img src="images/systems/ubuntu.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/debian" title="debian"><img src="images/systems/debian.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/fedora" title="fedora"><img src="images/systems/fedora.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/arch" title="arch"><img src="images/systems/arch.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/gentoo" title="gentoo"><img src="images/systems/gentoo.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/mandriva" title="mandriva"><img src="images/systems/mandriva.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/opensuse" title="opensuse"><img src="images/systems/opensuse.png"/></a>
                                <a href="http://wiki.rabbitvcs.org/wiki/install/rhelcentos5" title="rhelcentos5"><img src="images/systems/centos.png"/></a>
                            </div>
                            <div style="width:100%;height:20px;"></div>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-7155234830059440";
/* RabbitVCS Banner */
google_ad_slot = "9860238898";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

                        </div>
                    </div>
                </div>
                
                <div class="column column1">

                </div>
                
                <div class="column column2">
                    <h2>From the Blog</h2>
<ul>
<?php @include('frontpage-blog-entries.html'); ?>
</ul>
                    
                    <p class="more"><a href="http://blog.rabbitvcs.org/">more...</a></p>
                    
                    <h2>Project Activity</h2>

<ul>
<?php @include('frontpage-project-entries.html'); ?>                    
</ul>

                    <p class="more"><a href="/activity">more...</a></p>
                </div>
                
                <div class="column column3">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="http://wiki.rabbitvcs.org/wiki/about/screenshots">Screenshots</a></li>
                        <li><a href="http://wiki.rabbitvcs.org/wiki/support/known-issues">Known Issues</a></li>
                        <li><a href="http://wiki.rabbitvcs.org/wiki/about/roadmap">Roadmap</a></li>
                        <li><a href="http://wiki.rabbitvcs.org/wiki/support/faq">FAQ</a></li>
                        <li><a href="http://code.google.com/p/rabbitvcs/source/browse/">Browse Source</a></li>
                        <li><a href="http://code.google.com/p/rabbitvcs/issues/list">View Issues</a></li>
                        <li><a href="http://www.assembla.com/plans?affiliate=RabbitVCS">Free Subversion and Git Hosting</a></li>
                    </ul>
                    
                    <h2>Project</h2>
                    <ul>
                        <li><a href="http://code.google.com/p/rabbitvcs">Google Code Project</a></li>
                        <li><a href="https://launchpad.net/rabbitvcs/">Launchpad Project</a></li>
                        <li><a href="http://www.ohloh.net/p/rabbitvcs">Ohloh Project</a></li>
                    </ul>
                    
                    <h2>Mailing lists</h2>
                    <ul>
                        <li><a href="http://groups.google.com/group/rabbitvcs">General Discussion</a></li>
                        <li><a href="http://groups.google.com/group/rabbitvcs-devel">Development Discussion</a></li>
                        <li><a href="http://groups.google.com/group/rabbitvcs-activity">Project Activity</a></li>
                    </ul>
                </div>

<script type="text/javascript">
$("#page-banner-screenshot").showcase({
    css: { border: "solid 3px #767098", "-moz-border-radius": "6px" },
    navigator: { 
        position:"top-left"
    },
    titleBar: { autoHide: false },
    images: [
        {
            url: "images/screenshots/nautilus-git-showcase.png",
            link: "images/screenshots/nautilus-git.png",
            description: "<div class=\"showcase-header\">Nautilus</div><div class=\"showcase-body\">Seamlessly integrates into Nautilus workflow</div>"
        },
        {
            url: "images/screenshots/gedit-git-showcase.png",
            link: "images/screenshots/gedit-git.png",
            description: "<div class=\"showcase-header\">Gedit</div><div class=\"showcase-body\">Provides menus for accessing version control tools</div>"
        },
        {
            url: "images/screenshots/thunar-git-showcase.png",
            link: "images/screenshots/thunar-git.png",
            description: "<div class=\"showcase-header\">Thunar</div><div class=\"showcase-body\">Seamlessly integrates into Thunar workflow</div>"
        },
        {
            url: "images/screenshots/command-line-showcase.png",
            link: "images/screenshots/command-line.png",
            description: "<div class=\"showcase-header\">Command Line Interface</div><div class=\"showcase-body\">An easy to use tool to launch our dialogs</div>"
        },
        {
            url: "images/screenshots/nautilus-svn-showcase.png",
            link: "images/screenshots/nautilus-svn.png",
            description: "<div class=\"showcase-header\">Subversion</div><div class=\"showcase-body\">Supports most Subversion functionality</div>"
        },
        {
            url: "images/screenshots/git-log-showcase.png",
            link: "images/screenshots/git-log.png",
            description: "<div class=\"showcase-header\">Git</div><div class=\"showcase-body\">Supports most Git functionality</div>"
        },
        {
            url: "images/screenshots/i18n-showcase.png",
            link: "images/screenshots/i18n.png",
            description: "<div class=\"showcase-header\">Fully Internationalized</div><div class=\"showcase-body\">Partial-to-full support for 26 languages!</div>"
        }
    ]
});
</script>


<?php @include(dirname(__FILE__).'/footer.php') ?>
