<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/three.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/TrackballControls.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/STLLoader.js"></script>
<style>
#myCanvas
{
    width: 100%;
    height: 100%;
    max-width: 1200px;
}
</style>


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
          camera = new THREE.PerspectiveCamera( 50,
              myCanvas.offsetWidth / myCanvas.offsetHeight, 1, 1000 );
          camera.position.z = 200;

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

hemiLight = new THREE.HemisphereLight( 0xffffff, 0xffffff, 0.6 );
				hemiLight.color.setHSL( 0.6, 0.6, 0.6 );
				hemiLight.groundColor.setHSL( 1, 1, 1 );
				hemiLight.position.set( 0, 50, 0 );
				scene.add( hemiLight );

          var dirLight = new THREE.DirectionalLight(0xffffff, 0.5);
          dirLight.position.set(-10, 10, -10);
          dirLight.position.normalize();
          scene.add(dirLight);

         //loop through models
          echo = "<?php if (have_rows('field_5b4435607844c')):
    $i = 0;
    // loop through the rows of data
    while (have_rows('field_5b4435607844c')): the_row();?>";

		        var material<?php if ($i == 0) {echo "";} else {echo $i;}
        ;?> =  new THREE.MeshLambertMaterial(
		                  {color:0x<?php
        echo (substr((get_sub_field('field_5b443ca5c690b')), 1)); ?>, shading: THREE.FlatShading } );


		       var loader = new THREE.STLLoader();
		          loader.addEventListener( 'load', function ( event ) {
		              var geometry = event.content;
		              var mesh = new THREE.Mesh( geometry, material<?php if ($i == 0) {echo "";} else {echo $i;}
        ;?> );
		              mesh.position.set( <?php the_sub_field('field_5b4458f5c16d3');?>, <?php the_sub_field('field_5b44592bc16d5');?>, <?php the_sub_field('field_5b44592ac16d4');?> );
		              //mesh.rotation.set( -Math.PI/6, -Math.PI/6, 0 );
		              mesh.scale.set( <?php the_sub_field('field_5b4456b52c6f1');?>, <?php the_sub_field('field_5b4456b52c6f1');?>, <?php the_sub_field('field_5b4456b52c6f1');?> );
		              mesh.castShadow = true;
		              mesh.receiveShadow = true;
		              scene.add( mesh );

		          } );
		          loader.load( '<?php the_sub_field('field_5b4436257844d');?>' );


		     echo = "<?php $i++;endwhile;endif;?>";


          //end loop through models


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
<canvas id="myCanvas"
                style="background:lightgrey;" ></canvas>