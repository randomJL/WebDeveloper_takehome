<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>Final Question</title>
  <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.0.0-beta.2/css/rivet.min.css">
</head>
<body class="rvt-layout">

<!-- **************************************************************************
    BLANK - APP SINGLE-COLUMN LAYOUT
    
    -> v2.rivet.iu.edu/docs/layouts/blank-page/
*************************************************************************** -->

<!-- **************************************************************************
    Header

    -> v2.rivet.iu.edu/docs/components/header/
*************************************************************************** -->

<header class="rvt-header-wrapper">
    
    <!-- **********************************************************************
        "Skip to main content" link for keyboard users
    *********************************************************************** -->

    <a class="rvt-header-wrapper__skip-link" href="#main-content">Skip to main content</a>
    
    <!-- **********************************************************************
        Global header area
    *********************************************************************** -->
    
    <div class="rvt-header-global">
        <div class="rvt-container-lg">
            <div class="rvt-header-global__inner">
                <div class="rvt-header-global__logo-slot">
                    <a class="rvt-lockup" href="#0">
                        
                        <!-- **************************************************
                            Trident logo
                        *************************************************** -->

                        <div class="rvt-lockup__tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-lockup__trident" viewBox="0 0 28 34">
                                <path fill="currentColor" d="M-3.34344e-05 4.70897H8.83308V7.174H7.1897V21.1426H10.6134V2.72321H8.83308V0.121224H18.214V2.65476H16.2283V21.1426H19.7889V7.174H18.214V4.64047H27.0471V7.174H25.0614V23.6761L21.7746 26.8944H16.2967V30.455H18.214V33.8787H8.76463V30.592H10.6819V26.8259H5.20403L1.91726 23.6077V7.174H-3.34344e-05V4.70897Z"></path>
                            </svg>
                        </div>

                        <!-- **************************************************
                            Application title 
                        *************************************************** -->

                        <div class="rvt-lockup__body">
                            <span class="rvt-lockup__title">School of Public Health</span>
                        </div>
                    </a>
                </div>
                <div class="rvt-header-global__controls" data-rvt-disclosure="menu">
                    <button aria-expanded="false" class="rvt-global-toggle rvt-global-toggle--menu rvt-hide-lg-up" data-rvt-disclosure-toggle="menu">
                        <span class="rvt-sr-only">Menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="rvt-global-toggle__open" viewBox="0 0 16 16">
                            <g fill="currentColor">
                                <path d="M15,3H1A1,1,0,0,1,1,1H15a1,1,0,0,1,0,2Z"></path>
                                <path d="M15,9H1A1,1,0,0,1,1,7H15a1,1,0,0,1,0,2Z"></path>
                                <path d="M15,15H1a1,1,0,0,1,0-2H15a1,1,0,0,1,0,2Z"></path>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="rvt-global-toggle__close" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.46954 7.00409L13.7595 1.71409C13.9234 1.52279 14.009 1.27671 13.9993 1.02504C13.9895 0.773362 13.8852 0.534623 13.7071 0.356528C13.529 0.178434 13.2903 0.0741014 13.0386 0.0643803C12.7869 0.0546591 12.5408 0.140265 12.3495 0.304092L7.05954 5.59409L1.76954 0.294092C1.58124 0.105788 1.32585 -3.72428e-09 1.05954 -1.74018e-09C0.793242 2.43924e-10 0.537847 0.105788 0.349544 0.294092C0.16124 0.482395 0.055452 0.73779 0.055452 1.00409C0.055452 1.27039 0.16124 1.52579 0.349544 1.71409L5.64954 7.00409L0.349544 12.2941C0.244862 12.3837 0.159841 12.4941 0.0998179 12.6181C0.0397946 12.7422 0.00606467 12.8773 0.000745174 13.015C-0.00457432 13.1528 0.0186315 13.2901 0.0689061 13.4184C0.119181 13.5467 0.195439 13.6633 0.292893 13.7607C0.390348 13.8582 0.506896 13.9345 0.635221 13.9847C0.763546 14.035 0.900878 14.0582 1.0386 14.0529C1.17632 14.0476 1.31145 14.0138 1.43551 13.9538C1.55958 13.8938 1.6699 13.8088 1.75954 13.7041L7.05954 8.41409L12.3495 13.7041C12.5408 13.8679 12.7869 13.9535 13.0386 13.9438C13.2903 13.9341 13.529 13.8297 13.7071 13.6517C13.8852 13.4736 13.9895 13.2348 13.9993 12.9831C14.009 12.7315 13.9234 12.4854 13.7595 12.2941L8.46954 7.00409Z" fill="currentColor"></path>
                        </svg>
                    </button>

                    <!-- ******************************************************
                        Primary navigation
                    ******************************************************* -->

                    <nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>
                        <ul class="rvt-header-menu__list">
                            <li class="rvt-header-menu__item">
                                <a class="rvt-header-menu__link" href="#0">Nav Item One</a>
                            </li>
                            <li class="rvt-header-menu__item">
                                <a class="rvt-header-menu__link" href="#0">Nav Item Two</a>
                            </li>
                            <li class="rvt-header-menu__item rvt-header-menu__item--current">
                                <div class="rvt-header-menu__dropdown rvt-dropdown" data-rvt-dropdown="primary-nav-3">
                                    <div class="rvt-header-menu__group">
                                        <a class="rvt-header-menu__link" href="#0" aria-current="page">Nav Item Three</a>
                                        <button aria-expanded="false" class="rvt-dropdown__toggle rvt-header-menu__toggle" data-rvt-dropdown-toggle="primary-nav-3">
                                            <span class="rvt-sr-only">Toggle Sub-navigation</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-global-toggle__open" height="16" viewBox="0 0 16 16" width="16">
                                                <path d="M8,12.46a2,2,0,0,1-1.52-.7L1.24,5.65a1,1,0,1,1,1.52-1.3L8,10.46l5.24-6.11a1,1,0,0,1,1.52,1.3L9.52,11.76A2,2,0,0,1,8,12.46Z" fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="rvt-header-menu__submenu rvt-dropdown__menu rvt-dropdown__menu--right" data-rvt-dropdown-menu="primary-nav-3" hidden>
                                        <ul class="rvt-header-menu__submenu-list">
                                            <li class="rvt-header-menu__submenu-item">
                                                <a class="rvt-header-menu__submenu-link" href="#0">Sub One</a>
                                            </li>
                                            <li class="rvt-header-menu__submenu-item">
                                                <a class="rvt-header-menu__submenu-link" href="#0">Sub Three</a>
                                            </li>
                                            <li class="rvt-header-menu__submenu-item">
                                                <a class="rvt-header-menu__submenu-link" href="#0">Sub Three</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="rvt-header-menu__item">
                                <a class="rvt-header-menu__link" href="#0">Nav Item Four</a>
                            </li>
                        </ul>

                        <!-- **************************************************
                            Avatar and "log out" link
                        *************************************************** -->

                        <div class="rvt-flex rvt-items-center rvt-m-left-md rvt-p-bottom-md rvt-p-bottom-none-md-up">
                            <div class="rvt-avatar rvt-avatar--xs">
                                <span class="rvt-avatar__text">UN</span>
                            </div>
                            <div class="rvt-ts-14 rvt-m-left-xs rvt-p-right-xs rvt-m-right-xs rvt-border-right">username</div>
                            <a href="#0" class="rvt-ts-14">Log out</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- **************************************************************************
    Main content area
*************************************************************************** -->

<main id="main-content" class="rvt-flex rvt-flex-column rvt-grow-1">
    <div class="rvt-bg-black-000 rvt-border-bottom rvt-p-top-xl">
        <div class="rvt-container-lg rvt-prose rvt-flow rvt-p-bottom-xl">
            
            <!-- **************************************************************
                Breadcrumb navigation
            *************************************************************** -->

            <nav class="rvt-flex rvt-items-center" role="navigation" aria-label="Breadcrumb">
                <ol class="rvt-breadcrumbs rvt-grow-1">
                    <li>
                        <a href="#0">
                            <span class="rvt-sr-only">Home</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" id="rvt-icon-home">
                                <path fill="currentColor" d="M15.6 6.4l-7-5.19a.76.76 0 0 0-.19-.12A1 1 0 0 0 8 1a1 1 0 0 0-.42.09.76.76 0 0 0-.19.12L.4 6.4a1 1 0 0 0-.4.8 1 1 0 0 0 .2.6 1 1 0 0 0 1.4.2l.4-.3V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7.7l.4.3a1 1 0 0 0 .6.2 1 1 0 0 0 .6-1.8zM12 13H9V9H7v4H4V6.22l4-3 4 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li><a href="#0">Tier two title</a></li>
                    <li><a href="#0">Tier three title</a></li>
                </ol>
            </nav>

            <!-- **************************************************************
                Page title
            *************************************************************** -->

            <h1 class="rvt-m-top-xs">Take Home Work</h1>
        </div>
    </div>

    <!-- **************************************************************
        Content
    *************************************************************** -->

    <div class="rvt-layout__wrapper [ rvt-p-tb-xxl ]">
        <div class="rvt-container-lg">
            <div class="rvt-row">
                <div class="rvt-cols-8-md rvt-flow rvt-prose">
                    <div class="rvt-prose rvt-flow">

                        <!-- **************************************************
                            Page content
                        *************************************************** -->

                        <div class="rvt-empty-state [ rvt-m-top-lg ]">
                            <div class="rvt-empty-state__content">
                                <p>
                                    <?php
                            
                                    require("src/Controller.php");
                            
                                    new Controller('sqlite','./src/db/sph_database.db');
                            
                                    ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- **************************************************************************
    Footer

    -> v2.rivet.iu.edu/docs/components/footer/
**************************************************************************** -->

<footer class="rvt-footer-base rvt-footer-base--light">
    <div class="rvt-container-lg">
        <div class="rvt-footer-base__inner">
            <div class="rvt-footer-base__logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <polygon fill="currentColor" points="15.3 3.19 15.3 5 16.55 5 16.55 15.07 13.9 15.07 13.9 1.81 15.31 1.81 15.31 0 8.72 0 8.72 1.81 10.12 1.81 10.12 15.07 7.45 15.07 7.45 5 8.7 5 8.7 3.19 2.5 3.19 2.5 5 3.9 5 3.9 16.66 6.18 18.98 10.12 18.98 10.12 21.67 8.72 21.67 8.72 24 15.3 24 15.3 21.67 13.9 21.67 13.9 18.98 17.82 18.98 20.09 16.66 20.09 5 21.5 5 21.5 3.19 15.3 3.19" fill="#231f20" />
                </svg>
            </div>
            <ul class="rvt-footer-base__list">
                <li class="rvt-footer-base__item">
                    <a class="rvt-footer-base__link" href="https://accessibility.iu.edu/assistance/">Accessibility</a>
                </li>
                <li class="rvt-footer-base__item">
                    <a class="rvt-footer-base__link" href="#0">Privacy Notice</a>
                </li>
                <li class="rvt-footer-base__item">
                    <a class="rvt-footer-base__link" href="#0">Copyright</a> ?? 2021 The Trustees of <a class="rvt-footer-base__link" href="https://www.iu.edu">Indiana University</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/rivet-core@2.0.0-beta.2/js/rivet.min.js"></script>
<script>
  Rivet.init();
</script>
</body>
</html>