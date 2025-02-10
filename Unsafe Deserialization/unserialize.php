class ViewFile { public $filename = ''; 


public function __toString()


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
 
$pdfobject = isset($_GET['page']) ? safeUnserialize($_GET['page']) : new File();
 
 else { $pdfobject = new File(); } ?> 
