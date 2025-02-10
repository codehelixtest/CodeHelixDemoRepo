class ViewFile { public $filename = ''; 


public function __toString()


if (isset($_GET['page'])) { $pdfobject = json_decode(base64_decode($_GET['page']), true); } else { $pdfobject = new File(); } // Use a safer serialization format



 if (isset($_GET['page']))
 
 
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
