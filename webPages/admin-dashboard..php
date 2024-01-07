<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/admin-dashboard.css">
    <link rel="stylesheet" href="../styles/global.css">
</head>
<body>

<div class="_admin-dashboard d-flex flex-row" id="admin-dashboard-vue">
    <?php include('header.html');?>
    <div class="_sidenav">

        <div class="_sidenav-header d-flex flex-row gap-1">
            <h1>A</h1>  <span>Administrator</span>
        </div>

        <div class="_side-nav-home-link mt-2">
        <p  @click="toggleSidenavHomeLinks">
         <i class="bi bi-chevron-down" v-if="showsidenavHomeLinks"></i>
         <i class="bi bi-chevron-right" v-if="!showsidenavHomeLinks"></i>
         <i class="bi bi-house"></i>
         Home</p>

        <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavHomeLinks">
         <a href="#">Announcements or News</a>
         <a href="#">Services</a>
         <a href="#">Directory or Contacts</a>
         <a href="#">Community Resources</a>
        </div> <!--End of _dropdown-list -->
        </div> <!-- End of _side-nav-home-link -->




        <div class="_side-nav-barangay-official-link mt-2">
        <p  @click="toggleSidenavBarangayOfficialLinks">
         <i class="bi bi-chevron-down" v-if="showsidenavBarangayOfficialLinks"></i>
         <i class="bi bi-chevron-right" v-if="!showsidenavBarangayOfficialLinks"></i> 
         <i class="bi bi-people"></i>
         Barangay official</p>

        <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavBarangayOfficialLinks">
         <a href="#">Barangay captain</a>
         <a href="#">Council Member</a>
         <a href="#">Watchman</a>
         
        </div> <!--End of _dropdown-list -->
        </div> <!-- End of _side-nav-barangay-official-link -->


        <div class="_side-nav-staff-link mt-2">
        <p  @click="toggleSidenavStaffLinks">
         <i class="bi bi-chevron-down" v-if="showsidenavStaffLinks"></i>
         <i class="bi bi-chevron-right" v-if="!showsidenavStaffLinks"></i>
         <i class="bi bi-person-workspace"></i>
         Staff</p>

        <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavStaffLinks">
         <a href="#">Barangay captain</a>
         <a href="#">Council Member</a>
         <a href="#">Watchman</a>
         
        </div> <!--End of _dropdown-list -->
        </div> <!-- End of _side-nav-staff-link -->



        <div class="_side-nav-purok-leader-link mt-2">
        <p  @click="toggleSidenavPurokLeaderLinks">
         <i class="bi bi-chevron-down" v-if="showsidenavPurokLeaderLinks"></i>
         <i class="bi bi-chevron-right" v-if="!showsidenavPurokLeaderLinks"></i>
         <i class="bi bi-trophy"></i>
         Purok leaders</p>

        <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavPurokLeaderLinks">
         <a href="#">Barangay captain</a>
         <a href="#">Council Member</a>
         <a href="#">Watchman</a>
         
        </div> <!--End of _dropdown-list -->
        </div> <!-- End of _side-nav-staff-link -->


        <div class="_atitvities mb-1">
            <a href="#"><i class="bi bi-activity"></i>   Activities</a>
        </div>

        <div class="_household mb-1">
            <a href="#"><i class="bi bi-house"></i>   Household</a>
        </div>

        <div class="_announcement mb-1">
        <a href="#"> <i class="bi bi-megaphone"></i>   Announcement</a>
        </div>

    </div> <!-- End of _sidenav -->

    <div class="_main-dashboard"></div> <!-- End of main-dashboard -->

</div> <!-- End of _admin-dashboard -->


<script src="https://cdn.jsdelivr.net/npm/vue@3.2.31/dist/vue.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../scripts/script-for-admin-dashboard.js"></script>
<script src="../scripts/global.js"></script>

</body>
</html>
