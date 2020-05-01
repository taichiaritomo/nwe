<?php
// password protected php site
// reference: http://talkerscode.com/webtricks/create-password-protected-webpage-using-php-html-and-css.php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="playinside")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Password";
 }
}
?>





<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Load index.html from server, not from cache -->
    <!-- Reference: https://stackoverflow.com/questions/13321335/load-index-html-every-time-from-the-server-and-not-from-cache/13321364 -->
    <!-- Reference: http://cristian.sulea.net/blog/disable-browser-caching-with-meta-html-tags/ -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    
    <!-- Prevent Search Engine Indexing -->
    <meta name="robots" content="noindex">

    <!-- Primary Meta Tags -->
    <title>Nike Wellness Edition</title>
    <meta name="title" content="Nike Wellness Edition">
    <meta name="description" content="Resources to help you stay well while staying inside.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nwe.studio">
    <meta property="og:title" content="Nike Wellness Edition">
    <meta property="og:description" content="Resources to help you stay well while staying inside.">
    <meta property="og:image" content="http://nwe.studio/media/title-image.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://nwe.studio">
    <meta name="twitter:title" content="Nike Wellness Edition">
    <meta name="twitter:description" content="Resources to help you stay well while staying inside.">
    <meta name="twitter:image" content="http://nwe.studio/media/title-image.jpg">
    
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="style20200501.css">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    
    <!-- import the webpage's javascript file -->
    <!-- <script src="/script.js" defer></script> -->
  </head>

  <?php if($_SESSION['password']=="playinside"): ?>
    <body>
      <header>
        <h1>
          <span id="header_nike">Nike</span>
          <span id="header_edition">Ed<span id="header_it">it</span>ion</span>
        </h1>
        <p>Resources to help you stay well while staying inside.</p>
      </header>
      <main role="main">

        <!-- April 24 -->
        <h2 id="april-24">April 24, 2020</h2>
        <article id="trained">
          <div class="content">
            <div class="image">
              <a href="https://podcasts.apple.com/us/podcast/angela-duckworth-how-stress-can-make-us-stronger/id1414073313?i=1000471653559" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-24/TRAINED.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-24/TRAINED.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://podcasts.apple.com/us/podcast/angela-duckworth-how-stress-can-make-us-stronger/id1414073313?i=1000471653559" target="_blank">How Stress Can Make Us Stronger</a></h3>
              <p>According to psychologist Angela Duckworth, stress can actually help us adapt to difficult situations. <a href="https://podcasts.apple.com/us/podcast/angela-duckworth-how-stress-can-make-us-stronger/id1414073313?i=1000471653559">In this episode</a> of TRAINED, Nike’s holistic fitness podcast,  Nike Sir. Director of Performance Ryan Flaherty speaks with Angela about how a shift in mindset can make our stress work for us.</p>
            </div>
          </div>
        </article>
        <article id="emotional">
          <div class="content">
            <div class="image">
              <a href="https://www.ted.com/talks/guy_winch_why_we_all_need_to_practice_emotional_first_aid?referrer=playlist-how_to_practice_emotional_first_aid" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-24/EMOTIONAL.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-24/EMOTIONAL.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://www.ted.com/talks/guy_winch_why_we_all_need_to_practice_emotional_first_aid?referrer=playlist-how_to_practice_emotional_first_aid" target="_blank">Why We All Need To Practice Emotional First Aid</a></h3>
              <p>Many of us deal with common psychological-health issues on our own — but we don’t have to. Psychologist and author Guy Winch makes a <a href="https://www.ted.com/talks/guy_winch_why_we_all_need_to_practice_emotional_first_aid?referrer=playlist-how_to_practice_emotional_first_aid">compelling case</a> to practice emotional hygiene. Presented by TED.</p>
            </div>
          </div>
        </article>
        <article id="sleepio">
          <div class="content">
            <div class="image">
              <a href="https://onboarding.sleepio.com/sleepio/access/77%231/1" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-24/SLEEPIO.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-24/SLEEPIO.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://onboarding.sleepio.com/sleepio/access/77%231/1" target="_blank">Sleepio</a></h3>
              <p>Having trouble sleeping? The Sleepio App is a fully digital, personalized sleep program. Your virtual sleep expert will guide you on a journey to better sleep, meeting with you for weekly sessions or whenever you may need a helping hand. Based on cognitive and behavioral techniques for sleep and designed by Oxford University Professor Colin Espie, Sleepio delivers practical strategies that are backed by decades of evidence. Get started <a href="https://onboarding.sleepio.com/sleepio/access/77%231/1">here</a>.</p>
            </div>
          </div>
        </article>
        <article id="ntc">
          <div class="content">
            <div class="image">
              <a href="https://vimeo.com/showcase/6864055" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-24/NTC.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-24/NTC.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://vimeo.com/showcase/6864055" target="_blank">NTC Premium</a></h3>
              <p>On-demand workouts and expert tips from our elite Nike Master Trainers. Explore NTC premium <a href="https://vimeo.com/showcase/6864055">here</a> using the password: justdoit.</p>
            </div>
          </div>
        </article>

        <!-- April 17 -->
        <h2 id="april-17">April 17, 2020</h2>
        <article id="daylight">
          <div class="content">
            <div class="image">
              <a href="https://onboarding.trydaylight.com/daylight/access/100%233/1" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-17/DAYLIGHT.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-17/DAYLIGHT.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://onboarding.trydaylight.com/daylight/access/100%233/1" target="_blank">Daylight</a></h3>
              <p>The Daylight App is your expert guide through worry, stress and anxiety. It listens and talks to you, understands your challenges and goals, and guides you through learning and practicing proven strategies for reducing worry and anxiety in your life. Get started <a href="https://onboarding.trydaylight.com/daylight/access/100%233/1">here</a>.</p>
            </div>
          </div>
        </article>
        <article id="nike-dietitian">
          <div class="content">
            <div class="image">
              <a href="mailto:askthedietitian@nike.com?subject=" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-17/AMY.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-17/AMY.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="mailto:askthedietitian@nike.com?subject=" target="_blank">1:1 with a Nike Dietitian</a></h3>
              <p>Whether you're looking for answers to simple food-related questions or need advice on weight loss or sports nutrition, nutritionist Amy Anderson is here to help. Amy’s a licensed Dietitian, former NBA dancer and overall food lover. Email Amy <a href="mailto:askthedietitian@nike.com?subject=">here</a> with quick nutrition questions or to schedule a virtual session.</p>
            </div>
          </div>
        </article>
        <article id="future-of-wellness">
          <div class="content">
            <div class="image">
              <a href="https://downloads.ctfassets.net/ok9wyucfxe4q/77W0z1Nat13X35wcQJj9No/625629a84ee908e309a39087d6f0526a/GlobalWellnessTrends2020.pdf" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-17/WELLNESS2020.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-17/WELLNESS2020.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://downloads.ctfassets.net/ok9wyucfxe4q/77W0z1Nat13X35wcQJj9No/625629a84ee908e309a39087d6f0526a/GlobalWellnessTrends2020.pdf" target="_blank">The Future of Wellness 2020</a></h3>
              <p>This past January, the Global Wellness Summit trends forecasting team predicted new directions in health and wellness. The forecast is based on perspectives from a range of worldwide experts, including economists, academics, futurists and the CEOs of international corporations from all related fields within the $4.5 trillion wellness economy. Check out their powerfully informed predictions <a href="https://downloads.ctfassets.net/ok9wyucfxe4q/77W0z1Nat13X35wcQJj9No/625629a84ee908e309a39087d6f0526a/GlobalWellnessTrends2020.pdf">here</a>.</p>
            </div>
          </div>
        </article>
        <article id="tips-to-navigate-isolation">
          <div class="content">
            <div class="image">
              <a href="https://www.theguardian.com/lifeandstyle/2020/mar/17/self-isolation-survival-guide-relationships-coronavirus" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-17/GUARDIAN.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-17/GUARDIAN.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://www.theguardian.com/lifeandstyle/2020/mar/17/self-isolation-survival-guide-relationships-coronavirus" target="_blank">Tips To Navigate Isolation</a></h3>
              <p>With millions of us lying low to limit the spread of COVID-19, <a href="https://www.theguardian.com/lifeandstyle/2020/mar/17/self-isolation-survival-guide-relationships-coronavirus">in this article</a> The Guardian explores how best to manage feeling cooped up for days on end.</p>
            </div>
          </div>
        </article>

        <!-- April 10 -->
        <h2 id="april-10">April 10, 2020</h2>
        <article id="headspace">
          <div class="content">
            <div class="image">
              <a href="http://headspace.com/code" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-10/HEADSPACE.png" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-10/HEADSPACE.png"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="http://headspace.com/code" target="_blank">Headspace Plus</a></h3>
              <p>We’ve partnered with Headspace, whose mission is to improve the health and happiness of the world through mindfulness and meditation, to provide you and a friend with a free year-long subscription to the <a href="http://headspace.com/code" target="_blank">Headspace Plus app</a>. Sign up using the code: playinside.</p>
            </div>
          </div>
        </article>

        <article id="tom-sachs">
          <div class="content">
            <div class="image">
              <a href="https://www.instagram.com/p/B-Z2beDnQ0z/" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/april-10/ISRU.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/april-10/ISRU.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3>
                <a href="https://www.instagram.com/p/B-Z2beDnQ0z/" target="_blank">Tom Sachs I.S.R.U. <br/> Community Challenge</a>
              </h3>
              <p>Last week, Tom Sachs <a href="https://www.instagram.com/p/B-Z2beDnQ0z/" target="_blank">unveiled on Instagram</a> his adaptation of the I.S.R.U principles and explained how he and his studio team are working from their personal spaces. He’s invited the NikeCraft community, which includes you, to participate, learn, and share projects over the next few weeks. We'd love to see and hear how you’re working in your space as well. See more at #tomsachsisru.</p>
            </div>
          </div>
        </article>

        <article id="nike-master-trainer">
          <div class="content">
            <div class="image">
              <div class="placeholder">
                <noscript>
                  <img class="noscript" src="media/april-10/TRAINERS.jpg" />
                </noscript>
                <img class="lazyload" data-src="media/april-10/TRAINERS.jpg"/>
              </div>
            </div>
            <div class="text">
              <h3>1:1 with a<br/>Nike Master Trainer</h3>
              <p>
                Looking for a personal training session?<br class="disappear-815"/>
                Let us know and we'll organize a 1-on-1<br class="disappear-815"/>
                digital training session for you with one<br class="disappear-815"/>
                of our Nike Master Trainers.
              </p>
            </div>
          </div>
        </article>

        <article id="deepak-chopra">
          <div class="content">
            <div class="video">
              <video width="100%" height="auto" poster="media/april-10/DEEPAK_16-9.jpg" preload="none" playsinline>
                <source src="media/april-10/DEEPAK-720.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="play-button-overlay">▶&#xFE0E;</div>
              <button name="minimize video" class="minimize-button">↙&#xFE0E;</button>
              <button name="enlarge video" class="enlarge-button">↗&#xFE0E;</button>
            </div>
            <div class="text">
              <h3><a class="video-link" href="#deepak-chopra">Deepak Chopra: Finding Hope in Uncertain Times</a></h3>
              <p>
                This week NIKE, Inc., held a global livestream
                with Dr. Deepak Chopra to discuss how we can
                find hope and balance in times of uncertainty
                and change. The event included practical tips
                to holistically manage anxiety and find peace
                including <a class="video-link" href="#deepak-chopra">Chopra’s STOP methodology</a>.</p>
            </div>
          </div>
        </article>

      </main>

      <footer>
        <span class="internal-use-only">
          <span>Created for the Nike Family.</span>
          <span>Internal use only.</span>
        </span>
        <img class="logo" src="media/nike.svg"/>
      </footer>

    <?php else: ?>
      <div id="password-container">
        <form method="post" action="" id="password-form" autocomplete="off">
          <!-- <h1>Enter Password</h1> -->
          <input type="password" name="pass" placeholder="Enter Password">
          <input type="submit" name="submit_pass" value="DO SUBMIT">
          <?php if ($error): ?>
            <p id="password-error"><?php echo $error;?></p>
          <?php endif ?>
        </form>
        <footer>
          <span class="internal-use-only">
            <span>Created for the Nike Family.</span>
            <span>Internal use only.</span>
          </span>
          <img class="logo" src="media/nike.svg"/>
        </footer>
      </div>
    <?php	endif ?>

    <script src="script20200501.js"></script>
    <script src="lazysizes.min.js"></script>

  </body>
</html>