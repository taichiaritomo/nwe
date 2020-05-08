// VIDEO
document.querySelectorAll('div.video').forEach(videoContainer => {
  let videoPlayLinks = videoContainer.closest('article').querySelectorAll('a.video-link');
  let video = videoContainer.querySelector('video');
  let playButtonOverlay = videoContainer.querySelector('div.play-button-overlay');
  let minimizeButton = videoContainer.querySelector('button.minimize-button');
  let enlargeButton = videoContainer.querySelector('button.enlarge-button');
  playButtonOverlay.addEventListener('click', () => { 
    video.play();
    video.controls = true;
    videoContainer.classList.add('enlarged');
    playButtonOverlay.style.display = 'none';
    enlargeButton.style.display = 'none';
    minimizeButton.style.display = 'block';
  });
  videoPlayLinks.forEach(videoPlayLink => {
    videoPlayLink.addEventListener('click', (event) => {
      event.preventDefault();
      video.play();
      video.controls = true;
      videoContainer.classList.add('enlarged');
      playButtonOverlay.style.display = 'none';
      enlargeButton.style.display = 'none';
      minimizeButton.style.display = 'block';
    });
  });
  minimizeButton.addEventListener('click', () => {
    videoContainer.classList.remove('enlarged');
    minimizeButton.style.display = 'none';
    enlargeButton.style.display = 'block';
  });
  enlargeButton.addEventListener('click', () => {
    videoContainer.classList.add('enlarged');
    enlargeButton.style.display = 'none';
    minimizeButton.style.display = 'block';
  });
});

// VIDEO DEEPLINK
document.addEventListener('DOMContentLoaded', (event) => {
  const urlParams = new URLSearchParams(window.location.search.substring(1));
  const videoParam = urlParams.get('video');
  if (videoParam == 'large' && window.location.hash) {
    let article = document.querySelector('article' + window.location.hash);
    let videoContainer = article.querySelector('div.video');
    let minimizeButton = videoContainer.querySelector('button.minimize-button');
    videoContainer.classList.add('enlarged');
    let video = videoContainer.querySelector('video');
    try {
      video.play();
      videoContainer.querySelector('div.play-button-overlay').display='none';
    } catch (error) {
      console.error(error);
    }
    minimizeButton.style.display = 'block';
  }
});

// AUDIO
document.querySelectorAll('div.audio').forEach(audioContainer => {
  let audioPlayLinks = audioContainer.closest('article').querySelectorAll('a.audio-link');
  let audio = audioContainer.querySelector('audio');
  let playButtonOverlay = audioContainer.querySelector('div.play-button-overlay');
  playButtonOverlay.addEventListener('click', () => { 
    audio.play();
    audioContainer.classList.add('playing');
    playButtonOverlay.style.display = 'none';
  });
  audioPlayLinks.forEach(audioPlayLink => {
    audioPlayLink.addEventListener('click', (event) => {
      event.preventDefault();
      audio.play();
      audioContainer.classList.add('playing');
      playButtonOverlay.style.display = 'none';
    });
  });
});

// turn image placeholder background transparent when image is loaded
document.querySelectorAll('div.placeholder').forEach(placeholderElement => {
  placeholderElement.querySelector('img').addEventListener('lazyloaded', () => {
    placeholderElement.style.backgroundColor = 'transparent';
  });
});

// focus on load
window.onload = function() {
  document.querySelectorAll('div#password-container').forEach(passwordContainer => {
    passwordContainer.querySelector('input[type="password"]').focus();
  });
}