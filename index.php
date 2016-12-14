<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html class="not-ie" lang="en">
<!--<![endif]-->

<!-- 
########################################################################
                  Arnaud Morin Resume Timeline
                  
		 _              _     _     _                        
		| |            (_)   | |   (_)                       
		| |__  _ __ ___ _ ___| |__  _ _ __  _ __   _____   __
		| '_ \| '__/ _ \ |_  / '_ \| | '_ \| '_ \ / _ \ \ / /
		| |_) | | |  __/ |/ /| | | | | | | | | | | (_) \ V / 
		|_.__/|_|  \___|_/___|_| |_|_|_| |_|_| |_|\___/ \_/  


Components:

- Design inspired from http://brkor.nazwa.pl/resume-timeline/ (License?)
- Boostrap from Twitter (MIT License)
- Boostrap Progress Bar from Stephan Gross (MIT License)
- jQuery from jQuery Fundation (MIT License)
- jQuery EasyPieChart from Robert Fleischmann (MIT License)
- Modernizr from Modernizr Team (MIT License)

########################################################################
-->

<head>
<meta charset="utf-8">
<meta name="description" content="Arnaud Morin - DevOps, OpenStack developer, Virtualization, Network and Telecom Evangelist" />
<meta name="keywords" content="Arnaud, Morin, Devops, Openstack, Developer, Virtualization, Network, Telecom, Orange, Linux"/>
<meta name="author" content="Arnaud Morin" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title>Arnaud Morin - Resume Timeline</title>

<!-- google web font-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>

<!-- style sheets-->
<link rel="stylesheet" media="all" href="css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" media="all" href="css/custom.css" type="text/css"/>

<!-- main jquery libraries / others are at the bottom-->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>

</head>
<body>

<!-- Settings -->
<!--
<div class="settings">
    <span class="glyphicon glyphicon-cog"></span>
    <a class="btn active top-white">White theme</a>
    <a class="btn top-dark">Dark theme</a>
</div>
-->
<!-- end Settings -->

<!-- Top icons -->
<div class="top-icons">
	<a class="top-menu hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Menu toggle"><span class="glyphicon glyphicon-th-list"></span></a>
	<a href="/Arnaud_Morin_DevOps_Resume.png" download="Arnaud_Morin_DevOps_Resume" class="top-download-resume hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Download resume"><span class="glyphicon glyphicon-cloud-download"></span></a>
	<a class="top-contact hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Contact me"><span class="glyphicon glyphicon-send"></span></a>
</div>
<!-- end Top icons -->

<!-- Navigation -->
<nav id="spy" class="spy hidden-sm hidden-xs">
    <ul>
        <li class="active"><a href="#profile">Profile</a></li>
        <li><a href="#professional-skills">Skills</a></li>
        <li><a href="#work-experience">Work experience</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#interests">Interests</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
<!-- end Navigation -->
    
<!-- Navigation for small devices -->
<nav id="mini-nav" class="spy visible-sm visible-xs">
    <ul>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Menu</a>
            <ul class="dropdown-menu">
                <li class="active"><a href="#profile">Profile</a></li>
                <li><a href="#professional-skills">Skills</a></li>
                <li><a href="#work-experience">Work experience</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#interests">Interests</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </li>
      </ul>
</nav>
<!-- end Navigation for small devices -->
    
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <img src="img/DSC_9051_carre.jpg" class="face" alt="">
                <hr class="empty">
                <p class="header-name">Arnaud Morin</p>
                <p class="header-title">Web Developer, DevOps & Virtualization Evangelist</p>
                <p class="header-subtitle"><b>Hello my name is Arnaud Morin</b> and I'm a DevOps from Rennes, France.<br/>As an IT professional working a full time, my responsibilities are always changing. Each day is an adventure. I’m a telecom & network architect, a web developer, an OpenStack evangelist, a system adminitrator and a new technologies adepts... Am I a geek? I am a so called <a href="http://en.wikipedia.org/wiki/Generation_Y">Millennials</a>. Well, in my case, I take this opportunity to become more familiar with both new technologies, developement and telecom industry, gain some hands-on experience and with some luck, move ahead in my career.</p>
            </div>
        </div>
    </div>
</header>
<!-- end Header -->
	
<!-- Profile -->
<section id="profile" class="profile activate">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-user"></span>Profile</li>
                    <li>
                        <span class="note">Full name</span>
                        <p><strong>Arnaud Morin</strong></p>
                    </li>
                    <li>
                        <span class="note">Born</span>
                        <p><strong>27 June 1985</strong></p>
                        <p><strong>Rennes, France</strong></p>
                    </li>
                    <li>
                        <span class="note">LinkedIn Profile</span>
                        <p><strong><a href="https://www.linkedin.com/in/arnaudmorin" target="_blank">https://www.linkedin.com/in/arnaudmorin</a></strong></p>
                    </li>
                    <li>
                        <span class="note">Launchpad Profile</span>
                        <p><strong><a href="https://launchpad.net/~arnaud-morin" target="_blank">https://launchpad.net/~arnaud-morin</a></strong></p>
                    </li>
                    <li>
                        <span class="note">IRC</span>
                        <p>arnaud_orange (Freenode)</p>
                        <p>manger (Freenode)</p>
                        <p>You will find me on #openstack-fr #puppet-openstack #emerginov. Sometimes on #ubuntu-fr</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Profile -->

<!-- IT skills -->
<section id="professional-skills" class="professional-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-hdd"></span>IT skills</li>
                    <li>
                        <span class="chart" data-percent="90"><span class="skill">Ubuntu/Debian</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="90"><span class="skill">Puppet</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="90"><span class="skill">Apache/Nginx</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="85"><span class="skill">OpenStack</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="70"><span class="skill">RedHat/Fedora</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="70"><span class="skill">KVM/Libvirt</span>
                            <span class="percent"></span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Network skills -->
<section id="professional-skills" class="professional-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-sort"></span>Telecom & Network skills</li>
                    <li>
                        <span class="chart" data-percent="90"><span class="skill">Asterisk/OpenSIPS</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="90"><span class="skill">Bind DNS</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="85"><span class="skill">Iptables/Netfilter</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="80"><span class="skill">Wireshark/tcpdump</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="70"><span class="skill">WebRTC</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="70"><span class="skill">Cisco switch</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="60"><span class="skill">Postfix/Dovecot/Amavis</span>
                            <span class="percent"></span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Tools & dev skills -->
<section id="professional-skills" class="professional-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-tasks"></span>Tools & Dev skills</li>
                    <li>
                        <span class="chart" data-percent="90"><span class="skill">HTML/JS/CSS</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="85"><span class="skill">BASH</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="85"><span class="skill">PHP</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="75"><span class="skill">Debian Packaging</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="75"><span class="skill">SVN/Git</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="70"><span class="skill">Python</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="60"><span class="skill">Perl</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="60"><span class="skill">C/C++</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="60"><span class="skill">Java</span>
                            <span class="percent"></span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Personal skills -->
<section id="personal-skills" class="personal-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-stats"></span>Personal skills</li>
                    <li>
                        <span class="chart" data-percent="90"><span class="skill">Innovative</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="90"><span class="skill">Social/Communication</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="85"><span class="skill">Team Work</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="85"><span class="skill">Troubleshoot/Debug</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="80"><span class="skill">Organized</span>
                            <span class="percent"></span>
                        </span>
                        <span class="chart" data-percent="80"><span class="skill">Supportive</span>
                            <span class="percent"></span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Personal skills -->

<!-- Work experience -->
<section id="work-experience" class="work-experience">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-briefcase"></span>Work experience</li>
                    <li>
                        <span class="note">2014 - 2015</span>
                        <p><strong>Orange Labs</strong></p>
                        <p><strong>Cloud, Network & NFV DevOps</strong> in Saint Malo, France</p>
                        <p class="description">
							<a href="http://en.wikipedia.org/wiki/Network_Functions_Virtualization" target="_blank">Network Function Virtualization (NFV)</a> is a network architecture concept that proposes using IT virtualization related technologies to virtualize entire classes of network node functions into building blocks that may be connected, or chained, together to create communication services.
							<br/>Dev:
							<br/> × Puppet modules to deploy OpenStack in Orange Labs based on Ubuntu 14.04 Server.
							<br/> × Automation of deployment of KVM Virtual Machines using BASH scripts.
							<br/> × Testbed to study KVM Passthrough, DPDK and SR-IOV within telecom use cases.
							<br/>Ops:
							<br/> × Installation of IBM, DELL & HP servers in Orange Labs datacenters.
							<br/> × Cisco 2950 & 3650 switch configuration.
							<br/> × Deployment of Virtual Network Function (VNF) based on Free Software (such as OpenSIPS, Asterisk, Emerginov, etc).
							<br/> × Maintain an <a href="https://www.opensteak.fr/">OpenStack cloud platform</a> up & running for Orange Labs engineers team.
						</p>
						<p class="description">
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Free & Open Source Software</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Ubuntu Servers</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Puppet</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">BASH</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Python</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Ruby</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">KVM</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">OpenVZ</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Libvirt</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">NFV</a>
						</p>
                    </li>
                    <li>
                        <span class="note">2013</span>
                        <p><strong>Orange Labs</strong></p>
                        <p><strong>WebRTC & Innovative Telecom Solution Architect</strong> in Saint Malo, France</p>
                        <p class="description">
							<a href="http://en.wikipedia.org/wiki/WebRTC" target="_blank">Web Real-Time Communication (WebRTC)</a> is an API drafted by W3C consortium in order to support browser to browser communication, such as voice/videos calls or peer to peer file sharing, without the need of any plugin.
							<br/> × W3C representative for Orange Labs.
							<br/> × Network & Software Architect for a collaborative project called <a href="https://www.youtube.com/watch?v=SoluFaXjnZs" target="_blank">Zewall</a>.
							<br/> × Development of the first WebRTC to SIP gateway in C language.
							<br/> × Development of a HTTP Live Streaming prototype in Javascript.
							<br/> × Installation of IBM servers in Orange Labs datacenters with Ubuntu Server.
						</p>
						<p class="description">
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">WebRTC</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">SIP</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">C</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">BASH</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">HTML</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">PHP</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">JavaScript</a>
						</p>
                    </li>
                    <li>
                        <span class="note">2010 - 2013</span>
                        <p><strong>Orange Labs</strong></p>
                        <p><strong>DevOps on Emerginov Platform</strong> in Lannion, France</p>
                        <p class="description">
							<a href="http://emerginov.ow2.org/" target="_blank">Emerginov</a> is a Platform As A Service (PAAS) dedicated to African developers.
							<br/>Dev:
							<br/> × Puppet modules to deploy an Emerginov platform.
							<br/> × Web portal in PHP using Smarty template engine.
							<br/> × Web services in PHP using RESTler framework.
							<br/> × BASH Scripts for automation of deployment inside the platform.
							<br/> × Development of a Live Ubuntu USB Key (BASH, Python)
							<br/> × Installation of Subversion (SVN) Server
							<br/> × Installation & configuration of Apache, Nginx Web Servers, Squid Proxy, Postfix Mail Server, MySQL Server, Asterisk PABX, OpenSIPS SIP Router, OverSIP, Kannel SMS Gateway
							<br/> × Automatic configuration of a Bind DNS using BASH scripts
							<br/>Ops:
							<br/> × Deployment of IBM 3650 xSeries servers in Orange Labs datacenters.
							<br/> × Deployment of Proxmox (KVM & OpenVZ) and Xen virtual environnement in France, Senegal, Mauritius, Ivory Coast & Botswana.
							<br/> × Deployment of Emerginov in XEN & Proxmox virtual environnement.
							<br/>Debian Packaging: <small>mostly for Ubuntu, using Launchpad</small>
							<br/> × <a href="https://launchpad.net/~emerginovteam/+archive/ubuntu/emerginov" target="_blank">Asterisk Voice Over IP Server</a>
							<br/> × <a href="https://launchpad.net/~emerginovteam/+archive/ubuntu/emerginov" target="_blank">OpenSIPS SIP Router</a>
							<br/> × <a href="https://launchpad.net/~emerginovteam/+archive/ubuntu/emerginov" target="_blank">mod-osa Apache2 library</a>
						</p>
						<p class="description">
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Free & Open Source Software</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Debian Packaging</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Puppet</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">BASH</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">PHP</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Python</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Ruby</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">KVM</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">OpenVZ</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">SVN</a>
						</p>
                    </li>
                    <li>
                        <span class="note">October 2008 - September 2009</span>
                        <p><strong>Orange Labs</strong></p>
                        <p><strong>Network & Telecom Developer</strong> in Lannion, France</p>
                        <p class="description">
							Orange Labs is the innovation branch of Orange, a French telecom company.
							<br/> × Deployment of an <a href="http://en.wikipedia.org/wiki/IP_Multimedia_Subsystem" target="_blank">IP Mutlimedia Subsytem (IMS)</a> based on the Open Source <a href="http://www.openimscore.org/" target="_blank">OpenIMSCore</a> from Fraunhofer Fokus.
							<br/> × Integration of this IMS solution in Orange Labs test bed.
							<br/> × Development of new functionnalities around OpenIMSCore.
							<br/> × Integration with other Open Source solution such as Asterisk, OpenSIPS, Kamailio, OpenXCAP.
							<br/> × <a href="https://launchpad.net/~arnaud-morin/+archive/ubuntu/ppa">Debian Packaging</a> of the OpenIMSCore solution.
						</p>
						<p class="description">
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Free & Open Source Software</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Debian Packaging</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">SIP</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">IMS</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">VoIP</a>
						</p>
                    </li>
                    <li>
                        <span class="note">October 2008 - today</span>
                        <p><strong>Orange Labs</strong></p>
                        <p><strong>Other small projects</strong></p>
                        <p class="description">
							Debian Packaging: <small>mostly for Ubuntu, using Launchpad</small>
							<br/> × <a href="https://launchpad.net/~arnaud-morin/+archive/ubuntu/openstack" target="_blank">OpenStack</a> related packages.
							<br/> × <a href="https://launchpad.net/~arnaud-morin/+archive/ubuntu/gemalto" target="_blank">Gemalto PKCS11 library</a> for smartcard reader.
							<br/> × <a href="https://launchpad.net/~arnaud-morin/+archive/ubuntu/ppa" target="_blank">Callflow</a>: a network trace analyzer.
							<br/>Hadoop cluster deployment in Orange Labs on IBM servers.
							<br/>Network & Telecom architecture in various Orange Labs projects
							
						</p>
						<p class="description">
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Debian Packaging</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Hadoop</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">BigData</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">VoIP</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Network & Telecom Architecture</a>
						</p>
                    </li>
                    <li>
                        <span class="note">May - September 2008</span>
                        <p><strong>Oceus Informatique</strong></p>
                        <p><strong>Junior Web Developer</strong> in Rennes, France</p>
                        <p class="description">
							Oceus Informatique is a small IT company involved in developping a Library Software. 
							<br/> × Development of a new Library Software based on <a href="http://koha-community.org/" target="_blank">Koha Library Free Software</a>.
							<br/> × Development of specific Perl modules.
							<br/> × Deployment of Koha on Ubuntu based servers.
						</p>
						<p class="description">
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Free & Open Source Software</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Perl</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Koha</a>
							<a href="#" class="btn btn-primary btn-xs disabled" role="button">Ubuntu Server</a>
						</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Work experience -->
    
<!-- Education -->
<section id="education" class="education">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-book"></span>Education</li>
                    <li>
                        <span class="note">2012</span>
                        <p><strong>LPI 101</strong></p>
                    </li>
                    <li>
                        <span class="note">2006 - 2009</span>
                        <p><strong>Masters Degree</strong></p>
                        <p><strong>Higher Institute for Electronics and Digital Training (<a href="http://www.isen.fr/gb/" target="_blank">ISEN</a>)</strong> in Brest, France</p>
                        <p class="description">ISEN is an engineering college group which deliver a generalist engineer diploma in 3 years. It’s oriented to numeric and computing technologies.</p>
                    </li>
                    <li>
                        <span class="note">2006 - 2007</span>
                        <p><strong>Bachelor's Degree</strong></p>
                        <p><strong>University of Brittany (<a href="http://www.univ-brest.fr/GB" target="_blank">UBO</a>)</strong> in Brest, France</p>
                        <p class="description">Physics Bachelor's Degree in parallel of studying at ISEN.</p>
                    </li>
                    <li>
                        <span class="note">2005 - 2006</span>
                        <p><strong>Equivalent of a Bachelor's Degree</strong></p>
                        <p><strong>Higher Institute for Electronics and Digital Training (<a href="http://www.isen.fr/gb/" target="_blank">ISEN</a>)</strong> in Brest, France</p>
                        <p class="description">Post-secondary preparatory school. Mainly focused on physics, mathematics and engineering stuff.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Education -->
    
<!-- Interests -->
<section id="interests" class="interests">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
					<li class="title"><span class="glyphicon glyphicon-heart-empty"></span>Interests & other personal stuff</li>
					<li>
                        <p><strong>Free Software</strong></p>
                        <p class="description">
							× Development of my own Ubuntu based Linux Distro (<a href="https://github.com/arnaudmorin/GangBangLinux" target="_blank">GangBang Linux</a>)
							<br/> × Member of OpenStack-fr
							<br/> × Major developer/crontributor of Emerginov Platform source code
							<br/> × Debian Packager since 2008
						</p>
                    </li>
					<li>
                        <p><strong>Personal Projects</strong></p>
                        <p class="description">
							× Development of my own Ubuntu based Linux Distro (<a href="https://github.com/arnaudmorin/GangBangLinux" target="_blank">GangBang Linux</a>)
							<br/> × <a href="http://www.anglais.urssaf.fr/index.php?option=content&task=blogcategory&id=278&Itemid=5572" target="_blank">Auto-entrepreneur</a> (One-person Business) during spare time (mostly Web development and Sys Admin): <a href="http://www.breizhinnov.fr">www.breizhinnov.fr</a>
							<br/> × Small French IT blog: <a href="http://blog.breizhinnov.fr">blog.breizhinnov.fr</a>
							<br/> × Lecturer at ISEN & Télecom Bretagne on WebRTC, Cloud, Voice over IP & SIP
						</p>
                    </li>
                    <li>
                        <p><strong>Books</strong></p>
                        <p class="description">
							Mostly Sy-Fy books. And yes, I know the the <a href="http://en.wikipedia.org/wiki/Phrases_from_The_Hitchhiker%27s_Guide_to_the_Galaxy#Answer_to_the_Ultimate_Question_of_Life.2C_the_Universe.2C_and_Everything_.2842.29" target="_blank">answer to life, the universe, and everything</a> :p
						</p>
                    </li>
                    <li>
                        <p><strong>Sport</strong></p>
                        <p class="description">
							Practicing Tennis, Badminton for pleasure and health benefits.
						</p>
                    </li>
                    <li>
                        <p><strong>Languages</strong></p>
                        <p class="description">
							× French: native speaker
							<br/> × English: fluent
						</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Interests -->
    
<!-- Portfolio -- >
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-eye-open"></span>Portfolio</li>
                    <li class="static">
                        <img src="img/1.jpg" alt="" data-toggle="modal" data-target="#modal1">
                        <img src="img/2.jpg" alt="" data-toggle="modal" data-target="#modal2">
                        <img src="img/3.jpg" alt="" data-toggle="modal" data-target="#modal3">
                        <img src="img/4.jpg" alt="" data-toggle="modal" data-target="#modal4">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Portfolio -->
    
<!-- Modal - photos in zoom-- >
<div id="modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-box">
            <img src="img/1.jpg" alt="">
        </div>
    </div>
</div>
<div id="modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-box">
            <img src="img/2.jpg" alt="">
        </div>
    </div>
</div>
<div id="modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-box">
            <img src="img/3.jpg" alt="">
        </div>
    </div>
</div>
<div id="modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-box">
            <img src="img/4.jpg" alt="">
        </div>
    </div>
</div>
<!-- end Modal - photos in zoom-->
    
<!-- Contact -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
                <ul>
                    <li class="title"><span class="glyphicon glyphicon-envelope"></span>Contact</li>
                    <li class="static">
                        <span class="note">Email</span>
                        <p><strong><a href="mailto:arnaud.morin@gmail.com">arnaud.morin@gmail.com</a></strong></p>
                        <hr class="empty">
                        <span class="note">Or contact form:</span>
                        <form action="process.php" method="post" class="form">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                                <textarea name="comment" class="form-control" id="comment" rows="3" placeholder="Enter message here"></textarea>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-bold"></span></span>
                                <input name="anti42" type="text" class="form-control" id="anti42" placeholder="Anti-spam: 40+2=">
                            </div>
                            <button type="submit" id="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-send"></span> Send message</button>
                        </form>
                        <div class="error"> </div>
                        <div class="done"> 
							<h4>Thank you!</h4>
							I will consult your message as soon as possible!
						</div>
                    </li>
                    <li class="title up"><span class="glyphicon glyphicon-arrow-up"></span>Up</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Contact -->

<!-- thanks -->

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 text-center">
			<small>Arnaud Morin - based on work from <a href="http://brkor.nazwa.pl/resume-timeline/">http://brkor.nazwa.pl/resume-timeline/</a> with <a href="http://glyphicons.com/">Glyphicons</a> and <a href="http://getbootstrap.com/">Bootstrap</a></small>
		</div>
	</div>
</div>

<!-- end thanks -->

<!-- Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-progressbar.js"></script>
<script src="js/spy.js"></script>
<script src="js/scripts.js"></script>
<!-- Charts -->
<script src="js/jquery.easypiechart.js"></script>
<script src="js/chart.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58439184-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
