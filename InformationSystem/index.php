<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./vendor/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Information System</title>
</head>
<body>

<?php 
include './insertmodal.php';
?>
    
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#save_data">
  Launch demo modal
</button>

<div class="container-section">
    <table id="information-table" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "informatiomsystem");
            $query = "SELECT * FROM userinfo";
            $result = mysqli_query($connection, $query);

            
            if(mysqli_num_rows($result) > 0)
                {
                    foreach($result as $data)
                    {
                        ?>
                         <tr>
                            <td><?php echo $data ['id'] ?></td>
                            <td><?php echo $data ['name'] ?></td>
                            <td><?php echo $data ['email'] ?></td>
                            <td><?php echo $data ['phone'] ?></td>
                            <td><?php echo $data ['address'] ?></td>
                            <td> 
                                <button id = "btnDelete" value ="<?php echo $data['id'] ?>" class = "btn btn-danger"> 
                                <i class="fa-solid fa-trash"></i>
                        
                                </button>   
                            </td>
                            </tr>
                        <?php
                    }
                }

            ?>
            
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>