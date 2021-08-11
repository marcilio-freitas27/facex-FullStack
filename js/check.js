// function myFunction(){
//     if (document.getElementById("flexCheckDefault").checked){
//         window.location = "index.php?pagina=form-partiner";
//     }else {
//         document.getElementById('login').submit();
//         window.location = "index.php?pagina=form-partiner";
//     }
// }


$("#checkbox").change( function(){
    if ($("#checkbox").val() == "checked") {
        $('#form1').attr('action','?pagina=form-partner');
        $('#form1').submit();
        alert("Check!");
    }else{
        $('#form1').attr('action','?pagina=home');
        $('#form1').submit();
        alert("No!");
    }
})

