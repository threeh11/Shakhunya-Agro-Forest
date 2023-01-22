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

$.fn.extend({
    center: function () {
        return this.each(function() {
            let top = ($(window).height() - $(this).outerHeight()) / 2;
            let left = ($(window).width() - $(this).outerWidth()) / 2;
            $(this).css({position:'absolute', margin:0, top: (top > 0 ? top : 0)+'px', left: (left > 0 ? left : 0)+'px'});
        });
    },
    centerImage: function () {
        return this.each(function() {
            let top = ($(window).height() - $(this).outerHeight()) / 2;
            let left = ($(window).width() - $(this).outerWidth()) / 2;
            $(this).css({position:'absolute', margin:0, top: (top > 0 ? top-250  : 0)+'px', left: (left > 0 ? left : 0)+'px'});
        });
    }
});

$(document).ready(function() {
    $('#showImage').centerImage();
    $('#placePhoto').center();
    $('#modalBuy').center();
    $('#modal').center();

    let mainImage = $('#image3');

    $('#image1').click(function (){
        let tmpPath = mainImage.attr('src')
        mainImage.attr('src', $(this).attr('src'))
        $(this).attr('src', tmpPath)
    });

    $('#image2').click(function (){
        let tmpPath = mainImage.attr('src');
        mainImage.attr('src', $(this).attr('src'))
        $(this).attr('src', tmpPath)
    });

    mainImage.click(function (e){
        if(!$('#modalBuy').hasClass('block'))
        {
            $('#placePhoto').removeClass('hidden')
            $('#showImage').attr('src', $(this).attr('src'))
            $('html, body').css({
                overflow: 'hidden',
                height: '100%'
            });
            $(document).mouseup(function (e){
                var div = $('#showImage');
                if (!div.is(e.target) && div.has(e.target).length === 0) {
                    $('html, body').css({
                        overflow: 'auto',
                        height: 'auto'
                    });
                    $('#placePhoto').addClass('hidden')
                }
            });
        }
    });

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
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    })
    $('#closeModal').click(function (){
        $('#modalBuy')
            .removeClass('block')
            .addClass('hidden')
        $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });
    })
    if($
    ("#hasErrorModal").get(0)){
        $('#modalBuy')
            .removeClass('hidden')
            .addClass('block');
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    }

    if($("#hasErrorReviews").get(0)){
        getReviews();
    }
});

