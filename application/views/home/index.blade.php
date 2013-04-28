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
              <a class="dropdown-toggle " data-toggle="dropdown">GREGORY THOMAS <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">View</a></li>
                <li><a href="#" data-toggle="modal" role="button" data-target="#editModal">Edit</a></li>
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
  		<div id="editModal" class="modal hide" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" data-backdrop="static">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="editModalLabel">Edit Background</h3>
		  </div>
		  <div class="modal-body">
			  <a href="#" class="bgImage">
			  	<img src="/img/smpier.jpg">
			  </a>
			  <a href="#" class="bgImage">
			  	<img src="/img/golf.jpg">
			  </a>
			  <a href="#" class="bgImage">
			  	<img src="/img/test.jpg">
			  </a>
			  <a href="#" class="bgImage">
			  	<img src="/img/fog.jpg">
			  </a>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
		</div>
  <section id="home" class="container-fluid pages">
    <div class="dots">
      <div class="container">
        <img id="logo" src="img/logo.png"> 
     	  <div class="row pos-relative hgt700"><!-- We need fix height for this <div> because we have image in absolute position. -->
        	<div class="span8">
  		      <h1 class="txt-white mrg50T pdg50T mrg40B mob-txt-center">
            Hi <span class="txt-yellow" contenteditable>I'm Greg</span>,<br /><span contenteditable id="rightTip">I am an Engineer at UCLA<br /> from Los Angeles</span>
            </h1>
            <p class="txt-white txt-font2 txt24 mrg20T mob-txt-center" contenteditable>I don't think outside of the box;<br />I think of what I can do with the box.</p>
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
        <p class="mrg20B" contenteditable>
        <strong>Greg Thomas</strong> is a full time <strong>Engineer</strong>. I live in <strong>Los Angeles, CA</strong>. Phasellus vulputate iaculis congue. Donec ultrices, leo in fermentum accumsan, dolor eros condimentum arcu pretium rutrum diam  habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas facilisis blandit ligula dictum et vitae rutrum lorem velit nec ligula. Please take a moment to review selections of my work and feel free to contact me for further information on my background, skills and experience.
        </p>

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
		<span class="pull-right">
			<i role="button" class="icon-plus-sign" data-toggle="modal" data-target="#skillsModal"></i>
		</span>
		<ul id="skillItemList">
			<li class="skillItem">
				<p class="mrg20B">
			        <strong class="txt16 txt-darkgrey" contenteditable>UX Design</strong><br />
			        <span contenteditable>Research Plans / Prototypes / User Testing / Interaction Design / Visual Design</span>
		      		<i class="pull-right icon-remove-sign skillItemRemove"></i>
		        </p>			
			</li>
			<li class="skillItem">
        		<p class="mrg20B">
	        		<strong class="txt16 txt-darkgrey">Development</strong><br />
	        		XHTML / HTML5 / CSS3 / WordPress Implementation
	        		<i class="pull-right icon-remove-sign skillItemRemove"></i>
        		</p>
			</li>
			<li class="skillItem">
		        <p class="mrg20B">
		        	<strong class="txt16 txt-darkgrey">Digital and Printing</strong><br />
		        	Logo Design / Illustration / Business Stationery / Interactive ads / Emailer / Microsites
		        	<i class="pull-right icon-remove-sign skillItemRemove"></i>
		        </p>
			</li>
			<li class="skillItem">
		        <p class="mrg20B">
		        	<strong class="txt16 txt-darkgrey">Team/Project Management</strong><br />
		        	Lead Planning / Ability to Multi-Task / Prioritize projects / Implementation project / project Budget and Resource Allocation
		        	<i class="pull-right icon-remove-sign skillItemRemove"></i>
		        </p>
			</li>
			<li class="skillItem" id="skillItemTemplate">
				<p class="mrg20B">
	    	    	<strong class="txt16 txt-darkgrey skillItemHeading" contenteditable></strong><br />
	        		<span contenteditable class="skillItemSkills"></span>
      				<i class="pull-right icon-remove-sign skillItemRemove"></i>
        		</p>
			</li>
		</ul>
        <!--  Modal Begin -->
		<div id="skillsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="skillsModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="skillsModalLabel">My Skills</h3>
		  </div>
		  <div class="modal-body">
			<div class="row-fluid">
				<div class="span6">
					<h4>Enter Heading</h4>
					<input type="text" data-list="skill_headings" id="typeaheadSkillHeadings" placeholder="Enter a skill heading.." data-provide="typeahead" class="typeaheadList typeahead" autocomplete="off">
				</div>
				<div class="span4">
					<h4>Skills</h4>
					<input type="text" data-list="skills" id="typeaheadSkills" placeholder="Enter a skill.." data-provide="typeahead" class="typeahead typeaheadList" autocomplete="off">
					<button class="btn btn-primary" id="btnAddSkill">Add</button>
					<div id="listExistingSkills">
						
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary" id="skillsSave">Save changes</button>
		  </div>
		</div>
		<!-- Modal End -->
          <!-- My Skills END -->
      	<h3 class="tags">Tools I Use</h3>
        <span class="pull-right"><i role="button" class="icon-edit" data-toggle="modal" data-target="#tiuModal"></i></span>
	        <p id="tiuTemplate" style="display: none">
	          <i class="icon-angle-right txt-orange"></i>
	          <strong class="toolName txt-darkgrey">Photoshop</strong>
	          <span class="txt12 toolDesc"> - To design website and mobile site/app</span>
	        </p>
        <div id="tiuList">
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
				<div class="span6">
					<h4>Existing Tools</h4>
					<div id="listItemTemplate" class="listItemTool" style="display: none">
						<span class="toolName"></span>
						<span class="toolDescription"></span>
					</div>
					<div id="listExistingTools">
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary" id="btnToolsSave">Save changes</button>
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
    <div id="myWorkModal" class="modal hide fade" tabindex="-1" aria-labelledby="myWorkLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myWorkLabel">Add Work</h3>
		  </div>
		  <div class="modal-body">
			  <div class="row-fluid">
			  	<div class="span2 fileTypes">
				  	<span class="fileType show">
				  		<i class="icon-camera-retro"></i>
				  	</span>
				  	<span class="fileType hide">
				  		<i class="icon-camera-retro"></i>
				  	</span>
				  	<span class="fileType hide">
				  		<i class="icon-camera-retro"></i>
				  	</span>
				  	<span class="fileType hide">
				  		<i class="icon-camera-retro"></i>
				  	</span>
			  	</div>
			  </div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
		</div>
  	<div class="container">
      <h1 class="pg-title txt-yellow"><span>My Work</span> <i class="icon-plus-sign" id="addMyWork" class="pull-right"></i></h1>
      <div class="row">
        <div class="span6">
          <div class="span1 pull-left">
            <i class="icon-camera-retro"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View Photos</h5>
            <p contenteditable>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
        <div class="span6 pull-right">
          <div class="span1 pull-left">
            <i class="icon-file-alt"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View My Docs</h5>
            <p contenteditable>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
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
            <p contenteditable>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
        <div class="span6 pull-right">
          <div class="span1 pull-left">
            <i class="icon-facetime-video"></i>
          </div>
          <span class="span5 work-description pull-right">
            <h5>View My Video</h5>
            <p contenteditable>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </span>
        </div>
      </div>
    </div>
  </section><!-- work END -->
      
  <section id="contact" class="container-fluid pages">
  	<iframe height="700" src="http://maps.google.com/?ie=UTF8&amp;ll=34.068872,-118.44429&amp;spn=0.021721,0.04519&amp;t=m&amp;z=15&amp;output=embed"></iframe>
  	<div class="container">
      <div id="contactaddress">
        <h1 class="pg-title"><span>Contact</span></h1>
        <p class="txt24 txt-font2 txt-darkgrey mrg20B" contenteditable>Use below details to tell me about your project goals and needs.<br>The best way to reach me is thorugh email: <a href="mailto:contact@bdslorem.com">me@gregthomas.com</a></p>
        <h4 class="txt-orange">Address & Phone</h4>
        <p class="txt-darkgrey">Gregory Thomas, 123 A St, Los Angeles, CA</p>
        <div class="mrg20B txt16 row">
          <div class="span6 txt-right mob-txt-center"><i class="icon-phone txt-white"></i> <a href="tel:000000000" class="txt-white"><strong>(310) 555-1212</strong></a></div>
          <div class="span6 txt-left mob-txt-center"><i class="icon-envelope txt-white"></i> <a href="mailto:me@gregthomas.com" class="txt-white"><strong>me@gregthomas.com</strong></a></div>
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
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="js/jquery.quicksand.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.easing.compatibility.js"></script>
  <script>document.createElement('section');var duration=1000,easing='easeInOutExpo';</script>
  <script src="js/script.js"></script>
  <script>
    var newData = {
		tiu: {},
		skills: []
    };
    
	var sampleData = {
			header: {
				name: "Hi, I'm Greg",
				tagLine1: "I'm an engineer at UCLA",
				tagLine2: "from Los Angeles",
				smTagLine1: "I don't think outside of the box;",
				smTagLine2: "I think of what I can do with the box"
			},
			tiu: { 
				'Photoshop' : 'To design website and mobile site/app',
				'Dreamweaver' : 'Edit HTML/JS',
				'Adobe Illustrator' : 'For vector design',
				'FileZilla' : 'For uploading files on server',
				'TreePad Asia' : 'To manage notes',
				'iPhone' : 'For testing sites/apps on mobile',
				'Producteev.com' : 'To manage projects'
			},
			
		};
  </script>
</body>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
</html>