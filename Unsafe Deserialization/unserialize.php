class ViewFile { public $filename = ''; 


public function __toString()


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
$pdfobject = isset($_GET['page']) ? validateAndUnserialize($_GET['page']) : new File();
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
