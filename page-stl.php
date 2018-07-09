<script src="<?php echo get_stylesheet_directory_uri(); ?>/mesher/three.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/mesher/TrackballControls.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/mesher/STLLoader.js"></script>

<script type="text/javascript">
  function onLoad(){
      initScene();
      function initScene() {
        
          // Grab our canvas
          var myCanvas = document.getElementById("myCanvas");
          //Create a new renderer and set the size
          renderer = new THREE.WebGLRenderer( { antialias: true,
                                                alpha: true,
                                                canvas: myCanvas} );
          renderer.setSize(myCanvas.offsetWidth, myCanvas.offsetHeight);
  
          //Create a new scene
          scene = new THREE.Scene();
  
          //Create a perspective camera
          camera = new THREE.PerspectiveCamera( 75,  
              myCanvas.offsetWidth / myCanvas.offsetHeight, 1, 1000 );
          camera.position.z = 20;
            
          scene.add( camera );
  
          //Add controls for interactively moving the camera with mouse
          controls = new THREE.TrackballControls(camera, renderer.domElement);
            
          controls.rotateSpeed = 1.0;
          controls.zoomSpeed = 1.2;
          controls.panSpeed = 0.2;
  
          controls.noZoom = false;
          controls.noPan = false;
  
          controls.staticMoving = false;
          controls.dynamicDampingFactor = 0.3;
  
          controls.minDistance = 1.1;
          controls.maxDistance = 100;
  
          controls.keys = [ 65, 83, 68 ]; // [ rotateKey, zoomKey, panKey ]
    
          //Add some lights
          var dirLight = new THREE.DirectionalLight(0xffffff, 1);
          dirLight.position.set(-3, 3, 7);
          dirLight.position.normalize();
          scene.add(dirLight);
  
          var pointLight = new THREE.PointLight(0xFFFFFF, 5, 50);
          pointLight.position.set(10, 20, -10);
          scene.add(pointLight);
            
          var material =  new THREE.MeshLambertMaterial(
                  {color:0xff0000, shading: THREE.FlatShading } );

          var material2 =  new THREE.MeshLambertMaterial(
              {color:0x00ff00, shading: THREE.FlatShading } );

          var material3 = new THREE.MeshPhongMaterial(
              { ambient: 0x555555, color: 0xAAAAAA,
                specular: 0x111111, shininess: 200 } );

          var loader = new THREE.STLLoader();
          loader.addEventListener( 'load', function ( event ) {
              var geometry = event.content;
              var mesh = new THREE.Mesh( geometry, material );
              mesh.position.set( 0, 0, 0.0 );
              mesh.rotation.set( -Math.PI/6, -Math.PI/6, 0 );
              mesh.scale.set( 100, 100, 100 );
              mesh.castShadow = true;
              mesh.receiveShadow = true;
              scene.add( mesh );
              
          } );
          loader.load( '<?php echo get_stylesheet_directory_uri(); ?>/mesher/pr2_head_pan.stl' );
            

          var loader = new THREE.STLLoader();
          loader.addEventListener( 'load', function ( event ) {
              var geometry = event.content;
              var mesh = new THREE.Mesh( geometry, material2 );
              mesh.position.set( 0, 0, 0.0 );
              mesh.rotation.set( -Math.PI/6, -Math.PI/6, 0 );
              mesh.scale.set( 50, 50, 50 );
              mesh.castShadow = true;
              mesh.receiveShadow = true;
              scene.add( mesh );
              
          } );
          loader.load( '<?php echo get_stylesheet_directory_uri(); ?>/mesher/pr2_head_tilt.stl' );

          //Call the animate function
          animate();
      }
      function animate() {
          //will not render if the browser window is inactive
          requestAnimationFrame( animate );
          render();
      }             
      
      function render() {
          controls.update(); //for cameras
          renderer.render( scene, camera );
      }    
  }      
 window.onload = window.onresize = function() {onLoad();}        
</script>  
<canvas id="myCanvas" width="600" height="400"
                style="background:lightgrey; float:right;" ></canvas>