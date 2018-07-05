<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>
    <header>
      <ul class="menu-principal">
          <li><a class="lien" href="/">acceuil</li>
          <li><a class="lien" href="./create">add to list</a></li>
          <li><a class="lien" href="./musiques">world list</a></li>
      </ul>
    </header>
    <main class="firts-para">

        <div class="Container">
          <div class="songs">
            <form action="{{ url('musiques') }}" method="post" enctype="multipart/form-data">
        @csrf


              <input type="text" name="NameSong" value="" placeholder="Song name">


          </div>
          <div class="songs">

                <input type="text" name="author" value="" placeholder="author">


          </div>

          <div class="songs">

              <input type="text" name="language" value="" placeholder="language">


          </div>

          <div class="songs">

              <input type="text" name="genre" value="" placeholder="genre">
            </div>
            <input type="submit" name="add" value="add sound" >
            </div>
            </form>


    <footer>
      <p>copyrigth akymMartins</p>
      <p>soundofworld</p>
    </footer>
  </body>
</html>
