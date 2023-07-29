<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-6 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
					<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>		<p style="color: white"> Address : <?php  echo $row['PageDescription'];?></p>
<p style="color: white"> Contact : <?php  echo $row['MobileNumber'];?> / 9845130742</p>
<p style="color: white"> Email : <?php  echo $row['Email'];?></p>
<p style="color: white"> Timing : <?php  echo $row['Timing'];?></p>
	<?php } ?>
					</div>
</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© Created by Suman&Preethi . All Rights Reserved...!!!</p>
			</div>
		</div>
	</div>