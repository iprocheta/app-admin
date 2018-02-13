<?php
require_once 'database.php';
?>
<?php

class product
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new database();
    }

    public function updateProduct($id, $data)
    {

        $query = "UPDATE heartattack SET hypertension=?,hyp_med=?,diabetes=?,dia_med=?,cholesterol=?,chol_med=?,smoke=?,family_history=?,chest_pain=?,Dyspnea=?,Giddiness=?,Neausea=?,Sweating=?,Syncope=?,Vomiting=?,cp_loaction=?,cp_mark=?,cp_type=?,cp_duration=?,LeftArm=?,RightArm=?,Back=?,UpperJaw=?,NoMovement=?,AssoticateDyspnea=?,AssosiateGiddiness=?,AssoticateNeausea=?,AssoticatePalpitation=?,AssoticateSweating=?,AssosiateSyncope=?,AssoticateVomiting=?,doing_while=?,relieved=?,subsided=?,persistence=?,similar_pain=?,class=? WHERE unique_id=?";
        $arr = array($data['Hypertension'],$data['Htn_medicine_years'],$data['Diabetics'],$data['db_medicine_years'],$data['Cholesterol'],$data['chol_medicine_years'],$data['smoking'],$data['family_history'],$data['chest_pain'],$data['Symptoms_Except_Chestpain_Dyspnea'],$data['Symptoms_Except_Chestpain_giddiness'],$data['Symptoms_Except_Chestpain_nausea'],$data['Symptoms_Except_Chestpain_sweating'],$data['Symptoms_Except_Chestpain_syncope'],$data['Symptoms_Except_Chestpain_vomiting'],$data['chest_pain_location'],$data['chest_pain_mark'],$data['chest_pain_type'],$data['chest_pain_time'],$data['Pain_going_Left_arm'],$data['Pain_going_Right_arm'],$data['Pain_going_Back'],$data['Pain_going_upper_jaw'],$data['Pain_going_no_movement'],$data['Association_Dyspnea'],$data['Association_giddiness'],$data['Association_nausea'],$data['Association_palpitation'],$data['Association_sweating'],$data['Association_syncope'],$data['Association_Vomiting'],$data['Doing_while_started'],$data['pain_relieved'],$data['subsided'],$data['persistense'],$data['similar_pain_in_past'],$data['class'], $id);
        $result = $this->db->updateDelete($query, $arr);


        if ($result) {
            $check = 'Updated successfully.';
            header('Location: edit.php?id='.$id.',check='.$check);

        } else {

        }

    }

    public function getAllProducts()
    {
        $query = "select * from heartattack natural join registration";
        $result = $this->db->readAllData($query);
        return $result;
    }

    public function getProductById($product_id)
    {
        $query = "SELECT * from heartattack WHERE unique_id=?";
        $arr = array($product_id);
        $result = $this->db->select($query, $arr);
        return $result;
    }
    public function getProductBySearch($product_id)
    {
        $query = "SELECT * from heartattack natural join registration WHERE heartattack.id=?";
        $arr = array($product_id);
        $result = $this->db->select($query, $arr);
        return $result;
    }

    public function delete($id)
    {
        $query = "DELETE from heartattack WHERE unique_id=?";
        $arr = array($id);
        $result = $this->db->updateDelete($query, $arr);
        header('Location: index.php');
    }

    public function updatePassword($oldPassword, $newPassword, $repeatPassword)
    {
        $email = session::get('adminEmail');
        $query = "SELECT email from admin WHERE email=? AND password=?";
        $arr = array($email, $oldPassword);
        $result = $this->db->select($query, $arr);
        if($result)
        {
            if($newPassword == $repeatPassword)
            {
                $query = "UPDATE admin SET password=? WHERE email=?";
                $arr = array($newPassword, $email);
                $result = $this->db->updateDelete($query, $arr);
                if($result)
                {
                    $check = 'Password updated successfully.';
                    return $check;
                }
                else
                {
                    $check = 'Failed...';
                    return $check;
                }
            }
            else
            {
                $check = 'New passwords do not match.';
                return $check;
            }
        }
        else
        {
            $check = 'Old password does not match.';
            return $check;
        }
    }
}

?>