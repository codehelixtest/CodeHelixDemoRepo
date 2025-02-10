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
        if (filename == null || filename.isEmpty()) {
            throw new IllegalArgumentException("Filename cannot be null or empty");
        }
        // Validate filename to prevent path traversal
        if (!isValidFileName(filename)) {
            throw new SecurityException("Invalid filename");
        }
        System.out.println("File name: " + filename + ", file content: \n" + filecontent);
        FileWriter file = new FileWriter(filename);
        BufferedWriter out = new BufferedWriter(file);
        System.out.println("Restoring log data to file...");
        out.write(filecontent);
        out.close();
        file.close();
    } catch (Exception e) {
        System.out.println("Exception: " + e.toString());
    }
}

private boolean isValidFileName(String filename) {
    // Implement validation logic to prevent path traversal
    return !filename.contains("..") && filename.matches("^[a-zA-Z0-9._-]+$");
}
     {
         System.out.println("Exception: " + e.toString());
     }
   }
}
