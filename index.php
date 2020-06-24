<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello, WebVR! • A-Frame</title>
    <meta name="description" content="Hello, WebVR! • A-Frame">
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>


  </head>
  <body>

    <a-scene background="color: #0f0000">

      <a-entity position="-1 -1 2">
        <a-camera></a-camera>
      </a-entity>


      <a-assets>
        <a-asset-item id="crate-obj" src="model.obj"></a-asset-item>
        <a-asset-item id="crate-mtl" src="materials.mtl"></a-asset-item>
       
      </a-assets>



      <!-- Using the asset management system. -->

      <a-obj-model src="#crate-obj" mtl="#crate-mtl"   position="-1 0.3  0.5"  scale="3 3 3"   rotation="0   0 0"  > </a-obj-model>
      


      <a-cylinder position="-0.3 -0.2 0.4" radius="0.1" height="0.5" color="#605F5F" shadow></a-cylinder>
      <a-cylinder position="-0.3 -0.2 0" radius="0.1" height="0.5" color="#605F5F" shadow></a-cylinder>
      <a-cylinder position="-2 -0.2 0.4" radius="0.1" height="0.5" color="#605F5F" shadow></a-cylinder>
      <a-cylinder position="-2 -0.2 0" radius="0.1" height="0.5" color="#605F5F" shadow></a-cylinder>

     
      <a-sphere position="-1 3 -3" radius="0.8" color="#FBFF0F "  rotation="45 90 180" shadow  animation="property: rotation; to: 50 360 100; loop: true; dur: 10000" ></a-sphere>
    

      <a-plane position="-1 -4 -10" rotation="-90 0 0" width="20" height="15" color="#0f0000" shadow></a-plane>

    </a-scene>
