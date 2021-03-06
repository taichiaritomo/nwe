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
    <title>Nike Edition</title>
    <meta name="title" content="Nike Edition">
    <meta name="description" content="Resources to help you stay well while staying inside.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nwe.studio">
    <meta property="og:title" content="Nike Edition">
    <meta property="og:description" content="Resources to help you stay well while staying inside.">
    <meta property="og:image" content="http://nwe.studio/media/title-image-new.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://nwe.studio">
    <meta name="twitter:title" content="Nike Edition">
    <meta name="twitter:description" content="Resources to help you stay well while staying inside.">
    <meta name="twitter:image" content="http://nwe.studio/media/title-image-new.jpg">
    
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="style20200508.css">

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
        <!-- May 8 -->
        <h2 id="may-8">May 8, 2020</h2>
        <article id="ibtihaj-muhammad">
          <div class="content">
            <div class="audio">
              <div class="placeholder">
                <noscript>
                  <img class="noscript" src="media/may-8/INSIDE.jpg" />
                </noscript>
                <img class="lazyload" data-src="media/may-8/INSIDE.jpg"/>
              </div>
              <audio controls preload="none" controlsList="nodownload">
                <source src="media/may-8/InsideNike_004_IbtihajMuhammed.mp3" type="audio/mpeg">
                Your browser does not support the audio tag.
              </audio>
              <div class="play-button-overlay">▶&#xFE0E;</div>
            </div>
            <div class="text">
              <h3><a class="audio-link" href="#ibtihaj-muhammad">"Inside Nike" with Ibtihaj Muhammad</a></h3>
              <p>
                In <a class="audio-link" href="#ibtihaj-muhammad">this episode</a> of Inside Nike,
                role model and Olympian Ibtihaj Muhammad joins us from self-isolation in Los Angeles.
                Ibtihaj talks us through her remarkable rise from aspiring athlete*
                to Olympic medal-stand fencer, opens up about the difficulties of
                living apart from her family, unpacks her newfound love of distance running,
                and offers heartfelt advice for coping with the new coronavirus normal.
              </p>
            </div>
          </div>
        </article>
        <article id="laraaji">
          <div class="content">
            <div class="image">
              <a href="https://open.spotify.com/playlist/5PbCuN4ZYijZgppYKbDKM1?si=h8Q-lB0fRYKukmOXpYTq3w" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/may-8/LARAAJI.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/may-8/LARAAJI.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://open.spotify.com/playlist/5PbCuN4ZYijZgppYKbDKM1?si=h8Q-lB0fRYKukmOXpYTq3w" target="_blank">Featured Playlist: Meditate with Laraaji</a></h3>
              <p>
                A selection of tracks for deep relaxation and contemplation created by musician,
                mystic and laughter meditation practitioner Laraaji. Recommended by Nike Design Radio.
                Listen <a href="https://open.spotify.com/playlist/5PbCuN4ZYijZgppYKbDKM1?si=h8Q-lB0fRYKukmOXpYTq3w" target="_blank">here</a>.
              </p>
            </div>
          </div>
        </article>
        <article id="traci-copeland">
          <div class="content">
            <div class="image">
              <a href="https://www.youtube.com/watch?v=cnB3e0jLU5A" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/may-8/TRACI.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/may-8/TRACI.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://www.youtube.com/watch?v=cnB3e0jLU5A" target="_blank">Live Community Workout with Traci Copeland</a></h3>
              <p>
                Join Nike Master Trainer Traci Copeland this Saturday at 9am PST for a cardio dance workout.
                <a href="https://www.youtube.com/watch?v=cnB3e0jLU5A" target="_blank">Subscribe</a> to the Nike YouTube channel to join the workout and set a reminder so you don't miss out.
              </p>
            </div>
          </div>
        </article>
        <article id="james-collins">
          <div class="content">
            <div class="image">
              <a href="https://www.bbc.co.uk/sounds/play/p087dmvt" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/may-8/JAMES.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/may-8/JAMES.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://www.bbc.co.uk/sounds/play/p087dmvt" target="_blank">Looking After Yourself at Home with James Collins</a></h3>
              <p>
                In <a href="https://www.bbc.co.uk/sounds/play/p087dmvt" target="_blank">this episode</a> of Don't Tell Me The Score, James Collins chats about productivity and
                looking after oneself while stuck at home. James focuses on several key areas including
                how to set up your home environment, the importance of routine, the importance of making
                sport a daily habit, and setting boundaries. Presented by the BBC.
              </p>
            </div>
          </div>
        </article>

        <!-- May 1 -->
        <h2 id="may-1">May 1, 2020</h2>
        <article id="dr-steph">
          <div class="content">
            <div class="video">
              <video width="100%" height="auto" poster="media/may-1/DRSTEPH.jpg" preload="none" playsinline controlsList="nodownload">
                <source src="media/may-1/DRSTEPH-optimized.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="play-button-overlay">▶&#xFE0E;</div>
              <button name="minimize video" class="minimize-button">↙&#xFE0E;</button>
              <button name="enlarge video" class="enlarge-button">↗&#xFE0E;</button>
            </div>
            <div class="text">
              <h3><a class="video-link" href="#dr-steph">Dr. Steph Cacioppo on Loneliness</a></h3>
              <p>
                This week NIKE, Inc., held a global livestream with Dr. Steph Cacioppo,
                Nike’s resident neuroscientist and expert on loneliness.
                Dr. Steph discussed how we can train our brains to be less lonely and
                why movement can help. Click <a class="video-link" href="#dr-steph">here</a> to listen to how Dr. Steph
                encapsulates her advice through the acronym G.R.A.C.E.
              </p>
            </div>
          </div>
        </article>
        <article id="jamal-liggin">
          <div class="content">
            <div class="image">
              <a href="https://www.youtube.com/watch?v=EYuBZ8Vfm-Q&feature=youtu.be" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/may-1/JAMALLIGGIN.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/may-1/JAMALLIGGIN.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://www.youtube.com/watch?v=EYuBZ8Vfm-Q&feature=youtu.be" target="_blank">NTC Community Workouts on YouTube</a></h3>
              <p>
                Every Saturday, Nike Training Club Master Trainers lead free,
                live-streamed community workouts at 9 a.m. PST.
                This Saturday, join Jamal Liggin’s American Football-inspired workout.
                No equipment needed. Livestream <a href="https://www.youtube.com/watch?v=EYuBZ8Vfm-Q&feature=youtu.be" target="_blank">here</a>.
              </p>
            </div>
          </div>
        </article>
        <article id="control">
          <div class="content">
            <div class="image">
              <a href="https://youtu.be/n3kNlFMXslo" target="_blank">
                <div class="placeholder">
                  <noscript>
                    <img class="noscript" src="media/may-1/CONTROL.jpg" />
                  </noscript>
                  <img class="lazyload" data-src="media/may-1/CONTROL.jpg"/>
                </div>
              </a>
            </div>
            <div class="text">
              <h3><a href="https://youtu.be/n3kNlFMXslo" target="_blank">How To Gain Control Of Your Free Time</a></h3>
              <p>
                There are 168 hours in each week. How do we find time for what matters most?
                Time management expert Laura Vanderkam studies how busy people spend their lives,
                and she's discovered that many of us drastically overestimate our commitments each week,
                while underestimating the time we have to ourselves.
                Click <a href="https://youtu.be/n3kNlFMXslo" target="_blank">here</a> to watch. Presented by TED.
              </p>
            </div>
          </div>
        </article>
        <article id="dos-and-donts">
          <div class="content">
            <div class="video">
              <video width="100%" height="auto" poster="media/may-1/DOSANDDONTS.jpg" preload="none" playsinline controlsList="nodownload">
                <source src="media/may-1/DOSANDDONTS.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="play-button-overlay">▶&#xFE0E;</div>
              <button name="minimize video" class="minimize-button">↙&#xFE0E;</button>
              <button name="enlarge video" class="enlarge-button">↗&#xFE0E;</button>
            </div>
            <div class="text">
              <h3><a class="video-link" href="#dos-and-donts">Marketing DOs and DONTs</a></h3>
              <p>
                We've gone straight to the experts and found exactly what to do and what not to do
                when it comes to performance marketing. Sexy, right?
                Click <a class="video-link" href="#dr-steph" target="_blank">here</a> for some helpful tips.
              </p>
            </div>
          </div>
        </article>

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
              <p>According to psychologist Angela Duckworth, stress can actually help us adapt to difficult situations. <a href="https://podcasts.apple.com/us/podcast/angela-duckworth-how-stress-can-make-us-stronger/id1414073313?i=1000471653559" target="_blank">In this episode</a> of TRAINED, Nike’s holistic fitness podcast,  Nike Sir. Director of Performance Ryan Flaherty speaks with Angela about how a shift in mindset can make our stress work for us.</p>
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
              <p>Many of us deal with common psychological-health issues on our own — but we don’t have to. Psychologist and author Guy Winch makes a <a href="https://www.ted.com/talks/guy_winch_why_we_all_need_to_practice_emotional_first_aid?referrer=playlist-how_to_practice_emotional_first_aid" target="_blank">compelling case</a> to practice emotional hygiene. Presented by TED.</p>
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
              <p>The Daylight App is your expert guide through worry, stress and anxiety. It listens and talks to you, understands your challenges and goals, and guides you through learning and practicing proven strategies for reducing worry and anxiety in your life. Get started <a href="https://onboarding.trydaylight.com/daylight/access/100%233/1" target="_blank">here</a>.</p>
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
              <p>Whether you're looking for answers to simple food-related questions or need advice on weight loss or sports nutrition, nutritionist Amy Anderson is here to help. Amy’s a licensed Dietitian, former NBA dancer and overall food lover. Email Amy <a href="mailto:askthedietitian@nike.com?subject=" target="_blank">here</a> with quick nutrition questions or to schedule a virtual session.</p>
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
              <p>This past January, the Global Wellness Summit trends forecasting team predicted new directions in health and wellness. The forecast is based on perspectives from a range of worldwide experts, including economists, academics, futurists and the CEOs of international corporations from all related fields within the $4.5 trillion wellness economy. Check out their powerfully informed predictions <a href="https://downloads.ctfassets.net/ok9wyucfxe4q/77W0z1Nat13X35wcQJj9No/625629a84ee908e309a39087d6f0526a/GlobalWellnessTrends2020.pdf" target="_blank">here</a>.</p>
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
              <p>With millions of us lying low to limit the spread of COVID-19, <a href="https://www.theguardian.com/lifeandstyle/2020/mar/17/self-isolation-survival-guide-relationships-coronavirus" target="_blank">in this article</a> The Guardian explores how best to manage feeling cooped up for days on end.</p>
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
              <video width="100%" height="auto" poster="media/april-10/DEEPAK_16-9.jpg" preload="none" playsinline controlsList="nodownload">
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
          <input type="password" name="pass" placeholder="Password" autocomplete="new-password" autofocus>
          <input type="submit" name="submit_pass" value="Enter">
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

    <script src="script20200508.js"></script>
    <script src="lazysizes.min.js"></script>

  </body>
</html>