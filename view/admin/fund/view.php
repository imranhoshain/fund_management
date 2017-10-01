<?php 
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
/*$bazar = new App\admin\bazar\Bazar();
$product = $bazar->view($_GET['id'])*/;
?>
<div id="page-wrapper" style="min-height: 349px;">   
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Event Details
                </div>
                <div class="panel-body">
                    <div class="single-item">
                        <img src="assets/admin/uploads/1.jpg" alt="...">
                        <h4>
                            Name
                        </h4>
                        <div class="ratings">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </div>
                        <p>
                            Detail
                        </p>
                        <hr class="line">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p class="price">৳ 20000
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer ">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <div class="event-footer">
                                <a href="view/admin/product/delete.php?id=" class="btn btn-danger">Delete</a>
                                <a href="view/admin/product/edit.php?id=" class="btn btn-primary">Edit</a>
                                <a href="index.php" class="btn btn-default">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<?php
include_once '../include/footer.php';
?>