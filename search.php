<?php 
$con = mysql_connect('localhost', 'root', '')
$db = mysql_selec_db('tags');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Search bar
        </title>
        <link rel="stylesheet" href="css/stylesearch.css">
    <script type="text/javascript">
        function active(){
            var searchBar = document.getElementById('searchBar');
            if(searchBar.value=='Search...'){
                searchBar.value = ''
                searchBar.placeholder = 'Search...'
            }
        }
        function inactive(){
            var searchBar = document.getElementById('searchBar');

            if(searchBar.value==''){
                searchBar.value = 'Search...'
                searchBar.placeholder = ''
            }
        }
    </script>        
    <style type="text/css">
        #searchBar {
    border: 1px solid #000000;
    border-right: none;
    font-size: 16px;
    padding: 10px;
    outline: none;
    width: 250px;
    -webkit-border-top-left-radius:10px;
    -webkit-border-bottom-left-radius:10px;
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-bottomleft: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;

}
#searchBtn{
    border: 1px solid #000000;
    font-size: 16px;
    padding: 10px;
    background: #f1d829;
    cursor:pointer;
    outline: none;}
#searchButton:hover{
background: #32CD32;
    
}
    </style>
    </head>
    <body>
        <form action ="search.php" method="post">
            <input type="text" id ="searchBar" placeholder="" value="Search..." maxlength="="25 autocomplete="on" onmousedown="active();" onblur="inactive();"/><input type="submit" id="searchBtn" value="Go!"/>
        </form>
        <?php
            $query = mysql_query("SELECT * FROM tags");
            $num_rows = mysql_num_rows($query);
            echo $num_rows;
        ?>
    </body>
</html>