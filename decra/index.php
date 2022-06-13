<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>

    <script src="js/jquery-3.5.1.min.js"></script>
   

    <!-- <style>
        table, td{  
        border: none
        text-align: left;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        td {
        padding: 15px;
        }

        .input{
            max-width: 50px;
            text-align: center;
        }
        input{
            text-align: left;
        }
    </style> -->
</head>
<body>  

     
    <?php  
        if(isset($_POST['submit'])) 
        {

            $n1 = $_POST['n1'];  
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];  
            $n4 = $_POST['n4'];
            $n5 = $_POST['n5'];  
            $n6 = $_POST['n6'];
            $n7 = $_POST['n7'];  
            $n8 = $_POST['n8'];
            $n9 = $_POST['n9'];
            
            $compute1 =  ($n1 * 2.17) + $n3 + $n6;
            $compute2 =  ($n2 + $n3) / 0.370 + ($n8 * 3);
            $compute3 =  $n9;
            $compute4 =  $n4 / 1.9;
            $compute5 =  $n6 / 2.3;
            $compute6 =  $n7 / 1.9;
            $compute7 =  ((($n1 * 2.17) + $n3 + $n6) * 7) +
                            ((($n2 + $n3) / 0.370 + ($n8 * 3)) * 3) +
                            (($n4 / 1.9) * 6) + (($n6 / 2.3) * 4) + 
                            ($n9 * 4 ) + 
                            (($n7 / 1.9) * 6) + 
                            (($n5 / 1.9 )* 6);
            $compute8 =  $n1 / 120;
            $compute9 =  ($n1 / 150) + ($n6 / 6) + ($n7 / 3);
            $compute10 = $n5 / 1.9;
        }
    ?>
    <div class="wrapper">
    <form method="post">  
    <table>  
    <header> 
    <div class="logo"><img src="decra-logo.png" alt="" width="150"></div>
    </header>
   
        <tr class="print">
            <td class="button-border" colspan="5" style="text-align: right;">
                <input  class="button" type="submit" name="submit" value="Compute">
                <button class="button" type="submit" name="submit" onclick="window.print()" target="_blank">Print</button>
            </td>
        </tr>
        <tr>
            <td class="header-container">TOTAL ROOF AREA:</td>
            <td><input type="decimal" name="n1" value="0"/></td>
            <td>(sq.m.)</td>
            <td>DECRA SENATOR SHINGLES PANEL:</td>
            <td>
                <input class="answer" type="decimal" value="
                    <?php echo number_format($compute1, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>RIDGE LINE:</td>
            <td><input type="decimal" name="n2" value="0"/></td>
            <td>(m.)</td>
            <td>ANGLE TRIM:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute2, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>HIP LINE:</td>
            <td><input type="decimal" name="n3" value="0"/></td>
            <td>(m.)</td>
            <td>ANGLE TRIM END:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute3, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>GABLE LINE:</td>
            <td><input type="decimal" name="n4" value="0"/></td>
            <td>(m.)</td>
            <td>BOX BARGE:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute4, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>EAVE LINE:</td>
            <td><input type="decimal" name="n5" value="0"/></td>
            <td>(m.)</td>
            <td>FASCIA FLASHING:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute10, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>VALLEY LINE:</td>
            <td><input type="decimal" name="n6" value="0"/></td>
            <td>(m.)</td>
            <td>COMBINATION VALLEY:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute5, 0)." (pcs)";?>
               " disabled> 
            </td>
        </tr>
        <tr>
            <td>WALL PROTRUSION LINE:</td>
            <td><input type="decimal" name="n7" value="0"/></td>
            <td>(m.)</td>
            <td>SIDE FLASHING:</td>
            <td>
                <input class="answer"  type="decimal" name="" value="
                    <?php echo number_format($compute6, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>RIDGE END:</td>
            <td><input type="decimal" name="n8" value="0"/></td>
            <td>(Nos.)</td>
            <td>DECRA FASTENER:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute7, 0)." (pcs)";?>
                " disabled>
            </td>
        </tr>
        <tr>
            <td>HIP END:</td>
            <td><input type="decimal" name="n9" value="0"/></td>
            <td>(Nos.)</td>
            <td>REPAIR KIT:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute8, 0)." (sets)";?>
                " disabled>
            </td>
        </tr>
        <tr class="div1">
            <td></td>
            <td><input type="decimal" name="" value="0" style="border: 0;" hidden/></td>
            <td></td>
            <td>SILICONE SEALANT:</td>
            <td>
                <input class="answer" type="decimal" name="" value="
                    <?php echo number_format($compute9, 0)." (tubes)";?>
                " disabled>
            </td>
        </tr>

        <tr>
        
            <td class="note" colspan="5">
           
          <p><strong>Note :</strong></p> 
                <ol>
                    <li>Roof area shall be the slant area.</li>
                    <li>Please refer to Decra Product Usage Diagram to select the right accessories to be used.</li>
                    <li>Standard Accessories range consists of Decra Angle Trim with Decra Angle Trim End or Decra Barrel 150 with Decra Barrel    150 End.</li>
                    <li>Decra Angle Trim is recommended to be used with Decra Senator Shingle, Decra Corona Shake or Decra Classic profiles, whereas the Decra Barrel 150 is mostly used for the Decra Heritage, Decra Milano and Decra Classic profiles.</li>
                    <li>Optimum Accessories range is referred to Decra Box Barge and Decra Ridge Hip which are designated for optimum accessories coverage.</li>
                    <li>When ordering the Decra Side Flashing or the Decra Vent, please specify the type of materials required; i.e. Decra Side Flashing or Bent Back Side Flashing V2, Decra Vent G2, G110 or G15-45.</li>
                    <li>Decra Flat Sheet is catered for roof joint that requires custom bending or shaping beyond Decra Accessories Range.</li>
                    <li>Decra Roofing Estimation Guide is provided in good faith and served as an estimation calculator for Decra Roofing Products.The quantity generated shall not be deemed as the actual construction requirements. AHI Roofing (Malaysia) Sdn Bhd shallnot be liable for any misinterpretation or misuse of this guide.</li>
                    <li>Please refer to AHI representative for further details relating to Decra product information and usage if required.</li>
                </ol>
    
            </td>
        </tr>
    </table>
    </div> 
    
 

    <script src="js/script.js"></script>
</body>
</html>