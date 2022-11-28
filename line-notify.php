 <?php 


    $header = "รายการสั่งซื้อ";
    $name = $_POST['name'];
    $where = $_POST['where'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $postnum = $_POST['postnum'];
    $select1 = $_POST['select1'];
    $num1 = $_POST['num1'];
    $select2 = $_POST['select2'];
    $num2 = $_POST['num2'];
    $slip = $_POST['slip'];

    $message = $header.
                "\n". "ชื่อ: " . $name .
                "\n". "ที่อยู่: " . $where .
                "\n". "รหัสไปรษณีย์: " . $postnum.
                "\n". "เบอร์โทรศัพท์: " . $phone .
                "\n". "อีเมล์: " . $email.
                "\n". "รายการ1: " . $select1.
                "\n". "จำนวนรายการ1: " . $num1.
                "\n". "รายการ2: " . $select3.
                "\n". "จำนวนรายการ2: " . $num2.
                "\n". "สลิปโอนเงิน: " . $slip;

                
    if (isset($_POST["submit"])) {
        if ( $name <> "" ||  $where <> "" ||  $phone <> "" ||  $select1 <> "" ||  $num1 <> "" ||  $postnum <> "") {
            sendlinemesg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            echo "<script>alert('สั่งซื้อเสร็จสิ้น');</script>";
            header("location: index.php");
        } else {
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');</script>";
            header("location: index.php");
        }
    }

    function sendlinemesg() {
		// LINE LINE_API https://notify-api.line.me/api/notify
		// LINE TOKEN mhIYaeEr9u3YUfSH1u7h9a9GlIx3Ry6TlHtfVxn1bEu แนะนำให้ใช้ของตัวเองนะครับเพราะของผมยกเลิกแล้วไม่สามารถใช้ได้
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"NIVRS6JN11mYegmoUATjgM9TnJW2TwsC9v1fG9UFoEW");

        function notify_message($message) {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOptions = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }
    }


?>