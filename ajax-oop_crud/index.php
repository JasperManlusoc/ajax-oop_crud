<?php 
include 'config/connect.php';
?>
<!DOCTYPE html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="bg-primary">
        <div class="container mb-3 mt-3" id="viewRecords">
            <div class="row m-auto">
                <div class="col -lg">
                  <div class="card">
                    <!--start of card header-->
                    <div class="card-header">
                      <div class="row">
                        <div class="col">
                          <h4>USERS</h4>
                        </div>
                        <div class="col">
                          <a href="#" class="btn btn-success float-right"  data-toggle="modal" data-target="#addUserModal">
                            Add
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--end of card header-->

                    <!--start of table-->
                    <div class="card-body">
                      <table class="table table-dark table-bordered table-hover text-center ">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Course</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="tbody"></tbody>
                      </table>
                      <div class="card-footer"></div></div>
                    </div>
                    <!--end of table-->
                  </div>
                </div>
              </div>
            </div>

            <!--start of modal add user-->
            <div class="modal fade" id="addUserModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="addForm">
                      <div class="form-text">Please fill out the required fields.</div><br>
                      <input class="form-control" type ="number" name="id" placeholder="ID" required><br>
                      <input class="form-control" type ="text" name="name" placeholder="Name" required><br>
                      <input class="form-control" type ="number" name="age" placeholder="Age" required><br>
                      <input class="form-control" type ="text" name="course" placeholder="Course" required><br>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" >Add</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--end of modal add user-->

            <!--start of modal edit user-->
            <div class="modal fade" id="editUserModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="editForm">
                      <div class="form-text">Please fill out the required fields.</div><br>
                      <input class="form-control" type ="number" name="id" placeholder="ID"><br>
                      <input class="form-control" type ="text" name="name" placeholder="Name"><br>
                      <input class="form-control" type ="number" name="age" placeholder="Age"><br>
                      <input class="form-control" type ="text" name="course" placeholder="Course"><br>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success">Update</button>
                      </div>
                      
                    </form>
                  </div>
                  
                  
                </div>
              </div>
            </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>