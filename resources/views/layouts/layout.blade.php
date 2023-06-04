<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="light">
<head>
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=G-Q8L9BMPG99"></script>
    <script>window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-Q8L9BMPG99');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('assets/build/styles/ltr-core.css')}}" rel="stylesheet">
    <link href="{{asset('assets/build/styles/ltr-vendor.css')}}" rel="stylesheet">
    <link href="{{asset('assets/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <title>VoiceX Call Center | Message Templates</title></head>
<body class="preload-active aside-active aside-mobile-minimized aside-desktop-maximized">
<div class="preload">
    <div class="preload-dialog">
        <div class="spinner-border text-primary preload-spinner"></div>
    </div>
</div>
<div class="holder">
    <div class="aside">
        <div class="aside-header"><h3 class="aside-title">VoiceX CRM</h3>
            <div class="aside-addon">
                <button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside"><i
                        class="fa fa-times aside-icon-minimize"></i> <i class="fa fa-thumbtack aside-icon-maximize"></i>
                </button>
            </div>
        </div>
        <div class="aside-body" data-simplebar data-simplebar-direction="ltr">
            <div class="menu">
                <div class="menu-item">
                    <a href="{{route('dashboard.index')}}" class="menu-item-link {{ $currentUri == '/' ? 'active' : '' }} ">
                        <div class="menu-item-icon"><i class="fa fa-desktop"></i></div>
                        <span class="menu-item-text">Dashboard</span>
                    </a>
                </div>
                <div class="menu-section">
                    <div class="menu-section-icon"><i class="fa fa-ellipsis-h"></i></div>
                    <h2 class="menu-section-text">Menu CRM</h2></div>
                <div class="menu-item">
                    <a href="{{route('recordings.index')}}" class="menu-item-link {{ $currentUri == 'recordings' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-phone"></i></div>
                        <span class="menu-item-text">Recordings</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('numbers.index')}}" class="menu-item-link {{ $currentUri == 'numbers' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-bars"></i></div>
                        <span class="menu-item-text">Numbers</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('projects.index')}}" class="menu-item-link {{ $currentUri == 'projects' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-book"></i></div>
                        <span class="menu-item-text">Projects</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('scenarios.index')}}" class="menu-item-link {{ $currentUri == 'scenarios' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-file-text"></i></div>
                        <span class="menu-item-text">Scenarios</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('fax.index')}}" class="menu-item-link {{ $currentUri == 'fax' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-fax"></i></div>
                        <span class="menu-item-text">Fax</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('statuses.index')}}" class="menu-item-link {{ $currentUri == 'statuses' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-map-marker"></i></div>
                        <span class="menu-item-text">Statuses</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('helpdesk.index')}}" class="menu-item-link {{ $currentUri == 'helpdesk' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-microphone"></i></div>
                        <span class="menu-item-text">Helpdesk</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('alerts.index')}}" class="menu-item-link {{ $currentUri == 'alerts' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <span class="menu-item-text">Alerts</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('billing.index')}}" class="menu-item-link {{ $currentUri == 'billing' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-usd"></i></div>
                        <span class="menu-item-text">Billing</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('online.index')}}" class="menu-item-link {{ $currentUri == 'online' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-circle"></i></div>
                        <span class="menu-item-text">Online</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'stats' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-signal"></i></div>
                        <span class="menu-item-text">Stats</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('operators.index')}}" class="menu-item-link {{ $currentUri == 'operators' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-users"></i></div>
                        <span class="menu-item-text">Operators</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'sms' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa fa-comments"></i></div>
                        <span class="menu-item-text">Sms</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'wharsapp' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa-brands fa-whatsapp"></i></div>
                        <span class="menu-item-text">Whatsapp</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('clients.index')}}" class="menu-item-link {{ $currentUri == 'clients' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa-solid fa-address-book"></i></div>
                        <span class="menu-item-text">Clients</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'templates' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa-solid fa-file-contract"></i></div>
                        <span class="menu-item-text">Templates</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'pauses' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa-solid fa-mug-hot"></i></div>
                        <span class="menu-item-text">Pauses</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'beintouch' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa-solid fa-fingerprint"></i></div>
                        <span class="menu-item-text">Be in Touch</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="!#" class="menu-item-link {{ $currentUri == 'delivery' ? 'active' : '' }}">
                        <div class="menu-item-icon"><i class="fa-solid fa-truck"></i></div>
                        <span class="menu-item-text">Delivery</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="header">
            <div class="sticky-header" id="sticky-header-desktop">
                <div class="header-holder header-holder-desktop">
                    <div class="header-container container-fluid g-5">
                        <div class="header-wrap header-wrap-block justify-content-start">
                            <div class="dropdown d-inline">
                                <button class="btn btn-primary btn-wider" data-bs-toggle="dropdown">Apps</button>
                                <div class="dropdown-menu dropdown-menu-start dropdown-menu-animated"><a
                                        href="index.html#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-boxes"></i></div>
                                        <span class="dropdown-content">Inventory Manager</span>
                                        <div class="dropdown-addon"><span class="badge badge-warning rounded-pill">20</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-submenu"><a href="index.html#" class="dropdown-item">
                                            <div class="dropdown-icon"><i class="fa fa-project-diagram"></i></div>
                                            <span class="dropdown-content">Project manager</span>
                                            <div class="dropdown-addon"><i class="caret"></i></div>
                                        </a>
                                        <div class="dropdown-submenu-menu dropdown-submenu-end"><a href="index.html#"
                                                                                                   class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Create project</span> </a><a href="index.html#"
                                                                                                          class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Delete project</span> </a><a href="index.html#"
                                                                                                          class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Ongoing project</span> </a><a href="index.html#"
                                                                                                           class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span class="dropdown-content">Completed project</span>
                                            </a><a href="index.html#" class="dropdown-item"><i class="dropdown-bullet"></i>
                                                <span class="dropdown-content">Urgent project</span></a></div>
                                    </div>
                                    <div class="dropdown-submenu"><a href="index.html#" class="dropdown-item">
                                            <div class="dropdown-icon"><i class="fa fa-tasks"></i></div>
                                            <span class="dropdown-content">Task manager</span>
                                            <div class="dropdown-addon"><i class="caret"></i></div>
                                        </a>
                                        <div class="dropdown-submenu-menu dropdown-submenu-end"><a href="index.html#"
                                                                                                   class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span class="dropdown-content">Show task</span>
                                            </a><a href="index.html#" class="dropdown-item"><i class="dropdown-bullet"></i>
                                                <span class="dropdown-content">Assign task</span> </a><a href="index.html#"
                                                                                                         class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Assign member</span> </a><a href="index.html#"
                                                                                                         class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Completed task</span> </a><a href="index.html#"
                                                                                                          class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Urgent task</span></a></div>
                                    </div>
                                    <a href="index.html#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-dollar-sign"></i></div>
                                        <span class="dropdown-content">Invoice</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a href="index.html#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-user-cog"></i></div>
                                        <span class="dropdown-content">My Account</span></a></div>
                            </div>
                            <div class="dropdown d-inline">
                                <button class="btn btn-flat-primary btn-wider ms-2" data-bs-toggle="dropdown">Features
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-start dropdown-menu-wide dropdown-menu-animated overflow-hidden">
                                    <div class="dropdown-row">
                                        <div
                                            class="dropdown-col d-flex flex-column align-items-start justify-content-center bg-primary text-white">
                                            <h2 class="font-weight-bolder">Welcome back!</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
                                                commodi hic qui aspernatur doloremque quos tempora placeat culpa illum,
                                                voluptatibus delectus provident cumque aliquid enim, laborum aliquam.
                                                Quod, perferendis unde.</p><a href="pages/login/login-1.html"
                                                                              class="btn btn-light btn-wider">Login</a>
                                        </div>
                                        <div class="dropdown-col"><h4 class="dropdown-header">Features</h4>
                                            <div class="grid-nav grid-nav-action">
                                                <div class="grid-nav-row"><a href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-window-restore"></i>
                                                        </div>
                                                        <span class="grid-nav-content">Dashboard</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-clipboard"></i></div>
                                                        <span class="grid-nav-content">TODO List</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-question-circle"></i>
                                                        </div>
                                                        <span class="grid-nav-content">Help Center</span></a></div>
                                                <div class="grid-nav-row"><a href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-images"></i></div>
                                                        <span class="grid-nav-content">Galery</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-chart-bar"></i></div>
                                                        <span class="grid-nav-content">Scrumboard</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-bookmark"></i></div>
                                                        <span class="grid-nav-content">Docs</span></a></div>
                                            </div>
                                        </div>
                                        <div class="dropdown-col border-start"><h4 class="dropdown-header">Tools</h4><a
                                                href="index.html#" class="dropdown-item"><i class="dropdown-bullet"></i>
                                                <span class="dropdown-content">Components</span> </a><a href="index.html#"
                                                                                                        class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Form Wizard</span> </a><a href="index.html#"
                                                                                                       class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Documentation</span> </a><a href="index.html#"
                                                                                                         class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span
                                                    class="dropdown-content">Knowledge Base</span> </a><a href="index.html#"
                                                                                                          class="dropdown-item"><i
                                                    class="dropdown-bullet"></i> <span class="dropdown-content">Inventory Manager</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-wrap hstack gap-2">
                            <div class="dropdown">
                                <button class="btn btn-flat-primary btn-icon" data-bs-toggle="dropdown"><i
                                        class="far fa-bell"></i>
                                    <div class="btn-marker"><i class="marker marker-dot text-primary"></i></div>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-wide dropdown-menu-animated overflow-hidden py-0">
                                    <div class="portlet border-0 portlet-scroll">
                                        <div class="portlet-header bg-info rounded-0">
                                            <div class="portlet-icon text-white"><i class="far fa-bell"></i></div>
                                            <h3 class="portlet-title text-white">Notification</h3>
                                            <div class="portlet-addon"><span
                                                    class="badge badge-label-light fs-6">9+</span></div>
                                        </div>
                                        <div class="portlet-body p-0 rounded-0" data-toggle="simplebar">
                                            <div class="rich-list rich-list-action"><a href="index.html#"
                                                                                       class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-info">
                                                            <div class="avatar-display"><i class="fa fa-file-invoice"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">New report
                                                            has been received</h4><span
                                                            class="rich-list-subtitle">2 min ago</span></div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a><a href="index.html#" class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-success">
                                                            <div class="avatar-display"><i
                                                                    class="fa fa-shopping-basket"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">Last order
                                                            was completed</h4><span class="rich-list-subtitle">1 hrs ago</span>
                                                    </div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a><a href="index.html#" class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-danger">
                                                            <div class="avatar-display"><i class="fa fa-users"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">Company
                                                            meeting canceled</h4><span
                                                            class="rich-list-subtitle">5 hrs ago</span></div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a><a href="index.html#" class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-warning">
                                                            <div class="avatar-display"><i class="fa fa-paper-plane"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">New feedback
                                                            received</h4><span class="rich-list-subtitle">6 hrs ago</span></div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a><a href="index.html#" class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-primary">
                                                            <div class="avatar-display"><i class="fa fa-download"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">New update
                                                            was availabled</h4><span class="rich-list-subtitle">1 day ago</span>
                                                    </div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a><a href="index.html#" class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-success">
                                                            <div class="avatar-display"><i class="fa fa-asterisk"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">Your password
                                                            was changed</h4><span class="rich-list-subtitle">2 day ago</span>
                                                    </div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a><a href="index.html#" class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-label-info">
                                                            <div class="avatar-display"><i class="fa fa-user-plus"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content"><h4 class="rich-list-title">New account
                                                            has been registered</h4><span
                                                            class="rich-list-subtitle">5 day ago</span></div>
                                                    <div class="rich-list-append"><i class="caret mx-2"></i></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-flat-primary btn-icon" data-bs-toggle="dropdown"><i
                                        class="far fa-comments"></i>
                                    <div class="btn-marker"><i class="marker marker-dot text-primary"></i></div>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-wide dropdown-menu-animated overflow-hidden py-0">
                                    <div class="portlet portlet-scroll border-0">
                                        <div class="portlet-header portlet-header-bordered rounded-0">
                                            <div class="rich-list-item w-100 p-0">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-circle">
                                                        <div class="avatar-display"><img
                                                                src="assets/images/avatar/avatar-3.webp" alt="Avatar image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content"><h3 class="rich-list-title">Garrett
                                                        Winters</h3><span class="rich-list-subtitle">UX Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body" data-toggle="simplebar">
                                            <div class="chat">
                                                <div class="chat-item chat-item-start">
                                                    <div class="chat-content"><p
                                                            class="chat-bubble chat-bubble-primary">Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit. Unde, eius.</p>
                                                        <p class="chat-bubble chat-bubble-primary">Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit. Unde, eius.</p><span
                                                            class="chat-time">2 min ago</span></div>
                                                </div>
                                                <div class="chat-item chat-item-end">
                                                    <div class="chat-content"><p class="chat-bubble">Lorem ipsum dolor
                                                            sit amet, consectetur adipisicing elit. Unde, eius.</p><span
                                                            class="chat-time">1 min ago</span></div>
                                                </div>
                                                <div class="chat-item chat-item-start">
                                                    <div class="chat-content"><p
                                                            class="chat-bubble chat-bubble-primary">Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit. Unde, eius.</p><span
                                                            class="chat-time">2 min ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-footer portlet-footer-bordered rounded-0">
                                            <div class="input-group"><input type="text" class="form-control"
                                                                            placeholder="Type...">
                                                <button class="btn btn-primary btn-icon"><i
                                                        class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-flat-primary btn-icon" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-settings"><i class="far fa-list-alt"></i></button>
                            <button class="btn btn-flat-primary btn-icon" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-todo"><i class="far fa-calendar-alt"></i></button>
                            <div class="dropdown">
                                <button class="btn btn-flat-primary widget13" data-bs-toggle="dropdown">
                                    <div class="widget13-text">Hi <strong>User</strong></div>
                                    <div class="avatar avatar-info widget13-avatar">
                                        <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                    </div>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                    <div class="portlet border-0">
                                        <div class="portlet-header bg-primary rounded-0">
                                            <div class="rich-list-item w-100 p-0">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-label-light avatar-circle">
                                                        <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content"><h3 class="rich-list-title text-white">
                                                        Charlie Stone</h3><span class="rich-list-subtitle text-white">admin@blueupcode.com</span>
                                                </div>
                                                <div class="rich-list-append"><span
                                                        class="badge badge-label-light fs-6">9+</span></div>
                                            </div>
                                        </div>
                                        <div class="portlet-body p-0">
                                            <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                                <div class="grid-nav-row"><a href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                                                        <span class="grid-nav-content">Profile</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                                        <span class="grid-nav-content">Messages</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                                                        <span class="grid-nav-content">Activities</span></a></div>
                                                <div class="grid-nav-row"><a href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-calendar-check"></i>
                                                        </div>
                                                        <span class="grid-nav-content">Tasks</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                                                        <span class="grid-nav-content">Notes</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                                                        <span class="grid-nav-content">Notification</span></a></div>
                                            </div>
                                        </div>
                                        <div class="portlet-footer portlet-footer-bordered rounded-0">
                                            <button class="btn btn-label-danger">Sign out</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-holder header-holder-desktop">
                <div class="header-container container-fluid g-5"><h4 class="header-title">{{$titlePage}}</h4><i
                        class="header-divider"></i>
                    <div class="header-wrap header-wrap-block justify-content-start">
                        <div class="breadcrumb breadcrumb-transparent mb-0"><a href="{{route('dashboard.index')}}"
                                                                               class="breadcrumb-item">
                                <div class="breadcrumb-icon"><i data-feather="home"></i></div>
                                <span class="breadcrumb-text">Dashboard</span></a></div>
                    </div>
                    <div class="header-wrap">

                        <button class="btn btn-label-info btn-icon" id="fullscreen-trigger" data-bs-toggle="tooltip" title="Toggle fullscreen" data-bs-placement="left">
                            <i class="fa fa-expand fullscreen-icon-expand"></i>
                            <i class="fa fa-compress fullscreen-icon-compress"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="sticky-header" id="sticky-header-mobile">
                <div class="header-holder header-holder-mobile">
                    <div class="header-container container-fluid g-5">
                        <div class="header-wrap">
                            <button class="btn btn-flat-primary btn-icon" data-toggle="aside"><i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-wrap header-wrap-block justify-content-start px-3"><h4 class="header-brand">
                                Upmin</h4></div>
                        <div class="header-wrap hstack gap-2">
                            <button class="btn btn-flat-primary btn-icon" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-todo"><i class="far fa-calendar-alt"></i></button>
                            <div class="dropdown">
                                <button class="btn btn-flat-primary widget13" data-bs-toggle="dropdown">
                                    <div class="widget13-text">Hi <strong>User</strong></div>
                                    <div class="avatar avatar-info widget13-avatar">
                                        <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                    </div>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                    <div class="portlet border-0">
                                        <div class="portlet-header bg-primary rounded-0">
                                            <div class="rich-list-item w-100 p-0">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-label-light avatar-circle">
                                                        <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content"><h3 class="rich-list-title text-white">
                                                        Charlie Stone</h3><span class="rich-list-subtitle text-white">admin@blueupcode.com</span>
                                                </div>
                                                <div class="rich-list-append"><span
                                                        class="badge badge-label-light fs-6">9+</span></div>
                                            </div>
                                        </div>
                                        <div class="portlet-body p-0">
                                            <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                                <div class="grid-nav-row"><a href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                                                        <span class="grid-nav-content">Profile</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                                        <span class="grid-nav-content">Messages</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                                                        <span class="grid-nav-content">Activities</span></a></div>
                                                <div class="grid-nav-row"><a href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-calendar-check"></i>
                                                        </div>
                                                        <span class="grid-nav-content">Tasks</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                                                        <span class="grid-nav-content">Notes</span> </a><a
                                                        href="index.html#" class="grid-nav-item">
                                                        <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                                                        <span class="grid-nav-content">Notification</span></a></div>
                                            </div>
                                        </div>
                                        <div class="portlet-footer portlet-footer-bordered rounded-0">
                                            <button class="btn btn-label-danger">Sign out</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-holder header-holder-mobile">
                <div class="header-container container-fluid g-5">
                    <div class="header-wrap header-wrap-block justify-content-start w-100">
                        <div class="breadcrumb breadcrumb-transparent mb-0"><a href="index.html"
                                                                               class="breadcrumb-item">
                                <div class="breadcrumb-icon"><i data-feather="home"></i></div>
                                <span class="breadcrumb-text">Dashboard</span></a></div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="footer">
            <div class="container-fluid g-5">
                <div class="row g-3">
                    <div class="col-sm-6 text-center text-sm-start"><p class="mb-0"><i class="far fa-copyright"></i>
                            <span id="copyright-year"></span> Voice-X. All rights reserved</p></div>
                    <div class="col-sm-6 text-center text-sm-end"><p class="mb-0">Hand-crafted and made with <i
                                class="fa fa-heart text-danger"></i></p></div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="floating-btn floating-btn-end d-grid gap-2">
    <button class="btn btn-flat-primary btn-icon" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Change theme" id="theme-toggle"><i class="fa fa-moon"></i></button>
    <a class="btn btn-flat-primary btn-icon" data-bs-toggle="tooltip" data-bs-placement="right"
       title="Look documentation" href="https://docs.blueupcode.com/guide-html_v3-0-0.html" target="_blank"><i
            class="fa fa-book"></i></a></div>
<div class="offcanvas offcanvas-start" id="offcanvas-navigation">
    <div class="offcanvas-header"><h3 class="offcanvas-title">Navigation</h3>
        <button class="btn btn-label-danger btn-icon" data-bs-dismiss="offcanvas"><i class="fa fa-times"></i></button>
    </div>
    <div class="offcanvas-body px-0" data-simplebar data-simplebar-direction="ltr">
        <div class="menu">
            <div class="menu-item"><a href="index.html" data-menu-path="/index.html" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div>
                    <span class="menu-item-text">Dashboard</span>
                    <div class="menu-item-addon"><span class="badge badge-success">New</span></div>
                </a></div>
            <div class="menu-section"><h2 class="menu-section-text">Elements</h2></div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-palette"></i></div>
                    <span class="menu-item-text">Base</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="elements/base/accordion.html"
                                              data-menu-path="/elements/base/accordion.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Accordion</span></a></div>
                    <div class="menu-item"><a href="elements/base/alert.html" data-menu-path="/elements/base/alert.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Alert</span></a></div>
                    <div class="menu-item"><a href="elements/base/badge.html" data-menu-path="/elements/base/badge.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Badge</span></a></div>
                    <div class="menu-item"><a href="elements/base/breadcrumb.html"
                                              data-menu-path="/elements/base/breadcrumb.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Breadcrumb</span></a></div>
                    <div class="menu-item"><a href="elements/base/button.html"
                                              data-menu-path="/elements/base/button.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Button</span></a></div>
                    <div class="menu-item"><a href="elements/base/button-group.html"
                                              data-menu-path="/elements/base/button-group.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Button group</span></a></div>
                    <div class="menu-item"><a href="elements/base/card.html" data-menu-path="/elements/base/card.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Card</span></a></div>
                    <div class="menu-item"><a href="elements/base/color.html" data-menu-path="/elements/base/color.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Color</span></a></div>
                    <div class="menu-item"><a href="elements/base/dropdown.html"
                                              data-menu-path="/elements/base/dropdown.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Dropdown</span></a></div>
                    <div class="menu-item"><a href="elements/base/list-group.html"
                                              data-menu-path="/elements/base/list-group.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">List group</span></a></div>
                    <div class="menu-item"><a href="elements/base/marker.html"
                                              data-menu-path="/elements/base/marker.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Marker</span></a></div>
                    <div class="menu-item"><a href="elements/base/modal.html" data-menu-path="/elements/base/modal.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Modal</span></a></div>
                    <div class="menu-item"><a href="elements/base/nav.html" data-menu-path="/elements/base/nav.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Navigation</span></a></div>
                    <div class="menu-item"><a href="elements/base/offcanvas.html"
                                              data-menu-path="/elements/base/offcanvas.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Offcanvas</span></a></div>
                    <div class="menu-item"><a href="elements/base/pagination.html"
                                              data-menu-path="/elements/base/pagination.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Pagination</span></a></div>
                    <div class="menu-item"><a href="elements/base/placeholder.html"
                                              data-menu-path="/elements/base/placeholder.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Placeholder</span></a></div>
                    <div class="menu-item"><a href="elements/base/popover.html"
                                              data-menu-path="/elements/base/popover.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Popover</span></a></div>
                    <div class="menu-item"><a href="elements/base/progress.html"
                                              data-menu-path="/elements/base/progress.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Progress</span></a></div>
                    <div class="menu-item"><a href="elements/base/spinner.html"
                                              data-menu-path="/elements/base/spinner.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Spinner</span></a></div>
                    <div class="menu-item"><a href="elements/base/tab.html" data-menu-path="/elements/base/tab.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Tab</span></a></div>
                    <div class="menu-item"><a href="elements/base/table.html" data-menu-path="/elements/base/table.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Table</span></a></div>
                    <div class="menu-item"><a href="elements/base/tooltip.html"
                                              data-menu-path="/elements/base/tooltip.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Tooltip</span></a></div>
                    <div class="menu-item"><a href="elements/base/type.html" data-menu-path="/elements/base/type.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Typography</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-adjust"></i></div>
                    <span class="menu-item-text">Advanced</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="elements/advanced/avatar.html"
                                              data-menu-path="/elements/advanced/avatar.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Avatar</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/block-ui.html"
                                              data-menu-path="/elements/advanced/block-ui.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Block UI</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/carousel.html"
                                              data-menu-path="/elements/advanced/carousel.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Carousel</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/chat.html"
                                              data-menu-path="/elements/advanced/chat.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Chat</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/context-menu.html"
                                              data-menu-path="/elements/advanced/context-menu.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Context menu</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/grid-nav.html"
                                              data-menu-path="/elements/advanced/grid-nav.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Grid nav</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/rich-list.html"
                                              data-menu-path="/elements/advanced/rich-list.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Rich list</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/sortable.html"
                                              data-menu-path="/elements/advanced/sortable.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Sortable</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/sweet-alert.html"
                                              data-menu-path="/elements/advanced/sweet-alert.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Sweet alert</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/timeline.html"
                                              data-menu-path="/elements/advanced/timeline.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Timeline</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/toastr.html"
                                              data-menu-path="/elements/advanced/toastr.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Toastr</span></a></div>
                    <div class="menu-item"><a href="elements/advanced/treeview.html"
                                              data-menu-path="/elements/advanced/treeview.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Treeview</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-icons"></i></div>
                    <span class="menu-item-text">Icons</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="icons/fontawesome.html" data-menu-path="/icons/fontawesome.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Font Awesome</span></a></div>
                    <div class="menu-item"><a href="icons/feather.html" data-menu-path="/icons/feather.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Feather</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-window-restore"></i></div>
                    <span class="menu-item-text">Portlet</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="portlet/base.html" data-menu-path="/portlet/base.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Base</span></a></div>
                    <div class="menu-item"><a href="portlet/drag.html" data-menu-path="/portlet/drag.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Draggable</span></a></div>
                    <div class="menu-item"><a href="portlet/tab.html" data-menu-path="/portlet/tab.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Tab</span></a></div>
                    <div class="menu-item"><a href="portlet/tool.html" data-menu-path="/portlet/tool.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Tool</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-shapes"></i></div>
                    <span class="menu-item-text">Widget</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="widgets/general.html" data-menu-path="/widgets/general.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">General</span></a></div>
                    <div class="menu-item"><a href="widgets/chart.html" data-menu-path="/widgets/chart.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Chart</span></a></div>
                </div>
            </div>
            <div class="menu-section"><h2 class="menu-section-text">Data</h2></div>
            <div class="menu-item"><a href="chart/apex-chart.html" data-menu-path="/chart/apex-chart.html"
                                      class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-chart-pie"></i></div>
                    <span class="menu-item-text">Charts</span></a></div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-table"></i></div>
                    <span class="menu-item-text">Datatable</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Basic</span>
                            <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                        </button>
                        <div class="menu-submenu">
                            <div class="menu-item"><a href="datatable/basic/base.html"
                                                      data-menu-path="/datatable/basic/base.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Base</span></a></div>
                            <div class="menu-item"><a href="datatable/basic/footer.html"
                                                      data-menu-path="/datatable/basic/footer.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Footer</span></a></div>
                            <div class="menu-item"><a href="datatable/basic/scrollable.html"
                                                      data-menu-path="/datatable/basic/scrollable.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Scrollable</span></a></div>
                            <div class="menu-item"><a href="datatable/basic/pagination.html"
                                                      data-menu-path="/datatable/basic/pagination.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Pagination</span></a></div>
                            <div class="menu-item"><a href="datatable/basic/menu.html"
                                                      data-menu-path="/datatable/basic/menu.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Length menu</span></a></div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Advanced</span>
                            <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                        </button>
                        <div class="menu-submenu">
                            <div class="menu-item"><a href="datatable/advanced/column-rendering.html"
                                                      data-menu-path="/datatable/advanced/column-rendering.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Column rendering</span></a></div>
                            <div class="menu-item"><a href="datatable/advanced/column-visibility.html"
                                                      data-menu-path="/datatable/advanced/column-visibility.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Column visibility</span></a></div>
                            <div class="menu-item"><a href="datatable/advanced/footer-callback.html"
                                                      data-menu-path="/datatable/advanced/footer-callback.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Footer callback</span></a></div>
                            <div class="menu-item"><a href="datatable/advanced/multiple-controls.html"
                                                      data-menu-path="/datatable/advanced/multiple-controls.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Multiple controls</span></a></div>
                            <div class="menu-item"><a href="datatable/advanced/row-callback.html"
                                                      data-menu-path="/datatable/advanced/row-callback.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Row callback</span></a></div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Source</span>
                            <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                        </button>
                        <div class="menu-submenu">
                            <div class="menu-item"><a href="datatable/source/html.html"
                                                      data-menu-path="/datatable/source/html.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">HTML</span></a></div>
                            <div class="menu-item"><a href="datatable/source/javascript.html"
                                                      data-menu-path="/datatable/source/javascript.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Javascript</span></a></div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <button class="menu-item-link menu-item-toggle"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Extension</span>
                            <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                        </button>
                        <div class="menu-submenu">
                            <div class="menu-item"><a href="datatable/extension/autofill.html"
                                                      data-menu-path="/datatable/extension/autofill.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Auto fill</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/buttons.html"
                                                      data-menu-path="/datatable/extension/buttons.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Buttons</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/column-reorder.html"
                                                      data-menu-path="/datatable/extension/column-reorder.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Column reorder</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/fixed-header.html"
                                                      data-menu-path="/datatable/extension/fixed-header.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Fixed header</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/fixed-column.html"
                                                      data-menu-path="/datatable/extension/fixed-column.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Fixed column</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/key-table.html"
                                                      data-menu-path="/datatable/extension/key-table.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Key table</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/row-group.html"
                                                      data-menu-path="/datatable/extension/row-group.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Row group</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/row-reorder.html"
                                                      data-menu-path="/datatable/extension/row-reorder.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Row reorder</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/scroller.html"
                                                      data-menu-path="/datatable/extension/scroller.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Scroller</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/search-panes.html"
                                                      data-menu-path="/datatable/extension/search-panes.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Search panes</span></a></div>
                            <div class="menu-item"><a href="datatable/extension/select.html"
                                                      data-menu-path="/datatable/extension/select.html"
                                                      class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                        class="menu-item-text">Select</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-section"><h2 class="menu-section-text">Form</h2></div>
            <div class="menu-item"><a href="form/base.html" data-menu-path="/form/base.html" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-dice"></i></div>
                    <span class="menu-item-text">Base</span></a></div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-fill-drip"></i></div>
                    <span class="menu-item-text">Advanced</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="form/advanced/autosize.html"
                                              data-menu-path="/form/advanced/autosize.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Autosize</span></a></div>
                    <div class="menu-item"><a href="form/advanced/bs-maxlength.html"
                                              data-menu-path="/form/advanced/bs-maxlength.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Bootstrap maxlength</span></a></div>
                    <div class="menu-item"><a href="form/advanced/clipboard.html"
                                              data-menu-path="/form/advanced/clipboard.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Clipboard</span></a></div>
                    <div class="menu-item"><a href="form/advanced/datepicker.html"
                                              data-menu-path="/form/advanced/datepicker.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Date picker</span></a></div>
                    <div class="menu-item"><a href="form/advanced/datetimepicker.html"
                                              data-menu-path="/form/advanced/datetimepicker.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Date time picker</span></a></div>
                    <div class="menu-item"><a href="form/advanced/daterangepicker.html"
                                              data-menu-path="/form/advanced/daterangepicker.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Date range picker</span></a></div>
                    <div class="menu-item"><a href="form/advanced/inputmask.html"
                                              data-menu-path="/form/advanced/inputmask.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Input mask</span></a></div>
                    <div class="menu-item"><a href="form/advanced/select2.html"
                                              data-menu-path="/form/advanced/select2.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Select2</span></a></div>
                    <div class="menu-item"><a href="form/advanced/slider.html"
                                              data-menu-path="/form/advanced/slider.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Slider</span></a></div>
                    <div class="menu-item"><a href="form/advanced/touchspin.html"
                                              data-menu-path="/form/advanced/touchspin.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Touchspin</span></a></div>
                    <div class="menu-item"><a href="form/advanced/typeahead.html"
                                              data-menu-path="/form/advanced/typeahead.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Typeahead</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-pencil-ruler"></i></div>
                    <span class="menu-item-text">Editor</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="editor/basic.html" data-menu-path="/editor/basic.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Basic</span></a></div>
                    <div class="menu-item"><a href="editor/bubble.html" data-menu-path="/editor/bubble.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Bubble</span></a></div>
                    <div class="menu-item"><a href="editor/complex.html" data-menu-path="/editor/complex.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Complex</span></a></div>
                </div>
            </div>
            <div class="menu-item"><a href="form/group.html" data-menu-path="/form/group.html" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-th-list"></i></div>
                    <span class="menu-item-text">Group</span></a></div>
            <div class="menu-item"><a href="form/layout.html" data-menu-path="/form/layout.html" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-ruler-combined"></i></div>
                    <span class="menu-item-text">Layout</span></a></div>
            <div class="menu-item"><a href="form/validation.html" data-menu-path="/form/validation.html"
                                      class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-check"></i></div>
                    <span class="menu-item-text">Validation</span></a></div>
            <div class="menu-section"><h2 class="menu-section-text">Pages</h2></div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-unlock-alt"></i></div>
                    <span class="menu-item-text">Login</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="pages/login/login-1.html" data-menu-path="/pages/login/login-1.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Login 1</span></a></div>
                    <div class="menu-item"><a href="pages/login/login-2.html" data-menu-path="/pages/login/login-2.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Login 2</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-user-plus"></i></div>
                    <span class="menu-item-text">Register</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="pages/register/register-1.html"
                                              data-menu-path="/pages/register/register-1.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Register 1</span></a></div>
                    <div class="menu-item"><a href="pages/register/register-2.html"
                                              data-menu-path="/pages/register/register-2.html" class="menu-item-link"><i
                                class="menu-item-bullet"></i> <span class="menu-item-text">Register 2</span></a></div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-unlink"></i></div>
                    <span class="menu-item-text">Error</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="pages/error/error-1.html" data-menu-path="/pages/error/error-1.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Error 1</span></a></div>
                    <div class="menu-item"><a href="pages/error/error-2.html" data-menu-path="/pages/error/error-2.html"
                                              class="menu-item-link"><i class="menu-item-bullet"></i> <span
                                class="menu-item-text">Error 2</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" id="offcanvas-settings">
    <div class="offcanvas-header"><h3 class="offcanvas-title">Settings</h3>
        <button class="btn btn-label-danger btn-icon" data-bs-dismiss="offcanvas"><i class="fa fa-times"></i></button>
    </div>
    <div class="offcanvas-body" data-simplebar data-simplebar-direction="ltr">
        <div class="portlet">
            <div class="portlet-header portlet-header-bordered">
                <div class="portlet-icon"><i class="fa fa-bolt"></i></div>
                <h3 class="portlet-title">Performance</h3></div>
            <div class="portlet-body">
                <div class="d-grid gap-3">
                    <div class="widget4">
                        <div class="widget4-group">
                            <div class="widget4-display"><h6 class="widget4-subtitle">CPU Load</h6></div>
                            <div class="widget4-addon"><h6 class="widget4-subtitle text-info">60%</h6></div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="widget4">
                        <div class="widget4-group">
                            <div class="widget4-display"><h6 class="widget4-subtitle">CPU Temparature</h6></div>
                            <div class="widget4-addon"><h6 class="widget4-subtitle text-success">42°</h6></div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="widget4">
                        <div class="widget4-group">
                            <div class="widget4-display"><h6 class="widget4-subtitle">RAM Usage</h6></div>
                            <div class="widget4-addon"><h6 class="widget4-subtitle text-danger">6,532 MB</h6></div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portlet">
            <div class="portlet-header"><h3 class="portlet-title">Customer care</h3></div>
            <div class="portlet-body">
                <div class="d-grid gap-1">
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-1"> <label
                            class="form-check-label" for="offcanvas-setting-1">Enable notifications</label></div>
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-2" checked="checked">
                        <label class="form-check-label" for="offcanvas-setting-2">Enable case tracking</label></div>
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-3"> <label
                            class="form-check-label" for="offcanvas-setting-3">Support portal</label></div>
                </div>
            </div>
        </div>
        <div class="portlet">
            <div class="portlet-header"><h3 class="portlet-title">Reports</h3></div>
            <div class="portlet-body">
                <div class="d-grid gap-1">
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-4"> <label
                            class="form-check-label" for="offcanvas-setting-4">Generate reports</label></div>
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-5" checked="checked">
                        <label class="form-check-label" for="offcanvas-setting-5">Enable report export</label></div>
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-6"> <label
                            class="form-check-label" for="offcanvas-setting-6">Allow data</label></div>
                </div>
            </div>
        </div>
        <div class="portlet">
            <div class="portlet-header"><h3 class="portlet-title">Projects</h3></div>
            <div class="portlet-body">
                <div class="d-grid gap-1">
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-7"> <label
                            class="form-check-label" for="offcanvas-setting-7">Enable create projects</label></div>
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-8" checked="checked">
                        <label class="form-check-label" for="offcanvas-setting-8">Enable custom projects</label></div>
                    <div class="form-check form-check-lg form-switch"><input type="checkbox" class="form-check-input"
                                                                             id="offcanvas-setting-9"> <label
                            class="form-check-label" for="offcanvas-setting-9">Enable project review</label></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" id="offcanvas-todo">
    <div class="offcanvas-header"><h3 class="offcanvas-title">May 14, 2020</h3>
        <button class="btn btn-label-danger btn-icon" data-bs-dismiss="offcanvas"><i class="fa fa-times"></i></button>
    </div>
    <div class="offcanvas-body" data-simplebar data-simplebar-direction="ltr">
        <div class="portlet">
            <div class="portlet-header portlet-header-bordered">
                <div class="portlet-icon"><i class="fa fa-tasks"></i></div>
                <h3 class="portlet-title">Upcoming events</h3></div>
            <div class="portlet-body">
                <div class="timeline rich-list-bordered">
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                        <div class="timeline-content">
                            <div class="rich-list-item">
                                <div class="rich-list-content"><h5 class="rich-list-title">12:00</h5>
                                    <p class="rich-list-paragraph">Donec laoreet fringilla justo a pellentesque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                        <div class="timeline-content">
                            <div class="rich-list-item">
                                <div class="rich-list-content"><h5 class="rich-list-title">13:20</h5>
                                    <p class="rich-list-paragraph">Nunc quis massa nec enim</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                        <div class="timeline-content">
                            <div class="rich-list-item">
                                <div class="rich-list-content"><h5 class="rich-list-title">14:00</h5>
                                    <p class="rich-list-paragraph">Praesent sit amet</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portlet">
            <div class="portlet-header portlet-header-bordered">
                <div class="portlet-icon"><i class="fa fa-users"></i></div>
                <h3 class="portlet-title">Contacts</h3>
                <div class="portlet-addon">
                    <button class="btn btn-label-primary btn-icon"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="portlet-body p-0">
                <div class="rich-list rich-list-flush rich-list-action"><a href="index.html#" class="rich-list-item">
                        <div class="rich-list-prepend">
                            <div class="avatar avatar-circle">
                                <div class="avatar-addon avatar-addon-top">
                                    <div class="avatar-icon avatar-icon-info"><i class="fa fa-thumbtack"></i></div>
                                </div>
                                <div class="avatar-display"><img src="assets/images/avatar/avatar-3.webp"
                                                                 alt="Avatar image"></div>
                                <div class="avatar-addon avatar-addon-bottom"><i
                                        class="marker marker-dot text-secondary"></i></div>
                            </div>
                        </div>
                        <div class="rich-list-content"><h4 class="rich-list-title">Charlie Stone</h4><span
                                class="rich-list-subtitle">Art Director</span></div>
                        <div class="rich-list-append flex-column align-items-end"><span
                                class="text-muted text-nowrap">1 min</span> <span
                                class="badge badge-success rounded-pill">1</span></div>
                    </a><a href="index.html#" class="rich-list-item">
                        <div class="rich-list-prepend">
                            <div class="avatar avatar-circle">
                                <div class="avatar-display"><img src="assets/images/avatar/avatar-5.webp"
                                                                 alt="Avatar image"></div>
                                <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="rich-list-content"><h4 class="rich-list-title">Freddie Stevens</h4><span
                                class="rich-list-subtitle">Journalist</span></div>
                        <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">2 hour</span>
                            <span class="badge badge-success rounded-pill">12</span></div>
                    </a><a href="index.html#" class="rich-list-item">
                        <div class="rich-list-prepend">
                            <div class="avatar avatar-circle">
                                <div class="avatar-display"><img src="assets/images/avatar/avatar-2.webp"
                                                                 alt="Avatar image"></div>
                                <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="rich-list-content"><h4 class="rich-list-title">Tyler Clark</h4><span
                                class="rich-list-subtitle">Programmer</span></div>
                        <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">5 hour</span>
                        </div>
                    </a><a href="index.html#" class="rich-list-item">
                        <div class="rich-list-prepend">
                            <div class="avatar avatar-circle">
                                <div class="avatar-addon avatar-addon-top">
                                    <div class="avatar-icon avatar-icon-success"><i class="fa fa-check"></i></div>
                                </div>
                                <div class="avatar-display"><img src="assets/images/avatar/avatar-4.webp"
                                                                 alt="Avatar image"></div>
                                <div class="avatar-addon avatar-addon-bottom"><i
                                        class="marker marker-dot text-secondary"></i></div>
                            </div>
                        </div>
                        <div class="rich-list-content"><h4 class="rich-list-title">Darcy Harrison</h4><span
                                class="rich-list-subtitle">Internet Marketer</span></div>
                        <div class="rich-list-append flex-column align-items-end"><span
                                class="text-muted text-nowrap">1 day</span> <span
                                class="badge badge-success rounded-pill">2</span></div>
                    </a><a href="index.html#" class="rich-list-item">
                        <div class="rich-list-prepend">
                            <div class="avatar avatar-circle">
                                <div class="avatar-display"><img src="assets/images/avatar/avatar-7.webp"
                                                                 alt="Avatar image"></div>
                                <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="rich-list-content"><h4 class="rich-list-title">Victor Payne</h4><span
                                class="rich-list-subtitle">Accountant</span></div>
                        <div class="rich-list-append flex-column align-items-end"><span
                                class="text-muted text-nowrap">1 day</span> <span
                                class="badge badge-success rounded-pill">5</span></div>
                    </a><a href="index.html#" class="rich-list-item">
                        <div class="rich-list-prepend">
                            <div class="avatar avatar-circle">
                                <div class="avatar-display"><img src="assets/images/avatar/avatar-9.webp"
                                                                 alt="Avatar image"></div>
                                <div class="avatar-addon avatar-addon-bottom"><i
                                        class="marker marker-dot text-secondary"></i></div>
                            </div>
                        </div>
                        <div class="rich-list-content"><h4 class="rich-list-title">Alberta Harris</h4><span
                                class="rich-list-subtitle">UI Designer</span></div>
                        <div class="rich-list-append flex-column align-items-end"><span
                                class="text-muted text-nowrap">2 day</span> <span
                                class="badge badge-success rounded-pill">4</span></div>
                    </a></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/build/scripts/mandatory.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/build/scripts/core.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/build/scripts/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/utilities/sticky-header.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/utilities/copyright-year.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/utilities/theme-switcher.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/utilities/tooltip-popover.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/utilities/dropdown-scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/utilities/fullscreen-trigger.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/app/pages/home.js')}}"></script>

@if($currentUri == 'numbers')
    <script type="text/javascript" src="{{asset('assets/app/pages/form/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/app/pages/form/select2.js')}}"></script>
@endif

<script type="text/javascript" src="{{asset('assets/app/pages/elements/block-ui.js')}}"></script>

</body>
</html>
