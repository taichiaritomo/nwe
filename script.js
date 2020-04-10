document.querySelectorAll('div.video').forEach(videoContainer => {
  let videoTitle = videoContainer.closest('article').querySelector('h3 a');
  let video = videoContainer.querySelector('video');
  let playButtonOverlay = videoContainer.querySelector('div.play-button-overlay');
  let minimizeButton = videoContainer.querySelector('button.minimize-button');
  let enlargeButton = videoContainer.querySelector('button.enlarge-button');
  playButtonOverlay.addEventListener('click', () => { 
    video.play();
    video.controls = true;
    videoContainer.classList.add('enlarged');
    playButtonOverlay.style.display = 'none';
    minimizeButton.style.display = 'block';
  });
  videoTitle.addEventListener('click', (event) => {
    event.preventDefault();
    video.play();
    video.controls = true;
    videoContainer.classList.add('enlarged');
    playButtonOverlay.style.display = 'none';
    minimizeButton.style.display = 'block';
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
  // video.addEventListener('pause', () => {
  //   video.controls = false;
  //   videoContainer.classList.remove('playing');
  //   playButtonOverlay.style.display = 'flex';
  // });
});


document.addEventListener('DOMContentLoaded', (event) => {
  const urlParams = new URLSearchParams(window.location.search.substring(1));
  const videoParam = urlParams.get('video');
  if (videoParam == 'large' && window.location.hash) {
    let article = document.querySelector('article' + window.location.hash);
    let videoContainer = article.querySelector('div.video');
    // let video = videoContainer.querySelector('video');
    // let playButtonOverlay = videoContainer.querySelector('div.play-button-overlay');
    let minimizeButton = videoContainer.querySelector('button.minimize-button');
    videoContainer.classList.add('enlarged');
    minimizeButton.style.display = 'block';
  }
});