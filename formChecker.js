//got help from various stackoverflow questions, specifically the isEmail function and creating the values array

var radio = "";
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
$(document).ready(function(){
  $("input:radio[name=ship]").change(function(){
    radio = this.value;
  })
  $("form").submit(function(event){
    var valid = true;
    var $inputs = $('form :input');
    var values = {};
    $inputs.each(function() {
        values[this.name] = $(this).val();
      });
    values["ship"] = radio;
    console.log(values);

    if(values["banana"]<0 || values["apple"]<0 || values["kiwi"]<0 || values["ship"]==="" || values["username"]==="" || values["password"]===""){
      valid = false;
      console.log("INVALID")
    }

    if(!isEmail(values["username"])){
      valid = false;
      console.log("bad email");
    }

    if(!valid){
      $("#msg").html("Invalid input");
      event.preventDefault();
    }
  });

  $("#resetBtn").click(function(){
    // document.getElementById("form").reset();
    // alert("hello");
    window.location.reload(false);
  });
});
