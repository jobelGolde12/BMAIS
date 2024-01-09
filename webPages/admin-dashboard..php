<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/admin-dashboard.css">
    <link rel="stylesheet" href="../styles/global.css">
</head>

<body>

    <div class="_admin-dashboard d-flex flex-row" id="admin-dashboard-vue">
        <?php include('header.html'); ?>
        <i class=" bi bi-list _sidenav-list" @click="modifySidenavWidth"></i>
        <div class="_sidenav">

            <div class="_sidenav-header d-flex flex-row gap-1">
                <h1>A</h1> <span>Administrator</span>
            </div>
            
            <div class="_side-nav-home-link mt-2">
                <p @click="toggleSidenavHomeLinks">
                    <i class="bi bi-chevron-down" v-if="showsidenavHomeLinks"></i>
                    <i class="bi bi-chevron-right" v-if="!showsidenavHomeLinks"></i>
                    <i class="bi bi-house"></i>
                    Home
                </p>

                <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavHomeLinks">
                    <a href="#">Home</a>
                    <a href="#" @click="seeAnnouncement">Announcements or News</a>
                    <a href="#">Services</a>
                    <a href="#">Directory or Contacts</a>
                    <a href="#">Community Resources</a>
                </div> <!--End of _dropdown-list -->
            </div> <!-- End of _side-nav-home-link -->




            <div class="_side-nav-barangay-official-link mt-2">
                <p @click="toggleSidenavBarangayOfficialLinks">
                    <i class="bi bi-chevron-down" v-if="showsidenavBarangayOfficialLinks"></i>
                    <i class="bi bi-chevron-right" v-if="!showsidenavBarangayOfficialLinks"></i>
                    <i class="bi bi-people"></i>
                    Barangay official
                </p>

                <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavBarangayOfficialLinks">
                    <a href="#">Barangay captain</a>
                    <a href="#">Council Member</a>
                    <a href="#">Watchman</a>

                </div> <!--End of _dropdown-list -->
            </div> <!-- End of _side-nav-barangay-official-link -->


            <div class="_side-nav-staff-link mt-2">
                <p @click="toggleSidenavStaffLinks">
                    <i class="bi bi-chevron-down" v-if="showsidenavStaffLinks"></i>
                    <i class="bi bi-chevron-right" v-if="!showsidenavStaffLinks"></i>
                    <i class="bi bi-person-workspace"></i>
                    Staff
                </p>

                <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavStaffLinks">
                    <a href="#">Barangay captain</a>
                    <a href="#">Council Member</a>
                    <a href="#">Watchman</a>

                </div> <!--End of _dropdown-list -->
            </div> <!-- End of _side-nav-staff-link -->



            <div class="_side-nav-purok-leader-link mt-2">
                <p @click="toggleSidenavPurokLeaderLinks">
                    <i class="bi bi-chevron-down" v-if="showsidenavPurokLeaderLinks"></i>
                    <i class="bi bi-chevron-right" v-if="!showsidenavPurokLeaderLinks"></i>
                    <i class="bi bi-trophy"></i>
                    Purok leaders
                </p>

                <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavPurokLeaderLinks">
                    <a href="#">Barangay captain</a>
                    <a href="#">Council Member</a>
                    <a href="#">Watchman</a>

                </div> <!--End of _dropdown-list -->
            </div> <!-- End of _side-nav-purok-leader-link -->


            <div class="_atitvities mb-3">
                <a href="#"><i class="bi bi-activity ms-3"></i> Activities</a>
            </div>

            <div class="_household mb-3">
                <a href="#"><i class="bi bi-house ms-3"></i> Household</a>
            </div>

            <div class="_announcement mb-3">
                <a href="#"> <i class="bi bi-megaphone ms-3"></i> Announcement</a>
            </div>


            <div class="_user-data mb-3">
                <a href="#"> <i class="bi bi-bar-chart ms-3"></i> User data</a>
            </div>


            <div class="_side-nav-add-resident-link mt-2">
                <p @click="toggleSidenavAddResidentLinks">
                    <i class="bi bi-chevron-down" v-if="showsidenavAddResidentLinks"></i>
                    <i class="bi bi-chevron-right" v-if="!showsidenavAddResidentLinks"></i>
                    <i class="bi bi-plus"></i>
                    Add resident
                </p>

                <div class="_dropdown-list d-flex flex-column ps-5" v-if="showsidenavAddResidentLinks">
                    <a href="#">Barangay council only</a>
                    <a href="#">Barangay watchman only</a>
                    <a href="#">Barangay resident (not barangay official)</a>

                </div> <!--End of _dropdown-list -->
            </div> <!-- End of _side-nav-add-resident-link -->


        </div> <!-- End of _sidenav -->

        <div class="_main-dashboard">

            <div class="_announcement container mt-5 ms-2" v-if="announcementIsClicked">
                <div class="_announcement-header d-flex flex-row justify-content-between align-items-center">
                    <div class="container">
                        <h3 class="fs-4 fw-200 mb-0">Announcement</h3>
                        <p class="_head-content">Announcement may view even not admin.</p>
                    </div>

                    <div class="container">
                        <input type="date" id="searchAnnouncementDate" class="ms-5">
                    </div>

                    <div class="container">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div> <!-- -->
                </div>

                <div class="_announcement-table container text-start mt-5">
                    <div class="row align-items-start fw-bold mb-3">
                        <div class="col ">Announcement</div>
                        <div class="col">Who announce</div>
                        <div class="col">Date (MM-DD-YY)</div>
                        <div class="col">Info</div>
                        <div class="col">Todo</div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Barangay assembly</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">1-5-24</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Feeding program</div>
                        <div class="col">Shyryl villanueva</div>
                        <div class="col">14-10-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Mayor will visit</div>
                        <div class="col">captain toby Malinao</div>
                        <div class="col">5-3-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>
                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                    <div class="row d-flex flex-row align-items-center mb-2">
                        <div class="col">Gathered for clean drive</div>
                        <div class="col">maryjane Golde</div>
                        <div class="col">11-20-23</div>
                        <div class="col"><button class="btn btn-primary"><i class="bi bi-eye"></i> view</button></div>
                        <div class="col"><button class="btn btn-warning"><i class="bi bi-trash"></i> remove</button></div>
                    </div>

                </div> <!-- End of "_announcement-table -->

            </div> <!--End of _announcement -->

            <!-- home -->

            <div class="_home pt-5" v-if="homeIsClicked" >
                <div class="_home-header ps-5 pe-5">
                    <div class="card card1 _gradient-bg1">
                        <div class="d-flex flex-row align-items-center gap-2">
                        <i class="bi bi-people text-success fs-3"></i>    
                        <span>1,500</span> resident's</div>
                    </div>

                    <div class="card card2 _gradient-bg2">
                        <div class="d-flex flex-row align-items-center gap-2">
                        <i class="bi bi-bell text-primary fs-3"></i>    
                        <span>50+</span> Notifications</div>
                    </div>

                    <div class="card card3 _gradient-bg3">
                        <div class="d-flex flex-row align-items-center gap-2">
                        <i class="bi bi-cash text-light fs-3"></i>    
                        <span>10k</span> Funds</div>
                    </div>

                  
                </div>  <!-- End of _home-header -->

                

                
                <canvas id="homeChart" class="container">

                </canvas>
            </div> <!-- End of _home -->
        </div> <!-- End of main-dashboard -->

    </div> <!-- End of _admin-dashboard -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.31/dist/vue.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../scripts/script-for-admin-dashboard.js"></script>
    <script src="../scripts/global.js"></script>

</body>

</html>