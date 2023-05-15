<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
  <?php
require('connect.php');

  $sql = 'SELECT * FROM pppp;';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1">
    <tr>
     <th width="50">
        <div align="center">No</div>
      </th>
      <th width="50">
        <div align="center">id</div>
      </th>
      <th width="100">
        <div align="center">url</div>
      </th>
      <th width="100">
        <div align="center">name</div>
      </th>
      <th width="100">
        <div align="center">website</div>
      </th>
      <th width="100">
        <div align="center">people_count</div>
      </th>
      <th width="100">
        <div align="center">senior_people_count</div>
      </th>
      <th width="100">
        <div align="center">emails_count</div>
      </th>
      <th width="100">
        <div align="center">personal_emails_count</div>
      </th>
      <th width="100">
        <div align="center">phones_count</div>
      </th>
      <th width="100">
        <div align="center">addresses_count</div>
      </th>
      <th width="100">
        <div align="center">changes_count</div>
      </th>
      <th width="100">
        <div align="center">people_changes_count</div>
      </th>

      <th width="100">
        <div align="center">contact_changes_count</div>
      </th>
      <th width="100">
        <div align="center">description_short</div>
      </th>
     
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
   
        <td><?php echo $objResult["id"]; ?></td>
        <td><?php echo $objResult["url"]; ?></td>
        <td><?php echo $objResult["name"]; ?></td>
        <td><?php echo $objResult["website"]; ?></td>
        <td><?php echo $objResult["people_count"]; ?></td>
        <td><?php echo $objResult["senior_people_count"]; ?></td>
        <td><?php echo $objResult["emails_count"]; ?></td>
        <td><?php echo $objResult["personal_emails_count"]; ?></td>
        <td><?php echo $objResult["phones_count"]; ?></td>
        <td><?php echo $objResult["addresses_count"]; ?></td>
        <td><?php echo $objResult["changes_count"]; ?></td>
        <td><?php echo $objResult["people_changes_count"]; ?></td>
        <td><?php echo $objResult["contact_changes_count"]; ?></td>
        <td><?php echo $objResult["description_short"]; ?></td>
        
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>