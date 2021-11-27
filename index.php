<!DOCTYPE html>
<!-- Created By Tannetverify -->

<head>
    <meta charset="utf-8">
    <title>Tenantverify</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-dark text-light">

    <div class="border border-light mt-3  ">
        <h2 class="text-center text-warning">Final Report </h2>


    </div>



    <form action="pdf.php" method="POST" enctype="multipart/form-data" class="needs-validation mx-5" novalidate>

        <div class="form-row mt-5 ">
            <div class="col-md-3 mb-2">
                <label for="validationCustom01">Client Name</label>
                <input type="text" class="form-control border  border-warning" id="validationCustom01" placeholder="Enter  name" name="name"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom02">Client Refrence No</label>
                <input type="text" class="form-control border  border-warning" id="validationCustom02" placeholder="Enter Refrence No"
                    name="rfrence" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom02">Date</label>
                <input type="date" class="form-control border  border-warning" id="validationCustom02" name="ddate" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <label for="validationCustom02">Candidate Name</label>
                <input type="text" class="form-control border  border-warning" id="validationCustom02" placeholder="Enter Candidate name"
                    name="cname" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

        <div class="form-row  ">


            <div class="col-md-4 mb-2">
                <label for="validationCustom03">Employee Id</label>

                <input type="text" name="eid" class="form-control border  border-warning" id="validationCustom03"
                    placeholder="Enter Employee Id" required>
            </div>
            <div class="invalid-feedback">
                Please provide a valid date of birth.
            </div>

            <div class="col-md-4 mb-2">
                <label for="validationCustom03">Upload Image</label>

                <input type="file" name="file" id="file" class="form-control border  border-warning" id="validationCustom03" accept=".jpg"
                    required>
            </div>
            <div class="invalid-feedback">
                Please provide a valid date of birth.
            </div>
            <div class="col-md-4 mb-2">
                <label for="validationCustom03">Enter image name of image same as upload image </label>

                <input type="text" name="imageex" class="form-control border  border-warning" id="validationCustom03" placeholder="ex- image"
                    required>
            </div>
            <div class="invalid-feedback">
                Please provide a valid date of birth.
            </div>
        </div>
        <div class="form-row mt-3  ">

            <div class="col-md-6 ">
                <label for="validationCustom03">Status </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="statu" id="status " required>
                    <option value="Clear Report">Clear Report</option>
                    <option value="Insufficiency Report">Insufficiency Report</option>
                    <option value="Minor Discrepancy / Remark Report">Minor Discrepancy / Remark Report</option>
                    <option value="Discrepancy">Discrepancy</option>


                </select>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label ">Remarks</label>
                    <textarea name="rate" class="form-control  border  border-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>


        </div>


        <div class="form-row  mt-5  ">

            <div class="col-md-4 ">
                <label for="validationCustom03">PAN  </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option1" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>

                </select>
            </div>
            <div class="col-md-4 ">
                <label for="validationCustom03">AADHAAR </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option2" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03">VOTER ID </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option3" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>

            </div>
            </div>
            <div class="form-row  mt-4  ">

            <div class="col-md-4 ">
                <label for="validationCustom03">DRIVING LICENCE  </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option4" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>

            </div>
        

            <div class="col-md-4 ">
                <label for="validationCustom03">PASSPORT  </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option5" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>
            </div>

            <div class="col-md-4 ">
                <label for="validationCustom03">ADDRESS </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option6" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>
            </div>
</div>
<div class="form-row  mt-4  ">

            <div class="col-md-3 ">
                <label for="validationCustom03">PERMANENT ADDRESS </label>

                <select class="form-select border  border-warning" aria-label="Default select example" name="option7" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>

            </div>
            <div class="col-md-3 ">
                <label for="validationCustom03">CREDIT / CIBIL </label>

                <select class="form-select" aria-label="Default select example" name="option8" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>
            </div>

            <div class="col-md-3 ">
                <label for="validationCustom03">COURT  </label>

                <select class="form-select" aria-label="Default select example" name="option9" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>
            </div>
            <div class="col-md-3 ">
                <label for="validationCustom03">POLICE VERIFICATION</label>

                <select class="form-select" aria-label="Default select example" name="option10" required>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="NOT TO VERIFY">NOT TO VERIFY</option>


                </select>
            </div>




        </div>

        <div class="border border-light mt-3  ">
            <h2 class="text-center text-warning">Enter  PAN card Details </h2>
    
    
        </div>

        <div class="row g-3 mt-5">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Candidate Name</label>
              <input type="text" class="form-control border  border-warning" id="inputEmail4" name="pname" placeholder="Enter candidate name">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Date of Birth</label>
              <input type="date" class="form-control border  border-warning" name="pdate" id="inputPassword4">
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Pan  No.</label>
              <input type="text" class="form-control border  border-warning" id="inputAddress" name="pno"  placeholder="Enter pan  no">
            </div>
            <div class="col-6">
              <label for="inputAddress2" class="form-label">Comments</label>
              <input type="text" class="form-control border  border-warning" id="inputAddress2" name="pcom" placeholder="">
            </div>
            
            <div class="col-md-6 mt-4">
              <label for="inputState"  class="form-label">Status</label>
              <select id="inputState" name="pstatus" class="form-select border  border-warning">
                <option value="Clear Report">Clear Report</option>
                <option value="Insufficiency Report">Insufficiency Report</option>
                <option value="Minor Discrepancy / Remark Report">Minor Discrepancy / Remark Report</option>
                <option value="Discrepancy">Discrepancy</option>
              </select>
            </div>
           
         
           
            <div class="col-md-4 mb-2">
                <label for="validationCustom03">Upload Pan  Image</label>

                <input type="file" name="file" id="file" class="form-control border  border-warning" id="validationCustom03" 
                    >
            </div>
            <div class="invalid-feedback">
                Please provide a valid date of birth.
            </div>
            <div class="col-md-4 mb-2">
                <label for="validationCustom03">Enter image name of image same as upload image </label>

                <input type="text" name="imageexx" class="form-control border  border-warning" id="validationCustom03" placeholder="ex- image"
                    >
            </div>

          </div> 
        <div class="border border-light mt-3  ">
            <h2 class="text-center text-warning">Enter  AADHAAR card Details </h2>
    
    </div>

            <div class="row g-3 mt-5">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label ">Candidate Name</label>
                  <input type="text" class="form-control border  border-warning" id="inputEmail4" name="aname" placeholder="Enter candidate name">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control border  border-warning" name="adate" id="inputPassword4">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Aadhaar No.</label>
                  <input type="text" class="form-control border  border-warning" id="inputAddress" name="ano"  placeholder="Enter Aadhaar no">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Comments</label>
                  <input type="text" class="form-control border  border-warning" id="inputAddress2" name="acom" placeholder="">
                </div>
                
                <div class="col-md-6 mt-4">
                  <label for="inputState"  class="form-label">Status</label>
                  <select id="inputState" name="astatus" class="form-select border  border-warning ">
                    <option value="Clear Report">Clear Report</option>
                    <option value="Insufficiency Report">Insufficiency Report</option>
                    <option value="Minor Discrepancy / Remark Report">Minor Discrepancy / Remark Report</option>
                    <option value="Discrepancy">Discrepancy</option>
                  </select>
                </div>
               
             
               
                <div class="col-md-4 mb-2">
                    <label for="validationCustom03">Upload Aadhaar  Image</label>
    
                    <input type="file" name="file" id="file" class="form-control border  border-warning" id="validationCustom03" 
                        >
                </div>
                <div class="invalid-feedback">
                    Please provide a valid date of birth.
                </div>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom03">Enter image name of image same as upload image </label>
    
                    <input type="text" name="imageexxx" class="form-control border  border-warning-2" id="validationCustom03" placeholder="ex- image"
                        >
                </div>
    
    </div>
                <div class="border border-light mt-3  ">
                    <h2 class="text-center text-warning">Present Address Verification Details </h2>
            
            </div>

            <div class="row g-3 mt-5">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label ">Candidate Name</label>
                  <input type="text" class="form-control border  border-warning" id="inputEmail4" name="prename" placeholder="Enter candidate name">
                </div>
                
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Contact Person</label>
                  <input type="text" class="form-control border  border-warning" id="inputAddress" name="contp"  placeholder="Enter Aadhaar no">
                </div>
                </div>
                <div class="row g-3 mt-5">

                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Relationship</label>
                  <input type="text" class="form-control border  border-warning" id="inputAddress2" name="relation" placeholder="">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Contact Number</label>
                    <input type="text" class="form-control border  border-warning" id="inputAddress2" name="preno" placeholder="">
                  </div>
                  </div>
                  <div class="row g-3 mt-5">


                  <div class="col-md-6 ">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label ">Present Address</label>
                        <textarea name="preadd" class="form-control  border  border-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
    
                </div> <div class="col-md-6 ">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label ">Comments</label>
                        <textarea name="precom" class="form-control  border  border-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
    
                </div>


                <div class="col-md-6 mt-4">
                  <label for="inputState"  class="form-label">Status</label>
                  <select id="inputState" name="prestatus" class="form-select border  border-warning ">
                    <option value="Clear Report">Clear Report</option>
                    <option value="Insufficiency Report">Insufficiency Report</option>
                    <option value="Minor Discrepancy / Remark Report">Minor Discrepancy / Remark Report</option>
                    <option value="Discrepancy">Discrepancy</option>
                  </select>
                </div>
               
</div>

                <div class="border border-light mt-3  ">
                    <h2 class="text-center text-warning">Permanent Address Verification Details </h2>
            
            </div>

            <div class="row g-3 mt-5">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label ">Candidate Name</label>
                  <input type="text" class="form-control border  border-warning" id="inputEmail4" name="permaname" placeholder="Enter candidate name">
                </div>
                
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Contact Person</label>
                  <input type="text" class="form-control border  border-warning" id="inputAddress" name="permaper"  placeholder="Enter Aadhaar no">
                </div>
                </div>
                <div class="row g-3 mt-5">

                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Relationship</label>
                  <input type="text" class="form-control border  border-warning" id="inputAddress2" name="permarelation" placeholder="">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Contact Number</label>
                    <input type="text" class="form-control border  border-warning" id="inputAddress2" name="permano" placeholder="">
                  </div>
                  </div>
                  <div class="row g-3 mt-5">


                  <div class="col-md-6 ">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label ">Present Address</label>
                        <textarea name="permaad" class="form-control  border  border-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
    
                </div> <div class="col-md-6 ">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label ">Comments</label>
                        <textarea name="permacom" class="form-control  border  border-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
    
                </div>


                <div class="col-md-6 mt-4">
                  <label for="inputState"  class="form-label">Status</label>
                  <select id="inputState" name="permastatus" class="form-select border  border-warning ">
                    <option value="Clear Report">Clear Report</option>
                    <option value="Insufficiency Report">Insufficiency Report</option>
                    <option value="Minor Discrepancy / Remark Report">Minor Discrepancy / Remark Report</option>
                    <option value="Discrepancy">Discrepancy</option>
                  </select>
                </div>
               
</div>
                <div class="border border-light mt-3  ">
                    <h2 class="text-center text-warning">Crime / Cibil Court  Verification Details </h2>
            
            </div>

           
                
               
                <div class="row g-3 mt-5">

                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Date</label>
                  <input type="date" class="form-control border  border-warning" id="inputAddress2" name="crimedate" placeholder="">
                </div>
               


                   
                </div>
                <div class="row g-3 mt-5">

                <div class="col-md-6 ">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label ">Comments</label>
                        <textarea name="crimecom3" class="form-control  border  border-warning" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
    
                </div>


                <div class="col-md-6 mt-4">
                  <label for="inputState"  class="form-label">Status</label>
                  <select id="inputState" name="crimestatus4" class="form-select border  border-warning ">
                    <option value="Clear Report">Clear Report</option>
                    <option value="Insufficiency Report">Insufficiency Report</option>
                    <option value="Minor Discrepancy / Remark Report">Minor Discrepancy / Remark Report</option>
                    <option value="Discrepancy">Discrepancy</option>
                  </select>
                </div>
               
</div>



</div>
<div class="row g-3 mt-5">

<div class="col-md-6 mb-2">
    <label for="validationCustom03">Upload Risk Detail  Image</label>

    <input type="file" name="file" id="file" class="form-control border  border-warning" id="validationCustom03" 
        >
</div>
<div class="invalid-feedback">
    Please provide a valid date of birth.
</div>
<div class="col-md-6 mb-2">
    <label for="validationCustom03">Enter image name of image same as upload image </label>

    <input type="text" name="imageexxx1" class="form-control border  border-warning-2" id="validationCustom03" placeholder="ex- image"
        >
</div> 
</div> 
 <div class="row g-3 mt-5">

<div class="col-md-6 mb-2">
    <label for="validationCustom03">Upload Court 1  Image</label>

    <input type="file" name="file" id="file" class="form-control border  border-warning" id="validationCustom03" 
        >
</div>
<div class="invalid-feedback">
    Please provide a valid date of birth.
</div>
<div class="col-md-6 mb-2">
    <label for="validationCustom03">Enter image name of image same as upload image </label>

    <input type="text" name="imageexxx2" class="form-control border  border-warning-2" id="validationCustom03" placeholder="ex- image"
        >
</div>  
</div>
<div class="row g-3 mt-5">

<div class="col-md-6 mb-2">
    <label for="validationCustom03">Upload court 2  Image</label>

    <input type="file" name="file" id="file" class="form-control border  border-warning" id="validationCustom03" 
        >
</div>
<div class="invalid-feedback">
    Please provide a valid date of birth.
</div>
<div class="col-md-6 mb-2">
    <label for="validationCustom03">Enter image name of image same as upload image </label>

    <input type="text" name="imageexxx3" class="form-control border  border-warning-2" id="validationCustom03" placeholder="ex- image"
        >
</div>

</div>






        <div class="mt-4 btn btn-warning bg-dark">
            <input type="submit" value="Download Now" name="submit" class="btn-btn-success">
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>



</body>

</html>