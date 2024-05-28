<div class="form-outline mb-4" data-mdb-input-init>
  <input type="search" class="form-control" placeholder="ΑΝΑΖΗΤΗΣΗ ΔΙΑΓΝΩΣΗΣ" id="datatable-search-input">
</div>
<div id="datatable">
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#datatable-search-input").keyup(function() { //keyup--> when user add a value or release a key then that value will be stored in (var = input) 
            var input = $(this).val();
         //   $("#usernavbar").css("display", "none"); 
            // alert(input); //here i checked if the value passes
            if (input != "") { //if input is not empty then we use ajax method
                $.ajax({ 

                    url: "Functions/Diagnosis/SearchDiagnosisResults.php",  // we redirect in this file
                    method: "POST",
                    data: {
                        input: input  //with the data input
                    },

                    success: function(data) { //if the function success the data will shown in div section with id #searchresult
                    
                       
                        $("#datatable").html(data);
                        $("#datatable").css("display", "block");
                        
                    }
                });
            } else { //if input is empty then we will hide the section
                $("#datatable").css("display", "none");
            }

        })

    });
</script>