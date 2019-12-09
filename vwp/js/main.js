
var restapibutton = document.getElementById("restapi-btn");
var restapicontainer = document.getElementById("restapi-container");

if(restapibutton){
restapibutton.addEventListener("click", function(){

    var ourRequest = new XMLHttpRequest();
    
    //Emedia site link to handle VR Editor REST API request
    ourRequest.open('GET', 'https://emedia.rmit.edu.au/bagwanhealth/VR/public/static_assets/hello-world.json');
    ourRequest.onload = function() {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        createHTML(data);

        //console.log(data);
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };

    ourRequest.onerror = function() {
      console.log("Connection error");
    };

    ourRequest.send();


});
}
function createHTML(postData)
{

    var ourHTMLString='';

   /* for(i=0;i<postData.length;i++)
    {
        ourHTMLString+= '<h2>'+ postData[i].defaults.infos + '</h2>';
        ourHTMLString+=postData[i].firstSceneId;
    }*/
    ourHTMLString = '<h4>Hotspot position values from Hello world.json file </h4>'
    //ourHTMLString+= '<br> <p> RotateX =' + postData.scenes[2].infos[0].rotateX +'</p> <br>'
    //ourHTMLString+= '<p> RotateY =' + postData.scenes[2].infos[0].rotateY +'</p>'

    ourHTMLString+= '<br> <p> RotateX =' + document.getElementById("title").value +'</p> <br>'
    ourHTMLString+= '<p> RotateY =' + document.getElementById("content").value +'</p>'

    restapicontainer.innerHTML=ourHTMLString;

//POST request hardcoded value for JSON file

    var createPost = new XMLHttpRequest();

   /* var ourPostData = {
        "postData.scenes[2].infos[0].rotateX": "20",
        "postData.scenes[2].infos[0].rotateY": "20",
        //"status" : "publish"

    }*/



    //postData.scenes[2].infos[0].rotateX="50"; getElementById("title");
    //postData.scenes[2].infos[0].rotateY="50"; getElementById("content");


postData.scenes[2].infos[0].rotateX= document.getElementById("title").value;
postData.scenes[2].infos[0].rotateY= document.getElementById("content").value;

//Emedia site link for REST APIs
    createPost.open("POST", "https://emedia.rmit.edu.au/bagwanhealth/wp-content/themes/bagwan_health/scorm/vwp/receive_update.php");
        //Extra security need to code with nonce value in .php file its being called from
        //createPost.setRequestHeader("X-WP-NONCE",);
        createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        createPost.send(JSON.stringify(postData, null, 2));
        //createPost.onreadystatechange =function(){
          //  if(createPost.readyState == 4){

            //    if(createPost.status == 201) {


                    console.log("successfully updated");

              //  }
            //}
        //}
}





/* Uncomment below code only to test with Node on local environment
var quickAddButton = document.querySelector("#quick-add-button");

if(quickAddButton)
{
    var ourPostData = {
        "editingPostData.scenes[2].infos[0].rotateX": document.querySelector('.admin-quick-add [name="title"]').value,
        "editingPostData.scenes[2].infos[0].rotateY": document.querySelector('.admin-quick-add [name="content"]').value,
        "status" : "publish"

    }

    quickAddButton.addEventListener("click", function(){
        var createPost = new XMLHttpRequest();
        createPost.open("POST", 'https://localhost/wordpress481/wp-content/VR-Editing-master/public/static_assets/hello-world.json')
        //Extra security need to code with nonce value in .php file its being called from
        //createPost.setRequestHeader("X-WP-NONCE",);
        createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        createPost.send(JSON.stringify(ourPostData));
    });

}
*/
