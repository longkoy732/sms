<?php

include('../class/dbcon.php');

$object = new sms;

if(!$object->is_login())
{
    header("location:".$object->base_url."");
}

if($_SESSION['type'] != 'Student')
{
    header("location:".$object->base_url."");
}

$object->query = "
    SELECT * FROM tbl_student
    WHERE s_id = '".$_SESSION["admin_id"]."'
    ";

$result = $object->get_result();

include('header.php');

?>

    <!-- Header -->
      <form method="post" id="acad_form">
        <div class="row justify-content-center"><div class="col-md-10">
          <h1 class="h3 mb-4 text-gray-800">Academic Scholarship Renewal</h1>
          <span id="message"></span>
    <!-- Requirement Details -->
        <div class="tab-pane" id="require_details">
            <div class="card">
              <div class="card-header" style="font-weight: bold; font-size: 16px;">List of Requirements</div>
                <div class="card-body">
                  <div class="form-group">
                    <ul class="list-group d-flex justify-content-center">
                      <li class="list-group-item">1. Photocopy of Report Card</li>
                      <li class="list-group-item">2. Photocopy of Certificate of Good Moral</li>
                      <li class="list-group-item">3. Photocopy of Certificate of Recognition</li>
                    </ul>
                  </div>
                  <!-- <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="font-style: italic; font-weight: normal;">
                      I agree that the requirements above are legit and will submit it on time.
                    </label>
                    </div>
                    <span id="error_flexCheckDefault" class="text-danger"></span>
                  </div> -->
                  <div class="form-group">
                    <div class="alert alert-warning" role="alert" style="font-style: italic;"><b>Note:</b> Please provide the hard copy of the following requirements, bring it to the Scholarship Office, and hand it over to Mr. Gemini Daguplo or Ms. Grabrielle Heruela.</div>
                  </div>  
                  <div class="form-group text-center">
                    <!-- <input type="hidden" name="action" value="student_acad_renew" />
                    <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-success">Submit</button> -->
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
      </form>
      <?php
        include('footer.php');
      ?>
  <!-- Script -->
    <script>
    $(document).ready(function(){

//   // Requirements Details
//         $('#btn_submit').click(function(){
          
//           var error_flexCheckDefault = '';

//           if($('#flexCheckDefault').not(':checked').length){
//             error_flexCheckDefault = 'Checkbox is required';
//             $('#error_flexCheckDefault').text(error_flexCheckDefault);
//             $('#flexCheckDefault').addClass('has-error');
//           } 
//           else{
//             error_flexCheckDefault = '';
//             $('#error_flexCheckDefault').text(error_flexCheckDefault);
//             $('#flexCheckDefault').removeClass('has-error');
//           }

//           if(error_flexCheckDefault != '')
//           {
//           return false;
//           }
//           else
//           {
//               $('#acad_form').parsley();
                
//               $('#acad_form').on('submit', function(event){
//               event.preventDefault();
//               if($('#acad_form').parsley().isValid())
//               {
//                   $.ajax({
//                   url:"academic_action.php",
//                   method:"POST",
//                   data:$(this).serialize(),
//                   dataType:'json',
//                   beforeSend:function(){
//                       $('#btn_submit').attr('disabled', 'disabled');
//                   },
//                   success:function(data)
//                   {
//                       $('#btn_submit').attr('disabled', false);
//                       // $('#acad_form')[0].reset();
//                       //For wait 3 seconds
//                       if(data.error !== '')
//                       {
//                         $('#message').html(data.error);
//                         setTimeout(function() 
//                         {
//                         location.reload();  //Refresh page
//                         }, 5000);
//                       }

//                       if(data.success != '')
//                       {
//                         $('#message').html(data.success);
//                         setTimeout(function() 
//                         {
//                         location.reload();  //Refresh page
//                         }, 3000);
//                       }
//                   }
//                   });
//               }
//               });   
//             }
//         });

    });           
    </script>