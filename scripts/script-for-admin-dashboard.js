

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
      toggleSidenavHomeLinks() { this.showsidenavHomeLinks = !this.showsidenavHomeLinks; },
      toggleSidenavBarangayOfficialLinks() { this.showsidenavBarangayOfficialLinks = !this.showsidenavBarangayOfficialLinks; },
      toggleSidenavStaffLinks() { this.showsidenavStaffLinks = !this.showsidenavStaffLinks; },
      toggleSidenavPurokLeaderLinks() { this.showsidenavPurokLeaderLinks = !this.showsidenavPurokLeaderLinks; },
      toggleSidenavAddResidentLinks() { this.showsidenavAddResidentLinks = !this.showsidenavAddResidentLinks; },
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
         if(homeIsClicked){
            document.addEventListener('DOMContentLoaded', function() {
               const ctx = document.getElementById('homeChart');
       
               new Chart(ctx, {
                   type: 'bar',
                   data: {
                       labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                       datasets: [{
                           label: '# of Votes',
                           data: [12, 19, 3, 5, 2, 3],
                           borderWidth: 1
                       }]
                   },
                   options: {
                       scales: {
                           y: {
                               beginAtZero: true
                           }
                       }
                   }
               });
           });
         }
      } //End of homeChart()

   } //end of methods
   
}) // End of Vue.createApp

app.mount('#admin-dashboard-vue')

