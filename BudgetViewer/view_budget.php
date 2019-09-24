<?php
include('include/config.php');
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Budget Details Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="view.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="1">
<?php 
     $ret= mysqli_query($db,"SELECT * FROM capitalbudget where id = '".$_GET['id']."'");
      while($row=mysqli_fetch_array($ret))
      {
      ?>
      <tr>
        <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
      <tr>
        <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
      
      <tr>
        <td colspan="2"  class="font"><?php echo ucfirst($row['BudgetName']);?> <?php echo ucfirst($row['BugetType']);?>'S  <span class="font1"> Details &raquo;</span> </td>
  </tr>
      <tr>
        <td colspan="2"  class="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div align="right">Created Date : <span class="comb-value"><?php echo $row['Created_Date'];?></span></div></td>
  </tr>
      <tr>
        <td colspan="2"  class="heading" style="color: red;">Budget  Related Information &raquo; </td>
  </tr>
      <tr>
        <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Budget Name : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['BudgetName'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Finanical Year : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['FinanicalYear'];?></span></td>
                    </tr>
                  
                    <tr>
            <td width="12%" valign="top" class="heading"> Buget Type: </td>
              <td class="comb-value1"><?php echo $row['BugetType'];?></td>
                    </tr>
                    
                    <tr>
        <td width="12%" valign="top" class="heading">CostCenterCode : </td>
        <td class="comb-value1"><?php echo $row['CostCenterCode'];?></td>
                    </tr>
                    <tr>
 <td width="12%" valign="top" class="heading"> CostCenter : </td>
 <td class="comb-value1"><?php echo $row['CostCenter'];?></td>
                    </tr>
                  
 <!--  <tr>
   <td colspan="2" align="left"  class="heading" style="color: red;"> &raquo; </td>
  </tr> -->
<tr>
<td width="12%" valign="top" class="heading"> AccountCode : </td>
<td class="comb-value1"><?php echo $row['AccountCode'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">BudgetLine : </td>
<td class="comb-value1"><?php echo $row['BudgetLine'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Budget Item One : </td>
<td class="comb-value1"><?php echo $row['Budget_Item_One'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Budget_Item_Two : </td>
<td class="comb-value1"><?php echo $row['Budget_Item_Two'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Budget_Item_Three: </td>
<td class="comb-value1"><?php echo $row['Budget_Item_Three'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">BudgetNotes: </td>
<td class="comb-value1"><?php echo $row['BudgetNotes'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Attachment One: </td>
<td class="comb-value1"><?php echo $row['Attachment_one'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Attachment Two: </td>
<td class="comb-value1"><?php echo $row['Attachment_Two'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Proposed Amount: </td>
<td class="comb-value1"><?php echo $row['proposedamount'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Approval One : </td>
<td class="comb-value1"><?php echo $row['approval_one'];?>
  &emsp;&emsp;&emsp;
   <b><i> Approval: .............................................................................................</i><br><br>
   <i>Title: ..............................................................................</i></b>
  <i><b>Signature &nbsp;:&nbsp;.........................................</b>
  </i>
</td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Approval Two : </td>
<td class="comb-value1"><?php echo $row['approval_two'];?>
&emsp;&emsp;&emsp;
   <b><i> Approval: .............................................................................................</i><br><br>
   <i>Title: ..............................................................................</i></b>
  <i><b>Signature &nbsp;:&nbsp;.........................................</b>
  </i>
</td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Created_By : </td>
<td class="comb-value1"><?php echo $row['Created_By'];?>
  <i>
    &emsp;&emsp;&emsp;
   <b><i> Approval: .............................................................................................</i><br><br>
   <i>Title: ..............................................................................</i></b>
  <i><b>Signature &nbsp;:&nbsp;.........................................</b>
  
  </i>
</td>
</tr>

<?php } ?>  
                  </table></td>
                </tr>
                  </table></td>
                </tr>
              </table></td>
  </tr>
    </table></td>
  </tr>

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Prints this Document " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close this document " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
