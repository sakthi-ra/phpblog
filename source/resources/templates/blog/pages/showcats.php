<?php /*
 * ###
 * PHR_PhpBlog
 * %%
 * Copyright (C) 1999 - 2012 Photon Infotech Inc.
 * %%
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ###
 */ ?>
<?php


// Are we connected to database?
if(!$getList){ die('Invalid access.');}

?>
  <div class="topic">Categories</div>
  <div class="topiccat-item">
   <ul>
<?php
	if($searchIn != NULL){ $addURL = '&searchTerm='.$searchTerm.'&searchIn='.$searchIn;}
	if(count($catList) > 0)
	{
		foreach($catList as $catID => $catName)
		{
			$getCount = mysql_fetch_row(mysql_query("SELECT COUNT(*) FROM `blogtopics` WHERE `catID`='$catID'"));
			echo '<li class="cateitem"><a href="?catID='.$catID.$addURL.'& view=blog">'.$catName.'</a> ('.$getCount[0].') </li>';
		}
	}
	?>
    </ul>
</div>     	
                
               