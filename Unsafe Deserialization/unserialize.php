class ViewFile { public $filename = ''; 


public function __toString()


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
$pdfobject = isset($_GET['page']) ? safeUnserialize($_GET['page']) : new File(); function safeUnserialize($data) { // Implement validation and sanitization logic here }
 { $pdfobject = unserialize(base64_decode($_GET['page'])); } 
 
 else { $pdfobject = new File(); } ?> 
