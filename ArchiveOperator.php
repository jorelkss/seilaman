<?php  

	class ArchiveOperator{

		public function loadArchives(){
			$dt = file_get_contents("archives.txt");
			$rt_dt = explode("\n", $dt);
			return $rt_dt;
		}

		public function saveArchives($arname, $arcontent){
			if($arname != "index"){
			    $ar = fopen("archives.txt", "a");
			    fwrite($ar, "\n".$arname);
			    fclose($ar);
			}

			$ar2 = fopen($arname.".php", "w");
			fwrite($ar2, $arcontent);
			fclose($ar2);
		}
	}

?>