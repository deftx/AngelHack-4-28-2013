<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
	<title>Grace - Personal One Page Parallax Scrolling Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
    <link href="css/custom.css" rel="stylesheet" media="screen" />
    <link href="css/color1.css" rel="stylesheet" media="screen" />
    <link href="css/style.css" rel="stylesheet" />

    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!--[if lt IE 9]>
      <script src="css/font-awesome-ie7.min.css"></script>
    <![endif]-->
    
	<!-- Google Font Link: Choose font you want on google font(http://www.google.com/webfonts) and make sure your replace those fonts in name in custom.css -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Sanchez:400,400italic' rel='stylesheet' type='text/css'>

    <!-- ##### Le HTML5 shim, for IE6-8 support of HTML5 elements ##### -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--  ##### fav and touch icons ##### -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple144.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple114.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple72.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="img/apple57.png">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">Simply</a>
        <div class="nav-collapse collapse pull-right">
          <ul class="nav">
            <img class="pull-left profile-image" src="img/greg.jpg" height="30" width="30">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">GREGORY WONG <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">View</a></li>
                <li><a href="#">Edit</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </nav>
  <section id="home" class="container-fluid pages">
    <div class="dots">
      <div class="container">
        <img id="logo" src="img/logo.png"> 
     	  <div class="row pos-relative hgt700"><!-- We need fix height for this <div> because we have image in absolute position. -->
        	<div class="span8">
  		      <h1 class="txt-white mrg50T pdg50T mrg40B mob-txt-center">
            Hi <span class="txt-yellow">I'm Greg</span>,<br />A Freelance Graphic/Web Designer<br />From Mumbai.
            </h1>
            <p class="txt-white txt-font2 txt24 mrg20T mob-txt-center">I don't think outside of the box;<br />I think of what I can do with the box.</p>
            <p class="mrg50T mob-txt-center"><a href="#work" class="btn btn-simple bg-yellow txt18 txt-font2 txt-blue">Have a look at my work <i class="icon-circle-arrow-down txt-blue"></i></a></p>
          </div><!-- span8 END -->
        </div>
      </div><!--container-->
    </div>
  </section><!-- home END -->
      
  <section id="about" class="container-fluid pages">
    <div class="container">
      <div class="row">
        <div class="span4">
        </div>
      </div>
      <div class="row">
      <article class="span4 center">
        <h1 class="pg-title center"><span>About</span></h1>
        <div id="profile-img-circle" class="circle" data-toggle="modal" data-target="#profileImageModal">
        	<i class="icon-edit"></i>
        	<img id="profile-img" src="img/greg.jpg" class="img1 img-circle" alt="" />
        </div>
        <p class="mrg20B">
        <strong>Shane Grace</strong> is a full time <strong>Web/Graphic designer & Illustrator</strong>. I live in <strong>Mumbai, India</strong>. Phasellus vulputate iaculis congue. Donec ultrices, leo in fermentum accumsan, dolor eros condimentum arcu pretium rutrum diam  habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas facilisis blandit ligula dictum et vitae rutrum lorem velit nec ligula. Please take a moment to review selections of my work and feel free to contact me for further information on my background, skills and experience.</p>

        <p><a href="javascript:void(0);" class="btn btn-styled txt16 txt-cap"><i class="icon-download-alt"></i> <strong>Download Resume</strong></a></p>                    
      </article>
		<div id="profileImageModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="aboutModalLabel">Edit Image</h3>
		  </div>
		  <div class="modal-body">
			<div class="row-fluid">
				<div class="span6">
					Current image:
					<span id="profile-img-edit">
					
					</span>
					<button class="btn btn-primary">Upload New Image</button>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
      <!-- Mid Col -->                
    	<article class="span4 offset1 mob-txt-center">
      	<h3 class="tags">My Skills</h3>
		<span class="pull-right"><i role="button" class="icon-edit" data-toggle="modal" data-target="#skillsModal"></i></span>
      	<p class="mrg20B">
        	<strong class="txt16 txt-darkgrey">UX Design</strong><br />
        	Research Plans / Prototypes / User Testing / Interaction Design / Visual Design
        </p>
        <p class="mrg20B">
        	<strong class="txt16 txt-darkgrey">Development</strong><br />
        	XHTML / HTML5 / CSS3 / WordPress Implimentation
        </p>
        <p class="mrg20B">
        	<strong class="txt16 txt-darkgrey">Digital and Printing</strong><br />
        	Logo Design / Illustration / Business Stationery / Interactive ads / Emailer / Microsites
        </p>
        <p class="mrg20B">
        	<strong class="txt16 txt-darkgrey">Team/Project Management</strong><br />
        	Lead Planning / Ability to Multi-Task / Prioritize projects / Implementation project / project Budget and Resource Allocation
        </p>
        <!--  Modal Begin -->
		<div id="skillsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="skillsModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="skillsModalLabel">My Skills</h3>
		  </div>
		  <div class="modal-body">
			<div class="row-fluid">
				<div class="span6">
					<h4>Add a Skill</h4>
					<input type="text" data-list="skill_headings" id="typeaheadSkillHeadings" placeholder="Enter a skill heading.." data-provide="typeahead" class="typeaheadList typeahead" autocomplete="off">
					<input type="text" data-list="skills" id="typeaheadSkills" placeholder="Enter a skill.." data-provide="typeahead" class="typeahead typeaheadList" autocomplete="off">
					<button class="btn btn-primary" id="btnAddSkill">Add</button>
				</div>
				<div class="span4">
					<h4>Existing Skills</h4>
					<div id="listExistingSkills">
						
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Modal End -->
          <!-- My Skills END -->
      	<h3 class="tags">Tools I Use</h3>
        <span class="pull-right"><i role="button" class="icon-edit" data-toggle="modal" data-target="#tiuModal"></i></span>
		<div id="tiuList">
	        <p id="tiuTemplate" style="display: none">
	          <i class="icon-angle-right txt-orange"></i>
	          <strong class="toolName txt-darkgrey">Photoshop</strong>
	          <span class="txt12 toolDesc"> - To design website and mobile site/app</span>
	        </p>
		</div>
        <div id="tiuModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="tiuModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="tiuModalLabel">Tools I Use</h3>
		  </div>
		  <div class="modal-body">
			<div class="row-fluid">
				<div class="span6">
					<h4>Add a Tool</h4>
					<input type="text" id="typeaheadTools" placeholder="Enter a tool.." data-list="tools" data-provide="typeahead" class="typeahead typeaheadList" autocomplete="off">
					<textarea id="toolDescription" rows="3" placeholder="Enter a description..."></textarea>
					<button class="btn btn-primary" id="btnAddTool">Add</button>
				</div>
				<div class="span4">
					<h4>Existing Tools</h4>
					<div id="listExistingTools">
						
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
          <!-- Tools I Use END -->
          
      </article><!-- Left Col -->

    	<article class="span3 mob-txt-center">
      	<h3 class="tags">Experience</h3>
        <span class="pull-right"><i class="icon-edit"></i></span>
        <p class="mrg20B">
        	<strong class="txt-darkgrey txt16">Freelance</strong><br />
            <strong class="txt16">2009- Current</strong><br />
            <span>Currently working from my office in Mumbai, with my colleague.</span>
        </p>
        <p class="mrg20B">
        	<strong class="txt-darkgrey txt16">ABC Tech Pvt. Ltd.</strong><br />
            <strong class="txt16">2007- 2009 | Design Team Manager</strong><br />
            <span>Job description porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.</span>
        </p>
        <p class="mrg20B">
        	<strong class="txt-darkgrey txt16">Attixx Core Pvt. Ltd.</strong><br />
            <strong class="txt16">2004- 2007 | Web Designer</strong><br />
            <span>Job description quia dolor sit porro quisquam est qui consectetur adipisci velit dolorem ipsum amet.</span>
        </p>    
      	<h3 class="tags">Awards</h3>
        <span class="pull-right"><i class="icon-edit"></i></span>
        <p class="mrg20B">
            <span class="txt-orange">Site of the Month (BSCD Site)</span><br />
            <a href="javascript:void(0);">abcexpyr.com</a> - Jun 2012<br />
            <span class="txt12">Peor dolor sit porro quisquam est qui consectetur adipisci velit dolorem ipsum amet.</span>
        </p>
        <p>
            <span class="txt-orange">Best UI Design (RHWA Site)</span><br />
            <a href="javascript:void(0);">opqrswrd.com</a> - Oct 2012<br />
            <span class="txt12">Dolor sit porro quisquam est qui consectetur adipisci velit dolorem ipsum amet.</span>
        </p>
        </article><!-- Right Col -->
      </div><!-- row END -->
    </div><!-- container END -->
  </section><!-- About END -->
	
  <section id="work" class="container-fluid pages">
  	<div class="container">
      <h1 class="pg-title txt-yellow"><span>My Work</span></h1>
      <div class="row">
        <div class="span6">
          <div class="span1 pull-left">
            <i class="icon-camera-retro"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View Photos</h5>
            <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
        <div class="span6 pull-right">
          <div class="span1 pull-left">
            <i class="icon-file-alt"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View My Docs</h5>
            <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
      </div>

      <div class="row">
        <div class="span6">
          <div class="span1 pull-left">
            <i class="icon-lightbulb"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View My Diagrams</h5>
            <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
        <div class="span6 pull-right">
          <div class="span1 pull-left">
            <i class="icon-facetime-video"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View My Video</h5>
            <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
      </div>
    </div>
  </section><!-- work END -->
      
  <section id="contact" class="container-fluid pages">
  	<iframe height="700" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Thane,+Maharashtra,+India&amp;aq=0&amp;oq=thane+m&amp;sspn=38.092988,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Thane,+Maharashtra,+India&amp;t=m&amp;ll=19.233282,72.987928&amp;spn=0.02026,0.008497&amp;z=14&amp;output=embed"></iframe>
  	<div class="container">
      <div id="contactaddress">
        <h1 class="pg-title"><span>Contact</span></h1>
        <p class="txt24 txt-font2 txt-darkgrey mrg20B">Use below details to tell me about your project goals and needs.<br>The best way to reach me is thorugh email: <a href="mailto:contact@bdslorem.com">contact@bdslorem.com</a></p>
        <h4 class="txt-orange">Address & Phone</h4>
        <p class="txt-darkgrey">Kisan Nagar, Wagle Estate, Thane (Mumbai), Maharashtra, India.</p>
        <div class="mrg20B txt16 row">
          <div class="span6 txt-right mob-txt-center"><i class="icon-phone txt-white"></i> <a href="tel:000000000" class="txt-white"><strong>+91 0000 000 000</strong></a></div>
          <div class="span6 txt-left mob-txt-center"><i class="icon-envelope txt-white"></i> <a href="mailto:contact@bdslorem.com" class="txt-white"><strong>contact@bdslorem.com</strong></a></div>
        </div>
        <h4 class="txt-orange">Social</h4>
        <p class="social">
          <a href="javascript:void(0);"><i class="icon-facebook-sign icon-2x txt-darkgrey"></i></a>
          <a href="javascript:void(0);"><i class="icon-twitter-sign icon-2x txt-darkgrey"></i></a>
          <a href="javascript:void(0);"><i class="icon-github icon-2x txt-darkgrey"></i></a>
          <a href="javascript:void(0);"><i class="icon-linkedin-sign icon-2x txt-darkgrey"></i></a>
          <a href="javascript:void(0);"><i class="icon-pinterest icon-2x txt-darkgrey"></i></a>
          <a href="javascript:void(0);"><i class="icon-google-plus-sign icon-2x txt-darkgrey"></i></a>
        </p>
  		</div>
  		<p><a href="javascript: void(0);" id="but_contact_addr" class="txt12">Navigate me through map</a></p>
  	</div>
  </section><!-- contact END -->

  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="js/jquery.quicksand.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.easing.compatibility.js"></script>
  <script>document.createElement('section');var duration=1000,easing='easeInOutExpo';</script>
  <script src="js/script.js"></script>
  <script>
	var sampleData = {
			tiu: { 
				'Photoshop' : 'To design website and mobile site/app',
				'Dreamweaver' : 'Edit HTML/JS',
				'Adobe Illustrator' : 'For vector design',
				'FileZilla' : 'For uploading files on server',
				'TreePad Asia' : 'To manage notes',
				'iPhone' : 'For testing sites/apps on mobile',
				'Producteev.com' : 'To manage projects'
			}
		};
	
	$(function() {
		$.each(sampleData.tiu, function(k,v) {
			var tool = $("#tiuTemplate").clone();
			tool.removeAttr('id').show();
			tool.children('.toolName').text(k);
			tool.children('.toolDesc').text(v)
			
			$("#tiuList").append(tool);	
		})
	})
  </script>
</body>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
</html>