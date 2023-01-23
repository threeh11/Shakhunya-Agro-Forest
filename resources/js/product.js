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

$(document).ready(function() {
    start();

    $('#addFavorites').click(function () {
        let cokies = getCookie('productsId') === undefined ? '' : getCookie('productsId');
        const productId = $('#productId').text();
        cokies += !cokies.includes(String(productId)) ? ' ' + String(productId) : '';
        setCookie('productsId', cokies, {samesite: 'strict'});
        $('#svgFavorites').addClass('fill-[#FFED4E]').addClass('stroke-[#FFED4E]')
    });

    $('#removeFavorites').click(function () {
        alert($(this).attr('name'));
        let cokies = getCookie('productsId') === undefined ? '' : getCookie('productsId');
        const productId = $('#productId').text();
        deleteCookie('productsId');
    });

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
                let div = $('#showImage');
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
    })
    $('#typeIconNotOpenDownMenu').click(function (){
        $('#typeIconNotOpenDownMenu')
            .addClass('hidden')
        $('#typeIconOpenDownMenu')
            .removeClass('hidden')
        $('#typeParameterInput')
            .removeClass('hidden')
    });

    $('#typeIconOpenDownMenu').click(function (){
        $('#typeIconOpenDownMenu')
            .addClass('hidden')
        $('#typeIconNotOpenDownMenu')
            .removeClass('hidden')
        $('#typeParameterInput')
            .addClass('hidden')
    });

    $('#sizeIconNotOpenDownMenu').click(function (){
        $('#sizeIconNotOpenDownMenu')
            .addClass('hidden')
        $('#sizeIconOpenDownMenu')
            .removeClass('hidden')
        $('#sizeParameterInput')
            .removeClass('hidden')
    });

    $('#sizeIconOpenDownMenu').click(function (){
        $('#sizeIconOpenDownMenu')
            .addClass('hidden')
        $('#sizeIconNotOpenDownMenu')
            .removeClass('hidden')
        $('#sizeParameterInput')
            .addClass('hidden')
    });

    $('#priceIconNotOpenDownMenu').click(function (){
        $('#priceIconNotOpenDownMenu')
            .addClass('hidden')
        $('#priceIconOpenDownMenu')
            .removeClass('hidden')
        $('#priceParameterInput')
            .removeClass('hidden')
    });

    $('#priceIconOpenDownMenu').click(function (){
        $('#priceIconOpenDownMenu')
            .addClass('hidden')
        $('#priceIconNotOpenDownMenu')
            .removeClass('hidden')
        $('#priceParameterInput')
            .addClass('hidden')
    });

    $('#CheckBoxOff1').click(function (){
        $('#CheckBoxOff1')
            .addClass('hidden')
        $('#CheckBoxOn1')
            .removeClass('hidden')
    });

    $('#CheckBoxOn1').click(function (){
        $('#CheckBoxOn1')
            .addClass('hidden')
        $('#CheckBoxOff1')
            .removeClass('hidden')
    });
    $('#CheckBoxOff2').click(function (){
        $('#CheckBoxOff2')
            .addClass('hidden')
        $('#CheckBoxOn2')
            .removeClass('hidden')
    });

    $('#CheckBoxOn2').click(function (){
        $('#CheckBoxOn2')
            .addClass('hidden')
        $('#CheckBoxOff2')
            .removeClass('hidden')
    });
    $('#CheckBoxOff3').click(function (){
        $('#CheckBoxOff3')
            .addClass('hidden')
        $('#CheckBoxOn3')
            .removeClass('hidden')
    });

    $('#CheckBoxOn3').click(function (){
        $('#CheckBoxOn3')
            .addClass('hidden')
        $('#CheckBoxOff3')
            .removeClass('hidden')
    });
    $('#CheckBoxOff4').click(function (){
        $('#CheckBoxOff4')
            .addClass('hidden')
        $('#CheckBoxOn4')
            .removeClass('hidden')
    });

    $('#CheckBoxOn4').click(function (){
        $('#CheckBoxOn4')
            .addClass('hidden')
        $('#CheckBoxOff4')
            .removeClass('hidden')
    });
    $('#CheckBoxOff5').click(function (){
        $('#CheckBoxOff5')
            .addClass('hidden')
        $('#CheckBoxOn5')
            .removeClass('hidden')
    });

    $('#CheckBoxOn5').click(function (){
        $('#CheckBoxOn5')
            .addClass('hidden')
        $('#CheckBoxOff5')
            .removeClass('hidden')
    });


        $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });

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
});

