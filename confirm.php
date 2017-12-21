

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="container">
    <div class="page-header">
      <h1>조회 하기</h1>
    </div>
    <form class="form-horizontal" action="./action_page2.php" method='post'>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">이메일:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="이메일" name="email" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="phone">핸드폰번호:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="phone" placeholder="핸드폰" name="phone" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">조회</button>
        </div>
      </div>
    </form>
  </body>
  </html>
