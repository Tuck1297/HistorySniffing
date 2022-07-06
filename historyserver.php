<html>
	<body>
		<center>
			<style>
			URL_Sizes {
				font-size: 18px;
			}
			Sentences {
				font-size: 25px;
			}
			</style>
			<?php
			$capsha_val = $_GET['capsha'];
			$test_val = 5;
			if ($capsha_val == "") {
                                Print "<Sentences>Time to choose a major...</Sentences>";
                                echo "<br>";
                                echo "<URL_Sizes><a href=https://www.stthomas.edu/academics/undergraduate/>Major Catalog</a></URL_Sizes>";
				$test_val = 0;
                        } else {
				for($x=0;$x<strlen($capsha_val);$x+=1) {
						//Print "$capsha_val[$x]";
						if($capsha_val[$x] != "G") {
							if($capsha_val[$x] != "0") {
								if($capsha_val[$x] != "i") {
									if($capsha_val[$x] != "Q") {
										if($capsha_val[$x] != "t") {
											if($capsha_val[$x] != "f") {
												Print "<Sentences>Error, Wrong CAPSHA value entered...</Sentences>";
												echo "<br>";
												$test_val = 0;
												echo "Click ";
												echo "<URL_Sizes><a href=http://192.168.217.128/historyclient.html>here</a><URL_Sizes>";
												echo " to return to the CAPSHA page.";
												break;
											}
										}
									}
								}
							}
						}
						
				}
			}
			if ($test_val == "5") {
				Print "<Sentences>Have you considered these majors?</Sentences>";
				echo "<br>";
				for($i=0;$i<strlen($capsha_val);$i+=1) {
					if ($capsha_val[$i] == "G") {
						echo "<URL_Sizes><a href=https://www.stthomas.edu/catalog/current/arth/>Art History</a></URL_Sizes>";
						echo "<br>";
					} else if ($capsha_val[$i] == "0") {
						echo "<URL_Sizes><a href=https://www.stthomas.edu/catalog/current/chem/>Chemistry</a></URL_Sizes>";
						echo "<br>";
					} else if  ($capsha_val[$i] == "i") {
                	                       	echo "<URL_Sizes><a href=http://www.stthomas.edu/catalog/current/econ/>Economics</a></URL_Sizes>";
                        	       		echo "<br>"; 
					} else if  ($capsha_val[$i] == "Q") {
                        	       		echo "<URL_Sizes><a href=http://www.stthomas.edu/catalog/current/engl/>English</a></URL_Sizes>";
						echo "<br>";
                        	        } else if  ($capsha_val[$i] == "t") {
                               		        echo "<URL_Sizes><a href=http://www.stthomas.edu/catalog/current/math/>Mathematics</a></URL_Sizes>";
						echo "<br>";
                               		} else if  ($capsha_val[$i] == "f") {
                                       		echo "<URL_Sizes><a href=http://www.stthomas.edu/catalog/current/physics/>Physics</a></URL_Sizes>";
						echo "<br>";
                    	       		}
				}
			}
			?> 
		</center>
	</body>
<html>
