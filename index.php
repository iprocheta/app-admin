<?php include 'include/header.php'; ?>
<?php require 'product.php'; ?>
<?php
$p = new product();
if(isset($_GET['search']))
{
    $product = $p->getProductBySearch($_GET['search']);
}
else
{
    $product = $p->getAllProducts();
}
?>
    <div class="container">
        <p>DATA:</p>
        <a type="button" class="btn btn-info" href="index.php">All Data</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Hypertension</th>
                    <th>Htn_medicine_years</th>
                    <th>Diabetics</th>
                    <th>db_medicine_years</th>
                    <th>Cholesterol</th>
                    <th>chol_medicine_years</th>
                    <th>smoking</th>
                    <th>family_history</th>
                    <th>chest_pain</th>
                    <th>Symptoms_Except_Chestpain_Dyspnea</th>
                    <th>Symptoms_Except_Chestpain_giddiness</th>
                    <th>Symptoms_Except_Chestpain_nausea</th>
                    <th>Symptoms_Except_Chestpain_sweating</th>
                    <th>Symptoms_Except_Chestpain_syncope</th>
                    <th>Symptoms_Except_Chestpain_vomiting</th>
                    <th>chest_pain_location</th>
                    <th>chest_pain_mark</th>
                    <th>chest_pain_type</th>
                    <th>chest_pain_time</th>
                    <th>Pain_going_Left_arm</th>
                    <th>Pain_going_Right_arm</th>
                    <th>Pain_going_Back</th>
                    <th>Pain_going_upper_jaw</th>
                    <th>Pain_going_no_movement</th>
                    <th>Association_Dyspnea</th>
                    <th>Association_giddiness</th>
                    <th>Association_nausea</th>
                    <th>Association_palpitation</th>
                    <th>Association_sweating</th>
                    <th>Association_syncope</th>
                    <th>Association_Vomiting</th>
                    <th>Doing_while_started</th>
                    <th>pain_relieved</th>
                    <th>subsided</th>
                    <th>persistense</th>
                    <th>similar_pain_in_past</th>
                    <th>class</th>
                    <th>time stamp</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if($product){ foreach ($product as $pr) { ?>
                    <tr>
                        <td><?php echo $pr['id']; ?></td>
                        <td><?php echo $pr['Age']; ?></td>
                        <td><?php echo $pr['Gender']; ?></td>
                        <td><?php echo $pr['hypertension']; ?></td>
                        <td><?php echo $pr['hyp_med']; ?></td>
                        <td><?php echo $pr['diabetes']; ?></td>
                        <td><?php echo $pr['dia_med']; ?></td>
                        <td><?php echo $pr['cholesterol']; ?></td>
                        <td><?php echo $pr['chol_med']; ?></td>
                        <td><?php echo $pr['smoke']; ?></td>
                        <td><?php echo $pr['family_history']; ?></td>
                        <td><?php echo $pr['chest_pain']; ?></td>


                        <td><?php echo $pr['Dyspnea']; ?></td>
                        <td><?php echo $pr['Giddiness']; ?></td>
                        <td><?php echo $pr['Neausea']; ?></td>
                        <td><?php echo $pr['Sweating']; ?></td>
                        <td><?php echo $pr['Syncope']; ?></td>
                        <td><?php echo $pr['Vomiting']; ?></td>

                        <td><?php echo $pr['cp_loaction']; ?></td>
                        <td><?php echo $pr['cp_mark']; ?></td>
                        <td><?php echo $pr['cp_type']; ?></td>
                        <td><?php echo $pr['cp_duration']; ?></td>
                        <td><?php echo $pr['LeftArm']; ?></td>
                        <td><?php echo $pr['RightArm']; ?></td>
                        <td><?php echo $pr['Back']; ?></td>
                        <td><?php echo $pr['UpperJaw']; ?></td>
                        <td><?php echo $pr['NoMovement']; ?></td>

                        <td><?php echo $pr['AssoticateDyspnea']; ?></td>
                        <td><?php echo $pr['AssosiateGiddiness']; ?></td>
                        <td><?php echo $pr['AssoticateNeausea']; ?></td>
                        <td><?php echo $pr['AssoticatePalpitation']; ?></td>
                        <td><?php echo $pr['AssoticateSweating']; ?></td>
                        <td><?php echo $pr['AssosiateSyncope']; ?></td>
                        <td><?php echo $pr['AssoticateVomiting']; ?></td>


                        <td><?php echo $pr['doing_while']; ?></td>
                        <td><?php echo $pr['relieved']; ?></td>
                        <td><?php echo $pr['subsided']; ?></td>
                        <td><?php echo $pr['persistence']; ?></td>
                        <td><?php echo $pr['similar_pain']; ?></td>
                        <td><?php echo $pr['class']; ?></td>
                        <td><?php echo $pr['Time']; ?></td>
                        <td><a type="button" class="btn btn-info" href="edit.php?id=<?php echo $pr['unique_id']; ?>">Edit</a>
                        </td>
                        <td><a type="button" class="btn btn-warning" href="delete.php?id=<?php echo $pr['unique_id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include 'include/footer.php'; ?>