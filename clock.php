<html>

<head>
    <link href="https://fonts.cdnfonts.com/css/digital-7-mono" rel="stylesheet">
    <title>clock</title>
    <meta http-equiv="refresh" content="1">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .outter {
            height: 400px;
            width: 450px;
            background-color: black;
            border: solid 2px black;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .middle {
            height: 310px;
            width: 360px;
            border: solid 3px rgb(156, 156, 156);
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .inner {
            height: 290px;
            width: 340px;
            border: solid 1px rgb(202, 202, 202);
            border-radius: 20px;
        }
        
        .dtdiv {
            height: 65%;
            /* border: solid 5px red; */
        }

        .datediv {
            border: solid 2px white;
            border-radius: 5px;
            width: 95%;
            font-family: 'Digital-7', sans-serif;
            margin-left:2%;
        }
        
        .tempdiv {
            height: 30%;
            /* border: solid 5px green; */
        
        }

        .week_day{
           /* border: solid 2px orange;  */
           height: 30%;
           color: white;
           font-size: 11px;
        }
        .week_day input[type=radio]{
            accent-color: red;
        }

        .bottom_sec{
            height: 60%;
            /* border: solid 2px purple; */
            display: flex;
            align-items: end;
            /* flex-direction: row-reverse; */

        }


        .am_pm{
            color: white;
            width: 20%;
            height: 100%;
            /* border: solid 2px yellow; */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 12px;
        }
        .am_pm input[type=radio]{
            accent-color: red;
        }
      

        .name{
            /* border: solid 2px pink; */
            color: white ;
            width: 80%;
            height: 100%;
            font-size:20px;
            text-align: center;
            vertical-align: middle;

        }
      
    </style>
</head>

<body>

    <div class="outter">
        <div class="middle">
            <div class="inner">
                <div class="dtdiv">

                    <TABle border="0" width="100%">

                        <tr align="center">
                            <td>
                                <FONt color="white">DATE</FONt>
                            </td>
                            <td>
                                <FONt color="white">MONTH</FONt>
                            </td>
                            <td>
                                <FONt color="white">YEAR</FONt>
                            </td>
                        </tr>
                    </TABle>
                    <div class="datediv">
                        <table border="0" width="100%">
                            <tr align="center">
                                <td height="50px">
                                    <font color="red" size="7px"> <?php echo date('d'); ?></font>
                                </td>
                                <td>
                                    <font color="red" size="7px"> <?php echo date('m'); ?></font>
                                </td>
                                <td>
                                    <font color="red" size="7px"><?php echo date('Y'); ?></font>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <TABle border="0" width="100%">

                        <tr align="center">
                            <td>
                                <FONt color="white">HOUR</FONt>
                            </td>
                            <td>
                                <FONt color="white">MINUTE</FONt>
                            </td>
                            <td>
                                <FONt color="white">SECOND</FONt>
                            </td>
                        </tr>
                    </TABle>
                    <div class="datediv">
                        <table border="0" width="100%">
                            <tr align="center">
                                <td height="50px">
                                    <font color="red" size="10px">  <?php echo date('h'); ?></font>
                                </td>
                                <td>
                                    <font color="red" size="10px"><?php echo date('i'); ?></font>
                                </td>
                                <td>
                                    <font color="red" size="10px"><?php echo date('s'); ?></font>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="tempdiv">
                    <div class="week_day">
                            <input type="radio" name="week" <?php if(date('D') == 'Sun') echo 'checked'; ?>>SUN
                             <input type="radio" name="week" <?php if(date('D') == 'Mon') echo 'checked'; ?>>MON
                              <input type="radio" name="week" <?php if(date('D') == 'Tue') echo 'checked'; ?>>TUE
                             <input type="radio" name="week" <?php if(date('D') == 'Wed') echo 'checked'; ?>>WED
                             <input type="radio" name="week" <?php if(date('D') == 'Fri') echo 'checked'; ?>>FRI
                             <input type="radio" name="week" <?php if(date('D') == 'Thu') echo 'checked'; ?>>THU
                             <input type="radio" name="week" <?php if(date('D') == 'Sat') echo 'checked'; ?>>SAT
                            </div>
                    <div class="bottom_sec">
                        <div class="name">
                            <h4>SAVAN SARDHARA</h4>
                        </div>
                        <div class="am_pm">
                           <div class="pm">  <input type="radio" name="ap" <?php if(date('A') == 'PM') echo 'checked'; ?>>PM</div>
                           <div class="am"> <input type="radio" name="ap" <?php if(date('A') == 'AM') echo 'checked'; ?>>AM</div>
                        </div>


                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</body>

</html>