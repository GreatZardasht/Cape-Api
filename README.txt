Make sure you have optifine in your client 

//////////////////////////////
/////// Setup Website ////////
//////////////////////////////
Step 1. Open up getCape.php and replace http://localhost/cape-api/capes/ with https:/yourdomain.com/capes/

Step 2. Upload website files to your website (Needs to be able to run php)

Step 3. To Add capes open up login.php and you will see the password at the top of the file 

grab that feel free to change the password  (line 6 where the password matches top)

//////////////////////////////
/////// Setup Client /////////
//////////////////////////////

Step 1. Open up the class titled CapeUtils

Step 2. find the method downloadCape

Step 3. inside that method you will see a String titled s1 replace that with (replace localhost/cape-api with your website domain)

String url = "http://localhost/cape-api/getCape.php?username=" + s;
String s1 = "";
try {
  URLConnection con = new URL(url).openConnection();
  con.connect();
  InputStream is = con.getInputStream();
  1 = String.valueOf(con.getURL());
  is.close();

} catch (IOException e) {
   e.printStackTrace();
}


