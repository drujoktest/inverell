var cbpHorizontalMenu = (function() {

var $listItems = $( '#cbp-hrmenu > ul > li' ),
    $menuItems = $listItems.children( 'a' ),
    $body = $( 'body' ),
    current = -1;

function init() {
    $menuItems.on( 'mouseover', open );
    $listItems.on( 'mouseover', function( event ) { event.stopPropagation();} );
            $listItems.on( 'mouseleave', close );
}

function open( event ) {

    if( current !== -1 ) {
        $listItems.eq( current ).removeClass( 'cbp-hropen' );
    }

    var $item = $( event.currentTarget ).parent( 'li' ),
        idx = $item.index();

    if( current === idx ) {
        $item.removeClass( 'cbp-hropen' );
        current = -1;
    }
    else {
        $item.addClass( 'cbp-hropen' );
        current = idx;
    }

    return false;

}

function close( event ) {
    $listItems.eq( current ).removeClass( 'cbp-hropen' );
    current = -1;
}

return { init : init };

})();