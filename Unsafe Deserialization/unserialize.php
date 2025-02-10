class ViewFile { public $filename = ''; 


public function __toString()


 { include $this->filename; return ""; } }



if (isset($_GET['page'])) { $pdfobject = json_decode(base64_decode($_GET['page']), true); // Use a safer alternative to unserialize }
 
 
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
