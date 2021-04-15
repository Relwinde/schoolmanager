setInterval(sizeSet, 1);
function sizeSet() {
    var useHeight = window.innerHeight - 75;
    document.getElementById("main").style.height = ("height", useHeight + "px");
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});


function createPupil() {
    $.ajax(
        {
            type: 'POST',
            url: "/getPupilCreateView",
            // data: '_token = <?php echo csrf_token()?>',
            success: function (data) {
                $('#contain').html(data);
            }
        }
    );
}