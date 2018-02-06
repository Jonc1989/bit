/**
 * Created by Admin on 06.02.2018..
 */
jQuery(function($) {
    $('#posts-pages > #current').change(function() {
        var val = $(this).val();
        if (parseInt(val) > maxpages) {
            currpage = 1;
        } else {
            currpage = val;
        }
        var data = {
            'action': 'loadnews',
            'currpage': currpage,
            'category': category,
            'term': term,
            'taxonomy': taxonomy,
            'post_type': post_type
        };
        $.ajax({
            url: ajaxurl,
            data: data,
            type: 'POST',
            success: function(data) {
                if (data) {
                    $('#post-container').empty().append(data);
                    reorganize_pagination(currpage, maxpages);
                } else {}
            }
        });
    });
});