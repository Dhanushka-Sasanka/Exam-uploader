






$(document).ready(function () {



    let divProgressBar = $("#divProgressBar");
    let status = $("#status");

    $("#uploadForm").ajaxForm({

        dataType: "json",

        beforeSend: function () {
            divProgressBar.css({});
            divProgressBar.width(0);
        },

        uploadProgress: function (event, position, total, percentComplete) {
            let pVel = percentComplete + "%";
            divProgressBar.width(pVel);
        },

        complete: function (data) {
            // status.html(data.responseText);
            console.log(data.responseText);
            Swal.fire({
                icon: 'success',
                title: 'Upload success...',
                text: 'Happy coding!'

            })
        },
        error:function(data){
            Swal.fire({
                icon: 'error',
                title: 'Upload failed...',
                text: data
            })
        }
    });

});
