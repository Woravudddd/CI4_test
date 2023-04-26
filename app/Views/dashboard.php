<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
 


</style>
<body>
<?= $this->include('layouts\navbar'); ?>

    <?php if(session()->has('isLoggedIn')) {
            echo 1111;
    } ?>
    <div class="container shadow min-vh-20 py-4">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " >
   
  <div class='navbar-brand mx-3 md-3' style="font-size: 36px; font-weight: 900;  ;color :chartreuse; ">Employee Dashboard</div>
  <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <div class="d-flex float-end" role="search">
    
        <a class="btn btn-outline-success" href="<?= url_to('create') ?>">CREATE EMPLOYEE</a>
       
</div>
</div>

</nav>
</div><br></hr>
<div class="container">
<?php if (session()->getFlashdata('success')): 
    echo  "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js\"></script>";
    echo "<script>
    Swal.fire({
        title: 'Alert Title',
        text: 'บันทึกข้อมูลสำเร็จ',
        icon: 'success'
      });
    </script>";

elseif(session()->getFlashdata('delsuccess')) : 
    echo  "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js\"></script>";
    echo "<script>
    Swal.fire({
        title: 'Alert Title',
        text: 'ลบข้อมูลสำเร็จ',
        icon: 'warning'
      });
    </script>";
    elseif(session()->getFlashdata('success3')) : 
        echo  "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js\"></script>";
        echo "<script>
        Swal.fire({
            title: 'Alert Title',
            text: 'แก้ไขข้อมูลสำเร็จ',
            icon: 'success'
          });
        </script>"; 
        endif;?>
  
    <table class="table table-boreder text-center ">
        <thead m>
            <td>No</td>
            <td>Frist Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>action</td>
        </thead>
        <?php foreach($getAlldata as $item ): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['fname']; ?></td>
            <td><?= $item['lname']; ?></td>
            <td><?= $item['email']; ?></td>
            <td><?= $item['phone']; ?></td>
            <td><a href='<?= url_to('edit' ,$item['id']);?>' class="btn btn-warning mx-1">edit</a> <a href='<?= url_to('delete',$item['id'])?>' class="btn btn-danger ">delete</a> </td>
            

        </tr>
        <?php endforeach; ?>
    </table>



</div>
</body>
</html>