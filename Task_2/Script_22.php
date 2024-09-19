<html>
    <head>
        <title>Area Of Cirle </title>
    </head>
    <body>
        <form action="#" method="get">
            Eneter The Radius : <input type="number" name="radus" id="">
            <input type="submit" name="sub" id="">
        </form>
    </body>
</html>

<?php 
    if (isset($_REQUEST['sub'])) {
        $red=$_REQUEST['radus'];
        $area=3.14*$red*$red;
        echo "Area of Circle : $area";
    }

?>