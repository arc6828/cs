<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>   
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script language="javascript" src="js/jquery-3.2.1.slim.min.js"></script>



<style type="text/css">
       .dropdown:hover .dropdown-menu {
        display: block;
         margin-top: 0;
      }
 </style>
 

 
 <script type="text/javascript">
var  SearchRange;
$(function(){
    $("#iFind").click(function(){    
        if($("#keyword").val()!=""){      
            if(SearchRange == null) {
                SearchRange = document.body.createTextRange();
            }       
            if(SearchRange.findText($("#keyword").val()) != false ) {
              SearchRange.select();
              SearchRange.scrollIntoView();
              SearchRange.moveStart("word");
            }else{
              SearchRange = null;
            }
        }
    });
});
</script>


<title>หลักสูตรวิทยาการคอมพิวเตอร์</title>