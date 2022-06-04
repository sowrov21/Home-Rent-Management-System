<x-backend.layouts.master>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Role Management
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">change roles</span>
                    <!--end::Description--></h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244763d93048">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6244763d93048" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">


                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="txtSearch" name="txtSearch" placeholder="Type anything to search ..">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn green-soft btn-block" id="btnSubmit" name="btnSubmit"><i class="fa fa-search"></i> Preview</button>
                            </div>
                                <div class="col-md-2 exportoptions">
                                    <img id="btnExportXL" reporttype="excel" class="exportbutton" src="/Assets/images/excel.png" alt="Export as Excel" style="height:35px; cursor:pointer;">
                                    <img id="btnExportPDF" reporttype="pdf" class="exportbutton" src="/Assets/images/pdf.png" alt="Export as PDF" style="height:35px">
                                    <img id="btnExportCSV" reporttype="csv" class="exportbutton" src="/Assets/images/csv.png" alt="Export as CSV" style="height:35px">
                                </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn purple-soft btn-block" id="btnSendingMultipleOrders" name="btnSendingMultipleOrders"><i class="fa fa-search"></i> ReSend</button>
                            </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn blue-soft btn-block" id="btnPrintChallan" name="btnPrintChallan"><i class="fa fa-print"></i> Print Beat Summary</button>
                                </div>
        
        
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12" id="jqGrid-box" style="overflow-x: scroll;">
                                <div class="ui-jqgrid " id="gbox_orderList" dir="ltr" style="width: 1586px;"><div class="jqgrid-overlay ui-overlay" id="lui_orderList"></div><div class="loading row" id="load_orderList" style="display: none;">Loading...</div><div class="ui-jqgrid-view table-responsive" role="grid" id="gview_orderList" style="width: 1586px;"><div class="ui-jqgrid-titlebar ui-jqgrid-caption"><a role="link" class="ui-jqgrid-titlebar-close HeaderButton " title="Toggle Expand Collapse Grid" style="right: 0px;"><span class="ui-jqgrid-headlink glyphicon glyphicon-circle-arrow-up"></span></a><span class="ui-jqgrid-title">Order</span></div><div class="ui-jqgrid-hdiv" style="width: 1584px;"><div class="ui-jqgrid-hbox"><table class="ui-jqgrid-htable ui-common-table table table-bordered" style="width: 1568px;" role="presentation" aria-labelledby="gbox_orderList"><thead><tr class="ui-jqgrid-labels" role="row"><th id="orderList_cb" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 35px;"><div class="ui-th-div" id="jqgh_orderList_cb"><input role="checkbox" id="cb_orderList" class="cbox" type="checkbox"><span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_subgrid" role="columnheader" class="ui-th-column ui-th-ltr" style="width: 25px;"><div class="ui-th-div" id="jqgh_orderList_subgrid"><span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_id" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 150px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_id">id<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_OrderNo" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 50px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_OrderNo">OrderNo<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Distributor" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 70px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Distributor">Distributor<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_FieldForce" role="columnheader" class="ui-th-column ui-th-ltr" style="width: 141px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_FieldForce">FieldForce<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Retailer" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 131px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Retailer">Retailer<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_OrderDate" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 146px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_OrderDate">OrderDate<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Appr. Status" role="columnheader" class="ui-th-column ui-th-ltr" style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Appr. Status">Appr. Status<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Invoice" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 50px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Invoice">Deliver<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Pay_Mode" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Pay_Mode">Pay_Mode<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_GrossOrder" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 75px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_GrossOrder">Gross<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_TP Total" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 50px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_TP Total">TP Total<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_VAT" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 50px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_VAT">VAT Total<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_TotalDiscount" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 50px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_TotalDiscount">TotalDiscount<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_NetAmount" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 80px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_NetAmount">NetAmount<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Description" role="columnheader" class="ui-th-column ui-th-ltr" style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Description">Description<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Serial" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Serial">Serial<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Distance" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Distance">Distance<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Status" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Status">Status<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Approval" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 80px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Approval">Approval<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Operation" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 101px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Operation">Operation<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Edit" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 60px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Edit">Eidt<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th><th id="orderList_Print" role="columnheader" class="ui-th-column ui-th-ltr " style="width: 64px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div class="ui-th-div ui-jqgrid-sortable" id="jqgh_orderList_Print">Print<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-top"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-sort-ltr ui-disabled glyphicon glyphicon-triangle-bottom"></span></span></div></th></tr></thead></table></div></div><div class="ui-jqgrid-bdiv" style="height: 440px; width: 1584px;"><div style="position:relative;"><div></div><table id="orderList" class="NoPaddingInput ui-jqgrid-btable ui-common-table table table-bordered" tabindex="0" role="presentation" aria-multiselectable="true" aria-labelledby="gbox_orderList" style="width: 1568px;"><tbody><tr class="jqgfirstrow" role="row"><td role="gridcell" style="height:0px;width:35px;"></td><td role="gridcell" style="height:0px;width:25px;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:50px;"></td><td role="gridcell" style="height:0px;width:70px;"></td><td role="gridcell" style="height: 0px; width: 141px;"></td><td role="gridcell" style="height: 0px; width: 131px;"></td><td role="gridcell" style="height: 0px; width: 146px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height:0px;width:50px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height:0px;width:75px;"></td><td role="gridcell" style="height:0px;width:50px;"></td><td role="gridcell" style="height: 0px; width: 50px; display: none;"></td><td role="gridcell" style="height:0px;width:50px;"></td><td role="gridcell" style="height:0px;width:80px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height:0px;width:80px;"></td><td role="gridcell" style="height: 0px; width: 101px;"></td><td role="gridcell" style="height:0px;width:60px;"></td><td role="gridcell" style="height: 0px; width: 64px;"></td></tr></tbody></table></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_morderList">&nbsp;</div><div id="orderPager" class="NoPaddingInput ui-jqgrid-pager" dir="ltr" style="width: 1586px;"><div id="pg_orderPager" class="ui-pager-control" role="group"><table class="ui-pg-table ui-common-table ui-pager-table table"><tbody><tr><td id="orderPager_left" align="left"></td><td id="orderPager_center" align="center" style="white-space: pre; width: 349px;"><table class="ui-pg-table ui-common-table ui-paging-pager"><tbody><tr><td id="first_orderPager" class="ui-pg-button" title="First Page"><span class="glyphicon glyphicon-step-backward"></span></td><td id="prev_orderPager" class="ui-pg-button" title="Previous Page"><span class="glyphicon glyphicon-backward"></span></td><td class="ui-pg-button ui-disabled"><span class="ui-separator"></span></td><td id="input_orderPager" dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_orderPager"></span></td><td class="ui-pg-button ui-disabled"><span class="ui-separator"></span></td><td id="next_orderPager" class="ui-pg-button" title="Next Page"><span class="glyphicon glyphicon-forward"></span></td><td id="last_orderPager" class="ui-pg-button" title="Last Page"><span class="glyphicon glyphicon-step-forward"></span></td><td dir="ltr"><select class="ui-pg-selbox form-control" role="listbox" title="Records per Page"><option role="option" value="20" selected="selected">20</option><option role="option" value="50">50</option><option role="option" value="100">100</option></select></td></tr></tbody></table></td><td id="orderPager_right" align="right"><div dir="ltr" style="text-align:right" class="ui-paging-info"></div></td></tr></tbody></table></div></div></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

           
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

    


</x-backend.layouts.master>

