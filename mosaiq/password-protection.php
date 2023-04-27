<?php
if ( is_user_logged_in() == false) :
?>

<!------- begin TEMP PASSWORD 'PROTECTION' FOR PAGE ------->



<script>
    jQuery( document ).ready(function() {

        jQuery("#submitBtn").click(function(){
            var passcheck = jQuery('.first-name').val();
            console.log(passcheck);
            if (passcheck=='@ccur@te') {
                jQuery(".popup-overlay, .popup-content").hide();
            } else {
                return;
            }
        });

    });

    jQuery(document).on('keypress',function(e) {
        if(e.which == 13) {
            var passcheck = jQuery('.first-name').val();
            console.log(passcheck);
            if (passcheck=='@ccur@te') {
                jQuery(".popup-overlay, .popup-content").hide();
            } else {
                return;
            }
        }
    });

</script>


<style>
html {
  width: 100%;
}
.popup-overlay {
  /*Hides pop-up when there is no "active" class*/
  position: absolute;
  left:0;
  top:0;
  z-index:99999;
  background-color: #fff;
  width: 100%;
  height: 20000px;
}
.popup-content {
    padding-top:50px;
    padding-left:50px;
}
button {
  display: inline-block;
  vertical-align: middle;
  border-radius: 30px;
  margin: .20rem;
  font-size: 1rem;
  color: #666666;
  background: #ffffff;
  border: 1px solid #666666;
}
button:hover {
  border: 1px solid #666666;
  background: #666666;
  color: #ffffff;
}
</style>

<!--Creates the popup body-->
<div class="popup-overlay">
    <!--Creates the popup content-->
    <div class="popup-content">
        
    <label>Password:</label>
        <input type="text" name="first-name" class="first-name">
        <button type="button" id="submitBtn">Submit</button>

        
        <!--popup's close button-->
    </div>
</div>

<!------- end TEMP PASSWORD 'PROTECTION' FOR PAGE ------->


<?php endif; ?>