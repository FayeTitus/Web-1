	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">最新</span> 活动</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="best-deal">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
				</div>

<?php
	require_once ("config.php");
	$TB_NAME = 'Activity';
	$sql = "select * from activity order by id desc;";
	$result = $DB->query($sql);
	while($row = $result->fetch_row()){
		$ID = $row['0'];
		$Title = $row['1'];
		$Time = $row['7'];
		$Location = $row['3'];
		$Img_path = $row['5'];
		$News = $row['6'];
		if($row['8'])
		{$content = $row['8'];}
		else
		{$content = substr($News, 0, 30);}
 ?>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src=<?php echo "$Img_path"; ?>  class="img-responsive">
						<!--目前的数据库还没有“活动状态”
							<a href="#" class="tag">正在进行</a>
						-->
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="activityShowPage.php?id=<?php echo $ID ?>"><?php echo $Title; ?></a></h3>
							<div class="price-status">
		               </div>
		               <p><?php echo $content; ?></p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span>地点：<strong><?php echo "$Location"; ?></strong></span>
	            		<br><span>活动时间：<strong><?php echo "$Time"; ?></strong></span>
	            	</p>
					</div>
				</div>				
<?php } ?>

			</div>


<!--分页，待完成
			<div class="row">
				<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
					<nav>
					  <ul class="pagination">
					    <li class="disabled">
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
-->

		</div>
	</div>
