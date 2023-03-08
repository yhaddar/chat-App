<?php 
    include('./inc/db.php');
    $messages = $conn -> prepare("SELECT * FROM chat");
    $messages -> execute();
    foreach ($messages AS $message) :
        $name = $message['name'];
        $msg = $message['message'];
        $date = $message['date'];
?>
<div style="margin-top: 20px; margin-bottom: 20px">
    <div style="display: flex; justify-content: flex-start; align-items: center; margin-left: 20px; margin-right: 20px">
        <h1 style="font-size: 18px; margin-right: 5px; color: orange;"><?php echo $name ?>:</h1>
        <h1  display: flex; justify-content: space-around; align-items: center;  style="font-size: 18px; margin-right: 5px"  class="message"><?php echo $msg ?></h1>
    </div>
    <div style="display: flex; justify-content: center;">
        <h1 style="font-size: 18px; margin-right: 5px; font-weight: 100;"><?php echo $date ?></h1>
    </div>
</div>
<?php endforeach; ?>