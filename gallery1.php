<p class="headin">Gallery</p>
<div class=" portfolio-page portfolio-4column">
	<ul id="portfolio-list" data-animated="fadeIn">
<?php

	$rs=mysql_query("select * from gallery",$cn) or die(mysql_error());
	while($row=mysql_fetch_array($rs))
	{
?>
        <li>
			<img src="<?php echo $row['image']; ?>" alt="gallery-Image" id="img1" style="height:200px; width:200px;"/>
			<div class="portfolio-item-content">
				<span class="header">See more...</span>
				<p class="body"></p>
			</div>		  
			<a href="#<?php echo $row['link']; ?>" class="lightbox"><i class="more">+</i></a>		
        </li>
			<div id="<?php echo $row['link']; ?>" class="panel-collapse collapse">
				<center> <img src="<?php echo $row['image']; ?>" alt="gallery-image" id="img1"/>
				<div class="panel-body" style="border:4px solid red;">
					<center>
						<h3>
							<label>Iem No. : <?php echo $row['item_no']; ?></label><br/>
							<label>Price : <?php echo $row['price']; ?>/-</label><br/>
							<label>Description : <?php echo $row['description']; ?></label>
						</h3>
					</center>
				</div>
			</div>
<?php
	}
?>
	</ul>
</div>
			<!-- Start Pagination -->
			<!--<ul class="pagination">
			  <li><a href="#">1</a></li>
			  <li class="active"><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			</ul>-->
            <div id="pagination">
              <span class="all-pages">Page 1 of 3</span>
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <a class="next-page" href="#">Next</a>
            </div>
            <!-- End Pagination -->