<?php include 'include/header.php'; ?>
<?php require 'product.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['backButton'])) {
    header('Location: index.php');
    exit();
}
$p = new product();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$pr = $p->getProductById($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateButton'])) {
    $p->updateProduct($id,$_POST);
}
?>
<section class="container">
    <?php
    if (isset($_GET['check'])) {
        echo $_GET['check'];
    }
    ?>
    <form action="" method="post">
        <button type="submit" name="backButton" class="btn btn-info">Back</button>
        <div class="form-group">
            <label for="Hypertension">Hypertension:</label>
            <input type="text" class="form-control" name="Hypertension" id="Hypertension" value="<?php echo $pr[0]['hypertension']; ?>">
        </div>
        <div class="form-group">
            <label for="Htn_medicine_years">Htn_medicine_years:</label>
            <input type="text" class="form-control" name="Htn_medicine_years" id="Htn_medicine_years" value="<?php echo $pr[0]['hyp_med']; ?>">
        </div>
        <div class="form-group">
            <label for="Diabetics">Diabetics:</label>
            <input type="text" class="form-control" name="Diabetics" id="Diabetics" value="<?php echo $pr[0]['diabetes']; ?>">
        </div>
        <div class="form-group">
            <label for="db_medicine_years">db_medicine_years:</label>
            <input type="text" class="form-control" name="db_medicine_years" id="db_medicine_years" value="<?php echo $pr[0]['dia_med']; ?>">
        </div>
        <div class="form-group">
            <label for="Cholesterol">Cholesterol:</label>
            <input type="text" class="form-control" name="Cholesterol id="Cholesterol" value="<?php echo $pr[0]['cholesterol']; ?>">
        </div>
        <div class="form-group">
            <label for="chol_medicine_years">chol_medicine_years:</label>
            <input type="text" class="form-control" name="chol_medicine_years" id="chol_medicine_years" value="<?php echo $pr[0]['chol_med']; ?>">
        </div>
        <div class="form-group">
            <label for="smoking">smoking:</label>
            <input type="text" class="form-control" name="smoking" id="smoking" value="<?php echo $pr[0]['smoke']; ?>">
        </div>
        <div class="form-group">
            <label for="family_history">family_history:</label>
            <input type="text" class="form-control" name="family_history" id="family_history" value="<?php echo $pr[0]['family_history']; ?>">
        </div>
        <div class="form-group">
            <label for="chest_pain">chest_pain:</label>
            <input type="text" class="form-control" name="chest_pain" id="chest_pain" value="<?php echo $pr[0]['chest_pain']; ?>">
        </div>
        <div class="form-group">
            <label for="Symptoms_Except_Chestpain_Dyspnea">Symptoms_Except_Chestpain_Dyspnea:</label>
            <input type="text" class="form-control" name="Symptoms_Except_Chestpain_Dyspnea" id="Symptoms_Except_Chestpain_Dyspnea" value="<?php echo $pr[0]['Dyspnea']; ?>">
        </div>
        <div class="form-group">
            <label for="Symptoms_Except_Chestpain_giddiness">Symptoms_Except_Chestpain_giddiness:</label>
            <input type="text" class="form-control" name="Symptoms_Except_Chestpain_giddiness" id="Symptoms_Except_Chestpain_giddiness" value="<?php echo $pr[0]['Giddiness']; ?>">
        </div>
        <div class="form-group">
            <label for="Symptoms_Except_Chestpain_nausea">Symptoms_Except_Chestpain_nausea:</label>
            <input type="text" class="form-control" name="Symptoms_Except_Chestpain_nausea" id="Symptoms_Except_Chestpain_nausea" value="<?php echo $pr[0]['Neausea']; ?>">
        </div>
        <div class="form-group">
            <label for="Symptoms_Except_Chestpain_sweating">Symptoms_Except_Chestpain_sweating:</label>
            <input type="text" class="form-control" name="Symptoms_Except_Chestpain_sweating" id="Symptoms_Except_Chestpain_sweating" value="<?php echo $pr[0]['Sweating']; ?>">
        </div>
        <div class="form-group">
            <label for="Symptoms_Except_Chestpain_syncope">Symptoms_Except_Chestpain_syncope:</label>
            <input type="text" class="form-control" name="Symptoms_Except_Chestpain_syncope" id="Symptoms_Except_Chestpain_syncope" value="<?php echo $pr[0]['Syncope']; ?>">
        </div>
        <div class="form-group">
            <label for="Symptoms_Except_Chestpain_vomiting">Symptoms_Except_Chestpain_vomiting:</label>
            <input type="text" class="form-control" name="Symptoms_Except_Chestpain_vomiting" id="Symptoms_Except_Chestpain_vomiting" value="<?php echo $pr[0]['Vomiting']; ?>">
        </div>
        <div class="form-group">
            <label for="chest_pain_location">chest_pain_location:</label>
            <input type="text" class="form-control" name="chest_pain_location" id="chest_pain_location" value="<?php echo $pr[0]['cp_loaction']; ?>">
        </div>
        <div class="form-group">
            <label for="chest_pain_mark">chest_pain_mark:</label>
            <input type="text" class="form-control" name="chest_pain_mark" id="chest_pain_mark" value="<?php echo $pr[0]['cp_mark']; ?>">
        </div>
        <div class="form-group">
            <label for="chest_pain_type">chest_pain_type:</label>
            <input type="text" class="form-control" name="chest_pain_type" id="chest_pain_type" value="<?php echo $pr[0]['cp_type']; ?>">
        </div>
        <div class="form-group">
            <label for="chest_pain_time">chest_pain_time:</label>
            <input type="text" class="form-control" name="chest_pain_time" id="chest_pain_time" value="<?php echo $pr[0]['cp_duration']; ?>">
        </div>
        <div class="form-group">
            <label for="Pain_going_Left_arm">Pain_going_Left_arm:</label>
            <input type="text" class="form-control" name="Pain_going_Left_arm" id="Pain_going_Left_arm" value="<?php echo $pr[0]['LeftArm']; ?>">
        </div>
        <div class="form-group">
            <label for="Pain_going_Right_arm">Pain_going_Right_arm:</label>
            <input type="text" class="form-control" name="Pain_going_Right_arm" id="Pain_going_Right_arm" value="<?php echo $pr[0]['RightArm']; ?>">
        </div>
        <div class="form-group">
            <label for="Pain_going_Back">Pain_going_Back:</label>
            <input type="text" class="form-control" name="Pain_going_Back" id="Pain_going_Back" value="<?php echo $pr[0]['Back']; ?>">
        </div>
        <div class="form-group">
            <label for="Pain_going_upper_jaw">Pain_going_upper_jaw:</label>
            <input type="text" class="form-control" name="Pain_going_upper_jaw" id="Pain_going_upper_jaw" value="<?php echo $pr[0]['UpperJaw']; ?>">
        </div>
        <div class="form-group">
            <label for="Pain_going_no_movement">Pain_going_no_movement:</label>
            <input type="text" class="form-control" name="Pain_going_no_movement" id="Pain_going_no_movement" value="<?php echo $pr[0]['NoMovement']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_Dyspnea">Association_Dyspnea:</label>
            <input type="text" class="form-control" name="Association_Dyspnea" id="Association_Dyspnea" value="<?php echo $pr[0]['AssoticateDyspnea']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_giddiness">Association_giddiness:</label>
            <input type="text" class="form-control" name="Association_giddiness" id="Association_giddiness" value="<?php echo $pr[0]['AssosiateGiddiness']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_nausea">Association_nausea:</label>
            <input type="text" class="form-control" name="Association_nausea" id="Association_nausea" value="<?php echo $pr[0]['AssoticateNeausea']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_palpitation">Association_palpitation:</label>
            <input type="text" class="form-control" name="Association_palpitation" id="Association_palpitation" value="<?php echo $pr[0]['AssoticatePalpitation']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_sweating">Association_sweating:</label>
            <input type="text" class="form-control" name="Association_sweating" id="Association_sweating" value="<?php echo $pr[0]['AssoticateSweating']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_syncope">Association_syncope:</label>
            <input type="text" class="form-control" name="Association_syncope" id="Association_syncope" value="<?php echo $pr[0]['AssosiateSyncope']; ?>">
        </div>
        <div class="form-group">
            <label for="Association_Vomiting">Association_Vomiting:</label>
            <input type="text" class="form-control" name="Association_Vomiting" id="Association_Vomiting" value="<?php echo $pr[0]['AssoticateVomiting']; ?>">
        </div>
        <div class="form-group">
            <label for="Doing_while_started">Doing_while_started:</label>
            <input type="text" class="form-control" name="Doing_while_started" id="Doing_while_started" value="<?php echo $pr[0]['doing_while']; ?>">
        </div>
        <div class="form-group">
            <label for="pain_relieved">pain_relieved:</label>
            <input type="text" class="form-control" name="pain_relieved" id="pain_relieved" value="<?php echo $pr[0]['relieved']; ?>">
        </div>
        <div class="form-group">
            <label for="subsided">subsided:</label>
            <input type="text" class="form-control" name="subsided" id="subsided" value="<?php echo $pr[0]['subsided']; ?>">
        </div>
        <div class="form-group">
            <label for="persistense">persistense:</label>
            <input type="text" class="form-control" name="persistense" id="persistense" value="<?php echo $pr[0]['persistence']; ?>">
        </div>
        <div class="form-group">
            <label for="similar_pain_in_past">similar_pain_in_past:</label>
            <input type="text" class="form-control" name="similar_pain_in_past" id="similar_pain_in_past" value="<?php echo $pr[0]['similar_pain']; ?>">
        </div>
        <div class="form-group">
            <label for="class">class:</label>
            <input type="text" class="form-control" name="class" id="class" value="<?php echo $pr[0]['class']; ?>">
        </div>
        <button type="submit" name="updateButton" class="btn btn-primary">Update</button>

    </form>
</section>
<?php include 'include/footer.php'; ?>