<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"> </script>
        <script type="text/javascript" src="Scripturi/videoscript.js"></script>
       
    </head>
    <body>
        <div width:100%; height:0; padding-bottom:10px>
        <video class="filme" width="100%" height="500px" controls autoplay onended="$('.change').click()">
  <source src="video/sample.mp4" type="video/mp4">
  <source src="video/small.mp4" type="video/mp4">
  <source src="video/Caveman.mp4" type="video/mp4">
  <source src="video/egypt.mp4" type="video/mp4">
  <source src="video/minions.mp4" type="video/mp4">
  <poster src=".jpg">
      
      </div>
      <butoane>
          <div class="btn-group">
          <button class="play" type="button">Pause</button>
          <button class="change" type="button">Change</button>
          </div>
          <input type="range" class="slider" step ="0.1" value="0.5" min="0" max="1"/>
      </butoane>
      <div id="playlist" class="btn-group">
          <button type="button" class="btn btn-primary" id="1">video 1</button>
          <button type="button" class="btn btn-primary" id="2">video 2</button>
          <button type="button" class="btn btn-primary" id="3">video 3</button>
          <button type="button" class="btn btn-primary" id="4">video 4</button>
          <button type="button" class="btn btn-primary" id="5">video 5</button>
          <button type="button" class="btn btn-primary" id="6">video 6</button>
      </div>
      
      
 
<button id="capture" class="btn-danger">Capture</button>
 
<div id="output"></div>