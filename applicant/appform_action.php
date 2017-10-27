<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prototype";


$_SESSION['Perm_address_location']= $_POST['Perm_address_location'];
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "INSERT INTO APPLICANT (
				ID_NUMBER, 
				FIRST_NAME, 
				MIDDLE_NAME,
				LAST_NAME ,
				NICK_NAME ,
				GENDER ,
				AGE ,
				BIRTH_DATE ,
				BIRTH_PLACE ,
				CIVIL_STATUS ,
				RELIGION ,
				TELEPHONE_NUMBER ,
				CELLPHONE_NUMBER ,
				EMAIL ,
				PERMANENT_ADDRESS ,
				CITY ,
				PROVINCE ,
				COUNTRY ,
				ZIP_CODE ,
				HIGHSCHOOL_ATTENDED ,
				DEPARTMENT ,
				COURSE ,
				YEAR_LEVEL ,
				FATHER_LAST_NAME ,
				FATHER_FIRST_NAME ,
				FATHER_MIDDLE_NAME ,
				FATHER_STATUS ,
				FATHER_OCCUPATION ,
				FATHER_SALARY ,
				FATHER_EMPLOYER_NAME ,
				FATHER_EMPLOYER_ADDRESS ,
				FATHER_OFFICE_TEL_NO ,
				MOTHER_LAST_NAME ,
				MOTHER_FIRST_NAME ,
				MOTHER_MIDDLE_NAME ,
				MOTHER_STATUS ,
				MOTHER_OCCUPATION ,
				MOTHER_SALARY ,
				MOTHER_EMPLOYER_NAME ,
				MOTHER_EMPLOYER_ADDRESS ,
				MOTHER_OFFICE_TEL_NO ,
				GUARDIAN_LAST_NAME ,
				GUARDIAN_FIRST_NAME ,
				GUARDIAN_MIDDLE_NAME ,
				GUARDIAN_RELATION ,
				FAMILY_INCOME ,
				PROFIT_BUSINESS ,
				PROFIT_LAND ,
				PROFIT_RENTALLANDS ,
				PROFIT_INTERESTS ,
				PROFIT_DIVIDENDS ,
				PROFIT_OTHERS ,
				PROFIT_SUBTOTAL ,
				PROFIT_BANKDEPOSITS ,
				PROFIT_SAVINGSACCOUNT ,
				PROFIT_CHECKINGACCOUNTS ,
				PROFIT_TIMEDEPOSITS ,
				PROFIT_TOTAL ,
				PROFIT_NET ,
				PROFIT_TAX ,
				RES_LOCATION ,
				RES_TYPE ,
				OWN_TYPE ,
				LOT_SIZE ,
				NO_BEDROOMS ,
				NO_BATHS ,
				NO_HELPERS ,

				PROPERTY_OWNED1_DESCRIPTION ,
				PROPERTY_OWNED1_LOCATION ,
				PROPERTY_OWNED1_SIZE ,
				PROPERTY_OWNED1_ACQ_DATE ,
				PROPERTY_OWNED1_ACQ_VALUE ,
				PROPERTY_OWNED1_PRESMARKETVAL ,
				PROPERTY_OWNED1_YEARLYNETINCOME ,

				PROPERTY_OWNED2_DESCRIPTION ,
				PROPERTY_OWNED2_LOCATION ,
				PROPERTY_OWNED2_SIZE ,
				PROPERTY_OWNED2_ACQ_DATE ,
				PROPERTY_OWNED2_ACQ_VALUE ,
				PROPERTY_OWNED2_PRESMARKETVAL ,
				PROPERTY_OWNED2_YEARLYNETINCOME ,

				PROPERTY_OWNED3_DESCRIPTION ,
				PROPERTY_OWNED3_LOCATION ,
				PROPERTY_OWNED3_SIZE ,
				PROPERTY_OWNED3_ACQ_DATE ,
				PROPERTY_OWNED3_ACQ_VALUE ,
				PROPERTY_OWNED3_PRESMARKETVAL ,
				PROPERTY_OWNED3_YEARLYNETINCOME ,

				TELSET_ACQ_DATE ,
				TELSET_ACQ_COST ,
				TELSET_BAL ,
				TELSET_MONTHLY_PAYMENT ,

				VCD_COMP_ACQ_DATE ,
				VCD_COMP_ACQ_COST ,
				VCD_COMP_BAL ,
				VCD_COMP_MONTHLY_PAYMENT ,

				VCD_PLAY_ACQ_DATE ,
				VCD_PLAY_ACQ_COST ,
				VCD_PLAY_BAL ,
				VCD_PLAY_MONTHLY_PAYMENT ,

				PC_ACQ_DATE ,
				PC_ACQ_COST ,
				PC_BAL ,
				PC_MONTHLY_PAYMENT ,

				REF_ACQ_DATE ,
				REF_ACQ_COST ,
				REF_BAL ,
				REF_MONTHLY_PAYMENT ,

				AC_ACQ_DATE ,
				AC_ACQ_COST ,
				AC_BAL ,
				AC_MONTHLY_PAYMENT ,

				PIANO_ACQ_DATE ,
				PIANO_ACQ_COST ,
				PIANO_BAL ,
				PIANO_MONTHLY_PAYMENT ,

				WM_ACQ_DATE ,
				WM_ACQ_COST ,
				WM_BAL ,
				WM_MONTHLY_PAYMENT ,

				VEHICLE_ACQ_DATE ,
				VEHICLE_ACQ_COST ,
				VEHICLE_BAL ,
				VEHICLE_MONTHLY_PAYMENT ,

				OTHER_SOURCE,
				

				NAT_OF_BUSINESS ,
				CAPITAL_INV ,
				NO_EMPLOYEES ,
				ANN_NET_PROFIT ,

				OTHER_PROPERTY,

				NO_HECTARES ,
				CROP_FISH_TYPE ,
				NO_WORKERS ,
				APP_NET_PROFIT_HEC_PER_YEAR ,


				FIP1_NATURE ,
				FIP1_COMPANY ,
				FIP1_INSURANCE ,
				FIP1_PREMIUM ,
				FIP1_MONTHLY ,

				FIP2_NATURE ,
				FIP2_COMPANY ,
				FIP2_INSURANCE ,
				FIP2_PREMIUM ,
				FIP2_MONTHLY ,


				liability1_payee ,
				liability1_purp_loan ,
				liability1_amt ,
				liability1_mat ,
				liability1_payable ,
				liability1_mon ,

				liability2_payee ,
				liability2_purp_loan ,
				liability2_amt ,
				liability2_mat ,
				liability2_payable ,
				liability2_mon ,

				liability3_payee ,
				liability3_purp_loan ,
				liability3_amt ,
				liability3_mat ,
				liability3_payable ,
				liability3_mon ,

				liability4_payee ,
				liability4_purp_loan ,
				liability4_amt ,
				liability4_mat ,
				liability4_payable ,
				liability4_mon ,

				liability5_payee ,
				liability5_purp_loan ,
				liability5_amt ,
				liability5_mat ,
				liability5_payable ,
				liability5_mon ,

				liability6_payee ,
				liability6_purp_loan ,
				liability6_amt ,
				liability6_mat ,
				liability6_payable ,
				liability6_mon ,

				liability7_payee ,
				liability7_purp_loan ,
				liability7_amt ,
				liability7_mat ,
				liability7_payable ,
				liability7_mon ,


				child1_name ,
				child1_age ,
				child1_status ,
				child1_year ,
				child1_school ,
				child1_tuition ,
				child1_paid ,

				child2_name ,
				child2_age ,
				child2_status ,
				child2_year ,
				child2_school ,
				child2_tuition ,
				child2_paid ,

				child3_name ,
				child3_age ,
				child3_status ,
				child3_year ,
				child3_school ,
				child3_tuition ,
				child3_paid ,

				child4_name ,
				child4_age ,
				child4_status ,
				child4_year ,
				child4_school ,
				child4_tuition ,
				child4_paid ,

				child5_name ,
				child5_age ,
				child5_status ,
				child5_year ,
				child5_school ,
				child5_tuition ,
				child5_paid ,

				child6_name ,
				child6_age ,
				child6_status ,
				child6_year ,
				child6_school ,
				child6_tuition ,
				child6_paid ,

				child7_name ,
				child7_age ,
				child7_status ,
				child7_year ,
				child7_school ,
				child7_tuition ,
				child7_paid ,

				person1_name ,
				person1_support ,
				person1_ben ,
				person1_amt ,

				person2_name ,
				person2_support ,
				person2_ben ,
				person2_amt ,

				person3_name ,
				person3_support ,
				person3_ben ,
				person3_amt ,


				scholar1_name ,
				scholar1_type ,
				scholar1_sponsor ,
				scholar1_ben ,

				scholar2_name ,
				scholar2_type ,
				scholar2_sponsor ,
				scholar2_ben ,

				scholar3_name ,
				scholar3_type ,
				scholar3_sponsor ,
				scholar3_ben,
				Perm_Address_Location)



VALUES ('{$_SESSION['student_id']}', 
		'{$_SESSION['first_name']}', 
				'{$_SESSION['middle_name']}',
				'{$_SESSION['last_name']}',
				'{$_SESSION['nick_name']}',
				'{$_SESSION['gender']}',
				'{$_SESSION['age']}',
				'{$_SESSION['birth_date']}',
				'{$_SESSION['birth_place']}',
				'{$_SESSION['civil_status']}',
				'{$_SESSION['religion']}',
				'{$_SESSION['telephone_number']}',
				'{$_SESSION['cellphone_number']}',
				'{$_SESSION['email']}',
				'{$_SESSION['permanent_address']}',
				'{$_SESSION['city']}',
				'{$_SESSION['province']}',
				'{$_SESSION['country']}',
				'{$_SESSION['zip_code']}',
				'{$_SESSION['highschool_attended']}',
				'{$_SESSION['department']}',
				'{$_SESSION['course']}',
				'{$_SESSION['year_level']}',
				'{$_SESSION['father_last_name']}',
				'{$_SESSION['father_first_name']}',
				'{$_SESSION['father_middle_name']}',
				'{$_SESSION['father_status']}',
				'{$_SESSION['father_occupation']}',
				'{$_SESSION['father_salary']}',
				'{$_SESSION['father_employer_name']}',
				'{$_SESSION['father_employer_address']}',
				'{$_SESSION['father_office_tel_no']}',
				'{$_SESSION['mother_last_name']}',
				'{$_SESSION['mother_first_name']}',
				'{$_SESSION['mother_middle_name']}',
				'{$_SESSION['mother_status']}',
				'{$_SESSION['mother_occupation']}',
				'{$_SESSION['mother_salary']}',
				'{$_SESSION['mother_employer_name']}',
				'{$_SESSION['mother_employer_address']}',
				'{$_SESSION['mother_office_tel_no']}',
				'{$_SESSION['guardian_last_name']}',
				'{$_SESSION['guardian_first_name']}',
				'{$_SESSION['guardian_middle_name']}',
				'{$_SESSION['guardian_relation']}',
				'{$_SESSION['family_income']}',
				'{$_SESSION['profit_business']}',
				'{$_SESSION['profit_land']}',
				'{$_SESSION['profit_rentallands']}',
				'{$_SESSION['profit_interests']}',
				'{$_SESSION['profit_dividends']}',
				'{$_SESSION['profit_others']}',
				'{$_SESSION['profit_subtotal']}',
				'{$_SESSION['profit_bankdeposits']}',
				'{$_SESSION['profit_savingsaccount']}',
				'{$_SESSION['profit_checkingaccounts']}',
				'{$_SESSION['profit_timedeposits']}',
				'{$_SESSION['profit_total']}',
				'{$_SESSION['profit_net']}',
				'{$_SESSION['profit_tax']}',
				'{$_SESSION['res_location']}',
				'{$_SESSION['res_type']}',
				'{$_SESSION['own_type']}',
				
				'{$_SESSION['lot_size']}',
				'{$_SESSION['no_bedrooms']}',
				'{$_SESSION['no_baths']}',
				'{$_SESSION['no_helpers']}',

				'{$_SESSION['property_owned3_description']}',
				'{$_SESSION['property_owned3_location']}',
				'{$_SESSION['property_owned3_size']}',
				'{$_SESSION['property_owned3_acq_date']}',
				'{$_SESSION['property_owned3_acq_value']}',
				'{$_SESSION['property_owned3_presmarketval']}',
				'{$_SESSION['property_owned3_yearlynetincome']}',

				'{$_SESSION['property_owned2_description']}',
				'{$_SESSION['property_owned2_location']}',
				'{$_SESSION['property_owned2_size']}',
				'{$_SESSION['property_owned2_acq_date']}',
				'{$_SESSION['property_owned2_acq_value']}',
				'{$_SESSION['property_owned2_presmarketval']}',
				'{$_SESSION['property_owned2_yearlynetincome']}',

				'{$_SESSION['property_owned3_description']}',
				'{$_SESSION['property_owned3_location']}',
				'{$_SESSION['property_owned3_size']}',
				'{$_SESSION['property_owned3_acq_date']}',
				'{$_SESSION['property_owned3_acq_value']}',
				'{$_SESSION['property_owned3_presmarketval']}',
				'{$_SESSION['property_owned3_yearlynetincome']}',

				'{$_SESSION['telset_acq_date']}',
				'{$_SESSION['telset_acq_cost']}',
				'{$_SESSION['telset_bal']}',
				'{$_SESSION['telset_monthly_payment']}',

				'{$_SESSION['vcd_comp_acq_date']}',
				'{$_SESSION['vcd_comp_acq_cost']}',
				'{$_SESSION['vcd_comp_bal']}',
				'{$_SESSION['vcd_comp_monthly_payment']}',

				'{$_SESSION['vcd_play_acq_date']}',
				'{$_SESSION['vcd_play_acq_cost']}',
				'{$_SESSION['vcd_play_bal']}',
				'{$_SESSION['vcd_play_monthly_payment']}',

				'{$_SESSION['pc_acq_date']}',
				'{$_SESSION['pc_acq_cost']}',
				'{$_SESSION['pc_bal']}',
				'{$_SESSION['pc_monthly_payment']}',

				'{$_SESSION['ref_acq_date']}',
				'{$_SESSION['ref_acq_cost']}',
				'{$_SESSION['ref_bal']}',
				'{$_SESSION['ref_monthly_payment']}',

				'{$_SESSION['ac_acq_date']}',
				'{$_SESSION['ac_acq_cost']}',
				'{$_SESSION['ac_bal']}',
				'{$_SESSION['ac_monthly_payment']}',

				'{$_SESSION['piano_acq_date']}',
				'{$_SESSION['piano_acq_cost']}',
				'{$_SESSION['piano_bal']}',
				'{$_SESSION['piano_monthly_payment']}',

				'{$_SESSION['wm_acq_date']}',
				'{$_SESSION['wm_acq_cost']}',
				'{$_SESSION['wm_bal']}',
				'{$_SESSION['wm_monthly_payment']}',

				'{$_SESSION['vehicle_acq_date']}',
				'{$_SESSION['vehicle_acq_cost']}',
				'{$_SESSION['vehicle_bal']}',
				'{$_SESSION['vehicle_monthly_payment']}',

				'{$_SESSION['other_source']}',
				

				'{$_SESSION['nat_of_business']}',
				'{$_SESSION['capital_inv']}',
				'{$_SESSION['no_employees']}',
				'{$_SESSION['ann_net_profit']}',

				'{$_SESSION['other_property']}',
				

				'{$_SESSION['no_hectares']}',
				'{$_SESSION['crop_fish_type']}',
				'{$_SESSION['no_workers']}',
				'{$_SESSION['app_net_profit_hec_per_year']}',


				'{$_SESSION['fip1_nature']}',
				'{$_SESSION['fip1_company']}',
				'{$_SESSION['fip1_insurance']}',
				'{$_SESSION['fip1_premium']}',
				'{$_SESSION['fip1_monthly']}',

				'{$_SESSION['fip2_nature']}',
				'{$_SESSION['fip2_company']}',
				'{$_SESSION['fip2_insurance']}',
				'{$_SESSION['fip2_premium']}',
				'{$_SESSION['fip2_monthly']}',


				'{$_SESSION['liability1_payee']}',
				'{$_SESSION['liability1_purp_loan']}',
				'{$_SESSION['liability1_amt']}',
				'{$_SESSION['liability1_mat']}',
				'{$_SESSION['liability1_payable']}',
				'{$_SESSION['liability1_mon']}',

				'{$_SESSION['liability2_payee']}',
				'{$_SESSION['liability2_purp_loan']}',
				'{$_SESSION['liability2_amt']}',
				'{$_SESSION['liability2_mat']}',
				'{$_SESSION['liability2_payable']}',
				'{$_SESSION['liability2_mon']}',

				'{$_SESSION['liability3_payee']}',
				'{$_SESSION['liability3_purp_loan']}',
				'{$_SESSION['liability3_amt']}',
				'{$_SESSION['liability3_mat']}',
				'{$_SESSION['liability3_payable']}',
				'{$_SESSION['liability3_mon']}',

				'{$_SESSION['liability4_payee']}',
				'{$_SESSION['liability4_purp_loan']}',
				'{$_SESSION['liability4_amt']}',
				'{$_SESSION['liability4_mat']}',
				'{$_SESSION['liability4_payable']}',
				'{$_SESSION['liability4_mon']}',

				'{$_SESSION['liability5_payee']}',
				'{$_SESSION['liability5_purp_loan']}',
				'{$_SESSION['liability5_amt']}',
				'{$_SESSION['liability5_mat']}',
				'{$_SESSION['liability5_payable']}',
				'{$_SESSION['liability5_mon']}',

				'{$_SESSION['liability6_payee']}',
				'{$_SESSION['liability6_purp_loan']}',
				'{$_SESSION['liability6_amt']}',
				'{$_SESSION['liability6_mat']}',
				'{$_SESSION['liability6_payable']}',
				'{$_SESSION['liability6_mon']}',

				'{$_SESSION['liability7_payee']}',
				'{$_SESSION['liability7_purp_loan']}',
				'{$_SESSION['liability7_amt']}',
				'{$_SESSION['liability7_mat']}',
				'{$_SESSION['liability7_payable']}',
				'{$_SESSION['liability7_mon']}',


				'{$_SESSION['child1_name']}',
				'{$_SESSION['child1_age']}',
				'{$_SESSION['child1_status']}',
				'{$_SESSION['child1_year']}',
				'{$_SESSION['child1_school']}',
				'{$_SESSION['child1_tuition']}',
				'{$_SESSION['child1_paid']}',

				'{$_SESSION['child2_name']}',
				'{$_SESSION['child2_age']}',
				'{$_SESSION['child2_status']}',
				'{$_SESSION['child2_year']}',
				'{$_SESSION['child2_school']}',
				'{$_SESSION['child2_tuition']}',
				'{$_SESSION['child2_paid']}',

				'{$_SESSION['child3_name']}',
				'{$_SESSION['child3_age']}',
				'{$_SESSION['child3_status']}',
				'{$_SESSION['child3_year']}',
				'{$_SESSION['child3_school']}',
				'{$_SESSION['child3_tuition']}',
				'{$_SESSION['child3_paid']}',

				'{$_SESSION['child4_name']}',
				'{$_SESSION['child4_age']}',
				'{$_SESSION['child4_status']}',
				'{$_SESSION['child4_year']}',
				'{$_SESSION['child4_school']}',
				'{$_SESSION['child4_tuition']}',
				'{$_SESSION['child4_paid']}',

				'{$_SESSION['child5_name']}',
				'{$_SESSION['child5_age']}',
				'{$_SESSION['child5_status']}',
				'{$_SESSION['child5_year']}',
				'{$_SESSION['child5_school']}',
				'{$_SESSION['child5_tuition']}',
				'{$_SESSION['child5_paid']}',

				'{$_SESSION['child6_name']}',
				'{$_SESSION['child6_age']}',
				'{$_SESSION['child6_status']}',
				'{$_SESSION['child6_year']}',
				'{$_SESSION['child6_school']}',
				'{$_SESSION['child6_tuition']}',
				'{$_SESSION['child6_paid']}',

				'{$_SESSION['child7_name']}',
				'{$_SESSION['child7_age']}',
				'{$_SESSION['child7_status']}',
				'{$_SESSION['child7_year']}',
				'{$_SESSION['child7_school']}',
				'{$_SESSION['child7_tuition']}',
				'{$_SESSION['child7_paid']}',

				'{$_SESSION['person1_name']}',
				'{$_SESSION['person1_support']}',
				'{$_SESSION['person1_ben']}',
				'{$_SESSION['person1_amt']}',

				'{$_SESSION['person2_name']}',
				'{$_SESSION['person2_support']}',
				'{$_SESSION['person2_ben']}',
				'{$_SESSION['person2_amt']}',

				'{$_SESSION['person3_name']}',
				'{$_SESSION['person3_support']}',
				'{$_SESSION['person3_ben']}',
				'{$_SESSION['person3_amt']}',


				'{$_SESSION['scholar1_name']}',
				'{$_SESSION['scholar1_type']}',
				'{$_SESSION['scholar1_sponsor']}',
				'{$_SESSION['scholar1_ben']}',

				'{$_SESSION['scholar2_name']}',
				'{$_SESSION['scholar2_type']}',
				'{$_SESSION['scholar2_sponsor']}',
				'{$_SESSION['scholar2_ben']}',

				'{$_SESSION['scholar3_name']}',
				'{$_SESSION['scholar3_type']}',
				'{$_SESSION['scholar3_sponsor']}',
				'{$_SESSION['scholar3_ben']}',
				'{$_SESSION['Perm_address_location']}' )";


if ($conn->query($sql) == TRUE) {
	echo "New record created successfully";
	//header( "refresh:3;url=appform.php" );
} 

else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();


//if(isset($FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      

       $result = "ProfilePic".$_SESSION['student_id'].".jpg";
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$result);
         echo "Success";
      }else{
         print_r($errors);
      }
//}

      $errors= array();
      $file_name = $_FILES['request']['name'];
      $file_size =$_FILES['request']['size'];
      $file_tmp =$_FILES['request']['tmp_name'];
      $file_type=$_FILES['request']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['request']['name'])));
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      

       $result = "Request_".$_SESSION['student_id'].".jpg";
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$result);
         echo "Success";
      }else{
         print_r($errors);
      }
 

    $errors= array();
      $file_name = $_FILES['Cert']['name'];
      $file_size =$_FILES['Cert']['size'];
      $file_tmp =$_FILES['Cert']['tmp_name'];
      $file_type=$_FILES['Cert']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['Cert']['name'])));
      
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      

       $result = "Certificate_".$_SESSION['student_id'].".jpg";
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$result);
         echo "Success";
      }else{
         print_r($errors);
      }



 $errors= array();
      $file_name = $_FILES['rep_card']['name'];
      $file_size =$_FILES['rep_card']['size'];
      $file_tmp =$_FILES['rep_card']['tmp_name'];
      $file_type=$_FILES['rep_card']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['rep_card']['name'])));
      
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      

       $result = "Report Card_".$_SESSION['student_id'].".jpg";
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$result);
         echo "Success";
      }else{
         print_r($errors);
      }



 $errors= array();
      $file_name = $_FILES['IE_house']['name'];
      $file_size =$_FILES['IE_house']['size'];
      $file_tmp =$_FILES['IE_house']['tmp_name'];
      $file_type=$_FILES['IE_house']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['IE_house']['name'])));
      
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      

       $result = "IE house_".$_SESSION['student_id'].".jpg";
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$result);
         echo "Success";
      }else{
         print_r($errors);
      }



			        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";




         //echo "Success";
     


	// $_SESSION['student_id']=$_POST['student_id']; 
	// $_SESSION['first_name ']=$_POST['first_name']; 
	// $_SESSION['middle_name']=$_POST['middle_name'];
	// $_SESSION['last_name']=$_POST['last_name'];
	// $_SESSION['nick_name']=$_POST['nick_name'];
	// $_SESSION['gender']=$_POST['gender'];
	// $_SESSION['age']=$_POST['age'];
	// $_SESSION['birth_date']=$_POST['birth_date'];
	// $_SESSION['birth_place']=$_POST['birth_place'];
	// $_SESSION['civil_status']=$_POST['civil_status'];
	// $_SESSION['religion']=$_POST['religion'];
	// $_SESSION['telephone_number']=$_POST['telephone_no'];
	// $_SESSION['cellphone_number']=$_POST['cellphone_no'];
	// $_SESSION['email']=$_POST['email'];
	// $_SESSION['permanent_address']=$_POST['perm_address'];
	// $_SESSION['city']=$_POST['city'];
	// $_SESSION['province']=$_POST['province'];
	// $_SESSION['country']=$_POST['country'];
	// $_SESSION['zip_code']=$_POST['zip_code'];
	// $_SESSION['highschool_attended']=$_POST['hs_attended'];
	// $_SESSION['preffered_course']=$_POST['pref_course'];
	// $_SESSION['department']=$_POST['department'];
	// $_SESSION['course']=$_POST['course'];
	// $_SESSION['year_level']=$_POST['year_level'];
	// $_SESSION['father_last_name']=$_POST['father_last_name'];
	// $_SESSION['father_first_name']=$_POST['father_first_name'];
	// $_SESSION['father_middle_name']=$_POST['father_middle_name'];
	// $_SESSION['father_status']=$_POST['father_status'];
	// $_SESSION['father_occupation']=$_POST['father_occ'];
	// $_SESSION['father_salary']=$_POST['father_salary'];
	// $_SESSION['father_employer_name']=$_POST['father_emp_name'];
	// $_SESSION['father_employer_address']=$_POST['father_emp_add'];
	// $_SESSION['father_office_tel_no']=$_POST['father_office_tel_no'];
	// $_SESSION['mother_last_name']=$_POST['mother_last_name'];
	// $_SESSION['mother_first_name']=$_POST['mother_first_name'];
	// $_SESSION['mother_middle_name']=$_POST['mother_middle_name'];
	// $_SESSION['mother_status']=$_POST['mother_status'];
	// $_SESSION['mother_occupation']=$_POST['mother_occ'];
	// $_SESSION['mother_salary']=$_POST['mother_salary'];
	// $_SESSION['mother_employer_name']=$_POST['mother_emp_name'];
	// $_SESSION['mother_employer_address']=$_POST['mother_emp_add'];
	// $_SESSION['mother_office_tel_no']=$_POST['mother_office_tel_no'];
	// $_SESSION['guardian_last_name']=$_POST['guardian_last_name'];
	// $_SESSION['guardian_first_name']=$_POST['guardian_first_name'];
	// $_SESSION['guardian_middle_name']=$_POST['guardian_middle_name'];
	// $_SESSION['guardian_relation']=$_POST['guardian_relation'];
	// $_SESSION['family_income']=$_POST['family_income'];
	// $_SESSION['profit_business']=$_POST['profit_business'];
	// $_SESSION['profit_land']=$_POST['profit_land'];
	// $_SESSION['profit_rentallands']=$_POST['profit_rentallands'];
	// $_SESSION['profit_interests']=$_POST['profit_interests'];
	// $_SESSION['profit_dividends']=$_POST['profit_dividends'];
	// $_SESSION['profit_others']=$_POST['profit_others'];
	// $_SESSION['profit_subtotal']=$_POST['profit_subtotal'];
	// $_SESSION['profit_bankdeposits']=$_POST['profit_bankdeposits'];
	// $_SESSION['profit_savingsaccount']=$_POST['profit_savingsaccount'];
	// $_SESSION['profit_checkingaccounts']=$_POST['profit_checkingaccounts'];
	// $_SESSION['profit_timedeposits']=$_POST['profit_timedeposits'];
	// $_SESSION['profit_total']=$_POST['profit_total'];
	// $_SESSION['profit_net']=$_POST['profit_net'];
	// $_SESSION['profit_tax']=$_POST['profit_tax'];
	// $_SESSION['res_location']=$_POST['res_location'];
	// $_SESSION['res_type']=$_POST['res_type'];
	// $_SESSION['own_type']=$_POST['own_type'];
	// // $_SESSION['rented_duration']=$_POST[''];
	// // $_SESSION['rented_monthly']=$_POST[''];
	// // $_SESSION['owned_name']=$_POST[''];
	// // $_SESSION['owned_acq_date']=$_POST[''];
	// // $_SESSION['owned_cost_acq']=$_POST[''];
	// // $_SESSION['owned_market_val']=$_POST[''];
	// // $_SESSION['owned_unpaid_mortgage']=$_POST[''];
	// // $_SESSION['owned_monthly_mortgage']=$_POST[''];
	// $_SESSION['lot_size']=$_POST['lot_size'];
	// $_SESSION['no_bedrooms']=$_POST['no_bedrooms'];
	// $_SESSION['no_baths']=$_POST['no_baths'];
	// $_SESSION['no_helpers']=$_POST['no_helpers'];

	// $_SESSION['property_owned1_description']=$_POST['property_owned1_description'];
	// $_SESSION['property_owned1_location']=$_POST['property_owned1_location'];
	// $_SESSION['property_owned1_size']=$_POST['property_owned1_size'];
	// $_SESSION['property_owned1_acq_date']=$_POST['property_owned1_acq_date'];
	// $_SESSION['property_owned1_acq_value']=$_POST['property_owned1_acq_value'];
	// $_SESSION['property_owned1_presmarketval']=$_POST['property_owned1_presmarketval'];
	// $_SESSION['property_owned1_yearlynetincome']=$_POST['property_owned1_yearlynetincome'];

	// $_SESSION['property_owned2_description']=$_POST['property_owned2_description'];
	// $_SESSION['property_owned2_location']=$_POST['property_owned2_location'];
	// $_SESSION['property_owned2_size']=$_POST['property_owned2_size'];
	// $_SESSION['property_owned2_acq_date']=$_POST['property_owned2_acq_date'];
	// $_SESSION['property_owned2_acq_value']=$_POST['property_owned2_acq_value'];
	// $_SESSION['property_owned2_presmarketval']=$_POST['property_owned2_presmarketval'];
	// $_SESSION['property_owned2_yearlynetincome']=$_POST['property_owned2_yearlynetincome'];

	// $_SESSION['property_owned3_description']=$_POST['property_owned3_description'];
	// $_SESSION['property_owned3_location']=$_POST['property_owned3_location'];
	// $_SESSION['property_owned3_size']=$_POST['property_owned3_size'];
	// $_SESSION['property_owned3_acq_date']=$_POST['property_owned3_acq_date'];
	// $_SESSION['property_owned3_acq_value']=$_POST['property_owned3_acq_value'];
	// $_SESSION['property_owned3_presmarketval']=$_POST['property_owned3_presmarketval'];
	// $_SESSION['property_owned3_yearlynetincome']=$_POST['property_owned3_yearlynetincome'];

	

	// $_SESSION['telset_acq_date']=$_POST['telset_acq_date'];
	// $_SESSION['telset_acq_cost']=$_POST['telset_acq_cost'];
	// $_SESSION['telset_bal']=$_POST['telset_bal'];
	// $_SESSION['telset_monthly_payment']=$_POST['telset_monthly_payment'];

	// $_SESSION['vcd_comp_acq_date']=$_POST['vcd_comp_acq_date'];
	// $_SESSION['vcd_comp_acq_cost']=$_POST['vcd_comp_acq_cost'];
	// $_SESSION['vcd_comp_bal']=$_POST['vcd_comp_bal'];
	// $_SESSION['vcd_comp_monthly_payment']=$_POST['vcd_comp_monthly_payment'];

	// $_SESSION['vcd_play_acq_date']=$_POST['vcd_play_acq_date'];
	// $_SESSION['vcd_play_acq_cost']=$_POST['vcd_play_acq_cost'];
	// $_SESSION['vcd_play_bal']=$_POST['vcd_play_bal'];
	// $_SESSION['vcd_play_monthly_payment']=$_POST['vcd_play_monthly_payment'];

	// $_SESSION['pc_acq_date']=$_POST['pc_acq_date'];
	// $_SESSION['pc_acq_cost']=$_POST['pc_acq_cost'];
	// $_SESSION['pc_bal']=$_POST['pc_bal'];
	// $_SESSION['pc_monthly_payment']=$_POST['pc_monthly_payment'];

	// $_SESSION['ref_acq_date']=$_POST['ref_acq_date'];
	// $_SESSION['ref_acq_cost']=$_POST['ref_acq_cost'];
	// $_SESSION['ref_bal']=$_POST['ref_bal'];
	// $_SESSION['ref_monthly_payment']=$_POST['ref_monthly_payment'];

	// $_SESSION['ac_acq_date']=$_POST['ac_acq_date'];
	// $_SESSION['ac_acq_cost']=$_POST['ac_acq_cost'];
	// $_SESSION['ac_bal']=$_POST['ac_bal'];
	// $_SESSION['ac_monthly_payment']=$_POST['ac_monthly_payment'];

	// $_SESSION['piano_acq_date']=$_POST['piano_acq_date'];
	// $_SESSION['piano_acq_cost']=$_POST['piano_acq_cost'];
	// $_SESSION['piano_bal']=$_POST['piano_bal'];
	// $_SESSION['piano_monthly_payment']=$_POST['piano_monthly_payment'];

	// $_SESSION['wm_acq_date']=$_POST['wm_acq_date'];
	// $_SESSION['wm_acq_cost']=$_POST['wm_acq_cost'];
	// $_SESSION['wm_bal']=$_POST['wm_bal'];
	// $_SESSION['wm_monthly_payment']=$_POST['wm_monthly_payment'];

	// $_SESSION['vehicle_acq_date']=$_POST['vehicle_acq_date'];
	// $_SESSION['vehicle_acq_cost']=$_POST['vehicle_acq_cost'];
	// $_SESSION['vehicle_bal']=$_POST['vehicle_bal'];
	// $_SESSION['vehicle_monthly_payment']=$_POST['vehicle_monthly_payment'];

	// if(!empty($_POST['other_source'])){
	// $_SESSION['other_source']=implode(',',$_POST['other_source']);
	// }

	// else{

	// $_SESSION['other_source']= " ";

	// }
	

	// $_SESSION['nat_of_business']=$_POST['nat_of_business'];
	// $_SESSION['capital_inv']=$_POST['capital_inv'];
	// $_SESSION['no_employees']=$_POST['no_employees'];
	// $_SESSION['ann_net_profit']=$_POST['ann_net_profit'];

	// if(!empty($_POST['other_property'])){
	// $_SESSION['other_property']=implode(',',$_POST['other_property']);
	// }

	// else{

	// $_SESSION['other_property']= " ";

	// }
	
	

	// $_SESSION['no_hectares']=$_POST['no_hectares'];
	// $_SESSION['crop_fish_type']=$_POST['crop_fish_type'];
	// $_SESSION['no_workers']=$_POST['no_workers'];
	// $_SESSION['app_net_profit_hec_per_year']=$_POST['app_net_profit_hec_per_year'];


	// $_SESSION['fip1_nature']=$_POST['fip1_nature'];
	// $_SESSION['fip1_company']=$_POST['fip1_company'];
	// $_SESSION['fip1_insurance']=$_POST['fip1_insurance'];
	// $_SESSION['fip1_premium']=$_POST['fip1_premium'];
	// $_SESSION['fip1_monthly']=$_POST['fip1_monthly'];

	// $_SESSION['fip2_nature']=$_POST['fip2_nature'];
	// $_SESSION['fip2_company']=$_POST['fip2_company'];
	// $_SESSION['fip2_insurance']=$_POST['fip2_insurance'];
	// $_SESSION['fip2_premium']=$_POST['fip2_premium'];
	// $_SESSION['fip2_monthly']=$_POST['fip2_monthly'];


	// $_SESSION['liability1_payee']=$_POST['liability1_payee'];
	// $_SESSION['liability1_purp_loan']=$_POST['liability1_purp_loan'];
	// $_SESSION['liability1_amt']=$_POST['liability1_amt'];
	// $_SESSION['liability1_mat']=$_POST['liability1_mat'];
	// $_SESSION['liability1_payable']=$_POST['liability1_payable'];
	// $_SESSION['liability1_mon']=$_POST['liability1_mon'];

	// $_SESSION['liability2_payee']=$_POST['liability2_payee'];
	// $_SESSION['liability2_purp_loan']=$_POST['liability2_purp_loan'];
	// $_SESSION['liability2_amt']=$_POST['liability2_amt'];
	// $_SESSION['liability2_mat']=$_POST['liability2_mat'];
	// $_SESSION['liability2_payable']=$_POST['liability2_payable'];
	// $_SESSION['liability2_mon']=$_POST['liability2_mon'];


	// $_SESSION['liability3_payee']=$_POST['liability3_payee'];
	// $_SESSION['liability3_purp_loan']=$_POST['liability3_purp_loan'];
	// $_SESSION['liability3_amt']=$_POST['liability3_amt'];
	// $_SESSION['liability3_mat']=$_POST['liability3_mat'];
	// $_SESSION['liability3_payable']=$_POST['liability3_payable'];
	// $_SESSION['liability3_mon']=$_POST['liability3_mon'];


	// $_SESSION['liability4_payee']=$_POST['liability4_payee'];
	// $_SESSION['liability4_purp_loan']=$_POST['liability4_purp_loan'];
	// $_SESSION['liability4_amt']=$_POST['liability4_amt'];
	// $_SESSION['liability4_mat']=$_POST['liability4_mat'];
	// $_SESSION['liability4_payable']=$_POST['liability4_payable'];
	// $_SESSION['liability4_mon']=$_POST['liability4_mon'];


	// $_SESSION['liability5_payee']=$_POST['liability5_payee'];
	// $_SESSION['liability5_purp_loan']=$_POST['liability5_purp_loan'];
	// $_SESSION['liability5_amt']=$_POST['liability5_amt'];
	// $_SESSION['liability5_mat']=$_POST['liability5_mat'];
	// $_SESSION['liability5_payable']=$_POST['liability5_payable'];
	// $_SESSION['liability5_mon']=$_POST['liability5_mon'];


	// $_SESSION['liability6_payee']=$_POST['liability6_payee'];
	// $_SESSION['liability6_purp_loan']=$_POST['liability6_purp_loan'];
	// $_SESSION['liability6_amt']=$_POST['liability6_amt'];
	// $_SESSION['liability6_mat']=$_POST['liability6_mat'];
	// $_SESSION['liability6_payable']=$_POST['liability6_payable'];
	// $_SESSION['liability6_mon']=$_POST['liability6_mon'];


	// $_SESSION['liability7_payee']=$_POST['liability7_payee'];
	// $_SESSION['liability7_purp_loan']=$_POST['liability7_purp_loan'];
	// $_SESSION['liability7_amt']=$_POST['liability7_amt'];
	// $_SESSION['liability7_mat']=$_POST['liability7_mat'];
	// $_SESSION['liability7_payable']=$_POST['liability7_payable'];
	// $_SESSION['liability7_mon']=$_POST['liability7_mon'];


	

	// $_SESSION['child1_name']=$_POST['child1_name'];
	// $_SESSION['child1_age']=$_POST['child1_age'];
	// $_SESSION['child1_status']=$_POST['child1_status'];
	// $_SESSION['child1_year']=$_POST['child1_year'];
	// $_SESSION['child1_school']=$_POST['child1_school'];
	// $_SESSION['child1_tuition']=$_POST['child1_tuition'];
	// $_SESSION['child1_paid']=$_POST['child1_paid'];

	// $_SESSION['child2_name']=$_POST['child2_name'];
	// $_SESSION['child2_age']=$_POST['child2_age'];
	// $_SESSION['child2_status']=$_POST['child2_status'];
	// $_SESSION['child2_year']=$_POST['child2_year'];
	// $_SESSION['child2_school']=$_POST['child2_school'];
	// $_SESSION['child2_tuition']=$_POST['child2_tuition'];
	// $_SESSION['child2_paid']=$_POST['child2_paid'];

	// $_SESSION['child3_name']=$_POST['child3_name'];
	// $_SESSION['child3_age']=$_POST['child3_age'];
	// $_SESSION['child3_status']=$_POST['child3_status'];
	// $_SESSION['child3_year']=$_POST['child3_year'];
	// $_SESSION['child3_school']=$_POST['child3_school'];
	// $_SESSION['child3_tuition']=$_POST['child3_tuition'];
	// $_SESSION['child3_paid']=$_POST['child3_paid'];

	// $_SESSION['child4_name']=$_POST['child4_name'];
	// $_SESSION['child4_age']=$_POST['child4_age'];
	// $_SESSION['child4_status']=$_POST['child4_status'];
	// $_SESSION['child4_year']=$_POST['child4_year'];
	// $_SESSION['child4_school']=$_POST['child4_school'];
	// $_SESSION['child4_tuition']=$_POST['child4_tuition'];
	// $_SESSION['child4_paid']=$_POST['child4_paid'];

	// $_SESSION['child5_name']=$_POST['child5_name'];
	// $_SESSION['child5_age']=$_POST['child5_age'];
	// $_SESSION['child5_status']=$_POST['child5_status'];
	// $_SESSION['child5_year']=$_POST['child5_year'];
	// $_SESSION['child5_school']=$_POST['child5_school'];
	// $_SESSION['child5_tuition']=$_POST['child5_tuition'];
	// $_SESSION['child5_paid']=$_POST['child5_paid'];

	// $_SESSION['child6_name']=$_POST['child6_name'];
	// $_SESSION['child6_age']=$_POST['child6_age'];
	// $_SESSION['child6_status']=$_POST['child6_status'];
	// $_SESSION['child6_year']=$_POST['child6_year'];
	// $_SESSION['child6_school']=$_POST['child6_school'];
	// $_SESSION['child6_tuition']=$_POST['child6_tuition'];
	// $_SESSION['child6_paid']=$_POST['child6_paid'];

	// $_SESSION['child7_name']=$_POST['child7_name'];
	// $_SESSION['child7_age']=$_POST['child7_age'];
	// $_SESSION['child7_status']=$_POST['child7_status'];
	// $_SESSION['child7_year']=$_POST['child7_year'];
	// $_SESSION['child7_school']=$_POST['child7_school'];
	// $_SESSION['child7_tuition']=$_POST['child7_tuition'];
	// $_SESSION['child7_paid']=$_POST['child7_paid'];

	// $_SESSION['person1_name']=$_POST['person1_name'];
	// $_SESSION['person1_support']=$_POST['person1_support'];
	// $_SESSION['person1_ben']=$_POST['person1_ben'];
	// $_SESSION['person1_amt']=$_POST['person1_amt'];

	// $_SESSION['person2_name']=$_POST['person2_name'];
	// $_SESSION['person2_support']=$_POST['person2_support'];
	// $_SESSION['person2_ben']=$_POST['person2_ben'];
	// $_SESSION['person2_amt']=$_POST['person2_amt'];

	// $_SESSION['person3_name']=$_POST['person3_name'];
	// $_SESSION['person3_support']=$_POST['person3_support'];
	// $_SESSION['person3_ben']=$_POST['person3_ben'];
	// $_SESSION['person3_amt']=$_POST['person3_amt'];


	// $_SESSION['scholar1_name']=$_POST['scholar1_name'];
	// $_SESSION['scholar1_type']=$_POST['scholar1_type'];
	// $_SESSION['scholar1_sponsor']=$_POST['scholar1_sponsor'];
	// $_SESSION['scholar1_ben']=$_POST['scholar1_ben'];

	// $_SESSION['scholar2_name']=$_POST['scholar2_name'];
	// $_SESSION['scholar2_type']=$_POST['scholar2_type'];
	// $_SESSION['scholar2_sponsor']=$_POST['scholar2_sponsor'];
	// $_SESSION['scholar2_ben']=$_POST['scholar2_ben'];

	// $_SESSION['scholar3_name']=$_POST['scholar3_name'];
	// $_SESSION['scholar3_type']=$_POST['scholar3_type'];
	// $_SESSION['scholar3_sponsor']=$_POST['scholar3_sponsor'];
	// $_SESSION['scholar3_ben']=$_POST['scholar3_ben'];


?>