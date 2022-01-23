<!DOCTYPE html>
<html>
<head>
    <title>Email Receipt</title>
</head>
<body style= "font-family:'Montserrat', sans-serif;background-color: #eae7dc;">

	<center>
		<h4 class="sent-notification"></h4>

		<form id="myForm">
			<h2>To who we should send the receipt?</h2>

			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject to your email</label>
			<input id="subject" type="text" placeholder=" Enter Subject" Value="Hornbill Creative Crafts"> 
			<br><br>

			<p>Email Generator (Do not disturb this field) </p>
			<input id="body"  placeholder="Type Message" value="<h1>Hello our fellow customer! Here is your link to your receipt http://hornbillcreativecrafts.epizy.com/receipt.php</h1>"><!--textarea tag should be closed (In this coding UI textarea close tag cannot be used)-->
			<br><br>

			<button type="button" onclick="sendEmail()" value="Send An Email">Submit</button> 
		</form>
        <a href="http://hornbillcreativecrafts.epizy.com/Services.php">back to service page<a/>
	</center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>