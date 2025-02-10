// Vulnerable class

class LogFile implements Serializable
{
   public String filename;
   public String filecontent;

  // Function called during deserialization

  private void readObject(ObjectInputStream in)
  {
private void readObject(ObjectInputStream in) {
    // Avoid printing sensitive information
    // System.out.println("readObject from LogFile");
    try {
        in.defaultReadObject();
        // Avoid logging sensitive data
        // System.out.println("File name: " + filename + ", file content: \n" + filecontent);
        // Restore LogFile, write file content to file name
        FileWriter file = new FileWriter(filename);
        BufferedWriter out = new BufferedWriter(file);
        out.write(filecontent);
        out.close();
        file.close();
    } catch (Exception e) {
        // Log exception securely
        // System.out.println("Exception: " + e.toString());
    }
}

     try
     {
        // Unserialize data

        in.defaultReadObject();
        System.out.println("File name: " + filename + ", file content: \n" + filecontent);

        // Do something useful with the data
        // Restore LogFile, write file content to file name

        FileWriter file = new FileWriter(filename);
        BufferedWriter out = new BufferedWriter(file);

        System.out.println("Restoring log data to file...");
        out.write(filecontent);

        out.close();
        file.close();
     }
     catch (Exception e)
     {
         System.out.println("Exception: " + e.toString());
     }
   }
}
