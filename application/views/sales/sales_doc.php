<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Sales List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Npp</th>
		<th>Nama Sales</th>
		<th>Email</th>
		<th>Notelp</th>
		<th>Password</th>
		
            </tr><?php
            foreach ($sales_data as $sales)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $sales->npp ?></td>
		      <td><?php echo $sales->nama_sales ?></td>
		      <td><?php echo $sales->email ?></td>
		      <td><?php echo $sales->notelp ?></td>
		      <td><?php echo $sales->password ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>