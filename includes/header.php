<?php
$fb = fsez_ext_url(isset($gbl_row["fb_link"]) ? $gbl_row["fb_link"] : "");
$tw = fsez_ext_url(isset($gbl_row["tw_link"]) ? $gbl_row["tw_link"] : "");
?>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="css/gigw.css?v=38" rel="stylesheet">
<a class="skip-link" href="#main-content">Skip to main content</a>
<header id="header" class="header-style-three" role="banner">
   <div class="gigw-welcome">
      <div class="container">
         <p>Welcome to Falta Special Economic Zone</p>
         <ul>
            <?php if ($fb) { ?>
            <li><a href="<?php echo htmlspecialchars($fb); ?>" rel="noopener noreferrer" target="_blank" title="Facebook, opens in a new window"><i class="fa fa-facebook" aria-hidden="true"></i><span class="sr-only"> Facebook</span></a></li>
            <?php } ?>
            <?php if ($tw) { ?>
            <li><a href="<?php echo htmlspecialchars($tw); ?>" rel="noopener noreferrer" target="_blank" title="X / Twitter, opens in a new window"><i class="fa fa-twitter" aria-hidden="true"></i><span class="sr-only"> Twitter</span></a></li>
            <?php } ?>
            <li><a href="https://www.india.gov.in/" target="_blank" rel="noopener noreferrer" title="National Portal of India, opens in a new window">india.gov.in</a></li>
         </ul>
      </div>
   </div>
   <div class="gigw-utility">
      <div class="container">
         <ul class="gigw-utility-left">
            <li class="gigw-goi notranslate"><span>Government of India</span> <span aria-hidden="true">|</span> <span lang="hi">भारत सरकार</span></li>
            <li><a href="#main-content">Skip to main content</a></li>
            <li><a href="screen-reader.php">Screen Reader Access</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="feedback.php">Feedback</a></li>
         </ul>
         <ul class="gigw-utility-right">
            <li class="gigw-font-group notranslate" role="group" aria-label="Change text size">
               <button type="button" class="gigw-a-minus" data-gigw-font="decrease" aria-label="Decrease text size">A-</button>
               <button type="button" data-gigw-font="normal" aria-label="Reset text size">A</button>
               <button type="button" class="gigw-a-plus" data-gigw-font="increase" aria-label="Increase text size">A+</button>
            </li>
            <li>
               <button type="button" id="gigw-contrast" aria-pressed="false">High Contrast</button>
            </li>
            <li class="gigw-lang notranslate">
               <label for="gigw-lang">Select Language</label>
               <select id="gigw-lang" aria-label="Select Language">
                  <option value="en">English</option>
                  <option value="hi">हिन्दी</option>
                  <option value="bn">বাংলা</option>
               </select>
               <span id="gigw-lang-status" aria-live="polite"></span>
            </li>
         </ul>
      </div>
   </div>
   <div class="gigw-tricolor" aria-hidden="true"><span class="saffron"></span><span class="white"></span><span class="green"></span></div>
   <div class="topbar">
      <div class="lower-topbar">
         <div class="container">
            <div class="gigw-identity">
               <div class="gigw-brand">
                  <a href="index.php">
                     <img class="emblem" src="images/emblem-dark.png" alt="Emblem of India">
                  </a>
                  <div class="gigw-brand-text notranslate">
                     <a href="index.php">
                        <p class="org-line notranslate"><span>Government of India</span> <span aria-hidden="true">|</span> <span lang="hi">भारत सरकार</span></p>
                        <p class="site-title">Falta Special Economic Zone</p>
                        <span class="office-line">Office of the Development Commissioner</span>
                        <span class="ministry">Ministry of Commerce &amp; Industry | Department of Commerce</span>
                        <span class="jurisdiction">West Bengal, Sikkim and Andaman &amp; Nicobar Islands</span>
                     </a>
                  </div>
               </div>
               <div class="gigw-identity-aside">
                  <a href="https://wcd.nic.in/bbbp-schemes" rel="noopener noreferrer" target="_blank" title="Beti Bachao Beti Padhao, opens in a new window">
                     <img src="images/bbbp_logo.jpg" alt="Beti Bachao Beti Padhao">
                  </a>
                  <a href="index.php">
                     <img src="images/falta_logo.jpeg" alt="Falta Special Economic Zone logo">
                  </a>
                  <form class="gigw-search" action="search.php" method="get" role="search">
                     <label for="gigw-q">Search this website</label>
                     <input id="gigw-q" type="search" name="q" placeholder="Search" required>
                     <button type="submit">Search</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <nav class="navigation navbar navbar-default" id="main-navigation" aria-label="Main menu">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="open-btn" aria-controls="navbar" aria-expanded="false" aria-label="Open menu">
               <span><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
         </div>
         <div id="navbar" class="collapse navbar-collapse">
            <button class="close-navbar" type="button" aria-label="Close menu"><i class="fa fa-close" aria-hidden="true"></i></button>
            <ul class="nav navbar-nav">
               <li class="current"><a href="index.php" aria-label="Home"><i class="fa fa-home" aria-hidden="true"></i><span class="sr-only"> Home</span></a></li>
               <li class="sub-menu">
                  <a href="fsez-at-a-glance.php" aria-haspopup="true" aria-expanded="false">About</a>
                  <ul>
                     <li><a href="fsez-at-a-glance.php">FSEZ at a Glance</a></li>
                     <li><a href="jurisdiction.php">Jurisdiction</a></li>
                     <li><a href="past-performance.php">Performance</a></li>
                     <li><a href="acheivements.php">Achievements</a></li>
                     <li><a href="organisation-structure.php">Organisational Structure</a></li>
                     <li><a href="how-to-reach.php">How to Reach Falta SEZ</a></li>
                     <li><a href="how-to-setup.php">How To Setup a SEZ</a></li>
                     <li><a href="procedure-to-set-up-a-unit.php">How to Setup a Unit in SEZ</a></li>
                     <li><a href="repo/List_of_units_with_valid_LOA_at_Falta_SEZ.pdf" target="_blank" rel="noopener noreferrer" title="PDF document, opens in a new window">List of Units under FSEZ</a></li>
                     <li><a href="repo/List_of_EOUs.pdf" target="_blank" rel="noopener noreferrer" title="PDF document, opens in a new window">List of EOUs under FSEZ</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="falta-sez-authority.php" aria-haspopup="true" aria-expanded="false">Authority</a>
                  <ul>
                     <li><a href="falta-sez-authority.php">Constitution</a></li>
                     <li><a href="infra.php">Infrastructure</a></li>
                     <li><a href="repo/tariff.pdf" rel="noopener noreferrer" target="_blank" title="PDF document, opens in a new window">Tariff</a></li>
                     <li class="sub-sub-menu">
                        <a href="authority-meeting-agenda.php" aria-haspopup="true">Authority Meeting</a>
                        <ul>
                           <li><a href="authority-meeting-agenda.php">Authority Meeting Agenda</a></li>
                           <li><a href="authority-meeting-minutes.php">Authority Meeting Minutes</a></li>
                        </ul>
                     </li>
                     <li><a href="unit-rent-receipt.php">Unit Rent Status</a></li>
                     <li><a href="annual-report.php">Annual Report</a></li>
                     <li><a href="repo/Draft Lease Deed.doc">Sample Lease Agreement</a></li>
                     <li><a href="electricity-duty-exemption.php">Electricity Duty Exemption</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="uac-meeting-agenda.php" aria-haspopup="true" aria-expanded="false">UAC</a>
                  <ul>
                     <li class="sub-sub-menu">
                        <a href="uac-meeting-agenda.php">SEZ Meeting</a>
                        <ul>
                           <li><a href="uac-meeting-agenda.php">UAC Meeting Agenda</a></li>
                           <li><a href="uac-meeting-minutes.php">UAC Meeting Minutes</a></li>
                        </ul>
                     </li>
                     <li class="sub-sub-menu">
                        <a href="eou-meeting-agenda.php">EOU Meeting</a>
                        <ul>
                           <li><a href="eou-meeting-agenda.php">EOU Meeting Agenda</a></li>
                           <li><a href="eou-meeting-minutes.php">EOU Meeting Minutes</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="doc-instructions.php" aria-haspopup="true" aria-expanded="false">DOC</a>
                  <ul>
                     <li class="sub-sub-menu">
                        <a href="boa-meeting-agenda.php">BOA</a>
                        <ul>
                           <li><a href="boa-meeting-agenda.php">BOA Meeting Agenda</a></li>
                           <li><a href="boa-meeting-minutes.php">BOA Meeting Minutes</a></li>
                        </ul>
                     </li>
                     <li><a href="doc-instructions.php">Instructions</a></li>
                     <li><a href="sez-rules-and-amendments.php">Rules and Amendments</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="other-policies.php" aria-haspopup="true" aria-expanded="false">Other Info</a>
                  <ul>
                     <li><a href="other-sez.php">Other SEZs</a></li>
                     <li><a href="other-policies.php">Other Links &amp; Policies</a></li>
                     <li><a href="other-links.php">Other Links</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="sez-forms.php" aria-haspopup="true" aria-expanded="false">Forms</a>
                  <ul>
                     <li><a href="sez-forms.php">SEZ Forms</a></li>
                     <li><a href="eou-forms.php">EOU Forms</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="other-links.php" aria-haspopup="true" aria-expanded="false">Quick Links</a>
                  <ul>
                     <li><a href="sez-rules-and-acts.php">SEZ Rules &amp; Acts</a></li>
                     <li><a href="circulars-and-policies.php">Circulars &amp; Policies</a></li>
                     <li><a href="tenders.php">Tenders</a></li>
                     <li><a href="vacancy.php">Vacancies</a></li>
                     <li><a href="public-grievance.php">CPGRAMS</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="photo-gallery-mod.php" aria-haspopup="true" aria-expanded="false">Media</a>
                  <ul>
                     <li><a href="interview.php">Interview</a></li>
                     <li><a href="photo-gallery-mod.php">Photo Gallery</a></li>
                     <li><a href="video-galley.php">Video Gallery</a></li>
                  </ul>
               </li>
               <li><a href="public-notice.php">Public Notice</a></li>
               <li class="sub-menu">
                  <a href="right-to-information.php" aria-haspopup="true" aria-expanded="false">RTI</a>
                  <ul>
                     <li><a href="right-to-information.php">Point of Contact</a></li>
                     <li><a href="rti-transparency-audit.php">Transparency Audit</a></li>
                  </ul>
               </li>
               <li><a href="contact.php">Contact</a></li>
            </ul>
         </div>
      </div>
   </nav>
</header>
<main id="main-content" tabindex="-1">
