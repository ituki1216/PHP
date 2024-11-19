<?php
if(!empty($_POST['play'])){ // $characterの中には連想配列が格納される
  $character = $_POST['play'];
  echo $character;
}

if(!empty($_POST['your_name'])){
  $your_name = $_GET['your_name'];
  echo $your_name;
?>

<?php 
  //まずフォームが送信されたか確認する必要がある
  if(isset($_POST['play'])){
    $play = $_POST['play'];
    $random_play = rand(0, 1);
    $random_play_timer = rand(1, 10);

    if($random_play === 0){
      echo '今日はドラゴンクエスト3をプレイしません！明日の為にすやすや寝ます。';
    } elseif ($random_play === 1){
      echo "今日は思う存分ドラクエをプレイしましょうね！
            今日のプレイ時間は$random_play_timerです！！;
      }
  }
  ?>












    
<?php　//修正版
if (isset($_POST['play'])) {
    $play = $_POST['play'];  // 'play' ボタンが押された場合
    $random_play = rand(0, 1);  // 0または1をランダムに生成

    if ($random_play === 0) {
        echo '今日はドラゴンクエスト3をプレイしません！明日の為にすやすや寝ます。';
    } elseif ($random_play === 1) {
        echo "今日は思う存分ドラクエをプレイしましょうね！＾＾";
    }
}
?>

    
