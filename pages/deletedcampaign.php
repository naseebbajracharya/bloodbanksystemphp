<html>

<head>
<style>
#donor {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 80%;
margin-top:100px;
margin-left:80px;
}

#donor td, #customers th {
border: 1px solid #ddd;
padding: 8px;
text-align:center;
}

#donor tr:nth-child(even){background-color: #f2f2f2;}

#donor tr:hover {background-color: #ddd;}

#donor th {
padding-top: 12px;
padding-bottom: 12px;
text-align: center;
background-color: #e7e7e7;
color: black;
}
</style>

<title>BDMS</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>


<body>
<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">BLOOD DONORS MANAGEMENT SYSTEM</a>
    </div>
    <!-- /.navbar-header -->

    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                                <a href=""><i class="fa fa-heartbeat"></i> Blood Collection Details <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="addblood.html">Add Blood</a>
                                    </li>
                                    <li>
                                        <a href="viewblood.php">View Blood</a>
                                    </li>
                                    <li>
                                        <a href="editblood.php">Edit Blood</a>
                                    </li>
                                    <li>
                                        <a href="deleteblood.php">Remove Blood</a>
                                    </li>
                                </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="adddonor.html"><i class="fa fa-table fa-user-plus"></i> Add Donor</a>
                </li>
                <li>
                    <a href="viewdonor.php"><i class="fa fa-edit fa-eye"></i> View Donor Details</a>
                </li>
                <li>
                    <a href="editview.php"><i class="fa fa-edit fa-fw"></i> Edit Donor Details</a>
                </li>
                <li>
                <a href="deleteview.php"><i class="fa fa-user-times"></i> Delete Donor Details</a>
                </li>

                <li>
                                <a href=""><i class="fa fa-bullhorn"></i> Announcements <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="makeannouncement.html">Make Announcement</a>
                                    </li>
                                    <li>
                                        <a href="viewannouncement.php">View Announcement</a>
                                    </li>
                                    <li>
                                        <a href="editannounceform.php">Edit Announcement</a>
                                    </li>
                                    <li>
                                        <a href="deleteannouncement.php">Remove Announcement</a>
                                    </li>
                                </ul>
                            </li>

                             <li>
                                <a href=""><i class="fa fa-flag"></i> Campaigns <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="newcampaign.html">New Campaign</a>
                                    </li>
                                    <li>
                                        <a href="viewcampaign.php">View Campaign</a>
                                    </li>
                                    <li>
                                        <a href="updatecampaign.php">Update Campaign</a>
                                    </li>
                                    <li>
                                        <a href="deletedcampaign.php">Delete Campaign</a>
                                    </li>
                                </ul>
                            </li>
                            
            </ul>
        </div>
        </div>
            <!-- /.navbar-static-side -->
        </nav>


<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
                    <h1 class="page-header"><center>---DELETE CAMPAIGNS---</center></h1>
                </div>
                
<?php

include "dbconnect.php";

$qry="select * from campaigndb";
$result=mysqli_query($conn,$qry);


echo"<table border='1' id='donor'>
<tr>
    <th>Campaign Name</th>
    <th>Organizer Name</th>
    <th>Phone Number</th>
    <th>Campaign Date</th>
    <th>Description</th>
    <th>Action</th>
</tr>";

while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['cname']."</td>
  <td>".$row['oname']."</td>
  <td>".$row['phn']."</td>
  <td>".$row['cdate']."</td>
  <td>".$row['descp']."</td>
  <td><a href='finaldeletecampaign.php?id=".$row['id']."'>DELETE</a></td>

</tr>";
}

?>
</div>
</div>
</div>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>