
<?php 

include "conn.php";


if(isset($_POST['submit'])){

  
$campaign_name=$_POST['campaign_name'];
$campaign_start=$_POST['campaign_start'];
$campaign_end=$_POST['campaign_end'];
$adtag_type=$_POST['adtag_type'];
$publisher_name=$_POST['publisher_name'];

  if ((strtotime($campaign_start)) > (strtotime($campaign_end)))
{
    Echo "<h1 style='color:red;font-size:18px;position:absolute;top:218px;left:700px;'>Please check end date.</h1>";
}
else {
  $sql="INSERT INTO `campaign_info`(`campaign_start`,`campaign_end`,`campaign_name`,`adtag_type`,`publisher_name`) VALUES ('$campaign_start','$campaign_end','$campaign_name','$adtag_type','$publisher_name')";
  $result=mysqli_query($connectDB,$sql);
}
} 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
  <link rel="stylesheet" href="style.css">
    <style>
        .dropdown-menu{ max-height:250px; overflow:auto;margin-bottom:30px; }
        form{
            margin-left:50px;
        }
        
        .heading{
          text-align:center;
          margin-bottom:30px;
        }

        .main{
          text-align:center;
        }

        label{
          
  padding:20px;
        }
    </style>
  <title>Campaign Info</title>
</head>
<body>
    <div class="main">
    <h1 class="heading">Campaign Information</h1>

    <form action="" method="post">
      
        <label for="campaign_name">Enter Campaign name: </label> <input name="campaign_name" type="text" required><br><br>
        <label for="campaign_start">Enter Campaign start date: </label> <input name="campaign_start" type="datetime-local"><br><br>
        <label for="campaign_end">Enter Campaign end date: </label> <input name="campaign_end" type="datetime-local"><br><br>
        <label for="adtag_type" required>Choose adtag type: </label>
        <select id="adtag_type" name="adtag_type">
    <option value="dcm">DCM</option>
    <option value="dv360">DV360</option>
    <option value="dv360/dbmc">DV360/Dbmc</option>
    <option value="dfp">DFP</option>
    <option value="criteo">CRITEO</option>
    <option value="sports">Sports</option>
  </select>
        <br><br>
        <label for="publisher_name">Enter publisher name: </label> <input name="publisher_name" type="text"><br><br>
<div style="text-align:center;">
<button class="btn btn-success" type="submit" name="submit">Submit</button>
</div>
        
    </form>
    </div>
    <script>
let $select = $('#templates_drop').multiselect({
  enableFiltering: true,
  includeFilterClearBtn: true,
  enableCaseInsensitiveFiltering: true
  
});
    </script>
</body>
</html>
