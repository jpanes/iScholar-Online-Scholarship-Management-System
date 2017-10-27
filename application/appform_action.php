<?php

	require('../ischolar/connect-db.php');

	$student_id=$_POST['student_id']; 
	$first_name =$_POST['first_name']; 
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$nick_name=$_POST['nick_name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$birth_date=$_POST['birth_date'];
	$birth_place=$_POST['birth_place'];
	$civil_status=$_POST['civil_status'];
	$religion=$_POST['religion'];
	$telephone_number=$_POST['telephone_no'];
	$cellphone_number=$_POST['cellphone_no'];
	$email=$_POST['email'];
	$permanent_address=$_POST['perm_address'];
	$city=$_POST['city'];
	$province=$_POST['province'];
	$country=$_POST['country'];
	$zip_code=$_POST['zip_code'];
	$highschool_attended=$_POST['hs_attended'];
	$preffered_course=$_POST['pref_course'];
	$department=$_POST['department'];
	$course=$_POST['course'];
	$year_level=$_POST['year_level'];
	$father_last_name=$_POST['father_last_name'];
	$father_first_name=$_POST['father_first_name'];
	$father_middle_name=$_POST['father_middle_name'];
	$father_status=$_POST['father_status'];
	$father_occupation=$_POST['father_occ'];
	$father_salary=$_POST['father_salary'];
	$father_employer_name=$_POST['father_emp_name'];
	$father_employer_address=$_POST['father_emp_add'];
	$father_office_tel_no=$_POST['father_office_tel_no'];
	$mother_last_name=$_POST['mother_last_name'];
	$mother_first_name=$_POST['mother_first_name'];
	$mother_middle_name=$_POST['mother_middle_name'];
	$mother_status=$_POST['mother_status'];
	$mother_occupation=$_POST['mother_occ'];
	$mother_salary=$_POST['mother_salary'];
	$mother_employer_name=$_POST['mother_emp_name'];
	$mother_employer_address=$_POST['mother_emp_add'];
	$mother_office_tel_no=$_POST['mother_office_tel_no'];
	$guardian_last_name=$_POST['guardian_last_name'];
	$guardian_first_name=$_POST['guardian_first_name'];
	$guardian_middle_name=$_POST['guardian_middle_name'];
	$guardian_relation=$_POST['guardian_relation'];
	$family_income=$_POST['family_income'];
	$profit_business=$_POST['profit_business'];
	$profit_land=$_POST['profit_land'];
	$profit_rentallands=$_POST['profit_rentallands'];
	$profit_interests=$_POST['profit_interests'];
	$profit_dividends=$_POST['profit_dividends'];
	$profit_others=$_POST['profit_others'];
	$profit_subtotal=$_POST['profit_subtotal'];
	$profit_bankdeposits=$_POST['profit_bankdeposits'];
	$profit_savingsaccount=$_POST['profit_savingsaccount'];
	$profit_checkingaccounts=$_POST['profit_checkingaccounts'];
	$profit_timedeposits=$_POST['profit_timedeposits'];
	$profit_total=$_POST['profit_total'];
	$profit_net=$_POST['profit_net'];
	$profit_tax=$_POST['profit_tax'];
	$res_location=$_POST['res_location'];
	$res_type=$_POST['res_type'];
	$own_type=$_POST['own_type'];
	// $rented_duration=$_POST[''];
	// $rented_monthly=$_POST[''];
	// $owned_name=$_POST[''];
	// $owned_acq_date=$_POST[''];
	// $owned_cost_acq=$_POST[''];
	// $owned_market_val=$_POST[''];
	// $owned_unpaid_mortgage=$_POST[''];
	// $owned_monthly_mortgage=$_POST[''];
	$lot_size=$_POST['lot_size'];
	$no_bedrooms=$_POST['no_bedrooms'];
	$no_baths=$_POST['no_baths'];
	$no_helpers=$_POST['no_helpers'];

	$property_owned1_description=$_POST['property_owned1_description'];
	$property_owned1_location=$_POST['property_owned1_location'];
	$property_owned1_size=$_POST['property_owned1_size'];
	$property_owned1_acq_date=$_POST['property_owned1_acq_date'];
	$property_owned1_acq_value=$_POST['property_owned1_acq_value'];
	$property_owned1_presmarketval=$_POST['property_owned1_presmarketval'];
	$property_owned1_yearlynetincome=$_POST['property_owned1_yearlynetincome'];

	$property_owned2_description=$_POST['property_owned2_description'];
	$property_owned2_location=$_POST['property_owned2_location'];
	$property_owned2_size=$_POST['property_owned2_size'];
	$property_owned2_acq_date=$_POST['property_owned2_acq_date'];
	$property_owned2_acq_value=$_POST['property_owned2_acq_value'];
	$property_owned2_presmarketval=$_POST['property_owned2_presmarketval'];
	$property_owned2_yearlynetincome=$_POST['property_owned2_yearlynetincome'];

	$property_owned3_description=$_POST['property_owned3_description'];
	$property_owned3_location=$_POST['property_owned3_location'];
	$property_owned3_size=$_POST['property_owned3_size'];
	$property_owned3_acq_date=$_POST['property_owned3_acq_date'];
	$property_owned3_acq_value=$_POST['property_owned3_acq_value'];
	$property_owned3_presmarketval=$_POST['property_owned3_presmarketval'];
	$property_owned3_yearlynetincome=$_POST['property_owned3_yearlynetincome'];

	

	$telset_acq_date=$_POST['telset_acq_date'];
	$telset_acq_cost=$_POST['telset_acq_cost'];
	$telset_bal=$_POST['telset_bal'];
	$telset_monthly_payment=$_POST['telset_monthly_payment'];

	$vcd_comp_acq_date=$_POST['vcd_comp_acq_date'];
	$vcd_comp_acq_cost=$_POST['vcd_comp_acq_cost'];
	$vcd_comp_bal=$_POST['vcd_comp_bal'];
	$vcd_comp_monthly_payment=$_POST['vcd_comp_monthly_payment'];

	$vcd_play_acq_date=$_POST['vcd_play_acq_date'];
	$vcd_play_acq_cost=$_POST['vcd_play_acq_cost'];
	$vcd_play_bal=$_POST['vcd_play_bal'];
	$vcd_play_monthly_payment=$_POST['vcd_play_monthly_payment'];

	$pc_acq_date=$_POST['pc_acq_date'];
	$pc_acq_cost=$_POST['pc_acq_cost'];
	$pc_bal=$_POST['pc_bal'];
	$pc_monthly_payment=$_POST['pc_monthly_payment'];

	$ref_acq_date=$_POST['ref_acq_date'];
	$ref_acq_cost=$_POST['ref_acq_cost'];
	$ref_bal=$_POST['ref_bal'];
	$ref_monthly_payment=$_POST['ref_monthly_payment'];

	$ac_acq_date=$_POST['ac_acq_date'];
	$ac_acq_cost=$_POST['ac_acq_cost'];
	$ac_bal=$_POST['ac_bal'];
	$ac_monthly_payment=$_POST['ac_monthly_payment'];

	$piano_acq_date=$_POST['piano_acq_date'];
	$piano_acq_cost=$_POST['piano_acq_cost'];
	$piano_bal=$_POST['piano_bal'];
	$piano_monthly_payment=$_POST['piano_monthly_payment'];

	$wm_acq_date=$_POST['wm_acq_date'];
	$wm_acq_cost=$_POST['wm_acq_cost'];
	$wm_bal=$_POST['wm_bal'];
	$wm_monthly_payment=$_POST['wm_monthly_payment'];

	$vehicle_acq_date=$_POST['vehicle_acq_date'];
	$vehicle_acq_cost=$_POST['vehicle_acq_cost'];
	$vehicle_bal=$_POST['vehicle_bal'];
	$vehicle_monthly_payment=$_POST['vehicle_monthly_payment'];

	$other_source=implode(',',$_POST['other_source']);
	

	$nat_of_business=$_POST['nat_of_business'];
	$capital_inv=$_POST['capital_inv'];
	$no_employees=$_POST['no_employees'];
	$ann_net_profit=$_POST['ann_net_profit'];

	$other_property=implode(',',$_POST['other_property']);
	

	$no_hectares=$_POST['no_hectares'];
	$crop_fish_type=$_POST['crop_fish_type'];
	$no_workers=$_POST['no_workers'];
	$app_net_profit_hec_per_year=$_POST['app_net_profit_hec_per_year'];


	$fip1_nature=$_POST['fip1_nature'];
	$fip1_company=$_POST['fip1_company'];
	$fip1_insurance=$_POST['fip1_insurance'];
	$fip1_premium=$_POST['fip1_premium'];
	$fip1_monthly=$_POST['fip1_monthly'];

	$fip2_nature=$_POST['fip2_nature'];
	$fip2_company=$_POST['fip2_company'];
	$fip2_insurance=$_POST['fip2_insurance'];
	$fip2_premium=$_POST['fip2_premium'];
	$fip2_monthly=$_POST['fip2_monthly'];


	$liability1_payee=$_POST['liability1_payee'];
	$liability1_purp_loan=$_POST['liability1_purp_loan'];
	$liability1_amt=$_POST['liability1_amt'];
	$liability1_mat=$_POST['liability1_mat'];
	$liability1_payable=$_POST['liability1_payable'];
	$liability1_mon=$_POST['liability1_mon'];

	$liability2_payee=$_POST['liability2_payee'];
	$liability2_purp_loan=$_POST['liability2_purp_loan'];
	$liability2_amt=$_POST['liability2_amt'];
	$liability2_mat=$_POST['liability2_mat'];
	$liability2_payable=$_POST['liability2_payable'];
	$liability2_mon=$_POST['liability2_mon'];


	$liability3_payee=$_POST['liability3_payee'];
	$liability3_purp_loan=$_POST['liability3_purp_loan'];
	$liability3_amt=$_POST['liability3_amt'];
	$liability3_mat=$_POST['liability3_mat'];
	$liability3_payable=$_POST['liability3_payable'];
	$liability3_mon=$_POST['liability3_mon'];


	$liability4_payee=$_POST['liability4_payee'];
	$liability4_purp_loan=$_POST['liability4_purp_loan'];
	$liability4_amt=$_POST['liability4_amt'];
	$liability4_mat=$_POST['liability4_mat'];
	$liability4_payable=$_POST['liability4_payable'];
	$liability4_mon=$_POST['liability4_mon'];


	$liability5_payee=$_POST['liability5_payee'];
	$liability5_purp_loan=$_POST['liability5_purp_loan'];
	$liability5_amt=$_POST['liability5_amt'];
	$liability5_mat=$_POST['liability5_mat'];
	$liability5_payable=$_POST['liability5_payable'];
	$liability5_mon=$_POST['liability5_mon'];


	$liability6_payee=$_POST['liability6_payee'];
	$liability6_purp_loan=$_POST['liability6_purp_loan'];
	$liability6_amt=$_POST['liability6_amt'];
	$liability6_mat=$_POST['liability6_mat'];
	$liability6_payable=$_POST['liability6_payable'];
	$liability6_mon=$_POST['liability6_mon'];


	$liability7_payee=$_POST['liability7_payee'];
	$liability7_purp_loan=$_POST['liability7_purp_loan'];
	$liability7_amt=$_POST['liability7_amt'];
	$liability7_mat=$_POST['liability7_mat'];
	$liability7_payable=$_POST['liability7_payable'];
	$liability7_mon=$_POST['liability7_mon'];


	

	$child1_name=$_POST['child1_name'];
	$child1_age=$_POST['child1_age'];
	$child1_status=$_POST['child1_status'];
	$child1_year=$_POST['child1_year'];
	$child1_school=$_POST['child1_school'];
	$child1_tuition=$_POST['child1_tuition'];
	$child1_paid=$_POST['child1_paid'];

	$child2_name=$_POST['child2_name'];
	$child2_age=$_POST['child2_age'];
	$child2_status=$_POST['child2_status'];
	$child2_year=$_POST['child2_year'];
	$child2_school=$_POST['child2_school'];
	$child2_tuition=$_POST['child2_tuition'];
	$child2_paid=$_POST['child2_paid'];

	$child3_name=$_POST['child3_name'];
	$child3_age=$_POST['child3_age'];
	$child3_status=$_POST['child3_status'];
	$child3_year=$_POST['child3_year'];
	$child3_school=$_POST['child3_school'];
	$child3_tuition=$_POST['child3_tuition'];
	$child3_paid=$_POST['child3_paid'];

	$child4_name=$_POST['child4_name'];
	$child4_age=$_POST['child4_age'];
	$child4_status=$_POST['child4_status'];
	$child4_year=$_POST['child4_year'];
	$child4_school=$_POST['child4_school'];
	$child4_tuition=$_POST['child4_tuition'];
	$child4_paid=$_POST['child4_paid'];

	$child5_name=$_POST['child5_name'];
	$child5_age=$_POST['child5_age'];
	$child5_status=$_POST['child5_status'];
	$child5_year=$_POST['child5_year'];
	$child5_school=$_POST['child5_school'];
	$child5_tuition=$_POST['child5_tuition'];
	$child5_paid=$_POST['child5_paid'];

	$child6_name=$_POST['child6_name'];
	$child6_age=$_POST['child6_age'];
	$child6_status=$_POST['child6_status'];
	$child6_year=$_POST['child6_year'];
	$child6_school=$_POST['child6_school'];
	$child6_tuition=$_POST['child6_tuition'];
	$child6_paid=$_POST['child6_paid'];

	$child7_name=$_POST['child7_name'];
	$child7_age=$_POST['child7_age'];
	$child7_status=$_POST['child7_status'];
	$child7_year=$_POST['child7_year'];
	$child7_school=$_POST['child7_school'];
	$child7_tuition=$_POST['child7_tuition'];
	$child7_paid=$_POST['child7_paid'];

	$person1_name=$_POST['person1_name'];
	$person1_support=$_POST['person1_support'];
	$person1_ben=$_POST['person1_ben'];
	$person1_amt=$_POST['person1_amt'];

	$person2_name=$_POST['person2_name'];
	$person2_support=$_POST['person2_support'];
	$person2_ben=$_POST['person2_ben'];
	$person2_amt=$_POST['person2_amt'];

	$person3_name=$_POST['person3_name'];
	$person3_support=$_POST['person3_support'];
	$person3_ben=$_POST['person3_ben'];
	$person3_amt=$_POST['person3_amt'];


	$scholar1_name=$_POST['scholar1_name'];
	$scholar1_type=$_POST['scholar1_type'];
	$scholar1_sponsor=$_POST['scholar1_sponsor'];
	$scholar1_ben=$_POST['scholar1_ben'];

	$scholar2_name=$_POST['scholar2_name'];
	$scholar2_type=$_POST['scholar2_type'];
	$scholar2_sponsor=$_POST['scholar2_sponsor'];
	$scholar2_ben=$_POST['scholar2_ben'];

	$scholar3_name=$_POST['scholar3_name'];
	$scholar3_type=$_POST['scholar3_type'];
	$scholar3_sponsor=$_POST['scholar3_sponsor'];
	$scholar3_ben=$_POST['scholar3_ben'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO APPLICANT (
	STUDENT_ID, 
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
	PREFFERED_COURSE ,
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
	scholar3_ben)



VALUES (
	'$student_id', 
	'$first_name' , 
	'$middle_name' ,
	'$last_name' ,
	'$nick_name' ,
	'$gender' ,
	'$age' ,
	'$birth_date' ,
	'$birth_place' ,
	'$civil_status' ,
	'$religion' ,
	'$telephone_number' ,
	'$cellphone_number' ,
	'$email' ,
	'$permanent_address' ,
	'$city' ,
	'$province' ,
	'$country' ,
	'$zip_code' ,
	'$highschool_attended' ,
	'$preffered_course' ,
	'$department' ,
	'$course' ,
	'$year_level' ,
	'$father_last_name' ,
	'$father_first_name' ,
	'$father_middle_name' ,
	'$father_status' ,
	'$father_occupation' ,
	'$father_salary' ,
	'$father_employer_name' ,
	'$father_employer_address' ,
	'$father_office_tel_no' ,
	'$mother_last_name' ,
	'$mother_first_name' ,
	'$mother_middle_name' ,
	'$mother_status' ,
	'$mother_occupation' ,
	'$mother_salary' ,
	'$mother_employer_name' ,
	'$mother_employer_address' ,
	'$mother_office_tel_no' ,
	'$guardian_last_name' ,
	'$guardian_first_name' ,
	'$guardian_middle_name' ,
	'$guardian_relation' ,
	'$family_income' ,
	'$profit_business' ,
	'$profit_land' ,
	'$profit_rentallands' ,
	'$profit_interests' ,
	'$profit_dividends' ,
	'$profit_others' ,
	'$profit_subtotal' ,
	'$profit_bankdeposits' ,
	'$profit_savingsaccount' ,
	'$profit_checkingaccounts' ,
	'$profit_timedeposits' ,
	'$profit_total' ,
	'$profit_net' ,
	'$profit_tax' ,
	'$res_location' ,
	'$res_type' ,
	'$own_type' ,
	
	'$lot_size' ,
	'$no_bedrooms' ,
	'$no_baths' ,
	'$no_helpers' ,

	'$property_owned3_description' ,
	'$property_owned3_location' ,
	'$property_owned3_size' ,
	'$property_owned3_acq_date' ,
	'$property_owned3_acq_value' ,
	'$property_owned3_presmarketval' ,
	'$property_owned3_yearlynetincome' ,

	'$property_owned2_description' ,
	'$property_owned2_location' ,
	'$property_owned2_size' ,
	'$property_owned2_acq_date' ,
	'$property_owned2_acq_value' ,
	'$property_owned2_presmarketval' ,
	'$property_owned2_yearlynetincome' ,

	'$property_owned3_description' ,
	'$property_owned3_location' ,
	'$property_owned3_size' ,
	'$property_owned3_acq_date' ,
	'$property_owned3_acq_value' ,
	'$property_owned3_presmarketval' ,
	'$property_owned3_yearlynetincome' ,

	'$telset_acq_date' ,
	'$telset_acq_cost' ,
	'$telset_bal' ,
	'$telset_monthly_payment' ,

	'$vcd_comp_acq_date' ,
	'$vcd_comp_acq_cost' ,
	'$vcd_comp_bal' ,
	'$vcd_comp_monthly_payment' ,

	'$vcd_play_acq_date' ,
	'$vcd_play_acq_cost' ,
	'$vcd_play_bal' ,
	'$vcd_play_monthly_payment' ,

	'$pc_acq_date' ,
	'$pc_acq_cost' ,
	'$pc_bal' ,
	'$pc_monthly_payment' ,

	'$ref_acq_date' ,
	'$ref_acq_cost' ,
	'$ref_bal' ,
	'$ref_monthly_payment' ,

	'$ac_acq_date' ,
	'$ac_acq_cost' ,
	'$ac_bal' ,
	'$ac_monthly_payment' ,

	'$piano_acq_date' ,
	'$piano_acq_cost' ,
	'$piano_bal' ,
	'$piano_monthly_payment' ,

	'$wm_acq_date' ,
	'$wm_acq_cost' ,
	'$wm_bal' ,
	'$wm_monthly_payment' ,

	'$vehicle_acq_date' ,
	'$vehicle_acq_cost' ,
	'$vehicle_bal' ,
	'$vehicle_monthly_payment' ,

	'$other_source' ,
	

	'$nat_of_business' ,
	'$capital_inv' ,
	'$no_employees' ,
	'$ann_net_profit' ,

	'$other_property' ,
	

	'$no_hectares' ,
	'$crop_fish_type' ,
	'$no_workers' ,
	'$app_net_profit_hec_per_year' ,


	'$fip1_nature' ,
	'$fip1_company' ,
	'$fip1_insurance' ,
	'$fip1_premium' ,
	'$fip1_monthly' ,

	'$fip2_nature' ,
	'$fip2_company' ,
	'$fip2_insurance' ,
	'$fip2_premium' ,
	'$fip2_monthly' ,


	'$liability1_payee' ,
	'$liability1_purp_loan' ,
	'$liability1_amt' ,
	'$liability1_mat' ,
	'$liability1_payable' ,
	'$liability1_mon' ,

	'$liability2_payee' ,
	'$liability2_purp_loan' ,
	'$liability2_amt' ,
	'$liability2_mat' ,
	'$liability2_payable' ,
	'$liability2_mon' ,

	'$liability3_payee' ,
	'$liability3_purp_loan' ,
	'$liability3_amt' ,
	'$liability3_mat' ,
	'$liability3_payable' ,
	'$liability3_mon' ,

	'$liability4_payee' ,
	'$liability4_purp_loan' ,
	'$liability4_amt' ,
	'$liability4_mat' ,
	'$liability4_payable' ,
	'$liability4_mon' ,

	'$liability5_payee' ,
	'$liability5_purp_loan' ,
	'$liability5_amt' ,
	'$liability5_mat' ,
	'$liability5_payable' ,
	'$liability5_mon' ,

	'$liability6_payee' ,
	'$liability6_purp_loan' ,
	'$liability6_amt' ,
	'$liability6_mat' ,
	'$liability6_payable' ,
	'$liability6_mon' ,

	'$liability7_payee' ,
	'$liability7_purp_loan' ,
	'$liability7_amt' ,
	'$liability7_mat' ,
	'$liability7_payable' ,
	'$liability7_mon' ,


	'$child1_name' ,
	'$child1_age' ,
	'$child1_status' ,
	'$child1_year' ,
	'$child1_school' ,
	'$child1_tuition' ,
	'$child1_paid' ,

	'$child2_name' ,
	'$child2_age' ,
	'$child2_status' ,
	'$child2_year' ,
	'$child2_school' ,
	'$child2_tuition' ,
	'$child2_paid' ,

	'$child3_name' ,
	'$child3_age' ,
	'$child3_status' ,
	'$child3_year' ,
	'$child3_school' ,
	'$child3_tuition' ,
	'$child3_paid' ,

	'$child4_name' ,
	'$child4_age' ,
	'$child4_status' ,
	'$child4_year' ,
	'$child4_school' ,
	'$child4_tuition' ,
	'$child4_paid' ,

	'$child5_name' ,
	'$child5_age' ,
	'$child5_status' ,
	'$child5_year' ,
	'$child5_school' ,
	'$child5_tuition' ,
	'$child5_paid' ,

	'$child6_name' ,
	'$child6_age' ,
	'$child6_status' ,
	'$child6_year' ,
	'$child6_school' ,
	'$child6_tuition' ,
	'$child6_paid' ,

	'$child7_name' ,
	'$child7_age' ,
	'$child7_status' ,
	'$child7_year' ,
	'$child7_school' ,
	'$child7_tuition' ,
	'$child7_paid' ,

	'$person1_name' ,
	'$person1_support' ,
	'$person1_ben' ,
	'$person1_amt' ,

	'$person2_name' ,
	'$person2_support' ,
	'$person2_ben' ,
	'$person2_amt' ,

	'$person3_name' ,
	'$person3_support' ,
	'$person3_ben' ,
	'$person3_amt' ,


	'$scholar1_name' ,
	'$scholar1_type' ,
	'$scholar1_sponsor' ,
	'$scholar1_ben' ,

	'$scholar2_name' ,
	'$scholar2_type' ,
	'$scholar2_sponsor' ,
	'$scholar2_ben' ,

	'$scholar3_name' ,
	'$scholar3_type' ,
	'$scholar3_sponsor' ,
	'$scholar3_ben' )";





if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>