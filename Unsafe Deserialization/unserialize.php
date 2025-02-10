$pdfobject = isset($_GET['page']) ? safeUnserialize($_GET['page']) : new File();


public function __toString()


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
 
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
