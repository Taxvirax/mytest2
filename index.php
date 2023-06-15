<?php
include("conn.php");
include("loaddata.php")
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <title>mytest2</title>
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary">
                <p class="text-center text-white">เเบบบันทึกข้อมูลต้นไม้</p>
            </div>
            <div class="card-body">
                <form id="fupForm" name="form1" method="post">
                    <div class="form-group">
                        <label for="pl_id">ชื่อต้นไม้:</label>
                        <input type="text" class="form-control" id="pl_name" placeholder="ชื่อต้นไม้" name="pl_name">
                    </div>
                    <div class="form-group">
                        <label for="pl_name">ประเภทต้นไม้</label>
                        <input type="email" class="form-control" id="pl_type" placeholder="ประเภทต้นไม้" name="pl_type">
                    </div>
                    <input type="button" name="save" class="btn btn-primary" value="บันทึกข้อมูล" id="save" onclick="test()">
                </form>
            </div>
        </div>
    </div>

    <script>
        function test() {
            var pl_name = $("#pl_name").val();
            var pl_type = $("#pl_type").val();

            $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: {
                        pl_name: pl_name,
                        pl_type: pl_type,
                    }

                })
                .done(function(msg) {
                    alert("Data Saved: " + msg);
                });
        }
    </script>


    <br>
    <h2 class="text-center">ข้อมูลต้นไม้</h2>
    <!-- บทความเเบบเขียน -->
    <div class="container">
        <div id="showData"></div>

        <script src="jquery-1.11.2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        
        <script type="text/javascript">
            $(function() {
                setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
                    // 1 วินาที่ เท่า 1000
                    // คำสั่งที่ต้องการให้ทำงาน ทุก ๆ 3 วินาที
                    var getData = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                        url: "pdata.php",
                        data: "rev=1",
                        async: false,
                        success: function(getData) {
                            $("div#showData").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                        }
                    }).responseText;
                }, 5000);
            });
        </script>

    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-1.11.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>