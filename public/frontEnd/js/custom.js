// Create new wheel object specifying the parameters at creation time.
            var theWheel = new Winwheel({
                'numSegments'   : 16,   // Specify number of segments.
                'outerRadius'   : 210,  // Set radius to so wheel fits the background.
                'innerRadius'   : 68,  // Set inner radius to make wheel hollow.
                'textFontSize'  : 14,   // Set font size accordingly.
                'textMargin'    : 0,    // Take out default margin.
                'segments'      :       // Define segments including colour and text.
                [
                   {'fillStyle' : '#475d68', 'text' : 'Prize 1',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#475d68'},
                   {'fillStyle' : '#d9ae00', 'text' : 'Prize 2',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#d9ae00'},
                   {'fillStyle' : '#ed1c24', 'text' : 'Prize 3',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#ed1c24'},
                   {'fillStyle' : '#318cd3', 'text' : 'Prize 4',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#318cd3'},
                   {'fillStyle' : '#475d68', 'text' : 'Prize 5',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#475d68'},
                   {'fillStyle' : '#d9ae00', 'text' : 'Prize 6',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#d9ae00'},
                   {'fillStyle' : '#ed1c24', 'text' : 'Prize 7',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#ed1c24'},
                   {'fillStyle' : '#318cd3', 'text' : 'Prize 8',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#318cd3'},
                   {'fillStyle' : '#475d68', 'text' : 'Prize 9',  'textFillStyle' : '#ffffff', 'strokeStyle' : '#475d68'},
                   {'fillStyle' : '#d9ae00', 'text' : 'Prize 10', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#d9ae00'},
                   {'fillStyle' : '#ed1c24', 'text' : 'Prize 11', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#ed1c24'},
                   {'fillStyle' : '#318cd3', 'text' : 'Prize 12', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#318cd3'},
                   {'fillStyle' : '#475d68', 'text' : 'Prize 13', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#475d68'},
                   {'fillStyle' : '#d9ae00', 'text' : 'Prize 14', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#d9ae00'},
                   {'fillStyle' : '#ed1c24', 'text' : 'Prize 15', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#ed1c24'},
                   {'fillStyle' : '#318cd3', 'text' : 'Prize 16', 'textFillStyle' : '#ffffff', 'strokeStyle' : '#318cd3'},
                ],
                'animation' :           // Define spin to stop animation.
                {
                    'type'     : 'spinToStop', 
                    'duration' : 5,
                    'spins'    : 8,
                    'callbackFinished' : alertPrize
                }
            });

            // Vars used by the code in this page to do power controls.
            var wheelPower    = 3;
            var wheelSpinning = false;

            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
            function powerSelected(powerLevel)
            {
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false)
                {
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    // document.getElementById('pw1').className = "";
                    // document.getElementById('pw2').className = "";
                    // document.getElementById('pw3').className = "";

                    // Now light up all cells below-and-including the one selected by changing the class.
                    // if (powerLevel >= 1)
                    // {
                    //     document.getElementById('pw1').className = "pw1";
                    // }

                    // if (powerLevel >= 2)
                    // {
                    //     document.getElementById('pw2').className = "pw2";
                    // }

                    // if (powerLevel >= 3)
                    // {
                    //     document.getElementById('pw3').className = "pw3";
                    // }

                    // Set wheelPower var used when spin button is clicked.
               //     wheelPower = powerLevel;

                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                    document.getElementById('spin_button');
               //     document.getElementById('spin_button').className = "clickable";
                }
            }

            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin()
            {
                
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false)
                {
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    if (wheelPower == 1)
                    {
                        theWheel.animation.spins = 3;
                    }
                    else if (wheelPower == 2)
                    {
                        theWheel.animation.spins = 8;
                    }
                    else if (wheelPower == 3)
                    {
                        theWheel.animation.spins = 15;
                    }

                    console.log(theWheel.animation.spins)

                    // Disable the spin button so can't click again while wheel is spinning.
                    document.getElementById('spin_button');
               //     document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();

                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = false;
                }
            }

            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel()
            {
                theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
                theWheel.draw();                // Call draw to render changes to the wheel.


// Remove all colours from the power level indicators.
                // document.getElementById('pw1').className = "";  
                // document.getElementById('pw2').className = "";
                // document.getElementById('pw3').className = "";

                wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
                
            }

            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // note the indicated segment is passed in as a parmeter as 99% of the time you will want to know this to inform the user of their prize.
            // -------------------------------------------------------
            function alertPrize(indicatedSegment)
            {
                // Do basic alert of the segment text. You would probably want to do something more interesting with this information.
                alert("You have won " + indicatedSegment.text);
				//ajax.
               // window.location.href = '/addspinner?prize='+indicatedSegment;
				
				//ajax
				
	    $.ajax({
				type: "get",
				url: '/addspinner',
				data: { prize:indicatedSegment.text}, 
				success: function( data ) {
					//var obj = jQuery.parseJSON( data);
					alert("successfull");
					
				}
		});
				
				
				
				
				
				
				
				
                resetWheel();
            }


            function buttonClickFun(power){
                powerSelected(power);
                startSpin();
            }




            /*popup on window load*/

            $(document).ready(function(){
                $("#myModal2").modal('show');
                $("#myModal").modal('show');
            });

            /*end popup on window load*/
			
			/*popup on window load*/
            function closeNav() {
             $('#spinwheel-sidebar').removeClass('active');
             $('#spinwheel-sidebar').addClass('close');
              
              
            }
            function toggleSidebar() {
              $('#spinwheel-sidebar').removeClass('close');
              $('#spinwheel-sidebar').addClass('active');
               

            }

            $(document).ready(function(){
                setTimeout(function(){
                    toggleSidebar();
                }, 500)
            })