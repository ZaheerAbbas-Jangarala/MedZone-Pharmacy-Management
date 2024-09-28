<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo7/pharmacy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>MedZone - Pharmacy Management</title>
    <link rel="stylesheet" href="{{ asset('css/dashlitee5ca.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('css/themee5ca.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/common.js"></script>
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-sidebar" data-content="sidebarMenu">
            <div class="nk-sidebar-main">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content menu-active" data-content="navPharmacy">
                        <h5 class="title">MedZone</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item"><a href="{{ asset('/') }}" class="nk-menu-link"><span
                                        class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span><span
                                        class="nk-menu-text">Dashboard</span></a></li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span><span
                                        class="nk-menu-text">Customer</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ asset('add-customer') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('customer') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span><span
                                        class="nk-menu-text">Medicine</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ asset('add-medicine') }}" onload="showPage()"
                                            class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('medicine-list') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="{{ asset('medicine-details') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span><span
                                        class="nk-menu-text">Return</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ asset('add-wastage-return') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Add Wastage
                                                Return</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('wastage-return') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Wastage Return
                                                List</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('add-manufacturer-return') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Add Manufacture
                                                Return</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('manufacturer-return') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return
                                                List</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span><span
                                        class="nk-menu-text">Blogs</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ asset('add-blog') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Add
                                                Blog</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('blog-list') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Blog
                                                List</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                    class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                            class="icon ni ni-home-fill"></em></span><span
                                        class="nk-menu-text">Manufacturer</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ asset('manufacturer') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Manufacturer
                                                List</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('manufacturer-ledger') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Manufacturer
                                                Ledger</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                    class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                            class="icon ni ni-home-fill"></em></span><span
                                        class="nk-menu-text">Orders</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="{{ asset('order-list') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Order List</span></a></li>
                                    <li class="nk-menu-item"><a href="{{ asset('order-ledger') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Order
                                                Ledger</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                    class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                            class="icon ni ni-activity-round-fill"></em></span><span
                                        class="nk-menu-text">Report</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="sales-report.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Sales Report</span></a></li>
                                    <li class="nk-menu-item"><a href="purchase-report.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="stock-report.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Stock Report</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="{{ asset('general-settings') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-setting-fill"></em></span><span
                                        class="nk-menu-text">Setting</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="nk-main ">
        <div class="nk-wrap ">
            <div class="nk-header nk-header-fixed nk-header-fluid">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1"><a href="#"
                                class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                    class="icon ni ni-menu"></em></a></div>
                        <div class="nk-header-brand d-xl-none"><a href="../index-2.html" class="logo-link"><img
                                    class="logo-light logo-img" src="../images/logo.png"
                                    srcset="/demo7/images/logo2x.png 2x" alt="logo"><img
                                    class="logo-dark logo-img" src="../images/logo-dark.png"
                                    srcset="/demo7/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
                        <div class="nk-header-search ml-3 ml-xl-0"><em class="icon ni ni-search"></em><input
                                type="text" class="form-control border-transparent form-focus-none"
                                placeholder="Search anything"></div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown chats-dropdown hide-mb-xs"><a href="#"
                                        class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                        <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Recent
                                                Chats</span><a href="#">Setting</a></div>
                                        <div class="dropdown-body">
                                            <ul class="chat-list">
                                                <li class="chat-item"><a class="chat-link" href="support.html">
                                                        <div class="chat-media user-avatar"><span>IH</span><span
                                                                class="status dot dot-lg dot-gray"></span></div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Iliash Hossain</div><span
                                                                    class="time">Now</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">You: Please confrim if you got
                                                                    my
                                                                    last messages.</div>
                                                                <div class="status delivered"><em
                                                                        class="icon ni ni-check-circle-fill"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="chat-item is-unread"><a class="chat-link"
                                                        href="support.html">
                                                        <div class="chat-media user-avatar bg-pink">
                                                            <span>AB</span><span
                                                                class="status dot dot-lg dot-success"></span>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Abu Bin Ishtiyak</div><span
                                                                    class="time">4:49 AM</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">Hi, I am Ishtiyak, can you help
                                                                    me
                                                                    with this problem ?</div>
                                                                <div class="status unread"><em
                                                                        class="icon ni ni-bullet-fill"></em></div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="chat-item"><a class="chat-link" href="support.html">
                                                        <div class="chat-media user-avatar"><img
                                                                src="../images/avatar/b-sm.jpg" alt="">
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">George Philips</div><span
                                                                    class="time">6 Apr</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">Have you seens the claim from
                                                                    Rose?</div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="chat-item"><a class="chat-link" href="support.html">
                                                        <div class="chat-media user-avatar user-avatar-multiple">
                                                            <div class="user-avatar"><img
                                                                    src="../images/avatar/c-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-avatar"><span>AB</span></div>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Softnio Group</div><span
                                                                    class="time">27 Mar</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">You: I just bought a new
                                                                    computer
                                                                    but i am having some problem</div>
                                                                <div class="status sent"><em
                                                                        class="icon ni ni-check-circle"></em></div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="chat-item"><a class="chat-link" href="support.html">
                                                        <div class="chat-media user-avatar"><img
                                                                src="../images/avatar/a-sm.jpg" alt=""><span
                                                                class="status dot dot-lg dot-success"></span></div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Larry Hughes</div><span
                                                                    class="time">3 Apr</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">Hi Frank! How is you doing?
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                                <li class="chat-item"><a class="chat-link" href="support.html">
                                                        <div class="chat-media user-avatar bg-purple">
                                                            <span>TW</span>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Tammy Wilson</div><span
                                                                    class="time">27 Mar</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">You: I just bought a new
                                                                    computer
                                                                    but i am having some problem</div>
                                                                <div class="status sent"><em
                                                                        class="icon ni ni-check-circle"></em></div>
                                                            </div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-foot center"><a href="support.html">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown notification-dropdown"><a href="#"
                                        class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                        <div class="dropdown-head"><span
                                                class="sub-title nk-dropdown-title">Notifications</span><a
                                                href="#">Mark All as Read</a></div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon"><em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to
                                                            <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon"><em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit
                                                                Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon"><em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to
                                                            <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon"><em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit
                                                                Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon"><em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to
                                                            <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon"><em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit
                                                                Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-foot center"><a href="#">View All</a></div>
                                    </div>
                                </li>
                                <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle mr-n1"
                                        data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                        <div class="dropdown-inner user-card-wrap bg-lighter">
                                            <div class="user-card">
                                                <div class="user-avatar"><span>AB</span></div>
                                                <div class="user-info"><span class="lead-text">Abu Bin
                                                        Ishtiyak</span><span class="sub-text">info@softnio.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="members-profile-regular.html"><em
                                                            class="icon ni ni-user-alt"></em><span>View
                                                            Profile</span></a></li>
                                                <li><a href="general-settings.html"><em
                                                            class="icon ni ni-setting-alt"></em><span>Account
                                                            Setting</span></a></li>
                                                <li><a href="account-log.html"><em
                                                            class="icon ni ni-activity-alt"></em><span>Login
                                                            Activity</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                            out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-content" id="container_detail">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Dashboard</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>Welcome to DashLite Pharmacy Dashboard Template.</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                                class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        <div class="drodown"><a href="#"
                                                                class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                        class="d-none d-md-inline">Last</span> 30
                                                                    Days</span><em
                                                                    class="dd-indc icon ni ni-chevron-right"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><span>Last 30
                                                                                Days</span></a>
                                                                    </li>
                                                                    <li><a href="#"><span>Last 6
                                                                                Months</span></a>
                                                                    </li>
                                                                    <li><a href="#"><span>Last 1
                                                                                Years</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-block-tools-opt"><a href="#"
                                                            class="btn btn-primary"><em
                                                                class="icon ni ni-reports"></em><span>Reports</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Today's Sales</h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">$10,945</div>
                                                            <div class="nk-ecwg6-ck"><canvas
                                                                    class="ecommerce-line-chart-s3"
                                                                    id="ipdIncome"></canvas></div>
                                                        </div>
                                                        <div class="info"><span class="change up text-danger"><em
                                                                    class="icon ni ni-arrow-long-up"></em>4.63%</span><span>
                                                                vs. last week</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Today's Revenue</h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">$12,338</div>
                                                            <div class="nk-ecwg6-ck"><canvas
                                                                    class="ecommerce-line-chart-s3"
                                                                    id="opdIncome"></canvas></div>
                                                        </div>
                                                        <div class="info"><span class="change down text-danger"><em
                                                                    class="icon ni ni-arrow-long-down"></em>2.34%</span><span>
                                                                vs. last week</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title ">
                                                            <h6 class="title">Today's Customer</h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">$20,847</div>
                                                            <div class="nk-ecwg6-ck"><canvas
                                                                    class="ecommerce-line-chart-s3"
                                                                    id="labIncome"></canvas></div>
                                                        </div>
                                                        <div class="info"><span class="change up text-danger"><em
                                                                    class="icon ni ni-arrow-long-up"></em>4.63%</span><span>
                                                                vs. last week</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card">
                                            <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Today's Expense</h6>
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="data-group">
                                                            <div class="amount">$23,485</div>
                                                            <div class="nk-ecwg6-ck"><canvas
                                                                    class="ecommerce-line-chart-s3"
                                                                    id="todayExpense"></canvas></div>
                                                        </div>
                                                        <div class="info"><span class="change up text-primary"><em
                                                                    class="icon ni ni-arrow-long-down"></em>1.34%</span><span>
                                                                vs. last week</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card is-dark h-100">
                                            <div class="nk-ecwg nk-ecwg1">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Total Sales</h6>
                                                        </div>
                                                        <div class="card-tools"><a href="#" class="link">View
                                                                Report</a></div>
                                                    </div>
                                                    <div class="data">
                                                        <div class="amount">$74,958.49</div>
                                                        <div class="info"><strong>$7,395.37</strong> in last
                                                            month
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <h6 class="sub-title">This week so far</h6>
                                                        <div class="data-group">
                                                            <div class="amount">$1,338.72</div>
                                                            <div class="info text-right"><span
                                                                    class="change up text-danger"><em
                                                                        class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs.
                                                                    last week</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-ecwg1-ck"><canvas class="ecommerce-line-chart-s1"
                                                        id="totalSales"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-md-6">
                                        <div class="card card-full">
                                            <div class="nk-ecwg nk-ecwg8 h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-3">
                                                        <div class="card-title">
                                                            <h6 class="title">Store Visitors</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="dropdown"><a href="#"
                                                                    class="dropdown-toggle link link-light link-sm dropdown-indicator"
                                                                    data-bs-toggle="dropdown">Weekly</a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Daily</span></a>
                                                                        </li>
                                                                        <li><a href="#"
                                                                                class="active"><span>Weekly</span></a>
                                                                        </li>
                                                                        <li><a href="#"><span>Monthly</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-ecwg8-legends">
                                                        <li>
                                                            <div class="title"><span class="dot dot-lg sq"
                                                                    data-bg="#0fac81"></span><span>Physically</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="title"><span class="dot dot-lg sq"
                                                                    data-bg="#eb6459"></span><span>Online</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="nk-ecwg8-ck"><canvas class="ecommerce-line-chart-s4"
                                                            id="salesStatistics"></canvas></div>
                                                    <div class="chart-label-group ps-5">
                                                        <div class="chart-label">01 Jul, 2020</div>
                                                        <div class="chart-label">30 Jul, 2020</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="card h-100">
                                            <div class="card-inner">
                                                <div class="card-title-group mb-2">
                                                    <div class="card-title">
                                                        <h6 class="title">Store Statistics</h6>
                                                    </div>
                                                </div>
                                                <ul class="nk-store-statistics">
                                                    <li class="item">
                                                        <div class="info">
                                                            <div class="title">Sales</div>
                                                            <div class="count">1,795</div>
                                                        </div><em class="icon bg-primary-dim ni ni-bag"></em>
                                                    </li>
                                                    <li class="item">
                                                        <div class="info">
                                                            <div class="title">Customers</div>
                                                            <div class="count">2,327</div>
                                                        </div><em class="icon bg-info-dim ni ni-users"></em>
                                                    </li>
                                                    <li class="item">
                                                        <div class="info">
                                                            <div class="title">Products</div>
                                                            <div class="count">674</div>
                                                        </div><em class="icon bg-pink-dim ni ni-box"></em>
                                                    </li>
                                                    <li class="item">
                                                        <div class="info">
                                                            <div class="title">Categories</div>
                                                            <div class="count">68</div>
                                                        </div><em class="icon bg-purple-dim ni ni-server"></em>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xxl-4">
                                        <div class="card card-bordered card-full">
                                            <div class="card-inner-group">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">New Customers</h6>
                                                        </div>
                                                        <div class="card-tools"><a href="customer.html"
                                                                class="link">View All</a></div>
                                                    </div>
                                                </div>
                                                <div class="card-inner card-inner-md">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary-dim"><span>AB</span>
                                                        </div>
                                                        <div class="user-info"><span class="lead-text">Abu Bin
                                                                Ishtiyak</span><span
                                                                class="sub-text">info@softnio.com</span></div>
                                                        <div class="user-action">
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="general-settings.html"><em
                                                                                    class="icon ni ni-setting"></em><span>Action
                                                                                    Settings</span></a></li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-notify"></em><span>Push
                                                                                    Notification</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner card-inner-md">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-pink-dim"><span>SW</span></div>
                                                        <div class="user-info"><span class="lead-text">Sharon
                                                                Walker</span><span
                                                                class="sub-text">sharon-90@example.com</span>
                                                        </div>
                                                        <div class="user-action">
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="general-settings.html"><em
                                                                                    class="icon ni ni-setting"></em><span>Action
                                                                                    Settings</span></a></li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-notify"></em><span>Push
                                                                                    Notification</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner card-inner-md">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-warning-dim"><span>GO</span>
                                                        </div>
                                                        <div class="user-info"><span class="lead-text">Gloria
                                                                Oliver</span><span
                                                                class="sub-text">gloria_72@example.com</span>
                                                        </div>
                                                        <div class="user-action">
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="general-settings.html"><em
                                                                                    class="icon ni ni-setting"></em><span>Action
                                                                                    Settings</span></a></li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-notify"></em><span>Push
                                                                                    Notification</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner card-inner-md">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-success-dim"><span>PS</span>
                                                        </div>
                                                        <div class="user-info"><span class="lead-text">Phillip
                                                                Sullivan</span><span
                                                                class="sub-text">phillip-85@example.com</span>
                                                        </div>
                                                        <div class="user-action">
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="general-settings.html"><em
                                                                                    class="icon ni ni-setting"></em><span>Action
                                                                                    Settings</span></a></li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-notify"></em><span>Push
                                                                                    Notification</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-8">
                                        <div class="card card-bordered card-full">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title"><span class="me-2">Transaction</span>
                                                            <a href="#" class="link d-none d-sm-inline">See
                                                                History</a>
                                                        </h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        <ul class="card-tools-nav">
                                                            <li><a href="#"><span>Paid</span></a></li>
                                                            <li><a href="#"><span>Pending</span></a></li>
                                                            <li class="active"><a href="#"><span>All</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner p-0 border-top">
                                                <div class="nk-tb-list nk-tb-orders">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Invoice No</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span>Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>Ref</span></div>
                                                        <div class="nk-tb-col"><span>Amount</span></div>
                                                        <div class="nk-tb-col"><span
                                                                class="d-none d-sm-inline">Status</span></div>
                                                        <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col"><span class="tb-lead"><a
                                                                    href="#">#95954</a></span></div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-sm bg-purple">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-name"><span class="tb-lead">Abu
                                                                        Bin
                                                                        Ishtiyak</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md"><span
                                                                class="tb-sub">02/11/2020</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span
                                                                class="tb-sub text-primary">SUB-2309232</span>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="tb-sub tb-amount">4,596.75
                                                                <span>USD</span></span></div>
                                                        <div class="nk-tb-col"><span
                                                                class="badge badge-dot badge-dot-xs text-success">Paid</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown"><a
                                                                    class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col"><span class="tb-lead"><a
                                                                    href="#">#95812</a></span></div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-sm bg-warning">
                                                                    <img src="../images/avatar/b-sm.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="user-name"><span class="tb-lead">Blanca
                                                                        Schultz</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md"><span
                                                                class="tb-sub">02/01/2020</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span
                                                                class="tb-sub text-primary">SUB-2309143</span>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="tb-sub tb-amount">199.99
                                                                <span>USD</span></span></div>
                                                        <div class="nk-tb-col"><span
                                                                class="badge badge-dot badge-dot-xs text-success">Paid</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown"><a
                                                                    class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col"><span class="tb-lead"><a
                                                                    href="#">#95256</a></span></div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-sm bg-purple">
                                                                    <span>NL</span>
                                                                </div>
                                                                <div class="user-name"><span class="tb-lead">Naomi
                                                                        Lawrence</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md"><span
                                                                class="tb-sub">01/29/2020</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span
                                                                class="tb-sub text-primary">SUB-2305684</span>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="tb-sub tb-amount">1099.99
                                                                <span>USD</span></span></div>
                                                        <div class="nk-tb-col"><span
                                                                class="badge badge-dot badge-dot-xs text-success">Paid</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown"><a
                                                                    class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col"><span class="tb-lead"><a
                                                                    href="#">#95135</a></span></div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-sm bg-success">
                                                                    <span>CH</span>
                                                                </div>
                                                                <div class="user-name"><span class="tb-lead">Cassandra
                                                                        Hogan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md"><span
                                                                class="tb-sub">01/29/2020</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span
                                                                class="tb-sub text-primary">SUB-2305564</span>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="tb-sub tb-amount">1099.99
                                                                <span>USD</span></span></div>
                                                        <div class="nk-tb-col"><span
                                                                class="badge badge-dot badge-dot-xs text-warning">Due</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown"><a
                                                                    class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Notify</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-inner-sm border-top text-center d-sm-none"><a
                                                    href="#" class="btn btn-link btn-block">See
                                                    History</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <ul class="nk-sticky-toolbar">


        <li class="demo-settings"><a class="toggle tipinfo" data-target="settingPanel" href="#"
                title="Theme Settings"><em class="icon ni ni-setting-alt">
                </em>
            </a>
        </li>
    </ul>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right" data-content="settingPanel" data-toggle-overlay="true"
        data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Preview Settings</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="settingPanel"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-opt-panel" data-simplebar>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Direction Change</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="dir" data-update="ltr"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">LTR Mode</span></span></div>
                    <div class="nk-opt-item only-text" data-key="dir" data-update="rtl"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">RTL Mode</span></span></div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Main UI Style</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="style" data-update="ui-default"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">Default</span></span></div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-softy"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">Softy</span></span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-aside">
                <div class="nk-opt-set-title">Sidebar Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item" data-key="aside" data-update="is-light"><span
                            class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span
                            class="nk-opt-item-name">White</span></div>
                    <div class="nk-opt-item" data-key="aside" data-update="is-default"><span
                            class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span
                            class="nk-opt-item-name">Light</span></div>
                    <div class="nk-opt-item active" data-key="aside" data-update="is-dark"><span
                            class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                            class="nk-opt-item-name">Dark</span></div>
                    <div class="nk-opt-item" data-key="aside" data-update="is-theme"><span
                            class="nk-opt-item-bg"><span class="bg-theme"></span></span><span
                            class="nk-opt-item-name">Theme</span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-aside-nav">
                <div class="nk-opt-set-title">Nav Sidebar Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item" data-key="navside" data-update="is-light"><span
                            class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span
                            class="nk-opt-item-name">White</span></div>
                    <div class="nk-opt-item" data-key="navside" data-update="is-default"><span
                            class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span
                            class="nk-opt-item-name">Light</span></div>
                    <div class="nk-opt-item active" data-key="navside" data-update="is-dark"><span
                            class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                            class="nk-opt-item-name">Dark</span></div>
                    <div class="nk-opt-item" data-key="navside" data-update="is-theme"><span
                            class="nk-opt-item-bg"><span class="bg-theme"></span></span><span
                            class="nk-opt-item-name">Theme</span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-skin">
                <div class="nk-opt-set-title">Primary Skin</div>
                <div class="nk-opt-list">
                    <div class="nk-opt-item active" data-key="skin" data-update="default"><span
                            class="nk-opt-item-bg"><span class="skin-default"></span></span><span
                            class="nk-opt-item-name">Default</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="bluelite"><span
                            class="nk-opt-item-bg"><span class="skin-bluelite"></span></span><span
                            class="nk-opt-item-name">Blue Light</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="egyptian"><span
                            class="nk-opt-item-bg"><span class="skin-egyptian"></span></span><span
                            class="nk-opt-item-name">Egyptian</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="purple"><span class="nk-opt-item-bg"><span
                                class="skin-purple"></span></span><span class="nk-opt-item-name">Purple</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="blue"><span class="nk-opt-item-bg"><span
                                class="skin-blue"></span></span><span class="nk-opt-item-name">Blue</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="red"><span class="nk-opt-item-bg"><span
                                class="skin-red"></span></span><span class="nk-opt-item-name">Red</span></div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Skin Mode</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item active" data-key="mode" data-update="light-mode"><span
                            class="nk-opt-item-bg is-light"><span class="theme-light"></span></span><span
                            class="nk-opt-item-name">Light Skin</span></div>
                    <div class="nk-opt-item" data-key="mode" data-update="dark-mode"><span
                            class="nk-opt-item-bg"><span class="theme-dark"></span></span><span
                            class="nk-opt-item-name">Dark Skin</span></div>
                </div>
            </div>
            <div class="nk-opt-reset"><a href="#" class="reset-opt-setting">Reset Setting</a></div>
        </div>
    </div>
    </a>
    <script src="js/bundlee5ca.js?ver=3.2.3"></script>
    <script src="js/scriptse5ca.js?ver=3.2.3"></script>
    <script src="js/demo-settingse5ca.js?ver=3.2.3"></script>
    <script src="js/charts/gd-pharmacye5ca.js?ver=3.2.3"></script>
</body>
<!-- Mirrored from dashlite.net/demo7/pharmacy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:08 GMT -->

</html>
