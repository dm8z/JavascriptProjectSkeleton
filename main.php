<!DOCTYPE html>
<html>
    <?php
    $ricerca=$_POST["dname"];
    //var_dump($ricerca);
    echo "
    <script>
    fetch('https://api.edamam.com/search?q=" . $ricerca . "&app_id=b5d21c62&app_key=17e5ed867992c44537c4d510d106d495&from=0&to=50&&calories=0-500&health=vegetarian')
    .then(function(response) 
      {
        return response.json();
      }
    )
  .then(function(myJson) {
    //myJson.hits.forEach(function(element) {
    var i;
    for(i=0; i<myJson.hits.length; ++i){
      newdiv=document.createElement('p');
      image= document.createElement('img');
      //calories=document.createElement('p');
      
      image.id='image';
      newdiv.id='paragraph';
      image.src=myJson.hits[i].recipe.image;
      //newdiv.innerHTML= myJson.hits[i].recipe.label;
      //newdiv.id='div' + i.toString();
      console.log('div' + i.toString());
      document.getElementById(i.toString()).appendChild(newdiv);
      document.getElementById(i.toString()).appendChild(image);
      //document.getElementById(i.toString()).appendChild(calories);
      newdiv.innerHTML= myJson.hits[i].recipe.label;
      //calories.inneHTML= myJson.hits[i].recipe.calories ;
      //document.getElementById('div' + i.toString()).innerHTML=myJson.hits[i].recipe.label;
      //document.write(myJson.hits[i].recipe.label);
      //console.log(myJson.hits[i].recipe.label);
      
    }
}
  );
  </script>" ?>
  <head>
    
    <title>Veggy App</title>
    <style>
      #piatto_container{
        margin-right:0px;
        width: 50%;
       background-color:green;
      }
      #image_container{
        margin-left: 800px;
        background-color: red;
        width: 40%;
      }
      #image{
        margin-left: 500px;
        margin-top:0px;
        
      }
      #paragraph{
        font-size: 20px;
        
        
      }
      
    </style>
  </head>
  <link href="style.css" rel="stylesheet">
  <body id="grad">
    <ul >
        <li><a href="index.html">Home</a></li>
        <li><a href="api.html">API information</a></li>
        
    </ul>
    <div>
      <?php
        if($_POST["dname"]!=null){
          
        for($i=0; $i<10; $i++)
        {
          echo "<div id=" . $i . "></div>";
        }}
      ?>
    </div>
    <p1></p1>
  </body>
  
</html>

