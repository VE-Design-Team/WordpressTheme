<script>
	function displaySection(prop) {
		let sections = document.querySelectorAll(".add-section .section-data");
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
		let roomIds = [];
		let rooms = configData.scenes;
		let len = rooms.length;
		let selectRoom, bkgSelectControl;
		switch (prop) {
			case ("room"):
				<?php $files = glob('VR/public/static_assets/360_images/*.{jpg,gif,png}', GLOB_BRACE); ?>
				let bgImages = <?php echo json_encode($files); ?>;
				bkgSelectControl = document.getElementById("roomImg");
				populateImageOptions(bkgSelectControl, bgImages, '360_images');
				break;
			case ("nav-data"):
				selectRoom = document.getElementById("selectRoom");
				break;
			case ("hotspot"):
				<?php $files = glob('VR/public/static_assets/hotspot_images/*.{jpg,gif,png}', GLOB_BRACE); ?>
				let hotspotImages = <?php echo json_encode($files); ?>;
				let hotspotImageControl = document.getElementById("hotspotImage");
				populateImageOptions(hotspotImageControl, hotspotImages,'hotspot_images');
				selectRoom = document.getElementById("selectRoomWithHotSpot");
				break;
		}

		if (selectRoom && selectRoom.options.length === 1) {
			for (i = 0; i < len; i++) {
				let roomName = rooms[i].id;
				roomIds.push[roomName];
				let option = document.createElement("OPTION");
				option.innerHTML = roomName;
				option.value = roomName;
				selectRoom.options.add(option);
			}
		}
	}

	function updateDestRoomOptions(options) {
		let selectedRoom = options.value;
		let destRoom = document.getElementById("selectDestRoom");
		let selectRooms = document.getElementById("selectRoom");
		destRoom.innerHTML = selectRooms.innerHTML;
		let len = destRoom.length;
		for (let i = 0; i < len; i++) {
			if (destRoom.options[i].value === selectedRoom)
				destRoom.remove(i);
			break;
		}

		console.log(selectedRoom);
	}

	function updateVRJson(controlName) {
		let getCurrentConfig = new XMLHttpRequest();
		getCurrentConfig.open('GET', 'https://emedia.rmit.edu.au/bagwanhealth/VR/public/static_assets/hello-world.json');
		getCurrentConfig.onload = function() {
			if (getCurrentConfig.status >= 200 && getCurrentConfig.status < 400) {
				let currConfigData = JSON.parse(getCurrentConfig.responseText);
				addConfigProp(currConfigData, controlName);
			} else {
				console.log("We connected to the server, but it returned an error.");
			}
		};

		getCurrentConfig.onerror = function() {
			console.log("Connection error");
		};

		getCurrentConfig.send();

	}

	function addConfigProp(configData, controlName) {
		console.log(configData);
		switch (controlName) {
			case "room":
				console.log("room");
				let roomId = document.getElementById("roomId").value;
				let roomImage = document.getElementById("roomImg").value;
				let newRoom = {
					"id": roomId,
					"photopanos": [{
						"src": roomImage,
						"rotateY": 150
					}],
					"navs": [],
					"infos": []
				}
				configData["scenes"].push(newRoom);
				break;
			case "nav-data":
				let fromRoom = document.getElementById("selectRoom").value;
				let toRoom = document.getElementById("selectDestRoom").value;

				configData["scenes"].forEach((room, index) => {
					if (!room.navs) {
						room.navs = [];
					}
					if (room.id === fromRoom) {
						console.log(room.navs.to);
						let nav = {
							"to": toRoom,
							"txt": toRoom,
							"rotateY": 45
						}
						room.navs.push(nav);
						configData["scenes"][index] = room;
					}
				})

				break;
			case "hotspot":
				console.log("hotspot");
				let roomName = document.getElementById("selectRoomWithHotSpot").value;
				let rotateX = document.getElementById("hotspotX").value;
				let rotateY = document.getElementById("hotspotY").value;
				let hotspotHeader = document.getElementById("hotspotHeader").value;
				let hotspotContent = document.getElementById("hotspotContent").value;
				let hotspotImage = document.getElementById("hotspotImage").value;
				let extUrlName = document.getElementById("extLinkName").value;
				let extUrl = document.getElementById("extLinkValue").value;
				if(!hotspotHeader || hotspotHeader.trim().length === 0) {
					alert("Header is a required field. Please provide a value");
					return;
				}
				let info = {
					"card": [{
							"type": "image",
							"src": hotspotImage
						}, {
							"type": "header",
							"txt": hotspotHeader
						},
						{
							"type": "content",
							"txt": hotspotContent
						},
						{
							"type": "row",
							"buttons": [

							]
						}
					],
					"rotateX": rotateX,
					"rotateY": rotateY
				}
				if (extUrl) {
					info.card[3].buttons.push({
						"txt": extUrlName || "Link",
						"uri": extUrl
					})
				}
				configData["scenes"].forEach(room => {
					if (room.id === roomName) {
						room.infos.push(info);
					}
				})
				break;
		}
		updateVRConfigOnServer(configData);
	}
</script>

<br>
<div class="add-section">
	<h3>Add new properties.</h3>


	<button id="roomDetails" onclick="displaySection('room')">Add a new room</button>
	<button id="navDetails" onclick="displaySection('nav-data')">Add Navigation</button>
	<button id="hotspotdetails" onclick="displaySection('hotspot')">Add a Hotspot</button>

	<div id="room" class="section-data room-details">
		<label>Name: </label><input id="roomId" type="text" />
		<label>Image: </label><select name="room image" id="roomImg">
			<option value="/360_images/shutterstock_dr office.jpg">--Please choose an option--</option>
		</select>
		<div>
			<button id="addRoom" onclick="updateVRJson('room')">Update VR</button>
		</div>
	</div>
	<div id="nav-data" class="nav-details section-data hide">
		<label> Select Room: </label>
		<select id="selectRoom" onchange="updateDestRoomOptions(this)">
			<option value="">--Select a room--</option>
		</select>
		<label> Select Destination Room: </label>
		<select id="selectDestRoom">
			<option value="">--Select destination room--</option>
		</select>
		<div>
			<button id="addRoom" onclick="updateVRJson('nav-data')">Update VR</button>
		</div>
	</div>
	<div id="hotspot" class="hotspot-details section-data hide">
		<label> Select Room: </label>
		<select id="selectRoomWithHotSpot">
			<option value="">--Please choose an option--</option>
		</select>
		<div><label>Hotspot Card Image ::</label>
			<select id="hotspotImage">
				<option value="">--Select an image--</option>
			</select>
		</div>
		<div><label>Header :: </label><input id="hotspotHeader" type="text" /></div>
		<div><label>Content :: </label><textarea id="hotspotContent" type="text" ></textarea></div>
		<div><label>RotateX :: </label><input id="hotspotX" type="number"></div>
		<div><label>RotateY :: </label><input id="hotspotY" type="number"></div>
		<div>
			<label>ExtLink Name :: </label><input id="extLinkName" type="text">
</div>
			<div><label>ExtLink URL :: </label><input id="extLinkValue" type="text"></div>
		<div>
			<button id="addHotspot" onclick="updateVRJson('hotspot')">Add hotspot</button>
		</div>
	</div>

</div>


<!-- content ----------------------------------->