// const current = 0;
// for (var i = 0; i < document.links.length; i++) {
//     if (document.links[i].href === document.URL) {
//         current = i;
//     }
// }
// document.links[current].className = 'current';

$(function(){
    $('a').each(function () {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('current'); $(this).parents('li').addClass('current');
        }
    });
});
