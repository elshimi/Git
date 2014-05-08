<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/LatestOne.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shoofha.Net شوفها للدعاية والاعلان</title> 
    <link rel="stylesheet" href="CSS/styleMah.css" type="text/css" /> 
    <link rel="stylesheet" href="CSS/styleMah.responsive.css" type="text/css" />
    
<link rel="shortcut icon" href="images/shoofha.ico" mce_href="images/shoofha.ico"/>
<META NAME="Keywords" CONTENT=" ffffهضبة الاهرام,خدمات,حدائق الاهرام,اطباء,حضانات حدائق الاهرام,مطاعم حدائق الاهرام,صيدليات,جيم ,ديكور,شوفها,shoofha,شوفها للاعلان,طبيب بيطري,مدارس,رعاية صحية,امن وحراسة,حلاق,كوافير,كافيه,ميكانيكى,سباك,كهربائي,اثاث,مغسلة,دراي كلين,ايجار سيارات,ليموزين,صيدلية,تيك اواي,اسماك,بيتزا,حلوانى,كشري,مخبز,تشطيبات,تعليم قياده,دليل حدائق الاهرام">

<META NAME="Description" CONTENT="Advertising company and services,a services directory in the (Al-Ahram Gardens),Contains all the companies and services as well as phone numbers and a map of each company">
<!-- InstanceBeginEditable name="doctitle" -->
 
<link rel="stylesheet" type="text/css" href="CSS/styles.css"/>
	<link rel="stylesheet" type="text/css" href="CSS/style_categ_banner.css" />
 
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/wowslider_categ_banner.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
     <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->

<?php  
 require_once('Connections/conn.php'); 
 
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conn, $conn);
 mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8');
 

$query_record_category = "SELECT * FROM category order by orderID desc";
$record_category = mysql_query($query_record_category, $conn) or die(mysql_error());
$row_record_category = mysql_fetch_assoc($record_category);
$totalRows_record_category = mysql_num_rows($record_category);
?>
</head>

<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">


            </div>

<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="index.php">الرئيسيــــــة</a></li><li><a href="hadykmap.php" >خريطـة الحدائـق</a></li><li><a href="contact_us.php">اعلن معنــا</a></li></ul> 
    </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article"><!-- InstanceBeginEditable name="EditRegion3" -->
    
  <?php 
  if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
    mysql_select_db($database_conn, $conn);
 mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8');
$query_banner_adv = sprintf("SELECT * FROM banner_advertisment WHERE is_published =1 ");
$query_banner_adv .= " order by RAND()   limit 5";
$banner_adv = mysql_query($query_banner_adv, $conn) or die(mysql_error());
$row_banner_adv = mysql_fetch_assoc($banner_adv);
$totalRows_banner_adv = mysql_num_rows($banner_adv);

    mysql_select_db($database_conn, $conn);
 mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8');
$query_classieds_category = sprintf("SELECT * FROM classieds_category ");
$banner_classieds_category = mysql_query($query_classieds_category, $conn) or die(mysql_error());
$row_classieds_category = mysql_fetch_assoc($banner_classieds_category);
$totalRows_classieds_category = mysql_num_rows($banner_classieds_category);

$colname_comUpdate = "-1";
if (isset($_GET['classID'])) {
  $colname_comUpdate = $_GET['classID'];
}
    mysql_select_db($database_conn, $conn);
 mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8');
$query_rdClassifieds =  sprintf("SELECT * FROM classifieds where id  = %s", GetSQLValueString($colname_comUpdate, "int"));
$rdClassifieds = mysql_query($query_rdClassifieds, $conn) or die(mysql_error());
$row_rdClassifieds = mysql_fetch_assoc($rdClassifieds);
$num = mysql_num_rows($rdClassifieds);


$query_side_adv =  "SELECT * FROM side_advertisment WHERE is_published =1 order by RAND() limit 1 ";
$side_adv = mysql_query($query_side_adv, $conn) or die(mysql_error());
$row_side_adv = mysql_fetch_assoc($side_adv);
$totalRows_side_adv = mysql_num_rows($side_adv);
?>


      <table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr>
          <td class="second_row" valign="top"><table width="100%" border="0">
            <tr>
              <td>	<div id="wowslider-container1">
     	<div class="ws_images">
        <ul>
        <?php
	 $counter  = 0; 
	  $hrefs ="";
	 do { 
	 $txt = "wows".$counter;
	 
	 // $hrefs .= "<a href=\"#wows".$counter."\" >".$counter+1."</a>";
	 ?>
  <li>  <a href="company_details.php?ComID=<?php echo $row_banner_adv["companyID"]; ?>">  
  <img src="<?php echo $row_banner_adv["image_path"]; ?>" alt="Chrysanthemum" width="768" height="228" id="<?php echo $txt; ?>"/> 
   </a></li> 
       <?php
	     $counter++;
	   } while ($row_banner_adv = mysql_fetch_assoc($banner_adv)); ?>
 </ul>
</div>
<div class="ws_bullets"><div>
<?php 
 for($i=0; $i<$counter; $i++)
 {?>
	
	<a href="#wows<?php echo $counter; ?>" ><?php echo $counter+1; ?></a>
<?php
 }
?>
</div></div>
<div class="ws_shadow"></div>
	</div>
<script type="text/javascript" src="scripts/script_categ_banner.js"></script>
   
 </td>
              </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="5"> 
                <tr>
                   <td align="right"><a href="classifieds.php?classID=<?php echo $row_rdClassifieds['id']; ?>" class="categ_company_tit"><?php echo $row_rdClassifieds['ArTitle']; ?></a><p class="dateside"><?php echo $row_rdClassifieds['SnapshotDate']; ?></p></td> </tr>
              <tr>  <td align="right"class="classDescription"><?php echo $row_rdClassifieds['ArDescription']; ?></td>
              
            </tr>
              </table></td>
              </tr>
          </table></td>
          <td width="150" rowspan="3" class="second_row" valign="top">
            <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <td class="side_adv_images"><a href="company_details.php?ComID=<?php echo $row_side_adv["company_id"]; ?>"><img src="<?php echo $row_side_adv["image_path"]; ?>" width="50px" height="30px"/></a> </td>
      </tr>
      <tr><td><br />
</td>
           </tr>
		  <tr><td class="categ_company_tit" align="center" style="padding-top:20px;padding:5px; background-color:#E8E8E8;font-size:22px;">اعلاناتنا المبوبة</td></tr>
     <?php do{?>
      <tr>
        <td align="center" class="sideTitles"><a href="classifieds_categ.php?CategID=<?php echo $row_classieds_category["id"]; ?>">     <?php echo $row_classieds_category["ar_name"]; ?></a> </td>
      </tr>
     <?php }while($row_classieds_category = mysql_fetch_assoc($banner_classieds_category));?>
    </table>
            </td>
        
        </tr>
      </table>
    
    <!-- InstanceEndEditable -->
                                
                                
                        </article>
                       
                      </div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<div style="position:relative;padding-left:10px;padding-right:10px">
  <table width="80%" border="0" cellspacing="5" cellpadding="2" align="center" style="margin-top:10px;">
   
    <?php 
	  
	$counter = 6;
	 
    $ceil_num = ceil($totalRows_record_category/$counter);
    $floor_num = floor($totalRows_record_category/$counter);
	$TDs = "";
	
	for($i=0; $i<$floor_num;$i++)
    {
		  $TDs .= "<td  class=\"footerCategories\" align=\"right\"></td>";
	}
	
	do{ 
	        if($counter == 6)
			{
				$ceil_num--;
	?>
            <tr> 
      <?php }  ?>
        <td align="right" class="footerCategories"><a href="categories.php?categ_id=<?php echo $row_record_category["id"];  ?>"> <?php echo $row_record_category["ar_name"]; ?></a></td> 
        <?php $counter--;
		if($counter == 0)
		{
			 
		?>
</tr>             
     <?php  
	 $counter = 6;
	    }
		
		if($ceil_num == 0)
        {
		    if($totalRows_record_category == 1)
		    {
		       echo $TDs;
	        }
	    }
			
       $totalRows_record_category--;
   }while($row_record_category = mysql_fetch_assoc($record_category));?>

 
</table>
<p>Copyright © 2013, Shoofha.Net all rights reserved.</p>
</div>
</footer>

    </div>
   <p class="art-page-footer">
    <script src="http://cdn.wibiya.com/Toolbars/dir_1106/Toolbar_1106731/Loader_1106731.js" type="text/javascript"></script><noscript><a href="http://www.wibiya.com/"> 
    Web Toolbar by Wibiya</a></noscript>
   </p>
</div>

</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($record);
?>
