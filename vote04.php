<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 



    session_start();

    require_once "db.php";



    if (isset($_POST['submit'])) {

        $ids = $_POST['ids'];


        $sql = $conn->prepare("INSERT INTO vote04(ids) VALUES(:ids)");

        $sql->bindParam(":ids", $ids);

        $sql->execute();



        if ($sql) {

            $_SESSION['success'] = "เพิ่มข้อมูลสำเร็จ";

            echo "<script>

                $(document).ready(function() {

                    Swal.fire({

                        title: 'ท่านเลือกหมายเลข 4',

                        text: 'ลงคะแนนสำเรจแล้ว',

                        icon: 'success',

                        timer: 20000,

                        showConfirmButton: false

                    });

                })

            </script>";

            header("refresh:2; url=vote.php");

        } else {

            $_SESSION['error'] = "มีบางอย่างผิดปกติ เพิ่มข้อมูลไม่สำเร็จ";

        }

    }

?>

