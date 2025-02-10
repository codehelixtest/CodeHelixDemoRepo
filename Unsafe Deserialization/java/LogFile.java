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
private void readObject(ObjectInputStream in) {
    System.out.println("readObject from LogFile");
    try {
        in.defaultReadObject();
        System.out.println("File name: " + filename + ", file content: \n" + filecontent);

        // Validate filename and filecontent here
        if (isValidFilename(filename) && isValidFileContent(filecontent)) {
            FileWriter file = new FileWriter(filename);
            BufferedWriter out = new BufferedWriter(file);
            System.out.println("Restoring log data to file...");
            out.write(filecontent);
            out.close();
            file.close();
        } else {
            throw new IllegalArgumentException("Invalid filename or file content");
        }
    } catch (IOException e) {
        System.out.println("IOException: " + e.toString());
    } catch (IllegalArgumentException e) {
        System.out.println("IllegalArgumentException: " + e.toString());
    }
}
     {
         System.out.println("Exception: " + e.toString());
     }
   }
}
