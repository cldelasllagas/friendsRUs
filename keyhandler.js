   


 



document.onkeydown = function(e) {handleKeys(e)}



document.onkeypress = function(e) {handleKeys(e)}



var nonChar = false;



 



function handleKeys(e) {



    var char;



    var evt = (e) ? e : window.event;       //IE reports window.event not arg



    if (evt.type == "keydown") {



        char = evt.keycode;



        if (char <16 ||                    // non printables



            (char> 16 && char <32) ||     // avoid shift



            (char> 32 && char <41) ||     // navigation keys



            char == 46) {                   // Delete Key (Add to these if you need)



            handleNonChar(char);            // function to handle non Characters



            nonChar = true;



        } else



            nonChar = false;



    } else {                                // This is keypress



        if (nonChar) return;                // Already Handled on keydown



        char = (evt.charCode) ?



                   evt.charCode : evt.keyCode;



        if (char> 31 && char <256)        // safari and opera



            handleChar(char);               //



    }



    if (e)                                  // Non IE



        Event.stop(evt);                    // Using prototype



    else if (evt.keyCode == 8)              // Catch IE backspace



        evt.returnValue = false;            // and stop it!



}
