$(document).ready(function (){
    $("form").submit(function (e) {
        e.preventDefault();
        const name = $("#name-email input[name='name']")
        const email = $('#name-email input[name="email')
        const phone = $("#form-node input[name='phone']")
        const companyName = $('#form-node input[name="company"]')
        const message = $('#form-node textarea')

        const pError = $('.error')
        const successBox = $('#form-success')
        const failedBox = $('#form-failed')
       
        const url = $('website_url')
        const seo = $('seo')
        const design = $('web_design')
        const advertising = $('advertising')
        const social_media = $('social_media')
        let errorArr = []

        if(!email.val()|| !name.val() || !phone.val() || !companyName.val() || !message.val()){
            pError.text("Please fill all required fields") 
            // make the form shake if incorrect
            e.target.classList.add("invalid");
            // remove shake animation after 1000 miliseconds
            setTimeout(() => e.target.classList.remove('invalid'), 1000) 
            // populate errorArr
            errorArr.push('error')
        } else {
            // delete error from errorArr
            errorArr.filter(error => error == 'error')
            // if name is not valid
            if(!/^[a-zA-Z ]*$/.test(name.val())){
                // make the form shake if incorrect
                e.target.classList.add("invalid");
                name.css("border-bottom-color", "red")
                pError.text("*Name is not valid")
                // populate error arr
                errorArr.push("name")
                // remove shake animation after 1000 miliseconds
                setTimeout(() => e.target.classList.remove('invalid'), 1000) 
            } else {
                // make it work!
                name.css("border-bottom-color", "rgba(0,0,0,0.26)")
                // delete error from array
                errorArr.filter(error => error != "name")
            }

            // if phone is not valid
            if(!/^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/.test(phone.val())){
                // make the form shake if incorrect
                e.target.classList.add("invalid");
                phone.css("border-bottom-color", "red")
                pError.text("*US phone is not valid, try 000 000 0000")
                // populate error arr
                errorArr.push("phone")
                // remove shake animation after 1000 miliseconds
                setTimeout(() => e.target.classList.remove('invalid'), 1000) 
            } else {
                phone.css("border-bottom-color", "rgba(0,0,0,0.26)")
                // delete error from array
                errorArr.filter(error => error != "phone")
            }

            // if email is not valid
            if(!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.val())){
                // make the form shake if incorrect
                e.target.classList.add("invalid");
                email.css("border-bottom-color", "red")
                pError.text("*Email is not valid")
                // populate error arr
                errorArr.push("email")
                // remove shake animation after 1000 miliseconds
                setTimeout(() => e.target.classList.remove('invalid'), 1000) 
            } else {
                //make it work
                email.css("border-bottom-color", "rgba(0,0,0,0.26)")
                // delete error from array
                errorArr.filter(error => error != "email")
            }
        }

        // Communicates with the PHP File
        if(errorArr.length < 1){
        pError.text("")
        // const form = $("#form-node")
        $.ajax({
            url: "form_process.php",
            type: 'POST',
            data:  $("form").serialize(),
            success: function(result){
                    console.log("success => ", result)
                    // display Success Box
                    successBox.show();
                    setTimeout(() => {
                    // hide Success Box
                        successBox.hide();
                    }, 5000)

                    //reset form
                    name.val("")
                    email.val("") 
                    phone.val("")
                    companyName.val("")
                    message.val("") 
                    url.val("")

                    seo.checked = false
                    advertising.checked = false
                    design.checked = false
                    social_media.checked = false
            },
            error: function() {
                alert('There was some error performing the AJAX call!');
                failedBox.show();
                setTimeout(() => {
                    // hide Success Box
                        failedBox.hide();
                }, 5000)
            }
            
        });
        }
    });
});