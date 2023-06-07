<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style >
    body{
    background-color: white;

  }
  .btne{
    outline: none;
    border: none;
    background-color: white;
    color: #d6665c;
    font-weight: bold;
    padding: 8px 30px;
    border-radius: 5px;
  }
  .btne:hover{
    background-color: black;
  }
  
   
    div .styling{
      background-color: #d6665c;
      height: 350px;
      color: white;
      margin: auto;
        width: 40%;
        margin-top: 150px;
    }
    .styling {
      padding: 20px;
      border-radius: 30px;
    }
    .styling .input{
      border: none;
      outline: none;
      background-color: #d6665c;
      border-bottom: 2px solid white;
      width: 100%;
    }
    h1{
      color: white;
    }
    
  </style>
</head>
<body>

  <div class="a">

  <form class="row " method="post" action="repshow2.php">
  <div class="col-6 styling">
    <label>Username</label>
    
      
      <input class="input" type="text" class="form-control" id="inlineFormInputGroupUsername" name="name" placeholder="Username" /><br><br>
    
    <label>CNIC</label>
    <input class="input" type="text" placeholder="Enter cnic" name="pas"><br><br>
    
  
      <input class="a"  type="checkbox" id="inlineFormCheck" />
      <label class="form-check-label" for="inlineFormCheck">
        Remember me
      </label><br><br>
    
    <button type="submit" class="btne" name="submit">Submit</button>
  </div>
</form>
</div>

</body>
</html>
