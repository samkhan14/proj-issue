<?php

class khan{
	
	 //CONNECTION FUNCTION START
	public function con()
	{
		$con = mysqli_connect("localhost","root","","myshop") or die("Error in Database Connection");
		return $con;
	}//CONNECTION FUNCTION END

	// SQL INJECTION SAFTEY
	public function check($a)
	{
		return mysqli_real_escape_string($this->con(),$a);
	} //END

	 //LOGIN FUNCTION START
	public function login($a,$b)
	{
		$b = md5($b);
	$q = mysqli_query($this->con()," 
		SELECT uname FROM tbluser WHERE uname = '$a' and upass = '$b';
		") or die("Error in Login function");	

		$i = mysqli_num_rows($q);
		return $i;
	}//LOGIN FUNCTION END


		//CATEGORY work FUNCTION START
		public function addcat($a)
		{
			$a = $this->check($a);
			mysqli_query($this->con(),"INSERT INTO tblcat (cname) values('$a');")
			or die("Error in Category function");
			
		}

		
		public function getallcat()
		{
			$q = mysqli_query($this->con(),"SELECT * from tblcat;") or die("Error in getall Category function");
			return $q;
		}//CATEGORY work FUNCTION END

		// PRODUCT WORK START
		public function addpro($a,$b,$c,$d,$e)
		{
			$a = $this->check($a);
			$b = $this->check($b);
			$c = $this->check($c);
			$d = $this->check($d);
			$e = $this->check($e);
			mysqli_query($this->con(),"INSERT INTO `tblpro`( `pname`, `pprice`, `pdetails`, `ptags`, `pcid`) VALUES ('$a','$b','$c','$d',$e);")
				or die("Error in Addproduct function");
		}

			public function getallpro()
		{
			$q = mysqli_query($this->con(),"SELECT * from vpro;") or die("Error in get all Product function");
			return $q;
		} // PRODUCT WORK END

		//WORK ON IMG FUNCTION
		public function getsinglepro($a)
		{
			$a = $this->check($a);
			$q = mysqli_query($this->con(),"SELECT * from vpro WHERE pid = $a;") or die("Error in Image Function");
			return $q;
		}

		//Upload Image Function 
		public function addimg($a,$b)
		{
			$a = $this->check($a);
			$b = $this->check($b);
			mysqli_query($this->con(),"INSERT INTO `tblimg`( `iname`, `pid`) VALUES ('$a',$b);")
				or die("Error in Add Image function");
		}

		//GET IMAGE  FUNCTION
		public function getimg($a)
		{
			$a = $this->check($a);
			$q = mysqli_query($this->con(),"SELECT * from tblimg WHERE pid = $a;") or die("Error in  Get Image Function");
			return $q;			
		}


		


		


} //END OF CLASS

 ?>