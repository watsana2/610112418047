<html>
<body>
<?php
echo "Hello World !!!";

$sname = "Urairam";
$sports = array("Swimming","Running");
?>
<hr>
<?="My name is Suparat " . $sname ?>

<form action="../action/post.php" method="POST">
    <select name="sl_sport">
        <option>- Select -</option>
        <option value="1">Football</option>
        <option value="2">Tenis</option>
        <?php
            foreach($sports as $Key => $sport){
    ?>
            <option value="<?=$key+3?>"><?=$sport?></option>
        <?php } ?>
    </select>
    <button type="submit"> SEND </button>
</form>


<lable id="lb_post"></lable>

</body>
</html>
<script src="../js/jquery-3.4.1.min.js"></script>
<script>
$(function(){
    $("select").change(function(){
        sp_val = $(this).val();
        $("#lb_post").load("../action/post.php?getSport=" + sp_val);
    });
});

</script>
