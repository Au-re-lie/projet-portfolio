<script>
$(document).ready(function(){
	$('a[href^="#"]').on('click',function(e) { 
e.preventDefault();
var section= $(this).attr('href');
var speed= 600;
$('html,body').animate({scrollTop:$(section).offset().top-135},speed);
});
});
</script>