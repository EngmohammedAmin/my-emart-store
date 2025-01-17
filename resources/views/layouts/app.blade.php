<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" <?php if (str_replace('_', '-', app()->getLocale()) == 'ar' || @$_COOKIE['is_rtl'] == 'true') { ?> dir="rtl" <?php } ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-light-icon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <?php if (str_replace('_', '-', app()->getLocale()) == 'ar' || @$_COOKIE['is_rtl'] == 'true') { ?>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <?php } ?>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <?php if (str_replace('_', '-', app()->getLocale()) == 'ar' || @$_COOKIE['is_rtl'] == 'true') { ?>
    <link href="{{ asset('css/style_rtl.css') }}" rel="stylesheet">
    <?php } ?>
    <link href="{{ asset('css/icons/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

    <!-- @yield('style') -->
    <?php if (isset($_COOKIE['store_panel_color'])) { ?>
    <style type="text/css">
        .topbar {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .sidebar-nav ul li a {
            border-bottom: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .sidebar-nav ul li a:hover i {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .vendor_payout_create-inner fieldset legend {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        a {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        a:hover,
        a:focus {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        a.link:hover,
        a.link:focus {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        html body blockquote {
            border-left: 5px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .text-warning {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?> !important;
        }

        .text-info {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?> !important;
        }

        .sidebar-nav ul li a:hover {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .btn-primary {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
            border: 1px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .sidebar-nav>ul>li.active>a {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
            border-left: 3px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .sidebar-nav>ul>li.active>a i {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .bg-info {
            background-color: <?php echo $_COOKIE['store_panel_color'];
            ?> !important;
        }

        .bellow-text ul li>span {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>
        }

        .table tr td.redirecttopage {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>
        }

        ul.rating {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        nav-link.active {
            background-color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .nav-tabs.card-header-tabs .nav-link:hover {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #fff;
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .btn-warning,
        .btn-warning.disabled {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
            border: 1px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
            box-shadow: none;
        }

        .payment-top-tab .nav-tabs.card-header-tabs .nav-link.active,
        .payment-top-tab .nav-tabs.card-header-tabs .nav-link:hover {
            border-color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .nav-tabs.card-header-tabs .nav-link span.badge-success {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .nav-tabs.card-header-tabs .nav-link.active span.badge-success,
        .nav-tabs.card-header-tabs .nav-link:hover span.badge-success,
        .sidebar-nav ul li a.active,
        .sidebar-nav ul li a.active:hover,
        .sidebar-nav ul li.active a.has-arrow:hover,
        .topbar ul.dropdown-user li a:hover {
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .sidebar-nav ul li a.has-arrow:hover::after,
        .sidebar-nav .active>.has-arrow::after,
        .sidebar-nav li>.has-arrow.active::after,
        .sidebar-nav .has-arrow[aria-expanded="true"]::after,
        .sidebar-nav ul li a:hover {
            border-color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        [type="checkbox"]:checked+label::before {
            border-right: 2px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
            border-bottom: 2px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .btn-primary:hover,
        .btn-primary.disabled:hover {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
            border: 1px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .btn-primary.active,
        .btn-primary:active,
        .btn-primary:focus,
        .btn-primary.disabled.active,
        .btn-primary.disabled:active,
        .btn-primary.disabled:focus,
        .btn-primary.active.focus,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .btn-primary.focus:active,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .open>.dropdown-toggle.btn-primary.focus,
        .open>.dropdown-toggle.btn-primary:focus,
        .open>.dropdown-toggle.btn-primary:hover,
        .btn-primary.focus,
        .btn-primary:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus,
        .btn-warning:hover,
        .btn-warning:hover,
        .btn-warning.disabled:hover,
        .btn-warning.active.focus,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .btn-warning.focus:active,
        .btn-warning:active:focus,
        .btn-warning:active:hover,
        .open>.dropdown-toggle.btn-warning.focus,
        .open>.dropdown-toggle.btn-warning:focus,
        .open>.dropdown-toggle.btn-warning:hover,
        .btn-warning.focus,
        .btn-warning:focus {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
            border-color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
            box-shadow: 0 0 0 0.2rem<?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .language-options select option,
        .pagination>li>a.page-link:hover {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .nav-tabs.card-header-tabs .active.nav-item .nav-link {
            background: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }

        .print-btn button {
            border: 2px solid<?php echo $_COOKIE['store_panel_color'];
            ?>;
            color: <?php echo $_COOKIE['store_panel_color'];
            ?>;
        }
    </style>
    <?php } ?>

    <?php $id = Auth::user()->getvendorId(); ?>
    <script type="text/javascript">
        var cuser_id = '<?php echo $id; ?>';
    </script>

</head>

<body>

    <div id="app" class="fix-header fix-sidebar card-no-border">

        <div id="main-wrapper">

            <header class="topbar">

                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    @include('layouts.header')
                </nav>

            </header>

            <aside class="left-sidebar ">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar bg-dark">
                    @include('layouts.menu')
                </div>
                <!-- End Sidebar scroll-->
            </aside>
        </div>


        <main class="py-4">
            @yield('content')
        </main>
        <div class="modal fade" id="notification_order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title order_subject" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6><span id="auth_accept_name" class="order_message"></span></h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"><a href="{{ url('orders') }}"
                                id="notification_url">Go</a></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="notification_book_table_order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title dinein_order_subject" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6><span id="auth_accept_name_book_table" class="dinein_order_msg"></span></h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"><a href="{{ url('booktable') }}"
                                id="notification_book_table_url">Go</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="notification_accepted_order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title driver_accepted_subject" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6><span id="np_accept_name" class="driver_accepted_msg"></span></h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"><a href="{{ url('orders') }}"
                                id="notification_accepted_a">Go</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>

    <script type="text/javascript">
        jQuery(window).scroll(function() {
            var scroll = jQuery(window).scrollTop();
            if (scroll <= 60) {
                jQuery("body").removeClass("sticky");
            } else {
                jQuery("body").addClass("sticky");
            }
        });
    </script>

    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-database.js"></script>
    <script src="https://unpkg.com/geofirestore/dist/geofirestore.js"></script>
    <script src="https://cdn.firebase.com/libs/geofire/5.0.1/geofire.min.js"></script>
    <script src="{{ asset('js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>

    @yield('scripts')

    <script type="text/javascript">
        var route1 = '{{ route('orders.edit', ':id') }}';
        var booktable = '{{ route('booktable.edit', ':id') }}';

        var languages_list_main = [];
        var database = firebase.firestore();

        var version = database.collection('settings').doc("Version");

        version.get().then(async function(snapshots) {
            var version_data = snapshots.data();

            if (version_data == undefined) {
                database.collection('settings').doc('Version').set({});
            }
            try {

                $('.web_version').html("V:" + version_data.web_version);

            } catch (error) {

            }

        });

        var section_id = '';
        var service_type = '';

        database.collection('users').doc(cuser_id).get().then(async function(usersnapshots) {
            var userData = usersnapshots.data();
            var username = userData.firstName + ' ' + userData.lastName;
            $('#username').text(username);

            if (userData.hasOwnProperty('profilePictureURL') && userData.profilePictureURL != "") {
                $('.userimage').attr('src', userData.profilePictureURL);

            }

            if (userData.hasOwnProperty('section_id')) {
                section_id = userData.section_id;

                service_type = await getSectionServiceType(section_id);
            }
        });

        async function getSectionServiceType(section_id) {
            var sectionsRef = database.collection('sections').where('id', '==', section_id);

            sectionsRef.get().then(async function(snapshots) {
                var datas = snapshots.docs[0].data();

                service_type = datas.serviceType;

            });
        }

        var orderPlacedSubject = '';
        var orderPlacedMsg = '';
        var dineInPlacedSubject = '';
        var dineInPlacedMsg = '';
        var driverAcceptedMsg = '';
        var driverAcceptedSubject = '';
        var scheduleOrderPlacedSubject = '';
        var scheduleOrderPlacedMsg = '';
        var storeOrderCompletedSubject = '';
        var storeOrderCompletedMsg = '';
        var storeOrderAcceptedSubject = '';
        var storeOrderAcceptedMsg = '';

        var storeOrderInTransitSubject = "";
        var storeOrderInTransitMsg = "";

        database.collection('dynamic_notification').get().then(async function(snapshot) {
            if (snapshot.docs.length > 0) {
                snapshot.docs.map(async (listval) => {
                    val = listval.data();

                    if (val.type == "dinein_placed") {

                        dineInPlacedSubject = val.subject;
                        dineInPlacedMsg = val.message;

                    } else if (val.type == "order_placed") {

                        orderPlacedSubject = val.subject;
                        orderPlacedMsg = val.message;

                    } else if (val.type == "driver_accepted") {

                        driverAcceptedSubject = val.subject;
                        driverAcceptedMsg = val.message;

                    } else if (val.type == "schedule_order") {

                        scheduleOrderPlacedSubject = val.subject;
                        scheduleOrderPlacedMsg = val.message;
                    } else if (val.type == "store_completed") {
                        storeOrderCompletedSubject = val.subject;
                        storeOrderCompletedMsg = val.message;

                    } else if (val.type == "store_accepted") {
                        storeOrderAcceptedSubject = val.subject;
                        storeOrderAcceptedMsg = val.message;

                    } else if (val.type == "store_intransit") {
                        storeOrderInTransitSubject = val.subject;
                        storeOrderInTransitMsg = val.message;

                    }


                });
            }
        });


        var pageloadded = 0;
        database.collection('vendor_orders').where('vendor.author', "==", cuser_id).onSnapshot(function(doc) {
            if (pageloadded) {
                doc.docChanges().forEach(function(change) {
                    val = change.doc.data();
                    if (section_id == val.section_id) {
                        if (change.type == "added") {
                            if (val.status == "Order Placed") {

                                if (val.scheduleTime != undefined && val.scheduleTime != null && val
                                    .scheduleTime != '') {
                                    $('.order_subject').text(scheduleOrderPlacedSubject);
                                    $('.order_message').text(scheduleOrderPlacedMsg);
                                } else {
                                    $('.order_subject').text(orderPlacedSubject);
                                    $('.order_message').text(orderPlacedMsg);
                                }
                                if (route1) {
                                    jQuery("#notification_url").attr("href", route1.replace(':id', val.id));
                                }
                                jQuery("#notification_order").modal('show');

                            }
                        } else if (change.type == "modified") {

                            if (val.status == "Order Placed") {

                                if (!val.hasOwnProperty('estimatedTimeToPrepare')) {

                                    if (route1) {
                                        jQuery("#notification_url").attr("href", route1.replace(':id', val
                                            .id));
                                    }
                                    if (val.scheduleTime != undefined && val.scheduleTime != null && val
                                        .scheduleTime != '') {
                                        $('.order_subject').text(scheduleOrderPlacedSubject);
                                        $('.order_message').text(scheduleOrderPlacedMsg);
                                    } else {
                                        $('.order_subject').text(orderPlacedSubject);
                                        $('.order_message').text(orderPlacedMsg);
                                    }
                                    jQuery("#notification_order").modal('show');
                                }

                            } else if (val.status == "Driver Accepted") {
                                $('.driver_accepted_subject').text(driverAcceptedSubject);
                                $('.driver_accepted_msg').text(driverAcceptedMsg);
                                if (route1) {
                                    jQuery("#notification_accepted_a").attr("href", route1.replace(':id',
                                        val.id));
                                }
                                jQuery("#notification_accepted_order").modal('show');
                            }
                        }
                    }
                });
            } else {
                pageloadded = 1;
            }
        });

        var pageloadded_book = 0;
        console.log('pageloadded_book before = '+ pageloadded_book);
        database.collection('booked_table').where('vendor.author', "==", cuser_id).onSnapshot(function(doc) {
            console.log('pageloadded_book = '+ pageloadded_book);
            if (pageloadded_book) {
                doc.docChanges().forEach(function(change) {
                    val = change.doc.data();
                    if (change.type == "added") {
                        if (val.status == "Order Placed") {

                            if (booktable) {
                                jQuery("#notification_book_table_url").attr("href", booktable.replace(':id',
                                    val.id));
                            }
                            $('.dinein_order_subject').text(dineInPlacedSubject);
                            $('.dinein_order_msg').text(dineInPlacedMsg);
                            jQuery("#notification_book_table_order").modal('show');
                        }
                    }

                });
            } else {
                pageloadded_book = 1;
            }
        });


        var langcount = 0;
        var languages_list = database.collection('settings').doc('languages');
        languages_list.get().then(async function(snapshotslang) {
            snapshotslang = snapshotslang.data();
            if (snapshotslang != undefined) {
                snapshotslang = snapshotslang.list;
                languages_list_main = snapshotslang;
                snapshotslang.forEach((data) => {
                    if (data.isActive == true) {
                        langcount++;
                        $('#language_dropdown').append($("<option></option>").attr("value", data.slug)
                            .text(data.title));
                    }
                });
                if (langcount > 1) {
                    $("#language_dropdown_box").css('visibility', 'visible');
                }
                <?php if (session()->get('locale')) { ?>
                $("#language_dropdown").val("<?php echo session()->get('locale'); ?>");
                <?php } ?>

            }
        });

        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            var slug = $(this).val();
            languages_list_main.forEach((data) => {
                if (slug == data.slug) {
                    if (data.is_rtl == undefined) {
                        setCookie('is_rtl', 'false', 365);
                    } else {

                        setCookie('is_rtl', data.is_rtl.toString(), 365);
                    }
                    window.location.href = url + "?lang=" + slug;
                }
            });
        });

        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
    </script>
</body>

</html>
