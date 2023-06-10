let form = document.querySelector("form"),
btn = document.querySelector("input[type='submit']"),
msg = form.querySelector(".msg");

form.onsubmit= (e) => {
    e.preventDefault();
}

btn.onclick =(e) => {
    let xhr=new XMLHttpRequest ();
    xhr.open('POST','../php/register_forms.php',true);
    xhr.onload =() => {
        if(xhr.readyState === xhr.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = '../index.html';
                }
                else{
                    msg.innerHTML = data;
                    msg.style.display ="block";
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}