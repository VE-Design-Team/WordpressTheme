<script>
	function displayDelSection(prop) {
		let sections = document.querySelectorAll(".delete-section .section-data");
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
				selectRoom = document.getElementById("selectRoomToDelete");
				break;
			case ("nav-data"):
				selectRoom = document.getElementById("selectSrcRoom");
				break;
			case ("hotspot"):
				selectRoom = document.getElementById("selectDelHotSpotRoom");
				break;

		}
		let optionsLen = selectRoom.options.length;
		if (selectRoom) {
			selectRoom.options.length = 1;
			selectRoom.selectedIndex = 0;
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

	function updateNavRoomOptions(options) {
		let selectedRoom = options.value;
		let destRoom = document.getElementById("selectDelDestRoom");

		destRoom.length = 0;
		configData["scenes"].forEach((room, index) => {
			if (room.id === selectedRoom) {
				let navRooms = configData["scenes"][index]["navs"];
				if (navRooms && navRooms.length > 0) {
					for (let ind = 0; ind < navRooms.length; ind++) {
						let roomName = navRooms[ind]["to"];
						let option = document.createElement("OPTION");
						option.innerHTML = roomName;
						option.value = roomName;
						destRoom.options.add(option);
					}
				} else {
					alert(`No navigation is configured for the selected room`);
				}
			}
		})
	}

	function updateHotspotOptions(options) {
		let selectedRoom = options.value;
		let deleteHotspotOptions = document.getElementById("deleteHotspotOptions");

		deleteHotspotOptions.length = 1;
		configData["scenes"].forEach((room, index) => {
			if (room.id === selectedRoom) {
				let hotspots = configData["scenes"][index]["infos"];
				if (hotspots && hotspots.length > 0) {
					let headerText = "";
					for (let ind = 0; ind < hotspots.length; ind++) {
						hotspots[ind]["card"].forEach(content => {
							if (content.type = "header") {
								let option = document.createElement("OPTION");
						option.innerHTML = content.txt || "header not present";
						option.value = headerText;
						deleteHotspotOptions.options.add(option);
							}
						})

					}
				} else {
					alert(`No hotspot is configured for the selected room`);
				}
			}
		})
	}

	function removeData(controlName) {
		let getCurrentConfig = new XMLHttpRequest();
		getCurrentConfig.open('GET', 'https://emedia.rmit.edu.au/bagwanhealth/VR/public/static_assets/hello-world.json');
		getCurrentConfig.onload = function() {
			if (getCurrentConfig.status >= 200 && getCurrentConfig.status < 400) {
				let currConfigData = JSON.parse(getCurrentConfig.responseText);
				deleteConfigProp(configData, controlName);
			} else {
				console.log("We connected to the server, but it returned an error.");
			}
		};

		getCurrentConfig.onerror = function() {
			console.log("Connection error");
		};

		getCurrentConfig.send();

	}

	function deleteConfigProp(configData, controlName) {
		console.log(configData);
		switch (controlName) {
			case "room":
				let selectedRoom = document.getElementById("selectRoomToDelete").value;
				configData["scenes"].forEach((room, index) => {
					if (room.id === selectedRoom) {
						configData["scenes"].splice(index, 1);
					}
				})
				break;
			case "nav-data":
				let fromRoom = document.getElementById("selectSrcRoom").value;
				let toRoom = document.getElementById("selectDelDestRoom").value;

				configData["scenes"].forEach((room, roomIndex) => {
					let navRooms = room.navs;
					if (room.id === fromRoom && navRooms.length > 0) {
						navRooms.forEach((destRoom, index) => {
							if (destRoom.to === toRoom) {
								console.log(destRoom);
								configData["scenes"][roomIndex]["navs"].splice(index, 1);
							}
						})
					}
				});
				break;
			case "hotspot":
				console.log("hotspot");
				let roomName = document.getElementById("selectDelHotSpotRoom").value;
				let hotspotHeader = document.getElementById("deleteHotspotOptions").value;

				configData["scenes"].forEach((room, roomIndex) => {
					if (room.id === roomName) {
						let infos = configData["scenes"][roomIndex]["infos"];
						for (let i = 0; i < infos.length; i++) {
							infos[i]["card"].forEach(content => {
								if (content.txt === hotspotHeader) {
									configData["scenes"][roomIndex]["infos"].splice(i, 1);
								}
							})
							break;
						}
					}
				})
		}

		updateVRConfigOnServer(configData);
	}
</script>

<br>
<div class="delete-section">
	<h3>Delete options</h3>


	<button id="deleteRoomDetails" onclick="displayDelSection('room')">Delete Room</button>
	<button id="deleteNavDetails" onclick="displayDelSection('nav-data')">Delete Navigation</button>
	<button id="deleteHotspotdetails" onclick="displayDelSection('hotspot')">Delete Hotspot</button>

	<div id="room" class="section-data room-details">
		<label> Select Room: </label>
		<select id="selectRoomToDelete">
			<option value="">--Please choose an option--</option>
		</select>
		<div>
			<button id="deleteRoom" onclick="removeData('room')">Update VR</button>
		</div>
	</div>
	<div id="nav-data" class="nav-details section-data hide">
		<label> Select Room: </label>
		<select id="selectSrcRoom" onchange="updateNavRoomOptions(this)">
			<option value="">--Please choose an option--</option>
		</select>
		<label> Select Destination Room: </label>
		<select id="selectDelDestRoom">
			<option value="">--Please choose an option--</option>
		</select>
		<div>
			<button id="deleteNav" onclick="removeData('nav-data')">Delete Nav</button>
		</div>
	</div>
	<div id="hotspot" class="hotspot-details section-data hide">
		<h3> Change position of hotspot </h3>
		<label> Select Room: </label>
		<select id="selectDelHotSpotRoom" onchange="updateHotspotOptions(this)">
			<option value="">--Please select a room--</option>
		</select>
		<select id="deleteHotspotOptions">
			<option value="">--Hotspot to remove--</option>
		</select>
		<button id="removeHotspot" onclick="removeData('hotspot')">Remove hotspot</button>
	</div>
</div>

</div>


<!-- content ----------------------------------->