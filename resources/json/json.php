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
