<?php

// for videos folder MUST contain video.flv and thumb.jpg

// gallery caption must be caption.txt or foldername is used

// image caption is {filename].txt or filename is used

// Use @ character to force line breaks in title, otherwise text will automatically break

// Use ~ to seperate sorter prefix from caption

// options
$caption_per_gallery = true; // show one caption per gallery, stored in caption.txt
$caption_per_picture = false; // show a caption per image stored in filename.txt (if word link prefixed to filename) or filename

// check to see if override gallery folder is specified using PHP get ( gallery.php?gallery_path=auto&gallery_root=galleries )
if ($gallery_path=="") {
	//  assume path is auto
	$gallery_path="auto";
}

if ($gallery_root=="") {
	// assume path is galleries
	$gallery_root="galleries";
}

// join root and path to get complete gallery path
$gallery_path = str_replace("//","/",($gallery_root."/".$gallery_path));
// set blank output file
$html = "";

// check top folder exists
if(is_dir($gallery_path)){
	// loop through all subfolders looking for galleries
	$handle = opendir($gallery_path);
	$folders = array();
	$counter = 0;
	while (false !== ($folder = readdir($handle))){
		// found a folder
		if(is_dir("$gallery_path/$folder")) {
			// ignore dots
        	if($folder != '.' && $folder != '..') {
				// add to folder array
				$folders[] = $folder;
				// keep count of number of folders found
				$counter++;
        	}
    	}
	}
	closedir($handle);
}
	
// any galleries found?
if ($counter>0) {
	// sub folders found, so loop through them
		
	foreach ($folders as $dir) {
		// check folder exists
		if(is_dir("$gallery_path/$dir")){
				
			$video_link="";
			$video_thumb="";
			$video_dir="";
			$is_video=false;
				
			// check for video folder
			if (file_exists("$gallery_path/$dir/video.flv")) {
				// video file
				if (file_exists("$gallery_path/$dir/thumb.jpg")) {
					$video_link = "$gallery_path/$dir/video.flv";
					$video_thumb = "$gallery_path/$dir/thumb.jpg"; 
					$video_dir = $dir;
					$video_caption = "";
					$video_title="";
					
					$video_title = str_replace("@","<BR />",$video_dir);
					if (strpos($video_title,"~")>0) {
						$dirA = explode("~",$video_title);
						$video_title = $dirA[1];
					}	
					
					// is a caption present?
					if (file_exists("$gallery_path/$dir/caption.txt")) {
						$fh = fopen("$gallery_path/$dir/caption.txt",'r');
						$video_caption = fread($fh, filesize("$gallery_path/$dir/caption.txt"));
						fclose($fh);
					}
					else
					{
						$video_caption = $video_title;
					}
					
					// output html to file
					$html_temp="";
					$html_temp.= '<div class="gallery">'."\n";
					$html_temp.= '<div class="gallery_spacing">'."\n";
					$html_temp.= '<img src="/'."$gallery_path/$video_dir/thumb.jpg".'" class="gallery_width gallery_height">'."\n";
					$html_temp.= '</div>'."\n";
					$html_temp.= '<div class="gallery_trans">'."\n";
					$html_temp.= '<div class="gallery_text">'.$video_title.'</div>'."\n";
					$html_temp.= '</div>'."\n";
					$html_temp.= '<div class="play_button gallery_link gallery_width gallery_height"></div>'."\n";
					$html_temp.= '<div class="gallery_link gallery_width gallery_height"><a href="video/video.php?filename='.$video_link.'&title='.$video_dir.'" class="fancyvideo click_block" style="font-size:1000px;">&nbsp;</a></div>'."\n";
					$html_temp.= '</div>'."\n";
					
					$html = $html_temp.$html;
				}
			}
			else
			{
				// image gallery - check for thumbnail
				$thumbnail = "";
				$handle = opendir("$gallery_path/$dir");
				while (false !== ($picture = readdir($handle)) and $thumbnail=="") {
					if  ((strpos(strtolower("$picture"),".jpg")>0) or (strpos(strtolower("$picture"),".jpeg")>0)) {
						$thumbnail = "$gallery_path/$dir/$picture";
					}
				}
				closedir($handle);
					
				//sv or fancybox ?	
				if (file_exists("$gallery_path/$dir/index.html")) {
					// sv bulider
					$gallery_link ="$gallery_path/$dir/index.html";
					if ($thumbnail==="") {
						// if no thumb, pick one
						if(is_dir("$gallery_path/$dir/thumbs")){
							// loopthrough and pic thumb
							$thumbnail = "";
							$handle = opendir("$gallery_path/$dir/thumbs");
							while (false !== ($picture = readdir($handle)) and $thumbnail=="") {
								if (strpos(strtolower("$picture"),".jpg")>0) {
									$thumbnail = "$gallery_path/$dir/thumbs/$picture";
								}
							}
							closedir($handle);
						}
					}
					
					// extract title
					$gallery_name = $dir;
					if (strpos($gallery_name,"~")>0) {
						$dirA = explode("~",$gallery_name);
						$gallery_name = $dirA[1];
						$gallery_name = str_replace("@","<BR />",$gallery_name);
					}
					if ($thumbnail!="") {
						$html.='<div class="gallery"><div class="gallery_spacing"><img src="'.$thumbnail.'" class="gallery_width gallery_height" /></div><div class="gallery_trans"><div class="gallery_text">'.$gallery_name.'</div></div><div class="gallery_link gallery_width gallery_height"><a href="'.$gallery_link.'" class="fancygallerysv click_block" style="font-size:1000px;">&nbsp;</a></div></div>';	
					}
				}
				else
				{
					// must be a fancybox gallery
					// so loop through and find files
					$handle = opendir("$gallery_path/$dir");
					// set up array to hold all picture filenames
					$pictures = array();
					$gallery_name = $dir;
					$image_caption="";
					$counter = 0;
					$thumbnail="";
					$gallery_caption="";
					// loop while there are image files
					while (false !== ($picture = readdir($handle))) {
						// ignore subfolders
						if (is_dir("$gallery_path/$dir/$picture")===false) {
							// check for right file format
							if ((strpos(strtolower("$gallery_path/$dir/$picture"),".jpg")>0) || (strpos(strtolower("$gallery_path/$dir/$picture"),".jpeg")>0) || (strpos(strtolower("$gallery_path/$dir/$picture"),".png")>0)) {
								// check to see if its a desgnated thumbnail
								if (strpos(strtolower("$gallery_path/$dir/$picture"),"thumb")>0) {
									// set thumbnail name
									$thumbnail = $picture;
								}
								else
								{
									// add to pictures array
									$pictures[] = $picture;
									$counter++;
								}
							}
						}
					}
				
					// work out title positioning
					$gallery_name = str_replace("@","<BR />",$gallery_name);
					if (strpos($gallery_name,"~")>0) {
						$dirA = explode("~",$gallery_name);
						$gallery_name = $dirA[1];
					}	
					
					// check for long caption
					$image_caption = "";
					
					if (file_exists("$gallery_path/$dir/caption.txt")) {
						// link file exists so read text from it
						$fh = fopen("$gallery_path/$dir/caption.txt",'r');
						$image_caption = fread($fh, filesize("$gallery_path/$dir/caption.txt"));
						fclose($fh);
					}
					
					$gallery_caption = $image_caption;
					
					// output thumbnail
					if ($thumbnail!="") {

						// extract image caption

						// extract caption if required
						if ($gallery_caption=="") {
							// extract image caption

							// check for caption link
							$image_caption = $pictures[0];
							$image_caption = str_ireplace(".jpg","",$image_caption);
							$image_caption = str_ireplace(".jpeg","",$image_caption);
							$image_caption = str_ireplace(".png","",$image_caption);
							$image_caption .= ".txt";
							
							if (file_exists("$gallery_path/$dir/$image_caption")) {
								// linked caption found	
								$fh = fopen("$gallery_path/$dir/$image_caption",'r');
								$image_caption = fread($fh, filesize("$gallery_path/$dir/$image_caption"));
								fclose($fh);					
							}
							else
							{
								// get caption from filename
								if (strpos($image_caption,"~")>0) {
									$dirA = explode("~",$image_caption);
									$image_caption = $dirA[1];
								}
								$image_caption = str_ireplace(".txt","",$image_caption);
							}
						}
						else
						{
							$image_caption = $gallery_caption;
						}
						
						$html_temp="";
					
						$html_temp.= '<div class="gallery">'."\n";
						$html_temp.= '<div class="gallery_spacing">'."\n";
						$html_temp.= '<img src="/'."$gallery_path/$dir/$thumbnail".'" class="gallery_width gallery_height" />'."\n";
						$html_temp.= '</div>'."\n";
						$html_temp.= '<div class="gallery_trans">'."\n";
						$html_temp.= '<div class="gallery_text">'.$gallery_name.'</div>'."\n";
						$html_temp.= '</div>'."\n";
						$html_temp.= '<div class="gallery_link gallery_height gallery_width"><a href="/'."$gallery_path/$dir/$pictures[0]".'" rel="'.$dir.'" title="'.$image_caption.'" class="fancygallery click_block" style="font-size:1000px;">&nbsp;</a></div>'."\n";
						$html_temp.= '</div>'."\n";
						
					}
					else
					{
						// no thumbnail, so just use first image
						
						// extract caption if required
						if ($gallery_caption=="") {
							// extract image caption

							// check for caption link
							$image_caption = $pictures[0];
							$image_caption = str_ireplace(".jpg","",$image_caption);
							$image_caption = str_ireplace(".jpeg","",$image_caption);
							$image_caption = str_ireplace(".png","",$image_caption);
							$image_caption .= ".txt";
							
							if (file_exists("$gallery_path/$dir/$image_caption")) {
								// linked caption found	
								$fh = fopen("$gallery_path/$dir/$image_caption",'r');
								$image_caption = fread($fh, filesize("$gallery_path/$dir/$image_caption"));
								fclose($fh);					
							}
							else
							{
								// get caption from filename
								if (strpos($image_caption,"~")>0) {
									$dirA = explode("~",$image_caption);
									$image_caption = $dirA[1];
								}
								$image_caption = str_ireplace(".txt","",$image_caption);
							}
						}
						else
						{
							$image_caption = $gallery_caption;
						}
						
						$html_temp.= '<div class="gallery">'."\n";
						$html_temp.= '<div class="gallery_spacing">'."\n";
						$html_temp.= '<img src="/'."$gallery_path/$dir/$pictures[0]".'" class="gallery_height gallery_width">'."\n";
						$html_temp.= '</div>'."\n";
						$html_temp.= '<div class="gallery_trans gallery_width">'."\n";
						$html_temp.= '<div class="gallery_text gallery_width">'.$gallery_name.'</div>'."\n";
						$html_temp.= '</div>'."\n";
						$html_temp.= '<div class="gallery_link gallery_width gallery_height"><a href="/'."$gallery_path/$dir/$pictures[0]".'" rel="'.$dir.'" title="'.$image_caption.'" class="fancygallery click_block" style="font-size:1000px;">&nbsp;</a></div>'."\n";
						$html_temp.= '</div>'."\n";
					}
					
					$html = $html_temp.$html;
					
					echo $html;
					$html ="";
						
					$image_caption="";
					
					// create rest of gallery files
					$html.= '<div style="display:none;">';
					for ($i=1; $i<$counter; $i++) {
						if ($gallery_caption=="") {
							// extract image caption

							// check for caption link
							$image_caption = $pictures[$i];
							$image_caption = str_ireplace(".jpg","",$image_caption);
							$image_caption = str_ireplace(".jpeg","",$image_caption);
							$image_caption = str_ireplace(".png","",$image_caption);
							$image_caption .= ".txt";
							
							if (file_exists("$gallery_path/$dir/$image_caption")) {
								// linked caption found	
								$fh = fopen("$gallery_path/$dir/$image_caption",'r');
								$image_caption = fread($fh, filesize("$gallery_path/$dir/$image_caption"));
								fclose($fh);					
							}
							else
							{
								// get caption from filename
								if (strpos($image_caption,"~")>0) {
									$dirA = explode("~",$image_caption);
									$image_caption = $dirA[1];
								}
								$image_caption = str_ireplace(".txt","",$image_caption);
							}
						}
						else
						{
							$image_caption = $gallery_caption;
						}
											
						$html.= '<a class="fancygallery" rel="'.$dir.'" title="'.$image_caption.'" href="/'."$gallery_path/$dir/$pictures[$i]".'"></a>';
					}
					$html.= '</div>';
					
				}
			}
		}	
	}
}

echo $html;
	


?>
