<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dream Tour | Browse VR</title>

    <meta name="description" content="Curved Images - A-Frame">
    <script src="asset/js/aframe-master.js"></script>
  </head>
  <body>
    <a-scene background="color: #fff">
      <a-assets>
        <img id="ui1" src="asset/img/ui-1.png">
        <img id="ui2" src="asset/img/ui-2.png">
        <img id="ui3" src="asset/img/ui-3.png">
        <img id="ui4" src="asset/img/ui-4.png">
      </a-assets>

      <a-curvedimage src="#ui4" radius="5.7" theta-length="180" height="9"
                     rotation="0 90 0" scale="1.2 1.2 1.2"></a-curvedimage>
      <a-curvedimage src="#ui4" radius="5.7" theta-length="180" height="9"
                     rotation="0 270 0" scale="1.2 1.2 1.2"></a-curvedimage>
      <a-curvedimage src="#ui3" radius="5.7" theta-length="180" height="9"
                     rotation="0 90 0" scale="1.2 1.2 1.2"></a-curvedimage>
      <a-curvedimage src="#mozvr" radius="5.7" theta-length="17" height=".36"
                     opacity="0.2" rotation="0 250 0" position="0 2 0"></a-curvedimage>
      <a-curvedimage src="#ui1" radius="5.7" theta-length="72" height="2.6"
                     rotation="0 80 0" position="0 0.7 0" scale="0.6 0.6 0.6"></a-curvedimage>
      <a-curvedimage src="#ui2" radius="5.7" theta-length="70" height="3.02"
                     rotation="0 -130 0" scale="0.8 0.8 0.8"></a-curvedimage>

      <a-image position="0 -5 0" src="#shadow2" rotation="-90 0 0" scale="6 6 6"></a-image>
      <a-entity position="0 0 1.5">
        <a-camera></a-camera>
      </a-entity>
    </a-scene>
  </body>
</html>
