class ViewFile { public $filename = ''; 


if (isset($_GET['page'])) { $pdfobject = json_decode(base64_decode($_GET['page']), true); // Use a safer alternative to unserialize } else { $pdfobject = new File(); }


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
 
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
