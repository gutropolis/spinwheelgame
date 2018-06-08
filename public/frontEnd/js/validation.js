$(document).ready(function() {

        $('#loginform').validate({
            rules: {

                useremail: {
                    required: true,
                    email: true
                },
               
                password: {
                    required: true

                },
               
            },
            messages: {
              
                useremail: {
                    required: "Enter your email ",
                    email: "Enter Valid Email"
                },
              
                password:
                    {
                        required: "Enter your password",
                    },
               

            }
        });
		
		 $('#registerForm').validate({
            rules: {
				 firstname: {
                    required: true

                },
				 lastname: {
                    required: true

                },
                useremail: {
                    required: true,
                    email: true
                },
               
                password: {
                    required: true

                },
               
			    confirmpass : {
                    required: true,
                    equalTo: '#password'
                },
            },
            messages: {
				firstname:{
                        required: "Enter your firstname",
                    },
					lastname:{
                        required: "Enter your lastname",
                    },
              
                email: {
                    required: "Enter your email ",
                    email: "Enter Valid Email"
                },
              
                password:
                    {
                        required: "Enter your password",
                    },
					 confirmpass:
                    {
                        required: "Confirm your password",
                        equalTo:"password not match"
                    },
               

            }
        });
        
    });