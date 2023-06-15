<?php
include("conn.php");
include("loaddata.php");

?>



<h2 class="text-center">ข้อมูลต้นไม้</h2>
<!-- บทความเเบบเขียน -->
<div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ต้นไม้</th>
                <th scope="col">ประเภท</th>
            </tr>
        </thead>
        <tbody id="place-data">
            <!-- <?php foreach ($pl as $data) { ?>

                <tr>
                    <th> <?= $data['pl_id'] ?> </th>
                    <td> <?= $data['pl_name'] ?> </td>
                    <td> <?= $data['pl_type'] ?> </td>
                </tr>

                <?php } ?> -->




        </tbody>

        <div id="showData"></div>


        <script src="jquery-1.11.2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
            $(function() {
                setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
                    // 1 วินาที่ เท่า 1000
                    // คำสั่งที่ต้องการให้ทำงาน ทุก ๆ 3 วินาที
                    var getData = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                        url: "gdata.php",
                        data: "rev=1",
                        async: false,
                        success: function(getData) {
                            $("div#showData").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                        }
                    }).responseText;
                }, 5000);
            });
        </script>
    </table>
</div>