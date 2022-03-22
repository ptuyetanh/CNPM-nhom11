<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">xóa</h4></center>
                </div>
                <div class="modal-body">
				<?php
                $number=mysqli_query($conn,"select * from account where id='".$row['id']."'");
                $drow=mysqli_fetch_array($number);
            ?>
            <div class="container-fluid">
                <h5><center>Bạn có muốn xóa không? </strong> </center></h5> 
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal"style="background-color:rgb(255, 145, 0)" class="me-5"><span class="glyphicon glyphicon-remove"></span> Không</button>
                <a href="deleteAccount.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Có</a></button>
            </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
 
