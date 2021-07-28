<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="dashboard" key="t-default">Default</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar.html" key="t-light-sidebar">Light Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html" key="t-compact-sidebar">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html" key="t-boxed-width">Boxed Width</a></li>
                                <li><a href="layouts-preloader.html" key="t-preloader">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html" key="t-colored-sidebar">Colored Sidebar</a></li>
                                <li><a href="layouts-scrollable.html" key="t-scrollable">Scrollable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Topbar light</a></li>
                                <li><a href="layouts-hori-boxed-width.html" key="t-boxed-width">Boxed width</a></li>
                                <li><a href="layouts-hori-preloader.html" key="t-preloader">Preloader</a></li>
                                <li><a href="layouts-hori-colored-header.html" key="t-colored-topbar">Colored Header</a></li>
                                <li><a href="layouts-hori-scrollable.html" key="t-scrollable">Scrollable</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


{{--                System Admin Users & Data          --}}
                <li class="menu-title" key="t-apps">System Database Tables</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shield-quarter"></i>
                        <span key="t-multi-level">Admin Records</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="adminuser" key="t-level-1-1">Admin Users</a></li>
                        <li><a href="users" key="t-level-1-1">Customers</a></li>
                        <li><a href="cities" key="t-level-1-1">Cities</a></li>
                        <li><a href="pinreqs" key="t-level-1-1">Pin Requests</a></li>
                    </ul>
                </li>
                {{--                System Admin Users & Data Ends          --}}

                {{--                Items          --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-basket"></i>
                        <span key="t-multi-level">Items</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="items" key="t-level-1-1">Items</a></li>
                        <li><a href="brands" key="t-level-1-1">Brands</a></li>
                        <li><a href="info" key="t-level-1-1">Info</a></li>
                        <li><a href="images" key="t-level-1-1">Images</a></li>
                        <li><a href="likes" key="t-level-1-1">Likes</a></li>

                    </ul>
                </li>
                {{--                Items End          --}}
                {{--                Categories         --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-duplicate"></i>
                        <span key="t-multi-level">Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="category" key="t-level-1-1">Item Category</a></li>
                        <li><a href="subcategories" key="t-level-1-1">Item Subcategory</a></li>
                    </ul>
                </li>
                {{--                Categories End          --}}

                {{--                Orders          --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cart-alt"></i>
                        <span key="t-multi-level">Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="orders" key="t-level-1-1">Orders</a></li>
                        <li><a href="orderstatus" key="t-level-1-1">Order Status</a></li>
                        <li><a href="invoice" key="t-level-1-1">Invoice Items</a></li>
                    </ul>
                </li>
                {{--                Orders End          --}}


                {{--                Inventory          --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-multi-level">Inventory</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="stock" key="t-level-1-1">Stock</a></li>
                        <li><a href="suppliers" key="t-level-1-1">Supliers</a></li>
                        <li><a href="piinvoice" key="t-level-1-1">Purchase Item Invoices</a></li>
                        <li><a href="pinvoice" key="t-level-1-1">Purchase Invoices</a></li>
                        <li><a href="rtnitem" key="t-level-1-1">Return Items</a></li>
                        <li><a href="rtninvoice" key="t-level-1-1">Return Invoices</a></li>
                    </ul>
                </li>
                {{--                Inventory End          --}}

                {{--                User Extra Search Data          --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cylinder"></i>
                        <span key="t-multi-level">Extra Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="searches" key="t-level-1-1">User Searches</a></li>
                        <li><a href="adimgs" key="t-level-1-1">Advertisment Images</a></li>

                    </ul>
                </li>
                {{--                User Extra Search Data End          --}}

                {{--                Zone Data          --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-hive"></i>
                        <span key="t-multi-level">Zone</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="zones" key="t-level-1-1">Zones</a></li>
                        <li><a href="zonearea" key="t-level-1-1">Zone Areas</a></li>
                        <li><a href="zoneinvoices" key="t-level-1-1">Zone Invoice Items</a></li>
                        <li><a href="vendorstatus" key="t-level-1-1">Vendor Include Status</a></li>
                        {{-- <li><a href="updateimages" key="t-level-1-1">Img Add update</a></li> --}}
                    </ul>
                </li>
                {{--                Zone End          --}}

                <li class="menu-title" key="t-apps">Apps</li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="apps-filemanager.html" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <span key="t-file-manager">File Manager</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                        <li><a href="ecommerce-product-detail.html" key="t-product-detail">Product Detail</a></li>
                        <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                        <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                        <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                        <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                        <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                        <li><a href="ecommerce-add-product.html" key="t-add-product">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Crypto</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.html" key="t-wallet">Wallet</a></li>
                        <li><a href="crypto-buy-sell.html" key="t-buy">Buy/Sell</a></li>
                        <li><a href="crypto-exchange.html" key="t-exchange">Exchange</a></li>
                        <li><a href="crypto-lending.html" key="t-lending">Lending</a></li>
                        <li><a href="crypto-orders.html" key="t-orders">Orders</a></li>
                        <li><a href="crypto-kyc-application.html" key="t-kyc">KYC Application</a></li>
                        <li><a href="crypto-ico-landing.html" key="t-ico">ICO Landing</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html" key="t-inbox">Inbox</a></li>
                        <li><a href="email-read.html" key="t-read-email">Read Email</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge rounded-pill badge-soft-success float-end" key="t-new">New</span>
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="invoicedetails" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                        <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                        <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                        <li><a href="projects-create.html" key="t-create-new">Create New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                        <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                        <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">User Grid</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">User List</a></li>
                        <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                        <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                        <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
