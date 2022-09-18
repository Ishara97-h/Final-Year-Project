<?php 


  session_start(); 

  if (!isset($_SESSION['reg_id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: medical.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

    $reg_id = "";
    $Surgical_Diagnosis="";
    $General="";
    $PR="";
    $BP="";
    $Murmurs="";
    $IHD="";
    $symptoms_cardiovascular="";
    $Cardiovascular_Other="";
    $Cardiovascular_status_controled = isset($_POST["Cardiovascular_status_controled"]);
    $Cardiovascular_status_danger = isset($_POST["Cardiovascular_status_danger"]);
    $RR ="";
    $SPO2 = "";
    $COPD = "";
    $BA = "";
    $symptoms_respiratory = "";
    $Respiratory_other = "";
    $Respiratory_status_controled = isset($_POST["Respiratory_status_controled"]);
    $Respiratory_status_danger = isset($_POST["Respiratory_status_danger"]);
    $Chronic_Kidney_Disease = "";
    $Stones = "";
    $Renal_other = "";
    $Renal_status_controled = isset($_POST["Renal_status_controled"]);
    $Renal_status_danger = isset($_POST["Renal_status_danger"]);
    $GORD_yn = isset($_POST["GORD_yn"]);
    $GORD_Other = "";
    $GORD_status_controled = isset($_POST["GORD_status_controled"]);
    $GORD_status_danger = isset($_POST["GORD_status_danger"]);
    $Anaemia = "";
    $Diabetes = "";
    $Hypo = "";
    $Haem_other = "";
    $Haem_status_controled = isset($_POST["Haem_status_controled"]);
    $Haem_status_danger = isset($_POST["Haem_status_danger"]);
    $Strikes = "";
    $TIA = "";
    $Osteoartheritis = "";
    $Osteoporosis = "";
    $Neuro_other = "";
    $Neuro_status_controled = isset($_POST["Neuro_status_controled"]);
    $Neuro_status_danger = isset($_POST["Neuro_status_danger"]);
    $POA_other = "";
    $POA = "";
    $POA_status_controled = isset($_POST["POA_status_controled"]);
    $POA_status_danger = isset($_POST["POA_status_danger"]);
    $Allergies_types = isset($_POST["Allergies_types"]);
    $Allergies_other = "";
    $MET_yn = isset($_POST["MET_yn"]);
    $MET_other = "";
    $MET_status_controled = isset($_POST["MET_status_controled"]);
    $MET_status_danger = isset($_POST["MET_status_danger"]);
    $smoking_yn = isset($_POST["smoking_yn"]);
    $smoking_other = "";
    $Smoking_status_controled = isset($_POST["Smoking_status_controled"]);
    $Smoking_status_danger = isset($_POST["Smoking_status_danger"]);
    $Alcohol_yn = isset($_POST["Alcohol_yn"]);
    $alcohol_other = "";
    $Alcohol_status_controled = isset($_POST["Alcohol_status_controled"]);
    $Alcohol_status_danger = isset($_POST["Alcohol_status_danger"]);
    $Current_Medication = "";
    $Current_Medication_other="";
    $Previous_anesthesia_types= isset($_POST["Previous_anesthesia_types"]);
    $Operations= "";
    $Operations_types= isset($_POST["Operations_types"]);
    $Operations_other= "";
    $Airway_Assessment_types= isset($_POST["Airway_Assessment_types"]);
    $Fasting= isset($_POST["Fasting"]);
    $time= isset($_POST["time"]);
    $Investigations="";
    $Premedication= "";
    $Drugs_to_be_omitted= "";
    $DVT_Prophyluxis= "";
    $Preoperative_instructions_other= "";
    $Na = "";
    $K = "";
    $Urea = "";
    $Creatinine ="";
    $Bilirubin = "";
    $Albumin = "";
    $Alk_Phos = "";
    $AST = "";
    $ALT = "";
    $PT_INR = "";
    $APTT ="";
    $Hb = "";
    $WBC = "";
    $Platelets = "";
    $FBS_RBS_PPBS = "";
    $Investigation_status_controled = isset($_POST["Investigation_status_controled"]);
    $Investigation_status_danger = isset($_POST["Investigation_status_danger"]);
    $ECG = "";
    $Echocardiogram = "";
    $CXR = "";
    $ECG_other = "";
    $Anticipated_Anesthetic_problem_types = isset($_POST["Anticipated_Anesthetic_problem_types"]);
    $Anesthetic_Plan = isset($_POST["Anesthetic_Plan"]);
    $R_L = "";
    $Consent_yn = isset($_POST["Consent_yn"]);
    $Post_Op_Analgesia = isset($_POST["Post_Op_Analgesia"]);
    $Nurse = "";
    $Doctor = "";
    //$Date = "";
    //$Done_Time = "";
    $Informed_By = "";
    $index = "";
    $asa = "";
    
$db = mysqli_connect('localhost','root','','asa') or die("Could not connect to the database");

//$bmi="underweight - BMI : " . $index;

if(isset($_POST['sub'])){ 
    $reg_id = mysqli_real_escape_string($db,$_REQUEST['reg_id']);
    $Surgical_Diagnosis=$_POST['Surgical_Diagnosis'];
    $General=$_POST['General'];
    $PR=($_POST["PR"]);
    $BP=($_POST["BP"]);
    $Murmurs=($_POST["Murmurs"]);
    $IHD=($_POST["IHD"]);
    $symptoms_cardiovascular=($_POST["symptoms_cardiovascular"]);
    $Cardiovascular_Other=($_POST["Cardiovascular_Other"]);
    $Cardiovascular_status_controled = isset($_POST["Cardiovascular_status_controled"]);
    $Cardiovascular_status_danger = isset($_POST["Cardiovascular_status_danger"]);
    $RR =($_POST["RR"]);;
    $SPO2 = ($_POST["SPO2"]);
    $COPD = ($_POST["COPD"]);
    $BA = ($_POST["BA"]);
    $symptoms_respiratory = ($_POST["symptoms_respiratory"]);
    $Respiratory_other = ($_POST["Respiratory_other"]);
    $Respiratory_status_controled = isset($_POST["Respiratory_status_controled"]);
    $Respiratory_status_danger = isset($_POST["Respiratory_status_danger"]);
    $Chronic_Kidney_Disease = ($_POST["Chronic_Kidney_Disease"]);
    $Stones = ($_POST["Stones"]);
    $Renal_other = ($_POST["Renal_other"]);
    $Renal_status_controled = isset($_POST["Renal_status_controled"]);
    $Renal_status_danger = isset($_POST["Renal_status_danger"]);
    $GORD_yn = isset($_POST["GORD_yn"]);
    $GORD_Other = ($_POST["GORD_Other"]);
    $GORD_status_controled = isset($_POST["GORD_status_controled"]);
    $GORD_status_danger = isset($_POST["GORD_status_danger"]);
    $Anaemia = ($_POST["Anaemia"]);
    $Diabetes = ($_POST["Diabetes"]);
    $Hypo = ($_POST["Hypo"]);
    $Haem_other = ($_POST["Haem_other"]);
    $Haem_status_controled = isset($_POST["Haem_status_controled"]);
    $Haem_status_danger = isset($_POST["Haem_status_danger"]);
    $Strikes = ($_POST["Strikes"]);
    $TIA = ($_POST["TIA"]);
    $Osteoartheritis = ($_POST["Osteoartheritis"]);
    $Osteoporosis = ($_POST["Osteoporosis"]);
    $Neuro_other = ($_POST["Neuro_other"]);
    $Neuro_status_controled = isset($_POST["Neuro_status_controled"]);
    $Neuro_status_danger = isset($_POST["Neuro_status_danger"]);
    $POA_other = ($_POST["POA_other"]);
    $POA = ($_POST["POA"]);
    $POA_status_controled = isset($_POST["POA_status_controled"]);
    $POA_status_danger = isset($_POST["POA_status_danger"]);
    $Allergies_types = isset($_POST["Allergies_types"]);
    $Allergies_other = ($_POST["Allergies_other"]);
    $MET_yn = isset($_POST["MET_yn"]);
    $MET_other = ($_POST["MET_other"]);
    $MET_status_controled = isset($_POST["MET_status_controled"]);
    $MET_status_danger = isset($_POST["MET_status_danger"]);
    $smoking_yn = isset($_POST["smoking_yn"]);
    $smoking_other = ($_POST["smoking_other"]);
    $Smoking_status_controled = isset($_POST["Smoking_status_controled"]);
    $Smoking_status_danger = isset($_POST["Smoking_status_danger"]);
    $Alcohol_yn = isset($_POST["Alcohol_yn"]);
    $alcohol_other = ($_POST["alcohol_other"]);
    $Alcohol_status_controled = isset($_POST["Alcohol_status_controled"]);
    $Alcohol_status_danger = isset($_POST["Alcohol_status_danger"]);
    $Current_Medication = ($_POST["Current_Medication"]);
    $Current_Medication_other=($_POST["Current_Medication_other"]);
    $Previous_anesthesia_types= isset($_POST["Previous_anesthesia_types"]);
    $Operations= ($_POST["Operations"]);
    $Operations_types= isset($_POST["Operations_types"]);
    $Operations_other= ($_POST["Operations_other"]);
    $Airway_Assessment_types= isset($_POST["Airway_Assessment_types"]);
    $Fasting= isset($_POST["Fasting"]);
    $time= isset($_POST["time"]);
    $Investigations=($_POST["Investigations"]);
    $Premedication= ($_POST["Premedication"]);
    $Drugs_to_be_omitted= ($_POST["Drugs_to_be_omitted"]);
    $DVT_Prophyluxis= ($_POST["DVT_Prophyluxis"]);
    $Preoperative_instructions_other= ($_POST["Preoperative_instructions_other"]);
    $Na = ($_POST["Na"]);
    $K = ($_POST["K"]);
    $Urea = ($_POST["Urea"]);
    $Creatinine = ($_POST["Creatinine"]);
    $Bilirubin = ($_POST["Bilirubin"]);
    $Albumin = ($_POST["Albumin"]);
    $Alk_Phos = ($_POST["Alk_Phos"]);
    $AST = ($_POST["AST"]);
    $ALT = ($_POST["ALT"]);
    $PT_INR = ($_POST["PT_INR"]);
    $APTT =($_POST["APTT"]);
    $Hb = ($_POST["Hb"]);
    $WBC = ($_POST["WBC"]);
    $Platelets = ($_POST["Platelets"]);
    $FBS_RBS_PPBS = ($_POST["FBS_RBS_PPBS"]);
    $Investigation_status_controled = isset($_POST["Investigation_status_controled"]);
    $Investigation_status_danger = isset($_POST["Investigation_status_danger"]);
    $ECG = ($_POST["ECG"]);
    $Echocardiogram = ($_POST["Echocardiogram"]);
    $CXR = ($_POST["CXR"]);
    $ECG_other = ($_POST["ECG_other"]);
    $Anticipated_Anesthetic_problem_types = isset($_POST["Anticipated_Anesthetic_problem_types"]);
    $Anesthetic_Plan = isset($_POST["Anesthetic_Plan"]);
    $R_L = ($_POST["R_L"]);
    $Consent_yn = isset($_POST["Consent_yn"]);
    $Post_Op_Analgesia = isset($_POST["Post_Op_Analgesia"]);
    $Nurse = ($_POST["Nurse"]);
    $Doctor = ($_POST["Doctor"]);
    //$Date = ($_POST["Date"]);
    //$Done_Time = ($_POST["Done_Time"]);
    $Informed_By = ($_POST["Informed_By"]);
    
    
    if (($PR!=null || $BP!=null || $Murmurs!=null || $IHD!=null ||  $Cardiovascular_Other!=null || $RR!=null || $SPO2!=null || $COPD!=null || $BA!=null || $Respiratory_other!=null || $Chronic_Kidney_Disease!=null || $Stones!=null || $Renal_other!=null || $GORD_yn!=null || $GORD_Other!=null || $Anaemia!=null || $Diabetes!=null || $Hypo!=null || $Haem_other!=null || $Strikes!=null || $TIA!=null || $Osteoartheritis!=null|| $Osteoporosis!=null || $Neuro_other!=null || $POA!=null|| $POA_other!=null || $MET_yn!=null || $MET_other!=null || $smoking_yn!=null || $smoking_other!=null || $Alcohol_yn!=null || $alcohol_other!=null || $Na!=null || $K!=null || $Urea!=null || $Creatinine!=null || $Bilirubin!=null || $Albumin!=null || $Alk_Phos!=null || $AST!=null || $ALT!=null || $PT_INR!=null || $APTT!=null || $Hb!=null || $WBC!=null || $Platelets!=null || $FBS_RBS_PPBS!=null ) &&  ($Cardiovascular_status_danger=="Danger" || $Respiratory_status_danger=="Danger" || $Renal_status_danger=="Danger" || $GORD_status_controled=="Danger" || $Haem_status_danger=="Danger" || $Neuro_status_danger=="Danger" || $POA_status_danger=="Danger" || $MET_status_danger=="Danger" || $Smoking_status_danger=="Danger" || $Alcohol_status_danger=="Danger" || $Investigation_status_danger=="Danger")){
        $index = "Level 4";
        $asa="ASA " . $index;
    //$bmiStyle="alert alert-secondary";
        }
    else if (($PR!=null || $BP!=null || $Murmurs!=null || $IHD!=null ||  $Cardiovascular_Other!=null || $RR!=null || $SPO2!=null || $COPD!=null || $BA!=null || $Respiratory_other!=null || $Chronic_Kidney_Disease!=null || $Stones!=null || $Renal_other!=null || $GORD_yn!=null || $GORD_Other!=null || $Anaemia!=null || $Diabetes!=null || $Hypo!=null || $Haem_other!=null || $Strikes!=null || $TIA!=null || $Osteoartheritis!=null || $Osteoporosis!=null || $Neuro_other!=null || $POA!=null|| $POA_other!=null || $MET_yn!=null || $MET_other!=null || $smoking_yn!=null || $smoking_other!=null || $Alcohol_yn!=null || $alcohol_other!=null || $Na!=null || $K!=null || $Urea!=null || $Creatinine!=null || $Bilirubin!=null || $Albumin!=null || $Alk_Phos!=null || $AST!=null || $ALT!=null || $PT_INR!=null || $APTT!=null || $Hb!=null || $WBC!=null || $Platelets!=null || $FBS_RBS_PPBS!=null ) && ($Cardiovascular_status_controled=='Controled' || $Respiratory_status_controled=="Controled" || $Renal_status_controled=="Controled" || $GORD_status_controled=="Controled" || $Haem_status_controled=="Controled" || $Neuro_status_controled=="Controled" || $POA_status_controled=="Controled" || $MET_status_controled=="Controled" || $Smoking_status_controled=="Controled" || $Alcohol_status_controled=="Controled" || $Investigation_status_controled=="Controled") ){
        $index = "Level 3";
        $asa="ASA " . $index;
    //$bmiStyle="alert alert-secondary";
    }
    else if (($PR!=null || $BP!=null || $Murmurs!=null || $IHD!=null || $RR!=null || $SPO2!=null || $COPD!=null || $BA!=null || $Chronic_Kidney_Disease!=null || $Stones!=null || $GORD_yn!=null || $Anaemia!=null || $Diabetes!=null || $Hypo!=null || $Strikes!=null || $TIA!=null || $Osteoartheritis!=null || $Osteoporosis!=null ||$MET_yn!=null ||$smoking_yn!=null || $Alcohol_yn!=null || $Na!=null || $K!=null || $Urea!=null || $Creatinine!=null || $Bilirubin!=null || $Albumin!=null || $Alk_Phos!=null || $AST!=null || $ALT!=null || $PT_INR!=null || $APTT!=null || $Hb!=null || $WBC!=null || $Platelets!=null || $FBS_RBS_PPBS!=null) &&  ($Cardiovascular_Other!=null || $Respiratory_other!=null || $Renal_other!=null || $GORD_Other!=null || $Haem_other!=null || $Neuro_other!=null || $POA!=null|| $POA_other!=null || $MET_other!=null || $smoking_other!=null || $alcohol_other!=null ) ){
    $index = "Level 2";
    $asa="ASA " . $index;
    //$bmiStyle="alert alert-secondary";
    }
    
    
    else{
    $index = "Level 1";
    $asa="ASA " . $index;
    //$bmiStyle="alert alert-secondary";
    }
     
}

if(isset($_POST['next'])){ 
    $reg_id = mysqli_real_escape_string($db,$_REQUEST['reg_id']);
    $Surgical_Diagnosis=$_POST['Surgical_Diagnosis'];
    $General=$_POST['General'];
    $PR=($_POST["PR"]);
    $BP=($_POST["BP"]);
    $Murmurs=($_POST["Murmurs"]);
    $IHD=($_POST["IHD"]);
    $symptoms_cardiovascular=($_POST["symptoms_cardiovascular"]);
    $Cardiovascular_Other=($_POST["Cardiovascular_Other"]);
    $Cardiovascular_status_controled = isset($_POST["Cardiovascular_status_controled"]);
    $Cardiovascular_status_danger = isset($_POST["Cardiovascular_status_danger"]);
    $RR =($_POST["RR"]);;
    $SPO2 = ($_POST["SPO2"]);
    $COPD = ($_POST["COPD"]);
    $BA = ($_POST["BA"]);
    $symptoms_respiratory = ($_POST["symptoms_respiratory"]);
    $Respiratory_other = ($_POST["Respiratory_other"]);
    $Respiratory_status_controled = isset($_POST["Respiratory_status_controled"]);
    $Respiratory_status_danger = isset($_POST["Respiratory_status_danger"]);
    $Chronic_Kidney_Disease = ($_POST["Chronic_Kidney_Disease"]);
    $Stones = ($_POST["Stones"]);
    $Renal_other = ($_POST["Renal_other"]);
    $Renal_status_controled = isset($_POST["Renal_status_controled"]);
    $Renal_status_danger = isset($_POST["Renal_status_danger"]);
    $GORD_yn = isset($_POST["GORD_yn"]);
    $GORD_Other = ($_POST["GORD_Other"]);
    $GORD_status_controled = isset($_POST["GORD_status_controled"]);
    $GORD_status_danger = isset($_POST["GORD_status_danger"]);
    $Anaemia = ($_POST["Anaemia"]);
    $Diabetes = ($_POST["Diabetes"]);
    $Hypo = ($_POST["Hypo"]);
    $Haem_other = ($_POST["Haem_other"]);
    $Haem_status_controled = isset($_POST["Haem_status_controled"]);
    $Haem_status_danger = isset($_POST["Haem_status_danger"]);
    $Strikes = ($_POST["Strikes"]);
    $TIA = ($_POST["TIA"]);
    $Osteoartheritis = ($_POST["Osteoartheritis"]);
    $Osteoporosis = ($_POST["Osteoporosis"]);
    $Neuro_other = ($_POST["Neuro_other"]);
    $Neuro_status_controled = isset($_POST["Neuro_status_controled"]);
    $Neuro_status_danger = isset($_POST["Neuro_status_danger"]);
    $POA_other = ($_POST["POA_other"]);
    $POA = ($_POST["POA"]);
    $POA_status_controled = isset($_POST["POA_status_controled"]);
    $POA_status_danger = isset($_POST["POA_status_danger"]);
    $Allergies_types = isset($_POST["Allergies_types"]);
    $Allergies_other = ($_POST["Allergies_other"]);
    $MET_yn = isset($_POST["MET_yn"]);
    $MET_other = ($_POST["MET_other"]);
    $MET_status_controled = isset($_POST["MET_status_controled"]);
    $MET_status_danger = isset($_POST["MET_status_danger"]);
    $smoking_yn = isset($_POST["smoking_yn"]);
    $smoking_other = ($_POST["smoking_other"]);
    $Smoking_status_controled = isset($_POST["Smoking_status_controled"]);
    $Smoking_status_danger = isset($_POST["Smoking_status_danger"]);
    $Alcohol_yn = isset($_POST["Alcohol_yn"]);
    $alcohol_other = ($_POST["alcohol_other"]);
    $Alcohol_status_controled = isset($_POST["Alcohol_status_controled"]);
    $Alcohol_status_danger = isset($_POST["Alcohol_status_danger"]);
    $Current_Medication = ($_POST["Current_Medication"]);
    $Current_Medication_other=($_POST["Current_Medication_other"]);
    $Previous_anesthesia_types= isset($_POST["Previous_anesthesia_types"]);
    $Operations= ($_POST["Operations"]);
    $Operations_types= isset($_POST["Operations_types"]);
    $Operations_other= ($_POST["Operations_other"]);
    $Airway_Assessment_types= isset($_POST["Airway_Assessment_types"]);
    $Fasting= isset($_POST["Fasting"]);
    $time= isset($_POST["time"]);
    $Investigations=($_POST["Investigations"]);
    $Premedication= ($_POST["Premedication"]);
    $Drugs_to_be_omitted= ($_POST["Drugs_to_be_omitted"]);
    $DVT_Prophyluxis= ($_POST["DVT_Prophyluxis"]);
    $Preoperative_instructions_other= ($_POST["Preoperative_instructions_other"]);
    $Na = ($_POST["Na"]);
    $K = ($_POST["K"]);
    $Urea = ($_POST["Urea"]);
    $Creatinine = ($_POST["Creatinine"]);
    $Bilirubin = ($_POST["Bilirubin"]);
    $Albumin = ($_POST["Albumin"]);
    $Alk_Phos = ($_POST["Alk_Phos"]);
    $AST = ($_POST["AST"]);
    $ALT = ($_POST["ALT"]);
    $PT_INR = ($_POST["PT_INR"]);
    $APTT =($_POST["APTT"]);
    $Hb = ($_POST["Hb"]);
    $WBC = ($_POST["WBC"]);
    $Platelets = ($_POST["Platelets"]);
    $FBS_RBS_PPBS = ($_POST["FBS_RBS_PPBS"]);
    $Investigation_status_controled = isset($_POST["Investigation_status_controled"]);
    $Investigation_status_danger = isset($_POST["Investigation_status_danger"]);
    $ECG = ($_POST["ECG"]);
    $Echocardiogram = ($_POST["Echocardiogram"]);
    $CXR = ($_POST["CXR"]);
    $ECG_other = ($_POST["ECG_other"]);
    $Anticipated_Anesthetic_problem_types = isset($_POST["Anticipated_Anesthetic_problem_types"]);
    $Anesthetic_Plan = isset($_POST["Anesthetic_Plan"]);
    $R_L = ($_POST["R_L"]);
    $Consent_yn = isset($_POST["Consent_yn"]);
    $Post_Op_Analgesia = isset($_POST["Post_Op_Analgesia"]);
    $Nurse = ($_POST["Nurse"]);
    $Doctor = ($_POST["Doctor"]);
    //$Date = ($_POST["Date"]);
   // $Done_Time = ($_POST["Done_Time"]);
    $Informed_By = ($_POST["Informed_By"]);
    $sql = "INSERT INTO medical_record (reg_id, Surgical_Diagnosis, General, PR, BP, Murmurs, IHD, symptoms_cardiovascular, Cardiovascular_Other, Cardiovascular_status_controled,Cardiovascular_status_danger, RR, SPO2, COPD, BA, symptoms_respiratory, Respiratory_other, Respiratory_status_controled,Respiratory_status_danger, Chronic_Kidney_Disease, Stones, Renal_other, Renal_status_controled,Renal_status_danger, GORD_yn, GORD_Other ,GORD_status_controled, GORD_status_danger, Anaemia, Diabetes, Hypo, Haem_other, Haem_status_controled,Haem_status_danger, Strikes, TIA, Osteoartheritis, Osteoporosis, Neuro_other, Neuro_status_controled, Neuro_status_danger, POA, POA_other, POA_status_controled, POA_status_danger, Allergies_types, Allergies_other, MET_yn, MET_other, MET_status_controled, MET_status_danger, smoking_yn, smoking_other,Smoking_status_controled,Smoking_status_danger, Alcohol_yn, alcohol_other,Alcohol_status_controled, Alcohol_status_danger, Current_Medication, Current_Medication_other, Previous_anesthesia_types, Operations, Operations_types, Operations_other, Airway_Assessment_types, Fasting, time, Investigations, Premedication, Drugs_to_be_omitted, DVT_Prophyluxis, Preoperative_instructions_other, Na, K, Urea, Creatinine, Bilirubin, Albumin, Alk_Phos, AST, ALT, PT_INR, APTT, Hb, WBC, Platelets, FBS_RBS_PPBS, Investigation_status_controled,Investigation_status_danger , ECG, Echocardiogram, CXR, ECG_other, Anticipated_Anesthetic_problem_types, Anesthetic_Plan, R_L, Consent_yn, Post_Op_Analgesia, Nurse, Doctor, Date, Done_Time, Informed_By) 
    VALUES ('$_SESSION[reg_id]', '$Surgical_Diagnosis', '$General', '$_POST[PR]', '$BP', '$Murmurs', '$IHD', '$symptoms_cardiovascular', '$Cardiovascular_Other', '$Cardiovascular_status_controled','$Cardiovascular_status_danger', '$RR', '$SPO2', '$COPD', '$BA', '$symptoms_respiratory', '$Respiratory_other', '$Respiratory_status_controled','$Respiratory_status_danger', '$Chronic_Kidney_Disease', '$Stones', '$Renal_other', '$Renal_status_controled','$Renal_status_danger', '$GORD_yn', '$GORD_Other','$GORD_status_controled', '$GORD_status_danger', '$Anaemia', '$Diabetes', '$Hypo', '$Haem_other', '$Haem_status_controled','$Haem_status_danger', '$Strikes', '$TIA', '$Osteoartheritis', '$Osteoporosis', '$Neuro_other', '$Neuro_status_controled', '$Neuro_status_danger', '$POA', '$POA_other', '$POA_status_controled', '$POA_status_danger', '$Allergies_types', '$Allergies_other', '$MET_yn', '$MET_other', '$MET_status_controled', '$MET_status_danger', '$smoking_yn', '$smoking_other','$Smoking_status_controled','$Smoking_status_danger', '$Alcohol_yn', '$alcohol_other','$Alcohol_status_controled', '$Alcohol_status_danger', '$Current_Medication', '$Current_Medication_other', '$Previous_anesthesia_types', '$Operations', '$Operations_types', '$Operations_other', '$Airway_Assessment_types', '$Fasting', '$time', '$Investigations', '$Premedication', '$Drugs_to_be_omitted', '$DVT_Prophyluxis', '$Preoperative_instructions_other', '$Na', '$K', '$Urea', '$Creatinine', '$Bilirubin', '$Albumin', '$Alk_Phos', '$AST', '$ALT', '$PT_INR', '$APTT', '$Hb', '$WBC', '$Platelets', '$FBS_RBS_PPBS', '$Investigation_status_controled','$Investigation_status_danger', '$ECG', '$Echocardiogram', '$CXR', '$ECG_other', '$Anticipated_Anesthetic_problem_types', '$Anesthetic_Plan', '$R_L', '$Consent_yn', '$Post_Op_Analgesia', '$Nurse', '$Doctor', CURDATE(), CURTIME(), '$Informed_By')";
    
    if(mysqli_query($db, $sql)){
           header('location:index2.php');
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        }
    }

  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/1 - crop.png">
  <title>AnesCare</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;


        }


        div.scrollmenu {

            background-color: #333;
            overflow: auto;
            white-space: nowrap;
        }

        .scrollmenu a {
            float: right;
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

        article {
            float: left;
            padding: 10px;
            width: 33.3%;
            background: #d6d8ce;
            height: 2020px;
            /* only for demonstration, should be removed */
        }

        nav.left {
            float: left;
        }

        nav.right {
            float: right;
        }

        .form {
            background-color: #ffffff;
            padding: 10px;
            border-radius: 10px;
            height: 2000px;
            border: black solid 2px;



        }

        .main-btn-rounded-one {
            cursor: pointer;
        }

        textarea {
            background: #e1e1da;
            border: none;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-top: 10px;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-family: 'tahoma';
            background: #99f1e2;
        }

        .t1 {
            width: 100%;
        }

        .t2 {
            color: #4d4d46;
            font: 13px sans-serif;
            font-weight: 100;
            width: 100%;
        }

        input {
            background-color: #e1e1da;
            border: none;

        }

        .form_wrap pre .check_wrap span {

            font-size: 13px;

            border-radius: 3px;
            color: #222225;


        }

        .form_wrap {
            margin-top: 10px;
        }

        .form_wrap .input_wrap {
            margin-bottom: 0px;
        }

        .form_wrap .input_wrap:last-child {
            margin-bottom: 0;
        }

        .form_wrap table .input_wra label {
            font-size: 13px;
            color: #383636;
            background: none;
        }

        table {
            width: 100%;
        }

        .form_wrap table pre .input_wra .check_wrap input[type="checkbox"] {
            margin-left: 0;
            padding: 0;
            width: 100%;
        }

        .form_wrap .input_wrap label {
            display: block;
            margin-bottom: 5px;
            color: #000000;
            font-weight: 600;
            font-size: 16px;
            background: #ffc1ca;
        }

        .form_wrap .input_grp {
            display: flex;

        }

        .form_wrap input[type="text"] {
            width: 100%;
            border-radius: 3px;
            font-size: 12px;
            padding: 3px;
        }

        .id {
            width: 50%;
        }

        .back {
            border-radius: 5px;
            border: 2px solid black;
            background-color: #27df7a;
            color: white;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 20px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            cursor: pointer;
            width: 150px;
            align-items: center;
        }

        .sub {
            border-radius: 5px;
            border: 2px solid black;
            background-color: black;
            color: white;
            font-weight: bold;

            font-size: 20px;
            padding: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            cursor: pointer;
            width: 150px;
            align-items: center;
            margin-left: 45%;
        }


        .next {
            border-radius: 5px;
            border: 2px solid black;
            background-color: #27df7a;
            color: #ffff99;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 20px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            cursor: pointer;
            width: 150px;
            align-items: center;
        }

        .controled {
            border-radius: 5px;
            border: 1px solid black;
            background-color: #ffff00;
            color: #000000;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 12px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 3px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            cursor: pointer;
            width: 100px;
            align-items: center;
        }


        .lifeth {
            border-radius: 5px;
            border: 1px solid black;
            background-color: #FF0000;
            color: #000000;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 12px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 3px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            cursor: pointer;
            width: 100px;
            align-items: center;
        }

        .controled:after {
            background: #000000;
        }

        .sub:active {
            transform: scale(0.90);
        }

        .sub:focus {
            outline: none;
        }

        .sub:hover {
            background: #031d6d;

        }

        .form_wrap .input_grp {
            display: flex;

        }

        nav.center {
            float: center;
        }

        .input_wraa {
            color: blue;
            font-weight: bold;
            margin-left: 38%;
            font-size: 20px;
            align-items: center;

        }

        .input_wraa input[type="text"] {
            padding: 10px;
        }

        .next:hover {
            background-color: blue;
        }

        .back:hover {
            background-color: blue;
        }

        /* Style the header */


        /* Create two columns/boxes that floats next to each other */

        /* Style the list inside the menu */




        /* Clear floats after the columns */
        section::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */


        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 500px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }




        .reg {
            display: block;
            margin-bottom: 5px;
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            background: #766F65;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('topbar.php')?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('sidebar.php')?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
        $(function () {
            //Enable check and uncheck all functionality
            $('.checkbox-toggle').click(function () {
                var clicks = $(this).data('clicks')
                if (clicks) {
                    //Uncheck all checkboxes
                    $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                    $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
                } else {
                    //Check all checkboxes
                    $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                    $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
                }
                $(this).data('clicks', !clicks)
            })

            //Handle starring for font awesome
            $('.mailbox-star').click(function (e) {
                e.preventDefault()
                //detect type
                var $this = $(this).find('a > i')
                var fa = $this.hasClass('fa')

                //Switch states
                if (fa) {
                    $this.toggleClass('fa-star')
                    $this.toggleClass('fa-star-o')
                }
            })
        })
    </script>
    <div class="content-wrapper">

        <div class="heading">

            <h1>pre anesthesia record</h1>

        </div>
        <section style="font-family: Poppins; margin-top: 20px;" id="final_report">
            <form action="medical.php" method="POST">
                <div class="reg">
                    <label for="name">Reg_id</label>
                    <input type="text" id="name" name="reg_id" value="<?php echo $_SESSION['reg_id'];?>">
                </div>
                <article>

                    <div class="form">



                        <div class="form_wrap">


                            <div class="input_wrap">
                                <label for="name">Surgical Diagnosis & Problems</label>
                                <input type="text" id="name" name="Surgical_Diagnosis">
                            </div>

                            <hr width="100%">
                            <br>
                            <div class="input_wrap">
                                <label for="name">Surgical Date</label>
                                <input type="date" id="name" name="General">
                            </div>

                            <hr width="100%">
                            <br>
                            <div class="input_wrap">
                                <label for="name">Cardiovascular</label>
                                <table class="t1">

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">PR</label>
                                                <input type="text" id="name" name="PR" value="<?php echo $PR;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">BP</label>
                                                <input type="text" id="name" name="BP" value="<?php echo $BP;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Murmurs</label>
                                                <input type="text" id="name" name="Murmurs"
                                                    value="<?php echo $Murmurs;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">IHD</label>
                                                <input type="text" id="name" name="IHD" value="<?php echo $IHD;?>">
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Symptoms</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="symptoms_cardiovascular" rows="2"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Cardiovascular_Other"
                                                rows="2"><?php echo $Cardiovascular_Other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Cardiovascular_status_controled"
                                                    value="Controled"> <span>Controled</span></td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Cardiovascular_status_danger"
                                                    value="Danger"> <span>Danger</span></td>
                                        </tr>
                                    </table>
                                </label>
                            </div>






                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="name">Respiratory</label>
                                <table class="t1">

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">RR</label>
                                                <input type="text" id="name" name="RR" value="<?php echo $RR;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">SpO<sub>2</sub></label>
                                                <input type="text" id="name" name="SPO2" value="<?php echo $SPO2;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">COPD</label>
                                                <input type="text" id="name" name="COPD" value="<?php echo $COPD;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">BA</label>
                                                <input type="text" id="name" name="BA" value="<?php echo $BA;?>">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Symptoms</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="symptoms_respiratory"
                                                    rows="2"><?php echo $symptoms_respiratory;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>



                            </div>

                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Respiratory_other"
                                                rows="2"><?php echo $Respiratory_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Respiratory_status_controled"
                                                    value="Controled"> <span>Controled</span></td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Respiratory_status_controled"
                                                    value="Danger"> <span>Danger</span></td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="name">Renal</label>
                                <table class="t1">

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Chronic Kidney Disease</label>
                                                <input type="text" id="name" name="Chronic_Kidney_Disease"
                                                    value="<?php echo $Chronic_Kidney_Disease;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Stones</label>
                                                <input type="text" id="name" name="Stones"
                                                    value="<?php echo $Stones;?>">
                                            </div>
                                        </td>


                                    </tr>


                                </table>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Renal_other" rows="2"><?php echo $Renal_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Renal_status_controled" value="Controled">
                                                <span>Controled</span>
                                            </td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Renal_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="nic">Hepato/ Gastrointestinal (GORD)</label>



                                <table class="t2">

                                    <tr>
                                        <td>

                                            <div class="input_wra">

                                                <input type="radio" name="GORD_yn" value="yes" class="input_radio">
                                                <span>Yes</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <input type="radio" name="GORD_yn" value="no" class="input_radio">
                                                <span>No</span>

                                            </div>
                                        </td>


                                    </tr>


                                </table>

                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="GORD_Other" rows="2"><?php echo $GORD_Other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="GORD_status_controled" value="Controled">
                                                <span>Controled</span>
                                            </td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="GORD_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="name">Haem/ Endocrine/ Other</label>
                                <table class="t1">

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Anaemia</label>
                                                <input type="text" id="name" name="Anaemia"
                                                    value="<?php echo $Anaemia;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Diabetes</label>
                                                <input type="text" id="name" name="Diabetes"
                                                    value="<?php echo $Diabetes;?>">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="input_wra">
                                                <label for="name"><abbr title="Hyper/ hypothyroidism">Hypo</abbr>
                                                </label>
                                                <input type="text" id="name" name="Hypo" value="<?php echo $Hypo;?>">
                                            </div>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Haem_other" rows="2"><?php echo $Haem_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Haem_status_controled" value="Controled">
                                                <span>Controled</span>
                                            </td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Haem_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="name">Neuro/ Musculoskeletal</label>
                                <table class="t1">

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Strikes</label>
                                                <input type="text" id="name" name="Strikes"
                                                    value="<?php echo $Strikes;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">TIA</label>
                                                <input type="text" id="name" name="TIA" value="<?php echo $TIA;?>">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Osteoartheritis</label>
                                                <input type="text" id="name" name="Osteoartheritis"
                                                    value="<?php echo $Osteoartheritis;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Osteoporosis</label>
                                                <input type="text" id="name" name="Osteoporosis"
                                                    value="<?php echo $Osteoporosis;?>">
                                            </div>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Neuro_other" rows="2"><?php echo $Neuro_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Neuro_status_controled" value="Controled">
                                                <span>Controled</span>
                                            </td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Neuro_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="name">POA</label>
                                <input type="text" id="name" name="POA" <?php echo $POA;?>>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="POA_other" rows="2"><?php echo $POA_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="POA_status_controled" value="Controled">
                                                <span>Controled</span>
                                            </td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="POA_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>

                            <br>


                        </div>

                    </div>


                </article>
                <article>
                    <div class="form">


                        <div class="form_wrap">

                            <div class="input_wrap">
                                <label for="name">Allergies</label>

                                <table class="t2">
                                    <tr>
                                        <div class="input_wra">
                                            <label class="check_wrap">
                                                <td><input type="checkbox" name="Allergies_types" value="food">
                                                    <span>Food</span>
                                                </td>
                                                <td><input type="checkbox" name="Allergies_types" value="drugs">
                                                    <span>Drugs</span>
                                                </td>
                                                <td><input type="checkbox" name="Allergies_types" value="plasters">
                                                    <span>Plasters</span>
                                                </td>
                                            </label>
                                        </div>

                                    </tr>
                                </table>
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Allergies_other"
                                                rows="2"><?php echo $Allergies_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="nic">MET</label>



                                <table class="t2">

                                    <tr>
                                        <td>

                                            <div class="input_wra">

                                                <input type="radio" name="MET_yn" value=">4" class="input_radio">
                                                <span>>4</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <input type="radio" name="MET_yn" value="<4" class="input_radio">
                                                <span>
                                                    <4 </span>

                                            </div>
                                        </td>


                                    </tr>


                                </table>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="MET_other" rows="2"><?php echo $MET_other?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="MET_status_controled" value="Controled">
                                                <span>Controled</span>
                                            </td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="MET_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="nic">Smoking</label>



                                <table class="t2">

                                    <tr>
                                        <div class="input_grp">
                                            <td>

                                                <div class="input_wra">

                                                    <input type="radio" name="smoking_yn" value="yes"
                                                        class="input_radio">
                                                    <span>Yes</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input_wra">
                                                    <input type="radio" name="smoking_yn" value="no"
                                                        class="input_radio">
                                                    <span>No</span>

                                                </div>
                                            </td>

                                        </div>
                                    </tr>


                                </table>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="smoking_other"
                                                rows="2"><?php echo $smoking_other?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Smoking_status_controled"
                                                    value="Controled"> <span>Controled</span></td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Smoking_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="nic">Alcohol</label>



                                <table class="t2">

                                    <tr>
                                        <td>

                                            <div class="input_wra">

                                                <input type="radio" name="Alcohol_yn" value="yes" class="input_radio">
                                                <span>Yes</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <input type="radio" name="Alcohol_yn" value="no" class="input_radio">
                                                <span>No</span>

                                            </div>
                                        </td>


                                    </tr>


                                </table>
                            </div>
                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="alcohol_other"
                                                rows="2"><?php echo $alcohol_other;?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Alcohol_status_controled"
                                                    value="Controled"> <span>Controled</span></td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Alcohol_status_danger" value="Danger">
                                                <span>Danger</span>
                                            </td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <div class="input_wrap">
                                    <label for="nic">Current Medication</label>
                                    <textarea name="Current_Medication" cols="50"
                                        rows="2"><?php echo $Current_Medication;?></textarea>
                                </div>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Other</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Current_Medication_other"
                                                    rows="2"><?php echo $Current_Medication_other;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <hr width="100%">

                                <label for="nic">Previous anesthesia/ problems</label>
                                <table class="t2">
                                    <tr>
                                        <div class="input_wra">
                                            <label class="check_wrap">
                                                <td><input type="checkbox" name="Previous_anesthesia_types" value="GA">
                                                    <span>GA</span>
                                                </td>
                                                <td><input type="checkbox" name="Previous_anesthesia_types"
                                                        value="Spinal"> <span>Spinal</span></td>
                                                <td><input type="checkbox" name="Previous_anesthesia_types"
                                                        value="Epidural"> <span>Epidural</span></td>
                                            </label>
                                        </div>

                                    </tr>
                                </table>

                                <br>
                                <hr width="100%">

                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Operation/s</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Operations" cols="50"
                                                    rows="2"><?php echo $Operations;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="input_wrap">

                                    <div class="input_wra">

                                        <table class="t2">
                                            <tr>
                                                <td><input type="checkbox" name="Operations_types"
                                                        value=">Difficult Airway"> <span>Difficult Airway</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="Operations_types"
                                                        value="Dclayed recovery"> <span>Dclayed recovery</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="Operations_types"
                                                        value="Anaphylactic reactions"> <span>Anaphylactic
                                                        reactions</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="Operations_types"
                                                        value="F/H Anesthesia Problems"> <span>F/H Anesthesia
                                                        Problems</span>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>


                                </div>

                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Other</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Operations_other"
                                                    rows="2"><?php echo $Operations_other;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="nic">Airway Assessment</label>

                                <div class="input_wra">

                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Airway_Assessment_types"
                                                    value="Teeth/ Denture"> <span>Teeth/ Denture</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Airway_Assessment_types"
                                                    value="Mouth Opening: full/partial/ none"> <span>Mouth Opening:
                                                    full/partial/ none</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Airway_Assessment_types"
                                                    value="Neck movements: full/ limited"> <span>Neck movements: full/
                                                    limited</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Airway_Assessment_types"
                                                    value="Mallampati score 1/2/3/4"> <span>Mallampati score
                                                    1/2/3/4</span>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                                <br>
                                <hr width="100%">

                                <div class="input_wrap">
                                    <label for="nic">Preoperative instructions</label>



                                    <table class="t2">

                                        <tr>
                                            <td>

                                                <div class="input_wra">
                                                    <label for="name">Fasting: </label>


                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <select name="Fasting">
                                                        <option value="6 hrs for solids">6 hrs for solids</option>
                                                        <option value="4 hrs fpr breakfast milk">4 hrs fpr breakfast
                                                            milk</option>
                                                        <option value="2 hrs for clear fluids">2 hrs for clear fluids
                                                        </option>
                                                    </select>



                                                </div>
                                            </td>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">from</label>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="input_wra">
                                                    <select name="time">
                                                        <option value="1">1</option>
                                                        <option valeu="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>


                                                    </select>am/pm</label>
                                                </div>
                                            </td>


                                        </tr>


                                    </table>

                                </div>
                                <br>
                                <hr width="100%">

                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Investigations</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Investigations" cols="50"
                                                    rows="1"><?php echo $Investigations;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Premedication</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Premedication" cols="50"
                                                    rows="1"><?php echo $Premedication;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Drugs to be omitted</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Drugs_to_be_omitted" cols="50"
                                                    rows="1"><?php echo $Drugs_to_be_omitted;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">DVT Prophyluxis</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="DVT_Prophyluxis" cols="50"
                                                    rows="1"><?php echo $DVT_Prophyluxis;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="input_wrap">
                                    <table class="t1">
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">Other</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="Preoperative_instructions_other" cols="50"
                                                    rows="1"><?php echo $Preoperative_instructions_other;?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>



                            </div>
                </article>
                <article>
                    <div class="form">

                        <div class="form_wrap">
                            <div class="input_wrap">
                                <table class="t1" border="1">
                                    <tr>

                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Na</label>
                                                <input type="text" name="Na" value="<?php echo $Na;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">K</label>
                                                <input type="text" name="K" value="<?php echo $K;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name"></label>
                                                <input type="text" name="name">
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Urea</label>
                                                <input type="text" name="Urea" value="<?php echo $Urea;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Creatinine</label>
                                                <input type="text" name="Creatinine" value="<?php echo $Creatinine;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name"></label>
                                                <input type="text" name="name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Bilirubin</label>
                                                <input type="text" name="Bilirubin" value="<?php echo $Bilirubin;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Albumin</label>
                                                <input type="text" name="Albumin" value="<?php echo $Albumin;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Alk Phos</label>
                                                <input type="text" name="Alk_Phos" value="<?php echo $Alk_Phos;?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">AST</label>
                                                <input type="text" name="AST" value="<?php echo $AST;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">ALT</label>
                                                <input type="text" name="ALT" value="<?php echo $ALT;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name"></label>
                                                <input type="text" name="name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">PT/ INR</label>
                                                <input type="text" name="PT_INR" value="<?php echo $PT_INR;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">APTT</label>
                                                <input type="text" name="APTT" value="<?php echo $APTT;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name"></label>
                                                <input type="text" name="name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Hb</label>
                                                <input type="text" name="Hb" value="<?php echo $Hb;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">WBC</label>
                                                <input type="text" name="WBC" value="<?php echo $WBC;?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Platelets</label>
                                                <input type="text" name="Platelets" value="<?php echo $Platelets;?>">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <table class="t1">

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">FBS/ RBS/ PPBS</label>
                                                <input type="text" id="name" name="FBS_RBS_PPBS"
                                                    value="<?php echo $FBS_RBS_PPBS;?>">
                                            </div>
                                        </td>



                                    </tr>


                                </table>

                            </div>
                            <br>
                            <div class="input_wra">
                                <label class="check_wrap">
                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Investigation_status_controled"
                                                    value="Controled"> <span>Controled</span></td>
                                            <td width="50%"></td>
                                            <td><input type="checkbox" name="Investigation_status_danger"
                                                    value="Danger"> <span>Danger</span></td>
                                        </tr>
                                    </table>
                                </label>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <label for="name">ECG</label>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="ECG" cols="50" rows="2"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Echocardiogram</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="Echocardiogram" cols="50" rows="2"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">CXR</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="CXR" cols="50" rows="2"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Other</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="ECG_other" rows="2"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="input_wrap">
                                <label for="name">Anticipated Anesthetic problem</label>

                            </div>
                            <div class="input_wrap">

                                <div class="input_wra">

                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Anticipated_Anesthetic_problem_types"
                                                    value="Difficult Airway"> <span>Difficult Airway</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anticipated_Anesthetic_problem_types"
                                                    value="Aspiration"> <span>Aspiration</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anticipated_Anesthetic_problem_types"
                                                    value="RS instability"> <span>RS instability</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anticipated_Anesthetic_problem_types"
                                                    value="Massive fluid shifts"> <span>Massive fluid shifts</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anticipated_Anesthetic_problem_types"
                                                    value="Massive Blood Transfution"> <span>Massive Blood
                                                    Transfution</span>
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                            <div class="input_wrap">
                                <table class="t1">

                                    <td>
                                        <textarea name="Anticipated Anesthetic problem_other" cols="50"
                                            rows="4"></textarea>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <hr width="100%">

                            <div class="input_wrap">
                                <label for="name">Anesthetic Plan</label>

                            </div>
                            <div class="input_wrap">

                                <div class="input_wra">

                                    <table class="t2">
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="GA">
                                                <span>GA</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="Spinal">
                                                <span>Spinal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="Epidural">
                                                <span>Epidural</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="Pre oxygenation">
                                                <span>Pre oxygenation</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="RSI">
                                                <span>RSI</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="Throat Pack">
                                                <span>Throat pack</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="Anesthetic_Plan" value="Nerve Blocks">
                                                <span>Nerve Blocks</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input_wra">
                                                    <label for="name">R/L</label>
                                                </div>
                                                <input type="text" name="R_L">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>

                                                <div class="input_wra">

                                                    <label for="name">Consent</label>
                                                </div>

                                                <input type="radio" name="Consent_yn" value="yes" class="input_radio">
                                                <span>Yes</span>
                                </div>
                                </td>



                                </tr>

                                <td>
                                    <div class="input_wra">
                                        <input type="radio" name="Consent_yn" value="no" class="input_radio">
                                        <span>No</span>

                                    </div>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input_wra">
                                            <label for="name">Post Op Analgesia</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="Post_Op_Analgesia" value="ward"> <span>ward</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="Post_Op_Analgesia" value="HDU"> <span>HDU</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="Post_Op_Analgesia" value="ICU"> <span>ICU</span>
                                    </td>
                                </tr>
                                </table>
                                <br>
                                <hr width="100%">


                            </div>


                            <br>

                            <div class="input_wrap">
                                <table class="t1">
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Assessment done by:</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Nurse</label>
                                                <input type="text" name="Nurse">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Dr</label>
                                                <input type="text" name="Doctor">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="input_wra">
                                                <label for="name">Informed By</label>
                                                <input type="text" name="Informed_By">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </article>







                <br>


                <div class="input_wrap">
                    <div class="input_wrap">

                        <input type="submit" class="sub" value="submit" name="sub">
                    </div>
                    <br>
                    <center>
                        <div class="input_wraa" style="margin-left:40px;">
                            <label>The ASA level :</label><br>
                            <input type="text" name="asalevel" value="<?php echo $asa;?>"
                                style="margin:auto; padding:auto; display:block">
                    </center>
                </div>

                <br>
                <input class="main-btn-rounded-one"
                    style="border:#000000; border-radius: 20px; color: #000000; background: #a9a8e0; font-family: Poppins; margin-left: 520px; padding:10px; "
                    type="button" value="Download as a PDF" id="download" name="download_pdf" onclick="Export()">
                <footer>
                    <nav>
                        <nav class="left">

                            <div class="input_wrap">
                                <input type="submit" class="back" value="back" name="back">
                            </div>
                        </nav>
                        <nav class="right">
                            <div class="input_wrap">
                                <input type="submit" class="next" name="next" value="next">
                            </div>
                        </nav>
                    </nav>
                </footer>
            </form>
        </section>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script type="text/javascript">
            function Export() {
                html2canvas(document.getElementById('final_report'), {
                    onrendered: function (canvas) {
                        var data = canvas.toDataURL();
                        var docDefinition = {
                            content: [{
                                image: data,
                                width: 500
                            }]
                        };
                        pdfMake.createPdf(docDefinition).download("Medical_records.pdf");
                    }
                });
            }
        </script>
    </div>
</body>

</html>