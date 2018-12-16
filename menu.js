jQuery(function() {
  jQuery("#showall").click(function() {
    jQuery(".targetDiv").show();
  });
  jQuery(".menu-item").click(function() {
    jQuery(".targetDiv").hide();
    jQuery("#div" + $(this).attr("target")).show();
  });
});
$(function() {
  $("img").on("click", function() {
    $(".enlargeImageModalSource").attr("src", $(this).attr("src"));
    $("#enlargeImageModal").modal("show");
  });
});
