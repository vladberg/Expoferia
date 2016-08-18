<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript"
src="http://cdn.clappr.io/latest/clappr.js"></script>
  <script type="text/javascript"
        src="//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
  <title>Player DVR </title>
  <script type="text/javascript" charset="utf-8">
window.onload = function() {
  var player = new Clappr.Player({
    source: 'http://74.222.3.185:1935/live/ngrp:meridatv_all/playlist.m3u8',
    watermark: "", position: 'bottom-left', parentId: '#player-wrapper',
    poster: "", position: 'bottom-left',
    mediacontrol: {seekbar: "#E113D3", buttons: "#66B2FF"},
    hideMediaControl: true,
    autoPlay: true,
    allowFullScreen: "true",
    plugins: {
      core: [LevelSelector]
    },
  });
}
  </script>
</head>
<body>
   <div align="center">
    <div id="player-wrapper">
  </div>
  </div>
</body>
</html>