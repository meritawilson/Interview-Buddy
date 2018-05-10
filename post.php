
<html>
<head>
  <title>HONEYCOMB</title>
<link rel="stylesheet" href="honey.css">
<script src="honey.js"></script>
</head>
<body>
<center><font>HoneyComb<font></center>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">POST DETAILS</button>
  <div id="id01" class="modal">

    <form class="modal-content animate" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

      <div class="container">

                <label>Subject name :</label><input type = "text" name = "username" class = "box"/><br /><br />
				
                <label>Subject code :</label><input type = "text" name = "username" class = "box"/><br /><br />
				        <label>Subject description:</label><br/>
                    <textarea  name="pdesc" placeholder="Write something.." style="height:200px"></textarea><br>
					
                    <label>Upload</label><br/>
                	 <input type="file" name="upname" required class="form-control"> 
                 
				

                    <button type="submit">Add</button>
          

  
      </div>

 
    </form>
  </div>