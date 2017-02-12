$(document).ready(function () {

    if (sessionStorage.getItem("selectedTab1") === null){

        sessionStorage.selectedTab1=false
    }

    $('.site-wrapper').tabs({
        activate: function( event, ui ) {
            var index = ui.newTab.index();
            index <= 0 ? sessionStorage.selectedTab1 = 0 : sessionStorage.selectedTab1  = index;
        },
        collapsible: false,
        active: sessionStorage.selectedTab1
    });
});
