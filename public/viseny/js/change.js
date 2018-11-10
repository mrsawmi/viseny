$(function () {
    var fileupload = $("#change");
    button.click(function () {
        fileupload.click();
    });
    fileupload.change(function () {
        var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
        filePath.html("<b>Selected File: </b>" + fileName);
    });
});