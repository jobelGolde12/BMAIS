

 const app = Vue.createApp({  
    data(){
       return {
        showsidenavHomeLinks: false,
        showsidenavBarangayOfficialLinks: false,
        showsidenavStaffLinks: false,
        showsidenavPurokLeaderLinks: false
       }
    }, //end of data

    methods: {
        toggleSidenavHomeLinks(){this.showsidenavHomeLinks = !this.showsidenavHomeLinks;},
        toggleSidenavBarangayOfficialLinks(){this.showsidenavBarangayOfficialLinks = !this.showsidenavBarangayOfficialLinks;},
        toggleSidenavStaffLinks(){this.showsidenavStaffLinks = !this.showsidenavStaffLinks;},
        toggleSidenavPurokLeaderLinks(){this.showsidenavPurokLeaderLinks = !this.showsidenavPurokLeaderLinks;}

} //end of methods
}) // End of Vue.createApp

app.mount('#admin-dashboard-vue')
