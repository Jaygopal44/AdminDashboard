<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1 class="m-0">Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Add Blog</li>
                         </ol>
                    </div><!-- /.col -->
               </div><!-- /.row -->
          </div><!-- /.container-fluid -->
     </div>
     <!--- header end -->
     <!-- table start  -->
     <div class="card">
          <div class="card-header">
               <h3 class="card-title">Display Blog</h3>
               <a href="" class="btn btn-info " data-toggle="modal" data-target="#aa" style="float: right;">Add Blog</a>
          </div>
          <!-- /.card-header  -->
          <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr>
                              <th>Rendering engine</th>
                              <th>Browser</th>
                              <th>Platform(s)</th>
                              <th>Engine version</th>
                              <th>CSS grade</th>
                         </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                         <tr>
                              <th>Rendering engine</th>
                              <th>Browser</th>
                              <th>Platform(s)</th>
                              <th>Engine version</th>
                              <th>CSS grade</th>
                         </tr>
                    </tfoot>
               </table>
          </div>
          <!-- /.card-body -->
     </div>
     <!-- /.card -->
     <!-- table end -->
</div> <!-- container-wrapper end -->
<!-- login modal-->
<section>
     <div class="modal fade" id="aa">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="">Add Blog</h5>
                         <button type="button" class="close" data-dismiss="modal">
                              <span>&times;</span>
                         </button>

                    </div>
                    <div class="modal-body">

                         <form>

                              <div class="form-group">
                                   <label>Title:</label>
                                   <input type="text" name="" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label>Description:</label>
                                   <input type="number" name="" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label>Image:</label>
                                   <input type="file" name="" class="form-control">
                              </div>

                              <center>
                                   <button class="btn btn-info">Submit Blog</button>
                              </center>
                         </form>
                    </div> <!-- modal body div end-->

               </div><!-- modal content div end-->
          </div>
          <!--modal dialog div end-->
     </div>
     <!--modal fade div end-->

</section>
<!-- login modal end-->

<?php include "footer.php" ?>