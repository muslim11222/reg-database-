<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Forms</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <h1>HTML FORM</h1>
     <div class="container">

          <form action="connect.php" method="post">

               <div>
                  <label>Name</label>
                  <input type="text" name="Name" placeholder="Enter Your Name">
               </div>

               <div>
                  <label>Email</label>
                  <input type="text" name="Email" placeholder="Enter Your Email">
               </div>


               <div class="GenderContainer">
                  <label>Gender</label>
                  <input class="gender1" type="radio" name="Gender" value="Male">Male
                  <input class="gender1" type="radio" name="Gender" value="Female">Female
                  <input class="gender1" type="radio" name="Gender" value="Others">Others
               </div>


               <div>
                  <label>Mobile</label>
                  <input type="text" name="Mobile" placeholder="Enter Your Mobile">
               </div>


               <div>
                  <label>Password</label>
                  <input type="text" name="Password" placeholder="Enter Your Password">
               </div>

               <div class="btn">
                    <button type="submit">Submit Data</button>
               </div>

          </form>
     </div>
</body>
</html>