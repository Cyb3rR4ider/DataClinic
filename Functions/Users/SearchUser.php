<h2>ΑΝΑΖΗΤΗΣΗ ΧΡΗΣΤΗ</h2>
<input type="text" class="form-control" id="livesearch" placeholder="Search Users">

 <div id="searchresult"></div> <!-- i used this div with id= searchresult to display data from this page   -->

<script type="text/javascript">
    $(document).ready(function() {
        $("#livesearch").keyup(function() { //keyup--> when user add a value or release a key then that value will be stored in (var = input) 
            var input = $(this).val(); 
            // alert(input); //here i checked if the value passes
            if (input != "") { //if input is not empty then we use ajax method
                $.ajax({ 

                    url: "index.php?action=12",  // we redirect in this file
                    method: "POST",
                    data: {
                        input: input  //with the data input
                    },

                    success: function(data) { //if the function success the data will shown in div section with id #searchresult
                        $("#searchresult").html(data);
                        $("#searchresult").css("display", "block");

                    }
                });
            } else { //if input is empty then we will hide the section
                $("#searchresult").css("display", "none");
            }
        });

    });
</script>