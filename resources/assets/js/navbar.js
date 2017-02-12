
    console.log("doot doot")

    if (sessionStorage.getItem("selectedTab1") === null){

        sessionStorage.selectedTab1=false
    }

    $('#tabs').tabs({
        activate: function( event, ui ) {
            var index = $('#tabs a[href="'+ui.newPanel.selector+'"]').parent().index();
            index <= 0 ? sessionStorage.selectedTab1 = 0 : sessionStorage.selectedTab1  = index-2;
            console.log($('#time-line-tabs a[href="'+ui.newPanel.selector+'"]').parent().index(), localStorage.selectedTab1);
        },
        collapsible: true,
        active: sessionStorage.selectedTab1
    });
