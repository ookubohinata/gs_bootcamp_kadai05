<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

<div id="top_area">
  <p id=aaaa>じゃんけんです</p>
  <p id=bbbb>下記から選択してね</p>

  <form action="" method = "post" id=button>
    <input type="submit" value = "グー" name = "playerhand">
    <input type="submit" value = "チョキ" name = "playerhand">
    <input type="submit" value = "パー" name = "playerhand">
  </form>
</div>
<div id="junken">
    <?php
    // phpのコードを記述
      // じゃんけんの手を配列に代入
      $junken = array(
        "グー",
        "チョキ",
        "パー",
      );
      // プレイヤーの手がPOSTされたら
      if(isset($_POST["playerhand"])){
        // プレイヤーの手を代入
        $playerhand = $_POST["playerhand"];

        // PCの手をランダムで選択
        $key = array_rand($junken);
        $pchand = $junken[$key];

        if($playerhand == $pchand){
          echo "あいこ！もう一度！"."<br>";
        }elseif($playerhand == "グー" && $pchand == "チョキ"){
          echo "あなたの勝ち"."<br>";
        }elseif($playerhand == "チョキ" && $pchand == "パー"){
          echo "あなたの勝ち"."<br>";
        }elseif($playerhand == "パー" && $pchand == "グー"){
          echo "あなたの勝ち"."<br>";
        }else{
          echo "あなたの負け"."<br>";
        }
        
        echo "あなたの手は".$playerhand."<br>";
        echo "コンピューターの手は".$pchand."<br>";
        
      }

    ?>
</div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
