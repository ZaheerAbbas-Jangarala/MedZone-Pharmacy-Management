<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo7/pharmacy/manufacturer-ledger.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Manufacturer Ledger</title>
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
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Manufacturer Ledger</h3>
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
                                                                class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span
                                                                    class="d-none d-md-inline"></span>Filtered
                                                                By</span><em
                                                                class="dd-indc icon ni ni-chevron-right"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><span>Last 7 Days</span></a>
                                                                </li>
                                                                <li><a href="#"><span>Last 30 Days</span></a>
                                                                </li>
                                                                <li><a href="#"><span>Last 6 Month</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt"><a data-bs-toggle="modal"
                                                        href="#addManLedger"
                                                        class="btn btn-icon btn-primary d-md-none"><em
                                                            class="icon ni ni-plus"></em></a><a data-bs-toggle="modal"
                                                        href="#addManLedger"
                                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                                            class="icon ni ni-plus"></em><span>Add
                                                            Ledger</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner position-relative card-tools-toggle">
                                        <div class="card-title-group">
                                            <div class="card-tools">
                                                <div class="form-inline flex-nowrap gx-3">
                                                    <div class="form-wrap w-150px"><select
                                                            class="form-select form-select-sm js-select2"
                                                            data-search="off" data-placeholder="Bulk Action">
                                                            <option value="">Bulk Action</option>
                                                            <option value="today">Today</option>
                                                            <option value="tomorrow">Tomorrow</option>
                                                            <option value="days">Last 7 days</option>
                                                        </select></div>
                                                    <div class="btn-wrap"><span class="d-none d-md-block"><button
                                                                class="btn btn-dim btn-outline-light disabled">Apply</button></span><span
                                                            class="d-md-none"><button
                                                                class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                                    class="icon ni ni-arrow-right"></em></button></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <ul class="btn-toolbar gx-1">
                                                    <li><a href="#"
                                                            class="btn btn-icon search-toggle toggle-search"
                                                            data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li>
                                                    <li class="btn-toolbar-sep"></li>
                                                    <li>
                                                        <div class="toggle-wrap"><a href="#"
                                                                class="btn btn-icon btn-trigger toggle"
                                                                data-target="cardTools"><em
                                                                    class="icon ni ni-menu-right"></em></a>
                                                            <div class="toggle-content" data-content="cardTools">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li class="toggle-close"><a href="#"
                                                                            class="btn btn-icon btn-trigger toggle"
                                                                            data-target="cardTools"><em
                                                                                class="icon ni ni-arrow-left"></em></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="dropdown"><a href="#"
                                                                                class="btn btn-trigger btn-icon dropdown-toggle"
                                                                                data-bs-toggle="dropdown"><em
                                                                                    class="icon ni ni-setting"></em></a>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                                <ul class="link-check">
                                                                                    <li><span>Show</span></li>
                                                                                    <li class="active"><a
                                                                                            href="#">10</a></li>
                                                                                    <li><a href="#">20</a></li>
                                                                                    <li><a href="#">50</a></li>
                                                                                </ul>
                                                                                <ul class="link-check">
                                                                                    <li><span>Order</span></li>
                                                                                    <li class="active"><a
                                                                                            href="#">DESC</a>
                                                                                    </li>
                                                                                    <li><a href="#">ASC</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-search search-wrap" data-search="search">
                                            <div class="card-body">
                                                <div class="search-content"><a href="#"
                                                        class="search-back btn btn-icon toggle-search"
                                                        data-target="search"><em
                                                            class="icon ni ni-arrow-left"></em></a><input
                                                        type="text"
                                                        class="form-control border-transparent form-focus-none"
                                                        placeholder="Search by Invoice No"><button
                                                        class="search-submit btn btn-icon"><em
                                                            class="icon ni ni-search"></em></button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid"><label class="custom-control-label"
                                                            for="uid"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><span class="sub-text">Invoice No</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span
                                                        class="sub-text">Description</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Payment
                                                        Term</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Debit
                                                        (USD)</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Credit
                                                        (USD)</span></div>
                                                <div class="nk-tb-col"><span class="sub-text">Balance
                                                        (USD)</span></div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid1"><label class="custom-control-label"
                                                            for="uid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#746f5k2</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>10 Feb 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-35</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>On Delivery</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>9875</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">9875</span></div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid2"><label class="custom-control-label"
                                                            for="uid2"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#75635k9</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>07 Feb 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-36</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>After Dispatch</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>2435</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">7440</span></div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid3"><label class="custom-control-label"
                                                            for="uid3"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#546H74W</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>04 Feb 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-26</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Final Settlement</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>9874</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">17314</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid4"><label class="custom-control-label"
                                                            for="uid4"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#87X6A44</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>01 Feb 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-98</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>After Dispatch</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>4324</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">12990</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid5"><label class="custom-control-label"
                                                            for="uid5"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#986G531</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>31 Jan 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-98</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Final Settlement</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>9876</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">21886</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid6"><label class="custom-control-label"
                                                            for="uid6"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#326T4M9</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>18 Jan 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-98</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>After Dispatch</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>87534</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">109420</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid7"><label class="custom-control-label"
                                                            for="uid7"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#87Z6A44</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>15 Jan 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-71</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>On Delivery</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>9876</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">99544</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid8"><label class="custom-control-label"
                                                            for="uid8"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#746F5K2</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>08 Jan 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-67</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Final Settlement</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>6325</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">105869</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid9"><label class="custom-control-label"
                                                            for="uid9"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span
                                                            class="fw-medium">#685HFM1</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>02 Jan 2020</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-22</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>After Dispatch</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>4563</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">110432</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="uid10"><label class="custom-control-label"
                                                            for="uid10"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="#"><span class="fw-medium">
                                                            #2385L1</span></a></div>
                                                <div class="nk-tb-col tb-col-sm"><span>25 Dec 2019</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Purchase From
                                                        Manufacturer #M-27</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Final Settlement</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span>-</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>90432</span></div>
                                                <div class="nk-tb-col"><span class="tb-amount">40.432</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">Prev</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><span class="page-link"><em
                                                                class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div><select class="form-select form-select-sm" data-search="on"
                                                            data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select></div>
                                                    <div>OF 102</div>
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
    </div>
    </div>
    </div>
    <div class="modal fade" tabindex="-1" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal py-4"><em
                            class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This event data will be removed permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li><button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes,
                                    Deleteit</button></li>
                            <li><button data-bs-dismiss="modal" data-bs-toggle="modal"
                                    data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="addManufacture">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Manufacturer</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label"
                                        for="name">Company</label><input type="text" class="form-control"
                                        id="name" placeholder="Company" required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="mail">Email</label><input
                                        type="email" class="form-control" id="mail" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="phone">Phone</label><input
                                        type="number" class="form-control" id="phone" placeholder="Phone no">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label"
                                        for="balance">Balance</label><input type="number" class="form-control"
                                        id="balance" placeholder="Balance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label"
                                        for="country">Country</label><input type="text" class="form-control"
                                        id="country" placeholder="Country" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="city">City</label><input
                                        type="text" class="form-control" id="city" placeholder="City"
                                        required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="state">State</label><input
                                        type="text" class="form-control" id="state" placeholder="State"
                                        required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label">Status</label>
                                    <div class="form-control-wrap"><select class="form-select">
                                            <option value="default_option">Select</option>
                                            <option value="option_select_status">Active</option>
                                            <option value="option_select_status">Inactive</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li><a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add
                                            Manufacturer</a>
                                    </li>
                                    <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="addManLedger">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Ledger</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label">Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em>
                                        </div><input type="text" class="form-control date-picker"
                                            data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="debit">Debit</label><input
                                        type="number" class="form-control" id="debit" placeholder="Debit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="credit">Credit</label><input
                                        type="number" class="form-control" id="credit" placeholder="Credit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label"
                                        for="balance">Balance</label><input type="number" class="form-control"
                                        id="balance" placeholder="Balance" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><label class="form-label" for="bio">Description</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li><a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add
                                            Ledger</a></li>
                                    <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <ul class="nk-sticky-toolbar">
        <li class="demo-layout"><a class="toggle tipinfo" data-target="demoML" href="#"
                title="Main Demo Preview"><em class="icon ni ni-dashlite"></em></a></li>
        <li class="demo-thumb"><a class="toggle tipinfo" data-target="demoUC" href="#"
                title="Use Case Concept"><em class="icon ni ni-menu-squared"></em></a></li>
        <li class="demo-settings"><a class="toggle tipinfo" data-target="settingPanel" href="#"
                title="Demo Settings"><em class="icon ni ni-setting-alt"></em></a></li>
        <li class="demo-purchase"><a class="tipinfo" target="_blank" href="https://1.envato.market/e0y3g"
                title="Purchase"><em class="icon ni ni-cart"></em></a></li>
    </ul>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/index.html">
                    <div class="nk-demo-image bg-blue"><img class="bg-purple"
                            src="../../images/landing/layout-1d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-1d2x.jpg 2x" alt="Demo Layout 1"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 1</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo2/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../../images/landing/layout-2d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-2d2x.jpg 2x" alt="Demo Layout 2"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 2</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/index.html">
                    <div class="nk-demo-image bg-success"><img src="../../images/landing/layout-3d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-3d2x.jpg 2x" alt="Demo Layout 3"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 3</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo4/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../images/landing/layout-4d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-4d2x.jpg 2x" alt="Demo Layout 4"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 4</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/index.html">
                    <div class="nk-demo-image bg-orange"><img src="../../images/landing/layout-5d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-5d2x.jpg 2x" alt="Demo Layout 5"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 5</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../../images/landing/layout-6d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-6d2x.jpg 2x" alt="Demo Layout 6"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 6</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="../index-2.html">
                    <div class="nk-demo-image bg-teal"><img src="../../images/landing/layout-7d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-7d2x.jpg 2x" alt="Demo Layout 7"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 7</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo8/index.html">
                    <div class="nk-demo-image bg-azure"><img src="../../images/landing/layout-8d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-8d2x.jpg 2x" alt="Demo Layout 8"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 8</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo9/index.html">
                    <div class="nk-demo-image bg-pink"><img src="../../images/landing/layout-9d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-9d2x.jpg 2x" alt="Demo Layout 9"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 9</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/landing/index.html">
                    <div class="nk-demo-image bg-red"><img src="../../images/landing/main-landing.jpg"
                            srcset="https://dashlite.net/images/landing/main-landing2x.jpg 2x" alt="Landing Page">
                    </div>
                    <span class="nk-demo-title"><strong>Landing Page</strong> <span
                            class="badge badge-danger ml-1">Free</span></span>
                </a></div>
        </div>
    </div>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoUC"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Use Case Concept</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoUC"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo9/copywriter/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../images/landing/demo-ai-copywriter.jpg"
                            srcset="https://dashlite.net/images/landing/demo-ai-copywriter2x.jpg 2x"
                            alt="ai-copywriter"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo9</em><br><strong>Ai Copywriter Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="index.html">
                    <div class="nk-demo-image bg-warning"><img src="../../images/landing/demo-pharmacy.jpg"
                            srcset="https://dashlite.net/images/landing/demo-pharmacy2x.jpg 2x" alt="pharmacy"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo7</em><br><strong>Pharmacy Management
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/loan/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../../images/landing/demo-loan.jpg"
                            srcset="https://dashlite.net/images/landing/demo-loan2x.jpg 2x" alt="loan"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo5</em><br><strong>Loan Management
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo2/ecommerce/index.html">
                    <div class="nk-demo-image bg-dark"><img src="../../images/landing/demo-ecommerce.jpg"
                            srcset="https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x" alt="Ecommerce">
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>E-Commerce
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo2/lms/index.html">
                    <div class="nk-demo-image bg-danger"><img src="../../images/landing/demo-lms.jpg"
                            srcset="https://dashlite.net/images/landing/demo-lms2x.jpg 2x" alt="LMS"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>LMS / Learning Management
                            System</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/crm/index.html">
                    <div class="nk-demo-image bg-info"><img src="../../images/landing/demo-crm.jpg"
                            srcset="https://dashlite.net/images/landing/demo-crm2x.jpg 2x"
                            alt="CRM / Customer Relationship"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo1</em><br><strong>CRM / Customer Relationship
                            Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="../hospital/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../images/landing/demo-hospital.jpg"
                            srcset="https://dashlite.net/images/landing/demo-hospital2x.jpg 2x"
                            alt="Hospital Managemen"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo7</em><br><strong>Hospital Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/hotel/index.html">
                    <div class="nk-demo-image bg-pink"><img src="../../images/landing/demo-hotel.jpg"
                            srcset="https://dashlite.net/images/landing/demo-hotel2x.jpg 2x" alt="Hotel Managemen">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo1</em><br><strong>Hotel
                            Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/cms/index.html">
                    <div class="nk-demo-image bg-dark"><img src="../../images/landing/demo-cms.jpg"
                            srcset="https://dashlite.net/images/landing/demo-cms2x.jpg 2x" alt="cms"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>CMS Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/crypto/index.html">
                    <div class="nk-demo-image bg-warning"><img src="../../images/landing/demo-buysell.jpg"
                            srcset="https://dashlite.net/images/landing/demo-buysell2x.jpg 2x"
                            alt="Crypto BuySell / Wallet"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo5</em><br><strong>Crypto BuySell Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/invest/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../images/landing/demo-invest.jpg"
                            srcset="https://dashlite.net/images/landing/demo-invest2x.jpg 2x" alt="HYIP / Investment">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo6</em><br><strong>HYIP / Investment
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/file-manager.html">
                    <div class="nk-demo-image bg-purple"><img src="../../images/landing/demo-file-manager.jpg"
                            srcset="https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x"
                            alt="File Manager">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps - File
                            Manager</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo4/subscription/index.html">
                    <div class="nk-demo-image bg-primary"><img src="../../images/landing/demo-subscription.jpg"
                            srcset="https://dashlite.net/images/landing/demo-subscription2x.jpg 2x"
                            alt="SAAS / Subscription"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo4</em><br><strong>SAAS / Subscription Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/covid/index.html">
                    <div class="nk-demo-image bg-danger"><img src="../../images/landing/demo-covid19.jpg"
                            srcset="https://dashlite.net/images/landing/demo-covid192x.jpg 2x" alt="Covid Situation">
                    </div><span class="nk-demo-title"><em class="text-primary">Covid</em><br><strong>Coronavirus
                            Situation</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/messages.html">
                    <div class="nk-demo-image bg-success"><img src="../../images/landing/demo-messages.jpg"
                            srcset="https://dashlite.net/images/landing/demo-messages2x.jpg 2x" alt="Messages"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Messages</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/mailbox.html">
                    <div class="nk-demo-image bg-purple"><img src="../../images/landing/demo-inbox.jpg"
                            srcset="https://dashlite.net/images/landing/demo-inbox2x.jpg 2x" alt="Inbox"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Mailbox</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/chats.html">
                    <div class="nk-demo-image bg-purple"><img src="../../images/landing/demo-chats.jpg"
                            srcset="https://dashlite.net/images/landing/demo-chats2x.jpg 2x" alt="Chats / Messenger">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Chats</strong></span>
                </a></div>
        </div>
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
    <div class="pmo-lv pmo-dark"><a class="pmo-close" href="#"><em class="ni ni-cross"></em></a><a
            class="pmo-wrap" target="_blank" href="https://softnio.com/get-early-access/">
            <div class="pmo-text text-white">Looking for functional script for Investment Platform? Check out <em
                    class="ni ni-arrow-long-right"></em></div>
        </a></div><a class="pmo-st pmo-dark" target="_blank" href="https://softnio.com/get-early-access/">
        <div class="pmo-st-img"><img src="../../images/landing/promo-investorm.png" alt="Investorm"></div>
        <div class="pmo-st-text">Looking for Advanced <br> Investment Platform?</div>
    </a>
    <script src="../assets/js/bundlee5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/scriptse5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/demo-settingse5ca.js?ver=3.2.3"></script>
    <link rel="stylesheet" href="../assets/css/editors/quille5ca.css?ver=3.2.3">
    <script src="../assets/js/libs/editors/quille5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/editorse5ca.js?ver=3.2.3"></script>
</body>
<!-- Mirrored from dashlite.net/demo7/pharmacy/manufacturer-ledger.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:10 GMT -->

</html>
