

let sideNavBgColor = 'white'
function changeTheme(){
    document.querySelector('._sidenav').style.transitionDuration  = '0s';
    document.querySelector('._sidenav-list').style.transitionDuration  = '0s';


    if(sideNavBgColor === 'white'){

        sideNavBgColor = 'black'
        document.documentElement.style.setProperty('--bg-primary', '#333');
        document.documentElement.style.setProperty('--bg-main', '#333');
        document.documentElement.style.setProperty('--clr-secondary', 'white');
        document.documentElement.style.setProperty('--clr-primary', '#333');
        document.documentElement.style.setProperty('--clr-in-hover', 'orange');
    }else{
        sideNavBgColor = 'white'
        document.documentElement.style.setProperty('--bg-primary', '#fff');
        document.documentElement.style.setProperty('--bg-main', '#fff');
        document.documentElement.style.setProperty('--clr-secondary', '#333');
        document.documentElement.style.setProperty('--clr-primary', '#fff');
        document.documentElement.style.setProperty('--clr-in-hover', 'blue');
    }
   

}