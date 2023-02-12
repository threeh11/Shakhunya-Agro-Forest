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
            $('#questionBlock')
                .removeClass('block')
                .addClass('hidden');
            $('#questionMenu')
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

function start() {
    $('#showImage').centerImage();
    $('#placePhoto').center();
    $('#modalBuy').center();
    $('#modal').center();
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

function getCookie(name) {
    let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

function deleteCookie(name) {
    setCookie(name, "", {
        'max-age': -1
    })
}

function getIdFavorites(count) {
    let idArray = [];
    for (let i = 0; i < count; i++)
    {
        idArray[i] = 'removeFavorites_' + (i+1);
    }
    return idArray;
}

function getAddIdFavorites(count) {
    let idArray = [];
    for (let i = 0; i < count; i++)
    {
        idArray[i] = 'addFavorites_' + (i+1);
    }
    return idArray;
}

function getIdStars(){
    let idArray = [];
    for (let i = 0; i < 5; i++)
    {
        idArray[i] = 'star_' + (i+1);
    }
    return idArray;
}

$(document).ready(function() {
    start();

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
        $('#buttonBuy')
            .removeClass('block')
            .addClass('hidden')
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    })

    $('#closeModal').click(function (){
        $('#modalBuy')
            .removeClass('block')
            .addClass('hidden')
        $('#buttonBuy')
        .removeClass('hidden')
        .addClass('block');
        $('html, body').css({
            overflow: 'visible',
            height: '100%'
        });
    })


    if($("#hasErrorModal").get(0)){
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

    if($("#hasErrorQuestions").get(0)){
        getQuestions();
    }

    let starsId = getIdStars();
    for (let i = 0; i < 5; i++) {
        $('#' + starsId[i]).click(function() {
            for(let y = 0; y < 5; y++) {
                let star = $('#' + starsId[y]);
                if (typeof star.attr('checked') !== typeof undefined && star.attr('checked') !== false) {
                    star.removeAttr('checked');
                }
            }
            $(this).attr('checked', true);
        });
    }

    $('#customSaveForm').click(function () {
        let starsId = getIdStars();
        let rating = 0;
        for (let i = 0; i < 5; i++) {
            for(let y = 0; y < 5; y++) {
                let star = $('#' + starsId[y]);
                if (typeof star.attr('checked') !== typeof undefined && star.attr('checked') !== false) {
                    rating = y + 1;
                    $('#ratingInput').attr('value', rating);
                }
            }
        }
    });
});

