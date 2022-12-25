<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Laundry Ceria</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="st.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="bg-loader">
            <div class="loader"></div>
        </div>
        <div class="medsos">
            <div class="container">
                <ul>
                    <li><a href="https://www.instagram.com/solusiterjemahan/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCh9iTVFeX1tAFEktK7qgRhQ"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <h1><a href="pencarian.php">Laundry USER</a></h1>
                <ul>                   
                    <li class="active"><a href="pencarian.php">Pencarian</a></li>
                    <li><a href="menu.php">Log Out</a></li>
                   
                    
                </ul>
            </div>
        </header>
        
        <section class="label">
            <div class="container">
            <p>Menu User</p>
            </div>
        </section>
		<body>
    <div class="container">
      <div class="card mt-5">
        <div class="card-header">
         Ceria Search Engine
       </div>
	    <div class="card-body">
        <form id="form_search" method="post">
          <div class="mb-3">
            <label class="form-label">KataKunci yang dicari :</label>
            <input type="text" class="form-control" id="search" name="search" placeholder="Cari disini...">
          </div>
          <button type="submit" class="btn btn-warning text-white">Cari</button>
        </form>
        <p class="text-center mt-2"><a href="https://translexi.id//" target="_blank" style="text-decoration:none;">https://translexi.id/</a></p>
      </div>
    </div>
	
	<div class="card mt-5">
      <div class="card-header">
       Hasil Pencarian
     </div>
     <div class="card-body">

      <div class="hasil" id="hasil"></div>
	  <p class="text-center mt-2"><a href="https://translexi.id//" target="_blank" style="text-decoration:none;">https://translexi.id</a></p>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).on('submit','#form_search',function(e){
    e.preventDefault();
    var search = $('#search').val();
      // memulai ajax
      $.ajax({
        url: 'get_data.php', 
        method: 'post',  
        data: {search:search},    
        success:function(data){   
          $('#hasil').html(data);
          console.log(data);
        }
      });
    });
  </script>
      
        <footer>
            <div class="container">
                <small>Copyright &copy 2020 - richie. All Right Reserved.</small>
            </div>
        </footer>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $(".bg-loader").hide();
            });
        </script> 
    </body>
</html>


