class ViewFile { public $filename = ''; 


public function __toString()


 { include $this->filename; return ""; } }



 if (isset($_GET['page']))
 
 
$this->filename = basename($_GET['page']); // Ensure filename is sanitized and validated before including.
 
 else { $pdfobject = new File(); } ?> 
