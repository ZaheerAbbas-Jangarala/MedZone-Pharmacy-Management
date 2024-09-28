<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo7/pharmacy/add-medicine.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>Add Medicine</title>
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
        <div class="nk-content">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Add Medicine</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>You can add a medicine by fil these field.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <form action="{{ Route('medicine.store') }}" method="post">
                                    @csrf
                                    <div class="card-inner"
                                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label"
                                                        for="name">Medicine
                                                        Name</label><input type="text" class="form-control"
                                                        id="name" name="Medicine_Name" placeholder="Medicine Name"
                                                        required>
                                                    @error('Medicine_Name')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                            </div>
                                            {{-- <div class="col-xxl-3 col-md-4">
                                            <div class="form-group"><label class="form-label" for="generic">Generic
                                                    name</label><input type="number" class="form-control"
                                                    id="generic" placeholder="Generic Name"></div>
                                        </div> --}}
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label" for="sKU">SKU
                                                    </label><input type="email" class="form-control" name="sku"
                                                        id="sKU" placeholder="SKU">
                                                    @error('sku')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label"
                                                        for="weight">Weight</label><input type="text"
                                                        class="form-control" name="weight" id="weight"
                                                        placeholder="Eg : 50mg , 100mg">
                                                    @error('weight')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Category</label>
                                                    <div class="form-control-wrap"><select name="category"
                                                            class="form-select js-select2">
                                                            <option value="default_option">Select</option>
                                                            <option value="Tablet">Tablet</option>
                                                            <option value="Syrup">Syrup</option>
                                                            <option value="Vitamin">Vitamin</option>
                                                            <option value="Inhealer">Inhealer</option>
                                                        </select>
                                                        @error('category')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Medicine
                                                        Speciality</label>
                                                    <div class="form-control-wrap"><select name="speciality"
                                                            class="form-select js-select2">
                                                            <option value="default_option">Select</option>
                                                            <option value="option_select_manufacturer">Kideney diseases
                                                            </option>
                                                            <option value="option_select_category">Heart Disorder
                                                            </option>
                                                            <option value="option_select_category">..</option>
                                                            <option value="option_select_category">..</option>
                                                        </select>
                                                        @error('speciality')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Medicine's
                                                        Origin</label>
                                                    <div class="form-control-wrap"><select name="origin"
                                                            class="form-select js-select2">
                                                            <option value="default_option">Select</option>
                                                            <option value="option_select_category">India</option>
                                                            <option value="option_select_category">England</option>
                                                            <option value="option_select_category">Scottland</option>
                                                            <option value="option_select_category">Bangladesh</option>
                                                            <option value="option_select_category">Nepal</option>
                                                            <option value="option_select_category">China</option>
                                                        </select>
                                                        @error('origin')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Manufacturer</label>
                                                    <div class="form-control-wrap"><select name="manufacturer"
                                                            class="form-select js-select2">
                                                            <option value="default_option">Select</option>
                                                            <option value="option_select_manufacturer">Healthcare
                                                            </option>
                                                            <option value="option_select_category">Square</option>
                                                            <option value="option_select_category">lupin</option>
                                                            <option value="option_select_category">Sun</option>
                                                        </select>
                                                        @error('manufacturer')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label"
                                                        for="price">Price</label><input name="price"
                                                        type="number" class="form-control" id="price"
                                                        placeholder="Price" required>
                                                    @error('price')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label"
                                                        for="price">MRP</label><input name="mrp"
                                                        type="number" class="form-control" id="price"
                                                        placeholder="MRP" required>
                                                    @error('mrp')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label"
                                                        for="manufacturer Price">Manufacturer Price</label><input
                                                        name="manufacturer_price" type="number" class="form-control"
                                                        id="manufacturer Price" placeholder="Manufacturer Price"
                                                        required>
                                                    @error('manufacturer_price')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Stock(Box)</label>
                                                    <div class="form-control-wrap number-spinner-wrap"><button
                                                            class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                            data-number="minus"><em
                                                                class="icon ni ni-minus"></em></button><input
                                                            name="stock_box" type="number"
                                                            class="form-control number-spinner" value="0"><button
                                                            class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                            data-number="plus"><em
                                                                class="icon ni ni-plus"></em></button>
                                                        @error('stock_box')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Expire
                                                        Date</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right"><em></em></div>
                                                        <input type="date" name="expired_date"
                                                            class="form-control date-picker"
                                                            data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                        @error('expired_date')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group"><label class="form-label">Status</label>
                                                    <div class="form-control-wrap"><select name="status"
                                                            class="form-select js-select2">
                                                            <option value="default_option">select</option>
                                                            <option value="option_select_status">Available</option>
                                                            <option value="option_select_status">Not-Available</option>
                                                        </select>
                                                        @error('status')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Medicine Image</label>
                                                    <input type="file" name="image" class="form-control"
                                                        id="name" placeholder="Medicine Name" required>
                                                    @error('image')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Medicine
                                                            Description</label>
                                                        <textarea name="Medicine_description" class="form-control" id="medicin-description"
                                                            placeholder="Medicine Description..." form="usrform"></textarea>
                                                        @error('medicine_description')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group"><button type="submit"
                                                    class="btn btn-primary">Add
                                                    Medicine</button></div>
                                        </div>
                                    </div>
                                </form>
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

    <script src="../assets/js/bundlee5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/scriptse5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/demo-settingse5ca.js?ver=3.2.3"></script>
    <link rel="stylesheet" href="../assets/css/editors/quille5ca.css?ver=3.2.3">
    <script src="../assets/js/libs/editors/quille5ca.js?ver=3.2.3"></script>
    <script src="../assets/js/editorse5ca.js?ver=3.2.3"></script>
</body>
<!-- Mirrored from dashlite.net/demo7/pharmacy/add-medicine.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 16:27:09 GMT -->

</html>
