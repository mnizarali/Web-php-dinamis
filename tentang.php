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


</style>

<div id='uni'>

<?php
include('header.php');
?>
 
<div id="tabel-center">
	    <table align="center" border="1" cellspacing="0" cellpadding="2">
              <thead>
                 <th>Sekolah</th>
                 <th>Tahun</th>
              </thead>
              <tbody>
                <tr>
                 <td>SMK Wikrama Bogor</td>
                 <td>2021 -- Sekarang</td>
                </tr>
                <tr>
                 <td>SMP Negeri 1 Megamendung </td>
                 <td>2018 -- 2021</td>
                </tr>
                <tr>
                 <td>SD&nbsp;&nbsp;&nbsp;Negeri 1 Cipayung </td>
                 <td>2012 -- 2018</td>
                </tr>
              </tbody>
        </table>
</div>

<?php
include('footer.php');
?>

</div>