<title> Tugas Website Dinamis </title>
<style type="text/css">

#uni
{
    position: absolute;
    width: 100%;
    min-height: 100%;
    left: 0px;
    top: 0px;
}
#header
{
    text-align: center;
    width: 94%;
    padding: 3%;
    font-size: 60px;
    color: white;
    background: url(img/header2.png);
    font-family: helvetica;
}

.pp
{
    height: 80px;
    width: 80px;
    border-radius: 50%;
}

#menubar
{
    text-align: center;
    width: 100%;
    background: url(img/bck1.jpg);
}

#menubar a 
{
    font-size : 24px;
    color : white;
    padding: 10px 20px 10px 20px;
    text-decoration: none;
    display: inline-block;
}

#menubar a:hover 
{
    color: #727272;
    background: white;
}

#footer
{
    text-align: center;
    width: 94%;
    padding: 3%;
    /* padding-bottom: 50px; */
    font-size: 20px;
    color: white;
    background: url(img/bck1.jpg);
    font-family: helvetica;
}

#profil
{
    text-align:center;
    width: 94%;
    padding: 3%;
    font-size: 23px;
    font-family: helvetica;
}
</style>

<div id='uni'>

<?php
include('header.php');
?>
 
<div id="content">
<?php
include('profil.php');
?>
</div>

<?php
include('footer.php');
?>

</div>
