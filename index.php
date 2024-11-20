<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet" href="css/clg.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica:ital,wght@0,400..700;1,400..700&display=swap&family=Dancing+Script&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nova+Square&family=EB+Garamond&family=PT+Mono&family=Poppins:wght@300&family=Quicksand:wght@500&family=Roboto:ital,wght@1,300&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap&family=IM+Fell+DW+Pica:ital@0;1&family=Parisienne&display=swap&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>ByteQuest2024</title>
    <script>
        function toggleMenu() {
            const menu = document.querySelector(".menu-links");
            const icon = document.querySelector(".hamburger-icon");
            menu.classList.toggle("open");
            icon.classList.toggle("open");
            }
        </script>
</head>
<body>
    <section id="home">
    <nav id="desktop-nav">
        <div class="logo">
            <img src="images/acharyab.png" alt="logo"  id="logojoe" height="70">
            <div id="span2"></div>
            <img src="images/infinite.png" alt="logo"  height="70">
        </div>
    <div>
        <ul class="nav-links">
            <li style="padding: 0.2em;"><a href="#about">About</a></li>
            <li style="padding: 0.2em;"><a href="#event">Events</a></li>
            <!-- <li style="padding: 0.2em;"><a href="#speakers">Speakers</a></li> -->
            <li style="padding: 0.2em;"><a href="#contact">Contact</a></li>
            <li style="padding: 0.2em;"><a onclick="downloadPDF()">Brochure</a></li>
            <li><a href="register.php"><button class="joereg">Register</button></a></li>
        </ul>
    </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">
            <img src="images/acharyab.png" alt="logo" id="latestimg" width="55" height="60">
            <div id="span2"></div>
            <img src="images/infinite.png" alt="logo" id="latestimg"  height="60">
        </div>
        <div class="hamburger-menu">
          <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu-links">
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#event" onclick="toggleMenu()">Events</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
            <li><a onclick="toggleMenu();downloadPDF();">Brochure</a></li>
            <li><a href="register.php" onclick="toggleMenu()">Register</a></li>
          </div>
        </div>
      </nav>
    <img src="images/pex1.jpg" alt="" class="back">

<div class="joemain">
<div class="logo1">
    <!-- <img src="acharyaw.png" alt="logo" class="logo" height="140"> -->
    <h1 id="clg">ACHARYA &nbsp INSTITUTE &nbsp OF &nbsp GRADUATE &nbsp STUDIES</h1>
    <h1 id="clg">Department &nbsp Of &nbsp MCA</h1>
</div>
<div id="prejoe"><h1 class="prejoe">presents</h1></div>
<div id="textdiv">
    <h1 class="textall">
        <span id="textb">B</span>
        <span id="texty">y</span>
        <span id="textt">t</span>
        <span id="texte">e</span>
        <span id="textq">q</span>
        <span id="textu">u</span>
        <span id="texte2">e</span>
        <span id="texts">s</span>
        <span id="textt2">t</span>
    </h1>
</div>
<h1 id="date">2 &nbsp 0 &nbsp  2 &nbsp  4</h1>
<div id="newdate">
  <span class="material-symbols-outlined" id="scle">
    calendar_month
    </span>
    <p id="textdatejoe">16/may/2024</p>
</div>


</div>
    <!-- <div id="mainline">
    <div id="lines"></div>
    <div id="lines2"></div>
    <div id="lines4"></div>
    <div id="lines3"></div>
    </div> -->
</section>
<section id="about">
    <div id="aboutback">
    <h1 id="textab">About</h1>
    <img src="images/about2.jpg" alt="noimg" id="aboutimg">
  </div>
    <div class="joeab">
    <h1 id="textab1">About</h1>
    <img src="images/ps5.svg" alt="" class="svgimg" height="120">
    <p class="newp">ByteQuest 2024, organized by the Department of Master of Computer Applications (MCA) at Acharya Institute of Graduate Studies (AIGS), is an inter-collegiate IT fest aimed at enhancing awareness about the latest trends and opportunities in the IT sector, It fosters networking among participants and celebrates the passion, achievements, and community spirit within the IT field.</p>
    </div>
</section>
<section id="event">
<div class="jio">  
  <h1 class="joevent">Events</h1>
  <p class="tap">Hover over the card for more info</p>
  <p class="tap2">Tap on the card for more info</p>
  <div class="box-container">
	<div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/bitbybit.svg" alt="bitbybit" id="bitbybit" height="120">
          <div id="solo">
          <h3 class="flip-box-header">Bit By Bit</h3>
          <p id="psolo">(Solo)</p>
          </div>
          <p>Short Presentation</p>
          <p>Registration : ₹200/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Bit By Bit</h3>
          <p id="para">• 15-minute presentation on a trending IT topic provided on spot.</p>
          <p id="para">• Engage the audience with informative content within the time limit.</p>
          <p id="para">• Judging is based on content quality, delivery, and audience engagement.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/code.svg" alt="bitbybit" id="bitbybit" height="120">
          <div id="solo">
            <h3 class="flip-box-header">Code Fusion</h3>
            <p id="psolo">(Duo)</p>
            </div>
          <p>Coding</p>
          <p>Registration : ₹200/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Code Fusion</h3>
          <p id="para">• The participant teams create software solutions for a given problem within 2-3 hours.</p>
          <p id="para">• Judged on creativity, technical execution, user experience, and future potential.</p>
          
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/gaming.svg" alt="bitbybit" id="bitbybit" height="100">
          <div id="solo">
            <h3 class="flip-box-header">Pixel Battle</h3>
            <p id="psolo">(Quad)</p>
            </div>
          <p>Gaming</p>
          <p>Registration : ₹500/-</p>
        <div id="wholemedal">
          <div id="allmedal1">
          <img src="images/cash.png" alt="goldmedal" class="medal2">
          <p style="padding: 0px;margin: 0px;">Exciting Cash Prizes!!</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Pixel Battle</h3>
          <p id="para">• Team-based gaming tournament featuring titles like BGMI.</p>
          <p id="para">• Tournament format and rules will be announced prior to the event.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/debate.svg" alt="bitbybit" id="bitbybit" height="100">
          <div id="solo">
            <h3 class="flip-box-header">Tech Titans</h3>
            <p id="psolo">(Quad)</p>
            </div>
          <p>Debate</p>
          <p>Registration : ₹200/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Tech Titans</h3>
          <p id="para">• The participant teams debate a technology related topic, presenting arguments and rebuttals.</p>
          <p id="para">• Judged on logical reasoning, evidence, and communication. </p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div> 
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/video.svg" alt="bitbybit" id="bitbybit" height="110">
          <div id="solo">
            <h3 class="flip-box-header">Lenses & Lines</h3>
            <p id="psolo">(Solo)</p>
            </div>
          <p>Videography</p>
          <p>Registration : ₹200/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Lenses & Lines</h3>
          <p id="para">• Create a 2-minute original video on a given theme using any gadgets for editing.</p>
          <p id="para">• No pre-recorded or copyrighted material allowed.</p>
          <p id="para">• Judged on creativity, relevance, and content.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/quiz.svg" alt="bitbybit" id="bitbybit" height="120">
          <div id="solo">
            <h3 class="flip-box-header">Quizbytes</h3>
            <p id="psolo">(Duo)</p>
            </div>
          <p>Quiz</p>
          <p>Registration : ₹200/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Quizbytes</h3>
          <p id="para">• Team-based quiz on programming and general technology.</p>
          <p id="para">• Multiple difficulty levels.</p>
          <p id="para">• Highest score wins.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/design.svg" alt="bitbybit" id="bitbybit" height="120">
          <div id="solo">
            <h3 class="flip-box-header">Artbits</h3>
            <p id="psolo">(Solo)</p>
            </div>
          <p>Poster Designing</p>
          <p>Registration : ₹100/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Artbits</h3>
          <p id="para">• Create original digital posters on a technology theme using graphic design tools.</p>
          <p id="para">• Posters will be judged on creativity, visual impact, and adherence to the theme.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/paper2.svg" alt="bitbybit" id="bitbybit" height="120">
          <div id="solo">
            <h3 class="flip-box-header">Idea Ignite</h3>
            <p id="psolo">(Quad)</p>
            </div>
          <p>Idea Presentation</p>
          <p>Registration : ₹500/-</p>
        <div id="wholemedal">
          <div id="allmedal">
          <img src="images/gold.png" alt="goldmedal" class="medal">
          <p style="padding: 0px;margin: 0px;">₹1000/-</p>
          </div>
          <div id="allmedal">
            <img src="images/silver.png" alt="goldmedal" class="medal">
            <p style="padding: 0px;margin: 0px;">₹500/-</p>
          </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Idea Ignite</h3>
          <p id="para">• Pitch innovative tech solutions to real-world problems.</p>
          <p id="para">• Ideas will be judged on originality, feasibility, and potential impact.</p>
          <p id="para">• The best ideas will be selected for further development, incubation, or research paper.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
	<div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center">
        <div class="inner color-white">
          <img src="images/escape2.svg" alt="bitbybit" id="bitbybit" height="120">
          <div id="solo">
            <h3 class="flip-box-header">Cipher Escape</h3>
            <p id="psolo">(Quad)</p>
            </div>
          <p>Escape Room</p>
          <p>Registration : ₹500/-</p>
        <div id="wholemedal">
          <div id="allmedal1">
            <img src="images/cash.png" alt="goldmedal" class="medal2">
            <p style="padding: 0px;margin: 0px;">Exciting Cash Prizes!!</p>
            </div>
        </div>
          </div>
      </div>
      <div class="flip-box-back text-center">
        <div class="inner color-white">
          <h3 class="flip-box-header2">Cipher Escape</h3>
          <p id="para">• Pairs solve technology-themed puzzles and challenges within a virtual room to "escape".</p>
          <p id="para">• Fastest team wins.</p>
          <p id="para">• Challenges include cryptography, coding, and logical reasoning.</p>
          <button class="cssbuttons-io" onclick="window.location.href='register.php'">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
              Register</span>
          </button>
        </div>
      </div>
    </div>
	</div>
  <div id="brochure">
  <p class="tap3">Checkout the brochure for more details</p>

  <button class="download-button" onclick="downloadPDF()">
  <div class="docs"><svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="20" width="20" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line y2="13" x2="8" y1="13" x1="16"></line><line y2="17" x2="8" y1="17" x1="16"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Download Brochure</div>
  <div class="download">
    <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="24" width="24" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line y2="3" x2="12" y1="15" x1="12"></line></svg>
  </div>
</button>

<a href="timing.php" class="tap3" id="deep" > <img src="images/time.png" alt="goldmedal" height="30"> Track Events</a>
</div>
</section>

<!-- <section id="speakers">
<div class="jio">
  <h1 class="joevent1">Speakers</h1>
</div>
</section> -->
<section id="contact">
<div class="jio">
  <h1 class="joevent2">Contact</h1>
  <div class="whole">
    <div class="teacher">
      <h1 id="under">Faculty Coordinators</h1>
      <div id="nameall">
        <div id="name">
        <div><span class="material-symbols-outlined">
          person
          </span></div>
        <h1>Faculty Name</h1>
      </div>
        <div id="phone">
          <div><span class="material-symbols-outlined">
            call
            </span></div>
        <h1><a href="tel:9999999999" id="phoneno">9999999999</a></h1>
        <button onclick="copyf()" id="copybut"><span class="material-symbols-outlined" id="copy">
          content_copy
          </span>
          <span class="material-symbols-outlined" id="copytick">
            check
          </span>
        </button>
      </div>
      </div>
      <div id="nameall">
        <div id="name" style="margin-top: 1em;">
        <div><span class="material-symbols-outlined">
          person
          </span></div>
        <h1>Faculty Name</h1>
      </div>
        <div id="phone">
          <div><span class="material-symbols-outlined">
            call
            </span></div>
        <h1><a href="tel:9999999999" id="phoneno">9999999999</a></h1>
        <button onclick="copyd()" id="copybut"><span class="material-symbols-outlined" id="copyd">
          content_copy
          </span>
          <span class="material-symbols-outlined" id="copytickd">
            check
          </span>
        </button>
      </div>
      </div>


    </div>
    <div class="teacher">
      <h1 id="under">Student Coordinators</h1>
      <div id="nameall">
        <div id="name">
        <div><span class="material-symbols-outlined">
          person
          </span></div>
        <h1>Student Name</h1>
      </div>
        <div id="phone">
          <div><span class="material-symbols-outlined">
            call
            </span></div>
        <h1><a href="tel:9999999999" id="phoneno">9999999999</a></h1>
        <button onclick="copyg()" id="copybut"><span class="material-symbols-outlined" id="copyg">
          content_copy
          </span>
          <span class="material-symbols-outlined" id="copytickg">
            check
          </span>
        </button>
      </div>
      </div>
      <div id="nameall">
        <div id="name" style="margin-top: 1em;">
        <div><span class="material-symbols-outlined">
          person
          </span></div>
        <h1>Student Name</h1>
      </div>
        <div id="phone">
          <div><span class="material-symbols-outlined">
            call
            </span></div>
        <h1><a href="tel:9999999999" id="phoneno">9999999999</a></h1>
        <button onclick="copyv()" id="copybut"><span class="material-symbols-outlined" id="copyv">
          content_copy
          </span>
          <span class="material-symbols-outlined" id="copytickv">
            check
          </span>
        </button>
      </div>
      </div>


    </div>
    </div>
  </div>
</section>

<section id="last">
  <div id="wholelast">
    <div id="semiwhole">
      <img src="images/acharyaw.png" alt="logo"  height="70">
      <h1 id="clg1">ACHARYA &nbsp INSTITUTE &nbsp OF &nbsp GRADUATE &nbsp STUDIES</h1>
      <p id="clg2">Acharya Dr. S. Radhakrishnan Road <br> Acharya P.O Soladevanahalli <br> Bangalore-560107 <br> Karnataka, India</p>
      <div id="iconall">
        <a href="https://maps.app.goo.gl/vwiRcx3GnxeTX8zz6" target="_blank"><img src="images/map.png" alt="map" id="mapp"></a>
        <a href="https://www.instagram.com/acharyainstitutes?igsh=MWVtY2s4MDk1dXEzNw==" target="_blank"><img src="images/instagram2.png" alt="map" id="mapp2"></a>
      </div>
    </div>
  </div>
</section>


<script>
        function downloadPDF() {
            var pdfURL = 'brochure.pdf';
            var a = document.createElement('a');
            a.href = pdfURL;
            a.download = 'Acharya_ByteQuest_2024_Brochure.pdf';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
</script>


<script>
  function copyf(){
    navigator.clipboard.writeText("9999999999");
    document.getElementById('copytick').style.display = "block";
    document.getElementById('copy').style.display = "none";
    setTimeout(()=>{
      document.getElementById('copy').style.display = "block";
      document.getElementById('copytick').style.display = "none";
    } ,2000);
  }
  function copyd(){
    navigator.clipboard.writeText("9999999999");
    document.getElementById('copytickd').style.display = "block";
    document.getElementById('copyd').style.display = "none";
    setTimeout(()=>{
      document.getElementById('copyd').style.display = "block";
      document.getElementById('copytickd').style.display = "none";
    } ,2000);
  }
  function copyv(){
    navigator.clipboard.writeText("9999999999");
    document.getElementById('copytickv').style.display = "block";
    document.getElementById('copyv').style.display = "none";
    setTimeout(()=>{
      document.getElementById('copyv').style.display = "block";
      document.getElementById('copytickv').style.display = "none";
    } ,2000);
  }
  function copyg(){
    navigator.clipboard.writeText("9999999999");
    document.getElementById('copytickg').style.display = "block";
    document.getElementById('copyg').style.display = "none";
    setTimeout(()=>{
      document.getElementById('copyg').style.display = "block";
      document.getElementById('copytickg').style.display = "none";
    } ,2000);
  }
</script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
  
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

<script>
    var navbar = document.getElementById('desktop-nav');
    var prevScrollPos = window.pageYOffset;
  var timer;

  function hideNavbar() {
    navbar.style.top = '-100px'; // Move navbar out of view
  }

  function showNavbar() {
    navbar.style.top = '0'; // Bring navbar back into view
    resetTimer();
  }

  function resetTimer() {
    clearTimeout(timer);
    timer = setTimeout(hideNavbar, 3000); // Adjust the timeout (in milliseconds) as needed
  }

  // Event listener to reset timer and show navbar while scrolling
  window.addEventListener('scroll', function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos || currentScrollPos === 0) {
      if (currentScrollPos === 0) {
        showNavbarAtTop(); // Call function to show navbar when at the top
      } else {
        showNavbar();
      }
    } else {
      resetTimer(); // Reset timer to keep navbar visible while scrolling down
    }
    prevScrollPos = currentScrollPos;
  });

  window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;

    if (scrollPosition > 100 && scrollPosition !== 0) { // Change 100 to the scroll position where you want the navbar to appear
      navbar.classList.add('nav-scroll'); // Apply class with background color
    } else {
      navbar.classList.remove('nav-scroll'); // Remove class to revert to initial background color
    }
  });

  // Function to show navbar when at the top
  function showNavbarAtTop() {
    navbar.style.top = '0';
    clearTimeout(timer);
  }
</script>


  <!-- <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
  
        const target = document.querySelector(this.getAttribute('href'));
  
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  </script> -->
  <script>
    window.addEventListener('scroll', function() {
      var navbar = document.getElementById('desktop-nav');
      var scrollPosition = window.scrollY;
  
      // Change navbar background color based on scroll position
      if (scrollPosition > 100) { // Change 100 to the scroll position where you want the color to change
        navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.2)'; // Apply background color with opacity
        navbar.style.height = '12vh';
      } else {
        navbar.style.backgroundColor = 'transparent'; // Revert to transparent background
        navbar.style.height = '15vh';
    }
    });
  </script>
<script>
  var d = document.getElementById("prejoe");
    setTimeout(()=>{
    d.style.opacity = "1";
    } ,1000);
    var x = document.getElementById("textdiv");
    setTimeout(()=>{
    x.style.display = "block";
    } ,2500);
    var y = document.getElementById("texty");
    setTimeout(()=>{
    y.style.display = "block";
    } ,3400);
    var z = document.getElementById("textt");
    setTimeout(()=>{
    z.style.display = "block";
    } ,4300);
    var a = document.getElementById("texte");
    setTimeout(()=>{
    a.style.display = "block";
    } ,5100);
    var b = document.getElementById("textq");
    setTimeout(()=>{
    b.style.display = "block";
    } ,6100);
    var c = document.getElementById("textu");
    setTimeout(()=>{
    c.style.display = "block";
    } ,7000);
    var e = document.getElementById("texte2");
    setTimeout(()=>{
    e.style.display = "block";
    } ,7900);
    var s = document.getElementById("texts");
    setTimeout(()=>{
    s.style.display = "block";
    } ,8800);
    var t = document.getElementById("textt2");
    setTimeout(()=>{
    t.style.display = "block";
    } ,9700);
    var j = document.getElementById("date");
    setTimeout(()=>{
    j.style.display = "block";
    } ,10600);
    setTimeout(()=>{
    j.style.opacity = "1";
    } ,11100);
    var h = document.getElementById("newdate");
    setTimeout(()=>{
    h.style.display = "flex";
    } ,11200);
    setTimeout(()=>{
    h.style.opacity = "1";
    } ,12000);
  </script>
</body>
</html>