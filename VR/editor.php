<head>
	<!-- Our Custom CSS -->
	<style>
		<?php include 'editor.css'; ?>
	</style>
	<script type="text/javascript" language="javascript">
		let configData = {};
		getjsonConfig();

		function getjsonConfig() {
			let getCurrentConfig = new XMLHttpRequest();
			getCurrentConfig.open('GET', 'https://emedia.rmit.edu.au/bagwanhealth/VR/public/static_assets/hello-world.json');
			getCurrentConfig.onload = function() {
				if (getCurrentConfig.status >= 200 && getCurrentConfig.status < 400) {
					configData = JSON.parse(getCurrentConfig.responseText);
				} else {
					console.log("We connected to the server, but it returned an error.");
				}
			};

			getCurrentConfig.onerror = function() {
				console.log("Connection error");
			};

			getCurrentConfig.send();
		}

		function updateVRConfigOnServer(configData) {
			let updateVRConfigPost = new XMLHttpRequest();
			updateVRConfigPost.open("POST", "https://emedia.rmit.edu.au/bagwanhealth/update.php");
			updateVRConfigPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
			updateVRConfigPost.send(JSON.stringify(configData, null, 2));

			updateVRConfigPost.onreadystatechange = function() {
				if (updateVRConfigPost.readyState > 3 && updateVRConfigPost.status == 200) {
					console.log("successfully updated");
					alert("Changes updated successfully. Please refresh the page to view the changes applied");
				}
			};
		}

		function displayCrudForm(prop) {
			let sections = document.querySelectorAll(".crud-section");
			let i;
			let length = sections.length;
			console.log(prop);
			for (i = 0; i < length; i++) {
				if (sections[i].id === prop) {
					sections[i].classList.remove('hide');
					sections[i].classList.add('show');
				} else {
					sections[i].classList.remove('show');
					sections[i].classList.add('hide');
				}
			}
		}

		function populateImageOptions(bkgSelectControl, bgImages, imagePath) {

			let length = bgImages.length;
			bkgSelectControl.options.length = 1;
			for (i = 0; i < length; i++) {
				let n = bgImages[i].lastIndexOf('/');
				let imageName = bgImages[i].substring(n + 1);
				let option = document.createElement("OPTION");
				option.innerHTML = imageName;
				option.value = `/${imagePath}/${imageName}`;
				//option.value = imagePath ? `/360_images/${imageName}` : imageName;
				bkgSelectControl.options.add(option);
			}

		}
	</script>

</head>

<body>
	<section class="header">
		<span class='logo'></span>
	</section>
	<div id="formContainer" class="contents">
		<div class="menu">
			<ul class="editor-menu">
				<li><a href="#" id="add" class="editor-option" onclick="displayCrudForm('addContent')">Add</a></li>
				<li><a href="#" id="delete" class="editor-option" onclick="displayCrudForm('deleteContent')">Delete</a></li>
				<li><a href="#" id="update" class="editor-option" onclick="displayCrudForm('updateContent')">Update</a></li>
			</ul>
		</div>
		<div class="crud-contents">
			<div id="addContent" class="crud-section show">
				<?php require('addConfig.php'); ?>
			</div>
			<div id="deleteContent" class="crud-section  hide">
				<?php require('deleteConfig.php'); ?>
			</div>
			<div id="updateContent" class="crud-section  hide">
				<?php require('updateConfig.php'); ?>
			</div>
		</div>
	</div>
</body>
<!-- content ----------------------------------->