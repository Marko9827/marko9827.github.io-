 

$(document).ready(function(){$("#contact-form [type='submit']").click(function(e){e.preventDefault(),$("#valid-form").html('Sending <i class="fa fa-spinner" aria-hidden="true"></i>');var t=$("input[name=checking]").val(),a=$("input[name=name]").val(),n=$("input[name=email-address]").val(),s=$("input[name=company]").val(),o=$("input[name=phone]").val(),i=$("textarea[name=message]").val(),u=$("input[name=newsletter]").val();post_data={userChecking:t,userName:a,userEmail:n,userCompany:s,userPhone:o,userMessage:i,userNewsletter:u},$.post("php/contact-me.php",post_data,function(e){"error"==e.type?(output='<div class="error-message"><p>'+e.text+"</p></div>",$("#valid-form").html("Send my Message")):(output='<div class="success-message"><p>'+e.text+"</p></div>",$("#contact-form input").val(""),$("#contact-form textarea").val(""),$("#valid-form").html("Sent!")),$("#answer").hide().html(output).fadeIn()},"json")}),$("#contact-form input, #contact-form textarea").keyup(function(){$("#answer").fadeOut()}),$("#contact-form #phone").keyup(function(){$("#phone").val(this.value.match(/[0-9+() -]*/))}),$("#contact-form").on("change","input#ios",function(){this.checked?this.value="Yes":this.value="No"})});