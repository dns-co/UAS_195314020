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
        <link rel="stylesheet" type="text/css" href="st.css">
<link rel="stylesheet" type="text/css" href="tb.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
       <form class="" action="proses3.php" method="post">
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
                <h1><a href="menu.html">Laundry ADMIN</a></h1>
                <ul>
                   
                    <li><a href="tmtb.php">Input Kwitansi </a></li>
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
        
    
                
                    
                        
                    </td>

                </tr>
            </table>
        </form>

            
        </section>
        <section class="about">
            <div class="about">

    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <h2>Menampilkan Data Dari Database Laundry</h2>
    <table>
        <thead>
            <tr>
		    <td>ID</td>
	          <td>Pelayanan</td>
                <td>Berat</td>
                <td>Harga</td>
	 	        <td>Nama</td>
                <td>Masuk</td>
                <td>Keluar</td>
                <td>Jumlah</td>
                <td>Submit</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM data');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
	    	<td><?php echo $data['id'] ?></td>
		    <td><?php echo $data['pelayanan'] ?></td>
            <td><?php echo $data['berat'] ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td><?php echo $data['nama'] ?></td>
		    <td><?php echo $data['masuk'] ?></td>
		    <td><?php echo $data['keluar'] ?></td>
            <td><?php echo $data['jumlah'] ?></td>
            <td><?php echo $data['submit'] ?></td>
            </tr>
        <?php } ?>
    </table>
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
