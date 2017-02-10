<?php
// this functions gets called in friends.php to display all of the friend in the json file


function getFriends() {
	$data = file_get_contents('../json/friends.json');
	$json = json_decode($data, true);
	foreach ($json['friends'] as $name => $values) {
		echo "
			<div class='friend-card'>
				<h5>$name</h5>
			</div>
		";
		foreach($values as $key => $value) {
			echo "
				<p class='friend-values'>
				$key
				<span class='pull-right'>
					$value
				</span>
				</p>
			";
		}
	}
}
// this function appends the submited data to the json file

function appendData() {
	$error = "<p>";
	if (isset($name) && isset($lang) && isset($title) && isset($code)) {
		$friend = array(
				'Name' => $_POST['name'],
				'Favorite Language' => $_POST['language'],
				'Title' => $_POST['title'],
				'First Code' => $_POST['code']
			);
		$jsonObject = json_encode($friend);
		file_get_contents('friend.json');
		file_put_contents('friend.json', $jsonObject, FILE_APPEND);
	} else {
		$error .= "Please fill out all the fields";
		$error .= "</p>";
	}
}



// {
// 	"friends": {
// 		"Alex": {
// 			"Favorite Language": "PHP",
// 			"Born": "12/24/1993",
// 			"First Line of Code": "1/1/2016"
// 		},
// 		"Jennifer": {
// 			"Favorite Language": "JavaScript",
// 			"Born": "1/6/1995",
// 			"First Line of Code": "1/1/2015"
// 		}
// 	}
// }
