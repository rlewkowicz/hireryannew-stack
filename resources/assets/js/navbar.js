$(document).ready(function () {

    if (sessionStorage.getItem("selectedTab1") === null){

        sessionStorage.selectedTab1=0
    }

    $('.site-wrapper').tabs({
        activate: function( event, ui ) {

            sessionStorage.selectedTab1 = ui.newTab.index();
        },
        collapsible: false,
        active: sessionStorage.selectedTab1,
    });
});
