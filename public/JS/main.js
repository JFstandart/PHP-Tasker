window.onload = () => {
  changeBackground();
  setInterval(() => {
    changeBackground();
  }, 10000);
}

function changeBackground() {
  const BackgroundObject = document.getElementById('background');
  console.log(BackgroundObject);
  BackgroundObject.style.background = `url('http://${window.location.hostname}/public/Img/Img${Math.floor(Math.random() * 10)}.jpg') no-repeat fixed left top 100%`;
  BackgroundObject.style.backgroundSize = '100%';
}
