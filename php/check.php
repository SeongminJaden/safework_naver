<?php
$servername = "localhost";
$username = "safework";
$password = "com47982@@";
$dbname = "safework";

// 접속 생성
$conn = new mysqli($servername, $username, $password, $dbname);
// 접속 체크
    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>"; }
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

    $date = $_POST["date"];
    $name = $_POST["name"];
    $Main_Category = $_POST["Main_Category"];
    $category=$_POST["category"];
    $writer = $_POST["writer"];
    echo "추가할 파일 리스트는 {$date},{$name},{$category},{$writer}";
    mysqli_query($conn, "set session character_set_connection=utf8;");
    mysqli_query($conn, "set session character_set_results=utf8;");
    mysqli_query($conn, "set session character_set_client=utf8;");
    if($Main_Category == 'a'){
        $sql = "INSERT INTO A (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'b'){
        $sql = "INSERT INTO B (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'c'){
        $sql = "INSERT INTO C (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'd'){
        $sql = "INSERT INTO D (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'e'){
        $sql = "INSERT INTO E (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'f'){
        $sql = "INSERT INTO F (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'g'){
        $sql = "INSERT INTO G (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'h'){
        $sql = "INSERT INTO H (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'i'){
        $sql = "INSERT INTO I (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    else if($Main_Category == 'j'){
        $sql = "INSERT INTO J (date, name, category, writer) VALUES ('$date','$name','$category','$writer')";        
    }
    if($conn->query($sql))echo"문서등록 성공";
    else echo "문서등록 실패";
    function Console_log($data){
        echo "<script>console.log( 'PHP_Console: " . $data . "' );
        </script>";
    }
    $testVal = "추가할 파일 리스트는 {$date},{$name},{$category},{$writer}";
    Console_log($testVal);
    ?>



<!-- 
     

   $conn = mysqli_connect("127.0.0.1", "root", "1234", "test_db");



   $select_query = "SELECT seq, name FROM test_table WHERE seq >= 3"; -> test_table 테이블 seq의 컬럼이 3인것만 카운트하라는 뜻

   $result_set = mysqli_query($conn, $select_query);



   $count = mysqli_num_rows($result_set);



   echo '$count : '.$count.'<br>';



   mysqli_close($conn);

    테이블 갯수 세는 함수
 -->