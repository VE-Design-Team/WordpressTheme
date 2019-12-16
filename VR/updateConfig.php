<script>
	function displayUpdateSection(prop) {
		let sections = document.querySelectorAll(".update-section .section-data");
		let i;
		let length = sections.length;
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
				bkgSelectControl = document.getElementById("newRoomImg");
				populateImageOptions(bkgSelectControl, bgImages, '360_images');
				selectRoom = document.getElementById("selectRoomToUpdate");
				break;
			case ("nav-data"):
				selectRoom = document.getElementById("selectRoomToUpdateNav");
				break;
			case ("hotspot"):
				<?php $files = glob('VR/public/static_assets/hotspot_images/*.{jpg,gif,png}', GLOB_BRACE); ?>
				let hotspotImageControl = document.getElementById("hotspotBgImage");				
				let hotspotImages = <?php echo json_encode($files); ?>;
				populateImageOptions(hotspotImageControl, hotspotImages, 'hotspot_images');
				selectRoom = document.getElementById("updateRoomwithHotspot");
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

	function updateDestOptions(options) {
		let selectedRoom = options.value;
		let destRoom = document.getElementById("selectNewDestRoom");
		let selectRooms = document.getElementById("selectRoomToUpdateNav");
		destRoom.innerHTML = selectRooms.innerHTML;
		let len = destRoom.length;
		for (let i = 0; i < len; i++) {
			if (destRoom.options[i].value === selectedRoom)
				destRoom.remove(i);
			break;
		}

		console.log(selectedRoom);
	}

	function populateAvailableHotspots(options) {
		let selectedRoom = options.value;
		let hotspotOptions = document.getElementById("hotspotsAvailable");
		let headerTxt = document.getElementById("updatehotspotHeader");
		let contentTxt = document.getElementById("updateHotspotContent");
		let rotateX = document.getElementById("updateHotspotX");
		let rotateY = document.getElementById("updateHotspotY");
		let updateExtLinkURL = document.getElementById("updateExtLinkURL");
		let updateExtLinkName = document.getElementById("updateExtLinkName");
		hotspotOptions.length = 1;
		let hotSpotHeaders = [];
		configData["scenes"].forEach((room, index) => {
			if (room.id === selectedRoom) {
				!configData["scenes"][index]["infos"].length && alert("No hotspot configured");
				configData["scenes"][index]["infos"].forEach(hotspot => {
					let card = hotspot.card;
					let info = {
						"card": card,
						"rotateX": hotspot.rotateX || 10,
						"rotateY": hotspot.rotateY || 45
					};
					for (let i = 0; i < card.length; i++) {
						if ((card[i].type) === "header") {
							let option = document.createElement("OPTION");
							option.innerHTML = card[i].txt;
							option.value = card[i].txt;
							option["data-card"] = JSON.stringify(info);
							hotspotOptions.options.add(option);
							break;
						}
					}
				})
			}
		})
	}

	function populateSelectedHotspotValues(selectedHS) {
		console.log(selectedHS);
		let info = JSON.parse(selectedHS.selectedOptions[0]["data-card"]);
		let hotspotData = info.card;
		console.log(JSON.parse(selectedHS.selectedOptions[0]["data-card"]));
		let HSImage = document.getElementById("hotspotBgImage");
		let headerTxt = document.getElementById("updatehotspotHeader");
		let contentTxt = document.getElementById("updateHotspotContent");
		let rotateX = document.getElementById("updateHotspotX");
		let rotateY = document.getElementById("updateHotspotY");
		let updateExtLinkURL = document.getElementById("updateExtLinkURL");
		let updateExtLinkName = document.getElementById("updateExtLinkName");
		hotspotData.forEach(content => {
			switch (content.type) {
				case "image":
					HSImage.value = content.src;
					break;
				case "header":
					headerTxt.value = content.txt;
					break;
				case "content":
					contentTxt.value = content.txt;
					break;
				case "row":
					if (content.buttons.length > 0) {
						updateExtLinkURL.value = content.buttons[0].uri;
						updateExtLinkName.value = content.buttons[0].txt;
					}
					break;
			}
		});
		rotateX.value = info.rotateX;
		rotateY.value = info.rotateY;
	}


	function updateConfigProp(controlName) {
		let getCurrentConfig = new XMLHttpRequest();
		getCurrentConfig.open('GET', 'https://emedia.rmit.edu.au/bagwanhealth/VR/public/static_assets/hello-world.json');
		getCurrentConfig.onload = function() {
			if (getCurrentConfig.status >= 200 && getCurrentConfig.status < 400) {
				let configData = JSON.parse(getCurrentConfig.responseText);
				updateConfig(configData, controlName);
			} else {
				console.log("We connected to the server, but it returned an error.");
			}
		};

		getCurrentConfig.onerror = function() {
			console.log("Connection error");
		};

		getCurrentConfig.send();

	}

	function updateConfig(configData, controlName) {
		console.log(configData);
		switch (controlName) {
			case "room":
				console.log("room");
				let selectedRoom = document.getElementById("selectRoomToUpdate").value;
				let roomImage = document.getElementById("newRoomImg").value;
				configData["scenes"].forEach((room, index) => {
					if (room.id === selectedRoom) {
						configData["scenes"][index]["photopanos"][0]["src"] = roomImage;
					}
				})
				break;
			case "nav-data":
				let fromRoom = document.getElementById("selectRoomToUpdateNav").value;
				let toRoom = document.getElementById("selectNewDestRoom").value;
				let rotateNavX = document.getElementById("rotateNavX").value;
				let rotateNavY = document.getElementById("rotateNavY").value;

				let updatedNav = {
					"to": toRoom,
					"txt": toRoom,
					"rotateY": rotateNavX || 45,
					"rotateX": rotateNavY || 10
				}

				configData["scenes"].forEach((room, roomIndex) => {
					if (room.id === fromRoom) {
						let navRooms = room.navs || [];
						if (!navRooms.length) {
							room.navs.push(updatedNav);
						} else {
							navRooms.forEach((destRoom, index) => {
								if (destRoom.to === toRoom) {
									configData["scenes"][roomIndex]["navs"][index] = updatedNav;

								}
							})
						}
					}
				})

				break;
			case "hotspot":
				let roomName = document.getElementById("updateRoomwithHotspot").value;
				let rotateX = document.getElementById("updateHotspotX").value || 10;
				let rotateY = document.getElementById("updateHotspotY").value || 45;
				let updatehotspotHeader = document.getElementById("updatehotspotHeader").value;
				let updateHotspotContent = document.getElementById("updateHotspotContent").value;
				let updateExtLinkURL = document.getElementById("updateExtLinkURL").value || "";
				let updateExtLinkName = document.getElementById("updateExtLinkName").value || "";
				let bgImage = document.getElementById("hotspotBgImage").value;
				let selectedHeader = document.getElementById("hotspotsAvailable").value;
				let info = {
					"card": [{
							"type": "image",
							"src": bgImage ? bgImage : ""
						}, {
							"type": "header",
							"txt": updatehotspotHeader
						},
						{
							"type": "content",
							"txt": updateHotspotContent
						},
						{
							"type": "row",
							"buttons": (updateExtLinkName && updateExtLinkURL) ? [{
								"txt": updateExtLinkName,
								"uri": updateExtLinkURL
							}] : []

						}
					],
					"rotateX": rotateX,
					"rotateY": rotateY
				}
				configData["scenes"].forEach((room, index) => {
					if (room.id === roomName) {
						room["infos"].forEach((hotspot, hotspotIndex) => {
							let card = hotspot.card;
							for (let i = 0; i < card.length; i++) {
								if ((card[i].type) === "header" && card[i].txt === selectedHeader) {
									configData["scenes"][index]["infos"][hotspotIndex] = info;
								}
							}

						});
					}
				});
				break;
		}
		updateVRConfigOnServer(configData);

	}
</script>

<br>
<div class="update-section">
	<h3>Update the VR.</h3>


	<button id="roomDetails" onclick="displayUpdateSection('room')">Update Room properties</button>
	<button id="navDetails" onclick="displayUpdateSection('nav-data')">Update Navigation</button>
	<button id="hotspotdetails" onclick="displayUpdateSection('hotspot')">Update Hotspot</button>

	<div id="room" class="section-data room-details">
		<label> Select Room: </label>
		<select id="selectRoomToUpdate">
			<option value="">--Please choose an option--</option>
		</select>
		<label>Image: </label><select name="room image" id="newRoomImg">
			<option value="/360_images/shutterstock_dr office.jpg">--Please choose an option--</option>
		</select>
		<div>
			<button id="addRoom" onclick="updateConfigProp('room')">Update VR</button>
		</div>
	</div>
	<div id="nav-data" class="nav-details section-data hide">
		<label> Select Room: </label>
		<select id="selectRoomToUpdateNav" onchange="updateDestOptions(this)">
			<option value="">--Select Nav start point--</option>
		</select>
		<label> Select Destination Room: </label>
		<select id="selectNewDestRoom">
			<option value="">--Select nav destination--</option>
		</select>
		<div><label>RotateX ::</label><input id="rotateNavX" type="number"></div>
		<div><label>RotateY :: </label><input id="rotateNavY" type="number"></div>
		<div>
			<button id="addRoom" onclick="updateConfigProp('nav-data')">Update VR</button>
		</div>
	</div>
	<div id="hotspot" class="hotspot-details section-data hide">
		<label> Select Room: </label>
		<select id="updateRoomwithHotspot" onchange="populateAvailableHotspots(this)">
			<option value="">--Select a room--</option>
		</select>
		<select id="hotspotsAvailable" onchange="populateSelectedHotspotValues(this)">
			<option value="">--Select a hotspot to edit--</option>
		</select>
		<select id="hotspotBgImage">
			<option value="">--Select an image--</option>
		</select>
		<div><label>Header ::</label><input id="updatehotspotHeader" type="text" /></div>
		<div><label>Content :: </label><textarea id="updateHotspotContent" type="text"></textarea></div>
		<div><label>RotateX ::</label><input id="updateHotspotX" type="number"></div>
		<div><label>RotateY :: </label><input id="updateHotspotY" type="number"></div>
		<div><label>ExtLink Name:: </label><input id="updateExtLinkName" type="text"></div>
		<div><label>ExtLink URL:: </label><input id="updateExtLinkURL" type="text"></div>
		<div>
			<button id="addHotspot" onclick="updateConfigProp('hotspot')">Update hotspot</button>
		</div>
	</div>

</div>


<!-- content ----------------------------------->