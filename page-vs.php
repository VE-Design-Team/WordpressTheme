<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Salesforce Virtual Workplace</title>


  <link rel='stylesheet' href='https://emedia.rmit.edu.au/C3319/wp-content/plugins/h5p/h5p-php-library/styles/h5p.css'>
  <link rel='stylesheet' href='https://emedia.rmit.edu.au/C3319/wp-content/themes/stable/css/theme.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <style>
    #wrapper {
    display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
	position: absolute;
	left: 0;
	width: 100%;
min-height: 100px;
  
}


#scroller {

  width: 112vw;
  height: 45vw;
}



/*Virtual lab*/
.vlab{
  background-image: url("https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/salesforce-virtual-workplace-v1.png");
    background-repeat: no-repeat;
    background-size: contain;
    overflow: auto;
    width: 100%;
}


.vlab ul, .vlab li, ul.office-folder, ul.office-folder li {
  list-style-type:none;
  margin:0;
  padding:0;
}


.vlab button, ul.office-folder li a {
  height: auto;
  position:absolute;
  margin:0;
  padding:0;
  background-color:transparent;
  border:none;
  cursor: pointer;
}

.vlab button:hover, .vlab button:focus, ul.office-folder li a:hover, ul.office-folder li a:focus {
  outline:none;
  box-shadow: none;
}

.vlab button:hover img, .vlab button:focus img, ul.office-folder li a:hover img, ul.office-folder li a:focus img{
  animation-play-state: paused;
  -webkit-filter: drop-shadow(1px 3px 7px #00cfff);
}


button#office {
  width: 9.4%;
  top: 32%;
  left: 5.5%;
}


button#computer{
  width: 8%;
  left: 41%;
  top: 45%;}


button#door{
  width: 7%;
  left: 27.5%;
  top: 21.2%;
}

button#login {
  width: 5%;
  left: 12%;
  top: 45%;
}

button#chatter {
  width: 5%;
  left: 18%;
  top: 45%;}

button#chattermsg {
  width: 5%;
  left: 15%;
  top: 54%;}

.vlab button img, ul.office-folder li img {
  -webkit-animation: pulse 3s infinite;
}

.thumb {
  -webkit-animation: pulse 3s infinite;
}


/*pulse animation of icons*/

@-webkit-keyframes pulse{
  0%, 100%  { -webkit-filter: drop-shadow(0px 0px 0px none); }
  50% { -webkit-filter: drop-shadow(1px 3px 7px #000054); }
}

.face:hover {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}



.face:hover {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}



/*Overides BS4 modal values*/

.modal-content{
  background-color:transparent !important;
  border: 1px solid rgba(0,0,0,0) !important;
}

.modal-header{
  border-bottom: 0px solid transparent !important;
}

/* Computer scree modal */

.computer-screen{
  background-image:url("https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Screen@1000x.png");
  background-repeat: no-repeat;
    background-size: cover;
}
.computer-bg-top{
border-top: 1.2rem solid #2C2D2D;
border-right:1.2rem solid #2C2D2D;
border-left:1.2rem solid #2C2D2D; 
}

.computer-bg-bottom{
border-right:1.2rem solid #2C2D2D;
border-left:1.2rem solid #2C2D2D; 
border-bottom:1.2rem solid #2C2D2D;
max-height: 25rem;
}
.computer-bottom-frame{
  background-color:#DDDDDC;
  border-radius: 0 0 3rem 3rem;
  height: 4rem;
}



/*Office-modal*/

.office-container{
  max-width: 50rem;
  width:80%;
}

.office-modal{
  height:400px;
}

.office{
   background-image:url("https://emedia.rmit.edu.au/BUSM8779C/wp-content/uploads/2018/09/virtual-office_v3.png");
  background-repeat: no-repeat;
    background-size: cover;
}


/*HR office*/

.office {
  max-width: 70rem;
  height: 100%;
  
}

.office-modal {
  height: 400px;
}

.office {
  background-image:url("https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Saleforce-HR-office.png");
  background-repeat: no-repeat;
    background-size: cover;
}



/*org-chart modal*/

.org-chart {
  max-width: 70rem;
  height: 100%;
  
}

.org-chart-modal {
  height: 400px;
}




/* image zoom */

.thumb {
  width: 33%;
  left: 110%;
  top: 21.2%;
}

thumb#login {
  width: 10%;
}

.container {
	margin: 0 auto;
	width: 500px;
	padding: 32px;
}

img {
	display: block;
	max-width: 100%;
	height: auto;
}

.img-container {
	position: relative;
	margin: 0;
	width: 100%;
}

.img-container::after {
	content: "🔎";
	display: none;
	opacity: 0;
	position: absolute;
	top: 0;
	right: 0px;
	padding: 8px 8px 0 0;
	color: white;
}

.img-container:hover::after {
	opacity: 1;
}



.img-container-bg {
	opacity: 0;
	visibility: hidden;
	position: fixed;
	z-index: 9;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-color: rgba(0,0,0,0.5);
	transition-property: opacity, visibility;
	transition-duration: 350ms;
	transition-timing-function: linear;
}


.thumb {
	position: relative;
	cursor: pointer;
	transform: scale(1);
	transition: transform 250ms ease-in-out;
}

.img-container.is-active .img-container-bg {
	opacity: 1;
	visibility: visible;
}

.img-container.is-active .thumb {
	z-index: 99;
	transform: scale(1.8);
  width: 100%;
  left: 0;
}


/*login modal*/

.login-container {
  max-width: 47rem;
}

.login-modal {
  height: 475px;
}

.login-container {
  background-image: url("https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Log-In.png");
  background-repeat: no-repeat;
  background-size: cover;
}

.close {
  right: 1em;
}

/* Chatter modal*/

.chatter-container {
  max-width: 47rem;
}

.chatter-modal {
  height: 475px;
}

.chatter-container {
  background-image: url("https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Edit-Your-Chatter-Profile.png");
  background-repeat: no-repeat;
  background-size: cover;
}

/* Update Chatter modal*/

.chattermsg-container {
  max-width: 50rem;
}

.chattermsg-modal {
  height: 400px;
}

.chattermsg-container {
  background-image: url("https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Update-Chatter-Profile.png");
  background-repeat: no-repeat;
  background-size: cover;
}


.close {
  right: 1em;
}

</style>


</head>

<body onload="loaded()">
  <div class="wrapper" id="page-wrapper">
    <div id="content" tabindex="-1">
      <div id="wrapper" id="page-wrapper">
        <div id="scroller" class="vlab">


          <ul>
            <li><button id="login" type="button" title="explore login" data-toggle="modal" data-target="#login-details"><img
                  alt="login" src="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Log-In.png"></button></li>
          </ul>

          <div class="modal fade" id="login-details" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog login-container" role="document">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="close" aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="login-modal" </div> </div> </div> </div> </div> <!--Set up chatter-->
                  <ul>
                    <li><button id="chatter" type="button" title="explore chatter" data-toggle="modal" data-target="#chatter-details"><img
                          alt="chatter" src="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Edit-Your-Chatter-Profile.png"></button></li>
                  </ul>

                  <div class="modal fade" id="chatter-details" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog chatter-container" role="document">
                      <div class="modal-content">
                        <div class="modal-header">

                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="close" aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="chatter-modal" </div> </div> </div> </div> </div> <!--update chatter-->
                          <ul>
                            <li><button id="chattermsg" type="button" title="explore chatter" data-toggle="modal"
                                data-target="#chattermsg-thread"><img alt="chatter" src="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Update-Chatter-Profile.png"></button></li>
                          </ul>

                          <div class="modal fade" id="chattermsg-thread" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog chattermsg-container" role="document">
                              <div class="modal-content">
                                <div class="modal-header">

                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="close" aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="chattermsg-modal" </div> </div> </div> </div> </div> <!--HR door-->
                                  <ul>
                                    <li><button id="door" type="button" title="door" data-toggle="modal" data-target="#office"><img
                                          alt="door" src="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/HR-door.png"></button></li>
                                  </ul>
                                </div>

                                <div class="modal fade" id="office" tabindex="-1" role="dialog">
                                  <div class="modal-dialog modal-dialog office" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">HR office</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="office-modal">



                                        <!-- orgchart zoom -->
                                        <div class="container">
                                          <figure class="img-container">
                                            <img class="thumb" src="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Salesfore-Org-Chart.png"
                                              data-thumb="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Salesfore-Org-Chart.png"
                                              data-big="https://emedia.rmit.edu.au/DEV402/wp-content/uploads/2018/10/Salesfore-Org-Chart.png">


                                            <div class="img-container-bg">
                                              <div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script src='https://emedia.rmit.edu.au/C3319/wp-content/themes/stable/js/jquery.glossarize.js'></script>
<script src='https://emedia.rmit.edu.au/C3319/wp-content/themes/stable/js/jquery.min.js'></script>
<script src='https://emedia.rmit.edu.au/C3319/wp-content/themes/stable/js/popper.min.js?ver=1'></script>
<script src='https://emedia.rmit.edu.au/C3319/wp-content/themes/stable/js/theme.min.js?ver=1.1.9a'></script>
<script src='https://emedia.rmit.edu.au/C3319/wp-content/themes/stable/js/tooltip.js'></script>
<script src='https://emedia.rmit.edu.au/C3319/wp-includes/js/wp-embed.min.js?ver=4.8.1'></script>
<script src='https://emedia.rmit.edu.au/C3319/wp-includes/js/wp-emoji-release.min.js?ver=4.8.1'></script>









<script>
  (() => {
    const IMAGES = document.querySelectorAll(".thumb");
    let imageActive = false;
    let normalImage;
    let bigImage;

    IMAGES.forEach(image => image.addEventListener("click", () => {
      handleImage(image);
    }));

    const handleImage = image => {
      if (!imageActive) openImage(image);
      else if (imageActive) closeImage(image);
    };

    const openImage = image => {
      imageActive = true;
      setImageSrc(image);
      image.parentNode.classList.add("is-active");
    };

    const closeImage = image => {
      imageActive = false;
      setImageSrc(image);
      image.parentNode.classList.remove("is-active");
    };

    const setImageSrc = image => image.setAttribute("src", getImageSrc(image));

    const getImageSrc = image => {
      let normalImage = image.getAttribute("data-thumb");
      let bigImage = image.getAttribute("data-big");

      if (imageActive) return bigImage;
      else if (!imageActive) return normalImage;
    };
  })();
</script>




</body>

</html>