
function askPassword(){
    const pass=document.getElementById('password').style.visibility="visible";
  }

  function hidePassword(){
    const pass=document.getElementById('password').style.visibility="hidden";
  }

function validate(){
const admin_name="Nurul";
const pass=1234;
    var name=document.getElementById("name").value;
    var password=document.getElementById("password").value;
    const admin=document.getElementById("admin");
    var theform=document.getElementById("myForm");
    if(name==""){
      alert("enter the Name and phone number"+name);
      document.getElementById('invalid').style.display=block;

      return false;
    }

    if(admin.checked==true){
        if(name==admin_name && password==pass){  
            theform.action="../../back-end/admin/admin.php";
            theform.submit();
        }   
        else{
          alert("invalid admin credentials");
          // document.getElementById("myForm").submit();
          document.getElementById('invalid').style.display=block;
          return false;
        }
    }
    else{
      alert("normal user");
      theform.action="../../back-end/login.php";
           theform.submit();
    }

  }
