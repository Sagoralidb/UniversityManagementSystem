		<!-- JavaScript কোড যোগ করা হলো -->
			<script>
			document.getElementById('studentForm').addEventListener('submit', function(event) {
				var nidInput = document.getElementById('nid');
				var nidMessage = document.getElementById('nidMessage');
				
				// যদি ভ্যালিড NID হয়
				if (!isValidNID(nidInput.value)) {
					nidMessage.innerHTML = 'Invalid NID number. Please enter a valid 10, 13, or 17-digit NID number.';
					event.preventDefault(); // সাবমিট বন্ধ করলাম
				} else {
					nidMessage.innerHTML = ''; // যদি ভ্যালিড হয়, মেসেজ মুছে দিলাম
				}
			});

			// ভ্যালিড NID চেক করার ফাংশন
			function isValidNID(nid) {
				// আপনি এখানে আপনার NID ভ্যালিডেশন লজিক যোগ করা হলো
				// উদাহরণ: 10, 13, বা 17 ডিজিট হতে হবে
				var nidLength = nid.toString().length;
				return nidLength === 10 || nidLength === 13 || nidLength === 17;
			}
			</script>
		
	<script>
					document.getElementById('studentForm').addEventListener('submit', function(event) {
						var emailInput = document.getElementById('email');
						var emailMessage = document.getElementById('emailMessage');
						
						// ইমেইল ভ্যালিডেশন চেক
						if (!isValidEmail(emailInput.value)) {
							emailMessage.innerHTML = 'Invalid email format. Please enter a valid email.';
							event.preventDefault(); // সাবমিট বন্ধ করলাম
						} else {
							emailMessage.innerHTML = ''; // যদি ভ্যালিড হয়, মেসেজ মুছে দিলাম
						}
					});

					// ইমেইল ভ্যালিডেশন চেক করার ফাংশন
					function isValidEmail(email) {
						// আপনি এখানে আপনার ইমেইল ভ্যালিডেশন লজিক যোগ করলাম
						// উদাহরণ: একটি সাধারিত ইমেইল প্যাটার্ন চেক করব
						var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
						return emailPattern.test(email);
					}
		</script>

	
<script>
$(document).ready(function () {
    $('#username').on('blur', function () {
        var username = $(this).val();
        if(username.trim() === '') {
            $('#usernameMessage').html('<span class="text-danger">This field is empty, write an username</span>');
            return;
        }
  
        $.ajax({
            type: 'POST',
            url: 'check_username.php',
            data: { username: username },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    // ইউজারনেম সঠিক
                    $('#usernameMessage').html('<span class="text-success">' + response.message + '</span>');
                } else {
                    // ইউজারনেম ডুপ্লিকেট
                    $('#usernameMessage').html('<span class="text-danger">' + response.message + '</span>');
                }
            },
        });
    });
});		
</script>
<!--Student id check--> 
<script>
$(document).ready(function () {
    $('#student_id').on('blur', function () {
        var student_id = $(this).val();
        if(student_id.trim() === '') {
            $('#usernameMessageSid').html('<span class="text-danger">Field is empty, write an unique student id</span>');
            return;
        }
  
        $.ajax({
            type: 'POST',
            url: 'check_studentid.php',
            data: { student_id: student_id },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    // ইউজারনেম সঠিক
                    $('#usernameMessageSid').html('<span class="text-success">' + response.message + '</span>');
                } else {
                    // ইউজারনেম ডুপ্লিকেট
                    $('#usernameMessageSid').html('<span class="text-danger">' + response.message + '</span>');
                }
            },
        });
    });
});		
</script>
<!--ফোন নম্বর বৈধ কি না  তা চেক করার হচ্ছে-->
	<script>
				$('#phone').on('blur', function() {
					var phoneNumber = $(this).val();
					var regex = /^[0-9]{11}$/; // এখানে 11 টি ডিজিট থাকা প্রয়োজন
					//var regex = /^\d{11}$/; // এখানে 11 টি ডিজিট থাকা প্রয়োজন

					if (!regex.test(phoneNumber)) {
						$('#phoneMessage').html('<span class="text-danger">Invalid phone number. Please enter a 11-digit without any space or alphabe.</span>');
					} else {
						$('#phoneMessage').html('');
					}
				});
	</script>
	
	<script>
	$(document).ready(function () {
    $('#phone').on('blur', function() {
        var phoneNumber = $(this).val();
        // এখানে AJAX দ্বারা ফোন নম্বর চেক করুন
        $.ajax({
            type: 'POST',
            url: 'check_phone.php', // সার্ভারের ফাইলের নাম
            data: { phone: phoneNumber },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'error') {
                    $('#phoneMessage').html('<span class="text-danger">' + response.message + '</span>');
                } else {
                    $('#phoneMessage').html('');
                }
            },
        });
    });
});
</script>