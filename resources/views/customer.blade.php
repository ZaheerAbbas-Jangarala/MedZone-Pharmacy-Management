<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo7/pharmacy/customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Customer</title>
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
                                    <h3 class="nk-block-title page-title">Customer Lists</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>You have total 17890 Customers in Pharmacy.</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content"><a href="add-customer.html"
                                        class="btn btn-icon btn-primary d-md-none"><em
                                            class="icon ni ni-plus"></em></a><a href="add-customer.html"
                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add customer</span></a></div>
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
                                                            <option value="email">Send Email</option>
                                                            <option value="delete">Delete</option>
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
                                                                                data-bs-toggle="dropdown">
                                                                                <div class="dot dot-primary">
                                                                                </div><em
                                                                                    class="icon ni ni-filter-alt"></em>
                                                                            </a>
                                                                            <div
                                                                                class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                <div class="dropdown-head"><span
                                                                                        class="sub-title dropdown-title">Filter
                                                                                        Customers</span>
                                                                                    <div class="dropdown"><a
                                                                                            href="#"
                                                                                            class="btn btn-sm btn-icon"><em
                                                                                                class="icon ni ni-more-h"></em></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="dropdown-body dropdown-body-rg">
                                                                                    <div class="row gx-6 gy-3">
                                                                                        <div class="col-6">
                                                                                            <div
                                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                                <input type="checkbox"
                                                                                                    class="custom-control-input"
                                                                                                    id="hasBalance"><label
                                                                                                    class="custom-control-label"
                                                                                                    for="hasBalance">
                                                                                                    Have
                                                                                                    Balance</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div
                                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                                <input type="checkbox"
                                                                                                    class="custom-control-input"
                                                                                                    id="hasKYC"><label
                                                                                                    class="custom-control-label"
                                                                                                    for="hasKYC">Email
                                                                                                    Verified</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div
                                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                                <input type="checkbox"
                                                                                                    class="custom-control-input"
                                                                                                    id="active"><label
                                                                                                    class="custom-control-label"
                                                                                                    for="active">Active</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div
                                                                                                class="custom-control custom-control-sm custom-checkbox">
                                                                                                <input type="checkbox"
                                                                                                    class="custom-control-input"
                                                                                                    id="inactive"><label
                                                                                                    class="custom-control-label"
                                                                                                    for="inactive">Inactive</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary">Filter</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-foot between">
                                                                                    <a class="clickable"
                                                                                        href="#">Reset
                                                                                        Filter</a><a
                                                                                        href="#">Save
                                                                                        Filter</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                        placeholder="Search by name or customer id"><button
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
                                                <div class="nk-tb-col"><span class="sub-text">Customer</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">ID</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span
                                                        class="sub-text">Address</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Purchase
                                                        Details</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Amount</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-mail"></em><span>Send
                                                                                    Email to All</span></a></li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit
                                                                                    Selected</span></a></li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                                    Seleted</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary-dim">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Abu Bin
                                                                    Ishtiyak <span
                                                                        class="dot dot-warning d-md-none ms-1"></span></span><span>info@softnio.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6985</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+811 847-4958</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Large cottage</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Omidon10mg</span></div>
                                                    <div><span>Quantity: 10pcs</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">78.55
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-warning">Inactive</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-orange"><span>AL</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Ashley
                                                                    Lawson <span
                                                                        class="dot dot-success d-md-none ms-1"></span></span><span>ashley@softnio.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6986</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+124 394-1787</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Near Roberts Lake</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Zimax50mg</span></div>
                                                    <div><span>Quantity: 12pcs</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">90.20
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-success">Active</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-info"><span>JL</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Joe
                                                                    Larson <span
                                                                        class="dot dot-success d-md-none ms-1"></span></span><span>larson@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6987</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+168 603-2320</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Uttara,sector 10</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Furosemide</span></div>
                                                    <div><span>Quantity: 1bottle</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">43.98
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-success">Active</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-danger"><span>JM</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Jane
                                                                    Montgomery <span
                                                                        class="dot dot-success d-md-none ms-1"></span></span><span>jane84@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6988</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+439 271-5360</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Dhanmondi 9/A</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Isoniazid Syrup</span></div>
                                                    <div><span>Quantity: 2bottle</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">80.26
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-success">Active</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-indigo-dim">
                                                                <span>FB</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Frances
                                                                    Burns <span
                                                                        class="dot dot-warning d-md-none ms-1"></span></span><span>frances@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6989</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+639 130-3150</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>HNo 76</span></div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Pantonix20mg</span></div>
                                                    <div><span>Quantity: 8pcs</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">120.20
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-warning">Inactive</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-pink"><span>AB</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Alan
                                                                    Butler <span
                                                                        class="dot dot-success d-md-none ms-1"></span></span><span>butler@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6990</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+963 309-1706</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Dhanmondi 15,Staff
                                                        Quater</span></div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Disopan0.mg</span></div>
                                                    <div><span>Quantity: 1boc</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">45.00
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-success">Active</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-warning-dim">
                                                                <span>VL</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Victoria
                                                                    Lynch
                                                                    <span
                                                                        class="dot dot-warning d-md-none ms-1"></span></span><span>victoria@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6991</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+811 985-4846</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Near at spiral
                                                        School</span></div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Solas10mg</span></div>
                                                    <div><span>Quantity: 5pcs</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">250.00
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-warning">Inactive</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-success"><span>PN</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Patrick
                                                                    Newman<span
                                                                        class="dot dot-success d-md-none ms-1"></span></span><span>patrick@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6992</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+942 238-4474</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Near at Gulshan
                                                        Lake</span></div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Indomet25mg</span></div>
                                                    <div><span>Quantity: 3box</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">60.35
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-success">Active</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-dark-dim"><span>JH</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Jane
                                                                    Harris <span
                                                                        class="dot dot-success d-md-none ms-1"></span></span><span>harris@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6993</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+123 447-2384</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Near at Mountain
                                                        college</span></div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Indomet25mg</span></div>
                                                    <div><span>Quantity: 3box</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">225.50
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-success">Active</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                <div class="nk-tb-col"><a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-purple"><span>EW</span>
                                                            </div>
                                                            <div class="user-info"><span class="tb-lead">Emma
                                                                    Walker <span
                                                                        class="dot dot-warning d-md-none ms-1"></span></span><span>walker@example.com</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                                <div class="nk-tb-col tb-col-md"><a href="#"><span
                                                            class="fw-medium">#P6994</span></a></div>
                                                <div class="nk-tb-col tb-col-md"><span>+463 471-7173</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span>HNo 58,Banani</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <div><span>Item: Omep20mg</span></div>
                                                    <div><span>Quantity: 4pcs</span></div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm"><span class="tb-amount">35.55
                                                        <span class="currency">USD</span></span></div>
                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-warning">Inactive</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden"><a href="#"
                                                                class="btn btn-trigger btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email"><em
                                                                    class="icon ni ni-mail-fill"></em></a></li>
                                                        <li>
                                                            <div class="drodown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                                    <div><select class="form-select form-select-sm js-select2"
                                                            data-search="on" data-dropdown="xs center">
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
    <div class="modal fade" tabindex="-1" role="dialog" id="editMedicine">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Edit Medicine</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="name">Medicine
                                        Name</label><input type="text" class="form-control" id="name"
                                        placeholder="Medicine Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="generic">Generic
                                        name</label><input type="number" class="form-control" id="generic"
                                        placeholder="Generic Name"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="sKU">SKU</label><input
                                        type="email" class="form-control" id="sKU" placeholder="SKU"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="weight">Weight</label><input
                                        type="text" class="form-control" id="weight" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label">Category</label>
                                    <div class="form-control-wrap"><select class="form-select">
                                            <option value="default_option">Select</option>
                                            <option value="option_select_category">Tablet</option>
                                            <option value="option_select_category">Syrup</option>
                                            <option value="option_select_category">Vitamin</option>
                                            <option value="option_select_category">Inhealer</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label">Manufacturer</label>
                                    <div class="form-control-wrap"><select class="form-select">
                                            <option value="default_option">Select</option>
                                            <option value="option_select_manufacturer">Healthcare</option>
                                            <option value="option_select_category">Square</option>
                                            <option value="option_select_category">lupin</option>
                                            <option value="option_select_category">Sun</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="price">Price</label><input
                                        type="number" class="form-control" id="price" placeholder="Price"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label"
                                        for="manufacturer Price">Manufacturer
                                        Price</label><input type="number" class="form-control"
                                        id="manufacturer Price" placeholder="Manufacturer Price" required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label">Stock(Box)</label>
                                    <div class="form-control-wrap number-spinner-wrap"><button
                                            class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                            data-number="minus"><em class="icon ni ni-minus"></em></button><input
                                            type="number" class="form-control number-spinner" value="0"><button
                                            class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                            data-number="plus"><em class="icon ni ni-plus"></em></button></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label">Expire Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em>
                                        </div><input type="text" class="form-control date-picker"
                                            data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li><a href="#" data-bs-dismiss="modal" class="btn btn-primary">Edit
                                            Medicine</a>
                                    </li>
                                    <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
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
                            srcset="https://dashlite.net/images/landing/demo-lms2x.jpg 2x" alt="LMS"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>LMS / Learning
                            Management
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
                            srcset="https://dashlite.net/images/landing/demo-cms2x.jpg 2x" alt="cms"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>CMS
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/crypto/index.html">
                    <div class="nk-demo-image bg-warning"><img src="../../images/landing/demo-buysell.jpg"
                            srcset="https://dashlite.net/images/landing/demo-buysell2x.jpg 2x"
                            alt="Crypto BuySell / Wallet"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo5</em><br><strong>Crypto BuySell Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/invest/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../../images/landing/demo-invest.jpg"
                            srcset="https://dashlite.net/images/landing/demo-invest2x.jpg 2x"
                            alt="HYIP / Investment">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo6</em><br><strong>HYIP /
                            Investment
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
                            srcset="https://dashlite.net/images/landing/demo-covid192x.jpg 2x"
                            alt="Covid Situation">
                    </div><span class="nk-demo-title"><em class="text-primary">Covid</em><br><strong>Coronavirus
                            Situation</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/messages.html">
                    <div class="nk-demo-image bg-success"><img src="../../images/landing/demo-messages.jpg"
                            srcset="https://dashlite.net/images/landing/demo-messages2x.jpg 2x" alt="Messages">
                    </div>
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
                            srcset="https://dashlite.net/images/landing/demo-chats2x.jpg 2x"
                            alt="Chats / Messenger">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Chats</strong></span>
                </a></div>
        </div>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right" data-content="settingPanel"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
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
                    <div class="nk-opt-item" data-key="skin" data-update="purple"><span
                            class="nk-opt-item-bg"><span class="skin-purple"></span></span><span
                            class="nk-opt-item-name">Purple</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="blue"><span
                            class="nk-opt-item-bg"><span class="skin-blue"></span></span><span
                            class="nk-opt-item-name">Blue</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="red"><span
                            class="nk-opt-item-bg"><span class="skin-red"></span></span><span
                            class="nk-opt-item-name">Red</span></div>
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
</body>
<!-- Mirrored from dashlite.net/demo7/pharmacy/customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:09 GMT -->

</html>
