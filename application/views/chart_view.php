<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chart using codeigniter and morris.js</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/morris.js/morris.css')?>">
    </head>

    <body>
        <h2>Chart using Codeigniter and Morris.js</h2>

        <div id="graph"></div>
        
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>        

        <!-- Morris js Chart -->
        <script src="<?php echo base_url('assets/morris.js/morris.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/morris.js/raphael-min.js'); ?>"></script>   
        <script>
            Morris.Bar({
                element: 'graph',
                data: <?php echo $konsultasi;?>,
                xkey: 'usia_kehamilan',
                ykeys: ['batas_bawah', 'tee', 'batas_atas'],
                labels: ['Batas Bawah Energi', 'Total Energi', 'Batas Atas Energi']
            });
        </script>
    </body>
</html>