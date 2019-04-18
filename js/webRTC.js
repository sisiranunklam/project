(function(){
  var video = document.getElementById('video');
  // canvas = document.getElementById('canvas'),
  // context = canvas.getContext('2d'),
  // photo = document.getElementById('photo'),
    vendoUrl = window.URL || window.webkitURL;
  
  navigator.getMedia =    navigator.getUserMedia||
                          navigator.webkitGetUserMedia ||
                          navigator.mozGetUserMedia ||
                          navigator.msGetUserMedia;
  navigator.getMedia({
      video : true,
      audio : false
  },function processVideo(stream){
      video.src = vendoUrl.createObjectURL(stream);
      video.play();
  },function(error){

  }); 
  // setTimeout(processVideo, 0);
//   document.getElementById('capture').addEventListener('click',function(){
//     context.drawImage(video, 0, 0, 400, 300);
//     photo.setAttribute('src', canvas.toDataUrl('image/png'));
// });
})();