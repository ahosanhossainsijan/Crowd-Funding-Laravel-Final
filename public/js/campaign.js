$(document).ready(function(){
	var token = $("#token").val();
	$("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#suggestion tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
    $("#see").on("change", function() {
        var value = $(this).val().toLowerCase();
        $("#suggestion tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});