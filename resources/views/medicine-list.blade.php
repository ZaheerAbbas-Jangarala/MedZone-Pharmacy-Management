<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo7/pharmacy/medicine-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Medicine List</title>
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
                                    <h3 class="nk-block-title page-title">Medicine</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Here is the medicine list.</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                            class="btn btn-icon btn-trigger toggle-expand me-n1"
                                            data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right"><em
                                                                class="icon ni ni-search"></em></div><input
                                                            type="text" class="form-control" id="default-04"
                                                            placeholder="Quick search by name">
                                                    </div>
                                                </li>
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
                                                                <li><a href="#"><span>Alphabetically,
                                                                            A-Z</span></a></li>
                                                                <li><a href="#"><span>Alphabetically,
                                                                            Z-A</span></a></li>
                                                                <li><a href="#"><span>Best Selling</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt"><a href="add-medicine.html"
                                                        class="btn btn-icon btn-primary d-md-none"><em
                                                            class="icon ni ni-plus"></em></a><a href="add-medicine.html"
                                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                                            class="icon ni ni-plus"></em><span>Add
                                                            Medicine</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner p-0" style="text-align: center">
                                        <div class="nk-tb-list">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="pid"><label class="custom-control-label"
                                                            for="pid"></label>
                                                    </div>
                                                </div>

                                                <div class="nk-tb-col"><span>Name</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>SKU</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>Weight</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Category</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>Speciality</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>Medicine Origin</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Manufacturer</span>
                                                </div>
                                                <div class="nk-tb-col"><span>Price</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>MRP</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Manufacturer
                                                        Price</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Stock(Box)</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Expire Date</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg"><span>Image</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li class="me-n1">
                                                            <div class="dropdown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="manufacturer.html"><em
                                                                                    class="icon ni ni-home-fill"></em>Manufacturer</span></a>
                                                                        </li>
                                                                        <li><a href="medicine-details.html"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#editMedicine"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit
                                                                                    Selected</span></a></li>
                                                                        <li>
                                                                            <a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                                    Selected</span></a>
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
                                                            id="pid1"><label class="custom-control-label"
                                                            for="pid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><a href="medicine-details.html"><span
                                                            class=""><span class="title">
                                                                <h6>Zimax</h6>
                                                            </span></span></a></div>
                                                <div class="nk-tb-col tb-col-lg"><span>100mg</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>Tablet</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Heart Disorder</span></div>
                                                <div style="text-align: center;" class="nk-tb-col"><span>India</span>
                                                </div>
                                                <div class="nk-tb-col"><span class="tb-amount">95.50 <span
                                                            class="currency">Rs</span></span></div>

                                                <div class="nk-tb-col tb-col-md"><span class="tb-amount">100<span
                                                            class="currency"> Rs</span></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span
                                                        class="tb-date">19/12/2020</span></div>
                                                <div style="text-align: center;" class="nk-tb-col tb-col-md"><span
                                                        class="tb-status">5
                                                    </span></span></div>

                                                <div class="nk-tb-col tb-col-md"><span
                                                        class="tb-status text-primary">Available</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="tb-status"><img
                                                            style="height: 40px; width: 40px"
                                                            src="./images/jsTree/40px-dark.png" alt=""></span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li class="me-n1">
                                                            <div class="dropdown"><a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="manufacturer.html"><em
                                                                                    class="icon ni ni-home-fill"></em>Manufacturer</span></a>
                                                                        </li>
                                                                        <li><a href="medicine-details.html"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#editMedicine"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit
                                                                                </span></a></li>
                                                                        <li><a data-bs-toggle="modal"
                                                                                href="#modalDelete"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                                </span></a></li>
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
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-left"></em></a></li>
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
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-right"></em></a></li>
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
    <script src="../assets/js/bundlee5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/scriptse5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/demo-settingse5ca.js?ver=3.2.3"></script>
</body>
<!-- Mirrored from dashlite.net/demo7/pharmacy/medicine-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:09 GMT -->

</html>
