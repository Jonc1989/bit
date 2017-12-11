/**
 * Created by Zakisss on 19.11.2017.
 */

jQuery(document).ready(function () {
    jQuery('#videoModal').on('show.bs.modal', function () {
        jQuery('#videoModal').css( 'display', 'flex' );
    });

    jQuery('#qrModal').on('show.bs.modal', function () {
        jQuery('#qrModal').css( 'display', 'flex' );
    });
    // jQuery('#firstModal').on('show.bs.modal', function () {
    //     jQuery('#firstModal').css( 'display', 'flex' );
    // });
    //
    // jQuery('#secondModal').on('show.bs.modal', function () {
    //     jQuery('#secondModal').css( 'display', 'flex' );
    // });
    //
    // jQuery('#thirdModal').on('show.bs.modal', function () {
    //     jQuery('#thirdModal').css( 'display', 'flex' );
    // });
    //
    // jQuery('#fourthModal').on('show.bs.modal', function () {
    //     jQuery('#fourthModal').css( 'display', 'flex' );
    // });

    //jQuery('#videoModal').on('hidden.bs.modal', function () {
    //    jQuery('#videoModal').css({
    //        display: 'none'
    //    });
    //});
});

