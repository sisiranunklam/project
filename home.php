<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper_1_14_3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" 
    integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous"><!--การเรียกใช้ Code icon สามารถเลือกใช้ได้เลย-->
    <!--ลองไปศึกษา Javascript ดูเพราะปัจจุบันสำคัญมาก-->
    <title>Document</title>
</head>
<body>
<?php
 require ('navbar.html');
?>
    
<div class="card" style="top:50%; left:50%; position: absolute; transform: translate(-50%, -50%); padding: 50px; width:500px; height: 500px; border-radius:25px;">
	<H2>ค้นหาคอร์สเรียน/ติวเตอร์</H2>
	<fieldset>
		<form action="oo_disp_teacher.php" method="POST" style="margin:20px; padding: 5px;">
            <h4 style="font-family:sans-serif;">ค้นหา</h4>
            
            
             <div class="row">
                <label class="col-sm-5 col-form-label-sm text-right">ชื่อสถาบัน</label>  
                <input type="text" name="text" class="col-sm-6 form-control-sm">
            </div> 
            <div class="row">
                <label class="col-sm-5 col-form-label-sm text-right">ชื่อครูผู้สอน</label>  
                <input type="text" name="text" class="col-sm-6 form-control-sm">
            </div>
            <div class="row">
            <div class="col-1"></div>
                    <label class="col-4 col-form-label-sm text-right ">ประเภท </label> 
                    <select name="sec" id="" class="form-control-sm ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
        </div>
        <div class="row">
            <div class="col-1"></div>
                    <label class="col-4 col-form-label-sm text-right ">หมวดหมู่ </label> 
                    <select name="sec" id="" class="form-control-sm ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
        </div>
         <div class="row">
            <div class="col-1"></div>
                    <label class="col-4 col-form-label-sm text-right ">วิชา </label> 
                    <select name="sec" id="" class="form-control-sm ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
        </div>
          
          
            <div class="row">
                <div class="col-sm-8"></div>
                <input type="submit" name="submit" id="" value="ค้นหา" class="btn btn-info mx-3 float-right" style="margin:2px; margin-bottom: 15px;">
              
            </div>
			
			</form>
	</fieldset>
	</div>
</body>
</html>