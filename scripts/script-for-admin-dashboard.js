

const app = Vue.createApp({
   data() {
      return {
         showsidenavHomeLinks: false,
         showsidenavBarangayOfficialLinks: false,
         showsidenavStaffLinks: false,
         showsidenavPurokLeaderLinks: false,
         showsidenavAddResidentLinks: false,
         announcementIsClicked: false,
         active: 'blue',
         homeIsClicked: true
      }
   }, //end of data

   methods: {
      toggleSidenavHomeLinks()             { this.showsidenavHomeLinks = !this.showsidenavHomeLinks; },
      toggleSidenavBarangayOfficialLinks() { this.showsidenavBarangayOfficialLinks = !this.showsidenavBarangayOfficialLinks; },
      toggleSidenavStaffLinks()            { this.showsidenavStaffLinks = !this.showsidenavStaffLinks; },
      toggleSidenavPurokLeaderLinks()      { this.showsidenavPurokLeaderLinks = !this.showsidenavPurokLeaderLinks; },
      toggleSidenavAddResidentLinks()      { this.showsidenavAddResidentLinks = !this.showsidenavAddResidentLinks; },
      modifySidenavWidth() {
         let sideNav = document.querySelector('._sidenav');
         let sidenavList = document.querySelector('._sidenav-list');
         let mainDashboard = document.querySelector('._main-dashboard');
         let widthValue = sideNav.computedStyleMap().get('width');
         if (widthValue.toString() === '30%') {
            sideNav.style.width = '1%'
            mainDashboard.style.flexGrow = '1';
            sidenavList.style.left = '3%';
         } else {
            sideNav.style.width = '30%'
            mainDashboard.style.width = '70%';
            sidenavList.style.left = '30%';
         }
      },
      seeAnnouncement() {
         this.announcementIsClicked = !this.announcementIsClicked
      },

      homeChart() {
         if(this.homeIsClicked){
            
            var ctx = document.getElementById('homeChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    // Configuration options...
                }
            });
            
         }
      }//End of homeChart()
        
   }, //end of methods
   
   mounted(){
      this.homeChart()
   }
}) // End of Vue.createApp

app.mount('#admin-dashboard-vue')

