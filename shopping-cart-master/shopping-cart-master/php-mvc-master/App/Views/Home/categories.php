<?php
include "../App/Views/Home/layout/header.php";
//include "../App/Views/Home/layout/slider.php";
?>
 <div class="main">
    <div class="content">

    	<div class="content_top">
            <div class="heading">
                <?php
                foreach ($categories as $category){
                    ?>
                    <a href="categories/<?php echo $category['id']?>"><h3> <?php  echo $category['name'];?></h3></a>

                <?php } ?>
    		</div>
    		<div class="clear"></div>
    	</div>

<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<a href="preview-2.php"><img src="images/feature-pic2.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
<!--					 <p><span class="price">$620.87</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<a href="preview-4.php"><img src="images/feature-pic3.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
<!--					 <p><span class="price">$220.97</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<img src="images/feature-pic4.png" alt="" />-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
<!--					 <p><span class="price">$415.54</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--			</div>-->


<!--		<div class="content_bottom">-->
<!--    		<div class="heading">-->
<!--    		<h3>Samsung</h3>-->
<!--    		</div>-->
<!--    		<div class="clear"></div>-->
<!--    	</div>-->
<!--			<div class="section group">-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					 <a href="preview-3.php"><img src="images/new-pic1.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p><span class="price">$403.66</span></p>-->
<!--				    -->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<a href="preview-4.php"><img src="images/new-pic2.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p><span class="price">$621.75</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<a href="preview-2.php"><img src="images/feature-pic2.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p><span class="price">$428.02</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--				 <img src="images/new-pic3.jpg" alt="" />-->
<!--					 <h2>Lorem Ipsum is simply </h2>					 -->
<!--					 <p><span class="price">$457.88</span></p>   -->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
			</div>
<!---->
<!--	<div class="content_bottom">-->
<!--    		<div class="heading">-->
<!--    		<h3>Canon</h3>-->
<!--    		</div>-->
<!--    		<div class="clear"></div>-->
<!--    	</div>-->
<!--			<div class="section group">-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					 <a href="preview-3.php"><img src="images/new-pic1.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p><span class="price">$403.66</span></p>-->
<!--				    -->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<a href="preview-4.php"><img src="images/new-pic2.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p><span class="price">$621.75</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--					<a href="preview-2.php"><img src="images/feature-pic2.jpg" alt="" /></a>-->
<!--					 <h2>Lorem Ipsum is simply </h2>-->
<!--					 <p><span class="price">$428.02</span></p>-->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--				<div class="grid_1_of_4 images_1_of_4">-->
<!--				 <img src="images/new-pic3.jpg" alt="" />-->
<!--					 <h2>Lorem Ipsum is simply </h2>					 -->
<!--					 <p><span class="price">$457.88</span></p>   -->
<!--				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>-->
<!--				</div>-->
<!--			</div>-->
    </div>
 </div>
<?php
include "../App/Views/Home/layout/footer.php";

?>