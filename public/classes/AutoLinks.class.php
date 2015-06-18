<?php

class AutoLinks {
	private $_inputPath;
	private $_realInputPath;
	private $_allowedExtensions = array("pdf","docx","doc","xlsx","xls");
	private $_includeExtension = false;
	private $_itemsToShow = 999;
	private $_thumbnailPath = "";
	private $_realThumbnailPath = "";
	private $_htmlTemplate = '<li><a href="|LINK|" class="linkClass">|TITLE|</a></li>';
	private $_order = "DESC";
	private $_showExtension = false;
	private $_error = "";
	private $_defaultThumb = 'default.png'; // add this file to thumbnailPath folder or inputPath folder;
	
	public function __construct($path=".") {
		$this->setInputPath($path);
		
		// ESSENTIAL - path of source files
		/* htmlTemplate can include th following placeholders:
			|LINK|
			|TITLE| (generated from filename)
			|THUMB|
		*/
		
		/* example templates
			TEXT LIST
			<li><a href="|LINK|" class="linkClass">|TITLE|</a></li>';
			THUMBS
			<DIV class="al_item"><A href="|LINK|" class="al_link"><IMG SRC="|THUMB|" class="al_thumb"><BR>|TITLE|</A></DIV>
			THUMB WITH TIMTHUMB
			<DIV class="al_item"><A href="|LINK|" class="al_link"><IMG SRC="includes/timthumb.php?src=|THUMB|&w=200&h=300" class="al_thumb"><BR>|TITLE|</A></DIV>
		*/
	}
	
	private function _stripSlashes($path) {
		$path = rtrim($path, '\\');
		$path = rtrim($path, '/');
		return $path;
	}
	
	public function setInputPath($path) {
		//$this->_inputPath = $this->_stripSlashes($path);
		$this->_inputPath = $path;
		$this->_realInputPath = $this->_getRealPath($this->_inputPath);
	}
	public function setDefaultThumb($file) {
		$this->_defaultThumb = urlencode($file);
	}
	private function _getRealPath($path){
		echo "<!-- Path = ".$path." -->";
		if(substr($path,0,1)=="/") {
			$path = substr($path,1);
		}
		$path = realpath($path);
		//$path = "C:\\Inetpub\\wwwroot\\".$path;
		echo "<!-- Real Path = ".$path." -->";
		return $path;
	}
	public function setAllowedExtensions($ext) {
		$this->_allowedExtensions = array($ext);	
	}
	public function setThumbnailPath($path) {
		//$this->_thumbnailPath = $this->_stripSlashes($path);
		$this->_thumbnailPath = $path;
		$this->_realThumbnailPath = $this->_getRealPath($this->_thumbnailPath);	
	}
	public function setItemsToShow($items) {
		$this->_itemsToShow = $items;	
	}
	public function setShowExtension($show) {
		if($show===true || $show==1 || strToLower(substr($show." ",0,1))=="y") {
			$this->_showExtension = true;	
		}
		if($show===false || $show==0 || strToLower(substr($show." ",0,1))=="n") {
			$this->_showExtension = true;	
		}
	}
	public function setHtmlTemplate($html) {
		if($html!="" || $html!=null) {
			$this->_htmlTemplate = $html;	
		}
	}
	public function getInputPath(){
		return $this->_inputPath;
	}
	public function setOrder($order) {
		if(strToLower(substr($order." ",0,1))=="d" || substr($order." ",0,1)=="0") {
			$this->_order = "DESC";
		}
		if(strToLower(substr($order." ",0,1))=="a" || substr($order." ",0,1)=="1") {
			$this->_order = "ASC";
		}
	}

	private function _checkDirectory($path) {
		$path = $this->_stripSlashes($path);
		if (file_exists($path)) {
			if(is_dir($path)) {
				return true;	
			}
		}
		return false;
	}

	public function getHtml() {
		if($this->_checkDirectory($this->_realInputPath)) {
		}
		else
		{
			$this->_error = "Unable to return links due to invalid input path";
			return $this->_error($this->_error);
		}
		
		// check if thumbnails wanted
		if ($this->_thumbnailPath!="") {
			// check path exists
			if ($this->_checkDirectory($this->_realThumbnailPath)===false) {
				$this->_error = "Unable to return links due to invalid thumbnail path";
				return $this->_error($this->_error);
			}	
		}

		$path = $this->_realInputPath;

		// loop through folders
		$html = "";
		if($this->_order == "DESC") {
			$files = scandir($path,1);	
		}
		else
		{
			$files = scandir($path);	
		}
		
		$array_counter = 1;
		foreach($files as $file) {
			if($array_counter<=$this->_itemsToShow) {
				if ($this->_checkFile($this->_realInputPath.'/'.$file)) {
					if($this->_checkExtension($file)) {
						$html_temp = $this->_htmlTemplate;
						
						$html_temp = str_replace("|LINK|", $this->_inputPath.'/'.$file, $html_temp);
						$html_temp = str_replace("|TITLE|",$this->_getTitle($file), $html_temp);
						if($this->_thumbnailPath==""){
							$this->_thumbnailPath = $this->_inputPath; 
						}
						if($this->_getThumbnail($file)) {
							$html_temp = str_replace("|THUMB|",$this->_thumbnailPath."/".$this->_getThumbnail($file), $html_temp);	
											}
						else
						{
							if($this->_thumbnailPath=="") {
								$html_temp = str_replace("|THUMB|",$this->_inputPath."/".$this->_defaultThumb, $html_temp);
							}
							else
							{
								$html_temp = str_replace("|THUMB|",$this->_thumbnailPath."/".$this->_defaultThumb, $html_temp);
							}
								
						}
						
						$html.=$html_temp."\n";
						$array_counter++;
					}
				}
			}
		}
		if($html=="") {
			$this->_error = "No results found";
			$html = $this->_error($this->_error);
		}
		return $html;
	}
	
	private function _error($error) {
		return "<!-- ".$this->_error." -->";	
	}
	
	private function _checkFile($file) {
		if (file_exists($file)) {
			if(is_file($file)) {
				if(strpos($file,"~$")===false) {
					return true;	
				}
			}
		}
		return false;
	}
	
	private function _checkExtension($file) {
		$ext_array = explode(".", $file);
		$extension = end($ext_array);
		if (in_array(strtolower($extension), $this->_allowedExtensions)) {
			return true;
		}
		return false;
	}
	
	private function _getTitle($file) {
		$ext_array = explode(".", $file);
		$extension = end($ext_array);
		if (in_array(strtolower($extension), $this->_allowedExtensions)) {
			$title =  preg_replace("/\\.[^.\\s]{3,4}$/", "", $file);
			$extension = str_replace($file,$title,$file);
			if (strpos($title,"~")>0) {
				$titleA = explode("~",$title);
				$title = $titleA[1];
			}
			$title = str_replace("@","<br />",$title);
							
			if ($this->_showExtension) {
				$title.=$extension;	
			}
		}
		return $title;
	}
	
	private function _getThumbnail($file) {
		$file = preg_replace("/\\.[^.\\s]{3,4}$/", "", $file);
		$path = $this->_realThumbnailPath;
		if($path==""){
			$path = $this->_realInputPath;
		}
		$thumb="";
		if(is_file($path."/".$file.".jpg")) {
			$thumb=$file.".jpg"; 	
		}
		else if(is_file($path."/".$file.".jpeg")) {
			$thumb=$file.".jpeg"; 	
		}
		else if(is_file($path."/".$file.".gif")) {
			$thumb=$file.".gif"; 	
		}
		else if(is_file($path."/".$file.".png")) {
			$thumb=$file.".png"; 	
		}
		
		if($thumb!="") {
			return urlencode($thumb);
		}
		else
		{
			return urlencode($this->_defaultThumb);
		}
	}
}


?>