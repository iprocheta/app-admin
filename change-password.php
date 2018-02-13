<?php include 'include/header.php'; ?>
<?php require 'product.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['backButton'])) {
    header('Location: index.php');
    exit();
}
$p = new product();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateButton'])) {
    $oldPassword = md5($_POST['oldPassword']);
    $newPassword = md5($_POST['newPassword']);
    $repeatPassword = md5($_POST['repeatPassword']);
    $check = $p->updatePassword($oldPassword, $newPassword, $repeatPassword);
}
?>
    <section class="container">
        <?php
        if (isset($check)) {
            echo $check;
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin-top: 30px;">
            <div class="form-group">
                <label for="oldPassword">Old password:</label>
                <input type="password" class="form-control" name="oldPassword" id="oldPassword">
            </div>
            <div class="form-group">
                <label for="newPassword">New password:</label>
                <input type="password" class="form-control" name="newPassword" id="newPassword">
            </div>
            <div class="form-group">
                <label for="repeatPassword">New password again:</label>
                <input type="password" class="form-control" name="repeatPassword" id="repeatPassword">
            </div>
            <button type="submit" name="updateButton" class="btn btn-primary">Update</button>
            <button type="submit" name="backButton" class="btn btn-info">Back</button>
        </form>
    </section>
<?php include 'include/footer.php'; ?>