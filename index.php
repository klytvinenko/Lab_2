<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Lab_2</title>
</head>
<body>

  <!-- Main -->
  <div class="main">
    <!-- Main Content -->
     <div class="main-content">
       <!-- About user -->
       <div class="about">
        <h2 class="about-possition">Front-End Developer</h2>
           
        <h1 class="about-name">Kristina Lytvinenko</h1>
        <p class="about-description">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
        </p>
       </div>
       <!-- Projects -->
       <div class="projects">
        <h3 class="tittle">Projects</h3>
           <ol class="projects-list">
              <li class="project-item">
                <span class="project"> 
                  <a href="https://hellenglish.goit.global/" class="project-link">https://hellenglish.goit.global/</a>
                     .............
                     <span class="project-bracket">[</span> HTML5, CSS3 <span class="project-bracket">]</span>
                </span> 
              </li>
              <li class="project-item">
                <span class="project">
                  <a href="https://cryptohub.goit.global/" class="project-link">https://cryptohub.goit.global/</a>
                 ...............
                 <span class="project-bracket">[</span> JavaScript <span class="project-bracket">]</span> 
                </span>
              </li>
              <li class="project-item">
                <span class="project">
                 <a href="https://kidslike.goit.global/" class="project-link">https://kidslike.goit.global/</a>
                   ......................
                   <span class="project-bracket">[</span> React.js, Node.js <span class="project-bracket">]</span>
                </span>
             </li>
            </ol>
       </div>
       <!-- Feedback -->
       <div class="work">
         <h3 class="tittle">Feedback</h3>
         <?php
         $strEmail = 'Еnter a e-mail';
         $strMessage = 'Еnter a message';
         $strButton = 'Send message';

     
         echo "<div>
         </div>
         <div style='padding: 20px;'>
         <form action='sendMessage.php' method='post'>
             <label class='label-email'> $strEmail </label>
             <input class='inputGmail' id='mail' name='mail' type='text'> </input>
     
             <div style='padding: 20px;'>
             <label class='label-message'> $strMessage </label>
             <input class='inputMessage' id='message' name='message' type='text'> </input>
             </div>
     
             <div style='padding: 20px;'>
             <button class='btn' type='submit'> $strButton </button>
             </form>
             </div>
         </div>";
     
         ?>
        <!-- Education -->
        <div class="education">
          <h3>Education</h3>
            <h4 class="organization">Cherkasy National University named after Bohdan Khmelnytsky</h4>
              <h5>Software Engineering</h5>
               <p class="period">September 2019 - June 2022  <span class="line">| </span>   Country</p>
        </div>
       </div>
     </div>
    <!-- Sidebar -->
    <aside class="sidebar"> 
      <img src="img/photo_2020-09-21_17-01-17.jpg" alt="user photo" class="photo">
       <!-- Contacts -->
       <div class="contacts">
         <h3 class="sidebar-title">Contacts</h3>
         <p> 
            <span class="contact-type">C:</span>
             <a href="tel:+380939072844" class="contacts-link">+380939072844</a>
         </p>
         <p>
            <span class="contact-type">E:</span>
             <a href="mailto:lytvinenk01@gmail.com" class="contacts-link">lytvinenk01@gmail.com</a>
         </p>
         <p>
            <span class="contact-type">T:</span>
             <a href="tg:@k_lytvinenko" class="contacts-link">@k_lytvinenko</a>
         </p>
       </div>
       <!-- Tech skills -->
       <div class="tech-skils">
         <h3 class="sidebar-title">Tech Skills</h3>
         <ul class="tech-skils-list">
             <li class="tech-skills-item"><span class="tech-skills-text">HTML5</span></li>
             <li class="tech-skills-item"><span class="tech-skills-text">CSS</span></li>
             <li class="tech-skills-item"><span class="tech-skills-text">GIT</span></li>
             <li class="tech-skills-item"><span class="tech-skills-text">JavaScript</span></li>
             <li class="tech-skills-item"><span class="tech-skills-text">React.js</span></li>
             <li class="tech-skills-item"><span class="tech-skills-text">Node.js</span></li>
             <li class="tech-skills-item"><span class="tech-skills-text">WecPack</span></li>
         </ul>
       </div>
       <!-- Soft skills -->
       <div class="soft-skils">
         <h3 class="sidebar-title">Soft Skills</h3>
         <ul>
            <li class="tech-skills-item"><span class="tech-skills-text">Scrum</span></li>
            <li class="tech-skills-item"><span class="tech-skills-text">Agile</span></li>
            <li class="tech-skills-item"><span class="tech-skills-text">GTD</span></li>
            <li class="tech-skills-item"><span class="tech-skills-text">Teawork</span></li>
         </ul>
       </div>
       
    </aside>

  </div>
  <form action="index2.php">
        <button class='btn-go-to-table'>Page table</button>
    </form>
  
</body>
</html>