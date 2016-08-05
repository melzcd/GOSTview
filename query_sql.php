<?php
error_reporting(E_ALL); 

// 19 ГОСТ
$query_list_gost19 = ("
	SELECT
		`gost_id`,
		`gost_number`,
		`gost_name`,
		`content_name`,
		`gost_upload_name`,
		`gost_text`,
		`gost_comment`

		FROM
		gost
		Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
		gost_type = 19"
		);
//ГОСТ 34		
$query_list_gost34 = ("
		SELECT
			`gost_id`,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment`

		FROM
			gost
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
			gost_type = 34"
		);
// ГОСТ 2		
$query_list_gost2 = ("
		SELECT
			`gost_id`,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment`

		FROM
			gost
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
			gost_type = 2"
		);
// ГОСТ Р		
$query_list_gostR = ("
		SELECT
			`gost_id`,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment`

		FROM
			gost
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
			gost_type = 77"
		);
// ГОСТ Избранный старый		
$query_list_gostFavOld = ("
		SELECT 	
			gost.gost_id,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment` 
		FROM gost 
			left outer join fav on fav.gost_id = gost.gost_id 
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE 
			user_id = ?"
		);	
		
	// Вывод ГОСТа по ID	
$query_view_gost = ("
		SELECT
			`gost_id`,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_text`,
			`gost_comment`

		FROM
			gost
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
			gost_id = ?"
		);		

// ГОСТ Избранный старый новый
$query_list_gostFav = ("
		SELECT 	
			gost.gost_id,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment` 
		FROM gost 
			left outer join fav on fav.gost_id = gost.gost_id 
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE 
			user_id = :user_id")















		
?>			