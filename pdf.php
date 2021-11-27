<?php
$con =mysqli_connect('epiz_30456152','MhQeXobo313tR','sql310.epizy.com');
mysqli_select_db($con,'epiz_30456152_displayupdate	');

if(!empty($_POST ['submit']))
{
   $client = $_POST['name'];
   $refrence = $_POST['rfrence'];

   $cdate = $_POST['ddate'];

   $candidate = $_POST['cname'];

   $employeid = $_POST['eid'];
   $files = $_FILES['file'];
   $imagex = $_POST['imageex'];
   // $filesx = $_FILES['panfile'];
   $imagexx = $_POST['imageexx'];
   $imagexxx = $_POST['imageexxx'];
   $imshow1 = $_POST['imageexxx1'];
   $imshow2= $_POST['imageexxx2'];
   $imshow3 = $_POST['imageexxx3'];




   $status = $_POST['statu'];
   $remarks = $_POST['rate'];
   $chosse =$_POST['option1'];
   $c2 =$_POST['option2'];
   $c3 =$_POST['option3'];
   $c4 =$_POST['option4'];
   $c5 =$_POST['option5'];
   $c6 =$_POST['option6'];
   $c7 =$_POST['option7'];
   $c8 =$_POST['option8'];
   $c9 =$_POST['option9'];
   $c10 =$_POST['option10'];

   $pan1 =$_POST['pname'];
   $pan2 =$_POST['pdate'];
   $pan3 =$_POST['pno'];
   $pan4 =$_POST['pcom'];
   $pan5 =$_POST['pstatus'];
   // $pan6 =$_POST['pname'];

   $aadha1 =$_POST['aname'];
   $aadha2 =$_POST['adate'];
   $aadha3 =$_POST['ano'];
   $aadha4 =$_POST['acom'];
   $aadha5 =$_POST['astatus'];
   $present1 =$_POST['prename'];
   $present2 =$_POST['preadd'];
   $present3 =$_POST['contp'];


   $present4 =$_POST['relation'];
   $present5 =$_POST['preno'];
   $present6 =$_POST['precom'];
   $present7 =$_POST['prestatus'];

   $perma1 =$_POST['permaname'];
   $perma2 =$_POST['permaad'];
   $perma3 =$_POST['permaper'];


   $perma4 =$_POST['permarelation'];
   $perma5 =$_POST['permano'];
   $perma6 =$_POST['permacom'];
   $perma7 =$_POST['permastatus'];

   $crime2 =$_POST['crimedate'];
   $crime3 =$_POST['crimecom3'];
   $crime4 =$_POST['crimestatus4'];

   

   $filename=$files['name'];
   $fileerror =$files['error'];
   $filetmp =$files['tmp_name'];

   $fileext = explode('.',$filename);
   $filecheak = strtolower(end($fileext));

   $fileextstored = array('jpg', 'jpeg' ,'JPG','JPEG',);

   if(in_array($filecheak,$fileextstored)){
      $destinationfile ='upload/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);

      $q = "INSERT INTO `imgupload`(`id`, `image`) VALUES ('$filename','$destinationfile')";
      
      
      
      // "INSERT INTO `imageupload`(`image`)
      //  VALUES ('$filename','$destinationfile') ";

$query = mysqli_query($con,$q);
   }
// $displayquery = "select * from imgupload";
// $querydisplay = mysqli_query($con,$displayquery);





  


   


   require('fpdf.php');
  

   class PDF extends FPDF
   {
   // Page header
   function Header()
   {
       // Logo
       $this->Image('TV Logo R.png',80,10,50);
       // Arial bold 15
       $this->SetFont('Arial','B',12);
       // Move to the right
       $this->Cell(80);
       // Title
       $this->SetXY(11, 39);
       $this->SetTextColor(69,81,89);

       $this->Cell(0, 5,'CONFIDENTIAL',0, 1,'C');
       // Line break
       $this->Ln(4);
   }
   
   // Page footer
   function Footer()
   {
       // Position at 1.5 cm from bottom
       $this->SetY(-15);
       // Arial italic 8
       $this->SetFont('Arial','I',8);
       // Page number
       $this->Cell(0,10,'Tenantverify.in '.$this->PageNo().'/{nb}',0,0,'C');
   }
   }
   
   // Instanciation of inherited class
   $pdf = new PDF();
   $pdf->AliasNbPages();
   $pdf->AddPage();
   $pdf->SetFont('Times','',12);
 
  
   $pdf->SetFillColor(252,166,69);
   $pdf->SetXY(11, 52);
   $pdf->SetFont('', 'B', 18);
   $pdf->Cell(188, 9, 'FINAL REPORT', 1, 1, 'C', true);
   $pdf->SetFillColor(255);
 /* --- Cell --- */
 $pdf->SetXY(11, 68);

 $pdf->SetFont('Arial','B',11);

 $pdf->Cell(60,10,'Client Name ',0,0,false);
 $pdf->Cell(60,10,"$client ",0,1,false);

 $pdf->Cell(60,10,'Client Reference No. ',0,0,false);
 $pdf->Cell(60,10,"$refrence",0,1,false);

 $pdf->Cell(60,10,'Date',0,0,false);
 $pdf->Cell(60,10,"$cdate",0,1,false);

 $pdf->Cell(60,10,'Candidate Name',0,0,false);
 $pdf->Cell(60,10,"$candidate",0,1,false);

 $pdf->Cell(60,10,'Employee ID',0,0,false);
 $pdf->Cell(60,10,"$employeid",0,1,false);
 $pdf->Image("upload/$imagex.jpg",169,70,30);




/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 125);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(189, 11, 'Status', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
// $pdf->SetXY(49, 125);
// $pdf->Cell(71, 10, 'Color Code', 'RL', 1, 'C', false);
// /* --- Cell --- */
$pdf->SetXY(121, 125);
$pdf->Cell(79, 10, 'Remarks', 0, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(135);
$pdf->Ln(5);
/* --- Cell --- */
$pdf->SetXY(11, 138);
$pdf->Cell(79, 10, "$status", 1, 1, 'L', false);
/* --- Cell --- */












$pdf->SetFont('Arial', 'B', 8);

$pdf->SetXY(89, 138);

$pdf->MultiCell(112,10,"$remarks",1,1,'C',false);


/* --- Ln --- */
$pdf->SetY(159);
$pdf->Ln(5);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 166);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'PAN CARD', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 166);
$pdf->Cell(119, 11, "$chosse", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(175);
$pdf->Ln(4);
/* --- Ln --- */
$pdf->SetY(159);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 176);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'AADHAAR CARD', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 176);
$pdf->Cell(119, 11, "$c2", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 186);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'VOTER ID ', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 186);
$pdf->Cell(119, 11, "$c3", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(175);
$pdf->Ln(4);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 196);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'DRIVING LICENSE', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 196);
$pdf->Cell(119, 11, "$c4", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(175);
$pdf->Ln(4);


$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 206);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'PASSPORT', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 206);
$pdf->Cell(119, 11, "$c5", 1, 1, 'C', false);


$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 216);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'ADDRESS ', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 216);
$pdf->Cell(119, 11, "$c6", 1, 1, 'C', false);


$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 226);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'PERMANENT ADDRESS', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 226);
$pdf->Cell(119, 11, "$c7", 1, 1, 'C', false);


$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 236);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'CREDIT / CIBIL', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 236);
$pdf->Cell(119, 11, "$c8", 1, 1, 'C', false);


$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 246);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'COURT CHEAK', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 246);
$pdf->Cell(119, 11, "$c9", 1, 1, 'C', false);


$pdf->SetY(175);
$pdf->Ln(4);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 256);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 11, 'POLICE VERIFICATION', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 256);
$pdf->Cell(119, 11, "$c10", 1, 1, 'C', false);







  





$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 290);
$pdf->SetFont('', 'B', 18);
$pdf->Cell(188, 9, 'AADHAR VERIFICATION ', 1, 1, 'C', true);
$pdf->SetFillColor(255);


/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 65);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Candidate Name', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 65);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$aadha1", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 75);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Date of Birth', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 75);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$aadha2", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 85);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Aadhaar No.', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 85);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$aadha3", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);

$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 95);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 15, 'Comments', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 95);
$pdf->SetFont('', 'B', 8);
$pdf->MultiCell(118,15,"$aadha4",1,1,'C',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 110);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Status', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 110);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$aadha5", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);


$pdf->Image("upload/$imagexxx.jpg",40,140,140,60);

$pdf->Ln(3);


$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 290);
$pdf->SetFont('', 'B', 18);
$pdf->Cell(188, 9, 'PAN VERIFICATION ', 1, 1, 'C', true);
$pdf->SetFillColor(255);


/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 65);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Candidate Name', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 65);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$pan1", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 75);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Date of Birth', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 75);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$pan2", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 85);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Pan No.', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 85);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$pan3", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);

$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 95);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 12, 'Comments', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 95);
$pdf->SetFont('', 'B', 8);
$pdf->Cell(118, 12, "$pan4", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 107);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(70, 10, 'Status', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(81, 107);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(118, 10, "$pan5", 1, 1, 'C', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);


$pdf->Image("upload/$imagexx.jpg",40,130,140,140);















$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 270);
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(190, 13, 'Present Address Verification', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Ln --- */
$pdf->SetY(83);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 66);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Candidate Name', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 66);
$pdf->Cell(125, 9, "$present1", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 76);
$pdf->Cell(64, 15, 'Present Addresss', 1, 1, 'L', true);
$pdf->SetFillColor(255);

$pdf->SetXY(75, 76);
$pdf->SetFontSize(8);

$pdf->MultiCell(125,15,"$present2",1,1,'L',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);




/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 92);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Contact Person', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 92);
$pdf->Cell(125, 9, "$present3", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);

/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 102);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Relationship', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 102);
$pdf->Cell(125, 9, "$present4", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 112);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Contact Number', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 112);
$pdf->Cell(125, 9, "$present5", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);

/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 122);
$pdf->SetFontSize(12);
$pdf->Cell(64, 13, 'Comments', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 122);
$pdf->SetFontSize(8);

$pdf->MultiCell(125,13,"$present6",1,1,'L',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 136);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'status', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 136);
$pdf->Cell(125, 9, "$present7", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);












$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 270);
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(190, 13, 'Permanent Address Verification', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Ln --- */
$pdf->SetY(83);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 66);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Candidate Name', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 66);
$pdf->Cell(125, 9, "$perma1", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 76);
$pdf->SetFontSize(12);

$pdf->Cell(64, 15, 'Permanent Addresss', 1, 1, 'L', true);
$pdf->SetFillColor(255);

$pdf->SetXY(75, 76);
$pdf->SetFontSize(8);

$pdf->MultiCell(125,15,"$perma2",1,1,'L',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);




/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 92);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Contact Person', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 92);
$pdf->Cell(125, 9, "$perma3", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);

/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 102);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Relationship', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 102);
$pdf->Cell(125, 9, "$perma4", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 112);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Contact Number', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 112);
$pdf->Cell(125, 9, "$perma5", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);

/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 122);
$pdf->SetFontSize(12);
$pdf->Cell(64, 13, 'Comments', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 122);
$pdf->SetFontSize(8);

$pdf->MultiCell(125,13,"$perma6",1,1,'L',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 136);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'status', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 136);
$pdf->Cell(125, 9, "$perma7", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);



$pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 270);
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(190, 13, 'CRIMINAL / CIVIL COURT CHECK', 1, 1, 'C', true);
$pdf->SetFillColor(255);
/* --- Ln --- */
$pdf->SetY(83);
$pdf->Ln(3);

/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 76);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(64, 15, 'Permanent Addresss', 1, 1, 'L', true);
$pdf->SetFillColor(255);

$pdf->SetXY(75, 76);
$pdf->SetFontSize(8);

$pdf->MultiCell(125,15,"$perma2",1,1,'L',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);




/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 92);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'Date Of Verification', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 92);
$pdf->Cell(125, 9, "$crime2", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);

/* --- Cell --- */

/* --- Cell --- */


/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 102);
$pdf->SetFontSize(12);
$pdf->Cell(64, 13, 'Comments', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 102);
$pdf->SetFontSize(8);

$pdf->MultiCell(125,13,"$crime3",1,1,'L',false);

/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);
/* --- Cell --- */
$pdf->SetFillColor(252,166,69);
$pdf->SetXY(10, 116);
$pdf->SetFontSize(12);
$pdf->Cell(64, 9, 'status', 1, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetXY(75, 116);
$pdf->Cell(125, 9, "$crime4", 1, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(95);
$pdf->Ln(3);




// $pdf->Image("upload/$imshow1.jpg",200,230,140,140);
// $pdf->Image("upload/$imshow2.jpg",200,230,140,140);
// $pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 290);
$pdf->SetFont('', 'B', 18);
$pdf->Cell(188, 9, ' ',  'C', true);
$pdf->SetFillColor(255);




$pdf->Image("upload/$imshow1.jpg",18,45,180);




// $pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 290);
$pdf->SetFont('', 'B', 18);
$pdf->Cell(188, 9, '', 'C', true);
$pdf->SetFillColor(255);




$pdf->Image("upload/$imshow2.jpg",18,45,180);




// $pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 270);
$pdf->SetFont('', 'B', 18);
$pdf->Cell(188, 9, ' ', 'C', true);
$pdf->SetFillColor(255);




$pdf->Image("upload/$imshow3.jpg",18,50,180);


// $pdf->SetFillColor(252,166,69);
$pdf->SetXY(11, 290);
$pdf->SetFont('', 'B', 18);
$pdf->Cell(188, 9, ' ', 'C', true);
$pdf->SetFillColor(255);




$pdf->Image('Samir sewa_page-0004.jpg',18,45,180);



// $pdf->SetFillColor(252,166,69);
$pdf->SetXY(19, 300);
$pdf->SetFont('', 'B', 15);
$pdf->Cell(188, 9, ' ', 'C', true);
$pdf->SetFillColor(255);

/* --- Text --- */
$pdf->SetXY(19, 380);

$pdf->Text(34, 99, 'If you require any further information, Please contact us.');
/* --- Cell --- */
$pdf->SetXY(33, 51);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(23, 112, 'WhatsApp:', 0, 1, 'L', false);
/* --- Text --- */
$pdf->Text(59, 108, '+91 6363827088');
/* --- Cell --- */
$pdf->SetXY(33, 114);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(14, 5, 'Call:', 0, 1, 'L', false);
/* --- Text --- */
$pdf->Text(47, 118, '+91 80 49564156 / 41643626');
/* --- Cell --- */
$pdf->SetXY(33, 122);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(14, 5, 'Email:', 0, 1, 'L', false);
$pdf->Text(54, 126, 'hello@tenantverify.in');
$pdf->SetXY(33, 129);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(14, 5, 'Website:', 0, 1, 'L', false);
$pdf->Text(55, 133, 'www.Tenantverify.in');
/* --- Cell --- */
$pdf->SetXY(32, 140);
$pdf->SetFont('', 'B', 14);
$pdf->Cell(0, 5, 'REGISTERED OFFICE:', 0, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(125);
$pdf->Ln(5);
/* --- Cell --- */

$pdf->SetXY(32, 148);
$pdf->Cell(0, 5, 'Skanda Integrated Services Pvt Ltd.', 0, 1, 'L', false);
/* --- Ln --- */
$pdf->SetY(135);
$pdf->Ln(5);
/* --- Cell --- */

$pdf->SetXY(32, 156);
$pdf->Cell(0, 5, 'No. 27/3, 006, Buildwell Homes, Borewell Road,', 0, 1, 'L', false);
/* --- Cell --- */

$pdf->SetXY(32, 164);
$pdf->Cell(0, 5, 'Nallurahalli, Whitefield, Bengaluru,', 0, 1, 'L', false);


$pdf->Output('D',$candidate.$refrence.'.pdf', false);
// $pdf->Output();


}

?>