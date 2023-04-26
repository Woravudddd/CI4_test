<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?= $this->include('layouts\navbar'); ?>
<br>
<div class="container shadow min-vh-20 py-4">
    <h1 class="text-center">จัดการสินค้า</h1>
    <form action="<?= url_to('CreateItemClick'); ?>"  method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name_item" class="form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" id="name_item" name="name_item">
                          
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('name_item') ?></small>
                            <?php endif;?>
                        <div class="mb-3">
                            <label for="detail" class="form-label">รายละเอียด</label>
                            <input type="text" class="form-control" id="detail" name="detail" >
                           
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('detail') ?></small>
                            <?php endif;?>

                        <div class="mb-3">
                            <label for="price" class="form-label">ราคา/ต่อชิ้น</label>
                            <input type="text" class="form-control" id="price" name="price">
                            
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('price') ?></small>
                            <?php endif;?>
                        <div class="mb-3">
                            <label for="unit" class="form-label">หน่วย</label>
                            <input type="text" class="form-control" id="unit" name="unit">
                            
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('unit') ?></small>
                            <?php endif;?>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">สินค้ามีจำนวนทั้งหมด</label>
                            <input type="text" class="form-control" id="quantity" name="quantity">
                         
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('quantity') ?></small>
                            <?php endif;?>
                        <div class="mb-3">
                            <label for="fname" class="form-label">ชื่อ-ผู้ขาย</label>
                            <input type="text" class="form-control" id="fname" name="fname" >
                           
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('fname') ?></small>
                            <?php endif;?>
                        <div class="mb-3">
                            <label for="lname" class="form-label">นามสกุล-ผู้ขาย</label>
                            <input type="text" class="form-control" id="lname" name="lname" >
                           
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('lname') ?></small>
                            <?php endif;?>
                        <div class="mb-3">
                            <label for="phone" class="form-label">รูปสินค้า</label>
                            <input type="file" class="form-control" id="image" name="image" >
                           
                        </div>
                        <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('image') ?></small>
                            <?php endif;?>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">บันทึก</button>
                        </div>

                    </form>


<div>
    
</body>
</html>