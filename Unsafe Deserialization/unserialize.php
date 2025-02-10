if (isset($_GET['page'])) { $pdfobject = new File(); } else { $pdfobject = new File(); } // Avoid unserializing user input


public function __toString()


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
 
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
