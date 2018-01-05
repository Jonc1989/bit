/**
 * Created by Jānis Mozais on 11.11.2017..
 */
equalheight = function(e) {
    var t, a = 0,
        i = 0,
        o = new Array;
    jQuery(e).each(function() {
        if (t = jQuery(this), jQuery(t).height("auto"), topPostion = t.position().top, i != topPostion) {
            for (currentDiv = 0; currentDiv < o.length; currentDiv++) o[currentDiv].height(a);
            o.length = 0, i = topPostion, a = t.height(), o.push(t)
        } else o.push(t), a = a < t.height() ? t.height() : a;
        for (currentDiv = 0; currentDiv < o.length; currentDiv++) o[currentDiv].height(a)
    })
};

get_team_members = function ( more ) {

    if(more){
        jQuery('.team-member').slice(3).slideToggle( 400 );
        jQuery('.more-btn').removeClass('more')
        equalheight('.team-member');
    }else{
        jQuery('.team-member').slice(3).slideToggle( 400 );
        jQuery('.more-btn')
            .addClass('more')
    }
};

jQuery(document).ready(function () {
    equalheight('.team-member');
    var height = jQuery('.team-member').eq(0).css( 'height' );
    jQuery('.team-member').css( 'height', height );


    jQuery(document).on('click', '.more-btn', function () {
        var more = jQuery(this).hasClass('more');
        get_team_members(more);
    });
});
jQuery( window ).resize(function() {
    equalheight('.team-member');
});