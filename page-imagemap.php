<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <title>STL Viewer</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babylonjs/3.2.0/babylon.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/temp/babylon.stlFileLoader.min.js"></script>
    <style>
        html, body {
            overflow: hidden;
            width   : 100%;
            height  : 100%;
            margin  : 0;
            padding : 0;
        }

        #renderCanvas {
            width   : 100%;
            height  : 100%;
            touch-action: none;
        }
    </style>


</head>
<body>
    
    <canvas id="renderCanvas"></canvas>
    <script>
        var canvas = document.getElementById('renderCanvas');

        // load the 3D engine
        var engine = new BABYLON.Engine(canvas, true);


        BABYLON.SceneLoader.Load("", "/temp/maxillary.stl", engine, function (newScene) {
            newScene.activeCamera.attachControl(canvas, false);
            engine.runRenderLoop(function () {
                newScene.render();
            });
        });
    </script>
</body>
</html>