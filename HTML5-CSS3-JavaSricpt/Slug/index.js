$("#title").keyup(function () {
    var str = $(this).val();
    var trims = $.trim(str);
    var slug = trims.replace(/[^a-z0-9]/g, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
    $("#slug").val(slug.toLowerCase() + ".com");
})