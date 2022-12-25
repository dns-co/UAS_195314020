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
	 <form class="" action="proses4.php" method="post">
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
                <h1><a href="tmtb.php">Laundry ADMIN</a></h1>
                <ul>
                    <li class="active"><a href="tmtb.php">Input Kwitansi </a></li>
			  <li><a href="db.php">Database</a></li>
                    <li><a href="pencarian.php">Pencarian</a></li>
                    <li><a href="menu.php">Log Out</a></li>
                   
                    
                </ul>
            </div>
        </header>
        
        <section class="label">
            <div class="container">
            <p>Menu Admin</p>
            </div>
        </section>
        
     <section class="about">
            <div class="container">
                <h3>Input Kwitansi</h3>
        <form action="" method="POST">
           <table>
   <div class="input-group">
                	<tr> 
                  <div class="input-group"><td width="120">Pelayanan :</td>
                    <td><input type="text" name="pelayanan" autocomplete="off"></td>
                    </tr>
                </div>
<tr>
 			<div class="input-group"><td width="120">Berat(kg) :</td>
                    <td><input type="text" name="berat" autocomplete="off"></td>
                    </tr>
                </div>
			 <div class="input-group"><td width="120">Harga(sat/kg) :</td>
                    <td><input type="text" name="harga" autocomplete="off"></td>
                    </tr>
		     <div class="input-group"><td width="120">Nama :</td>
                    <td><input type="text" name="nama" autocomplete="off"></td>
                    </tr>
             <div class="input-group"><td width="120">Tanggal Masuk :</td>
                    <td><input type="text" name="masuk" autocomplete="off"></td>
                    </tr>
             <div class="input-group"><td width="120">Tanggal Keluar :</td>
                    <td><input type="text" name="keluar" autocomplete="off"></td>
                    </tr>
                </div>
                
                <div class="input-group">
                    <tr>
                    <td>Jumlah(Rp) :</td>
                    <td><input type="textarea" name="jumlah" autocomplete="off></textarea></td>
                </tr>
               
               </div>
<div class="input-group">
                <tr>
                    <td></td>
                     <tr><td colspan="2"><input type="submit" name="submit" value="submit"> </button></td></tr>
                   </div>
                
                    
                    
                        
                    </td>
                </tr>
            </table>
        </form>

            </div>
            
        </section>
    
        
        
        <footer>
            <div class="container">
                <small>Copyright &copy 2020 - Dionisius. All Right Reserved.</small>
            </div>
        </footer>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $(".bg-loader").hide();
            });
        </script> 
    </body>
</html>
