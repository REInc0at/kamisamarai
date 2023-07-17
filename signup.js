const container = document.querySelector(".container");
      pwShowHide  = document.querySelectorAll(".showpass");
      pwinput = document.querySelectorAll(".password");


      pwShowHide.forEach(eyeIcon =>{
            eyeIcon.addEventListener("click", ()=>{
                pwinput.forEach(pwField =>{
                        if(pwField.type ==="password"){
                            pwField.type = "text";

                            pwShowHide.forEach(icon =>{
                                icon.classList.replace("uil-eye-slash", "uil-eye");

                            })
                        }else{
                            pwField.type = "password";

                            pwShowHide.forEach(icon =>{
                                icon.classList.replace("uil-eye", "uil-eye-slash");

                            })
                        }
                })
            })
      })

      
      

