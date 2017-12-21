<?php
$email = $_POST['email'];
$phone = $_POST['phone'];
$host = 'localhost';
$user = 'root';
$pw = 'yj102938';
$dbName = 'tnoter';
$date = date("F j, Y, g:i a");
$conn = mysqli_connect($host, $user, $pw, $dbName) or die('Error connectin to MySQL server');

$query = "SELECT * FROM board WHERE email='$email' AND phone='$phone'";
$result = mysqli_query($conn, $query) or die('회원정보와 일치하는 문의가 없습니다.');

?>

<!DOCTYPE html>
<html>

<head>
  <title>Tnoter </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <style>
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
</style>

</head>

<body>
  <div class="col-sm-10">
    <Table id="tableID" class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th class="col-md-1">글 번호</th>
          <th class="col-md-1">주문번호</th>
          <th class="col-md-4">제목</th>
          <th class="col-md-1">주문자명</th>
          <th class="col-md-2">시간</th>
        </tr>
      </thead>
      <tbody id = 'tableBody'>
        <?php
        $query = "SELECT * FROM board WHERE phone='$phone' ";
        $result = mysqli_query($conn,$query) or die('Error connectin database server');
        $it = 1;
        $rows =array();
        while($row = mysqli_fetch_array($result)){
          echo("<tr id='tableRow'>");
          echo("<td id='idx'>$it</td>");
          echo("<Td id='ordernumber'>$row[5]</Td>");
          echo("<Td id='title'>$row[0]</Td>");
          echo("<Td id='name'>$row[4]</Td>");
          echo("<Td id='date'>$row[6]  <span class='glyphicon glyphicon-lock'></span></Td>");
          echo('</tr>');
          $it += 1;
          array_push($rows,$row);
        }
        ?>
      </tbody>
    </Table>


  </div>
  <div class="col-sm-5">
    <a href="index.html"><button type="button" class="btn btn-primary btn-block">홈페이지로 가기</button></a>
  </div>
  <div class="col-sm-5">
    <a href="confirm.php"><button type="button" class="btn btn-primary btn-block">다시 조회하기</button></a>
  </div>

  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2 id="modal-header-h2">Modal Header</h2>
      </div>
      <div class="modal-body">
        <p id="modal-body-p">Some text in the Modal Body</p>
      </div>
      <div class="modal-footer">
        <p id="modal-footer-p">Modal Footer</p>
      </div>
    </div>
  </div>

  <script>
  var rows = document.getElementById("tableBody").children;
  var i;
  var modal = document.getElementById("myModal");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  var modal_header = document.getElementsByClassName("modal-header");
  var modal_header_h2 = document.getElementById("modal-header-h2");
  var modal_body_p = document.getElementById("modal-body-p");
  var modal_footer_p = document.getElementById("modal-footer-p");
  var arr =<?= json_encode($rows)?>;
  console.log(arr);
  if(arr.length == 0){
    alert('입력하신 정보에 해당하는 문의사항이 없습니다.');
    window.location.replace("http://127.0.0.1/confirm.php");
  }

  for(i=0; i<rows.length;i++){
    rows[i].onclick = function(){
      var idx = this.firstChild.innerHTML;
      var row = arr[idx-1];
      console.log(row);
      if(passwordValid(idx)){
        modal.style.display = 'block';
        modal_header_h2.innerHTML = row.title;
        modal_body_p.innerHTML = row.content;
        modal_footer_p.innerHTML = row.date + '에 작성';
      }
      else{
        alert('본인 확인 비밀번호를 다시 확인해주세요.');
      }

    };
  }
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  function passwordValid(index) {
    var password = prompt("본인확인 비밀번호를 입력해 주세요", "0000");
    if (password == arr[index-1].password) {
      return true;
    }
    else {
      return false;
    }
}
  </script>

</body>

</html>
