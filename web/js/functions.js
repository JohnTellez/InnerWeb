$(document).ready(function(){

    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });
    
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#frmVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#frmVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#frmVideo").attr('src', url);
    });
});