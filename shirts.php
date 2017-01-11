
<p class="headin">Casual Shirts</p>
<div class="row">
<div class="portfolio-page portfolio-4column">
		
          <ul id="portfolio-list" data-animated="fadeIn">
		  <?php
			$rs=mysql_query("select * from gallery ",$cn) or die(mysql_error());
			while($row=mysql_fetch_array($rs))
				{
			?>
            <li>
              <img src="<?php echo $row['image']; ?>" alt="" id="img2"/>
			  
              <div class="portfolio-item-content"><br/><br/><br>
			<center>					
				 <a href="#<?php echo $row['link']; ?>" class="lightbox""><input type="button" class="btn btn-danger" value="VIEW" /></a>
					<input type="button" class="btn btn-success" value="Buy Now" /><br/>
			</center>
               <!-- <span class="header">See more...</span>
                <p class="body">Item no. : </p>-->
              </div><a href="#<?php echo $row['link']; ?>" class="lightbox"">
				<label>Item No. : <?php echo $row['item_no']; ?></label><br/>
				<label>Price : <?php echo $row['price']; ?></label><br/>
				<label>Description : <?php echo $row['description']; ?><label><br/>
			  </a>
             <!-- <a href="#collapse-1" class="lightbox""><i class="more">+</i></a>		-->		
            </li>
			
			<div id="<?php echo $row['link']; ?>" class="panel-collapse collapse" >
		    
				<div class="panel-body" style="border:4px solid red;" width="40%">
					<center><h3><ul>
						<li><img src="<?php echo $row['image']; ?>" /></li>
						<li>Item no. :<?php echo $row['item_no']; ?></li>
						<li>Price :<?php echo $row['price']; ?></li>
						<li>Description :<?php echo $row['description']; ?></li>
						 <li class="img-responsive animated wow zoomIn">
						<a href="index.php?con=6 & subcon=login" class="lightbox""><input type="button" class="btn btn-success" value="BUY NOW" /></a></li>
					</ul></h3>	</center>
				 </div>
			</div>
			<?php
			}
			?>
			</ul>
			
        <!-- End Portfolio Items -->
		</div>
	
				
	<!--<div class="col-sm-3">
		<img src="image/shirts/cs2.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs3.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs4.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
</div><br/>
<div class="row">
	<div class="col-sm-3">
		<img src="image/shirts/cs1.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs2.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs3.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs4.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
</div><br/>
<div class="row">
	<div class="col-sm-3">
		<img src="image/shirts/cs1.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs2.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs3.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs4.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
</div><br/>
<div class="row">
	<div class="col-sm-3">
		<img src="image/shirts/cs1.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs2.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs3.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>
	<div class="col-sm-3">
		<img src="image/shirts/cs4.jpg" class="img-responsive" alt="Casual Shirts" /><br/>
		<center>
			<label>Item No. :</label><br/>
			<label>Price :</label><br/>
			<label>Description :<label><br/>	
			<input type="button" class="btn btn-danger" value="VIEW" />
			<input type="button" class="btn btn-success" value="Buy Now" /><br/>
		</center>
	</div>-->
</div><br/>