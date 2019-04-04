<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| CLEAN |</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="main-dashboard">
        <div class="my-nav">
           <h1>COMPLAINTS</h1>
        </div>
        <div class="row">
            <div class="col-md-3 admin-options">
                <div class="admin-categories">
                    <div class="card">
                            <div class="card-header">
                                Admin Options
                            </div>
                            <div class="card-body">
                                <div class="card-title"><i class="fas fa-chevron-right"></i> View Complaints</div>
                                <hr>
                                <div class="card-title" data-toggle="modal" data-target="#myModal"><i class="fas fa-chevron-right"></i> Create Sweeper</div>
                            </div>
                        </div>
                </div>
            </div>
            
            <div class="col-md-6 admin-content">
                <div class="card-view" id="view-complaints">
                    <div class="card">
                        <div class="card-header">
                            Complaint
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">something</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate obcaecati deserunt ipsum inventore quas ipsam sequi recusandae nesciunt distinctio voluptates blanditiis amet officiis, neque praesentium expedita eligendi est dolores nostrum?</p>                        
                            <button class="ok_btn btn btn-success"><i class="fas fa-check"></i></button>
                            <button class="cancel_btn btn btn-danger"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Complaint
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">something</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate obcaecati deserunt ipsum inventore quas ipsam sequi recusandae nesciunt distinctio voluptates blanditiis amet officiis, neque praesentium expedita eligendi est dolores nostrum?</p>                        
                            <button class="ok_btn btn btn-success"><i class="fas fa-check"></i></button>
                            <button class="cancel_btn btn btn-danger"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 admin-options"></div>
        </div>
    </div>
    

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content  modal-dialog modal-lg">
                        <div class="modal-header">
                        <h4 class="modal-title">Create New Sweeper</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                        </div>
                        <div class="modal-body">
                        <form action="create_sweeper.php" method="post">
                            <div class="form-group">
                                <label for="Name">Name:</label>
                                <input type="text" class="form-control" name="name" id="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="Aadhaar_id">Aadhaar_id:</label>
                                <input type="number" class="form-control" name="aadhaar"id="Aadhaar_id" required>
                            </div>
                            <div class="form-group">
                                <label for="Pincode">Pincode:</label>
                                <input type="number" class="form-control" name="pincode" id="Pincode" required>
                            </div>
                            <div class="form-group">
                                <label for="Email_id">Email_id:</label>
                                <input  type="email" class="form-control" name="email" id="Email_id" required>
                            </div>
                            <div class="form-group">
                                <label for="Phone_no">Phone_no.:</label>
                                <input type="number" class="form-control" name="ph" id="Phone_no" required>
                            </div>
                            <button type="submit" class="btn btn-success">Create</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <p id="erros"></p>
                        </div>
                     </div>
                
                </div>
             </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    <script src="main.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
    <script src="main.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>