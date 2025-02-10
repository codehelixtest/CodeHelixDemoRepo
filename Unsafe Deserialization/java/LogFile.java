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

private void readObject(ObjectInputStream in) {
    System.out.println("readObject from LogFile");
    try {
        in.defaultReadObject();
        // Validate filename and filecontent before using them
        if (isValidFilename(filename) && isValidContent(filecontent)) {
            System.out.println("Restoring log data to file...");
            try (BufferedWriter out = new BufferedWriter(new FileWriter(filename))) {
                out.write(filecontent);
            }
        } else {
            System.out.println("Invalid filename or content");
        }
    } catch (Exception e) {
        System.out.println("Exception: " + e.toString());
    }
}
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
