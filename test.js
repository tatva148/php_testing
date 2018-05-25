	// initialScreenSize = screen.height, //Checks initial height of the screen
        var initialScreenSize = window.innerHeight; //Checks initial height of the screen
         $(document).on('click','input',function(){
            console.log('asd');
            if(check()){
                scrollUP();
            }else{
                scrollDown();
            };    
         }) //Setting interval to check screensize changes / not
        
        
        function check(){ //Actual screen height change checking code
            // var kbactive = screen.height;
            var kbactive = window.innerHeight;
            if(initialScreenSize > kbactive ){
                scrollUP();
                return true;
            }else{
                scrollDown();
                return false;    
            }
        }
        
        function scrollUP(){ //Adds keyboard active class
            i = $('.user').offset().top;
            while(i>50){
                $('.login-modal').scrollTop($('.login-modal').scrollTop()+1);
                i--;
            }
        }
        
        function scrollDown(){ //Removes keyboard active class
            $('.login-modal').scrollTop(0)
        }