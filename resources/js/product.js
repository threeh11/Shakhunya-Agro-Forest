function remoteOther(nameMain) {
    switch (nameMain) {
        case 'desc':
        {
            $('#questionBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#questionMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#reviewsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#reviewsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#contactsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#contactsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
        } break;
        case 'review':
        {
            $('#questionBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#questionMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#contactsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#contactsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#descriptionBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#descriptionMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
        } break;
        case 'question':
        {
            $('#contactsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#contactsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#descriptionBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#descriptionMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#reviewsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#reviewsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
        } break;
        case 'contacts':
        {
            $('#descriptionBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#descriptionMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#reviewsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#reviewsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
            $('#contactsBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#contactsMenu')
                .addClass('border-[#E7E7E7]')
                .removeClass('border-[#FFED4E]');
        } break;
    }
}
function getDescription() {
    $('#descriptionMenu')
        .addClass('border-[#FFED4E]')
        .removeClass('border-[#E7E7E7]');

    $('#descriptionBlock')
        .removeClass('hidden')
        .addClass('block');
    remoteOther('desc');
}

function getReviews() {
    $('#reviewsMenu')
        .addClass('border-[#FFED4E]')
        .removeClass('border-[#E7E7E7]');

    $('#reviewsBlock')
        .removeClass('hidden')
        .addClass('block');
    remoteOther('review');
}

function getQuestions() {
    $('#questionMenu')
        .addClass('border-[#FFED4E]')
        .removeClass('border-[#E7E7E7]');

    $('#questionBlock')
        .removeClass('hidden')
        .addClass('block');
    remoteOther('question');
}

function getContacts() {
    $('#contactsMenu')
        .addClass('border-[#FFED4E]')
        .removeClass('border-[#E7E7E7]');

    $('#contactsBlock')
        .removeClass('hidden')
        .addClass('block');
    remoteOther('contacts');
}

$(document).ready(function() {
    $('#descriptionMenu').click(function (){
        getDescription();
    });
    $('#reviewsMenu').click(function (){
        getReviews();
    });
    $('#questionMenu').click(function (){
        getQuestions();
    });
    $('#contactsMenu').click(function (){
        getContacts();
    });
    $('#buttonBuy').click(function (){
        $('#modalBuy')
            .removeClass('hidden')
            .addClass('block');
    })
});
