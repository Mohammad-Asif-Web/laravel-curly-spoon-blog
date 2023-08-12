window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }

    // user management data table
    const userManagementData = document.getElementById('userManagementData');
    if(userManagementData){
        new simpleDatatables.DataTable(userManagementData);
    }

    // post engagement data table
    const postEngagementData = document.getElementById('postEngagementData');
    if(postEngagementData){
        new simpleDatatables.DataTable(postEngagementData);
    }

    // popular posts
    const popularPostData = document.getElementById('popularPostData');
    if(popularPostData){
        new simpleDatatables.DataTable(popularPostData);
    }

    // recent activity
    const recentActivityData = document.getElementById('recentActivityData');
    if(recentActivityData){
        new simpleDatatables.DataTable(recentActivityData);
    }


});





