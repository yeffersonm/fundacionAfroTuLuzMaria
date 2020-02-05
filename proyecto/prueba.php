<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> prueba de como colocar imagen desd datbase</title>
  </head>

  <style media="screen">


    #content{
      width: 50%;
      margin: 20% auto;
      border: 1px groove blue;

    }

    form{

      width: 50px ;
      margin: 20px auto;
    }

    form div{
      width: 80%;
    }
    #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px groove orange;
    }

    #img_div::after{
      content: "";
      display: block;
      clear: both;
    }

    img{
      float: left;
      margin: 5px;
      width: 300px;
      height: 140px;
    }





  </style>
  <body>
    <div id="content">
    <form class="" action="prueba.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
     <div class="">

<input type="file" name="image">

     </div>
     <div class="">

<textarea name="name" rows="4" cols="20" placeholder="descripcion AQUI" ></textarea>

     </div>
     <div class="">
       <input type="text" name="upload" value="upload image">
     </div>

    </form>
    </div>
  </body>
</html>
