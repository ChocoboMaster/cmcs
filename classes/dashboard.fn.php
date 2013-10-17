<?php
	function folderSize($path){
	  if(!file_exists($path)) return 0;
	  if(is_file($path)) return filesize($path);
	  $ret = 0;
	  foreach(glob($path."/*") as $fn)
		$ret += folderSize($fn);
	  return $ret;
	}

	function formatBytes($filesize){
		if ($filesize<1048676)
			RETURN number_format($filesize/1024,1) . " KB";
		if ($filesize>=1048576 && $filesize<1073741824)
			RETURN number_format($filesize/1048576,1) . " MB";
		if ($filesize>=1073741824 && $filesize<1099511627776)
			RETURN number_format($filesize/1073741824,2) . " GB";
		if ($filesize>=1099511627776)
			RETURN number_format($filesize/1099511627776,2) . " TB";
	}

?>