const selectedUserId = $('meta[name="selected_id"]');
const baseUrl = $('meta[name="base_url"]').attr('content');

function toggleLoader(){
    $('.loader').toggleClass('d-none');
}

function fetchMessages(){
    $.ajax({
        url: baseUrl + '/messages',
        method: 'GET',
        data: {
            selected_id: selectedUserId.attr('content'),
        },
        beforeSend: function(){
            toggleLoader();
        },
        success: function(data){
            setUserInfo(data.user);
            toggleLoader();
        },
        error: function(xhr, status, error){}
    });
}

function setUserInfo(user){
    $('.user_name').text(user.name);
}

$(document).ready(function() {
    //set the user id to meta
    $('.contact').on('click', function(){
        let userId = $(this).data('id');
        selectedUserId.attr('content', userId);
        fetchMessages();
    });
});
