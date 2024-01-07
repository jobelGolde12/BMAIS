

 const app = Vue.createApp({  
    data(){
       return {
        showsidenavHomeLinks: false,
        showsidenavBarangayOfficialLinks: false
       }
    }, //end of data

    methods: {
        toggleSidenavHomeLinks(){     
            if(this.showsidenavHomeLinks === true){
                this.showsidenavHomeLinks = false;
            }else{
                this.showsidenavHomeLinks = true;
            }         
        
        },

        toggleSidenavBarangayOfficialLinks(){     
            if(this.showsidenavBarangayOfficialLinks === true){
                this.showsidenavBarangayOfficialLinks = false;
            }else{
                this.showsidenavBarangayOfficialLinks = true;
            }
    }
}//end of methods
})

app.mount('#admin-dashboard-vue')
