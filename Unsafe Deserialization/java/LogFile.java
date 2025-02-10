// Vulnerable class

class LogFile implements Serializable
{
   public String filename;
   public String filecontent;

  // Function called during deserialization

  private void readObject(ObjectInputStream in)
  {
     System.out.println("readObject from LogFile");

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
private void readObject(ObjectInputStream in) {
    System.out.println("readObject from LogFile");
    try {
        in.defaultReadObject();
        // Use a proper logging framework instead of System.out.println
        Logger logger = Logger.getLogger(LogFile.class.getName());
        logger.info("File name: " + filename);
        // Avoid logging file content
        FileWriter file = new FileWriter(filename);
        BufferedWriter out = new BufferedWriter(file);
        out.write(filecontent);
        out.close();
        file.close();
    } catch (Exception e) {
        System.out.println("Exception: " + e.toString());
    }
}
     }
   }
}
