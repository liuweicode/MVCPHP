/**
 *
 * HTML5 Image uploader with Jcrop
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Script Tutorials
 * http://www.script-tutorials.com/
 */

// convert bytes into friendly format
function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB'];
    if (bytes == 0)
        return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
}

// check for selected crop region
function checkForm() {
    if (parseInt($('#w').val()))
        return true;
    $('.error').html('请先选择图片，并且截图').show();
    return false;
}

// update info by cropping (onChange and onSelect events handler)
function updateInfo(e) {
    $('#x11').val(e.x);
    $('#y11').val(e.y);
    $('#x21').val(e.x);
    $('#y21').val(e.y);
    $('#w1').val(e.w);
    $('#h1').val(e.h);
}
;

// clear info by cropping (onRelease event handler)
function clearInfo() {
    $('.info #w').val('');
    $('.info #h').val('');
}


function updateInfos(e) {
    $('#x12').val(e.x);
    $('#y12').val(e.y);
    $('#x22').val(e.x);
    $('#y22').val(e.y);
    $('#w2').val(e.w);
    $('#h2').val(e.h);
}
;

// clear info by cropping (onRelease event handler)
function clearInfos() {
    $('.info #w2').val('');
    $('.info #h2').val('');
}

function fileSelectHandler() {

    // get selected file
    var oFile = $('.image_file')[0].files[0];

    // hide all errors
    $('.error').hide();

    // check for image type (jpg and png are allowed)
    var rFilter = /^(image\/jpeg|image\/png|image\/jpg)$/i;
    if (!rFilter.test(oFile.type)) {
        $('.error').html('请选择jpg、jpeg或png格式的图片').show();
        return;
    }

    // check for file size
    if (oFile.size > 1000 * 1024) {
        $('.error').html('请上传小于1M的图片').show();
        return;
    }

    // preview element
    var oImage = document.getElementById('preview');

    // prepare HTML5 FileReader
    var oReader = new FileReader();
    oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function() { // onload event handler

            // display step 2
            $('.step2').fadeIn(500);

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesize').val(sResultFileSize);
            $('#filetype').val(oFile.type);
            $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // Create variables (in this scope) to hold the Jcrop API and image size
            var jcrop_api, boundx, boundy;

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined')
                jcrop_api.destroy();

            // initialize Jcrop
            $('#preview').Jcrop({
                minSize: [32, 32], // min crop size
                aspectRatio: 1, // keep aspect ratio 1:1
                bgFade: true, // use fade effect
                bgOpacity: .3, // fade opacity
                onChange: updateInfo,
                onSelect: updateInfo,
                onRelease: clearInfo
            }, function() {

                // use the Jcrop API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];

                // Store the Jcrop API in the jcrop_api variable
                jcrop_api = this;
            });
        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}
function fileSelectHandlers() {

    // get selected file
    var oFile = $('.image_files')[0].files[0];

    // hide all errors
    $('.error').hide();

    // check for image type (jpg and png are allowed)
    var rFilter = /^(image\/jpeg|image\/png|image\/jpg)$/i;
    if (!rFilter.test(oFile.type)) {
        $('.error').html('请选择jpg、jpeg或png格式的图片').show();
        return;
    }

    // check for file size
    if (oFile.size > 1000 * 1024) {
        $('.error').html('请上传小于1M的图片').show();
        return;
    }

    // preview element
    var oImage = document.getElementById('previews');

    // prepare HTML5 FileReader
    var oReader = new FileReader();
    oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function() { // onload event handler

            // display step 2
            $('.step2').fadeIn(500);

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesizes').val(sResultFileSize);
            $('#filetypes').val(oFile.type);
            $('#filedims').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // Create variables (in this scope) to hold the Jcrop API and image size
            var jcrop_api, boundx, boundy;

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined')
                jcrop_api.destroy();

            // initialize Jcrop
            $('#previews').Jcrop({
                minSize: [32, 32], // min crop size
                aspectRatio: 1, // keep aspect ratio 1:1
                bgFade: true, // use fade effect
                bgOpacity: .3, // fade opacity
                onChange: updateInfos,
                onSelect: updateInfos,
                onRelease: clearInfos
            }, function() {

                // use the Jcrop API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];

                // Store the Jcrop API in the jcrop_api variable
                jcrop_api = this;
            });
        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}