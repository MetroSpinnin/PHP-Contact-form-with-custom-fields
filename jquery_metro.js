<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script type="text/javascript">
    function addMore() {
    	   $("<DIV>").load("input.php", function() {
    	      $("#custom-input-container").append($(this).html());
    	   });	
    	}
    function validateContactForm() {
        const valid = true;

        $(".info").html("");
        $(".input-field").css('border', '#e0dfdf 1px solid');
        const userName = $("#userName").val();
        const userEmail = $("#userEmail").val();
        const subject = $("#subject").val();
        const content = $("#content").val();
        
        if (userName == "") {
            $("#userName-info").html("Required.");
            $("#userName").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (userEmail == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#userEmail-info").html("Invalid Email Address.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }

        if (subject == "") {
            $("#subject-info").html("Required.");
            $("#subject").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (content == "") {
            $("#userMessage-info").html("Required.");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }
</script>
